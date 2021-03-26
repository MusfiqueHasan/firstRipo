<?php
    include "./db.php";

    if(isset($_POST['send_msg'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $describe_cont = $_POST['describe_cont'];

        $sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `describe_cont`) 
                VALUES ('$name', '$email', '$subject', '$describe_cont')";

        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "<div class='alert alert-S'>
                    Your message sent successfully
                  </div>".
                 "<script type='text/javascript'>
                    setTimeout(() => {
                        window.location = 'index.php';
                    }, 1500);
                  </script>";
        }
        else {
            echo "<div class='alert alert-E'>
                    Something is wrong! Message not sent.
                 </div>".
                "<script type='text/javascript'>
                    setTimeout(() => {
                        window.location = 'index.php';
                    }, 1500);
                </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Musfi<span>que</span></a>
            </div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello,my name is</div>
                <div class="text-2">Musfique Hasan</div>
                <div class="text-3">And I'am a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="max-width">
            <div class="title">About Me</div>
            <div class="about-content">
                <div class="column left">
                    <img src="image/mush2.jpg" alt="" />
                </div>
                <div class="column right">
                    <div class="text">
                        I'm Bangladeshi and I'm a <span class="typing2"></span>
                    </div>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci
                        odit saepe soluta et dolore. Maxime facilis vel hic ea! Hic
                        expedita omnis molestiae deserunt perferendis quaerat? Quaerat,
                        doloribus quas? Quidem, et consequuntur doloribus distinctio
                        laborum autem quaerat ipsum cupiditate consectetur earum maxime
                        vitae, nobis soluta harum obcaecati aliquid laudantium! At aut
                        accusantium nihil deleniti cum alias quisquam nisi laborum quia!
                    </p>

                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="max-width">
            <div class="title">My Services</div>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem
                            quaerat dolore, facere tenetur quibusdam beatae.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Web Developer</div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem
                            quaerat dolore, facere tenetur quibusdam beatae.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem
                            quaerat dolore, facere tenetur quibusdam beatae.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My Creative Skills & experiences</div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                        harum quis a tempora, quo vel distinctio suscipit libero
                        reprehenderit natus odio quae itaque, molestiae est, repellat
                        praesentium earum ratione necessitatibus. Error ratione
                        perferendis aut, odit reprehenderit, commodi cumque ipsa, saepe
                        maxime quasi ex hic! Laboriosam necessitatibus, aut debitis quas
                        corrupti consequatur asperiores ab, libero nam similique vero
                        consequuntur delectus magnam.
                    </p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Javascript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Mysql</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Teams</h2>
            <div class="carousel owl-carousel">
                <div class="card box">
                    <div class="box">
                        <img src="image/mush7.jpg" alt="" />
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card box">
                    <div class="box">
                        <img src="image/mush3.jpg" alt="" />
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card box">
                    <div class="box">
                        <img src="image/mush4.jpg" alt="" />
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card box">
                    <div class="box">
                        <img src="image/mush5.jpg" alt="" />
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card box">
                    <div class="box">
                        <img src="image/mush6.jpg" alt="" />
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo
                        facere consectetur quia error placeat natus nemo quae molestiae
                        perferendis blanditiis.
                    </p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Musfique Hasan</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Chittagong, Bangladesh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">musfiquehasan08@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="My name" name="name" required />
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="email" required />
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" name="subject" required />
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Describe project.." name="describe_cont"
                                required></textarea>
                        </div>
                        <div class="button">
                            <button name="send_msg" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <span class="far fa-copyright"></span>
        <span>Created By <a href="#">Musfique</a> || 2020</span>
    </footer>

    <script src="script.js"></script>
</body>

</html>