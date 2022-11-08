<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'dbconnect.php';
 
// Escape user inputs for security

$email = $conn->real_escape_string($_REQUEST['email']);
$message = $conn->real_escape_string($_REQUEST['message']);
 
// Attempt insert query execution
$sql = "INSERT INTO usermessage (email, message) VALUES ('$email', '$message')";
if($conn->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>MySqlEdu - Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg" role="navigation">

        <div class="container-fluid" id="navbarSupportedContent">
            <a class="navbar-brand" href="index.html">MySqlEdu</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.html" aria-current="page">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <article class="container-fluid">
        <h1 class="text-center mb-5">Your Message</h1>
        <p><?php $sql = ""?></p>
    </article>
    <div class="d-flex" style="height: 200px;">
        <div class="vr"></div>
      </div>
    <footer>
A FoOTER
    </footer>
</body>

</html>
