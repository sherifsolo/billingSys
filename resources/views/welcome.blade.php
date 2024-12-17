<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
            <style>
               body{
                    display: flex;
                    align-items:center;
                    justify-content: center;
                    background-color: black;
                    
               }
               h1{
                color:aqua;
                font:bold;
               }
                .login{
                    display: flex;
                    align-items:center;
                    justify-content: center;
                    background-color: black;
                    margin: 50px;
                    color:cornflowerblue;
                    border: 2px solid black;
                    padding: 5px;
                    width: 400px;
                    height: 500px;
                    

                }
            </style>
     
    </head>
    <body>
        <h1>login</h1>
       <div class="login">
        <form action="/login">
            <label for="loginUsename">username</label>
            <input name="loginUsername" placeholder="example1111@example.com"type="text"> </input>
            <br><br>
            <label for="loginPassword">password</label>
            <input name="loginPassword" type="password" ></input>
            <button>login</button>
        </form>
       </div>
    </body>
</html>
