<?php
    include 'connection.php'; ?>
  <?php
        if(isset($_POST['done'])){
        $UserName = $_POST['UserName'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $Credits = $_POST['Credits'];
        $q="INSERT INTO `users`(`UserName`, `Email`, `Contact`, `Credits`) VALUES ('$UserName','$Email','$Contact','$Credits')";
        $query = mysqli_query($con,$q);
        header("allusers.php");
    }
?>
<html>
    <head>
      <title>Credit Management System</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    .formbody{
      height: 50vh;
      width: 30vw;
      flex: 0.45;
      padding: 20px;
    }
    .ap{
      display: grid;
      place-items: center;
      padding: 20px;
    }
    body{
      background-image: url("1.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
    }
  </style>
  </head>         
    <body>
      <div class="ap">
        <form method="post" action="insert.php" class="white formbody"  >
          <div class="input-field">
            <label htmlFor="email">Username</label>
            <input type="text"  name="UserName" required/>
          </div>
          <div class="input-field">
            <label htmlFor="Email">Email</label>
            <input type="text" name="Email" required />
          </div>
          <div class="input-field">
            <label htmlFor="Contact">Contact Number</label>
            <input type="number"  name="Contact" required  />
          </div>
          <div class="input-field">
            <label htmlFor="Credits">Credits</label>
            <input type="number" name="Credits" required  />
          </div>
          <div class="input-field">
            <button type ="submit" name="done" class="waves-effect blue btn btn-medium z-depth-2">Add User</button>  
            <a href="index.php"   style="text-decoration: none" class="waves-effect blue btn btn-medium z-depth-2">Home</a>
          </div>
        </form>
      </div>
    </body>
</html>
