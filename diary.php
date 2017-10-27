

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
            <h1 class="textbig">Diary/Events</h1>
        </div>
        
        <main class="content textmid" role="main"><!--Container for ALL content, everything inside this-->
            <div class="five columns">
                <article class="background-white75 border-top-15-orange boxshadow-softextra6 clear twelve columns margin-6-top offset-by-one" role="article">
                    
                    <h1 class="centre padding-1">This Week's Diary</h1>
                    
                    <?php perch_content('This week\'s diary'); ?>
                </article>
                
                <section aria-label="service times" class="background-white75 border-top-15-orange boxshadow-softextra6 twelve columns margin-2-top offset-by-one" role="complementary">
                    <h1 class="centre padding-1">Services</h1>

                    <?php perch_content('Services details'); ?>
                </section>
            </div><!--End of five columns, left column-->
            
            <article class="background-white75 border-top-15-orange boxshadow-softextra6 five columns margin-6-top offset-by-two" role="article">
                <h1 class="centre padding-1">Coming Weeks Schedule</h1>
                
                <?php perch_content('Coming weeks schedule'); ?>
                
                <!--<p class="floatleft underline">Preaching Schedule Jul 2017</p> 
                <p class="floatright underline"><strong>(C)</strong> - Communion</p>

				<table class="styled" role="grid" summary="Schedule for who is preaching in these coming months">
					<thead>
						<tr>
							<th scope="col">Date</th>
							<th scope="col">Morning Preacher</th>
							<th scope="col">Evening Preacher</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd">
							<th scope="row">Jul 2nd</th>
							<td>Rev. Trevor Smetham</td>
							<td>Deanna Clark <strong>(C)</strong></td>
						</tr>
						<tr>
							<th scope="row">Jul 9th</th>
							<td>Rev. Stuart Robinson</td>
							<td>Rev. Stuart Robinson</td>
						</tr>
						<tr class="odd">
							<th scope="row">Jul 16th</th>
							<td>Rev. Stuart Robinson <strong>(C)</strong></td>
							<td>Rev. Stuart Robinson</td>
						</tr>
						<tr>
							<th scope="row">Jul 23rd</th>
							<td>Rev. Stuart Robinson</td>
							<td>Rev. Stuart Robinson</td>
						</tr>
						<tr class="odd">
							<th scope="row">Jul 30th</th>
							<td>Rev. Stuart Robinson</td>
							<td>Rev. Stuart Robinson</td>
						</tr>
					</tbody>
				</table>-->
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
  
          <script>document.createElement('main');</script><!--fix for support of HTML5 <main> element-->
  
          
  
      <!--End JavaScript-->
  
  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  </body>
  </html>
  
