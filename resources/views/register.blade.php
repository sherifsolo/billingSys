<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <tittle>wifi mashinani</tittle>
    <style>
        body{
            background-color: black;
            color:aqua;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h1{
            text-decoration:dotted;
        }
        .register{
            display:flex;
            background-color: grey;
            font:italic;
            font-family: Arial, Helvetica, sans-serif;
            width: 400px;
            height: 200px;
            padding: 20px;
            margin: 10px;
            border: 2px solid aquamarine;
            justify-content:space-around;
            align-items:center;
        }
        h2{
            text-decoration:underline;
        }
        button{
            align-self:center;
        }
    </style>
</head>
<body>
    <div>
        <h1>WIFI MASHINANI</h1>
    </div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
     <div>
        <h2>Sign up</h2>
    </div>
    <div class="register">
        <form action="/register" method="POST">
            @csrf
            <label for="email">email</label>
            <input name="email" type="text" placeholder="example111@example.com">
            <br><br>
            </label><label for="password"></label>password</label>
            <input name="password" type="password">
            <br><br>
            <button>signup</button>
        </form>
    </div>
    <div>
        <a href="/login">log in instead</a>
     </div>
</body>
<html>