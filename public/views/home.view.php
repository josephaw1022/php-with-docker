<?php

function list_item($value)
{
    echo <<<HTML
         <p class='rounded-lg w-48 px-2 py-3  text-white text-center font-bold bg-gradient-to-tr from-red-400 to-red-500 hover' >
                    {$value}
        </p>
    HTML;
}

?>

<!DOCTYPE html>
<html lang="en">

<?php page_head("Form Example"); ?>


<body>

    <?php require "partials/navbar.php"; ?>

    <h1>
        This is the home page
    </h1>

    <div class="flex flex-col gap-4 items-center bg-gradient-to-r from-cyan-500 to-blue-500 py-2 px-2 ">

        <?php
        foreach ($list_of_values as $value) {
            list_item($value);
        }
        ?>

    </div>
</body>

</html>