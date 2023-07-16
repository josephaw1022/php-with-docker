<?php

require "../views/partials/head.php";

$name = $_POST["name"];
$email = $_POST["email"];

// Redirect if the name or email is empty
if (empty($name) || empty($email)) {
    header('Location: /form');
}

$page_title = "Form Example";

// stringify and print the session data
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;

?>






<!DOCTYPE html>
<html lang="en">
<?php page_head($page_title); ?>

<body>

    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
    <h1 class="text-2xl text-center w-full">
        This is the post form example page
    </h1>

    <p>
        Name:
        <?php echo $name; ?>
    </p>

    <p>
        Email:
        <?php echo $email; ?>
    </p>

    <a href="/" class="bg-red-400 text-white rounded-lg w-48 px-2 py-2 mt-5 ">
        Go back home
    </a>

</body>

</html>