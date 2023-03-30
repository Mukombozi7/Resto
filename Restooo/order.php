<?php
$servername='localhost';
$username='root';
$password='';
$databasename='web';
$con=mysqli_connect($servername,$username,$password,$databasename);

if(isset($_POST['submit'])){

$a=$_POST['fullname'];
$b=$_POST['mobile num'];
$c=$_POST['district'];
$d=$_POST['sector'];
$e=$_POST['orders'];
$f=$_POST['quantity'];

$sql="INSERT INTO bonheur(fullname,mobile num,district,sector,orders,quantity)
VALUES('$a','$b','$c','$d','$e','$f')";
$run=mysqli_query($con,$sql);

if($run)
{
echo"<script>alert('Order Sent Successfully!')</script>";
}
else{
  echo"<script>alert('Ooops!!Check Again')</script>";
}

}


?>
<!DOCTYPE html>
<?php
$servername='localhost';
$username='root';
$password='';
$databasename='web';
$con=mysqli_connect($servername,$username,$password,$databasename);

if(isset($_POST['submit'])){

$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['email'];
$d=$_POST['address'];
$e=$_POST['phone'];
$f=$_POST['course'];

$sql="INSERT INTO bonheur(firstname,lastname,email,address,phone,course)
VALUES('$a','$b','$c','$d','$e','$f')";
$run=mysqli_query($con,$sql);

if($run)
{
echo"<script>alert('Application sent successfully!')</script>";
}
else{
  echo"<script>alert('oops! Something wrong')</script>";
}

}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <link href="https://fonts.googleapis.com/cc2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="resto.css">
    </head>
    <body>
        <section class="header">
            <nav class="navbar">
                <div class="navbar-box">
                    <h3 class="heading-tertiary">B & B</h3>
                </div>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="resto.html" class="navbar-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link">About Us</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link">Menu</a>
                    </li>
                    <li class="navbar-item">
                        <a href="gallery.html" class="navbar-link">Gallery</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link">Contact Us</a>
                    </li>
                </ul>
                <div class="toogle">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
            <div class="header-container">
                <div class="video2">
                    <video loop muted autoplay id="video">
                        <source src="Ordernow.mp4" type="video/mp4">
                        This file type is not supported
                    </video>
                </div>
                <div class="forms">
                <div class="header-box2">
                        <form class="heading-primary2">
                            <form><b>
                                <h1 class="h1">Order Now</h1> 
                            </br>
                              <div class="f">
                                Items Ordered:
                                  <input class="details" type="text" name="orders">
                              </br></br></br>
                              Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <input class="details" type="text" name="quantity">
                              </br></br></br>
                                  <input class="button" type="submit" value="submit">
                              </div>
                            </b>
                        </form>
                </div>
                <div class="header-box3">
                    <form class="heading-primary2">
                        <form><b>
                            <h1 class="h1">Credentials</h1> 
                          <div class="f">
                            Full Names:
                              <input class="details" type="text" name="fullname">
                          </br></br>
                          Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <input class="details" type="text" name="mobile num">
                          </br></br>
                          District:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <input class="details" type="text" name="district">
                          </br></br>
                          Sector:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <input class="details" type="text" name="sector">
                          </br></br>
                          </div>
                        </b>
                    </form>
            </div>
            </div>
        </div>
        </section>
    </body>
</html>