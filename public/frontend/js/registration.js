
document.getElementById('name').addEventListener('input', function () {
    document.getElementById('name').style.borderBottom = "3px solid black";
});
document.getElementById('name').addEventListener('invalid', function () {
    document.getElementById('name').style.borderBottom = "3px solid red";
});

document.getElementById('loginEmail').addEventListener('input', function () {
    document.getElementById('loginEmail').style.borderBottom = "3px solid black";
});
document.getElementById('loginEmail').addEventListener('invalid', function () {
    document.getElementById('loginEmail').style.borderBottom = "3px solid red";
});

document.getElementById('mobileno').addEventListener('input', function () {
    document.getElementById('mobileno').style.borderBottom = "3px solid black";
});
document.getElementById('mobileno').addEventListener('invalid', function () {
    document.getElementById('mobileno').style.borderBottom = "3px solid red";
});

document.getElementById('address').addEventListener('input', function () {
    document.getElementById('address').style.borderBottom = "3px solid black";
});
document.getElementById('address').addEventListener('invalid', function () {
    document.getElementById('address').style.borderBottom = "3px solid red";
});

document.getElementById('loginPassword').addEventListener('input', function () {
    document.getElementById('loginPassword').style.borderBottom = "3px solid black";
});
document.getElementById('loginPassword').addEventListener('invalid', function () {
    document.getElementById('loginPassword').style.borderBottom = "3px solid red";
});

document.getElementById('confirmPassword').addEventListener('input', function () {
    document.getElementById('confirmPassword').style.borderBottom = "3px solid black";
});
document.getElementById('confirmPassword').addEventListener('invalid', function () {
    document.getElementById('confirmPassword').style.borderBottom = "3px solid red";
});

document.getElementById('dob').addEventListener('input', function () {
    document.getElementById('dob').style.borderBottom = "3px solid black";
});
document.getElementById('dob').addEventListener('invalid', function () {
    document.getElementById('dob').style.borderBottom = "3px solid red";
});





document.getElementById('ct2').addEventListener('click', function () {
    window.location.href = 'home.html';
});
const button = document.querySelector(".showButton");
const initialBox = document.getElementById('topbar');
document.getElementById("loginBtn").addEventListener("click", function () {
    const fullName = document.getElementById("name").value;
    const email = document.getElementById("loginEmail").value;
    const mobile = document.getElementById("mobileno").value;
    const dob = document.getElementById("dob").value;
    const address = document.getElementById("address").value;
    const password = document.getElementById("loginPassword").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    let check = document.getElementById("tac").checked;
    if (password != confirmPassword) {
        alert("password and confirmpassword doesn't match");
    } else if (fullName !== "" && email !== "" && mobile !== "" && dob !== "" && address !== "" && password !== "" && confirmPassword !== "" && check == true) {
        var loader = document.getElementById("load");
        loader.style.display = "block";
        document.getElementById("loginBtn").style.display = "none";
    }
});




document.getElementById("signupBtn").addEventListener("click", function () {
    window.location.href = "login.html";
});



document.getElementById("motp").style.display = "none";
document.getElementById("v4btn").style.display = "none";
document.getElementById("ctnr1").style.display = "none";


document.getElementById('ct2').addEventListener('click', function () {
    window.location.href = 'home.html';
});