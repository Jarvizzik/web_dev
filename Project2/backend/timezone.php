<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project2</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
  crossorigin="anonymous">
</head>
<body>

  <header>
    <div class="menu-toggle" id="hamburger">
      <i class="fas fa-bars"></i>
    </div>
    <div class="container">
      <nav>
        <h1 class="jarvizz"><a href="../index.html">Jarvi<span>zz</span></a></h1>
        <ul>
          <li><a>Form</a>
            <ul id="form">
              <li><a href="../navbar-pages/get.html" targe="_parent">GET</a></li>
              <li><a href="../navbar-pages/post.html">POST</a></li>
              <li><a href="../navbar-pages/file-upload.html">file upload</a></li>
            </ul>
          </li>
          <li><a>Cookies</a>
            <ul>
              <li><a href="../navbar-pages/enabled-disabled.html">enabled/disabled</a></li>
              <li><a href="../navbar-pages/create-retrieve.html">create/retrieve</a></li>
              <li><a href="../navbar-pages/modify-delete.html">modify/delete</a></li>
            </ul>
          </li>
          <li><a>Sessions</a>
            <ul>
              <li><a href="../navbar-pages/start.html">start</a></li>
              <li><a href="../navbar-pages/get-modify.html">get/modify</a></li>
              <li><a href="../navbar-pages/destroy.html">destroy</a></li>
            </ul>
          </li>
          <li><a>Date/Time</a>
            <ul>
              <li><a href="../navbar-pages/today-is.html">today is</a></li>
              <li><a href="../navbar-pages/timezone.html">timezone</a></li>
              <li><a href="../navbar-pages/timestamp.html">timestamp</a></li>
            </ul>
          </li>
          <li><a>DataBase</a>
            <ul>
              <li><a href="../navbar-pages/reserved.html">(reserved)</a></li>
            </ul>
          </li>
          <li><a href="../navbar-pages/php-info.html">PhpInfo</a></li>
        </ul>
      </nav>
    </div>
    <div class="text">
      Project2
    </div>
  </header>

  <section class="section"></section>

  <div class="topic">
    <h1>Course</h1>
    <h1>Web Development and Web Design</h1>
  </div>

  <div class="content">
    <h2>Answer</h2>
    <p>
      <?php
        date_default_timezone_set("Europe/Kiev");
        echo "The current time is " . date("H:i:sa");
      ?>
    </p>
  </div>

  <div class="img">
    <div class="text">
      Project2
    </div>
  </div>

</body>
</html>
