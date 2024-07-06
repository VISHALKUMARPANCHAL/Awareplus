document.getElementById('loginEmail').addEventListener('input', function () {
    document.getElementById('loginEmail').style.borderBottom = "3px solid black";
});
document.getElementById('loginEmail').addEventListener('invalid', function () {
    document.getElementById('loginEmail').style.borderBottom = "3px solid red";
});
document.getElementById('loginPassword').addEventListener('input', function () {
    document.getElementById('loginPassword').style.borderBottom = "3px solid black";
});
document.getElementById('loginPassword').addEventListener('invalid', function () {
    document.getElementById('loginPassword').style.borderBottom = "3px solid red";
});
document.getElementById('cpch').addEventListener('input', function () {
    document.getElementById('cpch').style.borderBottom = "2px solid black";
});
document.getElementById('cpch').addEventListener('invalid', function () {
    document.getElementById('cpch').style.borderBottom = "2px solid red";
});




document.getElementById('ct2').addEventListener('click', function () {
    window.location.href = 'home.html';
});
document.getElementById("togglePassword").addEventListener("click", function () {
    const password = document.getElementById("loginPassword");
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.classList.toggle("bi-eye");
});

document.getElementById("signupBtn").addEventListener("click", function () {
    window.location.href = "registration.html";
});
document.getElementById("fps").addEventListener("click", function () {
    window.location.href = "forget.html";
});
document.getElementById("logologin").addEventListener("click", function () {
    window.location.href = "home.html";
});
document.getElementById("titlelogin").addEventListener("click", function () {
    window.location.href = "home.html";
});
var y = document.getElementById("forgetdiv");
