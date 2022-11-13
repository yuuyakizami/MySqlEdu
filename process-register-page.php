<?php
// This script is a query that INSERTs a record in the users table.
// Check that form has been submitted:
        $errors = array(); // Initialize an error array.                                #1
       // Check for a first name:                                                       #2
      $first_name = filter_var($_POST['first_name'], FILTER_UNSAFE_RAW);
      if(empty($first_name)){
       $errors[] = 'You Forgot to enter your First Name';
      }
      // Check for a last name:                                                     
      $last_name = filter_var($_POST['last_name'], FILTER_UNSAFE_RAW);
      if(empty($last_name)){
       $errors[] = 'You Forgot to enter your Last Name';
      }
       // Check for an email address:                                       #2
       $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
        if  ((empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
               $errors[] = 'You forgot to enter your email address';
               $errors[] = ' or the e-mail format is incorrect.';
        }
       // Check for a password and match against the confirmed password:               #3
       $password1 = trim($_POST['password1']);
       $password2 = trim($_POST['password2']);
       if (!empty($password1)) {
              if ($password1 !== $password2) {
                       $errors[] = 'Your two passwords did not match.';
               }
        } else {
               $errors[] = 'You forgot to enter your password.';
        }       if (empty($errors)) { // If everything's OK.                            #4
try {
        // Register the user in the database...
        // Hash password current 60 characters but can increase
            $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);           //#5
             require ('mysqli_connect.php'); // Connect to the db.                    //#6
        // Make the query:                                                              #7
        $query = "INSERT INTO users (user_id, first_name, last_name, email, password, registration_date) ";
                $query .="VALUES(' ', ?, ?, ?, ?, NOW() )";                           //#8
        $q = mysqli_stmt_init($dbcon);                                                //#9
        mysqli_stmt_prepare($q, $query);
        // use prepared statement to ensure that only text is inserted
        // bind fields to SQL Statement
        mysqli_stmt_bind_param($q, 'ssss', $first_name, $last_name, $email, $hashed_passcode);
     // execute query
        mysqli_stmt_execute($q);
        if (mysqli_stmt_affected_rows($q) == 1) { // One record inserted               #10
                header ("location: register-thanks.php");
                exit();
                } else { // If it did not run OK.
                // Public message:
                                $errorstring = "<p class='text-center col-sm-8' style='color:red'>";
                        $errorstring .= "System Error<br />You could not be registered due ";
                        $errorstring .= "to a system error. We apologize for any inconvenience.</p>";
                        echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
                // Debugging message below do not use in production
                //echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $query . '</p>';
                               mysqli_close($dbcon); // Close the database connection.
                // include footers then close program to stop execution
                     //    echo '<footer class="jumbotron text-center col-sm-12"
                     //                   style="padding-bottom:1px; padding-top:8px;">
                     //                           include("footer.php");
                     //                          </footer>';
                             exit();
       }
   }
   catch(Exception $e) // We finally handle any problems here                          #11
   {
     // print "An Exception occurred. Message: " . $e->getMessage();
     print "The system is busy please try later";
   }
   catch(Error $e)
   {
      //print "An Error occurred. Message: " . $e->getMessage();
      print "The system is busy please try again later.";
   }
        } else { // Report the errors.                                                 #12
               $errorstring = "Error! The following error(s) occurred:<br>";
               foreach ($errors as $msg) { // Print each error.
                        $errorstring .= " - $msg<br>\n";
               }
               $errorstring .= "Please try again.<br>";
               echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
               }// End of if (empty($errors)) IF.
