// Validate the Sign-Up form
function validateSignUpForm() {
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (username === "" || email === "" || password === "" || confirmPassword === "") {
        alert("All fields must be filled out");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }

    // Placeholder for further sign-up logic (e.g., saving user data)
    alert("Sign-up successful");
    return true;
}
