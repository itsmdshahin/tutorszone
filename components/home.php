<?php
// Retrieve the ID from the session
session_start();
include './config.php';
$userId = $_GET['userId'];


if (isset($_SESSION['homepage'])) {
    if (isset($_GET['userId'])) {
        $userId = $_GET['userId'];
        $Select_Query_profile = "SELECT * FROM `register` WHERE id='$userId'";
        $Select_Query_profile_result = mysqli_query($conn, $Select_Query_profile);
        if ($Select_Query_profile_result) {
            if ($row = mysqli_fetch_array($Select_Query_profile_result)) {
                $Names = $row['name'];
                $Images = $row['image'];
            } else {
                echo "No recent logins found.";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        //echo $userId;
    } else {
        echo "User ID not found.";
    }
} else {
    echo "<script>alert('LogIn First!')</script>";
    echo "<script>location.href='login.php'</script>";
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel='stylesheet' href='../assets/css/bodys.css'>
    
    <link rel='stylesheet' href='../assets/css/profilepage.css'>
    <title>Tutor's Zone</title>
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
        <div class='slider'>
            <div class="slide-tag">
                <!-- col-lg-6 text-light p-5 text-center -->
                <h1>Tutor's Zone</h1>
                <p>Hire an expert tutor in your nearest region.</p>
                <button type="submit" class="btn mybtn">Hire a Tutor</button>
            </div>

        </div>

        <div class="adsslider">
            <div class="ads1">
                <div class="images-img">
                    <img src="../assets/image/id-card-solid (1).svg">
                </div>
                <div class="adsnumber">
                    <h2>30,000</h2>
                    <p>Active Tutor's</p>
                </div>
            </div>
            <div class="ads1">
                <div class="images-img">
                    <img src="../assets/image/briefcase-solid.svg">
                </div>
                <div class="adsnumber">
                    <h2>30,000</h2>
                    <p>Employmee</p>
                </div>
            </div>
            <div class="ads1">
                <div class="images-img">
                    <img src="../assets/image/readme (3).svg">
                </div>
                <div class="adsnumber">
                    <h2>110,000</h2>
                    <p>Resouces</p>
                </div>
            </div>
            <div class="ads1">
                <div class="images-img">
                    <img src="../assets/image/thumbs-up-solid (3).svg">
                </div>
                <div class="adsnumber">
                    <h2>1,000</h2>
                    <p>5 star</p>
                </div>
            </div>
        </div>

        <div class='headerslider'>
            <h2 class='text-center p-5 '> Popular Teacher </h2>
            <div class="bodyss">
                <?php
            $cnt = 0;
            include './config.php';
            $all_query = "SELECT * FROM `tutorlist`";
            $alldata = mysqli_query($conn, $all_query);
            echo "<div class='containers'>";
            while ($row = mysqli_fetch_array($alldata)) {
                $cnt = $cnt + 1;
                echo " 
            <div class='cards'>
                <div class='card-headers'>
                    <img src='$row[level13]' alt='rover' />
                </div>
                <div class='card-bodys'>
                    <span class='tags tag-teals'>$row[subject]</span>
                    <h4>
                        $row[title]
                    </h4>
                    <p>
                        $row[bio]
                    </p>
                    <div class='users'>
                        <img src='$row[image]' alt='user' />
                        <div class='user-infos'>
                            <h5>$row[name] <img width='20px' height='20px' src='./image/verified.png'> </h5>
                            <small>2h ago</small>
                        </div>
                    </div>
                    <a href='./previewtutor.php?userId=$userId&email=$row[email]'><span class='tags tag-purple p-2 mt-2'>Contact Now!</span></a>
                    </div>
            </div>";
                if ($cnt == 3) {
                    break;
                }
            }
            echo "</div>";
            ?>
            </div>
        </div>
        <div class='headergap'>

        </div>
        <div class='headerslider'>
            <h2 class='text-center p-5'> Teacher List </h2>
        </div>
        <div class="bodyss">
            <?php
            include './config.php';

            $all_query = "SELECT * FROM `tutorlist`";
            $alldata = mysqli_query($conn, $all_query);
            echo "<div class='containers'>";
            while ($row = mysqli_fetch_array($alldata)) {


                echo " 
            <div class='cards'>
                <div class='card-headers'>
                    <img src='$row[level13]' alt='rover' />
                </div>
                <div class='card-bodys'>
                    <span class='tags tag-teals'>$row[subject]</span>
                    <h4>
                        $row[title]
                    </h4>
                    <p>
                        $row[bio]
                    </p>
                    <div class='users'>
                        <img src='$row[image]' alt='user' />
                        <div class='user-infos'>
                            <h6>$row[name] <img width='5px' height='auto' src='./image/verified.png'> </h6> 
                            <small>2h ago</small>
                        </div>
                    </div>
                    <a href='./previewtutor.php?userId=$userId&email=$row[email]'><span class='tags tag-purple p-2'>Contact Now!</span></a>
                    </div>
            </div>";
            }
            echo "</div>";

            ?>
        </div>


        <div class='become'>
        <h3>In Learning you will teach,
            <br> and in teaching you will learn.</h3>
        <h3 class='header-menu2'> <a href="./tutor.php?userId= <?php echo $userId ?>">Become a Tutor</a> </h3>
        </div>
        
        
        
        <div class='fotter-col p-5'>


            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-light col-sm-4 col-md-3 item">
                        <img src="../assets/image/logo-removebg-preview.png" alt="">
                       
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


</body>

</html>