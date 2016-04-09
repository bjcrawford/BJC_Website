<!DOCTYPE html>
<html lang="en">

  <?php include("includes/head.html"); ?>

  <body>

    <?php include("includes/navigation.html"); ?>

    <div class="container">

      <?php include("includes/header.html"); ?>

      <div id="page" class="projects" display="none"></div>

      <!-- Start page content -->
      <h2>Projects</h2>
      <p>
        Listed below are a few of my personal projects.
      </p>

      <div class="row">

        <div class="col-xs-8 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="well well-sm">
              <img src="/img/mirror.png" class="img-responsive img-rounded">
            </div>
            <div class="caption caption-uniform-block">
              <h3>Mirror</h3>
              <p>
                A mirror simulation app with some extra features that was
                made for the Android platform.
              </p>
            </div>
            <div class="caption">
              <a href="https://github.com/bjcrawford/Mirror-Core" class="btn btn-primary" role="button">Explore Code &raquo;</a>
              <a href="https://play.google.com/store/apps/details?id=com.wckd_dev.mirror" class="btn btn-primary" role="button">Play Store &raquo;</a>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="well well-sm">
              <img src="/img/bc_shell.png" class="img-responsive img-rounded">
            </div>
            <div class="caption caption-uniform-block">
              <h3>bc_shell</h3>
              <p>
                A command line interpreter written for use within a linux enviroment.
              </p>
            </div>
            <div class="caption">
              <a href="http://github.com/bjcrawford/bc_shell"  class="btn btn-primary" role="button">Explore Code &raquo;</a>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="well well-sm">
              <img src="/img/gravity.png" class="img-responsive img-rounded">
            </div>
            <div class="caption caption-uniform-block">
              <h3>Gravity</h3>
              <p>
                A space themed adventure/puzzle game created for the Android platform.
              </p>
            </div>
            <div class="caption">
              <a href="http://github.com/bjcrawford/Gravity"  class="btn btn-primary" role="button">Explore code &raquo;</a>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="well well-sm">
              <img src="/img/raspibuilds.png" class="img-responsive img-rounded">
            </div>
            <div class="caption caption-uniform-block">
              <h3>RasPi Builds</h3>
              <p>
                A web application built using JSP, HTML, CSS, JS, and SQL.
              </p>
            </div>
            <div class="caption">
              <a href="http://cis-linux2.temple.edu:8080/SP15_2308_tuf00901/index.jsp" class="btn btn-primary" role="button">Explore Site &raquo;</a>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="well well-sm">
              <img src="/img/genalgs.png" class="img-responsive img-rounded">
            </div>
            <div class="caption caption-uniform-block">
              <h3>Genetic Algorithms</h3>
              <p>
                An analysis of genetic algorithm variations written in Java.
              </p>
            </div>
            <div class="caption">
              <a href="http://github.com/bjcrawford/SGAVariationAnalysis"  class="btn btn-primary" role="button">Explore Code &raquo;</a>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="well well-sm">
              <img src="/img/sia.png" class="img-responsive img-rounded">
            </div>
            <div class="caption caption-uniform-block">
              <h3>Stock Information App</h3>
              <p>
                An informational stock portfolio application created for the
                Android platform.
              </p>
            </div>
            <div class="caption">
              <a href="http://github.com/bjcrawford/StockInformationApp"  class="btn btn-primary" role="button">Explore Code &raquo;</a>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="well well-sm">
              <img src="/img/bst-puzzle.png" class="img-responsive img-rounded">
            </div>
            <div class="caption caption-uniform-block">
              <h3>BST Puzzle</h3>
              <p>
                A binary search tree puzzle game built with Java.
              </p>
            </div>
            <div class="caption">
              <a href="https://github.com/bjcrawford/BST-Puzzle" class="btn btn-primary" role="button">Explore Code &raquo;</a>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="well well-sm">
              <img src="/img/hashtablevisualization.png" class="img-responsive img-rounded">
            </div>
            <div class="caption caption-uniform-block">
              <h3>VisualHashTable</h3>
                <p>
                  A hash table visualization made with Java.
                </p>
              </div>
            <div class="caption">
              <a href="http://github.com/bjcrawford/VisualHashTable"  class="btn btn-primary" role="button">Explore Code &raquo;</a>
            </div>
          </div>
        </div>

        <div class="col-xs-8 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="well well-sm">
              <img src="/img/callcentersim.png" class="img-responsive img-rounded">
            </div>
            <div class="caption caption-uniform-block">
              <h3>CallCenterSim</h3>
              <p>
                A call center simulation created using Java.
              </p>
            </div>
            <div class="caption">
              <a href="http://github.com/bjcrawford/CallCenterSim"  class="btn btn-primary" role="button">Explore Code &raquo;</a>
            </div>
          </div>
        </div>

      </div>
      <!-- End page content -->

      <?php include("includes/footer.html"); ?>

    </div>

  <script>initPage();</script>
  </body>

</html>