@extends('adminlte::page')

@section('title', 'Login')

@section('content_header')
    <h1>Login</h1>
@stop

@section('content')
    <div class="login-container">
        <form id="loginForm">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p id="errorMessage" class="error-message"></p>
        </form>
    </div>
@stop

@section('css')
    <style>
        body {
            background-color: #f0f0f0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            text-align: center;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
@stop

@section('js')
    <script>
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
    </script>
@stop
