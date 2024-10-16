function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === "" || password === "") {
        alert("Username and Password must be filled out");
        return false;
    }

    // Placeholder for further login logic (e.g., validation with server)
    alert("Login successful");
    return true;
}
