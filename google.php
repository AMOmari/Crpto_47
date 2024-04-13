<?php
if(isset($_POST['submit'])){
    header("Location: https://www.google.com");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Button</title>
</head>
<body>

<form action="redirect.php" method="post">
    <button type="submit" name="submit">Go to Google</button>
</form>

</body>
</html>
