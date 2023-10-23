<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bodys.css">
    
    <title>Tutor's Zone</title>
</head>

<body>

    <div class="navbar">
        <div class="header-logo">
            <a href='./index.php'>
            <h1>Tutor's Zone</h1>
            </a>
        </div>
        <div class="header-menu">
            <ul>
                <li> <a href="./"> Home </a> </li>
                <li> <a href="./components/login.php"> Login </a> </li>
                <li> <a href="./components/registration.php"> Register</a> </li>
            </ul>
        </div>
    </div>

    <div id="container">
        <div class='headerslider'>
            <h2 class='text-center p-5'> LOG IN </h2>
        </div>
        <form action="loginAction.php" method="post">
            <div class="md-3 lg-6 sm-12 text-light">
                <label>Email or User : </label>
                <input type="text" name="l_username" placeholder="User or Email" require>
                <br>
            </div>
            <div class="md-3 lg-6 sm-12 text-light">
                <br>
                <label>Password : </label>
                <input type="password" name="l_password" placeholder="password" require>
            </div>
            <br>
            <span id="gettheerrorr"></span>
            <input type="hidden" name="id" value="">
            <button type="submit" value="submit" class="btn btn-light">Log In</button>
        </form>
        <p class="text-secondary">Create a new account <a href="./registration.php">Register</a></p>



    </div>
    <div class="fotter-col">
        <p> All Copyright &copy; 2023 </p>
    </div>
    <script src="../assets/script.js"></script>

</body>

</html>