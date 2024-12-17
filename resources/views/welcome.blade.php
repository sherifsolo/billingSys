<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wifi mashinani</title>

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
                    flex-direction:column;
                    color:aqua;
                    font-family:Arial, Helvetica, sans-serif;          
               }
               h1{
                text-decoration:dotted;
                font:bold;
               }
               h2{
                text-decoration:underline;
               }
                .login{
                    display: flex;
                    align-items:center;
                    justify-content: center;
                    background-color: black;
                    margin: 10px;
                    color:cornflowerblue;
                    border: 2px solid aquamarine;
                    padding: 5px;
                    width: 400px;
                    height: 200px;
                }
                button{
                    align-self:center;
                }
            </style>
     
    </head>
    <body>
        <div><h1>WIFI MASHINANI</h1></div>
        <div></div>

        <h2>login</h2>
       <div class="login">
            <!-- add javascript to encrypt password during transit-->
        <form action="/login" method="POST">
            @csrf
            <label for="loginUsename">username</label>
            <input name="loginUsername" placeholder="example1111@example.com"type="text"> </input>
            <br><br>
            <label for="loginPassword">password</label>
            <input name="loginPassword" type="password" ></input>
            <br><br>
            <button>login</button>
        </form>
        
       </div>
       <div>
            <a href="/register">sign up</a>
       </div>
    </body>
</html>
