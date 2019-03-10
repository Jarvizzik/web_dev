<!DOCTYPE html>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Project3</title>
  <link rel="stylesheet" href="../../css/style.css">
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
        <h1 class="jarvizz"><a href="../../index.html">Jarvi<span>zz</span></a></h1>
        <ul>
          <li><a>Form</a>
            <ul id="navForm">
              <li><a href="../../navbar-pages/form/get.html" targe="_parent">GET</a></li>
              <li><a href="../../navbar-pages/form/post.html">POST</a></li>
              <li><a href="../../navbar-pages/form/file-upload.html">file upload</a></li>
            </ul>
          </li>
          <li><a>Cookies</a>
            <ul>
              <li><a href="../../navbar-pages/cookies/enabled-disabled.html">enabled/disabled</a></li>
              <li><a href="../../navbar-pages/cookies/create-retrieve.html">create/retrieve</a></li>
              <li><a href="../../navbar-pages/cookies/modify-delete.html">modify/delete</a></li>
            </ul>
          </li>
          <li><a>Sessions</a>
            <ul>
              <li><a href="../../navbar-pages/sessions/start.html">start</a></li>
              <li><a href="../../navbar-pages/sessions/get-modify.html">get/modify</a></li>
              <li><a href="../../navbar-pages/sessions/destroy.html">destroy</a></li>
            </ul>
          </li>
          <li><a>Date/Time</a>
            <ul>
              <li><a href="../../navbar-pages/date-time/today-is.html">today is</a></li>
              <li><a href="../../navbar-pages/date-time/timezone.html">timezone</a></li>
              <li><a href="../../navbar-pages/date-time/timestamp.html">timestamp</a></li>
            </ul>
          </li>
          <li><a>DataBase</a>
            <ul id="navDB">
              <li><a href="../../navbar-pages/database/connect.html">connect</a></li>
              <li><a href="../../navbar-pages/database/createDB.html">create DataBase</a></li>
              <li><a href="../../navbar-pages/database/createTable.html">create Table</a></li>
              <li><a href="../../navbar-pages/database/createData.html">create Data</a></li>
              <li><a href="../../navbar-pages/database/readData.html">read Data</a></li>
              <li><a href="../../navbar-pages/database/updateData.html">update Data</a></li>
              <li><a href="../../navbar-pages/database/deleteData.html">delete Data</a></li>
            </ul>
          </li>
          <li><a href="../../navbar-pages/php-info.html">PhpInfo</a></li>
        </ul>
      </nav>
    </div>
    <div class="text">
      Project3
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
        if(count($_COOKIE) > 0) {
          echo "Cookies are enabled.";
        } else {
          echo "Cookies are disabled.";
        }
        ?>
    </p>
  </div>

  <div class="img">
    <div class="text">
      Project3
    </div>
  </div>

</body>
</html>
