<!DOCTYPE html>
<html lang="en">


<head>
  <?php require_once "router.php"; ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    $title = isset($page_title) ? $page_title : "My Website";
    echo $title;
    ?>
  </title>
</head>

<body>


  <?php
  $router = new AppRouter();
  $page_title = $router->get_page_title();

  echo $page_title;

  ?>
  <a href="./about.php" aria-label="About Page">
    Link to php file
  </a>


  <?php
  $example_class = new ExampleClass();
  echo $example_class->example_static_method();
  ?>

</body>

</html>