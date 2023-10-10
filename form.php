<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<h1>Login page</h1>
<Form action="form.php"method="POST">
    <label>User name </label>
    <Input type="text"name="user" name><br><hr>
    
    <label>Password</label>
    <input type="text"name="password"><br>
    <Button type="submit">submit</button>

</form>
<?php>
$username;
$password;
$username=$_POST['username'];
$password=$_POST['password'];
echo "my username is=$usenaame";
echo "my password is=$password";
?>
</h1>
</html>