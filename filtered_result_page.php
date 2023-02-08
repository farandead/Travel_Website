<!-- <link rel="stylesheet" href="css/index.css"> -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/packages-page.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<style>
    .book-button-package{
        height: 3vmax;
    margin: auto;
    margin-top: 2vmax;
    width: 80%;
    background-color:  rgb(7, 43, 94);
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 6px;
    font-size: 0.8vmax;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
    justify-items: center;
    }
    #no-searh-notification{
        color: rgb(7, 43, 94);
        font-size: 3vmin;
    }
    
    
    .package-container{
        padding-bottom: 2vmax;
    }
</style>
<?php 

    include 'header.php'
?>
<center>
    <div class="main-text-container">

    </div>
</center>

<div class="wallpaper-container">
    <img align="top" src="img/packages-img.jpg" alt="" style="filter:brightness(50%)">


</div>



<div class="main-container" style="width:100%">
    <div class="main-heading">
        <p>Travel Deals And Offers</p>
    </div>
    <div class="main-sub-heading">
        <p> Explore the holiest places on earth with our exclusive travel deals and packages. Visit the sacred cities of
            Jerusalem, Mecca, and Vatican City and immerse yourself in the rich culture and history of the holy lands.
        </p>
    </div>

    <div class="icons-container">
        <div class="sub-icons-container"  style="color:black"><i class="bi bi-house-heart-fill"></i> <span style="color:black">Hotel Offers</span>
        </div>
        <div class="sub-icons-container" style="color:black"><i  class="bi bi-stars"></i><span style="color:black">Experiences</span></div>
    </div>

    <div class="main-packages-container">
        <form action="filtered_result_page.php" method="post">
        <div class="filter-contaniner" style="width: 94%;">
             <div class="filter-heading">
                <i class="bi bi-filter-circle"></i> <span>Filter</span>
             </div>
            <div class="departure-container">
                <p>Departure Date</p>   
                <input type="text" placeholder="Enter Departure" name="departure_date" required
                    onfocus="(this.type='date')">                    
            </div>
         

            <div class="price-filter-container">
                <p>Price Range (£)</p>
                <label class="container">Show All
                    <input type="radio" name="radio" value='5'>
                    <span class="checkmark"></span>
                  </label>
                <label class="container">500-1000
                    <input type="radio" checked="checked" name="radio" value='1'>
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">1000-1500
                    <input type="radio" name="radio" value='2'>
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">1500-2000
                    <input type="radio" name="radio" value='3'>
                    <span class="checkmark"></span>
                  </label>
                  <label class="container">2000-2500+
                    <input type="radio" name="radio" value='4'>
                    <span class="checkmark"></span>
                  </label>
                 

            </div>

            <button type="submit" name="submit">Search</button>
        </form>

        

        </div>

        <div class="packages-sub-container" >
        <form action="page_loading.php" method="get">
        <?php
            $range = $_POST['radio'];
            $departure_date = $_POST['departure_date'];
    
        

        
            
            $host = "localhost";
            $user = "root";
            $password = '';
            $db_name = "holly_lands";

            $con = mysqli_connect($host, $user, $password, $db_name);
            if (mysqli_connect_errno()) {
                die("Failed to connect with MySQL: " . mysqli_connect_error());
            }
            if ($range == '1'){
                $sql = "SELECT * from `package_details` where package_price >=500 and package_price <= 1000 and DATE(package_departure_date) > DATE('$departure_date')  ";
            }
            if ($range == '2'){
                $sql = "SELECT * from `package_details` where package_price >=1000 and package_price <= 1500 and DATE(package_departure_date) > DATE('$departure_date')  " ;
            }
            if ($range == '3'){
                $sql = "SELECT * from `package_details` where package_price >=1500 and package_price <= 2000 and DATE(package_departure_date) > DATE('$departure_date')  ";
            }
            if ($range == '4'){
                $sql = "SELECT * from `package_details` where package_price >=2000 and package_price <=2500 and DATE(package_departure_date) > DATE('$departure_date')  ";
            }
            if ($range == '5'){
                $sql = "SELECT * from `package_details` where DATE(package_departure_date) > DATE('$departure_date') ";
            }

            
            $result = mysqli_query($con, $sql);
            // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);


            if ($count >= 1) {
                for ($x = 1; $x <= $count; $x++) {
                    $row = mysqli_fetch_assoc($result);
                    $package_id = $row["package_id"];
                    $package_title = $row["package_title"];
                    $package_type = $row["package_type"];
                    $package_main_points = $row["package_main_points"];
                    $package_details = $row["package_details"];
                    $package_price = $row["package_price"];
                    $package_description = $row["package_description"];
                    $package_departure_date = $row["package_departure_date"];
                    $package_arrival_date = $row["package_arrival_date"];
                    $package_imgs = $row["package_imgs"];
                    $package_main_img = $row["package_main_img"];

                    echo ' <div class="package-container" >
                <div class="package-img">
                    <img src="img/packages/' . $package_main_img . '" alt="">
                </div>
                <div class="package-heading">
                    <p>' . $package_title . '</p>
                </div>
                <div class="package-sub-heading" style="color:black;padding:1vmax">
                ' . $package_description . '
                </div>
                <div class="package-price">
                    <span >Per Person</span>
                    <p>' . $package_price . '/-</p>
                </div>
                <div>
                <button value="' . $package_id . '"  class="book-button-package">View</button>
                </div>
                </div>';
                }
            } else {
               echo  " <center>
                <p id='no-searh-notification'>Opps ! There is nothing matching your Search. Try Changing the Search Values </p>
            </center>";
            }
            
        
        ?>
        </form>

            

            <!-- <div class="package-container">
                <div class="package-img">
                    <img src="img/packages/package1.jpeg" alt="">
                </div>
                <div class="package-heading">
                    <p>ASHURU</p>
                </div>
                <div class="package-sub-heading" style="color:black">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sunt quia, facere ipsam soluta
                    molestias tempora doloremque tempore aspernatur aliquid harum quae assumenda itaque ab nam ad
                    commodi dolorem exercitationem.
                </div>
                <div class="package-price">
                    <span >Per Person</span>
                    <p>1899/-</p></div>
            </div>
            <div class="package-container">
                <div class="package-img">
                    <img src="img/packages/package1.jpeg" alt="">
                </div>
                <div class="package-heading">
                    <p>ASHURU</p>
                </div>
                <div class="package-sub-heading">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sunt quia, facere ipsam soluta
                    molestias tempora doloremque tempore aspernatur aliquid harum quae assumenda itaque ab nam ad
                    commodi dolorem exercitationem.
                </div>
                <div class="package-price">
                    <span >Per Person</span>
                    <p>1899/-</p></div>
            </div>
            <div class="package-container">
                <div class="package-img">
                    <img src="img/packages/package1.jpeg" alt="">
                </div>
                <div class="package-heading">
                    <p>ASHURU</p>
                </div>
                <div class="package-sub-heading">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sunt quia, facere ipsam soluta
                    molestias tempora doloremque tempore aspernatur aliquid harum quae assumenda itaque ab nam ad
                    commodi dolorem exercitationem.
                </div>
                <div class="package-price">
                    <span >Per Person</span>
                    <p>1899/-</p></div>
            </div>
            <div class="package-container">
                <div class="package-img">
                    <img src="img/packages/package1.jpeg" alt="">
                </div>
                <div class="package-heading">
                    <p>ASHURU</p>
                </div>
                <div class="package-sub-heading">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sunt quia, facere ipsam soluta
                    molestias tempora doloremque tempore aspernatur aliquid harum quae assumenda itaque ab nam ad
                    commodi dolorem exercitationem.
                </div>
                <div class="package-price">
                    <span >Per Person</span>
                    <p>1899/-</p></div>
            </div>
            <div class="package-container">
                <div class="package-img">
                    <img src="img/packages/package1.jpeg" alt="">
                </div>
                <div class="package-heading">
                    <p>ASHURU</p>
                </div>
                <div class="package-sub-heading">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sunt quia, facere ipsam soluta
                    molestias tempora doloremque tempore aspernatur aliquid harum quae assumenda itaque ab nam ad
                    commodi dolorem exercitationem.
                </div>
                <div class="package-price">
                    <span >Per Person</span>
                    <p>1899/-</p></div>
            </div>

            <div class="package-container">
                <div class="package-img">
                    <img src="img/packages/package1.jpeg" alt="">
                </div>
                <div class="package-heading">
                    <p>ASHURU</p>
                </div>
                <div class="package-sub-heading">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sunt quia, facere ipsam soluta
                    molestias tempora doloremque tempore aspernatur aliquid harum quae assumenda itaque ab nam ad
                    commodi dolorem exercitationem.
                </div>
                <div class="package-price">
                    <span>Per</span>
                    <p>1899/-</p></div>
            </div> -->
            

        </div>

    </div>

   
</div>

<?php 

include 'footer.php'
?>

