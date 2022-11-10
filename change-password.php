<?php require 'mysqli_connect.php'; ?>

<!DOCTYPE html>

<head>
    <html lang="en">
    <title>MySqlEdu - Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="verify.js"></script>
</head>

<body>

    <?php include 'change-password-header.php' ?>
    <article class="container-fluid">
        <h1 class="text-center mb-5">Change Password</h1>
        <!-- Validate Input-->
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            require('process-change-password.php');
        }?>
        <form class="container" method="post" action="change-password.php" name="regform" id="regform" onsubmit="return checked();">
        <div class="mx-auto w-25 form-floating mb-3">
          <!-- mb = adding margin bottom-->
          <input
            type="email"
            name="email"
            class="form-control"
            id="floatingInput"
            aria-describedby="emailHelp"
            value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"
          />
          <label
            for="floatingInput"
            class="form-label"
            placeholder="name@example.com"
            >Email Address:</label
          >
          <!-- <div id="emailHelp" class="form-text"> -->
          </div>
        </div>
        <div class="mx-auto w-25 form-floating mb-3">
                <!-- mb = adding margin bottom-->
                <input type="password" minlength="8" maxlength="12" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" class="form-control" id="floatingInput" id="password1" placeholder="Password" required>
                <label for="floatingInput" class="form-label">Current password</label>
                <span id="message">Between 8 and 12 characters.</span>
            </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </form>
    </article>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>