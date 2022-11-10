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
<nav class="navbar navbar-expand-lg" role="navigation">

<div class="container-fluid" id="navbarSupportedContent">
    <a class="navbar-brand" href="index.php">MySqlEdu</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="login.php" aria-current="page">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="register.php">Register</a>
            </li>
</ul>
    </div>
</div>
</nav>


<article class="container-fluid">
        <h1 class="text-center mb-5">Login</h1>
        <form class="container" method="post" action="validate.php">
            <div class="mx-auto w-25 form-floating mb-3"> <!-- mb = adding margin bottom-->
                <input type="username" name="username" value="" class="form-control" id="floatingInput" aria-describedby="emailHelp">
                <label for="floatingInput" class="form-label" placeholder="name@example.com">Username</label>
            </div>
            <div class="mx-auto w-25 form-floating mb-3"> <!-- mb = adding margin bottom-->
                <input type="password" name="password" value="" class="form-control" id="floatingInput" aria-describedby="emailHelp">
                <label for="floatingInput" class="form-label">Password</label>
            </div>
            <div class="d-flex justify-content-center"> 
                <button type="submit" class="btn btn-primary" name="login" value="Sign In">Login</button>
            </div>
        </form>
    </article>
</body>
</html>