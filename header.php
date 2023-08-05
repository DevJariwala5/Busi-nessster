<?php
ob_start();
?>
<?php

if (isset($_SESSION['business-username'])) {
    //  include('connect.php');
    $email = $_SESSION['business-username'];
    $qry = "select * from tb_business_registration where business_Email_Id='$email'";
    $res = mysqli_query($connect, $qry);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($res)) {


?>

<header class="header">
    <div class="header-bottom">
        <div class="container">
            <div class="header-area">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/busi-nessster-logo1.png" alt="logo">
                    </a>
                </div>

                <div class="header-trigger d-block d-lg-none">
                    <span></span>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>

                    <li>
                        <a href="investor.php">Investors</a>

                    </li>
                    <li>
                        <a href="business.php">Business-Startup</a>

                    </li>
                    <li>
                        <a href="blog.php">Blog</a>

                    </li>
                    <li>
                        <a href="contact.php">Contact-us</a>
                    </li>
                    <li>

                        <img src="<?php echo $row['business_Logo']; ?> " alt="investor" height="40px" width="40px">

                        <ul class="sub-menu">
                            <li>
                                <a href="profile-business-dashboard.php"><?php echo $row['business_Name']; ?>'s
                                    dashboard</a>
                            </li>
                            <li>
                                <a href="business-logout.php">log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<?php
        }
    }
} else if (isset($_SESSION['investor-username'])) {

    //include('connect.php');
    $email = $_SESSION['investor-username'];
    $qry = "select * from tb_investor_registration where investor_Email_Id='$email'";
    $res = mysqli_query($connect, $qry);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($res)) {
        ?>

<header class="header">
    <div class="header-bottom">
        <div class="container">
            <div class="header-area">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/busi-nessster-logo1.png" alt="logo">
                    </a>
                </div>

                <div class="header-trigger d-block d-lg-none">
                    <span></span>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>

                    <li>
                        <a href="investor.php">Investors</a>

                    </li>
                    <li>
                        <a href="business.php">Business-Startup</a>

                    </li>
                    <li>
                        <a href="blog.php">Blog</a>

                    </li>
                    <li>
                        <a href="contact.php">Contact-us</a>
                    </li>
                    <li>

                        <img src="<?php echo $row['investor_Photo']; ?> " alt="investor" height="40px" width="40px">

                        <ul class="sub-menu">
                            <li>
                                <a href="profile-dashboard.php"><?php echo $row['investor_Name']; ?>'s dashboard</a>
                            </li>
                            <li>
                                <a href="business-logout.php">log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<?php
        }
    }
} else {

    ?>
<header class="header">
    <div class="header-bottom">
        <div class="container">
            <div class="header-area">
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/busi-nessster-logo1.png" alt="logo">
                    </a>
                </div>
                <div class="header-trigger d-block d-lg-none">
                    <span></span>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>

                    <li>
                        <a href="investor.php">Investors</a>

                    </li>
                    <li>
                        <a href="business.php">Business-Startup</a>

                    </li>
                    <li>
                        <a href="blog.php">Blog</a>

                    </li>
                    <li>
                        <a href="contact.php">Contact-us</a>
                    </li>
                    <li>
                        <a href="registration.php" class="cmn--btn">Register Now</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>
<?php
}

?>