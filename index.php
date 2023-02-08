<!DOCTYPE html>
<html lang="en">

<?php  include 'header.php'?>
<body>
   <style>

    body{
        font-family: 'Roboto Condensed', sans-serif;
        color: white;
    }
   </style>
    <center>
        <div class="main-text-container">
            <p>"Islam is not a new religion, but the same truth that God revealed through all His prophets to every
                people." </p> <span>- Quran (3:83)</span>
        </div>
    </center>

    <div class="wallpaper-container">
        <img align="top" src="img/wallpaper2.jpg" alt="">

    </div>

    <!-- <div class="search-container">
        <div class="search-sub-container">
            <p>Destination</p>
            <select name="destination" id="destination">
                <option class="destination-option" value="">Makkah</option>
                <option class="destination-option" value="">Madina</option>
                <option class="destination-option" value="">Assura</option>
            </select>
        </div>
        <div class="search-sub-container">
            <p>Number of People</p>
            <input type="number">
        </div>
        <div class="search-sub-container">
            <p>Departure Date</p>
            <input placeholder="Departure Date" type="date">
        </div>
        <div class="search-button">
            <button>Search</button>
        </div>
    </div> -->
    <div class="main-container">
        <div class="main-heading">
            <p>Welcome to Holy Land Travels</p>
        </div>
        <div class="main-sub-heading">
            <p> Holly Land Travel Agency specializes in providing spiritual journeys to Islamic holy sites. Our expertly
                curated tours take you to the most sacred places in the Muslim world, including Mecca, Medina, and
                Jerusalem. Our experienced guides will lead you through the historical and cultural significance of
                these
                locations, ensuring that you have a truly meaningful and enriching experience. Whether you're a devout
                Muslim seeking a deeper connection with your faith, or simply looking to explore the rich heritage of
                Islam,
                Holly Land Travel Agency has the perfect tour for you.</p>
        </div>

        <div class="main-gallery-control-buttons">
            <div class="button-container"><button id="button1" onclick="button1change()">Sham</button></div>
            <div class="button-container"><button id="button2" onclick="button2change()">Iran</button></div>
            <div class="button-container"><button id="button3" onclick="button3change()">Iraq</button></div>
            <div class="button-container"><button id="button4" onclick="button4change()">Hotels</button></div>
            <div class="button-container"><button id="button5" onclick="button5change()" >Video Gallery</button></div>
        </div>
        <div class="container" style="display: flex;">
            <!-- Close the image -->
            <span onclick="this.parentElement.style.display='none'" style="margin:auto"
                class="closebtn">&times;</span>

            <!-- Expanded image -->
            <img id="expandedImg" style="width:100vmin;">

            <!-- Image text -->
            <div id="imgtext"></div>
        </div>

        <div class="change-container-1">
            <center>
                <p class="container-heading-change">Sham</p>
            </center>
            

            <div class="row">
                <div class="column">
                    <img src="img/packages/package1.jpeg" alt="Nature" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Snow" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Mountains" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
            </div>
        </div>
        <div class="change-container-2" style="display: none;">
            <center>
                <p class="container-heading-change">Iran</p>
            </center>
            <div class="container" style="display: flex;">
                <!-- Close the image -->
                <span onclick="this.parentElement.style.display='none'" style="margin:auto"
                    class="closebtn">&times;</span>

                <!-- Expanded image -->
                <img id="expandedImg" style="width:100vmin;margin:auto">

                <!-- Image text -->
                <div id="imgtext"></div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="img/packages/package1.jpeg" alt="Nature" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Snow" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Mountains" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
            </div>
        </div>
        <div class="change-container-3" style="display: none;">
            <center>
                <p class="container-heading-change">Iraq</p>
            </center>
            <div class="container" style="display: flex;">
                <!-- Close the image -->
                <span onclick="this.parentElement.style.display='none'" style="margin:auto"
                    class="closebtn">&times;</span>

                <!-- Expanded image -->
                <img id="expandedImg" style="width:100vmin;margin:auto">

                <!-- Image text -->
                <div id="imgtext"></div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="img/packages/package1.jpeg" alt="Nature" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Snow" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Mountains" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
            </div>
        </div>
        <div class="change-container-4" style="display: none;">
            <center>
                <p class="container-heading-change">Hotels</p>
            </center>
            <div class="container" style="display: flex;">
                <!-- Close the image -->
                <span onclick="this.parentElement.style.display='none'" style="margin:auto"
                    class="closebtn">&times;</span>

                <!-- Expanded image -->
                <img id="expandedImg" style="width:100vmin;margin:auto">

                <!-- Image text -->
                <div id="imgtext"></div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="img/packages/package1.jpeg" alt="Nature" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Snow" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Mountains" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/faranz.png" alt="Lights" onclick="myFunction(this);">
                </div>
            </div>
        </div>
       
        <div class="change-container-5" style="display: none;">
             <center>
                <p class="container-heading-change">Video Gallery</p>
            </center>
            <div class="video-container">
            <div class="videos">
                <video class="active" src="video/mov_bbb.mp4" muted></video>
                <p>Video 1 Title</p>
                <video src="video/mov_bbb.mp4" muted></video>
                <p>Video 2 Title</p>
                <video src="video/mov_bbb.mp4" muted></video>
                <p>Video 3 Title</p>
                <video src="video/mov_bbb.mp4" muted></video>
                <p>Video 4 Title</p>
            </div>
            <div class="main-video">
                <video src="video/mov_bbb.mp4" muted controls autoplay></video>
            </div>
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>

            $(document).ready(function () {

                $('.videos video').click(function () {

                    $(this).addClass('active').siblings().removeClass('active');

                    var src = $(this).attr('src');
                    $('.main-video video').attr('src', src);
                });
            });

        </script>








    </div>




</body>

<?php  include 'footer.php'?>
</html>