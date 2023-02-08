<?php
include 'header.php';

?>



<head>
    <link rel="stylesheet" href="css/order-confirmation.css">
</head>



<?php



$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection to the database failed due to" .
        mysqli_connect_error());
}


$booking_fname= $_POST['fname'];
$booking_lname = $_POST['lname'];
$booking_phone = $_POST['phone'];
$booking_email = $_POST['email'];
$streetAddress = $_POST['streetAddress'];
$booking_streetAddress = $_POST['city'];
$booking_country = $_POST['country'];
$booking_message = $_POST['message'];






$sql = "INSERT INTO `holly_lands`.`booking_data` ( `booking_id`,`booking_fname`, `booking_lname`, `booking_phone`, `booking_email`, `booking_streetAddress`, `booking_country`, `booking_message`) VALUES (NULL ,'$booking_fname', '$booking_lname', '$booking_phone', '$booking_email', '$booking_streetAddress', '$booking_country', '$booking_message');";

if ($con->query($sql) == true) {

    session_start();
  
} else {
    echo "Error L: $sql <br> $con->error";
}


?>

<script>
    window.onload = setInterval(clock, 1000);

    function clock() {
        var d = new Date();
        var date = d.getDate();
        var year = d.getFullYear();
        var month = d.getMonth();
        var monthArr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        month = monthArr[month];
        document.getElementById("date").innerHTML = date + " " + month + ", " + year;
    }

</script>
<style>
    body{
        margin: auto;
        background:rgb(7, 43, 94);
  background: -webkit-linear-gradient(left, rgb(7, 43, 94),rgb(6, 80, 184));
  background: -o-linear-gradient(left, rgb(7, 43, 94), rgb(6, 80, 184));
  background: -moz-linear-gradient(left, rgb(7, 43, 94), rgb(6, 80, 184));
  background: linear-gradient(left, rgb(7, 43, 94), rgb(6, 80, 184));
    }
    .order-confirmation-container{
 
    margin: auto;
    }
.naviagation-bar-main{
    background-color: rgb(7, 43, 94);
}
.order-confirmation-sub-container i{
    font-size: 4vmax;
    color: white;
    transform: rotate(0.5turn);
}
.order-confirmation-sub-container-img{
    background-color:rgb(7, 43, 94);
    border-radius: 5vmax;
    padding: 2vmax 2vmax;
    transform: rotate(0.1turn);
}
</style>

<div class="order-confirmation-container">
    <div class="order-confirmation-sub-container order-confirmation-sub-container-img">
        <i class="bi bi-airplane"></i>
    </div>
    <div class="order-confirmation-sub-container order-confirmation-sub-container-paragraph">
        <p><strong> Hey <span> <?php
        if (isset($booking_fname)) {
          echo $booking_fname;
        } else {
          echo "notFound";
        } ?></span> ! </strong>Your booking has successfully been received! Our team will shortly contact you</p>
        <p><strong>Package:</strong><span id="product_name"> <?php
        if (isset($_SESSION['booking_package'])) {
          echo $_SESSION['booking_package'];
        } else {
          echo "notFound";
        } ?></span>.</p>
        <p><strong>Booked For:  </strong> <?php
        if (isset($booking_fname)) {
          echo $booking_fname;
        } else {
          echo "notFound";
        } ?></p>
        <p><strong>Email: <?php
        if (isset($booking_email)) {
          echo $booking_email;
        } else {
          echo "notFound";
        } ?> </p>

        <p><strong>Placed on: </strong><span id="date"></span> </p>

       
            <button style="width:12vmax;height:2.5vmax;background-color:rgb(7, 43, 94);color:white;border:none;border-radius:6px;font-size:1vmax;cursor:pointer">Home</button>
        
    </div>


</div>



<?php
include 'footer.php'
?>