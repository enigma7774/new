<?php
$this->load->helper('url');

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

 <style>
 div.all{
  left: 0;
  right: 0;
  margin:0 auto;
  top:50px;
  margin: auto;
  position: absolute;
 	background-color: #fff;
 	width:1000px;
  height: 500px;
 	word-wrap: break-word;
 	box-shadow: 0 0 8px 5px;
 }
 body{
	 background-color: green;

 }
 </style>
</head>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Тестовое задание</title>

	</head>
<div class = "all">
  <center>
    <p>NEW</p>
    <h1 class="display-1">Форма авторизации</h1>
  <form class="form-inline" method="post" action="/Codeigniter/">
    <div class="form-group">
      <input type="login" class="form-control" name="user_login" placeholder="Логин">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" name="user_password" placeholder="Пароль">
    </div>

    <input type="submit" name = "login"class="btn btn-success" value="login">
  </form>
</center>
</div>


</body>

</html>
