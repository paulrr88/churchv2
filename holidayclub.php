

<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Holiday Clubs &mdash; Ferring Baptist Church</title>
  <meta name="description" content="Learn about the children's Holiday Clubs that we hold at the church!">

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
  <link rel="icon" type="image/png" href="img/favicon.png">

  <!-- Google fonts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet"> <!--Alegreya Sans SC Google Font for headers-->
</head>

<body>

    <div class="container">
        <header id="banner" role="banner"><!--Start of header area containing website title, graphics and navigation etc-->
            <nav id="top" role="navigation"><!--Start of top information area-->
                <ul>
                    <li><a href="sitemap/">Sitemap</a></li>
                </ul>
            </nav><!--End of top information area-->

            <h1 class="centre textbig2 textshadow-strong textwhite">Ferring Baptist Church</h1>

            <h5 class="centre textshadow-strong textwhite">Greystoke Road, Ferring, Worthing, West Sussex, BN12 5JL</h5>

            <nav class="margin-1-top" id="nav-main" role="navigation"><!--Main navigation start-->
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="about/">About Us</a></li>
                    <li><a href="diary/">Diary/events</a></li>
                    <li><a href="club/">Holiday Clubs</a></li>
                    <li><a href="news/">Newssheet</a></li>
                    <li><a href="contact/">Contact Us</a></li>
                </ul>
            </nav><!--Main navigation ends-->
        </header><!--Header area ends-->


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <div class="bgimage">
            <div class="bgimage-hc"></div>
        </div>

        <div class="bgoverlaid">
            <div class="centre margin-4-top textshadow-mid textwhite">
                <h1 class="textbig  textshadow-strong">Holiday Clubs</h1>
            </div>

            <main class="content textmid" role="main"><!--Container for ALL content, everything inside this-->

                <div class="four columns offset-by-one">

                    <section aria-label="This year's Holiday Club dates" class="background-white75 border-top-15-orange boxshadow-softextra6 twelve columns margin-6-top" role="complementary">
                        <h1 class="centre padding-1"><?php perch_content('Holiday Club date box'); ?> <?php perch_content('Holiday Club dates'); ?>.</h1>
                    </section>

                    <?php perch_content('Registration form box'); ?>

                </div><!--End of four columns left column area-->

                <article class="background-white75 border-top-15-orange boxshadow-softextra6 five columns margin-6-top offset-by-one" role="article">
                    <?php perch_content('Holiday Club details/placeholder blurb'); ?>
                </article>

                <article class="background-white75 border-top-15-orange boxshadow-softextra6 ten columns margin-6-top offset-by-one" role="article">
                    <?php perch_content('Holiday Club photos area'); ?>
                    
                    <div class="spacer"></div>
                    
                    <h2 class="centre padding-3"><a href="club/archive/">Photos Archive</a></h2>
                </article>

                <div class="spacer"></div>
            </main><!--End of content-->
        </div><!--End of overlay-->

          </div><!--END OF CONTAINER-->
  
          <footer>
              <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="about/">About Us</a></li>
                  <li><a href="diary/">Our Diary</a></li>
                  <li><a href="contact/#address">Our Location/Address</a></li>
                  <li><a href="about/events/#youth">Children/Youth Events</a></li>
                  <li><a href="about/events/#events">Regular Events</a></li>
                  <li><a href="about/disabled/">Disabled Facilities</a></li>
                  <li><a href="news/">Newssheet</a></li>
                  <li><a href="club/">Holiday Clubs (forms, photos etc!)</a></li>
                  <li><a href="contact/">Contact Us</a></li>
         
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
  
