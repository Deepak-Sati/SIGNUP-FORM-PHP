<!DOCTYPE html>
<html>              
  <head>
     <title>PHP FORM</title>
     <link rel="stylesheet" href="style.css" type="text/css">     
     
  </head>
  
  <body>
     <?php 
     $name=$phone=$gender=$add=$sports="";
     $nameEr=$phoneEr=$genderEr=$addEr="";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            if(empty($_POST["name"]))
              $nameEr="Name is Required";
            else{
              $name=$_POST["name"];
                 if(!preg_match("/^[A-Za-z ]*$/" , $name))
                    $nameEr="CONTAINS ONLY LETTERS";
               }

            if(empty($_POST["phone"]))
              $phoneEr="Phone number is Required";
            else{
              $phone=$_POST["phone"];
                 if(!preg_match("/^[0-9 ]*$/" , $phone)) 
                   $phoneEr="CONTAINS ONLY NUMBERS";
              }
            if(!empty($_POST["add"]))
              $add=$_POST["add"];
            else
              $add="";
            if(empty($_POST["gender"]))
              $genderEr="Gender is Required";
            else
              $gender=$_POST["gender"];

              $sports=$_POST["sports"];
           }
     ?>
<h1>GET CONNECTED</h1><hr><hr><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="edit">
          NAME<br>  <input type="text" name="name"> <span class="error">*<?php echo $nameEr;?></span><br><br>
          PHONE NUMBER<br> <input type="text" name="phone"> <span class="error">*<?php echo $phoneEr;?></span><br><br>
          ADDRESS<br>  <textarea name="add" rows="5" cols="40"></textarea><br><br>
          GENDER<br> <input type="radio" name="gender" value="male">Male
                 <input type="radio" name="gender" value="female">Female <span class="error">*<?php echo $genderEr;?></span><br><br>
          SPORTS:<br><select name="sports">
          <option value="Football">Football</option>
          <option value="Cricket">Cricket</option>
          <option value="Baseball">Baseball</option>
          <option value="Tennis">Tennis</option>
          </select>
          <br><br><br>
          <input type="submit" value="submit" name="submit"> 
    </form>
<br>
<hr><hr>
<?php
echo "<h2>Your Input : PHP SELF FILE</h2><br>";
echo "$name<br>";
echo "$phone<br>";
echo "$add<br>";
echo "$gender<br>";  
echo "$sports<br>";      
?>
</body>
</html>
