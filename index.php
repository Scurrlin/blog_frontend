<?php 
    include 'connection.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    if (!isset($user_id)) {
        header('location:login.php');
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
    //adding product in wishlist
    if (isset($_POST['add_to_wishlist'])) {
    	$product_id = $_POST['product_id'];
    	$product_name = $_POST['product_name'];
    	$product_price = $_POST['product_price'];
    	$product_image = $_POST['product_image'];

    	$wishlist_number = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id ='$user_id'") or die('query failed');
    	$cart_num = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id ='$user_id'") or die('query failed');
    	if (mysqli_num_rows($wishlist_number)>0) {
    		$message[]='product already exist in wishlist';
    	}else if (mysqli_num_rows($cart_num)>0) {
    		$message[]='product already exist in cart';
    	}else{
    		mysqli_query($conn, "INSERT INTO `wishlist`(`user_id`,`pid`,`name`,`price`,`image`) VALUES('$user_id','$product_id','$product_name','$product_price','$product_image')");
    		$message[]='product successfuly added in your wishlist';
    	}
    }

     //adding product in cart
    if (isset($_POST['add_to_cart'])) {
    	$product_id = $_POST['product_id'];
    	$product_name = $_POST['product_name'];
    	$product_price = $_POST['product_price'];
    	$product_image = $_POST['product_image'];
    	$product_quantity = $_POST['product_quantity'];

    	$cart_num = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id ='$user_id'") or die('query failed');
    	if (mysqli_num_rows($cart_num)>0) {
    		$message[]='product already exist in cart';
    	}else{
    		mysqli_query($conn, "INSERT INTO `cart`(`user_id`,`pid`,`name`,`price`,`quantity`,`image`) VALUES('$user_id','$product_id','$product_name','$product_price','$product_quantity','$product_image')");
    		$message[]='product successfuly added in your cart';
    	}
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------bootstrap icon link------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!------------------------bootstrap css link------------------------------->
    <!------------------------slick slider link------------------------------->
    <link rel="stylesheet" type="text/css" href="slick.css" />
    <!------------------------default css link------------------------------->
    <link rel="stylesheet" href="main.css">
    <title>veggen - home page</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <!------------------------hero img container------------------------------->

    <div class="container-fluid">
        <div class="hero-slider">
            <div class="slider-item">
                <img src="img/slider.jpg" alt="...">
                <div class="slider-caption">
                    <span>Taste The Quality</span>
                    <h1>Organics Premium <br> Honey</h1>
                    <p>Enjoy sweet, aromatic honey made by hardworking people of <br> ecologically clean raw materials in the
                        most pure environment!</p>
                    <a href="" class="btn">shop now</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="img/slider2.png" alt="...">
                <div class="slider-caption">
                    <span>Taste The Quality</span>
                    <h1>Organics Premium <br> Honey</h1>
                    <p>Enjoy sweet, aromatic honey made by hardworking people of <br> ecologically clean raw materials
                        in the
                        most pure environment!</p>
                    <a href="" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <div class="control">
            <i class="bi bi-chevron-left prev"></i>
            <i class="bi bi-chevron-right next"></i>
        </div>
    </div>
    <div class="line"></div>
    <div class="services">
    	<div class="row">
    		<div class="box">
    			<img src="img/0.png">
    			<div>
    				<h1>Free Shipping Fast</h1>
    				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    			</div>
    		</div>
    		<div class="box">
    			<img src="img/1.png">
    			<div>
    				<h1>Money Back & Guarantee</h1>
    				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    			</div>
    		</div>
    		<div class="box">
    			<img src="img/2.png">
    			<div>
    				<h1>Online Support 24/7</h1>
    				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="line2"></div>
    <div class="story">
    	<div class="row">
    		<div class="box">
    			<span>our story</span>
    			<h1>Production of natural honey since 1990</h1>
    			<p>Interdum Et Malesuada Fames Ac Ante Ipsum Primis In Faucibus. Vestibulum Laoreet Est Orci, Eu
                    Placerat Est Posuere In.
                    Sed Malesuada Magna Vitae Pulvinar Varius. Orci Varius Nato Que Penatibus Et Magnis Dis Parturient
                    Montes, Ridiculus
                    Mus. Integer Vel Nisi Lorem. Donec Dignissim Commodo Rhon Cus. Nullam.</p>
                <a href="shop.php" class="btn">shop now</a>
    		</div>
    		<div class="box">
    			<img src="img/8.png">
    		</div>
    	</div>
    </div>
    <div class="line3"></div>
    <!-- testimonial -->
    <div class="line4"></div>
    <div class="testimonial-fluid">
    	<h1 class="title">What Our Customers Say's</h1>
    	<div class="testimonial-slider">
    		<div class="testimonial-item">
    			<img src="img/3.jpg">
    			<div class="testimonial-caption">
    				<span>Test The Quality</span>
    				<h1>Organic Premium Honey</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>

    			</div>
    		</div>
    		<div class="testimonial-item">
    			<img src="img/4.jpg">
    			<div class="testimonial-caption">
    				<span>Test The Quality</span>
    				<h1>Organic Premium Honey</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>
    			</div>
    		</div>
    		<div class="testimonial-item">
    			<img src="img/profile.jpg">
    			<div class="testimonial-caption">
    				<span>Test The Quality</span>
    				<h1>Organic Premium Honey</h1>
    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    				consequat.</p>
    			</div>
    		</div>
    	</div>
    	 <div class="control">
            <i class="bi bi-chevron-left prev1"></i>
            <i class="bi bi-chevron-right next1"></i>
        </div>
    </div>
    <div class="line"></div>
    <!---discover section --->
    <div class="line2"></div>
    <div class="discover">
    	<div class="detail">
    		<h1 class="title">Organic Honey Be Healthy</h1>
    		<span>Buy Now And Save 30% Off!</span>
    		<p>lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The
                Industry's
                Standard
                Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make
                A
                Type Specimen
                Book.</p>
            <a href="shop.php" class="btn">discover now</a>
    	</div>
    	<div class="img-box">
    		<img src="img/13.png">
    	</div>
    </div>
    <div class="line3"></div>
    <?php include 'homeshop.php'; ?>
    <div class="line2"></div>
    <div class="newslatter">
    	<h1 class="title">Join Our To Newslatter</h1>
    	<p>Get 15% off your next order. Be the first to learn about promotions special events, new arrivals and more.
        </p>
        <input type="text" name="" placeholder="your Email Address...">
        <button>subscribe now</button>
    </div>
    <div class="line3"></div>
    <div class="client">
    	<div class="box">
    		<img src="img/client0.png">
    	</div>
    	<div class="box">
    		<img src="img/client1.png">
    	</div>
    	<div class="box">
    		<img src="img/client2.png">
    	</div>
    	<div class="box">
    		<img src="img/client3.png">
    	</div>
    	<div class="box">
    		<img src="img/client.png">
    	</div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="jquery.js"></script>
    <script src="slick.js"></script>

    <script type="text/javascript">
        <?php include 'script2.js' ?>
    </script>
</body>

</html>