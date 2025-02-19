<?php

$DEFAULT_NAME = "Guest";


$name = $_GET["name"] ?? $DEFAULT_NAME;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
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
      Hello <?= $name ?>!
    </h1>
    <form method="get" action=".">
      <input type="text" name="name" value="<?= $name ?>">
      <button type="submit">Submit</button>
    </form>
  </div>
</body>

</html>