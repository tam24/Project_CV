<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CV Tamara Escalante</title>

  <!-- CDN : PROD -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
  <link rel="stylesheet" href="css\style.css" media="screen" title="no title" charset="utf-8">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  <!-- CDN : script -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

  <nav class="navbar justify-content-between">
    <ul class="nav flex-column nav nav-pills">
      <li class="nav-item">
        <?php if ($currentPage == 'binary'):?>
         <a class="nav-link" href="home2.php">01001000 01001111 01001101 01000101 </a>
       <?php else : ?><a class="nav-link" href="home2.php"> HOME </a>
        <?php endif; ?>
      </li>
      <li class="nav-item">
        <?php if ($currentPage == 'binary'):?>
          <a class="nav-link" href="git.php">01000111 01001001 01010100 </a>
        <?php else : ?><a class="nav-link" href="git.php"> GIT </a>
        <?php endif; ?>
      </li>
      <li class="nav-item">
        <?php if ($currentPage == 'binary'):?>
          <a class="nav-link" href="projects.php">01010000 01010010 01001111 01001010 01000101 01000011 01010100 01010011</a>
        <?php else : ?><a class="nav-link" href="projects.php"> PROJECTS </a>
        <?php endif; ?>
      </li>
      <li class="nav-item">
        <?php if ($currentPage == 'binary'):?>
         <a class="nav-link" href="contact.php">01000011 01001111 01001110 01010100 01000001 01000011 01010100 </a>
       <?php else : ?><a class="nav-link" href="contact.php"> CONTACT </a>
        <?php endif; ?>
      </li>
    </ul>
  </nav>
