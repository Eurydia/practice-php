<?php

$DEFAULT_COLOR = "#000000";

$bgcolor = $_GET["bgcolor"] ?? $DEFAULT_COLOR;

$r = "0";
$g = "0";
$b = "0";
if (strlen($bgcolor) == 7) {
  $r = hexdec(substr($bgcolor, 1, 2));
  $g = hexdec(substr($bgcolor, 3, 2));
  $b = hexdec(substr($bgcolor, 5, 2));
}

// var_dump($r, $g, $b, $bgcolor);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body {
      background-color: rgb(<?= $r ?>, <?= $g ?>, <?= $b ?>);
    }

    form {
      display: flex;
      flex-direction: column;
      width: fit-content;
      gap: 0.5rem;
    }

    #main {
      padding: 1rem;
      background-color: white;
      opacity: 75%;
    }
  </style>
</head>

<body>
  <div id="main">
    <h1>
      Hello!
    </h1>
    <a href="?bgcolor=%23bb0000">Red</a>
    <a href="?bgcolor=%23bbbb00">Yellow</a>
    <a href="?bgcolor=%230000bb">Blue</a>
    <form method="get" action=".">
      <input type="color" name="bgcolor" value="<?= $bgcolor ?>">
      <button type="submit">Submit</button>
    </form>
  </div>
</body>

</html>