<?php
require_once 'php/init.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TODO-LIST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <nav class="navbar navbar-dark bg-dark shadow">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">TODO-LIST</span>
    </div>
  </nav>
  <div class="container mt-5">
    <?php controller(); ?>
    <form action="" method="GET">
      <div class="row">
        <div class="col-md-10 form-group">
          <input class="form-control" type="text" name="items" placeholder="Get your ass up and add a task!" required />
        </div>
        <div class="col-md">
          <input class="btn btn-success" type="submit" value="Add Task" />
        </div>
      </div>
    </form>
    <?php viewTable(); ?>
  </div>

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>