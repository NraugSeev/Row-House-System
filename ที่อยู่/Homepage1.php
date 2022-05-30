<!--ປະເພດ  HTML-->
<html>
<head>
    <meta charset="utf-8">

	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- ແທັກ -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- ຊື່ເວັບໄຊທ໌ -->
	<meta property="og:site" content="" /> <!-- ລິ້ງ ເພື່ອເຂົ້າຫາເວັບໄຊທ໌ -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title> Driving license </title>
    
    <!-- ຮູບແບບ -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- ໄອຄອນ  -->
    <link rel="icon" type="image/png" href="../image/save.png">

	<!-- ເອີ້ນນໍາໃຊ້ icon ionic -->
<link rel="stylesheet" href="../puligins/ionicons-2.0.1/css/ionicons.css">
<link rel="stylesheet" href="../puligins/ionicons-2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../puligins/icon/css/all.min.css">
<link rel="stylesheet" href="../Address/login/css/sb-admin-2.min.css">
	<style>*{font-family:"Lao_Siengphin2"};</style>
	
</head>

<body data-spy="scroll" data-target=".fixed-top" style="background-color:#C7F5FC">
    <?php
    include_once('../controllers.php');	
    include_once('../connection/style.php');

    ?>
    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container animate__animated animate__fadeInRight">
        <button class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">
            <font face="Lao_Siengphin2" size="3px"><i class="ion-card"></i> ລົງທະບຽນນຳໃຊ້</font></button>
		<a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">
            <font face="Lao_Siengphin2" size="3px"><i class="ion-navicon-round"></i> ຂໍ້ມູນຜູ້ນຳໃຊ້ງານ</font></a>
        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3">
            <font face="Lao_Siengphin2" size="3px"><i class="ion-clock"></i> ເວລາຜູ້ເຂົ້າໃຊ້ລະບົບ</font></a>
        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-4">
            <font face="Lao_Siengphin2" size="3px"><i class="ion-compass"></i> ເວລາຜູ້ອອກລະບົບ</font></a> 
        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-5">
            <font face="Lao_Siengphin2" size="3px"><i class="ion-compass"></i> ພະນັກງານເຮັດວຽກ</font></a>
            
        <a class="popup-with-move-anim" href="#details-lightbox-6"></a> 
        <a class="popup-with-move-anim" href="#details-lightbox-7"></a> 
        <a class="popup-with-move-anim" href="#details-lightbox-8"></a>    

        </div>

        <hr>
    <div class="container-fluid animate__animated animate__fadeInUp">
    <h3> <font face="Lao_KhuanJai" color="#0000"><i class="ion-android-apps"></i> ຂໍ້ມູນອ້າງອີງຕ່າງໆ </font></h3>
    <br>
    <div class="row">
        <div class="col-md-1"></div>

    <!-- ຂໍ້ມູນພະນັກງານ -->						
 <?php
    include('../connection/connection.php');
    $sql=" select count(user_id) users from users where user_id=user_id";
    $query=mysqli_query($connection,$sql);
    $result1=mysqli_fetch_array($query);
	
	$sql=" select count(user_id)as gender from users where gender='ທ້າວ'";
    $query=mysqli_query($connection,$sql);
    $result2=mysqli_fetch_array($query);
	
	$sql=" select count(user_id)as gender from users where gender='ນາງ'";
    $query=mysqli_query($connection,$sql);
    $result3=mysqli_fetch_array($query);
?>
        <a class="popup-with-move-anim" style="text-decoration: none;" href="#details-lightbox-6" class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 bg-muted">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" font-weight-bold text-dark text-uppercase mb-1">
                                            ຂໍ້ມູນພະນັກງານ :</div>
                                            <div class="text-success h5 mb-0 font-weight-bold text-gray-800">
											<span class=" text-dark fa fa-users"></span>
											<?php echo $result1[0] ?> ຄົນ ||
											<i class="text-primary fas fa-male"></i>
												<sup style="font-size: 15px">
												<font><?php echo $result2[0]?></font>
												<font size="2px">ຊາຍ</font></sup> ||
												<i class="text-danger fas fa-female"></i>
												<sup style="font-size: 15px">
												<font><?php echo $result3[0]?></font>
												<font size="2px">ຍິງ</font></sup>
												
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="text-success fa ion-loop fa-spin fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>&nbsp;&nbsp;&nbsp;
    
    <!-- ເຂົ້າສູ່ລະບົບ -->						
 <?php
    include('../connection/connection.php');
    $sql=" select count(login_id) from logins";
    $query=mysqli_query($connection,$sql);
    $result1=mysqli_fetch_array($query);
?>
        <a class="popup-with-move-anim" style="text-decoration: none;" href="#details-lightbox-3" class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2 bg-muted">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" font-weight-bold text-dark text-uppercase mb-1">
                                            ເຂົ້າລະບົບ :</div>
                                            <div class="text-warning h5 mb-0 font-weight-bold text-gray-800">
											<span class=" text-dark fa fa-users"></span>
											<?php echo $result1[0] ?> ຄັ້ງ.
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="text-warning ion-log-in fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>&nbsp;&nbsp;&nbsp;
    
    <!-- ອອກຈາກລະບົບ -->						
 <?php
    include('../connection/connection.php');
    $sql=" select count(logout_id) from logout";
    $query=mysqli_query($connection,$sql);
    $result2=mysqli_fetch_array($query);
?>
        <a class="popup-with-move-anim" style="text-decoration: none;" href="#details-lightbox-4" class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2 bg-muted">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class=" font-weight-bold text-dark text-uppercase mb-1">
                                            ອອກລະບົບ :</div>
                                            <div class="text-danger h5 mb-0 font-weight-bold text-gray-800">
											<span class=" text-dark fa fa-users"></span>
											<?php echo $result2[0] ?> ຄັ້ງ.
												
											</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="text-danger ion-log-out fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>


    </div>
        </div>
    </div>

    <!-- Details Lightbox 6 -->
	<div id="details-lightbox-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="users/select_user.php" class="frame-responsive" name="school" width="100%" height="450" frameborder="0"></iframe> 
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 6 -->

    <!-- Details Lightbox 7 -->
	<div id="details-lightbox-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="users/show/chack_in.php" class="frame-responsive" name="school" width="100%" height="450" frameborder="0"></iframe> 
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 7 -->


    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="users/form_user.php" class="frame-responsive" name="school" width="100%" height="450" frameborder="0"></iframe> 
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->
	
	    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="users/select_user.php" class="frame-responsive" name="school" width="100%" height="400" frameborder="0"></iframe>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->

    <!-- Details Lightbox 3 -->
	<div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="login/select_login.php" class="frame-responsive" name="school" width="100%" height="400" frameborder="0"></iframe>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 3 -->

    <!-- Details Lightbox 4 -->
	<div id="details-lightbox-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="logout/select_logout.php" class="frame-responsive" name="school" width="100%" height="450" frameborder="0"></iframe> 
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 4 -->
	
    <!-- Details Lightbox 5 -->
	<div id="details-lightbox-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="show_users/select_users.php" class="frame-responsive" name="school" width="100%" height="450" frameborder="0"></iframe> 
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 5 -->

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
	
	
</body>
</html>