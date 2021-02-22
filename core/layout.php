<!DOCTYPE html>
<html lang="en">
  <head>

<!-- Add sanitized content -->
<?php if(!empty($meta)): ?>

<?php if(!empty($meta['title'])): ?>
  <title><?php echo $meta['title']; ?></title>
<?php endif; ?>

<?php if(!empty($meta['description'])): ?>
  <meta name="description" content="<?php echo $meta['description']; ?>">
<?php endif; ?>

<?php if(!empty($meta['keywords'])): ?>
  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<?php endif; ?>

<?php endif; ?>
<!-- End sanitized content -->

    <meta charset="UTF-8">
    <title>Hello, I am MicroTrain2101</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="Microtrain2101 home page">
    <meta name="keywords" content="full stack, web developer, full stack web developer, CSM, Scrum Master, home page"> -->
    <link rel="stylesheet" type="text/css" href="../dist/css/main.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="../site.webmanifest">
  </head>
  <body>
<header>
  <span class="logo">MicroTrain2101</span>
  <a id="toggleMenu">Menu<a>
    <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="/users/">Users</a></li>
          <li><a href="/posts/">Posts</a></li>
        </ul>
      </nav>
</header>

        <div class="row">
            <div id="Content">
                <?php echo $content; ?>
            </div>
            <div id="Sidebar">
              <div id="AboutMe">
                <div class="header">Hello, I am MicroTrain2101</div>
                <img src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm" alt="My Avatar" class="img-circle">
              </div>
            </div>
        </div>

        <div id="Footer" class="clearfix">
            <small>&copy; 2017 - MyAwesomeSite.com</small>
            <ul role="navigation">
                <li><a href="terms.html">Terms</a></li>
                <li><a href="privacy.html">Privacy</a></li>
            </ul>
        </div>
    </div>

  </body>

</html>
