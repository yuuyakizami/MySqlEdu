<?php
session_start();
if (!isset($_SESSION)) {
    header("Location: login.php");
    exit();
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MySqlEdu - Admin View Users</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap link -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php include 'admin-header.php'; ?>
    <div class="col-sm-8">
        <h2 class="text-center">These are the registered users</h2>
        <?php
        try {
            // This script retrieves all the records from the users table.
            require('mysqli_connect.php'); // Connect to the database.
            // Make the query:
            // Nothing passed from user safe query									#1
            $query = "SELECT last_name, first_name, email, ";
            $query .= "DATE_FORMAT(registration_date, '%M %d, %Y')";
            $query .= "AS regdat, userid FROM users ORDER BY registration_date ASC";
            $result = mysqli_query($dbcon, $query); // Run the query.
            if ($result) { // If it ran OK, display the records.
                // Table header. 									#2
                echo '
            <table class="table table-striped">
            <thead>
            <tr>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Email</th>
            <th scope="col">Date Registered</th>
            </thead>
            </tr>';
                // Fetch and print all the records:							#3
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    // reduce the chance of XSS exploits
                    $user_id = htmlspecialchars($row['userid'], ENT_QUOTES);
                    $last_name = htmlspecialchars($row['last_name'], ENT_QUOTES);
                    $first_name = htmlspecialchars($row['first_name'], ENT_QUOTES);
                    $email = htmlspecialchars($row['email'], ENT_QUOTES);
                    $registration_date = htmlspecialchars($row['regdat'], ENT_QUOTES);

                    echo '<tr>
                    <td><a href="edit_user.php?id=' . $user_id . '">Edit</a></td>
                    <td><a href="delete_user.php?id=' . $user_id . '">Delete</a></td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['regdat'] . '</td>
                    </tr>';
                }
                echo '</table>'; // Close the table so that it is ready for displaying.
                mysqli_free_result($result); // Free up the resources.
            } else { // If it did not run OK.
                // Error message:
                echo '<p class="error">The current users could not be retrieved. We apologize';
                echo ' for any inconvenience.</p>';
                // Debug message:
                // echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
                exit;
            } // End of if ($result) 
            mysqli_close($dbcon); // Close the database connection.
        } catch (Exception $e) // We finally handle any problems here                
        {
            // print "An Exception occurred. Message: " . $e->getMessage();
            print "The system is busy please try later";
        } catch (Error $e) {
            //print "An Error occurred. Message: " . $e->getMessage();
            print "The system is busy please try again later.";
        }
        ?>

    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script>
        console.log("Page fully loaded success")
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>