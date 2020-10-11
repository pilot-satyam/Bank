<?php
include 'connection.php';
$amterr = "";
if(isset($_POST['done']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amt = $_POST['amount'];
    $q = "SELECT * from users where id=$from";
    $query = mysqli_query($con,$q);
    $q1 = mysqli_fetch_array($query);
    $q = "SELECT * from users where id=$to";
    $query = mysqli_query($con,$q);
    $q2 = mysqli_fetch_array($query);
    if($amt > $q1['Credits'])
    {
        $amterr = "Insufficient Balance";
    }
    else {

        $newCredit = $q1['Credits'] - $amt;
        $q = "UPDATE users set Credits=$newCredit where id=$from";
        mysqli_query($con,$q);
     


        $newCredit = $q2['Credits'] + $amt;
        $q = "UPDATE users set Credits=$newCredit where id=$to";
        mysqli_query($con,$q);
           
        $sname = $q1['UserName'];
        $rname = $q2['UserName'];
        $q = "INSERT INTO `transactions`(`sid`,sname, `rid`,rname, `amount`) VALUES ($from,'$sname',$to,'$rname',$amt);";
        $tns=mysqli_query($con,$q);
        if(!$tns){
         echo mysqli_error($con);
        }
        $newCredit= 0;
        $amt =0;
        header('location:index.php');
    }
    
}
?>

<html>
    <head>
        <title>Transaction</title>
       
         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

<style>
        body{
    background-image: url("1.jpg");
     background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  place-items: center;

}

.ap{
    padding: 20px;

}
.container{
  /*display: grid;*/
  place-items: center;
padding: 20px;

}
form{
    background-color: white;
    padding: 20px;
    /*width: 50%;*/
    /*flex:1;*/
}
</style>

    <body>
    <div class="ap">
        <div class="container white">
        <div>
        
        
        <form method="post"  name="tcredit">
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $q = "SELECT * FROM users where id=$sid";
                $query=mysqli_query($con,$q);
                if(!$query)
                {
                    echo "Error ".$q."<br/>".mysqli_error($con);
                }
                $res=mysqli_fetch_array($query);
            ?>
            <label style="color: black;"> <h4>From
                    <?php echo $res['UserName'] ;?></h4> </label>
                    <h6>Your details-</h6>
                    <h6>Email: <?php echo $res['Email'] ;?></h6> 
                    <h6>Contact Number: <?php echo $res['Contact'] ;?></h6> 
                    <h6>Credit Balance: <?php echo $res['Credits'] ;?></h6>
            <div class="input-field">
                <select name="to" >

            
            <option value="" disabled selected> Choose a user from this list whom you want the credits to be transfered... </option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $q = "SELECT * FROM users where id!=$sid";
                $query=mysqli_query($con,$q);
                if(!$query)
                {
                    echo "Error ".$q."<br/>".mysqli_error($con);
                }
                while($res = mysqli_fetch_array($query)) {
            ?>
                <option value="<?php echo $res['id'];?>">
                <?php echo $res['UserName'] ;?>
                
                </option>
            <?php } ?>
            </select>
        </div>




            <div class="input-field">
                        <label htmlFor="Credits">Amount</label>
                        <input  type="number" name="amount" required  />
                        <?php if ($amterr =="Insufficient Balance"){

                            ?><p class="error red-text" style="display: flex;"><i class="material-icons">error_outline</i><?php echo $amterr;?></p><?php

                        } ?>
                        
                    </div>
          <!--   <label style="color: black;">Amount</label>
            <input class="w3-input" name="amount" required/> <p class="error"></p><?php echo $amterr;?></p> -->
            
            <button class="waves-effect blue btn btn-medium z-depth-2" name="done" type="submit">Transfer</button>
            <!-- <a href="index.php" class="waves-effect blue btn btn-medium z-depth-2">Home</a> -->
            
        </form>
  
</div>
</div>
</div>
<script>
      $(document).ready(function(){
    $('select').formSelect();
  });
    </script>
    </body>
</html>