<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Folder Contents</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h1 {
      text-align: center;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 5px;
    }

    a {
      text-decoration: none;
      color: #3498db;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <h1>Folder Contents</h1>
  <ul>
    <!-- Use PHP to dynamically list files -->
    <?php
    $dir = 'images';
    $files = scandir($dir);
    foreach ($files as $file) {
      if ($file != '.' && $file != '..') {
        echo "<li><a href='$dir/$file'>$file</a></li>";
      }
    }
    ?>
  </ul>
</body>

</html>
