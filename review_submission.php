<?php 
      $server = "localhost";
      $username = "root";
      $password = "";
      $con = mysqli_connect($server,$username,$password);
      
      if(!$con){
          die("Connection to the database failed due to".
          mysqli_connect_error());
      }
          
      
      
      $review_name = $_POST['review_name'];
      $review_email = $_POST['review_email'];
      $review_feedback = $_POST['review_feedback'];
    
      
      
    
      
      $review_name = mysqli_real_escape_string($con, $_POST['review_name']);
      $review_email = mysqli_real_escape_string($con, $_POST['review_email']);
      $review_feedback = mysqli_real_escape_string($con, $_POST['review_feedback']);

      
       
      $sql= "INSERT INTO `holly_lands`.`reviews` (`review_id`, `review_name`, `review_email`, `review_feedback`) VALUES (NULL, '$review_name', '$review_email', '$review_feedback');";
      
      if($con->query($sql) == true){
        echo "<script>alert('Your review has been successfully received')</script>";
        header('reviews');
        include('review_page.php');
         
      }
      else{
          // echo "Error L: $sql <br> $con->error";
          echo "<script>alert('Please enter correct details')</script>";
        
          
      }
      $con->close();
      
      ?>