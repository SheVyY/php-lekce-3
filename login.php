<!DOCTYPE html>
<html lang="cz">
<head>
    <title>Velký domácí úkol</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

 <form method="post">
 
  <div class="form-group">
    <label>Login</label>
    <input type="text" name="username" class="form-control" >
  </div>
  
  <div class="form-group">
    <label>Heslo</label>
    <input type="password" name="password" class="form-control" >
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Přihlásit</button>
  
</form>
<br>

<?php

if(isset($_POST['username'])) { 

$login = $_POST['username'];

}

if(isset($_POST['password'])) { 

$password = $_POST['password'];

}
  
if(isset($_POST['submit'])) {  

    if($login == "admin" && $password == "top-secret" ) {
        
        session_start();
        
        $_SESSION['login'] = $login;
        $_SESSION['data'] = ['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami' => 'ANO', 'Počet objednávek' => 23];

        echo '<a href="/php-lekce-3/admin.php">Pokračovat do administrace</a>';
        
    } else {
        
        echo "Chybné jméno nebo heslo";
        
        }
 }      
    
?>



</div>
</body>
</html>
