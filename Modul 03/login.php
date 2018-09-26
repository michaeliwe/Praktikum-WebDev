<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta id="description" content="Tugas Praktikum WAD">
    <meta id="keywords" content="WAD,Praktikum,HTML,CSS, JavaScript,PHP,Prodase">
    <meta id="author" content="Michaeliwe">
    <meta id="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/masterStyles.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	
    <title>LOGIN</title>

<body background="assets/images/bg.png">
    <section class="container">
        <section class="login-form">
            <form method="post" role="login">
                <center><h1>LOGIN</h1></center>
                <input type="text" name="username" id="user" placeholder="Username" required class="form-control input-lg" />
                <input type="password" name="password" id="pass" placeholder="Password" required class="form-control input-lg" />
                <input type="button" id="loginBtn" name="go" class="btn btn-lg btn-primary btn-block" onclick = "login()" value = "Sign In">
            </form>
            
        </section>
    </section>
</body>

</html>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/masterScript.js"></script>