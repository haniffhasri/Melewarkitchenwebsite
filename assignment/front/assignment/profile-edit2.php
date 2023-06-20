<?php
session_start();
include_once 'config.php';
$user = [
    'userID' => '',
    'userName' => '',
    'email' => '',
    'phoneNumber' => '',
    'password' => '',
    'birthDate' => '',
    'address' => ''
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST['userName']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password'])) {
        echo "<script>alert('Please fill in all the required fields.');</script>";
        // 提示用户填写所有必填字段
        exit();
    }

$query = "select * from user where userName ='".$_SESSION["username"]."'";
$result = $mysqli->query($query);

if($result->num_rows > 0){
    $data=[];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[]=$row;
    }
    $user=$data[0];
}

 // 检查是否有更改
 if ($_POST['userName'] == $user['userName'] &&
 $_POST['email'] == $user['email'] &&
 $_POST['phone'] == $user['phoneNumber'] &&
 $_POST['password'] == $user['password'] &&
 $_POST['birthday'] == $user['birthDate'] &&
 $_POST['address'] == $user['address']) {
 echo "<script>alert('No changes made to the profile.');</script>";
 // 给出提示消息
 // 终止更新操作或重定向到其他页面
 header("Location: profile.php");
}
    
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $userID = $_POST['userID'];
    $phoneNumber = $_POST['phone'];
    $password = $_POST['password'];
    $birthDate = $_POST['birthday'];
    $address = $_POST['address'];


    $query = "select * from user where userName ='".$userName."' and userID <>".$userID;
    $result = $mysqli->query($query);
    if($result->num_rows > 0){
        echo "<script>alert('This username already exists.');</script>";
        // prompt

    } 
    

        $query = "select * from user where email ='".$email."' and userID <>".$userID;
        $result = $mysqli->query($query);
        if($result->num_rows > 0){
            echo "<script>alert('This email already exists.');</script>";
            // prompt
  
        } 
            $query = "select * from user where phoneNumber ='".$phoneNumber."' and userID <>".$userID;
            $result = $mysqli->query($query);
            if($result->num_rows > 0){
                echo "<script>alert('This phone number already exists.');</script>";
                // prompt
       
            } 
            
                $query = "update `user` set userName='".$userName."',email='".$email."',phoneNumber='".$phoneNumber."',password='".$password."',birthday='".$birthDate."',address='".$address."' where userID=".$userID;
                if ($mysqli->query($query)) {
                    header("Location: profile.php");
                } else {
                // Execution failed
                     echo "<script>alert('Update profile failed! Please try again.');</script>";
                }
       
      

}

?>
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

// 在页面顶部添加以下PHP代码，用于显示用户信息
$query = "SELECT * FROM user WHERE userName = '".$_SESSION["username"]."'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    $user = $data[0];
}

?>
<!---------------------------------------------------- END OF NAVBAR ---------------------------------------->

<!----------------------------------------------- PAGE CONTENT START HERE ----------------------------------->
<main class="bg-image">
    <div class="profile_border">
        <div class="form-box login">
            <h2>Edit Profile</h2>
            <form action="profile-edit.php" method="post" class="form-container">
                <input type="hidden"  id="userID" name="userID" value="<?php echo $user['userID']?>">

                <div class="form-group">
                    <label for="name">*Username:</label>
                    <input type="text"  id="name" name="userName" value="<?php echo $user['userName']?>">
                </div>
                <div class="form-group">
                    <label for="email">*Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $user['email']?>">
                  </div>

                  <div class="form-group">
                    <label for="phone">*Phone:</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $user['phoneNumber']?>">
                  </div>
                
                  <div class="form-group">
                    <label for="password">*Password:</label>
                    <input type="password" id="password" name="password" value="<?php echo $user['password']?>">
                  </div>
                
                  <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" value="<?php echo $user['birthDate']?>">
                  </div>
                
                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="<?php echo $user['address']?>">
                  </div>
                
                  <div >
                    <label style="color:red">*Indicates required field.</label> 
                </div>
                  <input class="btn" type="submit" value="Save">
            </form>
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
