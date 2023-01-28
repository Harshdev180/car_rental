<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=10">
    <title>Car Rental Website</title>
    <!-- logo -->
    <link rel="icon" href="./img/mc_queen.png" type="icon">

    <!-- for css -->
    <link rel="stylesheet" href="style.css">

    <!-- box-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- font -->

</head>

<body>

    <!-- head -->
    <header>
        <a href="#" class="logo"><img src="img/mc_queen.png"alt="Logo"></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Ride</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reviews">Reviews</a></li>
        </ul>
        <div class="header-btn">
            <a href="register_form.php" class="sign-up">Register</a>
            <a href="loginform.php" class="sign-in">Login</a>
        </div>
    </header>

    <!-- home -->
    <section class="home" id="home">
         <div class="text">
            <h1><span>Looking</span> for <br>
                rent car</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem,<br> eius!</p>

            <div class="appstore">
                <img src="img/apple-store.png" alt="">
                <img src="img/google-play.png" alt="">
            </div>
        </div>

        <div class="form-container">
            <form action="connect.php" method="post">
            <div class="input-box">
                    <span>Name</span>
                    <input type="location" name="name" placeholder="Search Places" required>
                </div>
                <div class="input-box">
                    <span>Phone</span>
                    <input type="location" name="phone" placeholder="Search Places" required>
                </div>
                <div class="input-box">
                    <span>Pick-up Location</span>
                    <input type="location" name="plocation" placeholder="Search Places" required>
                </div>
                <div class="input-box">
                    <span>Drop Location</span>
                    <input type="search" name="dlocation" placeholder="Search Places" required>
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" placeholder="dd-mm-yyyy" name="pdate" id=""required >
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="rdate" id="" required >
                </div>
                <input type="submit" name="submit" id="" class="btn">
                <!-- <a href="#services">submit</a> -->
            </form>
        </div>
    </section>

    <!-- Ride -->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How Its Work</span>
            <h1>Hire Your Car with 3 easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose your location</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis corrupti itaque accusantium
                    iusto ab. Illum vero ducimus ut velit exercitationem. Cum quia magni magnam, autem eligendi aliquid
                    eaque labore possimus?
                </p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Pick-Up Date</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, animi vel adipisci, at tempora
                    incidunt deleniti iste quod praesentium ea minima veritatis aut quis distinctio eaque alias hic
                    soluta eligendi?
                </p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book a car</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, animi vel adipisci, at tempora
                    incidunt deleniti iste quod praesentium ea minima veritatis aut quis distinctio eaque alias hic
                    soluta eligendi?
                </p>
            </div>

        </div>
    </section>

    <!-- sevices -->
    <section class="services" id="services">
        <div class="heading">
            <span>Our Best Services</span>
            <h1>Grab Best Deals <br> With Our Best Dealers</h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="./img/BMW-6-Series-PNG-Isolated-Pic.png" alt="">
                </div>
                <p>5 Seater Luxury Car</p>
                <h3>BMW GT</h3>
                <h2>&#8377; 10,000-/ Per Day</h2>
                <a href="#" class="btn">Rent Now</a>    
            </div>
           
            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/284-2840241_toyota-fortuner-colors-2017-hd-png-download.png" alt="">
                    </div>
                    <p>7 Seater Luxury Car</p>
                    <h3>Toyota Fortuner</h3>
                    <h2>&#8377; 7,000-/ Per Day</h2>
                    <a href="" class="btn" name="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/Scorpio.png" alt="">
                    </div>
                    <p>7 Seater Luxury Car</p>
                    <h3>Mahindra Scorpio S11</h3>
                    <h2>&#8377; 5,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/honda-city.png" alt="">
                    </div>
                    <p>5 Seater Car</p>
                    <h3>Honda City</h3>
                    <h2>&#8377; 3,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/White-Range-Rover-PNG.png" alt="">
                    </div>
                    <p>5 Seater Luxury Car</p>
                    <h3>Range Rover Discovery</h3>
                    <h2>&#8377; 8,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/Jeep-Compass.png" alt="">
                    </div>
                    <p>5 Seater Luxury Car</p>
                    <h3>Jeep Compass</h3>
                    <h2>&#8377; 5,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/innova.png" alt="">
                    </div>
                    <p>7 Seater Car</p>
                    <h3>Toyota Innova Crysta</h3>
                    <h2>&#8377; 8,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/XUV.png" alt="">
                    </div>
                    <p>7 Seater Car</p>
                    <h3>XUV 700</h3>
                    <h2>&#8377; 3,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/Suzuki-Baleno-PNG-Image.png" alt="">
                    </div>
                    <p>5 Seater Car</p>
                    <h3>Maruti Suzuki Baleno</h3>
                    <h2>&#8377; 3,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/harrier.png" alt="">
                    </div>
                    <p>7 Seater Car</p>
                    <h3>Tata Harrier</h3>
                    <h2>&#8377; 4,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/swift.png" alt="">
                    </div>
                    <p>5 Seater Car</p>
                    <h3>Maruti Suzuki Swift</h3>
                    <h2>&#8377; 2,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>

            <div class="services-container">
                <div class="box">
                    <div class="box-img">
                        <img src="./img/wagonr.png" alt="">
                    </div>
                    <p>5 Seater Car</p>
                    <h3>Maruti Suzuki Wagon R</h3>
                    <h2>&#8377; 4,000-/ Per Day</h2>
                    <a href="#" class="btn">Rent Now</a>
                </div>
            </div>
        </div>    
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experiences</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="./img/audi.png" alt="">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus iusto perspiciatis, illum est unde
                    amet distinctio quidem dolorem. Molestiae doloremque eos asperiores esse nihil sunt harum autem
                    libero ducimus provident.
                </p>
                <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, libero, sit nostrum perspiciatis odit
                    mollitia ex, quo ullam accusamus amet ad numquam? Ullam magnam rerum fugiat nobis aliquam quae
                    deleniti!</P>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>What Our Customer Say</h1>
        </div>
        <div class="reviews-container">
            <div class="box">
                <div class="rev-img">
                    <img src="./img/photo-1507003211169-0a1dd7228f2d.jpg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet asperiores accusantium in quo
                    voluptates minima, minus libero praesentium, quos explicabo tenetur vel nemo. Unde officiis suscipit
                    aperiam ad tenetur expedita?</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="./img/pexels-photo-2613260.jpeg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet asperiores accusantium in quo
                    voluptates minima, minus libero praesentium, quos explicabo tenetur vel nemo. Unde officiis suscipit
                    aperiam ad tenetur expedita?</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="./img/pexels-photo-1844547.jpeg" alt="">
                </div>
                <h2>Someone Name</h2>
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet asperiores accusantium in quo
                    voluptates minima, minus libero praesentium, quos explicabo tenetur vel nemo. Unde officiis suscipit
                    aperiam ad tenetur expedita?</p>
            </div>
        </div>
        <!-- Newsletter -->
        <section class="newsletter">
            <h2>Subscribe To Newsletter</h2>
            <div class="box">
                <input type="text" placeholder="Enter Your Email...">
                <a href="#" class="btn">Subscribe</a>
            </div>
        </section>
        <!-- copyright -->
        <div class="copyright">
            <p>&#169; Car-Rental All Right Reserved</p>
            <div class="social">
                <a href="www.facebook.com"><i class='bx bxl-facebook'></i></a>
                <a href="www.twitter.com"><i class='bx bxl-twitter'></i></a>
                <a href="www.instagram.com"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>
        <!-- Scroll Animation -->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!-- link to js -->
        <script src="main.js"></script>
</body>

</html>