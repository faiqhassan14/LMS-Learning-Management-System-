<x-layout>
    <x-toast />
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form {
            width: 450px;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
            border-radius: 12px;
            padding: 2rem;
        }

        .inputs {
            width: 100%;
            margin-bottom: 15px;
        }

        .inputs input {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
        }

        .inputs label {
            font-size: 1.4rem;
            color: #6F42C1;
        }
        button {
            padding: 12px;
            color: white;
            background-color: #6F42C1;
            border: none;
            display: block;
            margin: auto;
            width: 100%;
            border-radius: 6px;
            font-size: 1.2rem;
            cursor: pointer;
        }

    </style>

    <form action="/user/login" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form">
            <div class="inputs">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email...">
            </div>

            <div class="inputs">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password...">
            </div>
            <button>Sign In</button>
        </div>
    </form>
</x-layout>
