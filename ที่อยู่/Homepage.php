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
    <title> Homepage </title>
    
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

	<style>*{font-family:"Lao_Siengphin2"};</style>
	
</head>

<body data-spy="scroll" data-target=".fixed-top" style="background-color:#C7F5FC">
<?php
    include_once('../controller.php');	
    include_once('../connection/style.php');
    ?>
    <!-- Details 1 -->
    <div class="basic-1 animate__animated animate__fadeInRight" >
        <div class="container">
        <button class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">
            <font face="Lao_Siengphin2" size="3px"><i class="fa ion-load-a fa-spin"></i> ຂໍ້ມູນແຂວງ</font></button>
		<a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">
            <font face="Lao_Siengphin2" size="3px"><i class="fa ion-ios-refresh-outline fa-spin"></i> ຂໍ້ມູນເມືອງ</font></a>
        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3">
            <font face="Lao_Siengphin2" size="3px"><i class="fa ion-gear-b fa-spin"></i> ຂໍ້ມູນບ້ານ</font></a>    
        </div>
        
    </div>

    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="province/select_province.php" class="frame-responsive" name="school" width="100%" height="450" frameborder="0"></iframe> 
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->
	
	    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="district/select_district.php" class="frame-responsive" name="school" width="100%" height="400" frameborder="0"></iframe>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->

    <!-- Details Lightbox 3 -->
	<div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="">
            <div class="row">
                <button title="ກັບຄືນ (Esc)" type="button" class="mfp-close x-button">×</button>
                <iframe  src="village/select_village.php" class="frame-responsive" name="school" width="100%" height="400" frameborder="0"></iframe>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 3 -->
	<iframe  src="all/show_province.php" class="frame-responsive" name="school" width="100%" height="400" frameborder="0"></iframe>
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