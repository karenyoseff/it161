<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Mares Charcuterie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/forms.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
 </head>
 <body>
     <header>
     <!-- NAV -->
        <nav  class="topnav" id="myTopnav">
            <a href="index.html" id="logo"><img src="images/logo_mares-nav.png " width="100"  alt=""> </a>
            <a href="index.html">Home</a>
            <a href="about.html" target="_blank">About</a>
            <a href="work.html" target="_blank">Work</a>
            <a href="contact.php" target="_blank">Contact</a>


            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </nav>
      <!-- END NAV -->
     </header>
     <main class="wrapper">
 
    <h2>Contact us</h2>
    

    <!-- contact form -->
    <div class="form">
    <h3>Call us: xx-xxx-xxx</p>
    <br><br>
    <?php
    /*
     * Below are 2 different forms to be re-used       
     * 
     * Only use one at a time, comment out the other!       
     *
     */

    include 'includes/contact_include.php'; #site keys & code here

    $toAddress = "yoseff_karen@hotmail.com";  //place your/your client's email address here
    $toName = "Mares Charcuterie"; //place your client's name here
    $website = "Contact form";  //place NAME of your client's website

    echo loadContact('simple.php');#demonstrates a simple contact form
    //echo loadContact('multiple.php');#demonstrates multiple form elements

?>
</div>

    <footer>
      <p>Mares Charcuterie</p>
      <div class="social-container">
        <div><a href="#" class="fa fa-facebook"></a></div>
        <div><a href="https://www.instagram.com/mares.charcuterie/" class="fa fa-instagram" target="_blank"></a></div>  
      </div>
      <p>Call us: xx-xxx-xxx</p>
      <p><small>&copy; 2023-<span id="this-year"></span> by 
          Karen Yoseff, All Rights Reserved &reg; ~ 

          <a id="html-checker" href="#" target="_blank">Check HTML</a> ~ 
          <a id="css-checker" href="#" target="_blank">Check CSS</a></small>
          
     </p>
    </footer>
  </main>
  <script src="js/main.js"></script>   
  <script>
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");
    
    function myFunction() {
      if (video.paused) {
        video.play();
        btn.innerHTML = "Pause";
      } else {
        video.pause();
        btn.innerHTML = "Play";
      }
    }
    </script>

 </body>
</html>
