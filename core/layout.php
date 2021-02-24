<!-- Set session in php -->
<?php
function active($name){
  $current = $_SERVER['REQUEST_URI'];
  if($current === $name){
    return 'active';
  }

  return null;
}
?>

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
    <!-- <link rel="stylesheet" type="text/css" href="../dist/css/main.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="../site.webmanifest">
  </head>
  <body>
      <!-- Content of webpage -->
      <div class="container">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">MicroTrain2101</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <!-- <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> -->
                <li class="nav-item">
                  <a class="nav-link <?php echo active('/'); ?>" href="http://localhost/example.com/public/index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo active('resume.php'); ?>" href="http://localhost/example.com/public/resume.php">Resume</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo active('contact.php'); ?>" href="http://localhost/example.com/public/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo active('/posts/'); ?>" href="http://localhost/example.com/public/posts/">Posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo active('/users/'); ?>" href="http://localhost/example.com/public/users/">Users</a>
                </li>

                <li class="nav-item">
                  <?php if(!empty($_SESSION['user']['id'])): ?>
                    <a class="nav-link" href="http://localhost/example.com/public/logout.php">Logout</a>
                  <?php else: ?>
                    <a class="nav-link <?php echo active('login.php'); ?>" href="http://localhost/example.com/public/login.php">Login</a>
                  <?php endif; ?>
                </li>
               <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
              </div>
            </div>
      </nav>
      <!-- Start Content Card -->
      <div class="card text-center">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <p class="card-text"><?php echo $content; ?></p>
      </div>
      <div class="card-footer text-muted">
        Created February 2021
      </div>
          <!-- Footer Links -->

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="terms.php">Terms</a> |
                <a href="privacy.php">Privacy</a> |
                <a href="cookies.php">Cookies</a>
            <!-- </ul> -->
          </div>
    </div>

  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</html>
