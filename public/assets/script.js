//  View Passwords
function showpassword() {
    var passwordField = document.getElementById("password");
    var eye = document.getElementById("eye");
    var view = document.getElementById("view");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        eye.className = "fa fa-eye text-dark";
        view.className = "btn btn-primary shadow";
    } else {
        passwordField.type = "password";
        eye.className = "fa fa-eye-slash text-dark";
        view.className = "btn btn-primary shadow";
    }
}

// admin setting
