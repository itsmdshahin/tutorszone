<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bodys.css">
    <link rel="stylesheet" href="./assets/css/profilepage.css">
    <title>Tutor's zone</title>
</head>

<body>

    <div class="">
        <div class="navbar">
            <div class="header-logo">
            <a href='./index.php'>
                    <h1>Tutor's zone</h1>
                </a>
            </div>
            <div class="header-menu">
                <ul>
                    <li> <a href="./"> Home </a> </li>
                    <li> <a href="./components/login.php"> Login </a> </li>
                    <li> <a href="./components/registration.php"> Register </a> </li>
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
                    <p>Active Tutor's</p>
                </div>
            </div>
            <div class="ads1">
                <div class="images-img">
                    <img src="../assets/image/readme (3).svg">
                </div>
                <div class="adsnumber">
                    <h2>30,000</h2>
                    <p>Active Tutor's</p>
                </div>
            </div>
            <div class="ads1">
                <div class="images-img">
                    <img src="../assets/image/thumbs-up-solid (3).svg">
                </div>
                <div class="adsnumber">
                    <h2>30,000</h2>
                    <p>Active Tutor's</p>
                </div>
            </div>
        </div>

        <div class='become'>
        <h3>In Learning you will teach,
            <br> and in teaching you will learn.</h3>
        <h3 class='header-menu2'> <a href="./tutor.php?userId= <?php echo $userId ?>">Become a Tutor</a> </h3>
        </div>

         
        <div class='headergap'>

        </div>
        


       <div class='headerslider'>
            <h2 class='text-center p-5'> Teacher List </h2>
        </div>
        <div class="bodyss">
            <?php
            include './components/config.php';
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
                        <div class='user-infos'>
                            <h5>$row[name]</h5>
                            <small>Active</small>
                        </div>
                    </div>
                </div>
            </div>";
            }
            echo "</div>";
            ?>
        </div>



        <div class="row">
            
            <div class='headerslider'>
                <h2 class='text-center p-5'>Contact Us </h2>
            </div>

            <div class="col-md-6 formcontainer">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name " value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email " value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number " value="" />
                </div>

                <a class="btn btn-primary" style="margin-right: 30px;" href="index.php">
                    Send
                </a>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
                 
            </div>
              
        </div>


        <div class='fotter-col p-5'>


    <div class="container">
        <div class="row justify-content-center">
            <div class="text-light col-sm-4 col-md-3 item">
            <img src="./assets/image/logo-removebg-preview.png" alt="">
           
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