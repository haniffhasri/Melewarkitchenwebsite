<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./headerfooterstyle.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap">
    

    <title>Login | Melewar Kitchen</title>
</head>
<body>
    <header>
        <?php
        include_once 'nav.php';
        ?>
    </header>
    <!---------------------------------------------------- END OF NAVBAR ---------------------------------------->

    <!----------------------------------------------- PAGE CONTENT START HERE ----------------------------------->
    <main class="bg-image">
        <div class="border">
            <div class="form-box">
                <h2>Registration</h2>
                <form action="register.php" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="userName"></ion-icon></span>
                        <input type="text" name="userName" required>
                        <label>Username</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input id="email" type="text" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="phone"></ion-icon></span>
                        <input type="text" name="phoneNumber" required>
                        <label>Phone number</label>
                    </div>
                    
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input id="password" type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                      
                    </div>
                    <button id="regbtn" type="submit" class="btnSubmit">Register</button>
                    <div class="login-register">
                        <p>Already have an account? 
                            <a href="login.php" class="login-link">Login</a> </p>
                    </div>
                </form>
            </div>
        </div>

        <?php
            include 'config.php';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userName'])) {
                $userName = mysqli_real_escape_string($mysqli, $_POST['userName']);
                $email = mysqli_real_escape_string($mysqli, $_POST['email']);
                $phoneNumber = mysqli_real_escape_string($mysqli, $_POST['phoneNumber']);
                $password = mysqli_real_escape_string($mysqli, $_POST['password']);

                // Validate input data
                if (empty($userName) || empty($email) || empty($phonenumber) || empty($password)) {
                    echo 'Please fill in all the fields.';
                } else {
                    // Hash the password
                   

                    // Prepare and execute the query
                    $query = "INSERT INTO user (userName, email, phoneNumber, `password`) VALUES ('$userName', '$email', '$phoneNumber', '$password')";
                    $result = mysqli_query($mysqli, $query);

                    if ($result) {
                        $_SESSION['logged_in'] = true;
                        exit;
                    } else {
                        echo 'Error: ' . mysqli_error($mysqli);
                    }
                }
            }
        ?>
    </main>
    <!------------------------------------------------- END OF PAGE CONTENT ------------------------------------->

    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-1">
                <a href="home.html" class="footer-logo"><h4>Melewar Kitchen</h4></a>
                <p>
                    Your Favourite Delicacies,<br> Truly Nogori!
                </p>
            </div>

            <div class="footer-2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="profile.html">Profile</a></li>
                </ul>
            </div>

            <div class="footer-3">
                <h4>Privacy</h4>
                <ul class="privacy">
                    <li><a href="privacy policy.html">Privacy Policy</a></li>
                    <li><a href="terms&condition.html">Terms & Conditions</a></li>
                    <li><a href="return policy.html">Refund Policy</a></li>
                </ul>
            </div>

            <div class="footer-4">
                <h4>Contact Us</h4>
                <div>
                    <p>+(01)234567898</p>
                    <p>melewarkitchen@gmail.com</p>
                </div>

                <ul class="footer-socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-copyright">
            <small>All Right Reserved &copy; 2023 - Melewar Kitchen</small>
        </div>
    </footer>
    <!------------------------------------------------ End Of Footer ---------------------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./navmenu.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            //when window width is >= 600px
            breakpoints: {
                600: {
                    slidesPerView: 2
                }
            }
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        <?php if(!empty($errorMessages)): ?>
           //When the error message exists, a Tooltip pops up
            for (var i = 0; i < errorMessages.length; i++) {
            alert(errorMessages[i]);
             }
        <?php endif; ?>
    </script>
    
  <script>
        <?php
            if ($result->num_rows > 0) {
                echo "alert('Please change your register information.');";
            }
        ?>
    </script>

</body>
</html>