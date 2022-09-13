<!DOCTYPE HTML>  
<html>
<head>
<style>

</style>
</head>
<body>  

<?php
// define variables and set to empty values

$name = $email = $gender = $comment = $website = $browser= "";



if(isset($_POST['submit']) )
{
 
  $name = $_POST['formGender'];

  


}

if(isset($_POST['submit']) )
{
 
  $website = $_POST['formGender2'];
  
  


}

if(isset($_POST['submit']) )
{
 
  $browser = $_POST['formGender3'];

  


}

if(isset($_POST['submit']) )
{
 
  $email = $_POST['email'];

  


}

if(isset($_POST['submit']) )
{
 
  $comment = $_POST['comment'];

  


}
?>

<h2>BUG FORM</h2>

<form method="post" action="index.php">  

<p>
Where was this bug found?
<select name="formGender" name="name" value="<?php echo $name;?>">
  <option value="">Select...</option>
  <option value="Link1">Link1</option>
  <option value="Link2">Link2</option>
  <option value="Link3">Link3</option>
  
</select>
</p>

 
 
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  
  <br><br>

  
  Details: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>

 
  <p>
  Choose a Operating System:
<select name="formGender2" name="website" value="<?php echo $website;?>">
  <option value="">Select...</option>
  <option value="Android">Android</option>
  <option value="Linux">Linux</option>
  <option value="MacOS">MacOS</option>
  <option value="OSX">OSX</option>
  <option value="Windows">Windows</option>
</select>
</p>

 

  <br><br>
  <p>
  Choose a Browser:
<select name="formGender3" name="browser" value="<?php echo $browser;?>">
  <option value="">Select...</option>
  <option value="Brave">Brave</option>
  <option value="Chrome">Chrome</option>
  <option value="FireFox">FireFox</option>
  <option value="Opera">Opera</option>
  <option value="Tor">Tor</option>
</select>
</p>

 

  <br><br>


  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

$assunto = $website.$comment.$browser;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($email,$name,$assunto,$headers);
echo "<h2>saida das strings:</h2>";
echo $name; // bug link
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $browser;

?>

</body>
</html>