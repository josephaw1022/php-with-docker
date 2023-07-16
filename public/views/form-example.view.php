<!DOCTYPE html>
<html lang="en">
<?php page_head($page_title); ?>

<body>
<h1 class="text-2xl text-center w-full" >
    This is the form example page
</h1>

<form action="actions/submit-form.php" method="POST" class="flex flex-col gap-3 h-full items-center justify-center w-full">
<label for="name">Name</label>
<input type="text" name="name" id="name" class="border-2 rounded-lg ">

<label for="email">Email</label>
<input type="email" name="email" id="email" class="border-2 rounded-lg" >


<button type="submit" class="bg-blue-300 rounded-lg w-full px-2 py-3">
    Submit
</button>



</form>


</body>
</html>