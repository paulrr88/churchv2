

<?php include('perch/runtime.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Holiday Clubs &mdash; Ferring Baptist Church</title>
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

        <div class="centre margin-4-top textshadow-soft textwhite">
            <h1 class="textbig">Holiday Clubs</h1>
        </div>
        
        <main class="content textmid" role="main"><!--Container for ALL content, everything inside this-->
            
            <div class="four columns offset-by-one">
            
                <section aria-label="This year's Holiday Club dates" class="background-white75 border-top-15-orange boxshadow-softextra6 twelve columns margin-6-top" role="complementary">
                    <h1 class="centre padding-1">This year's Holiday Club will be held <?php perch_content('Holiday Club dates'); ?>.</h1>
                </section>
                
                <?php perch_content('Registration form box'); ?>
                
            </div><!--End of four columns left column area-->

            <article class="background-white75 border-top-15-orange boxshadow-softextra6 five columns margin-6-top offset-by-one" role="article">
                <?php perch_content('Holiday Club details/placeholder blurb'); ?>
                
                <!--<h1 class="centre padding-1">Summer Holiday Club 2017</h1>

                <p>This year's Holiday Club at Ferring Baptist Church will run from <strong>Tuesday 8th August until Friday 11th August</strong>. The sessions will be from <strong>10am – 12 noon on all four mornings and there will be a Grand Finale and buffet on the Friday beginning at 6pm to which families are invited</strong>.  The whole club is free of charge, apart from tickets for food on Friday evening which are sold during the week.  All sessions are led by an experienced team who include Father Gary and Stuart, and every group leader will have obtained the necessary child safeguarding disclosure.</p>

                <p>The background to this year's theme is that the spire of light at the centre of the city of Ancora has grown dim; the stories of Jesus will enable it to shine brightly again! <strong>Each story is presented on film, and daily activities include games, songs, quizzes and crafts</strong>. Games are outdoors whenever weather allows, and safe footwear (eg trainers rather than flip-flops) is essential every day.  Games on Friday morning will involve a certain amount of water, but if you do not want your child to get wet you can indicate this on the form below.  We also include Holiday Club photographs in the publicity on this website, and it is possible that your child's face might appear in one of these.  Again, if you do not wish this to happen you can refuse permission on the form below.</p>

                <p><strong>Children aged 5-11 yrs are welcome and, while not essential, it helps a lot if you register your child(ren) before the club begins</strong>, in order for us to assess the numbers likely to attend.  <strong>You can do this by filling in the form below</strong> and posting it to us at the church, or putting it through the church letter-box when passing by.  Alternatively you are welcome to register your child(ren) on the first morning that they join us.  All children must have the consent of a parent (or adult with legal parental responsibility).</p>

                <p>If you have any queries, please do not hesitate to <a href="mailto:admin@ferringbaptist.org.uk">contact us</a>.</p>-->
            </article>
            
            <article class="background-white75 border-top-15-orange boxshadow-softextra6 ten columns margin-6-top offset-by-one" role="article">
                <?php /*perch_content('Holiday Club photos area');*/ ?>
                
                <h1 class="centre padding-1">Pictures from Rocky's Plaice (2016)</h1>
                
                <p>(All identifiable pictures of children used with permission of parents)</p>

                
            </article>
            
           

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
  
          
  
      <!--End JavaScript-->
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  
