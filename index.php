<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Responsive Nav &middot; IE Support Using Respond.js</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="nav.css">
      <link rel="stylesheet" href="style.css">
    <!--[if lte IE 8]><script src="respond.js"></script><![endif]-->
     
</head>

<body>
  <div id="main">
    <!--Start navigation-->     
            <?php
            include('includes/nav.inc.php');
            ?> 

            <?php
            /* The preferred include path option ($_SERVER) is commented out so that the page
            will work anywhere within your file structure for the purposes of this demo.
            The relative path option is the one that does the work in this case. */

            #include($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php');
            include('includes/brand.inc.php');
            ?>

            <p class="minipad"><img src="images/banner2.jpg" width="1100" height="200" alt="minipad" /></p> 
            <h1>Our flowers are the freshest</h1>
            <p>
                 We are selling flowers in Hornchurch area of Essex for last 5 years. We are incredible central from Hornchurch town centre. And just little bit further from Romford and Upminster town.
                <span> <span/> We can deliver your flowers in the local area same day in few hours of notice. Season flowers are paramount and we have got wonderful ideas that you can surprise your dear ones with flowers at the right time and we can meet that expectations to things are naturally available. 
            </p>
            <h1>Vibrantly fresh flowers will make you feel beautiful</h1>
              <div id="flower">
                    
                    <p class="wed"><img src="images/occasion.png" height="180" width="250" alt="chrismas"></p>
                    <p class="wed"><img src="images/wed.jpg" height="180" width="250" alt="wedding"></p>   
                                        
                    <p class="wed"><img src="images/office.jpg" height="180" width="250" alt="office"></p>                    
                    <p class="wed"><img src="images/funeral.png" height="180" width="250" alt="funeral"></p>
                    <p class="myButton"><a href="occasion.html">Occasion</a></p>
                    <p class="myButton"><a href="wedding.html">Wedding</a></p>
                    <p class="myButton"><a href="office.html">Office</a></p>
                    <p class="myButton"><a href="funeral.html">Funeral</a></p>
              </div>
              <p class="line-occasion"></p>

             <?php
              #include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php');
              include('includes/footer.inc.php');
              ?>
  </div>


<!--javascript  start for navigation-->     
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-46156385-1', 'cssscript.com');
              ga('send', 'pageview');

            </script>
            <!--javascript  End for navigation-->  

</body>
</html>
