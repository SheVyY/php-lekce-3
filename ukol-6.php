


<form method="POST">
  <div class="form-group">
  
    <label for="exampleInputEmail1">Jméno</label>
    <input type="text" name="Jméno" class="form-control">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Heslo</label>
    <input type="password" name="Heslo" class="form-control">
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" name="Check" class="form-check-input" value="1">
    <label class="form-check-label" for="exampleCheck1">Souhlasím</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>


<?php



echo 'POST: ';
var_dump($_POST);


?>
