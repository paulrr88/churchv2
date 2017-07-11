
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

  <!-- CSS & JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css"><!-- reset file do not change -->
  <link rel="stylesheet" href="css/skeleton.css"><!-- framework CSS -->
  <link rel="stylesheet" href="css/style.css"><!--my additions-->
  <link rel="stylesheet" href="css/breaks.css"><!--breakpoints of mine-->

  <script>document.createElement('main');</script><!--fix for support of HTML5 <main> element-->

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Google fonts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet"> <!--Alegreya Sans SC Google Font for headers-->
</head>

<body>

    <div class="container">
        <header id="banner" role="banner" style="background-color: lightblue;"><!--Start of header area containing website title, graphics and navigation etc-->
            <nav id="top" role="navigation"><!--Start of top information area-->
                <ul>
                    <li><a href="sitemap/">Sitemap</a></li>
                    <li><a href="folder/">Another link</a></li>
                </ul>
            </nav><!--End of top information area-->

            <h1 class="centre textbig textshadow-soft textwhite">Ferring Baptist Church</h1>

            <h5 class="centre textshadow-mid textwhite">Greystoke Road, Ferring, Worthing, West Sussex, BN12 5JL</h5>

            <nav id="nav-main" role="navigation"><!--Main navigation start-->
                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Diary/events</li>
                    <li>Holiday Clubs</li>
                    <li>Newssheet</li>
                    <li>Contact Us</li>
                </ul>
            </nav><!--Main navigation ends-->
        </header><!--Header area ends-->


  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

        <main class="content" role="main" style="background: blue; color: white;"><!--Container for ALL content, everything inside this-->
            <div class="hometop">
                <div class="padding-3-right">
                    <article class="four columns hometop-news u-pull-right" role="article">
                        <h2>Important piece of news</h2>

                        <p>Blurb here about whatever the news is about!</p>
                    </article>
                    <article class="six columns" role="article">
                        <p>Our life at FBC is founded on the scriptures and the 
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
                </div><!--End of padding-3-right-->
            </div><!--End of hometop-->
        </main><!--End of content-->

          <footer>
              <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="events/">Events</a></li>
                  <li><a href="diary/">Diary</a></li>
                  <li><a href="news/">News</a></li>
                  <li><a href="videos/">Videos</a></li>
                  <li><a href="admin/">Admin</a></li>
                  <li><a href="findus/">Find Us</a></li>
              </ul>
  
              <br />
  
              <div role="contentinfo"><!--Copyright info etc-->
                  <p><strong>&copy; <?php echo date('Y'); ?> Arun Sunshine Group | Designed by <a href="http://www.paulcomputerhelp.co.uk/">Paul Robinson</a></strong><br />
  
                  <br />
                  <br />
  
                  <a href="perch/">Perch Login</a></p>
              </div>
  
              <br />
              <br />
              <br />
          </footer>
      </div><!--END OF CONTAINER-->
  
    <script>
    // DELETE THIS IF NOT NEEDED ON THIS PAGE
    // fix for mobile table layout from http://sitesforprofit.com/responsive-tables-in-wordpress
  
    var headertext = [];
    var headers = document.querySelectorAll("thead");
    var tablebody = document.querySelectorAll("tbody");
  
    for (var i = 0; i < headers.length; i++) {
      headertext[i]=[];
      for (var j = 0, headrow; headrow = headers[i].rows[0].cells[j]; j++) {
        var current = headrow;
        headertext[i].push(current.textContent);
        }
    }
  
    for (var h = 0, tbody; tbody = tablebody[h]; h++) {
      for (var i = 0, row; row = tbody.rows[i]; i++) {
        for (var j = 0, col; col = row.cells[j]; j++) {
          col.setAttribute("data-th", headertext[h][j]);
        }
      }
    }
  </script>
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  
