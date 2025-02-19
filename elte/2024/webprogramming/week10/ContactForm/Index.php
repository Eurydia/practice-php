<?php
$error = [
  "name" => null,
  "email" => null,
  "phone" => null
];

if (isset($_GET["hidden"])) {
  $error["name"] = !isset($_GET["name"]) || empty(trim($_GET["name"]))
    ? "Name is required"
    : null;
}


var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form</title>
  <style>
    form {
      display: flex;
      flex-direction: column;
      width: fit-content;
      gap: 0.5rem;
    }

    .warn {
      color: maroon;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <form action=".">
    <input type="text" name="name" placeholder="Name" value="<?= $_GET["name"] ?? '' ?>" />
    <?php if (isset($error["name"])): ?>
      <span class="warn">Warning: <?= $error["name"] ?></span>
    <?php endif; ?>
    <input type="email" name="email" placeholder="Email" />
    <input type="tel" name="phone-1" placeholder="Phone" />
    <input type="tel" name="phone-2" placeholder="Phone" />
    <input type="tel" name="phone-3" placeholder="Phone" />
    <input type="tel" name="phone-4" placeholder="Phone" />
    <input type="hidden" name="hidden" value="1" />
    <button type="submit">Submit</button>
  </form>

</body>


</html>