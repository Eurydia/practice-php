<?php
$name = "a";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic HTML Template</title>
</head>

<body>
  <h1>Welcome <?= $name ?>! (<?= date("Y-m-d H:i:s") ?>)</h1>
</body>

</html>