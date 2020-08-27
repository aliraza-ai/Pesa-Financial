<?php
$check="";
include_once "admin/classes/database.php";
$q="select * from tb_user";

if(isset($_POST['submit']))
{
    $fname=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $profession=$_POST['profession'];
    $db=new Database();

    $querys="select * from affiliation where number='$number'";
    $check1=$db->select($querys);

    if($check1==false)
    {
        $query="INSERT INTO affiliation(fname,lname,number,email,profession) VALUES('$fname','$lastName','$number','$email','$profession')";

        $check=$db->insert($query);
        if($check!=false)
        {
            $check="Congratulations! You Have been Applied For Affiliation... We will contact Soon!";
        }

    }
    else
    {
        $check="You have Already Applied!";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Apply For Affiliation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/myfile.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
            <form class="form-inline ml-auto"><input aria-label="Search" class="form-control" placeholder="Search" type="text" /> <input class="submit" type="submit" value="" /></form>
            <ul class="navbar-nav">

            </ul>
        </div>
    </div>
</nav>

<section class="privacy  offset-md-2 col-md-8">
    <div class="container">
        <header class="section-header">
            <div style="height: 70px; margin-top: 80px; background-size: cover; width: 100%; background-image: url('img/portfolio_background5.jpg');background-repeat: no-repeat;">
                <h3 style="font-family:  'Kanit', sans-serif; padding-top: 10px; color: white;" class="section-title ">Apply For Affiliation</h3>
            </div>

        </header>

        <style>
            ::placeholder {
                font-size: 14px;
                color: #c6c8ca;
                font-family: 'Myriad Pro', arial;
            }
        </style>
        <div class="col-lg-12 mt-5"></div>
        <h4 class="textStyle"><b>Fill the Affiliation Information</b></h4>
        <hr>
        <!-- Started from here -->
        <div class="row">
            <div class="col-md-11">
                <div class="card border-info" style="font-family:'Myriad Pro', arial">
                    <div class="card-header bg-info text-white">Register</div>
                    <div class="card-body">
                <form method="POST" action="affiliation-link.php">
                    <center><b style="color:red;font-size: 27px;"> <?php
                            if(isset($_POST['submit']))
                            {
                                echo $check;
                            }
                            ?></b></center>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required name="firstName" aria-describedby="emailHelp" placeholder="Enter First name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Profession</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required name="profession"  aria-describedby="emailHelp" placeholder="Profession">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required name="number" aria-describedby="emailHelp" placeholder="Enter Contact Number with country Code">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Second name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" required name="lastName" aria-describedby="emailHelp" placeholder="Enter First Second">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                   <center><input type="submit" name="submit" class="btn btn-info "> <input type="reset" class="btn btn-info"></center>
                </div>

            </div>
            </form>
                </div>
            </div>
        </div>
        </div>
</section>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3 ">
                <h3 class="footer-heading">Pesa Financial</h3>
                <!----<a href="javascript:void(0);" class="text-center"><img alt="" class="mb-3" src="img/footer-logo.png" /></a>-->
                <p>Full-service credit repair agency helping clients across the United States and offer the best credit repair solutions for loan professionals.</p>
                <div class="socialLinks"></a><a href="https://www.linkedin.com/in/infinitysuccess/"><img alt="" width="40"  src="img/linkedin-icon.png" /></a> <a href="https://www.instagram.com/pesa_results/"><i class="fa fa-instagram" style="color:white;	max-width: 100%; font-size:40px;" aria-hidden="true"></i></a></div>
            </div>
            <div class="col-md-12 col-lg-3">
                <h3 class="footer-heading">Usefull Links</h3>
                <li><a class="p-3 privacy-policy" href="./index.html">Home</a> </li>
                <li><a class="p-3 privacy-policy" href="./privacy-policy.html">Privacy Policy</a> </li>
                <li><a class="p-3 terms-and-conditions" href="./terms-and-conditions.html">Terms And Conditions</a> </li>
                <li><a class="p-3 terms-and-conditions" href="./refund-cancellation-policy.html">Refund Cancellation Policy</a>  </li>

            </div>
            <div class="col-md-12 col-lg-3" id="contact">
                <h3 class="footer-heading">Contact US</h3>
                <p>
                    3379 Peachtree Road NE(Buchead),<br>
                    Suite 555, Altanta, GA 30326
                    <br>

                <p class="p p1">Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (404) 835-0024 </p>
                <p class="p">Toll FREE:&nbsp; (404) 964-5831 </p>
                <p class="p">FAX:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (404) 835-0025 </p>
                </p>
            </div>
            <div class="col-md-12 col-lg-3">
                <h3 class="footer-heading ">PESA Photo Gallery</h3>
                <div class="galleryThumbs"><a href="img/gallery-thumb-1.jpg"><img alt=""  src="img/gallery-thumb-1.jpg" /></a> <a href="img/gallery-thumb-2.jpg"><img alt="" src="img/gallery-thumb-2.jpg" /></a> <a href="img/gallery-thumb-3.jpg"><img alt="" src="img/gallery-thumb-3.jpg" /></a> <a href="img/gallery-thumb-4.jpg"><img alt="" src="img/gallery-thumb-4.jpg" /></a> <a href="img/gallery-thumb-5.jpg"><img alt="" src="img/gallery-thumb-5.jpg" /></a> <a href="img/gallery-thumb-6.jpg"><img alt="" src="img/gallery-thumb-6.jpg" /></a></div>
            </div>
        </div>
    </div>

</footer>
<div class="footer1">© Copyright PESA FINANCIAL. All Rights Reserved</div>
<script src="js/jquery-3.3.1.min.js"></script><script src="js/bootstrap.min.js"></script>
</body>
</html>