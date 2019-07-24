<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
<style>
      body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background:#ecf0f1;
      }
      .box{
        width:300px;
        padding:40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #ecf0f1;
        text-align:center;
      }
      .box input[type = "text"],.box input[type = "password"]{
        border:0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: black;
        border-radius: 24px;
        transition: 0.25s;
      }
      .box input[type = "text"]:focus, .box input[type = "password"]:focus{
        width: 280px;
        border-color: #2ecc71;
      }
      .box input[type = "submit"]{
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: black;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
      }
      .box input[type = "submit"]:hover{
        background: #2ecc71;

      }
</style>
  </head>
  <body>
<form class="box" action="index.html" method="post">
  <h1>Login</h1>
  <input type="text" name="" placeholder="Username">
  <input type="password" name="" placeholder="Password">
  <input type="submit" name="" value="Login">
  <a href="signup.php"><input type="submit" name="" value="Sign-Up"></a>
</form>
  </body>
