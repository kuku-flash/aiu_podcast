<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Aiu_podcast</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
	<link rel="shortcut icon" href="images/aiupodcasticon.png" type="image/x-icon"
    <!-- link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->

	<!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	 -->
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">  -->
    <link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
 <body data-spy="scroll" data-target=".navbar" data-offset="50"></body>>  
    <?php include'layout/index_header.php';?>
        
        <section id="home" class="event-section video-section" data-stellar-background-ratio="0.5" style="height:500px !important;" >
        <div class="overlay"></div>
            <div class="home-text-wrapper relative container container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center home-message">
                             <p>AIU PODCAST </p>
                             <small> Follow Chapel Servises All Semester Long </small>
                            
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <section class="section gb nopadtop">
            <div class="container">
                <div class="row event-boxes">
<?php
include 'configure/config.php';
$sql="SELECT * FROM audio ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
?>	
				
<?php while($rows=mysqli_fetch_assoc($result)) { ?>			               
                    <div class="col-md-4 m30">                   
                        <div class="box m30">
                        
                        <article class="card card--1">
                      <div class="card__info-hover">
                        <svg class="card__like"  viewBox="0 0 24 24">
                        <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                    </svg>
                          <div class="card__clock-info">
                            <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                            </svg><span class="card__time">15 min</span>
                          </div>
                        
                      </div>
                      <div class="card__img"></div>
                      <a href="events.php?id=<?php echo $rows['id']; ?>" class="card_link">
                         <div class="card__img--hover">
							<img  src="admin/photos/<?php echo $rows['image']; ?>" height="100%" width="100%" >
						 
						 </div>
                       </a>
                      <div class="card__info text-center">
                        <span class="card__category">
						<a href="pod_listen.php?id=<?php echo $rows['id']; ?>" class="card_link"> <img src="images/pod.png" alt=""  Height="50" width="50"> </a>
						</span>
						<h3 class="card__title">	<span class="card__category"><?php echo $rows['upload_date']; ?></span> </h3>
                        <h3 class="card__title"><?php echo $rows['audio_name']; ?></h3>
                        <span class="card__by">by <a href="#" class="card__author" title="author"><?php echo $rows['speaker_name']; ?></a></span>
                      </div>

                         </article>
                        
                    </div>
                </div><!-- end col --> 
 <?php } ?>
                    
            </div><!-- end container -->
        </section>


      

<?php include'layout/footer.php'; ?>
		
       
    </div>
    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>

</body>
</html>