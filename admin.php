<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
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

 <?php
 
 session_start();
 
 if(isset($_SESSION['login'])) {
 
 $user = $_SESSION['login'];
 
 }
 
 if(!(isset($_SESSION['login']))) {
     
     echo "Přístup zamítnut" . "<br>" . "<br>";
   
  } else {
      
     echo "Vítejte $user" . "<br>" . "<br>";  

    $data = ['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami:' => 'ANO', 'Počet objednávek:' => 23];
    
    echo '<table class="table table-bordered">';
    
    foreach ($data as $udaj => $udaj_uživatele) {
        
        echo "
        
            <td>$udaj</td>
            
            <td>$udaj_uživatele</td>
            
            <tr></tr>
            
            ";
    }
    
    echo '</table>' . "<br>" . "<br>"; 
    
 }   
 
?>

    <span>
  <a class="btn btn-primary" href="/php-lekce-3/login.php" role="button">Odhlásit</a>
    </span>
 

</div>
</body>
</html>