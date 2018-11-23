<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../cfav.jpg">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <?php echo Asset::css('bootstrap.css'); ?>
    <?php echo Asset::css('style.css'); ?>
  </head>

  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/">Home</a>
          <a class="blog-nav-item" href="/posts/add">Add Posts</a>
          <a class="blog-nav-item" href="/about">About</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Cthulhu Mythos</h1>
        <p class="lead blog-description">Blog about hp lovecraft universe.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">         
           <?php echo $content; ?> 
        

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>The next I knew I had ceased my tiptoed racing and was standing still, staring at a row of maddeningly familiar hieroglyphed shelves. They were in a state of almost perfect preservation, and only three of the doors in this vicinity had sprung open.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">November 2018</a></li>
              <li><a href="#">October 2018</a></li>
              <li><a href="#">September 2018</a></li>
              <li><a href="#">August 2018</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog built with FuelPHP</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
  </body>
</html>