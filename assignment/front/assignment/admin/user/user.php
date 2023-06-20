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
                  <span style="color: black;">
                    <?php include_once 'config.php';
                    $query = "SELECT * FROM user";
                    $result = $mysqli->query($query);
                    ?></span>
                  <div class="user-management">
                    <h3 style="color: black;">User Information</h3>
                    <ul>
                      <table class="view-users-linkk">
                        <thead>
                          <tr>
                            <th>user ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Password</th>
                            <th>Birth Date</th>
                            <th>Address</th>
                            <th>In Mailing List </th>
                            <th>Operation </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                                while ($row = $result->fetch_assoc()) {
                                    $userID = $row["userID"];
                                    $userName = $row["userName"];
                                    $email = $row["email"];
                                    $phoneNumber = $row["phoneNumber"]; 
                                    $password = $row["password"];
                                    $birthDate = $row["birthDate"]; 
                                    $address = $row["address"];
                                    $in_mailing_list = ($row["in_mailing_list"] == 1)?'True':'False';

                                    echo 
                                        '<tr> 
                                            <td>'.$userID.'</td>
                                            <td>'.$userName.'</td>  
                                            <td>'.$email.'</td> 
                                            <td>'.$phoneNumber.'</td> 
                                            <td>'.$password.'</td> 
                                            <td>'.$birthDate.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$in_mailing_list.'</td>
                                            <td><a href="edit.php?id='.$userID.'">Update</a><br><a href="delete.php?id='.$userID.'">Delete</a></td> 
                                        </tr>';
                                }
                                $result->free();
                        ?>
                        </tbody>
                      </table>
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