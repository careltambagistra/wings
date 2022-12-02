<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<script defer src="/__/firebase/4.8.0/firebase-app.js"></script>
	<!-- include only the Firebase features as you need -->
	<script defer src="/__/firebase/4.8.0/firebase-database.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
	<script defer src="/__/firebase/init.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300);.content,.header{text-align:center}.content p,.header h1,.header h2{font-weight:300}body{background:#eee;font-family:'Open Sans',sans-serif;-webkit-box-sizing:border-box;box-sizing:border-box}*{-webkit-box-sizing:inherit;box-sizing:inherit;margin:0;padding:0}.container{width:400px;margin:10% auto 0;background:#fefefe;border-radius:3px}.container:hover .social li,.header h1{margin:0}.header{padding:40px 30px 0}.header h4{margin:0 0 15px;color:#329696}.profile{width:130px;height:130px;border-radius:50%;margin:20px 0 -70px;border:3px solid #2e95ad;-webkit-transition:all 1.5s ease;transition:all 1.5s ease}.profile:hover{border:3px solid #FF5722}.content{background:#fefefe;color:#f0f0f0;padding:75px 0 0;height:auto}.content p{padding:20px 40px}#qrcode{width:160px;height:160px;border-radius:0;margin:50px}</style>
</head>
<body>
<!--<input id="text" type="text" value="https://hogangnono.com" style="width:80%" /><br />-->
<div class="header">
	<h1 id="name">Scan Me
		<h1>
			<h4 id="email"></h4>
			<img src="" class="profile" />
			<div id="qrcode"></div>
</div>
<div id="qrcode"></div>

</body>
<script>
	let randval="";
	let current_ref=null;
	let qrcode = new QRCode("qrcode");
	let tout;
	function refreshQRCode() {
		if(current_ref!=null){
			current_ref.off();
		}
		randval=Math.random().toString(16).slice(2);)
		qrcode.makeCode(randval);
		tout=setTimeout(refreshQRCode, 1000*5)
	}
	$(document).ready(function() {
		$(".profile").hide();
		refreshQRCode();
	});


</script>
</html>
