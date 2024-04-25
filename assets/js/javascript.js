function mostrar_sms_email() {
    var message = document.getElementById("copiedMessage");
    var dato = document.getElementById("correo");

    dato.select();
    // dato.select();
    document.execCommand("Copy");

    message.style.display = "block";
    setTimeout(function () {
        message.style.display = "none";
    }, 2000);
}