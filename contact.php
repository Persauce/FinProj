<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST['name'];
$email = $_POST['email'];
$message = $POST['message'];
$subscribe = isset($_POST['subscribe']) ? $_POST['subscribe'] : '';
echo "<h1>name:</h1> " . htmlspecialchars($name);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Bootstrap Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
    <div class="row">
            <nav class="navbar navbar-expand-md
                    justify-content-start
                    bg-dark navbar-dark
                    col-12">

                <!-- Brand -->
                <a class="navbar-brand" href="#">Logo</a>
                <!-- Responsive Button for the smaller menu -->
                <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <!-- Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop"
                               data-toggle="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Education
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                                <a class="dropdown-item" href="#">Link 4</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        <div class="container">
          <div class="row">
            <form method="POST">
                <div class="form-group">
                    <label for="name">First Name:</label>
                    <input type="text" class="form-control" id="Name"
                           placeholder="First name" name="firstname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email"
                           placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="4" cols="90"></textarea>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input"
                               type="checkbox" name="subscribe"> Subscribe
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </row>
</div>
        </div>
 <footer class="footer page-footer font-small ">
     <div class="container">
        <div class="row">
            <span class="text-muted">&copy; Persaud, Dave 2024 |  Terms Of Use  |  Privacy Statement</span>
        </div>
     </div>
  </footer>
</div>


    <!-- Javascript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
</script>

</body>
</html>