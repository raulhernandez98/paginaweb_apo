document.getElementById("formRegistro").addEventListener("submit", function(e) {
    e.preventDefault(); // Evita que recargue la página

    let formData = new FormData(this);

    fetch("modelo/registro_medico.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json()) // esperamos JSON de respuesta
    .then(data => {
        if (data.status === "success") {
            Swal.fire({
                icon: "success",
                title: "Registro exitoso",
                text: data.message
            });
            document.getElementById("formRegistro").reset(); // limpia el formulario
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



