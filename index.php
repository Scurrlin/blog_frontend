<?php
include 'connection.php';
session_start();
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header('location: login.php');
    exit(); // Always call exit after header redirection
}
if (isset($_POST['logout'])) {
    session_destroy();
    header('location: login.php');
    exit(); // Always call exit after header redirection
}

// Adding product to wishlist
if (isset($_POST['add_to_wishlist'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    $wishlist_number = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    $cart_num = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    
    if (mysqli_num_rows($wishlist_number) > 0) {
        $message[] = 'product already exist in wishlist';
    } elseif (mysqli_num_rows($cart_num) > 0) {
        $message[] = 'product already exist in cart';
    } else {
        mysqli_query($conn, "INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')") or die('query failed');
        $message[] = 'product successfully added in your wishlist';
    }
}

// Adding product to cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $cart_num = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id ='$user_id'") or die('query failed');
    if (mysqli_num_rows($cart_num) > 0) {
        $message[] = 'product already exist in cart';
    } else {
        mysqli_query($conn, "INSERT INTO `cart`(`user_id`,`pid`,`name`,`price`,`quantity`,`image`) VALUES('$user_id','$product_id','$product_name','$product_price','$product_quantity','$product_image')");
        $message[] = 'product successfully added to your cart';
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
    <title>Veggian - Home</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <!------------------------hero img container------------------------------->

    <div class="container-fluid">
        <div class="hero-slider">
            <div class="slider-item">
                <img src="img/slider.jpg" alt="...">
                <div class="slider-caption">
                    <span>Trust The Science behind</span>
                    <h1>Premium Organic<br> Beetox</h1>
                    <p>Experience Beetox, the natural alternative to Botox, harnessing bee venom to reduce wrinkles <br> and enhance skin elasticity for a youthful glow.</p>
                    <a href="" class="btn">shop now</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="img/slider2.png" alt="...">
                <div class="slider-caption">
                    <span>Taste The Quality of</span>
                    <h1>Premium Organic<br> Honey</h1>
                    <p>Indulge in the sweet, aromatic flavors of our honey, crafted by dedicated artisans <br> using ecologically clean raw materials.</p>
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
                    <h1>Free, Fast Shipping</h1>
                    <p>Enjoy reliable delivery service at no extra cost!</p>
                </div>
            </div>
            <div class="box">
                <img src="img/1.png">
                <div>
                    <h1>Money Back Guarantee</h1>
                    <p>Shop with confidence!</p>
                </div>
            </div>
            <div class="box">
                <img src="img/2.png">
                <div>
                    <h1>Online Support 24/7</h1>
                    <p>We're here to help anytime!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="line2"></div>
    <div class="story">
        <div class="row">
            <div class="box">
                <span>Our Story</span>
                <h1>Sweetening The Deal Since 1990</h1>
                <p>Our journey began with a relentless passion for nature's finest nectar and a dedication to quality. Nestled in the heart of the Georgia countryside, our apiary thrives amidst blooming fields and pristine landscapes. Our beekeepers work tirelessly to ensure each jar of honey is pure, aromatic, and ecologically sourced. From our family to yours, we invite you to savor the exquisite flavors and natural goodness that our bees lovingly create. Join us in celebrating the sweet, golden essence of life—one jar at a time.</p>
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
        <h1 class="title">What Our Customers Say</h1>
        <div class="testimonial-slider">
            <div class="testimonial-item">
                <img src="img/3.jpg">
                <div class="testimonial-caption">
                    <span>Jane from Lynn, MA</span>
                    <h1>Clover Honey (5/5)</h1>
                    <p>I recently purchased the clover honey from Veggian and my GOODNESS! I'm absolutely thrilled with the quality. The flavor is rich and aromatic, just as described. <br>
                    The fast, free shipping was a pleasant surprise, and the customer support team was incredibly responsive. <br>
                    Highly recommend to anyone looking for top-quality, delicious honey!</p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/4.jpg">
                <div class="testimonial-caption">
                    <span>Megan from Revere, MA</span>
                    <h1>Hot Honey (5/5)</h1>
                    <p>I ran into Jane at SoulCycle and my GOD she would not shut up about this honey she bought from this Veggian site. I said "Fine, God, I'll buy some!" <br>
                    It was one of the best deicisions I've ever made! This stuff is so good it has me thinking I was a bear in a past life. <br>
                    Jane is annoying, but hey, at least she knows her honey!</p>
                </div>
            </div>
            <div class="testimonial-item">
                <img src="img/profile.jpg">
                <div class="testimonial-caption">
                    <span>Kyle from Swampscott, MA</span>
                    <h1>Manuka Honey (5/5)</h1>
                    <p>I teach the SoulCycle class that Jane and Megan go to and honestly, they're both awful. They always reek of booze, but man do they know their honey! <br>
                    I was particularly drawn to the Manuka Honey because I'm a vacuous, superficial moron, and it was everything that I hoped it would be. <br>
                    Teaching SoulCycle sucks, but at least I get good honey recommendations!</p>
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
            <h1 class="title">🐝 Bee Healthy with Organic Honey 🐝</h1>
            <span>Buy Now And Save 30% Off!</span>
            <br>
            <br>
            <a href="shop.php" class="btn">shop now</a>
        </div>
        <div class="img-box">
            <img src="img/13.png">
        </div>
    </div>
    <div class="line3"></div>
    <?php include 'homeshop.php'; ?>
    <div class="line2"></div>
    <div class="newslatter">
        <h1 class="title">Subscribe To Our Newsletter</h1>
        <p>Get 15% off your next order and be the first to learn about promotions, special events, new arrivals and more!
        </p>
        <input type="text" name="" placeholder="Enter Your Email Here!">
        <button>subscribe</button>
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
