<html>
    <title>Home</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>
<style>
body{
  background-image: url("5.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
.app{
  display: grid;
  place-items: center;
}
.card-content{
  flex:1;
}
.card{
  display: flex;
  width: 65%;
  background-image: url("5.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  border: none;
}
</style>
    <body> 
      <div class="app col s12 m7">
       <div class="card horizontal z-depth-0">
          <div class="row">
            <div class="card-image col s6">
              <img src="2.png">
            </div>
            <div class="card-stacked col s6">
              <div class="card-content">
                <div class="#ad9736" style="padding: 20px"><h1>WELCOME <br> TO SPARKS BANK</h1></div>
              </div>
              <div class="card-action">
                <div class="center" style="text-align: center">
                  <a href="insert.php"  style="text-decoration: none" class="waves-effect blue btn btn-medium z-depth-2">Add users</a>
                  <a href="allusers.php"  style="text-decoration: none" class="waves-effect blue btn btn-medium z-depth-2">All Users</a>
                  <a href="transaction.php"  style="text-decoration: none" class="waves-effect blue  btn btn-medium  z-depth-2"> Mini Statement</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>