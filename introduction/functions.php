<!DOCTYPE html>
<html>
<head>
<title>Project: Learn PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
</head>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>PHP</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Introduction <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="/introduction/syntax.php" class="w3-bar-item w3-button">PHP Syntax</a>
      <a href="/introduction/comments.php" class="w3-bar-item w3-button">PHP Comments</a>
      <a href="/introduction/variable.php" class="w3-bar-item w3-button">PHP Variables</a>
      <a href="/introduction/echo.php" class="w3-bar-item w3-button">PHP Echo/Print</a>
      <a href="/introduction/data.php" class="w3-bar-item w3-button">PHP Data Types</a>
      <a href="/introduction/strings.php" class="w3-bar-item w3-button">PHP Strings</a>
      <a href="/introduction/number.php" class="w3-bar-item w3-button">PHP Numbers</a>
      <a href="/introduction/math.php" class="w3-bar-item w3-button">PHP Math</a>
      <a href="/introduction/constants.php" class="w3-bar-item w3-button">PHP Constants</a>
      <a href="/introduction/operators.php" class="w3-bar-item w3-button">PHP Operators</a>
      <a href="/introduction/ifelse.php" class="w3-bar-item w3-button">PHP If...Else...Eleseif</a>
      <a href="/introduction/switch.php" class="w3-bar-item w3-button">Switch</a>
      <a href="/introduction/loops.php" class="w3-bar-item w3-button">PHP Loops</a>
      <a href="/introduction/functions.php" class="w3-bar-item w3-button w3-light-grey">PHP Functions</a>
      <a href="/introduction/arrays.php" class="w3-bar-item w3-button">PHP Arrays </a>
      <a href="/introduction/globals.php" class="w3-bar-item w3-button">PHP SuperGlobals</a>
      <a href="/introduction/regex.php" class="w3-bar-item w3-button">PHP RegEx</a>
    </div>
    <a href="/forms/forms.php" class="w3-bar-item w3-button">PHP Forms</a>
    <a onclick="myAccFunc1()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn1">
        PHP Advanced <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc1" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="/advanced/date.php" class="w3-bar-item w3-button">PHP Date and Time</a>
        <a href="/advanced/handle.php" class="w3-bar-item w3-button">PHP File Handling</a>
        <a href="/advanced/open.php" class="w3-bar-item w3-button">PHP File Open/Read/Close</a>
        <a href="/advanced/create.php" class="w3-bar-item w3-button">PHP File Create and Write</a>
        <a href="/advanced/upload.php" class="w3-bar-item w3-button">PHP File Upload</a>
    </a>
    </div>
</div>
</div>
    
  <a href="" class="w3-bar-item w3-button w3-padding">Created by: Nicole Marcos</a> 
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">PHP</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">PHP Functions</p>
    <p class="w3-right">
      <i class="fa fa-search"></i>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-container w3-text-grey" id="jeans">
    <p>Sample</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="/snips/fx.png" style="width:300%">
        <p>Code<br></p>
      </div>
      <div class="w3-container">
      <?php
//PHP FUNCTIONS CODE
function monthName($month, $year) {
    echo "$month 5, $year <br>";
  }
  
  monthName("November", "1975");
  monthName("June", "2019");
  monthName("March", "1947");
?>
        <p>Output<br></p>
      </div>
    </div>

  </div>
  <!-- End page content -->

</div>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
