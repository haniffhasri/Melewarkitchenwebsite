
    <nav>
        <div class="container nav-container">
            <a href="home.html">
                <img src="./res/logo.jpg"  alt="melewarkitchenlogo" width="100px">
            </a>
            <ul class="nav-menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="reservation.html">Reservation</a></li>

                <?php
                if (isset($_SESSION["username"]))
                {
                    ?>
                    <li><a href="logout.php">logout</a></li>
                    <li><a href="profile.php">Profile</a></li>
                <?php }else{
                    ?>
                    <li><a href="login.php">Login</a></li>
                       <?php
                }
                ?>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>