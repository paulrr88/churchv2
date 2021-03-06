

<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Home &mdash; Ferring Baptist Church</title>
  <meta name="description" content="This is the official website for Ferring Baptist Church! Our life at Ferring Baptist Church is founded on the scriptures and the saving work of Jesus Christ, and our aim is to make Jesus and his love the focus of everything we do. Our worship blends older and newer styles in a way that seeks to be encouraging, positive, and accessible to people of different traditions and backgrounds. The 10:30 A.M. service is definitely the larger of the two, with the 6:30 P.M. worship attractive to some because of its more intimate atmosphere.">

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

        <main class="content textmid" role="main"><!--Container for ALL content, everything inside this-->
            <div class="hometop twelve columns">
                <div class="spacer-750"></div>
                <article class="background-white75 boxshadow-softextra6 four columns hometop-news u-pull-right margin-4" role="article">
                    <?php perch_content('Important news section at top'); ?>
                </article>
                <article class="background-white75 border-top-15-orange boxshadow-softextra6 clear six columns margin-2-top" role="article">
                    <?php perch_content('Intro blurb at top'); ?>
                </article>
                <div class="spacer"></div>
            </div><!--End of hometop-->
            
            
            <!--Need these to get the box to fit on tablet resolutions-->
            
            <!--Carousel-->
            
            <?php perch_content('Carousel of events'); ?>
            
            <!--End of carousel-->
            
        </main><!--End of content-->

          </div><!--END OF CONTAINER-->
  
          <footer class="bgoverlaid">
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
  
          <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
  
      <script type="text/javascript" src="slick/slick.min.js"></script>
      <script type="text/javascript" src="slick/init.js"></script>
  
      <!--End JavaScript-->
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  
