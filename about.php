<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCure</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>SC</strong>ure </a>
        Hello, <?php echo $user_data['first_name']; ?>
        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="about.html">about</a>

            <a href="doctors.html">doctors</a>
            <!-- <a href="#appointment">appointment</a> -->
            <!-- <a href="#review">review</a> -->
            <a href="blogs.html">blogs</a>
            <a href="logout.php">Logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy Skin</h3>
            <p> we emphasize the importance of maintaining good skin health to ensure proper bodily functions and
                processes. Healthy skin can help protect against a variety of skin diseases and disorders, while also
                contributing to overall physical health and well-being.</p>
            <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>150+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1030+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>24/7</h3>
            <p>Online Consult</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>10+</h3>
            <p>Skin diseases Detection</p>
        </div>

    </section>



    <!-- about section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>free checkups</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> -->
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 online consult</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> -->
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>

                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>Health Awareness</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> -->
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>SKin disease Treatment</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> -->
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p> -->
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>















    <!-- appointmenting section starts   -->

    <!-- <section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>-->







    <!-- appointmenting section ends -->

    <!-- review section starts  -->



    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"> our <span>blogs</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by win coder </a>
                    </div>
                    <h3>What Is Skin Cancer?</h3>
                    <p>Skin cancer is the out-of-control growth of abnormal cells in the epidermis, the outermost skin
                        layer,caused by unrepaired DNA</p>
                    <a href="https://www.skincancer.org/skin-cancer-information/" class="btn"> learn more <span
                            class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> Plain Rice </a>
                    </div>
                    <h3>Skin Cancer Stages</h3>
                    <p>Cancer stages describe the size of the primary tumor and how far cancer has spread from where it
                        started.</p>
                    <a href="https://www.healthline.com/health/stages-of-skin-cancer" class="btn"> learn more <span
                            class="fas fa-chevron-right"></span> </a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i>Plain Rice </a>
                    </div>
                    <h3>Can Rashes Be a Sign of Cancer?</h3>
                    <p>Rashes on the skin, such as bumps or redness, typically result from contact with an irritant.
                    </p>
                    <a href="https://www.healthline.com/health/skin-cancer-rash" class="btn"> learn more <span
                            class="fas fa-chevron-right"></span> </a>
                </div>
            </div>


        </div>

    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="index.html"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="about.html"> <i class="fas fa-chevron-right"></i> about </a>
                <!-- <a href="#services"> <i class="fas fa-chevron-right"></i> services </a> -->
                <a href="doctors.html"> <i class="fas fa-chevron-right"></i> doctors </a>
                <!-- <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a> -->
                <!-- <a href="#review"> <i class="fas fa-chevron-right"></i> review </a> -->
                <a href="blogs.html"> <i class="fas fa-chevron-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i>Skin Cancer Detection </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Skin Pimple Detection </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Appointment Booking </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <!-- <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a> -->
            </div>

            <div class="box">
                <h3>appointment info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 9356567276 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91 9356567276 </a>
                <a href="#"> <i class="fas fa-envelope"></i> priyakriplani950@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> bhoyarradhika@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Nagpur,Maharashtra </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i>Facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> created by <span>Plain Rice</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->


    <!-- js file link  -->
    <script src="js/script.js"></script>

</body>

</html>