<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<article class="container-fluid">
        <h1 class="text-center mb-5">Login</h1>
        <form class="container" method="post" action="message.php">
            <div class="mx-auto w-25 form-floating mb-3"> <!-- mb = adding margin bottom-->
                <input type="username" name="username" class="form-control" id="floatingInput" aria-describedby="emailHelp">
                <label for="floatingInput" class="form-label" placeholder="name@example.com">Email Address:</label>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mx-auto w-25 mb-3 input-group">
                <label for="Message1"  class="input-group-text">Message:</label>
                <textarea  class="form-control" name="message" id="Message1" placeholder="Leave a comment here"></textarea>
            </div>
            <div class="d-flex justify-content-center"> <button type="submit" class="btn btn-primary">Submit</button></div>
          
        </form>
    </article>
</body>
</html>