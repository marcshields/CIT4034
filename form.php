<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $minimum= 5;

        echo " FORM SUBMITTED";
        if(strlen($username)<$minimum)
        {
            echo"username length needs to be longer than 5 characters";
        }
        if (strlen($username))
        {
            
        }

    }
?>

<html>
<head> </head>
<body> 
<p> 
<form action="form.php" method="post">
<input type="text" name="username" placeholder="username">
<input type="password" name="password"><br>
<input type="submit" name="submit">
</form>
</p>

</body>

</html>