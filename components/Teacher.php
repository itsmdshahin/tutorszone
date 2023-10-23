<?php

include './config.php';


//$select_Query = "SELECT * FROM `register`";
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    // echo $userId;
    $select_Query = "SELECT * FROM `register` WHERE id='$userId'";
    $select_Query_Result = mysqli_query($conn, $select_Query);
    if ($select_Query_Result) {
        if ($row = mysqli_fetch_array($select_Query_Result)) {
            $name = $row['name'];
            $image = $row['image'];
            $email = $row['email'];
            $username = $row['username'];
            $mobile = $row['mobile'];

            // echo "Name: $name<br>";
            // echo "Image: $image<br>";
            // echo "Email: $email<br>";
            // echo "Username: $username<br>";
            // echo "Mobile: $mobile<br>";
        } else {
            echo "No recent logins found.";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Error: " . mysqli_error($conn);
}





?>

    
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel='stylesheet' href='../assets/css/stylefor.css'>
    <link rel='stylesheet' href='../assets/css/bodys.css'>
    
    <title>Tutor's zone</title>
</head>

<body>

    <div class=''>
        <div class='navbar'>
            <div class='header-logo'>
                <a href='./home.php?userId=<?php echo $userId ?>'>
                    <img src="../assets/image/logo-removebg-preview.png" alt="">
                </a>
            </div>
            <div class='header-menu'>
                <ul>
                    <li> <a href='./home.php?userId=<?php echo $userId ?>'> Home </a> </li>
                    <li> <a href='./Teacher.php?userId=<?php echo $userId ?>'> Teacher </a> </li>
                    <li> <a href='./tutor.php?userId=<?php echo $userId ?>'> Become Tutor </a> </li>
                    <li><a href='./profile.php?userId=<?php echo $userId ?>'>Profile</a></li>
                    <li> <a href='./logout.php'> Logout</a> </li>
                </ul>
            </div>
        </div>

        <div class='containerforuser row'>

            <?php
            $alluserdata = "SELECT * FROM `register`";
            $resultdata = mysqli_query($conn, $alluserdata);
            while ($row = mysqli_fetch_array($resultdata)) {
                echo "
                
                <div class='card-wrapper col-lg-2'>

                <div class='card profile-two'>

                    <div class='card-image profile-img--two'>
                        <img width='100%' src='$row[image]' alt='profile two'>
                    </div>

                    <ul class='social-icons'>
                        <li>
                            <a href=''>
                                <i class='fab fa-facebook-f p-3'></i>
                            </a>
                        </li>
                        <li>
                            <a href=''>
                                <i class='fab fa-instagram p-3'></i>
                            </a>
                        </li>
                        <li>
                            <a href=''>
                                <i class='fab fa-twitter p-3'></i>
                            </a>
                        </li>
                        <li>
                            <a href=''>
                                <i class='fab fa-dribbble p-3'></i>
                            </a>
                        </li>
                    </ul>


                    <div class='details jane'>
                        <h2>$row[name]
                            <br>
                            <span class='job-title'>Teacher</span>
                        </h2>
                    </div>
                </div>
              </div><!-- END box wrapper -->
           
                ";
            }
            ?>
        </div><!-- END container -->



        <div class='fotter-col p-5'>


            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-light col-sm-4 col-md-3 item">
                        <img src="../assets/image/logo-removebg-preview.png" alt="">
                        <!-- <h3>Quick Links</h3>
                       <hr>
                       <ul>
                           <li ><a href="#" class="text-light">Home</a></li>
                           <li ><a href="#" class="text-light">Menu</a></li>
                           <li ><a href="#" class="text-light">Order</a></li>
                       </ul> -->
                    </div>
                    <div class="text-light col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <hr>
                        <ul>
                            <li type="none"><a href="#" class="text-light">About Us</a></li>
                            <li type="none"><a href="#" class="text-light">Leading University</a></li>
                            <li type="none"><a href="#" class="text-light">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="text-light col-sm-4 col-md-3 item">
                        <h3>Service</h3>
                        <hr>
                        <ul>
                            <li type="none"><a href="#" class="text-light"></a>Contact Us</li>
                            <li type="none"><a href="#" class="text-light">Register</a></li>
                            <li type="none"><a href="#" class="text-light">Login</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 item-social pt-5">
                        <a href="#"><i class="icon ion-social-facebook p-4 text-white"></i></a>
                        <a href="#"><i class="icon ion-social-twitter p-4 text-white"></i></a>
                        <a href="#"><i class="icon ion-social-snapchat p-4 text-white"></i></a>
                        <a href="#"><i class="icon ion-social-instagram p-4 text-white"></i></a>
                        <p class="copyright text-light">TUTOR'S ZONE © 2023 by LU_SEA </p>
                    </div>
                </div>
            </div>



        </div>

    </div>
    <!-- <script src='https://kit.fontawesome.com' crossorigin='anonymous'></script> -->

</body>

</html>