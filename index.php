<!DOCTYPE html>
<html lang="en">

  <?php include("includes/head.html"); ?>

  <body>

    <?php include("includes/navigation.html"); ?>

    <div class="container">

      <div class="row">

        <div class="col-md-5">
          <img src="/img/me.jpg" class="img-responsive img-rounded">
        </div>

        <div class="col-md-6">
          <br/>
          <h2>About Me</h2>
          <p>
            My name is Brett Crawford. I recently graduated from Temple 
            University in Philadelphia, PA with a degree in computer science. 
            I enjoy all things computer related and thrive on the idea of 
            using technology to make our lives better. Recently, I have been 
            working/playing with the Raspberry Pi in various ways, becoming 
            familiar with Mac OS X, and working on my Android mobile 
            application development company, 
            <a href="http://www.wckd-dev.com">wckdDev</a>. I have recently 
            moved to Iowa City, Iowa to join my fiancée, Kate, as she attends 
            the University of Iowa. We live together with our 5 year old pug, 
            Oscar.
          </p>
          <br/>
          <h2>LinkedIn</h2>
          <p>You can view my experience and skills or connect with me on my LinkedIn profile.</p>
          <p><a href="http://www.linkedin.com/in/brettjcrawford" class="btn btn-primary" role="button"><?php echo $this->translate('Visit my LinkedIn Profile') ?> &raquo;</a></p>
        </div>

      </div>

    </div>

    <?php include("includes/footer.html"); ?>

  </body>

</html>