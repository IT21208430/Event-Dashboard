<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
body{
  margin: 0px;
  padding:0px;
  background-image: url(assets/img/mybg.jpg);

}


 @import url('https://fonts.googleapis.com/css2?family=Rubik+Iso&display=swap');

.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 750px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.myDIV {
  width: 80%;
  padding: 60px 0;
  text-align: center;
  background-color:   #005b96;
  margin-top: 20px;
  border-radius: 50%;
  /*box-shadow: 5px 10px black ;*/
  box-shadow: 0px 0px 10px 3px black ;
  color: white;
  font-size: 50px;
  font-family: 'Rubik Iso', cursive;
}

.myDIVPlaying{
  width: 80%;
  padding: 60px 0;
  text-align: center;
  background-color:   #00008B;
  margin-top: 15px;
  border-radius: 50%;
  box-shadow: 5px 10px black ;
  color: white;
  font-size: 50px;
  font-family: 'Rubik Iso', cursive;
}


</style>
</head>
<body>

<div class="row">
  <div class="column" style="background-color:transparent;">
      <div class="col-md-6 well" style="background-color: black ;  height: 600px; width: 750px ; margin-right: 200px; margin-top: 90px; border-radius: 50px;">
    <h3 class="text-primary"><span>
        <div class="site-logo" >
                   <img src="assets/img/logo.jpeg" alt="logo" style="height: 250px;width: 600px; margin-left: 50px;margin-top: 230px">
              </div>


  </div>
  <a href="assignPriority.php"><button style="background-color: transparent; outline: none; border:none;">next</button></a>
  </div>
  <div class="column" style="background-color:transparent;">
    <div style="margin-bottom: 100px;">

    <?php
      //starting connection with the database
      global $con;
      $con = new mysqli("localhost", "root", "", "codecondb");
      $sqlCmd = "SELECT * FROM teams ORDER BY priority ";
      $resultSet = $con->query($sqlCmd);

      if($resultSet->num_rows > 0)
      {
        while($row = $resultSet->fetch_assoc())
        {
          if($row["priority"] != -99){
            if($row["isPlaying"] == 0)
              echo'<center><div class="myDIV"><span><b>'.$row["name"].'</b></span></div></center>';
            else if($row["isPlaying"] == 1)
              echo'<center><div class="myDIVPlaying"><span><b>'.$row["name"].'</b></span></div></center>';
          }
        }
      }

      $con->close();
    ?>


</div>
</div>

</body>
</html>