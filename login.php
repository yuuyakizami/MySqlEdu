<!DOCTYPE html>
<html lang="en">
<title>MySqlEdu - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body>
<?php include 'login-header.php';?>

<!-- Validate Input -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require('process-login.php');
} // End of the main Submit conditional.
?>

<article class="container-fluid">
        <h1 class="text-center mb-5">Login</h1>
        <form class="container" method="post" action="login.php" name="loginform" id="loginform">
            <div class="mx-auto w-25 form-floating mb-3"> <!-- mb = adding margin bottom-->
                <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" class="form-control" id="floatingInput" aria-describedby="emailHelp">
                <label for="floatingInput" class="form-label" placeholder="name@example.com">Username</label>
            </div>
            <div class="mx-auto w-25 form-floating mb-3"> <!-- mb = adding margin bottom-->
                <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" class="form-control" id="floatingInput" aria-describedby="emailHelp">
                <label for="floatingInput" class="form-label">Password</label>
            </div>
            <div class="d-flex justify-content-center"> 
                <button type="submit" class="btn btn-primary" name="login" value="Sign In">Login</button>
            </div>
        </form>
    </article>
</body>
</html>