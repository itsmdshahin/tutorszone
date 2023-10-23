<?php

session_start(); // Start the session

include './config.php';

if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];

    // Store the userId in the session
    $_SESSION['userId'] = $userId;

    $select_Query = "SELECT * FROM `register` WHERE id='$userId'";
    $select_Query_Result = mysqli_query($conn, $select_Query);
    if ($select_Query_Result) {
        if ($row = mysqli_fetch_array($select_Query_Result)) {
            $name = $row['name'];
            $image = $row['image'];
            $email = $row['email'];
            $username = $row['username'];
            $mobile = $row['mobile'];
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
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>

    <link rel='stylesheet' href='../assets/css/style.css'>
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


        <div class="maincontainerforprofile">
            <div class="profile-div">
               
                <img width='150px' src='<?php echo $image ?>' alt='Profile'>
                <h4>Name : <?php echo $name ?> <img width='20px' height='20px' src='./image/verified.png'> </h4>
                <h5>Email : <?php echo $email ?> </h5>
                <h5>Username : <?php echo $username ?> </h5>
                <h5>Mobile : <?php echo $mobile ?> </h5>
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"></label>
                    5 Start <small>(100 Review)</small>
                </div>

                <h5> Online Tutor <?php  ?> </h5>
                <h5>Leading University <?php  ?> </h5>
                <div class="btnforprofile">
                    <button class="btn btn-light"> <a href='./profileedit.php?userId= <?php echo $userId ?>'> Edit
                            Profile</a></button>
                    <button class="btn btn-light"> <a href='#'>Live Session</a></button>
                    <button class="btn btn- "> <a href='#'>Verify an expert</a></button>
                </div>
            </div>
            <div class="profile-animation">
                <!-- <h1 class="text-center">This is good</h1> -->
            </div>

        </div>

        <div class="become-div">
            <h4 class='pheader text-center pt-5'>List of Tution</h4>
          
        </div>
     
        <div class='tabledata'>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Bio</th>
                        <th>Subject</th>
                        <th>Skill</th>
                        <th>Exprience</th>
                        <th>Image</th>
                        <th>Update/Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $alldata =  mysqli_query($conn, "SELECT * FROM `tutorlist` WHERE email='$email' ");

                    while ($row = mysqli_fetch_array($alldata)) {
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[title]</td>
                            <td>$row[bio]</td>
                            <td>$row[subject]</td>
                            <td>$row[skill]</td>
                            <td>$row[exprience]</td>
                            
                            <td>
                                <img width='100px' height='auto' src='$row[level13]' alt='product image'>
                            </td>
                            <td>
                                <a class='btn btn-light text-secondary' href='update.php?userId=$userId&mid=$row[id]'> Update </a>
                                <br><br>
                                <a class='btn btn-light text-secondary' href='delete.php?userId=$userId&mid=$row[id]'> Delete </a>
                            </td>
                            
                        </tr>
                        ";
                    }
                    ?>

                </tbody>
            </table>

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

</body>

</html>