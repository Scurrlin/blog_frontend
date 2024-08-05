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
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------------bootstrap icon link------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css">
    <title>Veggian - Home</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>It all began with a man, a quiet town, and a relentless pursuit of the perfect honey...</p>
        </div>
    </div>
    <div class="line"></div>
    <!-----------------------about us------------------------>
    <div class="line2"></div>
    <div class="about-us">
        <div class="row">
            <div class="box">
                <div class="title">
                    <span>The Story of John Honey</span>
                    <h1>"Yep, I think this here's the one..."</h1>
                </div>
                <p>25 years ago, those exact words were spoken by the founder of Veggian, John Honey. John worked as a fry cook in a local dive bar in Georgia with his future wife Jane Bee. One day, after a particularly active Football Sunday, the dive bar ran out of hot sauce for their signature wings. While Jane frantically called around to other bars in the area, John calmly walked out to his pickup. He returned to the kitchen and plopped down a jar of what would become Veggian's famous "Hot Honey".</p>
            </div>
            <div class="img-box">
                <img src="img/about3.jpg">
            </div>
        </div>
    </div>
    <div class="line3"></div>
    <!-----------------------features----------------------->
    <div class="line4"></div>
    <div class="features">
        <div class="title">
            <h1>Comprehensive Customer Support</h1>
            <span>for all new and returning patrons</span>
        </div>
        <div class="row">
            <div class="box">
                <img src="img/icon2.png">
                <h4>24/7/365</h4>
                <p>Nonstop Online Support</p>
            </div>
            <div class="box">
                <img src="img/icon1.png">
                <h4>Money Back Guarantee</h4>
                <p>100% Secure Payment Options</p>
            </div>
            <div class="box">
                <img src="img/icon0.png">
                <h4>Gift Cards</h4>
                <p>Give The Gift of Sweetness</p>
            </div>
            <div class="box">
                <img src="img/icon.png">
                <h4>Free Worldwide Shipping</h4>
                <p>On Orders Over $99</p>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <!-----------------------team section----------------------->
    <div class="line2"></div>
    <div class="team">
        <div class="title">
            <h1>Meet Our Team!</h1>
            <span>The Veggian Family</span>
        </div>
        <div class="row">
            <div class="box">
                <div class="img-box">
                    <img src="img/team.jpg">
                </div>
                <div class="detail">
                    <span>Finance Manager</span>
                    <h4>James Conway</h4>
                    <div class="icons">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-behance"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="img/te.jpg">
                </div>
                <div class="detail">
                    <span>Brand Ambassador</span>
                    <h4>Lauren Johnson</h4>
                    <div class="icons">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-behance"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="img/team1.jpg">
                </div>
                <div class="detail">
                    <span>Head of Sales</span>
                    <h4>Jorge Riviera</h4>
                    <div class="icons">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-behance"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="img/team2.jpg">
                </div>
                <div class="detail">
                    <span>Head of Marketing</span>
                    <h4>Allison Stapleton</h4>
                    <div class="icons">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-behance"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="img/team0.jpg">
                </div>
                <div class="detail">
                    <span>Nepo Hire</span>
                    <h4>Chad Honey</h4>
                    <div class="icons">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-youtube"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-behance"></i>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="line3"></div>
    <div class="line4"></div>
    <div class="project">
        <div class="title">
            <h1>Honey 2020</h1>
            <span>John's Love Letter to Georgia</span>
        </div>
        <div class="row">
            <div class="box">
                <img src="img/about1.jpg">
            </div>
            <div class="box">
                <img src="img/about2.jpg">
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="line2"></div>
    <div class="ideas">
        <div class="title">
            <h1>From 2020-2030, 10% of Veggian's profits will go to repairing Georgia's infrastructure</h1>
            <span>key initiatives</span>
        </div>
        <div class="row">
            <div class="box">
                <i class="bi bi-stack"></i>
                <div class="detail">
                    <h2>Overhaul Public Schools</h2>
                    <p>No longer will teachers need to choose between school supplies and groceries. Veggian will provide the suppport our public schools desperately need.</p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-grid-1x2-fill"></i>
                <div class="detail">
                    <h2>Restore Forgotten Neighborhoods</h2>
                    <p>Just because your community isn't gated doesn't mean it isn't worth the upkeep. Veggian will ensure that rundown neighborhoods are fully restored.</p>
                </div>
            </div>
            <div class="box">
                <i class="bi bi-tropical-storm"></i>
                <div class="detail">
                    <h2>Embrace Local Workers</h2>
                    <p>As Veggian expands, it will prioritize Georgia residents for it's open positions. Even if you don't have the skills, we will be happy to teach you.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="line3"></div>
    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>