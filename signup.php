<?php
include("database.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Harayo</title>
    <style>
        .content {
            max-width: 500px;
            margin: auto;
            background: rgb(54, 67, 110);
            padding: 10px;
            height: 800px;
            padding-top: 80px;
        }
        .harayo {
            height: 60px;
            width: 200px;
            border: 10px black;
            border-width: 5px;
            background: rgb(153, 207, 58);
            border-style: solid;
            margin-left: 130px;
            margin-top: -30px;
            font-size: 30px;
            text-align: center;

        }

        .vetiyo {
            height: 40px;
            width: 200px;
            border: 10px black;
            border-width: 5px;
            background: rgb(153, 207, 58);
            border-style: solid;
            margin-left: 130px;
            margin-top: 60px;
            font-size: 35px;

        }

        .backicon {
            height: 40px;
            width: 40px;
            margin-top: -70px;
        }

        .homead {
            height: 75px;
            width: 475px;
            border: 10px black;
            border-width: 5px;
            background: rgb(153, 207, 58);
            border-style: solid;
            margin-left:0px;
            margin-top: 215px;
            font-size: 35px;
            color: rgb(231, 58, 39);
            position: fixed;
        }

        .dropdowns {
            margin-top: 50px;
            margin-left: 150px;
            color: blanchedalmond;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="content">
        <div class="backicon">
            <a href="./index.html"><img src="./images/back icon.png" style="width:70px;height:60px;"></a>
        </div>
        <div class="harayo">
            Sign-Up
        </div>
        <div class="dropdowns">
            <div class="docid">
                <form action="" method="Post" enctype="multipart/form-data"> 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Username</label>
                      <input class="form-control form-control-sm col-sm-6" type="text" placeholder="UserName." name="Username" required>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input class="form-control form-control-sm col-sm-6" type="text" placeholder="Email" name="Email" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input class="form-control form-control-sm col-sm-6" type="text" placeholder="Enter strong password" name="Password" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input class="form-control form-control-sm col-sm-6" type="text" placeholder="Confirm Password" name="cpassword" required>
                      </div>
                    <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button> 
                    <a href="login.php"><button type="button" class="btn btn-primary" name="login">Login</button></a>
                  </form>
            </div>
        </div>
        <div class="homead">
            <img src="./images/IMG_20210401_183221 (2).jpg" style="height: 75px;width: 475px;">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("sql309.epizy.com", "epiz_28285503", "4h1P2poMHKkjWgd", "epiz_28285503_docharayo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(isset($_POST['submit']))
 {
// Attempt insert query execution
$Username=$_POST['Username'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$sql = "INSERT INTO Logintable (Username, Email, Password) VALUES ('$Username', '$Email','$Password')";
if(mysqli_query($link, $sql)){
    echo "Submitted Successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 }
// Close connection
mysqli_close($link);
?>
