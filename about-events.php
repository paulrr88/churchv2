
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

                <div class="centre margin-4-top textshadow-soft textwhite">
                    <h1 class="textbig">About Us</h1>
                </div>
                
                <nav class="ten columns offset-by-one" role="navigation">
                    <ul class="list-contents">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="">Our Regular Events</a></li>
                        <li><a href="about-disabled.php">Disabled Facilities</a></li>
                    </ul>
                </nav>

        <div class="centre margin-4-top textshadow-soft twelve columns textwhite">
            <h1 class="textbig1-5">Our Regular Events</h1>
        </div>
        
        <main class="content textmid" role="main"><!--Container for ALL content, everything inside this-->
            
            <div class="five columns">
                <article class="background-white75 border-top-15-orange boxshadow-softextra6 clear twelve columns margin-6-top offset-by-one" role="article">
                    <h1 class="padding-1">Children &amp; Youth</h1>
                    
                    <p><strong>Under 18's are very welcome to share in worship on any Sunday, but we also cater for children and young people on Friday evenings in term-time</strong>.</p>
                    
                    <h2 class="padding-1">Friday Club</h2>
                    
                    <?php /*perch_content('Friday Club details');*/ ?>
                    
                    <p><strong>Friday Club runs from 5:00-6:00 p.m. every week (except during half-terms). 4-7 year-olds can join us for Minis, and we have a Juniors session for 8-11s</strong>. The sessions run at the same time, and include games and crafts, plus a Bible-based story, discussion, or film.</p>
                    
                    <p>All staff are trained in "Safe to Grow" procedures (the Baptist Union's guidelines for the protection of children and those who work with them) and all adults in regular contact with children have obtained the criminal record disclosures that are a legal requirement.</p>
                    
                    <?php /*perch_content('Holiday Clubs details');*/ ?>
                    
                    <h2 class="padding-1">Holiday Clubs</h2>

                    <p><strong>In the summer holidays, <a href="">we run a one week Holiday Bible Club for children</a></strong> which is very popular in the village - especially with parents!</p>
                </article>
                
                <article class="background-white75 border-top-15-orange boxshadow-softextra6 clear twelve columns margin-6-top offset-by-one" role="article">
                    <h1 class="padding-1">Other Regular Events</h1>
                    
                    <p></p>
                    
                    <h2 class="padding-1">Home Groups</h2>
                    
                    <?php /*perch_content('Home groups details');*/ ?>
                    
                    <p><strong>These meet on a fortnightly basis to provide fellowship and Bible study and are open to all</strong>. At present, two groups meet in the daytime and one occasionally in the evening and all three are very popular. Home groups have contributed a lot to the spiritual growth of the church in recent years and many of the active members of the church belong to one.</p>
                    
                    <p></p>
                    
                    <?php /*perch_content('Prayer times details');*/ ?>
                    
                    <h2 class="padding-1">Prayer Times</h2>

                    <p>Prayer is of course at the heart of everything we do but <strong>on alternate Wednesdays at 3:00 P.M. we gather for an hour of thanksgiving and prayer for the wider world, for our local community, and for the work of our church and those of our congregation who have particular needs</strong>. These times are vital to the life of the whole fellowship and a great encouragement to those who take part.</p>
                </article>

            </div><!--End of five columns, left column-->
            
            <?php /*perch_content('In the community section');*/ ?>
            
            <article class="background-white75 border-top-15-orange boxshadow-softextra6 five columns margin-6-top offset-by-two" role="article">
                <h1 class="centre padding-1">In the community</h1>
                
                <h2 class="padding-1">Dabblers</h2>
                
                <p>Every fortnight a group called "Dabblers" meets from 2:00 p.m. until 4:00 p.m. on a Thursday to which people bring their favourite hobbies and crafts and do them together. Again, this is a relaxed occasion to which neighbours and friends can easily be invited.</p>
                
                <h2 class="padding-1">Breakfasts</h2>
                
                <p>We are happy to host a Women's Breakfast every three months where women of the village can meet and share fellowship together. A speaker also shares her experience of faith in Jesus. This breakfast is led by a team of women from six churches both in Ferring and the surrounding area.</p>
                
                <p>We also hold a Men's Breakfast regularly, inquire at the church for more details!</p>
            </article>
            
            <?php /*perch_content('Women's Fellowship section');*/ ?>
            
            <article class="background-white75 border-top-15-orange boxshadow-softextra6 five columns margin-2-top offset-by-two" role="article">
                <h1 class="centre padding-1">Women's Fellowship</h1>
                
                <p><strong>This group meets on Tuesdays at 2:30 p.m. during most of the year</strong>. After a relaxing chat over a cup of tea there is a short time of worship followed by a Christian message given by a local speaker.</p>
                
                <p>The quality of the talks and the warmth of fellowship are usually very special. <strong>Particular events at certain times of year (such as the visit of children from the local school to sing carols at Christmas) are very much enjoyed</strong>. In summer months when weather permits some members open their gardens for the meeting to take place outdoors. </p>
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
  
