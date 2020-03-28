<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRAVEL</title>
    <link rel="stylesheet" type="text/css" href="cssd/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="cssd/slick.css">
    <link rel="stylesheet" type="text/css" href="cssd/all.css">
    <link rel="stylesheet" type="text/css" href="cssd/styles.css">
    <link rel="stylesheet" type="text/css" href="cssd/responsive.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        * {
            box-sizing: border-box;
        }
        
        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }
        /* Clearfix (clear floats) */
        
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>

<body>
    <!-- navigation -->
    <?php  include("navi.php");  
?>
    <!-- navigation -->

    <center>
        <h1>Gym center information</h1>
    </center>
    <div class="content-a">
        <div class="container">
            <div class="row">
                <?php 
                        include("admin/include/config.php");
                       
                        $sql="select *from ads ";
                        $query=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($query))
                        {


                ?>

                <div class="col-md-4">
                    <div class="item">

                        <div class="img-holder">
                            <figure><img src="admin/ads/<?php echo $row['image1']; ?>" height="150" weidth="150"></figure>
                        </div>

                        <div class="content">
                            <h3><?php echo $row['name']; ?></h3>
                            <p><?php echo $row['website']; ?></p>
                            <a href="adsinfo.php?aid=<?php echo $row['aid']; ?>" ><span>Readmore</span></a>


                        </div>

                    </div>
                </div>
                <br>
           <?php }?>

            </div>
        </div>
    </div>


    <?php 
 include("footer.php");
?>



    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/script.js"></script>

</body>

</html>