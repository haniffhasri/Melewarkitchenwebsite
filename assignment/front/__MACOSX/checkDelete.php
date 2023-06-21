

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./headerfooterstyle.css">
    <link rel="stylesheet" href="./profile.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap">

    <title>User Update</title>
</head>
<body>
<?php
include_once 'nav.php';
?>
<!---------------------------------------------------- END OF NAVBAR ---------------------------------------->

<!----------------------------------------------- PAGE CONTENT START HERE ----------------------------------->
<main class="bg-image">
    <div class="border">
        <div >
            <h4 class="text-margin">Are you sure to delete this account?</h4>
<p>
          <br> 
				<br> 
            </p>
        

            <div >
                <button class="btn" onclick="location.href='profile.php'">No</button>

                <button class="btn" id="delete-account" style="float: right;"><a href="deleteAccount.php">Delete</a></button>
            </div>
        </div>
    </div>
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
        <?php
            if ($result->num_rows > 0) {
              
            }
        ?>
    </script>


</body>
</html>
