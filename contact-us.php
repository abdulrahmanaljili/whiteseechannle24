<!--  Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->
<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html>

<head>
    <!--  Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>قناةبحرأبيض || تواصل معنا</title>
    <!--  Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css">
</head>

<body>
    <!--  Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->
    <!-- Navigation -->
    <?php include('includes/header.php'); ?>
    <!-- Page Content -->
    <div class="container">

        <?php
        $pagetype = 'contactus';
        $query = mysqli_query($con, "select PageTitle,Description from tblpages where PageName='$pagetype'");
        while ($row = mysqli_fetch_array($query)) {

        ?>
            <h1 class="mt-5 mb-0 text-center"><?php echo htmlentities($row['PageTitle']) ?>

            </h1>

            <ol class="breadcrumb ">
                <li class="breadcrumb-item">
                    <a href="index.php">الرئيسية</a>
                </li>
                <li class="breadcrumb-item active">تواصل</li>
            </ol>

            <!-- Intro Content -->
            <div class="row">

                <div class="col-lg-12 " style="    text-align: center;">
                    <iframe class="col  text-right" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19498.8909759799!2d32.647120841659195!3d13.145179976921305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x16f3bc2ca4793b39%3A0x1456f861450a4006!2sWhite%20Nile%20Science%20%26%20Technology%20College!5e0!3m2!1sen!2szm!4v1732353161366!5m2!1sen!2szm" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <p><?php echo $row['Description']; ?></p>
                </div>
            </div>
            <!-- /.row -->
        <?php } ?>

        <div class="col  text-right"><a href="tel:090 087 5999">
                <!-- <img src="images/ads.jpg" class="img-fluid"></a> -->


        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    <!--  Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->
    <script src="js/foot.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
<!--  Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->

</html>