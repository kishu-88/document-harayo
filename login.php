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

        .backicon {
            height: 40px;
            width: 40px;
            margin-top: -70px;
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

        .homead {
            height: 280px;
            width: 280px;
            border: 10px black;
            border-width: 5px;
            background: rgb(153, 207, 58);
            border-style: solid;
            margin-left: 80px;
            margin-top: 60px;
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
            Log In
        </div>
        <div class="dropdowns">
            <div class="docid">
            <form class="form" method="post" action="">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Username</label>
                      <input class="form-control form-control-sm col-sm-6 col-xs-12" type="text" placeholder="Username" name="Username" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input class="form-control form-control-sm col-sm-6 col-xs-12" type="password" placeholder="password" name="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 50px;" name="enter">Search</button>
                  </form>
<?php 
include('database.php');
if(isset($_POST['enter'])){
	$search=mysqli_real_escape_string($con,$_POST['Password']);
	$sql="select * from Logintable where Username like '%$search%'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
            echo "<br/>"."Login Successful";
			echo "<a href='data.php?id=".$row['ID']."'>Click to proceed..</a>" ;
		}
	}else{
		echo "Please enter correct username and password";
	}
}
?>
            </div>
        </button>
        </div>
        <div class="homead">
            <img src="./images/ad.jpg " style="height: 280px;width: 280px;">
        </div>
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