<?php require 'mysqli_connect.php';?>

<!DOCTYPE html>
<html lang="en">
<title>MySqlEdu - Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body>
<nav class="navbar navbar-expand-lg" role="navigation">

<div class="container-fluid" id="navbarSupportedContent">
    <a class="navbar-brand" href="index.php">MySqlEdu</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="login.php" >Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="register.php" aria-current="page">Register</a>
            </li>
</ul>
    </div>
</div>
</nav>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {                                       //#1
     require('process-register-page.php');
    } // End of the main Submit conditional.
   ?>
<article class="container-fluid">
        <h1 class="text-center mb-5">Register</h1>
        <form class="container" method="post" action="register-page.php" onsubmit="returnchecked()">
            <!-- name -->
            <div class="mx-auto w-25 form-floating mb-3"> <!-- mb = adding margin bottom-->
                <input type="text" maxlength="30" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" class="form-control" id="floatingInput" required>
                <label for="floatingInput" class="form-label" placeholder="name@example.com">Example Name</label>
            </div>
            <!-- Age -->
            <div class="mx-auto w-25 form-floating mb-3"> <!-- mb = adding margin bottom-->
                <input type="number" min="15" max="50" name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>" class="form-control" id="floatingInput" required>
                <label for="floatingInput" class="form-label" placeholder="name@example.com">Example Age</label>
            </div>
            <!-- Email -->
            <div class="mx-auto w-25 form-floating mb-3"> <!-- mb = adding margin bottom-->
                <input type="email" maxlength="60" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" class="form-control" id="floatingInput" required>
                <label for="floatingInput" class="form-label" placeholder="name@example.com">Example Email</label>
            </div>
            <div class="mx-auto w-25 form-floating mb-3"> <!-- mb = adding margin bottom-->
                <input type="password"  minlength="8" maxlength="12" name="password" value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>" class="form-control" id="floatingInput">
                <label for="floatingInput" class="form-label">Password</label>
            </div>
            <div class="d-flex justify-content-center"> 
                <button type="submit" class="btn btn-primary" name="register" value="Register">Register</button>
            </div>
        </form>
    </article>
</body>
</html>