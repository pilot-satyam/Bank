<?php
    include 'connection.php';
     $q="select * from transactions";
     $query = mysqli_query($con,$q);
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
    <style>
      body{
      background-image: url("1.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;      
    }
    .ap{
        padding: 20px;
    }
    .container{
    place-items: center;
    padding: 20px;
    }
    </style>
  </head>
  <body>
    <div class="ap">
      <div class="container white">
        <div >
          <table class="table table-striped table-hover table-bordered"><br>
            <tr class="bg-dark text-white text-center">
              <th>Sender's ID</th>
              <th>Senders Name</th>
              <th>Receiver's ID</th>
              <th>Receiver's Name</th>
              <th>Amount</th>           
            </tr>
              <?php
  include 'connection.php';

      $q="select * from transactions";

      $query = mysqli_query($con,$q);

      while($res = mysqli_fetch_array($query))
      {

  ?>
              <tr   class="text-center">
                  <td> <?php echo $res['sid'] ;?></td>
                  <td><?php echo $res['sname'] ;?></td>
                  <td><?php echo $res['rid'] ;?></td>
                  <td><?php echo $res['rname'] ;?></td>
                  <td><?php echo $res['amount'] ;?></td>
              </tr>
              <?php 
                  }
              ?>
          </table>

      </div>
      
      <div class="center" style="text-align: center" >
          <a href="index.php" class="waves-effect blue btn btn-medium z-depth-2">Home</a>
      </div>
      </div>
      </div>
    </body>
</html>
