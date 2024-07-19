<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Amrican Biocare</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    
    <!-- <script src='main.js'></script> -->
</head>
<style>
    @media only screen and (max-width: 600px) {
    body{
            justify-content: center;
            margin: 0;
            padding: 0;
    }
    .abt-biocare h1,p{
        width: 80vw;
    }
    header{
        width: 100vw;
    }
    .about-us, .about-us2 {
        flex-direction: column;
    }

    .border, .border2 {
        width: 100%;
    }
    .hero-txt {
        width: 80vw;
        left:10vw;
    }
    .exp {
        flex-direction: column;
    }
    .abt-biocare p {
        width: 80vw;
    }
    .abtus{
        margin-top: 100vw;
    }
    .exp-txt {
        margin-top: 100vw;
    }
    .fst {
        flex-direction: column;
    }
    .fst input{
        margin-top: 50px;
    }
    .foot{
        flex-direction: column;
    }
    .exp-panel{
        border-bottom: none;
        border-top: none;
    }
}

</style>
<body>
    <header>
        <div class="nav_logo">
            <img class="logo" src="logo3.png" alt="AmericaBiocare">
            <!-- <p>LogoBaker</p> -->
        </div>
        <!-- <nav>
            <ul class="nav_link">
                <li><a href="#">Services</a></li>
                <li><a href="#">Project</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav> -->
        <a class="cta" href="http://localhost/medical/index.php"><button type="submit" id="btn" class="btn">Admin</button></a>
    </header>
    <div class="hero">
        <div class="hero-txt">
            <h2>AMERICAN BIOCARE SOLUTION</h2>
            <br>
            <p>Have a quick look at the work we’ve already done for pharmacists just like you. We’re rightly proud of the way in which we’ve helped independent pharmacists enjoy the slickest professional branding whilst reaching out to their customers using the latest in interactive technology.</p>
        
        </div>
    </div> 
    <div class="exp-panel">
        <div class="exp-txt">
            <h3><i>Pharmacists Who’ve Already Taken Advantage of our Expertise</i></h3><br>
            <p>A brief look through our portfolio will underline just how much we do on behalf of the pharmacists with whom we work. The thing we’re most proud of is the fact that everything we do is driven by the results our clients achieve.</p>
            <div class="exp">
                <div class="box-1 border"><p>Chemist</p></div>
                <div class="box-2 border"><p>Dr.J Solanki</p></div>
                <div class="box-3 border"><p>Abington Pharmacy ltd</p></div>
            </div>
        </div>
    </div>
    <div class="abtus">
        <h3 id="abtus">About Us</h3>
        <!-- <div class="abt-biocare" >
            <h3>About American Biocare</h3><br>
            <p>Welcome to American Biocare, your trusted partner in the world of pharmaceutical wholesaling. Established with a commitment to excellence and a vision to enhance healthcare accessibility, American Biocare has been a cornerstone in the wholesale medicine industry.</p>
        </div> --> 
    </div>
    <div class="about-us">
        <div class="border">
            <h3>Our Mission</h3>
            <p>At American Biocare, our mission is clear – to provide reliable, high-quality pharmaceutical products that meet the diverse needs of healthcare professionals. We strive to contribute to the well-being of communities by ensuring the availability of essential medicines at competitive prices.</p>
        </div>
        <div class="border">
            <h3>Wide Range of Products</h3>
            <p>With an extensive catalog of pharmaceuticals, medical supplies, and healthcare products, American Biocare is your one-stop destination for all your wholesale medicine needs. Our diverse range includes branded and generic medications, ensuring a comprehensive selection for healthcare providers.</p>

        </div>
        <div class="border">
            <h3>Quality Assurance</h3>
            <p>We prioritize quality at every step. Our stringent quality assurance processes guarantee that every product leaving our facility adheres to the highest industry standards. We understand the critical role that pharmaceuticals play in patient care, and we are dedicated to delivering only the best.</p>
        </div>
    </div>
    <div class="about-us2">
        <div class="border2">
            <h3>Customer-Centric Approach</h3>
            <p>Our success is rooted in our commitment to customer satisfaction. We value the relationships we build with healthcare professionals, pharmacies, and distributors. Through transparent communication, reliable service, and competitive pricing, we aim to be the preferred partner for those who prioritize quality in healthcare.</p>
        </div>
        <div class="border2">
            <h3>Innovation and Sustainability</h3>
            <p>American Biocare is dedicated to fostering innovation and sustainability in the pharmaceutical industry. We actively seek new technologies, partnerships, and practices that contribute to a healthier, more sustainable future for all.</p>
        </div>
        <div class="border2">
            <h3>Partner with Us</h3>
            <p>Whether you are a healthcare professional, pharmacy, or distributor, we invite you to partner with American Biocare. Join us in our mission to make quality healthcare accessible to all. Together, we can build a healthier and brighter future.</p>
        </div>
    </div>
    <!-- <div class="thank">
        <h3>Thank you for considering American Biocare as your trusted wholesale medicine provider. We look forward to serving you and contributing to the advancement of healthcare globally.</h3>
    </div> -->
    <div class="get-in-touch">
        <div class="touch-txt">
            <h3>Get in touch today</h3><br>
            <p>If this sounds like the website your Pharmacy needs, please get in touch with us today.</p>
        </div>
        <div class="touch-form">
            <form action="https://formspree.io/f/xaygrpzo" autocomplete="off" method="post">
                <div class="fst">
                    <input type="text" name="name" id="name" placeholder="NAME" required>
                    <input type="email" name="email" id="email" placeholder="EMAIL" required>
                    <input type="text" name="number" id="number" placeholder="TELEPHONE" required>
                </div>
                <div class="second">
                    <textarea name="message" id="msg" rows="1" placeholder="MESSAGE" required></textarea>
                    <label for="confirm">
                        <input type="checkbox" id="confirm" class="confirm" required>
                        <span>By using this form you agree with the storage and handling of your data in accordance with the Privacy and Cookie Policy</span>
                    </label>
                    <button type="submit" id="contact-us">Send your message</button>
                </div>
                
            </form>
        </div>
    </div>
    <div class="foot">
        <div class="nav_logo">
            <img class="logo" src="logo2.png" alt="AmericaBiocare">
        </div>
        <div class="address">
            <p>R.C.B. NO.2, ROOM NO. 15, CHEMBUR COLONY, CHEMBUR, MUMBAI - 400074 </p>
        </div>
        <div class="cont">
            <p><a href="#"></a>americanbiocare@gmail.com</p>
            <p>8600872214</p>
        </div>
    </div>
    <footer>
        <div class="copyright">
            <p>Copyright © 2023 AmericaBiocare. All Rights Reserved</p>
        </div>
    </footer>
</body>
</html> 