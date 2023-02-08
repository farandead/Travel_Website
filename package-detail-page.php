

<link rel="stylesheet" href="css/package-details.css">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<?php
include 'header.php';
    
?>



<style>
      .main-package-details-container{
    min-width: 100vmin;
    max-width: fit-content;
  }
  .top-banner{
    display:none;
  }
	.naviagation-bar-main{
		background-color: rgb(7, 43, 94);
	}
    .package-details-list {
    width: 80%;
    margin: auto;
    text-align: left;
    display: flex;
    flex-wrap: wrap;
        }
            .info-sub-container {
        display: flex;
        align-items: baseline;
        margin-left: -1vmax;
        margin-right: 3vmax;
            }
            .booking-button button{
                font-size:1vmax;
                height: 5vmax;
            }

  
    @media screen and (max-wdith:750px) {
        body {
        margin: 0%;
        padding: 0%;
        color: black;
       
        font-family: "Roboto Condensed", sans-serif;
        }
        .package-details-list {
    width: 80%;
    margin: auto;
    text-align: left;
    display: flex;
    flex-wrap: wrap;
        }
            .info-sub-container {
        display: flex;
        align-items: baseline;
        margin-left: -1vmax;
        margin-right: 3vmax;
            }

    }
    
</style>
<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
      }
</script>

<div class="main-package-details-container">

    <div class="details-heading">
        <p><?php
        if (isset($_SESSION['package_title'])) {
            echo $_SESSION['package_title'];
        } else {
            echo "notFound";
        } ?></p>
    </div>

    <div class="container">
        <!-- Close the image -->
        <!-- <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span> -->

        <img id="expandedImg" style="width:80vmin" src="img/packages/<?php
        if (isset($_SESSION['package_main_img'])) {
            echo $_SESSION['package_main_img'];
        } else {
            echo "notFound";
        } ?>">

        <div id="imgtext"></div>
    </div>
    <div class="color-container">
    <div class="row" >
        <div class="column" style="padding-left: 4vmax;">
            <img style="width:10vmax" src="img/packages/<?php
        if (isset($_SESSION['package_main_img'])) {
            echo $_SESSION['package_main_img'];
        } else {
            echo "notFound";
        } ?>" alt="" onclick="myFunction(this);">
        </div>

        <?php
                if (isset($row['package_imgs'])) {
                    $string = $row['package_imgs'];

                    $pieces = explode(",", $string);



                    for ($i = 0; $i < count($pieces) - 1; $i++) {
                             echo ' <div class="column">
                             <img style="width:10vmax" src="img/'. $pieces[$i] .'" alt="'. $_SESSION['package_title'].'" onclick="myFunction(this);">
                         </div>';
                    }
                } else {
                    echo "notFound";
                } ?>
       
        
        
    </div>
</div>
<div class="package-information">
    <div class="info-sub-container">
        <p>Departure Date:</p> <span> <?php
        if (isset($_SESSION['package_departure_date'])) {
            echo $_SESSION['package_departure_date'];
        } else {
            echo "notFound";
        } ?></span>
    </div>
    <div class="info-sub-container">
        <p>Arrival Date:</p> <span><?php
        if (isset($_SESSION['package_arrival_date'])) {
            echo $_SESSION['package_arrival_date'];
        } else {
            echo "notFound";
        } ?></span>
    </div>
    <div class="info-sub-container">
        <p>Package Price:</p> <span><?php
        if (isset($_SESSION['package_price'])) {
            echo $_SESSION['package_price'];
        } else {
            echo "notFound";
        } ?> £ </span> &nbsp;<span style="font-size: 0.7vmax;color:rgb(151, 150, 150)" >(subject to flight booking at the time)</span>
    </div>
    <div class="info-sub-container">
        <p>Package Type:</p> <span><?php
        if (isset($_SESSION['package_type'])) {
            echo $_SESSION['package_type'];
        } else {
            echo "notFound";
        } ?></span>
    </div>
</div>

    <div class="ammentities-container">

        <?php
                if (isset($row['package_main_points'])) {
                    $string = $row['package_main_points'];

                    $pieces = explode(",", $string);



                    echo ' <div class="icon-container">
                    <i class="bi bi-airplane-engines"></i> <span>'. $pieces[0] . '</span>
                </div>
                <div class="icon-container">
                    <i class="bi bi-bus-front"></i> <span>'. $pieces[1] . '</span>
                </div>
                <div class="icon-container">
                    <i class="bi bi-people"></i> <span>Dedicated '. $pieces[2] . '</span>
                   
                </div>
                <div class="icon-container">
                    <img src="img/icons/passporticon.png" alt=""> <span>'. $pieces[3] . '</span>
                </div>';
                } else {
                    echo "notFound";
                } ?>
        
    </div>

    <div class="package-details">
        <center>
        <div class="package-details-heading">
            <p>Package Details</p>
        </div>
    </center>

        <div class="package-details-list">
        <?php
                if (isset($row['package_details'])) {
                    $string = $row['package_details'];

                    $pieces = explode(",", $string);



                    for ($i = 0; $i < count($pieces) - 1; $i++) {
                             echo ' <p><i class="bi bi-arrow-right-circle-fill"></i> <span></span>'. $pieces[$i] . '</p>';
                    }
                } else {
                    echo "notFound";
                } ?>
            
            
        </div>
    </div>

    <div class="price-container">
        <p>Price: </p> <span><?php
        if (isset($_SESSION['package_price'])) {
            echo $_SESSION['package_price'];
        } else {
            echo "notFound";
        } ?>£</span> &nbsp;<span style="font-size: 1vmax;color:rgb(151, 150, 150)" >(subject to flight booking at the time)</span>
    </div>
    <form action="booking-page.php" method="get">
    <div class="booking-button">
        
        <button value='<?php
        if (isset($_SESSION['package_id'])) {
            echo $_SESSION['package_id'];
        } else {
            echo "notFound";
        } ?>' name="selected_package">BOOK NOW <i class="bi bi-arrow-right"></i> </button>


    </div>
</form>




</div>
<?php 
    include 'footer.php'

?>

