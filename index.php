<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portifolio Kaka Mnazarety</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!--css files-->
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>



<?php 
if(isset($$message)){
    foreach($$message as $$message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>' ;
    }
}
?>


    <header class="header" id="header">
        <div id="menubtn" class="fas fa-bars">=</div>
        <a href="#home" class="logo">kaka</a>

        <nav class="nav">
            <ul>
                <li> <a href="#home" class="hm">home</a></li>
                <li> <a href="#about">about</a></li>
                <li> <a href="#services" >services</a></li>
                <li> <a href="#portfolio" >portfolio</a></li>
                <li> <a href="#contact" >contact</a></li>
            </ul>
        </nav>
        </header>
        <section id="home" class="home">
            <div class="image">
                <img src="./images/photo.jpg" alt="">
            </div>
            <div class="content">
                <h3>Hi, you call me Kaka</h3>
                <span>full stack web developer &amp; designer</span>
                <p>
                    kindly reach me for more information through the details <br>provided below. Ready to serve you
                </p>
                <a href="#about" class="btn">about kaka</a>
            </div>
        </section>
        <!-- home section ends-->

        <!--about section starts-->
        <section class="about" id="about">
            <h1 class="heading"><span>biography</span></h1>

            <div class="biography">
                <p>A brief description of my contact information in a second. <br> Note: you can reach me via this info </p>
            </div>

            <div class="bio">
                <h3><span>Name:</span> kaka mnazarety</h3>
                <h3><span>Email:</span><a href="mailto:kakamnazarety@gmail.com">kakamnazarety@gmail.com</a></h3>
                <h3><span>Phone:</span> +2547XXXXXXXX</h3>
                <h3><span>Address:</span> Kwale, Kenya</h3>
                <h3><span>Age:</span>25</h3>
                <h3><span>Experience:</span> 4 Years</h3>
            </div>
            <a href="#" class="btn">download cv</a>

                <div class="skills">
                    <h1 class="heading"><span>skills</span></h1>
                </div>
                <div class="progress">
                    <div class="bar"><h3><span>HTML</span> <span>100%</span></h3></div>
                    <div class="bar"><h3><span>CSS</span> <span>96%</span></h3></div>
                    <div class="bar"><h3><span>PHP</span> <span>92%</span></h3></div>
                    <div class="bar"><h3><span>Dart</span> <span>82%</span></h3></div>
                    <div class="bar"><h3><span>JavaScript</span> <span>89%</span></h3></div>
                    <div class="bar"><h3><span>MySQL</span> <span>100%</span></h3></div>
                </div>
                <div class="education">
                    <h1 class="heading"><span>education &amp; experience</span></h1>
                    <div class="row">
                        <div class="box-container">
                            <h3 class="taitol">education</h3>
                            <div class="box">
                                <span>(2019 - 2020)</span>
                                <h3>web designer</h3>
                                <p>Primary role was to design websites and web applications <br> for different companies around the world</p>
                            </div>
                            <div class="box">
                                <span>(2020 - 2021)</span>
                                <h3>Front End Developer</h3>
                                <p>Primary role was to design websites and web applications <br> for different companies around the world</p>
                            </div>
                            <div class="box">
                                <span>(2021 - 2022)</span>
                                <h3>backend developer developer</h3>
                                <p>Primary role was to design websites and web applications <br> for different companies around the world</p>
                            </div>
                        </div>
                        <div class="box-container">
                            <h3 class="taitol">experience</h3>
                            <div class="box">
                                <span>(2022 - 2023)</span>
                                <h3>full stack web developer</h3>
                                <p>Primary role was to design websites and web applications <br> for different companies around the world</p>
                            </div>
                            <div class="box">
                                <span>(2023 onwards)</span>
                                <h3>mobile app developer</h3>
                                <p>Primary role was to design websites and web applications <br> for different companies around the world</p>
                            </div>
                            <div class="box">
                                <span>(2023 onwards)</span>
                                <h3>mobile app developer</h3>
                                <p>Primary role was to design websites and web applications  <br> for different companies around the world</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--about section ends-->

        <!--services section starts-->
        <section id="services" class="services">
            <h1 class="heading"><span>services</span></h1>
            <div class="box-container1">
                <div class="box">
                    <h3>web development</h3>
                    <p>Hey men, we do full time coding its no joke you either code or code</p>
                </div>
                <div class="box">
                    <h3>graphics design</h3>
                    <p>Hey men, we do full time graphics its no joke you either code or code</p>
                </div>
                <div class="box">
                    <h3>web online marketing</h3>
                    <p>Hey men, we do full time marketing its no joke you market or market</p>
                </div>
            </div>
            <div class="box-container1">
                <div class="box">
                    <h3>web scrapping</h3>
                    <p>Hey men, we do web scrapping its either you scrap or get srapped</p>
                </div>
                <div class="box">
                    <h3>ethical hacking</h3>
                    <p>Hey men, we do ethical hacking remember its ethical hacking not just hacking</p>
                </div>
                <div class="box">
                    <h3>online tutorage</h3>
                    <p>Hey men, we do full time tutorage its no joke you learn or code</p>
                </div>
            </div>
        </section>
        <!--services section ends-->

        <!--portfolio section starts-->
        <section class="portfolio" id="portfolio">
            <h3 class="heading"><span>portfolio</span></h3>
            <div class="box-container1">
                <div class="box">
                    <img src="./images/photo.jpg" alt="">
                    <p>
                        web development <br> (2019 - 2020)
                    </p>
                </div>
                <div class="box">
                    <img src="./images/photo.jpg" alt="">
                    <p>
                        kaka ghraphics <br> (2019 - 2020)
                    </p>
                </div>
                <div class="box">
                    <img src="./images/photo.jpg" alt="">
                    <p>
                        seo optimization <br> (2020 - 2021)
                    </p>
                </div>
            </div>
            <div class="box-container1">
                <div class="box">
                    <img src="./images/photo.jpg" alt="">
                    <p>
                        online writing <br> (2021 - 2022)
                    </p>
                </div>
                <div class="box">
                    <img src="./images/photo.jpg" alt="">
                    <p>
                        forex trading <br> (2022 - 2023)
                    </p>
                </div>
                <div class="box">
                    <img src="./images/photo.jpg" alt="">
                    <p>
                        ethical hacking <br> (2023 onwards)
                    </p>
                </div>
            </div>
        </section>
        <!--portfolio section ends-->

        <!--section contact starts-->
        <section id="contact" class="contact">
            <div class="heading"><span>contact kaka</span></div>

            <form action="contact.php" method="post">
                    <div class="personal">
                        <input type="text" name="name" placeholder="e.g., kaka mnazarety" required>
                        <input type="email" name="email" placeholder="e.g., example@mail.com" required>
                    </div>
                    <input type="number" placeholder="e.g., 0700000000" name="number">
                    <div class="txt">
                        <textarea name="message" cols="37" rows="6" placeholder="enter message" required></textarea>
                    </div>
                    <input type="submit" value="send me" class="btn" name="send">
            </form>
        </section>
        <!--section contact ends-->

        <!--footer-->
        <footer>
        <div class="last">&copy; copyright @
            <?php
                echo date('Y');
            ?> courtesy of kaka developer
        </div>
        </footer>
        <!--footer-->
    <script src="script.js"></script>
</body>
</html> 