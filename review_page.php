<?php
include('header.php');
      $host = "localhost";
      $user = "root";
      $password = '';
      $db_name = "holly_lands";

      $con = mysqli_connect($host, $user, $password, $db_name);
      if (mysqli_connect_errno()) {
        die("Failed to connect with MySQL: " . mysqli_connect_error());
      }
      
      $sql = "SELECT * from `reviews` where review_status = 1";



      $result = mysqli_query($con, $sql);
      // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);
?>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/reviews_page.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
<style>
  .main-text-container {
    background-color: rgba(0, 0, 0, 0.209);
    box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.209);
    padding: 1vmax 1vmax;
  }

  @media screen and (max-width: 750px) {
    .main-text-container {
      margin-top: 10vmin;
      margin-bottom: 10vmin;
      width: 78vmin;
      font-weight: 900;
      letter-spacing: 2px;
    }
  }
</style>



<center>
  <div class="main-text-container">
    <p>"Discover the World with Confidence - See What Our Happy Travelers Are Saying!"</p>
    <span>

      Traveling is one of life's greatest joys, and we at <strong>Holy Land</strong> are committed to making your travels easy and enjoyable. We are proud to provide top-notch travel services and experiences, and we're thrilled to hear that our customers agree. Here are just a few of the many positive testimonials we've received from our satisfied travelers.
    </span>

  </div>
</center>

<div class="wallpaper-container">
  <img align="top" src="img/packages-img.jpg" alt="">

</div>

<center>
  <p id="testimonials_id">Testimonials</p>
</center>
<div class="slider">

<?php
echo '<input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav" />';
for ($x = 1; $x <= 7; $x++) {
  echo ' <input type="radio" name="slider" title="next" class="slider__nav" />';
}

?>
  


  <div class="slider__inner">



      <?php
      if ($count >= 1) {
        for ($x = 1; $x <= 8; $x++) {
          $row = mysqli_fetch_assoc($result);
          $review_name = $row["review_name"];
          $review_email = $row["review_email"];
          $review_feedback = $row["review_feedback"];

          echo '
             <div class="slider__contents">
                    <img src="img/img_avatar.png" alt="Avatar" class="avatar">
                  <h2 class="slider__caption">'.$review_name.'</h2>
                  <p class="slider__txt">'.$review_feedback.'</p>
                
            </div>';
        }
      } else {
        echo  " <center>
                <p id='no-searh-notification'>Opps ! There is nothing matching your Search. Try Changing the Search Values </p>
            </center>";
      }


      ?>
     





   
  </div>
</div>


<div class="write-review-container">
  <center>
    <p>Submit a Feedback</p>
  </center>
  <div class="review-form-container">
    <form action="review_submission.php" method="post">
      <div class="input-container-review">

        <p>Name</p>
        <input type="text" id="name" name="review_name">
      </div>
      <div class="input-container-review">

        <p>Email:</p>
        <input type="text" id="email" name="review_email">
      </div>
      <div class="input-container-review">

        <p>Feedback:</p>
        <input type="text" id="feedback" name="review_feedback">

      </div>


      <div class="input-container-review">

        <button onclick="reviewSubmit()">Submit</button>
      </div>




  </div>



  </form>
</div>
<div class="review_compeletion_container" style="display: none;">
  <center>
    <p>YOUR FEEDBACK HAS BEEN SUCCESSFULLY RECEIVED BY THE TEAM <br>
      THANK YOU ! <i class="bi bi-balloon-heart-fill"></i>
    </p>
  </center>
</div>

<?php
include('footer.php')

?>


<script>
  $(':radio').change(function() {
    console.log('New star rating: ' + this.value);
  });
</script>
<style>

</style>