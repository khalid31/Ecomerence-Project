<!--  ?php
mysql_connect('localhost','root','') or die("ERROR:Connection lost");
   mysql_select_db('ecomdb');
$sql="select * from product  WHERE id=" .$_GET['1'];
$rdata=mysql_query($sql);
while($res=mysql_fetch_array($rdata))
{
$imgpath=$res['j1'];
echo "<img src='$imgpath' height='200' width='200'>";
}
?-->

<?php
include("mycon.php");

$select_query = "SELECT * FROM product";
$sql = mysql_query($select_query) or die(mysql_error());	
while($row = mysql_fetch_array($sql,MYSQL_BOTH)){

?>


<?php
}
?> 


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Khalid Express</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
               
                <a class="navbar-brand" href="https://www.facebook.com/kbashir46">KB Express</a>
            </div>
           
        </div>
        
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead"></p>
                <div class="list-group">
                    <a href="https://www.facebook.com/" class="list-group-item">Home</a>
                    <a href="#" class="list-group-item">Contact us</a>
                    <a href="#" class="list-group-item">Login</a>
                </div>
            </div>

           

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="image/1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$2.99</h4>
                                <h4>First Product</h4>
                                <p>See more Rings <a target="_blank" href="C:\Users\Apna Computer\Desktop\startbootstrap-shop-homepage-gh-pages\store">Click here</a>.</p>
                            <a target="_blank" href="C:\Users\Apna Computer\Desktop\">Purchase</a>
							</div>
                            <img src="<?php echo $row["BLOB - 63.2 KiB"]; ?>" alt="no image found from db" />
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="image/2.jpg" alt="">
							
                            <div class="caption">
                                <h4 class="pull-right">$3.99</h4>
                                <h4><a href="#">Second Product</a>
                                </h4>
								<p>See more Platinum Finishing Collection <a target="_blank" href="C:\Users\Apna Computer\Desktop\startbootstrap-shop-homepage-gh-pages\store">Click Here</a>.</p>
                                 <a target="_blank" href="C:\Users\Apna Computer\Desktop\">Purchase</a>
                            </div>
                           
                        </div>
                    </div>

                    
            

                    
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>See more Collection click on this link <a target="_blank" href="C:\Users\Apna Computer\Desktop\">Khalid Express.com</a>.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
