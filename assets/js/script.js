import KEYS from "./Keys.js"

const $d = document;
const $plans = $d.getElementById("plans");
const $cardTemplate = $d.getElementById("card-template").content;
const $fragment = $d.createDocumentFragment();
const options = { headers: { Authorization: `Bearer ${KEYS.secret}` } };

//Petición a la API de Stripe
Promise.all([
  fetch("https://api.stripe.com/v1/products", options),
  fetch("https://api.stripe.com/v1/prices", options)
])
.then(responses => Promise.all(responses.map(res => res.json())))

.then(json => {
  const products = json[0].data;
  const prices = json[1].data;

  prices.forEach(price => {
    const product = products.find(p => p.id === price.product);
    const $clone = $d.importNode($cardTemplate, true);

    // nombre e imagen
    $clone.querySelector(".nombre-producto").textContent = product.name;
    $clone.querySelector(".imagen-producto").src = product.images[0] || "";
    $clone.querySelector(".imagen-producto").alt = product.name;

    // precio y frecuencia
    $clone.querySelector(".precio-producto").textContent = `$ ${(price.unit_amount / 100).toFixed(2)}`;

    // asignamos el id del precio al UL
    $clone.querySelector("ul").setAttribute("data-price", price.id);

    $fragment.appendChild($clone);
  });

  $plans.appendChild($fragment);
})
.catch(error => {
  let message = error.statusText || "Ocurrió un error en la petición";
  $plans.innerHTML = `Error: ${error.status}: ${message}`;
});

// Evento de click para los botones de pago
$d.addEventListener("click", e => {
  if (e.target.matches(".btn-pago")) {
    let priceId = e.target.closest("ul").getAttribute("data-price");

    Stripe(KEYS.public).redirectToCheckout({
      lineItems: [{
        price: priceId,
        quantity: 1
      }],
      mode: "subscription",
      successUrl: "http://localhost/apo/success.html",
      cancelUrl: "http://localhost/apo/cancel.html"
    })
    .then(res => {
      if (res.error) {
        $plans.insertAdjacentHTML("afterend", `<p>${res.error.message}</p>`);
      }
    });
  }
});
