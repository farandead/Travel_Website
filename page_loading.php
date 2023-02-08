

<?php

$selected_package = $_GET['selected_package'];

$host = "localhost";
$user = "root";
$password = '';
$db_name = "holly_lands";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
$sql = "SELECT * from `package_details` where package_id = $selected_package";
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

 
if ($count = 1) {
   
        $row = mysqli_fetch_assoc($result);
        $_SESSION['package_id']  =  $row["package_id"];
        $_SESSION['package_title']  = $row["package_title"];
        $_SESSION['package_main_points']   = $row["package_main_points"];
        $_SESSION['package_details']  = $row["package_details"];
        $_SESSION['package_price']  = $row["package_price"];
        $_SESSION['package_description']  =  $row["package_description"];
        $_SESSION['package_departure_date'] = $row["package_departure_date"];
        $_SESSION['package_arrival_date']  =  $row["package_arrival_date"];
        $_SESSION['package_imgs'] =  $row["package_imgs"];
        $_SESSION['package_main_img']  =  $row["package_main_img"];
        $_SESSION['package_type']  =  $row["package_type"];

    include 'package-detail-page.php';

} else {
    echo " <center>
        <p id='no-searh-notification'>Opps ! There is nothing matching your Search. Try Changing the Search Values </p>
    </center>";
}
?>


