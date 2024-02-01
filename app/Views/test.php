
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contoh implementasi DSS (Decision Support System) dengan metode MOORA(Multi-Objective Optimization on the basis of Ratio Analysis) menggunakan PHP dan MySQL untuk pemilihan Curling Iron terbaik">
    <meta name="author" content="Cahya DSN">
    <title>Diagnosa Kerusakan Jaringan LAN menggunakan Naïve Bayes</title>
    <link href="home/css/bootstrap.css" rel="stylesheet">
    <link href="home/css/docs.php" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <script src="home/js/jquery-1.10.2.min.js"></script>
    <script type="text/x-mathjax-config">MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});</script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" id='navbar'>
      <div class="container">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="" class="navbar-brand">Naïve Bayes</a>
        <div class="nav-collapse collapse bs-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="articles">Home</a>
            </li>
            <li>
              <a href="#">Diagnosa</a>
            </li>
            <li>
              <a href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bs-header">
      <div class="container">
        <h2 class='series'><a href='dss' style="color:white;">Decision Support System Series</a></h2>
        <h1>Sistem Pakar Diagnosis Kerusakan Kabel <br>
dan Konektor Jaringan Menggunakan <br>
Metode Naïve Bayes
</h1>
                <p class='alert alert-info'>
          oleh : <a href=''><code>Revo Riantino Tulung</code></a>,
          NPM : <code>202011004</code> Tahun : <code>2024</code>        </p>
              <p style="float:right">
		
    
    <script src="home/js/bootstrap.js"></script>
    <script src="home/js/holder.js"></script>
    <script src="home/js/application.js"></script>
	<script src="home/js/qrcode.min.js"></script>
	<script>
	$(document).ready(function(){
		var qrcode = new QRCode("qrcode", {
            text: "https://extra.cahyadsn.com/moora?access=20240201160846",
			width: 128,
			height: 128,
			colorDark : "#000000",
			colorLight : "#ffffff",
			correctLevel : QRCode.CorrectLevel.H
		});
     });
     </script>
     <script>
        var prevScrollpos = window.pageYOffset;
        //Get the button:
        mybutton = document.getElementById("topBtn");
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
          var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
          } else {
            document.getElementById("navbar").style.top = "-50px";
          }
          prevScrollpos = currentScrollPos;
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0; // For Safari
          document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

  </body>
</html>