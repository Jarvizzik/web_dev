<!DOCTYPE html>
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
        $target_dir = "E:/wamp64/www/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
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
