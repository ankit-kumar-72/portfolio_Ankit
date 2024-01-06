<?php
$insert = false;
//set connection Variable
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    //create a connection

    $con = mysqli_connect($server, $username, $password);

    //check for connevtion success

    if (!$con) {
        die("Connection to this database failed due to" . mysqli_connect_error());
    }
    //    echo "Success connecting to the db";

    //collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $other = $_POST['desc'];

    $sql = "INSERT INTO `portfolio`.`portfolio` (`name`, `email`, `other`, `dt`) VALUES ('$name','$email', '$other', current_timestamp()); ";

    // echo $sql;

    //execute the query

    if ($con->query($sql) == true) {
        // echo "Successfully Inserted";
        //flag for successfull insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    //close the databse connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- =====BOX ICONS===== -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

    <title>Portfolio website complete</title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Ankit</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">Skills</a>
                    </li>
                    <li class="nav__item">
                        <a href="#work" class="nav__link">Work</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-menu"></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">
                    Hi,<br />I'am <span class="home__title-color">Ankit Kumar</span><br />
                    Web Developer.
                </h1>

                <a href="#" class="button">Contact</a>
            </div>

            <div class="home__social">
                <a href="https://www.linkedin.com/in/ankit-kumar-876502237" class="home__social-icon"><i class="bx bxl-linkedin"></i></a>

                <a href="https://github.com/ankit7277410093" class="home__social-icon"><i class="bx bxl-github"></i></a>
            </div>

            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                        <image class="home__blob-img" x="50" y="60" href="assets/myPic.png" />
                    </g>
                </svg>
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section" id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets/myPic.png" alt="" />
                </div>

                <div>
                    <h2 class="about__subtitle">I'am Ankit Kumar</h2>
                    <p class="about__text">
                        I am currently pursuing M.C.A from Vellore Institute of
                        Technology. I have done my graduation from B.D college, Patna. I
                        am passionate about Web Development and i have a habit of making
                        things from scratch.
                    </p>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div>
                    <h2 class="skills__subtitle">Profesional Skills</h2>
                    <p class="skills__text">
                        Here are some of my skills which i have developed during my
                        academic career.
                    </p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name">HTML</span>
                        </div>
                        <div class="skills__bar skills__html"></div>
                        <div>
                            <span class="skills__percentage">95%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name">CSS</span>
                        </div>
                        <div class="skills__bar skills__css"></div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">65%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name">C++</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">65%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name"> Java</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">70%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name"> SQL</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">60%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name"> MongoDB</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">55%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name"> Python</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">60%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name"> SpringBoot</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">50%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name"> Data Science</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">60%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <span class="skills__name"> Swagger</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">50%</span>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="assets/img/work3.jpg" alt="" class="skills__img" />
                </div>
            </div>
        </section>

        <!--===== WORK =====-->
        <section class="work section" id="work">
            <h2 class="section-title">Work</h2>

            <div class="work__container bd-grid">
                <a href="https://github.com/ankit7277410093/Smart-Greenhouse-Monitoring-System-using-IOT.git" class="work__img">
                    <!-- <img src="assets/img/work1.jpg" alt=""> -->
                    <h2>Smart GreenHouse Using Cisco Packet Tracer</h2>
                    <br />
                    <p>
                        The Smart Greenhouse project, utilizing Cisco Packet Tracer,
                        combines IoT, RFID, and Cisco networking to create an efficient
                        and sustainable cultivation environment.
                    </p>
                </a>
                <a href="https://github.com/ankit7277410093/Image-Encryption-and-Decryption-Using-AES.git" class="work__img">
                    <!-- <img src="assets/img/work1.jpg" alt=""> -->
                    <h2>Image Encryption and Decryption Using AES</h2>
                    <br />
                    <p>
                        Image Encryption and Decryption Using AES employs a symmetric-key
                        block cipher algorithm to secure digital images, ensuring
                        confidentiality and integrity of the visual data.
                    </p>
                </a>
                <a href="https://github.com/ankit7277410093/CHATBOT-ON-THE-CLOUD.git" class="work__img">
                    <!-- <img src="assets/img/work1.jpg" alt=""> -->
                    <h2>Chatbots on the Cloud: Trends and Opportunities</h2>
                    <br />
                    <p>
                        Infinity Free hosting cloud with cloud-based chatbots, optimizes
                        customer interactions through scalable computing, advanced AI
                        models, seamless integrations, real-time analytics, and global
                        accessibility.
                    </p>
                </a>
            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>
            <?php
            if ($insert == true) {
                echo "<p class='submit_msg'>Thank you for sharing this valuable information with me! I truly appreciate your contribution.</p>";
            }
            ?>

            <div class="contact__container bd-grid">
                <form action="./index.php" class="contact__form" method="post">
                    <input type="text" name="name" id="name" placeholder="Enter your name" class="contact__input" />
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="contact__input" />
                    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information:" class="contact__input"></textarea>
                    <button class="btn contact__button">Send</button>
                </form>
            </div>
        </section>
    </main>

    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Ankit</p>
        <div class="footer__social">
            <a href="https://www.linkedin.com/in/ankit-kumar-876502237" class="footer__icon"><i class="bx bxl-linkedin"></i></a>

            <a href="https://github.com/ankit7277410093" class="footer__icon"><i class="bx bxl-github"></i></a>
        </div>
        <p class="footer__copy">&#169; 2023 All rigths reserved</p>
    </footer>


    <!-- ========================================Java Script==================================================== -->

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <!-- <script src="assets/js/main.js"></script> -->
    <script>
        /*===== MENU SHOW =====*/
        const showMenu = (toggleId, navId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId)

            if (toggle && nav) {
                toggle.addEventListener('click', () => {
                    nav.classList.toggle('show')
                })
            }
        }
        showMenu('nav-toggle', 'nav-menu')

        /*==================== REMOVE MENU MOBILE ====================*/
        const navLink = document.querySelectorAll('.nav__link')

        function linkAction() {
            const navMenu = document.getElementById('nav-menu')
            // When we click on each nav__link, we remove the show-menu class
            navMenu.classList.remove('show')
        }
        navLink.forEach(n => n.addEventListener('click', linkAction))

        /*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
        const sections = document.querySelectorAll('section[id]')

        function scrollActive() {
            const scrollY = window.pageYOffset

            sections.forEach(current => {
                const sectionHeight = current.offsetHeight
                const sectionTop = current.offsetTop - 50;
                sectionId = current.getAttribute('id')

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active')
                } else {
                    document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active')
                }
            })
        }
        window.addEventListener('scroll', scrollActive)

        /*===== SCROLL REVEAL ANIMATION =====*/
        const sr = ScrollReveal({
            origin: 'top',
            distance: '60px',
            duration: 2000,
            delay: 200,
            //     reset: true
        });

        sr.reveal('.home__data, .about__img, .skills__subtitle, .skills__text', {});
        sr.reveal('.home__img, .about__subtitle, .about__text, .skills__img', {
            delay: 400
        });
        sr.reveal('.home__social-icon', {
            interval: 200
        });
        sr.reveal('.skills__data, .work__img, .contact__input', {
            interval: 200
        });
    </script>
</body>

</html>