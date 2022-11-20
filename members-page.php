<?php
// start session
session_start();

if (!isset($_SESSION['user_level']) or ($_SESSION['user_level']) != 0) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MySqlEdu - Members-Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap link -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include 'members-header.php'; ?>
    <article class="container-fluid">
        <h1 class="text-center fs-1 fw-bold">Members Page</h1>
        <?php
        //$_SESSION['first_name'] = (int) $row[2];

        echo '<h2>Welcome to the Student Page ';
        if (isset($_SESSION['first_name'])) {
            echo "{$_SESSION['first_name']}";
        }
        echo '</h2>';
        ?>

    </article>
    <div class="d-flex" style="height: 200px;">
        <div class="vr"></div>
    </div>
    <!-- <script>
        alert("Hello There");
        console.log("Hello Zairo");
    </script> -->

    <footer class="container d-inline-flex align-bottom">FOOTER
        <?php error_reporting(E_WARNING | E_ERROR); ?>
        <?php $message = 'hello world zai';
        echo $message;
        echo PHP_VERSION;
        ?>
    </footer>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        console.log("Page fully loaded success")
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>