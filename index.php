

<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Home &mdash; Ferring Baptist Church</title>
  <meta name="description" content="This is the official website for Ferring Baptist Church.">

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

        <main class="content" role="main"><!--Container for ALL content, everything inside this-->
            <div class="hometop twelve columns">
                <?php /*perch_content('Important news section at top');*/ ?>
                    <article class="background-white75 boxshadow-softextra6 four columns hometop-news u-pull-right" role="article">
                        <h2 class="centre padding-1">Important piece of news</h2>

                        <p>Blurb here about whatever the news is about!</p>
                    </article>
                <article class="background-white75 border-top-15-orange boxshadow-softextra6 clear six columns margin-2-top" role="article">
                    <?php /*perch_content('Intro blurb at top');*/ ?>
                        <p>Welcome to the FBC website! Our life at Ferring Baptist Church is founded on the scriptures and the 
                            saving work of Jesus Christ, and our aim is to make Jesus 
                            and his love the focus of everything we do. Our worship 
                            blends older and newer styles in a way that seeks to be 
                            encouraging, positive, and accessible to people of 
                            different traditions and backgrounds. The 10:30 A.M. 
                            service is definitely the larger of the two, with the 
                            6:30 P.M. worship attractive to some because of its more 
                            intimate atmosphere.</p>

                        <p>Situated in Greystoke Road, we are just round the corner 
                            from Church Lane and St. Andrew's C. of E. with whom 
                            we work closely as we seek to represent Christ in Ferring.</p>
                </article>
            </div><!--End of hometop-->
            
            <!--Carousel-->
            
            <?php /*perch_content('Carousel of events');*/ ?>
            
            <div class="carousel twelve columns">
                <div>
                    <div class="homecarousel homecarousel-1 twelve columns">
                        <div class="padding-3">
                            <article class="background-white75 border-top-15-green boxshadow-softextra6 six columns u-pull-right" role="article">
                                <h2 class="centre padding-1 textpurple">Title of an activity that we do</h2>

                                <p>Blurb about activity here. This area would be animated to shift through several different areas of potential interest like Holiday Clubs, Friday Club, home groups maybe, anything else we’d like to feature and draw visitors’ attention to.</p>
                            </article>
                        </div><!--End of padding-3-->
                    </div><!--End of home carousel 1-->
                </div>
                <div>
                    <div class="homecarousel twelve columns">
                        <div class="padding-3">
                            <article class="background-white75 border-top-15-green boxshadow-softextra6 six columns u-pull-right" role="article">
                                <h2 class="centre padding-1 textpurple">Title of another activity that we do</h2>

                                <p>Blurb about activity here. This area would be animated to shift through several different areas of potential interest like Holiday Clubs, Friday Club, home groups maybe, anything else we’d like to feature and draw visitors’ attention to.</p>
                            </article>
                        </div><!--End of padding-3-->
                    </div><!--End of home carousel 2-->
                </div>
                <div>
                    <div class="homecarousel twelve columns">
                        <div class="padding-3">
                            <article class="background-white75 border-top-15-green boxshadow-softextra6 six columns u-pull-right" role="article">
                                <h2 class="centre padding-1 textpurple">Title of yet another activity that we do</h2>

                                <p>Blurb about activity here. This area would be animated to shift through several different areas of potential interest like Holiday Clubs, Friday Club, home groups maybe, anything else we’d like to feature and draw visitors’ attention to.</p>
                            </article>
                        </div><!--End of padding-3-->
                    </div><!--End of home carousel 3-->
                </div>
            </div>
            
            <!--End of carousel-->
            
        </main><!--End of content-->

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
  
          <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
  
      <script type="text/javascript" src="slick/slick.min.js"></script>
      <script type="text/javascript" src="slick/init.js"></script>
  
      <!--End JavaScript-->
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  
