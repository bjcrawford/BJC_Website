<!DOCTYPE html>
<html lang="en">

  <?php include("includes/head.html"); ?>

  <body>

    <?php include("includes/navigation.html"); ?>

    <div class="container">

      <?php include("includes/header.html"); ?>

      <div id="page" class="home" display="none"></div>

      <!-- Start page content -->

      <div class="row">

        <div class="col-xs-5 col-sm-5 col-md-5">
          <img src="/img/me.jpg" class="img-responsive img-rounded">
        </div>

        <div class="col-xs-7 col-sm-7 col-md-7">
          <h2>About Me</h2>
          <p>
            My name is Brett Crawford. I graduated in spring of 2015 from Temple 
            University in Philadelphia, PA with a degree in computer science. 
            I enjoy all things computer and technology related and thrive on 
            the idea of using technology to make our lives better. Recently, 
            I have been working/<a href="http://imgur.com/a/mQdXJ">playing</a> 
            with the Raspberry 
            Pi in various ways, becoming familiar with Mac OS X, and working 
            on my Android mobile application development company, 
            <a href="http://www.wckd-dev.com">wckdDev</a>. I have just 
            moved to Iowa City, Iowa to join my wife, Kate, as she attends 
            the University of Iowa and to start a new position at Rockwell 
            Collins in Cedar Rapids. We live together with our 5 year old pug, 
            Oscar.
          </p>
          <br/>
          <h2>LinkedIn</h2>
          <p>You can view my experience and skills or connect with me on my LinkedIn profile.</p>
          <p><a href="http://www.linkedin.com/in/brettjcrawford" class="btn btn-primary" role="button">Visit my LinkedIn Profile &raquo;</a></p>
        </div>

      </div>

      <!-- End page content -->

    <?php include("includes/footer.html"); ?>

    </div>

  <script>initPage();</script>
  </body>

</html>