document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('errorMessage');

    if (username === 'admin' && password === 'admin123') {
        alert('Login successful!');
        errorMessage.textContent = '';
        // Redirigir a otra página o realizar otras acciones
    } else {
        errorMessage.textContent = 'Invalid username or password';
    }
});
