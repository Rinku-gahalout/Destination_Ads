<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login</title>

    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e293b, #374151, #4b5563);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container */
        .container {
            display: flex;
            width: 90%;
            max-width: 900px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            height: 500px;
        }

        /* Left Section: Image */
        .left-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #1e293b;
        }

        .left-section img {
            /* width: 100%; */
            /*height: 100%;*/
            object-fit: cover;
        }

        /* Right Section: Login Form */
        .right-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            border-left: 5px solid #2563eb;
            padding: 2rem;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Logo */
        .logo {
            width: 200px;
            margin-bottom: 5px;
        }
       

        h2 {
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #1e293b;
        }

        /* Error Message Styling */
        .error-message {
            background: #ff4c4c;
            color: white;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            font-size: 14px;
            display: none;
        }

        /* Input Fields */
        input {
            width: 100%;
            padding: 14px;
            margin: 12px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
            outline: none;
            transition: 0.3s;
        }

        input::placeholder {
            color: #888;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 8px rgba(37, 99, 235, 0.5);
        }

        /* Neon Glow Button */
        .login-button {
            background: #2563eb;
            color: white;
            font-weight: bold;
            padding: 14px;
            width: 100%;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 0px 10px rgba(37, 99, 235, 0.8);
        }

        .login-button:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 20px rgba(37, 99, 235, 1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
            }
            .left-section {
                height: 250px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Left Section: Image -->
        <div class="left-section">
            <img src="{{ asset('images/dd 1.png') }}" alt="Admin Image">
        </div>
        <!-- Right Section: Login Form -->
        <div class="right-section">
        <div class="login-container">

        {{-- Session Messages --}}
            @include('wl-admin.layouts.sessionmessage')

                <img src="{{ asset('images/dd 1.png') }}" alt="Logo" class="logo">
                <h2>Admin Login</h2>


                <!-- Error Message -->
                @if(session('error'))
                    <div class="error-message" id="errorMessage">{{ session('error') }}</div>
                @endif

                <form id="loginForm" method="POST" action="{{route('admin.login.authentication')}}">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror    

                    <input type="password" name="password" placeholder="Password" required>
                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    <button type="submit" class="login-button">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>