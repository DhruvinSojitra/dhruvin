<!DOCTYPE html>
<html>
<head>
  <title>FEETBACK FORM</title>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='style.css' rel='stylesheet'>
</head>
<body>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "feedback";

  // Create database connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);
  
  if (!$conn) {
    die('Could not Connect My Sql:' .mysql_error());
  }

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Insert data into the database
    $sql = "INSERT INTO feedback (name, email, rating, message)
            VALUES ('$name', '$email', '$rating', '$comment')";

    if ($conn->query($sql) === TRUE) {
      echo "<div class='succes-message'>New record created successfully...</div>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  

  // Close database connection
  mysqli_close($conn);
  ?>

  <div class="container">
    <h1>Feedback FORM</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class='input-content'>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required placeholder='Enter Name'>

      <label for="email">Email ID:</label>
      <input type="email" id="email" name="email" required placeholder='Enter Email'>

      <label for="rating">Rating:</label>
      <div class="rating">
        <input type="radio" id="star5" name="rating" value="5" required>
        <label for="star5">&#9733;</label>
        <input type="radio" id="star4" name="rating" value="4" required>
        <label for="star4">&#9733;</label>
        <input type="radio" id="star3" name="rating" value="3" required>
        <label for="star3">&#9733;</label>
        <input type="radio" id="star2" name="rating" value="2" required>
        <label for="star2">&#9733;</label>
        <input type="radio" id="star1" name="rating" value="1" required>
        <label for="star1">&#9733;</label>
      </div>

      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" rows="4" required placeholder='Please leave any additional informartion here...'>.</textarea>
    
      <input type="submit" name="submit" value="Submit" class='submit-button'> 
     </div>
    </form>
  </div>
</body>
</html>
