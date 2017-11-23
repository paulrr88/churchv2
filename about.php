

<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>About Us &mdash; Ferring Baptist Church</title>
  <meta name="description" content="TBD">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css"><!-- reset file do not change -->
    <link rel="stylesheet" href="css/skeleton.css"><!-- framework CSS -->
    <link rel="stylesheet" href="css/style.css"><!--my additions-->
    <link rel="stylesheet" href="css/breaks.css"><!--breakpoints of mine-->
    
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Google fonts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet"> <!--Alegreya Sans SC Google Font for headers-->
</head>

<body>

    <div class="container">
        <header id="banner" role="banner"><!--Start of header area containing website title, graphics and navigation etc-->
            <nav id="top" role="navigation"><!--Start of top information area-->
                <ul>
                    <li><a href="sitemap.php">Sitemap</a></li>
                </ul>
            </nav><!--End of top information area-->

            <h1 class="centre textbig2 textshadow-soft textwhite">Ferring Baptist Church</h1>

            <h5 class="centre textshadow-mid textwhite">Greystoke Road, Ferring, Worthing, West Sussex, BN12 5JL</h5>

            <nav class="margin-1-top" id="nav-main" role="navigation"><!--Main navigation start-->
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="diary.php">Diary/events</a></li>
                    <li><a href="holidayclub.php">Holiday Clubs</a></li>
                    <li><a href="newssheet.php">Newssheet</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav><!--Main navigation ends-->
        </header><!--Header area ends-->


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

                <div class="bgimage">
                    <div class="bgimage-church"></div>
                </div>
        
                <div class="bgoverlaid">
        
                    <div class="centre margin-4-top textshadow-mid textwhite">
                        <h1 class="textbig">About Us</h1>
                    </div>
        
                    <nav class="ten columns offset-by-one" role="navigation">
                        <ul class="list-contents">
                            <li><a href="">About Us</a></li>
                            <li><a href="about-events.php">Our Regular Events</a></li>
                            <li><a href="about-disabled.php">Disabled Facilities</a></li>
                        </ul>
                    </nav>
        
            <main class="content textmid" role="main"><!--Container for ALL content, everything inside this-->
                <div class="six columns">
                    <article class="background-white75 border-top-15-orange boxshadow-softextra6 clear twelve columns margin-6-top offset-by-one" role="article">
                        <?php perch_content('About Us blurb at top'); ?>
                    </article>

                    <section aria-label="check our other pages" class="background-white75 border-top-15-orange boxshadow-softextra6 clear twelve columns margin-2-top offset-by-one" role="complementary">
                        <p class="centre textmid2"><strong>If you want to know more about our church, please click on the headings above!</strong></p>
                    </section>
                </div><!--End of five columns, left column-->

                <div class="five columns offset-by-one">
                    <section aria-label="service times" class="background-white75 border-top-15-orange boxshadow-softextra6 twelve columns margin-6-top" role="complementary">
                        <h1 class="centre padding-1">Services</h1>

                        <?php perch_content('Services details'); ?>
                    </section>
                </div><!--End of five columns, right column-->

                <article class="background-white75 border-top-15-orange boxshadow-softextra6 five columns margin-4-top offset-by-one" role="article">
                    <h1 class="centre padding-1">Our Location</h1>

                    <h2 class="padding-1">Address</h2>

                    <div class="wrap-text">
                        <?php perch_content('Address'); ?>
                    </div>

                    <h2 class="padding-1">Map</h2>

                    <div class="ten columns offset-by-one">
                        <a href="img/map.jpg"><img alt="Map of where Ferring Baptist Church is" class="fluid-100" src="img/map.jpg"></a>

                        <p class="centre nopadding nomargin"><a href="img/map.jpg">(Click to enlarge)</a></p>
                        <p class="centre nopadding"><a href="https://www.google.co.uk/maps/place/Ferring+Baptist+Church/@50.8135471,-0.4512601,17z/data=!3m1!4b1!4m5!3m4!1s0x4875a37ab2c84bdb:0xe47edae588f900ad!8m2!3d50.8135437!4d-0.4490661">Click here for Google Maps</a></p>

                        <div class="spacer"></div>
                    </div>
                </article>

                <div class="spacer"></div>
            </main><!--End of content-->
        </div><!--End of overlay-->

          </div><!--END OF CONTAINER-->
  
          <footer>
              <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="events/">About Us</a></li>
                  <li><a href="diary/">Our Diary</a></li>
                  <li><a href="news/">Our Location/Address</a></li>
                  <li><a href="news/">Children/Youth Events</a></li>
                  <li><a href="videos/">Newssheet</a></li>
                  <li><a href="videos/">Holiday Clubs</a></li>
                  <li><a href="videos/">Community Outreach</a></li>
                  <li><a href="admin/">Contact Us</a></li>
                  <li><a href="findus/">Find Us</a></li>
         
              </ul>
  
              <br>
              <br>
  
              <div role="contentinfo"><!--Copyright info etc-->
                  <h3><strong>&copy; <?php echo date('Y'); ?> Ferring Baptist Church :: Designed by <a href="http://www.paulcomputerhelp.co.uk/">Paul Robinson</a></strong><br>
                      
                  <br>
                      
                  <a href="http://www.seba-baptist.org.uk/"><img alt="South Eastern Baptist Association" src="img/seba.png" title="Link to South Eastern Baptist Association"></a>
  
                  <br>
                  <br>
  
                  <a href="perch/">Perch Login</a></h3>
              </div>
  
              <br>
              <br>
              <br>
          </footer>
      
      <!--JavaScript-->
  
          
  
          <script>document.createElement('main');</script><!--fix for support of HTML5 <main> element-->
  
          
  
      <!--End JavaScript-->
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  
