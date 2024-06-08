<?php
session_start();

if (!isset($_SESSION["username"]) && !isset($_SESSION["email"])) {
    header("location:login.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

<p class="logo">Welcome <span><?php echo htmlspecialchars($_SESSION['username']); ?></span></p>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#gallery">gallery</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#movies">movies</a></li>
            <li><a href="#product">product</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h1>Omari Movie Shop</h1>
        <h2>welcome marvel fans</h2>
        <p>Welcome to Omari Movie Shop, your ultimate destination for everything movies! Dive into our extensive library of reviews, trailers, and behind-the-scenes content that caters to all movie enthusiasts. Stay updated with the latest releases, explore timeless classics, and join our vibrant community of film lovers. Whether you're searching for your next favorite film or delving into cinematic history, Omari has you covered. Explore, enjoy, and share your passion for movies with us!
        </p>
        <a href="#movies" class="btn">get started</a>
    </div>

    <div class="image">
        <img src="../images/home-bg-min.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

 <h1 class="heading"> <span>superheroes</span> gallery </h1>

 <div class="box-container">

    <div class="box">
        <img src="../images/img1-min.png" alt="">
        <div class="info">
            <h3>Captain America</h3>
            <p>Captain America, created by Joe Simon and Jack Kirby, first appeared in Marvel Comics' "Captain America Comics #1" in March 1941. </p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/img2-min.png" alt="">
        <div class="info">
            <h3>Thor</h3>
            <p>Thor, based on the Norse god of thunder, was created by Stan Lee, Larry Lieber, and Jack Kirby, debuting in "Journey into Mystery #83" in August 1962. As the Asgardian prince.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/img3-min.png" alt="">
        <div class="info">
            <h3>Ant-man</h3>
            <p>Ant-Man, created by Stan Lee, Larry Lieber, and Jack Kirby, first appeared in "Tales to Astonish #27" in January 1962. </p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/img4-min.png" alt="">
        <div class="info">
            <h3>Hulk</h3>
            <p>The Hulk, created by Stan Lee and Jack Kirby, first appeared in "The Incredible Hulk #1" in May 1962. Dr. Bruce Banner, a brilliant scientist, transforms into the Hulk, a giant green-skinned creature with immense strength.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/img5-min.png" alt="">
        <div class="info">
            <h3>Captain marvel</h3>
            <p>Captain Marvel, originally created by Roy Thomas and Gene Colan, first appeared in "Marvel Super-Heroes #12" in December 1967. </p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/img6-min.png" alt="">
        <div class="info">
            <h3>Spider-man</h3>
            <p>Spider-Man, created by Stan Lee and Steve Ditko, first appeared in "Amazing Fantasy #15" in August 1962. Teenager Peter Parker gains spider-like abilities.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/img7-min.png" alt="">
        <div class="info">
            <h3>Doctor-strange</h3>
            <p>Doctor Strange, created by Stan Lee and Steve Ditko, first appeared in "Strange Tales #110" in July 1963. Dr. Stephen Strange.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/img8-min.png" alt="">
        <div class="info">
            <h3>Black-panther</h3>
            <p>Black Panther, created by Stan Lee and Jack Kirby, first appeared in "Fantastic Four #52" in July 1966. T'Challa,../ the Black Panther, is the king of the fictional African nation of Wakanda.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="../images/img9-min.png" alt="">
        <div class="info">
            <h3>Iron-man</h3>
            <p>Iron Man, created by Stan Lee, Larry Lieber, Don Heck, and Jack Kirby, first appeared in "Tales of Suspense #39" in March 1963. </p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

 </div>

</section>

<!-- gallery section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> avengers </h1>

    <div class="row">

        <div class="image">
            <img src="../images/about-img-min.png" alt="">
        </div>

        <div class="content">
            <h3>marvel avengers is amazing</h3>
            <p>Marvel Studios, founded in 1993 as Marvel Films, evolved from a struggling comic book publisher to a major player in the entertainment industry. In 2008, they launched the Marvel Cinematic Universe (MCU) with "Iron Man," setting the stage for interconnected superhero films. The MCU's success grew with each phase, introducing iconic characters like Captain America, Thor, and the Avengers, while expanding into television with series like "Agents of S.H.I.E.L.D." and "Daredevil." By acquiring new studios and characters, Marvel Studios solidified its position, culminating in record-breaking box office successes and a cultural phenomenon that continues to influence global entertainment trends.</p>
            <p>Marvel has consistently excelled in creating compelling and diverse superheroes who resonate with audiences worldwide. Their characters, from Spider-Man to Black Panther, embody complex narratives that explore themes of heroism, identity, and social responsibility. Marvel's commitment to inclusive storytelling has led to groundbreaking representation on screen, showcasing diverse backgrounds and perspectives. Moreover, Marvel Studios' meticulous planning and interconnected universe through the Marvel Cinematic Universe (MCU) have set new standards for cinematic storytelling, creating an immersive and cohesive experience for fans. Overall, Marvel's impact on popular culture is profound, inspiring generations with its memorable characters and epic storytelling.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- movies section starts  -->

<section class="movies" id="movies">

    <h1 class="heading"> <span>marvel</span id="movies"> movies </h1>

    <div class="box-container">

        <div class="box">
            <img src="../images/m1-min.jpg" alt="">
            <div class="info">
                <h3>Thor Love and Thurnder</h3>
                <span> action, sci-fi, thriller, comedy </span>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Thor: Love and Thunder," directed by Taika Waititi, continues the saga of Thor Odinson as he grapples with newfound challenges and alliances in the Marvel Cinematic Universe.</p>
                <a href="https://youtu.be/Go8nTmfrQd8?si=mgvQ1vpnPRnFX1kq" target="_blank" class="btn">Trailer</a>
                
                
            </div>
        </div>

        <div class="box">
            <img src="../images/m2-min.jpg" alt="">
            <div class="info">
                <h3>avengers age of ultron</h3>
                <span> action, sci-fi, thriller, comedy </span>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Avengers: Age of Ultron," directed by Joss Whedon, follows the Avengers as they confront Ultron, an artificial intelligence created by Tony Stark that seeks to eliminate humanity.</p>
                <a href="https://youtu.be/P5iIPfNzj2o?si=8QVuIcurXA2AI3qO" target="_blank" class="btn">Trailer</a>
            </div>
        </div>

        <div class="box">
            <img src="../images/m3-min.jpg" alt="">
            <div class="info">
                <h3>captain america civil war</h3>
                <span> action, sci-fi, thriller, comedy </span>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Captain America: Civil War," directed by Anthony and Joe Russo, explores the ideological divide within the Avengers after political pressures lead to government oversight of superheroes.</p>
                <a href="https://youtu.be/dKrVegVI0Us?si=byAEygEhjraweUZR" target="_blank" class="btn">Trailer</a>
            </div>
        </div>

        <div class="box">
            <img src="../images/m4-min.jpg" alt="">
            <div class="info">
                <h3>avengers infinity war</h3>
                <span> action, sci-fi, thriller, comedy </span>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Avengers: Infinity War, directed by Anthony and Joe Russo, is a culmination of the Marvel Cinematic Universe's storyline, where the Avengers and their allies must unite to face the powerful Thanos.</p>
                <a href="https://youtu.be/6ZfuNTqbHE8?si=eWwQtOrQww6sjxlX" target="_blank" class="btn">Trailer</a>
            </div>
        </div>

        <div class="box">
            <img src="../images/m5-min.jpg" alt="">
            <div class="info">
                <h3>Shang-Chi and the 10 rings</h3>
                <span> action, sci-fi, thriller, comedy </span>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Shang-Chi and the Legend of the Ten Rings," directed by Destin Daniel Cretton, introduces Shang-Chi, a skilled martial artist who must confront his past when he is drawn into the clandestine Ten Rings organization.</p>
                <a href="https://youtu.be/8YjFbMbfXaQ?si=7eWcjAMmWAxJlThG" target="_blank" class="btn">Trailer</a>
            </div>
        </div>

        <div class="box">
            <img src="../images/m6-min.jpg" alt="">
            <div class="info">
                <h3>avengers endgame</h3>
                <span> action, sci-fi, thriller, comedy </span>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Avengers: Endgame," directed by Anthony and Joe Russo, concludes the epic storyline of the Marvel Cinematic Universe as the Avengers assemble one last time to undo the devastating effects of Thanos' snap, known as the Decimation. T</p>
                <a href="https://youtu.be/TcMBFSGVi1c?si=fOL8x1zwORxXZaOZ" target="_blank" class="btn">Trailer</a>
            </div>
        </div>

    </div>

</section>

<!-- movies section ends -->

<!-- product section starts  -->

<section class="product" id="product">

    <h1 class="heading"> <span>Available</span> Marvel Products </h1>

    <div class="box-container">

        <div class="box">
            <h3>product 1</h3>
            <img src="../images/p1-min.png" alt="">
            <div class="price">Ksh.500</div>
            <p>Discover the essence of heroism with our exclusive Marvel shirt collection, celebrating iconic characters and epic adventures from the Marvel Universe.</p>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <h3>product 2</h3>
            <img src="../images/p2-min.png" alt="">
            <div class="price">Ksh.300</div>
            <p>Embrace the iconic allure of the Spider-Man mask, symbolizing agility, strength, and the timeless spirit of a friendly neighborhood hero.</p>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <h3>product 3</h3>
            <img src="../images/p3-min.png" alt="">
            <div class="price">Ksh.1000</div>
            <p>Step into the cutting-edge world of the Iron Man suit, embodying innovation, power, and the ultimate blend of technology and heroism from the Marvel Universe.</p>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <h3>product 4</h3>
            <img src="../images/p4-min.png" alt="">
            <div class="price">Ksh.1500</div>
            <p>Loved by all and can't be replaced by any. His our favorite, most intelligent, and loving to the marvel family at large. Get these at ana affordable price</p>
            <a href="#" class="btn">add to cart</a>
        </div>

    </div>

</section>

<!-- product section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="share">
            <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">facebook</a>
            <a href="https://x.com/home" target="_blank">twitter</a>
            <a href="https://www.instagram.com/?hl=en" target="_blank">instagram</a>
            <a href="https://www.youtube.com/" target="_blank">youtube</a>
    </div>

    <h1 class="credit"> created by <a href="#">Omari</a> | <br><br></h1>

</div>


<!-- footer section ends -->

<!-- scroll top  -->

<a href="#home" class="scroll-top">
    <img src="../images/scroll-img.png" alt="">
</a>


<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>