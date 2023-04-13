var ms = document.getElementById("mySidebar");
var mn = document.getElementById("main");
var res = screen.width;
var ban = false;

if (res > 767) {
    side()
}

function side() {
    if (ban) {
        closeNav();
        ban = false;
    } else {
        openNav();
        ban = true;
    }
}

function openNav() {
    if (ms) 
        ms.classList.add("openside");
    if (mn) 
        mn.classList.add("openmain");
}

function closeNav() {
    if (ms) 
        ms.classList.remove("openside");
    if (mn) 
        mn.classList.remove("openmain");
}

$('#logout').on('click', function () { // # -> Llamada por id
    if (res < 767)
        side()
    Swal.fire({
        background: '#131414',
        color: 'white',
        title: 'Cerrar Sesión',
        icon: 'info',
        text: "¿Seguro que quieres cerrar sesión?",
        showCancelButton: true,
        confirmButtonColor: '#46a525',
        cancelButtonColor: '#d33',
        cancelButtonText: "Cancelar",
        confirmButtonText: 'Ok',
        showClass: {
            popup: 'animate__animated animate__bounceInUp'
        },
        hideClass: {
            popup: 'animate__animated animate__bounceOutDown'
        },
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../views/login.html";
        }
    })
});