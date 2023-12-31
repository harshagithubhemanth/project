<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page - Food Blog</title>
    <!-- ipfs test -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176427515-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-176427515-1');
    </script>

    <!-- Primary Meta Tags -->
    <title>Contact us - Food Blog</title>
    <meta name="title" content="Contact us - Food Blog">
    <meta name="description"
        content="Contact us if you have any questions about menus, recipes or simply want to update new dishes. The Food Blog team is pleased to serve you!">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://food-blog.vercel.app/contact.php">
    <meta property="og:title" content="Contact us - Food Blog">
    <meta property="og:description"
        content="Contact us if you have any questions about menus, recipes or simply want to update new dishes. The Food Blog team is pleased to serve you!">
    <meta property="og:image"
        content="https://images.unsplash.com/photo-1528747045269-390fe33c19f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
    <meta property="og:image:alt" content="Contact us - Food Blog thumbnail">
    <meta property="fb:app_id" content="312288953554749">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url"
        content="https://food-blog.vercel.app/contact.php">
    <meta property="twitter:title" content="Contact us - Food Blog">
    <meta property="twitter:description"
        content="Contact us if you have any questions about menus, recipes or simply want to update new dishes. The Food Blog team is pleased to serve you!">
    <meta property="twitter:image"
        content="https://images.unsplash.com/photo-1528747045269-390fe33c19f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/4a9d18e4fd.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- AOS Animate Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS Stylesheets  -->
    <link rel="stylesheet" href="css/grid/container.css">
    <link rel="stylesheet" href="css/grid/row.css">
    <link rel="stylesheet" href="css/grid/col.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/recipes.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>
    <!-- Header section start -->
    <header>
        <!-- Top-bar section start -->
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-bar__social-list">
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar__links">
                            <a href="#">Register</a>
                            <span>/</span>
                            <a href="#">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top-bar section end -->

        <!-- Navigation section start -->
        <nav class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-8">
                        <ul class="top-nav__menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="recipes.html">Recipes</a></li>
                            <li><a href="recipe-detail.html">Recipe Detail</a></li>
                            <li><a href="about.html">About</a></li>
                            <li class="active"><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-2 col-md-1 col-lg-2">
                        <div class="top-nav__search">
                            <button>
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="top-nav__toggle" id="showMenu">
                            <div class="top-nav__toggle-bars">
                                <div class="top-nav__toggle-bar" id="barTop"></div>
                                <div class="top-nav__toggle-bar" id="hideBar"></div>
                                <div class="top-nav__toggle-bar" id="barBottom"></div>
                            </div>
                        </div>
                    </div>

                    <ul class="top-nav__menu-toggle" id="navLinks">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="recipes.html">Recipes</a></li>
                        <li><a href="recipe-detail.html">Recipe Detail</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation section end -->
    </header>
    <!-- Header section end -->

    <main>
        <!-- Hero section start -->
        <section class="hero">
            <h1 class="hero__title">Contact</h1>
        </section>
        <!-- Hero section end -->

        <!-- Contact section start -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                        <h2 class="contact__title">Leave a comment</h2>
                        <!--Form-->
                        <form class="contact__form" action="save.php" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input required type="text" class="conatact__form-name" placeholder="Name" name="fname">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input required type="email" class="contact__form-email" placeholder="E-mail" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="contact__form-subject" placeholder="Subject">
                                    </div>

                                    <div class="form-group">
                                        <textarea required class="contact__form-message" id="message"
                                            cols="30" rows="10" name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="contact__form-btn">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end of form-->
                    </div>

                    <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">

                        <div class="contact__info">
                            <ul class="contact__info-list">
                                <li>
                                    <h3>Address:</h3>
                                    <p>123 Twilight Lane</p>
                                    <p>Seaho, L-97</p>
                                </li>
                                <li>
                                    <h3>Phone:</h3>
                                    <p>54238 74532</p>
                                    <p>89235 61247</p>
                                </li>
                                <li>
                                    <h3>Email:</h3>
                                    <p>food_blog@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section end -->
    </main>

    <!-- Footer start -->
    <footer>
        <section class="app-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6">
                        <div class="app-footer__right">
                            <ul class="app-footer__menu">
                                <li><a href="index.html"><b>Home</b></a></li>
                                <li><a href="recipes.html"><b>Recipes</b></a></li>
                                <li><a href="recipe-detail.html"><b>Recipe Detail</b></a></li>
                                <li><a href="about.html"><b>About</b></a></li>
                                <li class="active"><a href="#"><b>Contact</b></a></li>
                            </ul>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Footer end -->

    <!-- Scroll-to-top button start -->
    <div class="scroll-to-top">
        <button id="scrollButton">
            <i class="fas fa-chevron-up"></i>
        </button>
    </div>
    <!-- Scroll-to-top button end -->

    <!-- Javascript -->
    <script src="js/main.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out',
            duration: 600,
            once: true
        });
    </script>
</body>

</html>
