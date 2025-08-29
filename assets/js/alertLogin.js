document.getElementById("formLogin").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("modelo/login_medico.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === "success") {
            Swal.fire({
                icon: "success",
                title: "Bienvenido",
                text: data.message,
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                // Redirigir después de éxito
                window.location.href = "./miperfil.php"; 
            });
        } else {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: data.message
            });
        }
    })
    .catch(err => {
        Swal.fire({
            icon: "error",
            title: "Error inesperado",
            text: err
        });
    });
});