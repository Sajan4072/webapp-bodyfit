


<!DOCTYPE html>
<html>
<head>
	<title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dashbord1.css">
  
        <link rel="icon" href="font/bodyfit.png" type="image/icon type">
	
<!-- Latest compiled and minified JavaScript -->

 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

<!-- link for slider-->
 <link rel="stylesheet" type="text/css" href="new/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="new/css/slick.css">
    <link rel="stylesheet" type="text/css" href="new/css/all.css">
    <link rel="stylesheet" type="text/css" href="new/css/styles.css">
    <link rel="stylesheet" type="text/css" href="new/css/responsive.css">
<!-- --->

</head>
<body>
    <div>  <?php

   include("navi.php");
    include("admin/include/config.php");
    
     
      ?>
</div>

<!---- ***********************image slider **********---->
<div>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="mediaicon/e.jpg" style="width:100%">
  <img class="mySlides" src="mediaicon/g.jpg" style="width:100%">
  <img class="mySlides" src="mediaicon/c.jpg" style="width:100%">
  <img class="mySlides" src="mediaicon/d.jpg" style="width:100%">
  <img class="mySlides" src="mediaicon/f.jpg" style="width:100%">

 
  <button class="prew fa fa-chevron-left" onclick="plusDivs(-1)">&#10094;</button>
 <button class="next fa fa-chevron-right" onclick="plusDivs(1)">&#10095;</button>
</div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
 

 <style type="text/css">
      
      body{
        background-color:#efeee5; 
      }
      .j
         {
             background-color:#efeee5; 
         }
          img{
    max-width: 100%;
    height: auto;
    background: lightblue;
    background: radial-gradient(white 30%, lightblue 70%);
}
.hover01 figure img {
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.hover01 figure:hover img {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}
.img-holder figure img {
   border: 3px ;
   box-shadow: 0 0 35px 0 rgba(0, 0, 0, 0.8);

       }
       .content h3{
            font-style: normal;
             font-family: "Times New Roman", Times, serif;
       }
       .btn   
         {
             margin-bottom:500px;
         }
  .con {
           color:brown;
           font-size: 35px;
           background-color: #efeee5;
           text-transform: uppercase;
           border-bottom: 1px ridge;
  }
  

</style>



<!---- ***********************image slider end **********---->


<section class="site-note">
  <div class="container">
    <div class="note-content">
      <h1>Welcome Notes</h1>
        <p>Welcome to body fit one pit stop for all your fitness needs. Find best in class gyms and fitness centers in town. Get in touch with verified fitness trainers and athletes. Want fitness equipment and accessories,  no worries we got you covered just check out he accessories section. Head over to the free tutorial section ,learn about the various exercise and workout techniques. Losing fat is hard ,being fat is also hard sochose your hard.</p>
    </div>
  </div>
</section>

<!--********************************** site ervice *********************-->

<section class="site-services">
   <div class="container">
     <div class="our-services">
       <div class="header-intro">
         <h2>our services</h2>
           </div>

        <div class="row">
           <div class="col-md-3">
             <div class="service-content">
                <center><img src="mediaicon/Capture.PNG" alt="Responsive image"></center>
                   <h3>Builder Award</h3>
                      <p></p>
                          <center><a class="readmore" href="">ReadMore</a></center>
              </div>
          </div>

         <div class="col-md-3">
       <div class="service-content">
     <center><img src="mediaicon/Capture3.PNG" alt="Responsive image"></center>
   <h3>Classes Shedule</h3>
  <p></p>
<center><a class="readmore" href="">ReadMore</a></center>
  </div>
      </div>

         <div class="col-md-3">
           <div class="service-content">
             <center><img src="mediaicon/Capture1.PNG" alt="Responsive image"></center>
               <h3>Arms & Six Pack</h3>
                 <p></p>
                    <center><a class="readmore" href="">ReadMore</a></center>
            </div>
        </div>

         <div class="col-md-3">
       <div class="service-content">
     <center><img src="mediaicon/Capture2.PNG" alt="Responsive image"></center>
   <h3>Cheap Price</h3>
  <p></p>
<center><a class="readmore" href="">ReadMore</a></center>
        </div>
            </div>
      </div>
</section>
<!--.***************************************site-cntent-end *******************-->
  </div>
</div>

</section>

<!----- trainer infoo ********************------->
<section class="site-news">
  <div class="container">
  <div class="news-header">
    <h1>Meet Our Trainers</h1>
  </div>
    <div class="news-content">
      <div class="row">
        <div class="col-md-4">
          <h2>Jit Bdr Rana</h2>
            <center><img src="mediaicon/jit.jpg" class="img-responsive"></center>
              <p>Jit Bahadur Rana holds a BS in Physical Education as well as aMS in Exercise Science and Health Promotion. He is a Certified Strength and Conditioning Specialist (CSCS). He has a background in health and fitness as well as athletic performance training with over 20 years of certification and experience in the field. His passion for fitness began through his love of sports and developed as a varsity athlete in basketball. His approach to fitness emphasizes age-appropriate programming with a specific focus given to cardiovascular and strength training in combination with balance and flexibility training. He establishes long-term client interactions with the goal of integrating exercise and optimal wellness into the demands of daily life.</p>
              <center><a class="readmore" href="">More</a></center>
              </div>

              <div class="col-md-4">
              <h2>Patrick Stha</h2>
              <center><img src="mediaicon/patrick.jpg" class="img-responsive"></center>
              <p>Patrick integrates his knowledge as a strength and conditioning specialistin designing an individualized, progressive program of cardiovascular, mobility, core, and strength training exercises for his clients based on their fitness goals. He helps clients master basic functional movements to improve their strength and fitness and to build a foundation for further gains. In addition to his work as a personal trainer, he has served as a volunteer strength and conditioning coach for Hoya athletes and has run several marathons</p>
               <center><a class="readmore" href="">More</a></center>
             </div>
            

            <div class="col-md-4">
          <h2>Sajan Rai</h2>
        <center><img src="mediaicon/sajan.jpg" class="img-responsive"></center>
      <p>Sajan is a Certified Strength and Condition Specialist (CSCS) with the National Strength and Conditioning Association. He has an extensive background from training professional and amateur athletes to working professionals with nominal experience in fitness. Sajan approaches fitness as a life long behavior modification where we have continuous improvement. He defines his sessions as simple, challenging, and efficient with an emphasis on proper form and mobility. His favorite client is anyone with a goal and a willingness to work towards it.</p>
      <center><a class="readmore" href="">More</a></center>
    </div>
      </div>
         </div> 
           </div>
           
             </section>
<!----********************* trainer info  end***********-->
<!---- slider----->

  
<div class="con"><center>Products</center></div>

<div class="j">
  <br>
<div class="container">
  <div class="card-slide">
     
    <?php   
    $sql="select *from products";
      $run= mysqli_query($conn,$sql);

     while($row=mysqli_fetch_array($run))
                {  $image=$row['image'];
                  $price=$row['productprice'];
           
                   $name=$row['name'];


                    ?>

    <div class="item">
      <div class="hover01 column">

      <div class="img-holder">  
      <figure>  <img src=" <?php echo "admin/productimages/".$image;?> " height="250" width="250"> </figure>
      </div>
    </div>

      <br><div class="content">
        <h3><?php echo $name ; ?></h3>
        <h3>Price:<?php echo $price; ?></h3>
        <a href="single.html"  class="btn btn-primary">Read more</a>
                  <div class="content">
        
      </div>
      </div>
      

    </div>

   
    

      <?php } ?>
   
    
  </div>
</div>
</div>

<script src="new/js/jquery-3.1.1.min.js"></script>
<script src="new/js/bootstrap.js"></script>
<script src="new/js/slick.js"></script>
<script src="new/js/script.js"></script>

<!-- slider end-------------------------------------->
<?php 
 include("footer.php");
?>
</div>
</body>
</html>