<?php

$team1Priority = $_POST["1"];
$team2Priority = $_POST["2"];
$team3Priority = $_POST["3"];
$team4Priority = $_POST["4"];
$team5Priority = $_POST["5"];
$team6Priority = $_POST["6"];
$team7Priority = $_POST["7"];
$team8Priority = $_POST["8"];
$team9Priority = $_POST["9"];
$team10Priority = $_POST["10"];

$team1isPlaying = $_POST["isPlaying1"];
$team2isPlaying = $_POST["isPlaying2"];
$team3isPlaying = $_POST["isPlaying3"];
$team4isPlaying = $_POST["isPlaying4"];
$team5isPlaying = $_POST["isPlaying5"];
$team6isPlaying = $_POST["isPlaying6"];
$team7isPlaying = $_POST["isPlaying7"];
$team8isPlaying = $_POST["isPlaying8"];
$team9isPlaying = $_POST["isPlaying9"];
$team10isPlaying = $_POST["isPlaying10"];


$team1Name = "Denkers";
$team2Name = "Gigabyte Gryffindors";
$team3Name = "Runtime Terror";
$team4Name = "Regex Native";
$team5Name = "Team Pandora";
$team6Name = "Matrix";
$team7Name = "The \"I\" Radiations";
$team8Name = "B2C";
$team9Name = "S2Nx";
$team10Name = "Intrinsic";

//starting connection with the database
global $con;
$con = new mysqli("localhost", "root", "", "codecondb");

$sqlCmd1 = "UPDATE teams SET priority=".intval($team1Priority)." , isPlaying=".intval($team1isPlaying)." WHERE name='$team1Name'";
$sqlCmd2 = "UPDATE teams SET priority=".intval($team2Priority)." , isPlaying=".intval($team2isPlaying)." WHERE name='$team2Name'";
$sqlCmd3 = "UPDATE teams SET priority=".intval($team3Priority)." , isPlaying=".intval($team3isPlaying)." WHERE name='$team3Name'";
$sqlCmd4 = "UPDATE teams SET priority=".intval($team4Priority)." , isPlaying=".intval($team4isPlaying)." WHERE name='$team4Name'";
$sqlCmd5 = "UPDATE teams SET priority=".intval($team5Priority)." , isPlaying=".intval($team5isPlaying)." WHERE name='$team5Name'";
$sqlCmd6 = "UPDATE teams SET priority=".intval($team6Priority)." , isPlaying=".intval($team6isPlaying)." WHERE name='$team6Name'";
$sqlCmd7 = "UPDATE teams SET priority=".intval($team7Priority)." , isPlaying=".intval($team7isPlaying)." WHERE name='$team7Name'";
$sqlCmd8 = "UPDATE teams SET priority=".intval($team8Priority)." , isPlaying=".intval($team8isPlaying)." WHERE name='$team8Name'";
$sqlCmd9 = "UPDATE teams SET priority=".intval($team9Priority)." , isPlaying=".intval($team9isPlaying)." WHERE name='$team9Name'";
$sqlCmd10 = "UPDATE teams SET priority=".intval($team10Priority)." , isPlaying=".intval($team10isPlaying)." WHERE name ='$team10Name'";

$con->query($sqlCmd1);
$con->query($sqlCmd2);
$con->query($sqlCmd3);
$con->query($sqlCmd4);
$con->query($sqlCmd5);
$con->query($sqlCmd6);
$con->query($sqlCmd7);
$con->query($sqlCmd8);
$con->query($sqlCmd9);
$con->query($sqlCmd10);

$con->close();

header("Location:home.php");


?>