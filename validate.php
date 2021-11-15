<?php

///$nameErr=$pswErr=" ";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	  
$pass_check1=$_POST['pass4'];
$pass_check2=$_POST['pass5'];
    

 if($pass_check1== $pass_check2)
    { 

echo "<script type='text/javascript'>alert('correct');</script>";
      header('Location: start.php');
     
    }
   else
	{ echo "<script type='text/javascript'>alert('wrong');</script>";
     header('Location: login_error.php');
        
       
      }
}//else
	
	// { 
      //else if($error==2) 
       // header('Location: login.php?status=2');
      //else if($error==3)
      //  header('Location: login.php?status=3');
	//}

?>