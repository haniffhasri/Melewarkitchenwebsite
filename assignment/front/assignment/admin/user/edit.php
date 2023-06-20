<?php 
    if(isset($_GET['userID'])) {
        include 'config.php';
        $query = "SELECT * FROM user WHERE userID =".$_GET['userID'];

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $userID = $_GET["userID"];
                $userName = $row["userName"];
                $email = $row["email"];
                $phoneNumber = $row["phoneNumber"]; 
                $password = $row["password"];
                $birthDate = $row["birthDate"]; 
                $address = $row["address"];
                $in_mailing_list = ($row["in_mailing_list"] == 1)?'True':'False';
            }
            $result->free();
        } 
    } else {
        header('Location: user.php');
        exit();
    }
    
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="./admin.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap">
    
        <title>Admin | Melewar Kitchen</title>
    </head>
    <body>
        <nav>
            <div class="container nav-container">
                <a href="home.html">
                    <img src="./res/logo.jpg"  alt="melewarkitchenlogo" width="100px">
                </a>
                <ul class="nav-menu">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="user.html">User Management</a></li>
                    <li><a href="table.html">Table Management</a></li>
                    <li><a href="editmenu.html">Menu Management</a></li>
                    <li><a href="/front/assignment/home.html">Logout</a></li>
                </ul>
                <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
                <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
            </div>
        </nav>
        <main class="bg-image" style="min-height: 70%;">
          <br>
            <!-- User Management Section -->
            <div class="user-management-section">
                <div class="admin">
                  <h2 style="color: black;">Admin Section</h2>
                  <div class="user-management">
                    <h3 style="color: black;">User Management</h3>
                    <ul>
                      <li><a href="#" class="view-users-link text-center" style="background-color: #ff726f;"><strong>View Users</strong></a></li>
                      <p style="color: red; font-size: small">*press the column to update</p>
                      <form class="register__form" action="update.php" method="post">
                        <input type="hidden" name="userID" value="<?php echo $userID ?>">
                        <input type="text" name="userName" required value="<?php echo $userName ?>">
                        <input type="email" name="email" required value="<?php echo $email ?>">
                        <input type="text" name="phoneNumber" required value="<?php echo $phoneNumber ?>">
                        <input type="text" name="password" required value="<?php echo $password ?>">
                        <input type="text" name="birthDate" required value="<?php echo $birthDate ?>">
                        <input type="text" name="address" required value="<?php echo $address ?>">
                        In Mailing List: <input type="checkbox" name="in_mailing_list" value="1">
                        <input class="btn btn-primary" type="submit" value="Edit">
                      </form>
                    </ul>
                  </div>
                </div>
            </div>
              
            
        </main>

        <!------------------------------------------------- END OF PAGE CONTENT ------------------------------------->

    <footer class="footer">
      <div class="footer-copyright">
          <small>All Right Reserved &copy; 2023 - Melewar Kitchen</small>
      </div>
  </footer>
  <!------------------------------------------------ End Of Footer ---------------------------------------------->

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="./admin.js"></script>

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
    </body>
</html>