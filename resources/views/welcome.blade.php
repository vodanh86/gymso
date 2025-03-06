<!DOCTYPE html>
<html lang="en">
<?php use App\Models\Post; ?>
<head>

    <title>Alpha Fitness And Life Style</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">
    <link rel="stylesheet" href="css/equinox.css">

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
        <?php $post0 = Post::where('code', 'ALPHA0')->first(); ?>
            <a class="navbar-brand" href="index.html"><?=$post0->title?></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes</a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- HERO -->
    <?php $post1 = Post::where('code', 'ALPHA1')->first(); ?>
    <section class="hero d-flex flex-column justify-content-center align-items-center" 
    style="background-image: url('<?="storage/".$post1->image?>');" id="home">

        <div class="bg-overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10  col-12">
                    <div class="hero-text mt-5 text-start">

                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="500"
                            class="PageHero_subheading__IxFFF">
                            <?=$post1->title?></h1>

                        <h6 data-aos="fade-up" data-aos-delay="300" class="PageHero_subheading__IxFFF"><?=$post1->content?></h6>


                        <a href="#feature" class="PageHero_cta__vJsVl btn custom-btn mt-3" data-aos="fade-up"
                            data-aos-delay="600"><?=$post1->button?></a>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Member -->
    <?php $post2 = Post::where('code', 'ALPHA2')->first(); ?>
    <section class="member d-flex flex-column justify-content-center align-items-center" 
    style="background-image: url('<?="storage/".$post2->image?>');"id="home">

        <div class="bg-overlay"></div>

        <div class="ExploreClubs_content" style="">
            <div class="ExploreClubs_text__XX4Mx">
                <h2 class="ExploreClubs_title__T4_4d"><?=$post2->title?></h2>
                <div class="ExploreClubs_description__6nXd4"><?=$post2->content?></div><a class="ExploreClubs_cta__8ymBa"
                    href="/memberbenefits"><?=$post2->button?></a>
            </div>
        </div>
    </section>

    <!-- Find -->
    <?php $post3 = Post::where('code', 'ALPHA2')->first(); ?>
    <section class="member d-flex flex-column justify-content-center align-items-center" 
    style="background-image: url('<?="storage/".$post3->image?>');"id="home">

        <div class="bg-overlay"></div>

        <div class="ExploreClubs_content" style="">
            <div class="ExploreClubs_text__XX4Mx">
                <h2 class="ExploreClubs_title__T4_4d"><?=$post3->title?></h2>
                <div class="ExploreClubs_description__6nXd4"><?=$post3->content?></div><a class="ExploreClubs_cta__8ymBa"
                    href="/memberbenefits"><?=$post3->button?></a>
            </div>
        </div>
    </section>

    <?php $post4 = Post::where('code', 'ALPHA4')->first(); ?>
    <section class="HighlightsWithPhotoBackground_container__CiCM1 HighlightSection classes"
        data-is="HighlightsWithPhotoBackground">
        <ul class="HighlightsWithPhotoBackground_highlights__JbwP5" data-current-index="2">
            <li aria-current="false" class="pointer HighlightsWithPhotoBackground_highlight__l3wIT">
                <div class="HighlightsWithPhotoBackground_highlight-info__mK8Rx "
                    onmouseenter="handleHighlightChange('classes', 1)">
                    <h3 class="HighlightsWithPhotoBackground_highlight-title__dMkZ_"><?=$post4->title?></h3>
                    <p class="HighlightsWithPhotoBackground_highlight-text__nh40m"><?=$post4->content?>.</p><a
                        class="HighlightsWithPhotoBackground_highlight-link__UthCW"
                        href="/groupfitness?icmp=home-classes" title="Discover Classes"><?=$post4->button?></a>
                </div>
                <img class="ResponsiveImage_responsive-image___2kO5 HighlightsWithPhotoBackground_photo__KRDev HighlightsWithPhotoBackground_photo__KRDev_1"
                    style="width: 100%; height: 100%; object-fit: cover;"
                    src="<?="storage/".$post4->image?>"
                    alt="CORE ANCILLARIES MODULE GF 375x563-min" loading="lazy" title="It’s Not Fitness. It’s Life.">
            </li>
            <?php $post5 = Post::where('code', 'ALPHA5')->first(); ?>
            <li aria-current="false" class="pointer HighlightsWithPhotoBackground_highlight__l3wIT">
                <div class="HighlightsWithPhotoBackground_highlight-info__mK8Rx "
                    onmouseenter="handleHighlightChange('classes', 2)">
                    <h3 class="HighlightsWithPhotoBackground_highlight-title__dMkZ_"><?=$post5->title?></h3>
                    <p class="HighlightsWithPhotoBackground_highlight-text__nh40m"><?=$post5->content?></p><a
                        class="HighlightsWithPhotoBackground_highlight-link__UthCW"
                        href="/personaltraining?icmp=home-personaltraining" title="Discover Personal Training"><?=$post5->button?></a>
                </div>
                <img class="ResponsiveImage_responsive-image___2kO5 HighlightsWithPhotoBackground_photo__KRDev HighlightsWithPhotoBackground_photo__KRDev_2"
                    style="width: 100%; height: 100%; object-fit: cover;"
                    src="<?="storage/".$post5->image?>"
                    alt="CORE ANCILLARIES MODULE PT 375x563-min" loading="lazy" title="It’s Not Fitness. It’s Life.">
            </li>
            <?php $post6 = Post::where('code', 'ALPHA6')->first(); ?>
            <li aria-current="true" class="pointer HighlightsWithPhotoBackground_highlight__l3wIT">
                <div class="HighlightsWithPhotoBackground_highlight-info__mK8Rx "
                    onmouseenter="handleHighlightChange('classes', 3)">
                    <h3 class="HighlightsWithPhotoBackground_highlight-title__dMkZ_"><?=$post6->title?></h3>
                    <p class="HighlightsWithPhotoBackground_highlight-text__nh40m"><?=$post6->content?></p><a
                        class="HighlightsWithPhotoBackground_highlight-link__UthCW" href="/pilates?icmp=home-pilates"
                        title="Discover Pilates"><?=$post6->button?></a>
                </div>
                <img class="ResponsiveImage_responsive-image___2kO5 HighlightsWithPhotoBackground_photo__KRDev HighlightsWithPhotoBackground_photo__KRDev_3"
                    style="width: 100%; height: 100%; object-fit: cover;"
                    src="<?="storage/".$post6->image?>"
                    alt="CORE ANCILLARIES MODULE STUDIO PILATES 375x563-min" loading="lazy"
                    title="It’s Not Fitness. It’s Life.">
            </li>
        </ul>
    </section>
    <?php $post7 = Post::where('code', 'ALPHA7')->first(); ?>
    <section class="HighlightsWithPhotoBackground_container__CiCM1 HighlightSection spa" data-is="HighlightsWithPhotoBackground">
        <ul class="HighlightsWithPhotoBackground_highlights__JbwP5" data-current-index="2">
            <li aria-current="false" class="HighlightsWithPhotoBackground_highlight__l3wIT">
                <div class="HighlightsWithPhotoBackground_highlight-info__mK8Rx "
                    onmouseenter="handleHighlightChange('spa', 1)">
                    <h3 class="HighlightsWithPhotoBackground_highlight-title__dMkZ_"><?=$post7->title?></h3>
                    <p class="HighlightsWithPhotoBackground_highlight-text__nh40m"><?=$post7->content?></p><a
                        class="HighlightsWithPhotoBackground_highlight-link__UthCW" href="/spa"
                        title="Discover The Spa"><?=$post7->button?></a>
                </div>
                <img class="ResponsiveImage_responsive-image___2kO5 HighlightsWithPhotoBackground_photo__KRDev HighlightsWithPhotoBackground_photo__KRDev_1"
                    src="<?="storage/".$post7->image?>"
                    alt="REGENERATION MODULE SPA 375x563-min" loading="lazy" style="object-position:50% 50%"
                    title="It’s Not Fitness. It’s Life.">
            </li>
            <?php $post8 = Post::where('code', 'ALPHA8')->first(); ?>
            <li aria-current="false" class="HighlightsWithPhotoBackground_highlight__l3wIT">
                <div class="HighlightsWithPhotoBackground_highlight-info__mK8Rx "
                    onmouseenter="handleHighlightChange('spa', 2)">
                    <h3 class="HighlightsWithPhotoBackground_highlight-title__dMkZ_"><?=$post8->title?></h3>
                    <p class="HighlightsWithPhotoBackground_highlight-text__nh40m"><?=$post8->content?></p><a
                        class="HighlightsWithPhotoBackground_highlight-link__UthCW"
                        href="https://www.equinox.com/clubs?icmp=topnav-clubs" title="Discover More"><?=$post8->button?></a>
                </div>
                <img class="ResponsiveImage_responsive-image___2kO5 HighlightsWithPhotoBackground_photo__KRDev HighlightsWithPhotoBackground_photo__KRDev_2"
                    src="<?="storage/".$post8->image?>"
                    alt="REGENERATION MODULE SPA 375x563-min" loading="lazy" style="object-position:50% 50%"
                    title="It’s Not Fitness. It’s Life.">

            </li>
            <?php $post9 = Post::where('code', 'ALPHA9')->first(); ?>
            <li aria-current="true" class="HighlightsWithPhotoBackground_highlight__l3wIT">
                <div class="HighlightsWithPhotoBackground_highlight-info__mK8Rx "
                    onmouseenter="handleHighlightChange('spa', 3)">
                    <h3 class="HighlightsWithPhotoBackground_highlight-title__dMkZ_"><?=$post9->title?></h3>
                    <p class="HighlightsWithPhotoBackground_highlight-text__nh40m"><?=$post9->content?></p><a
                        class="HighlightsWithPhotoBackground_highlight-link__UthCW"
                        href="https://www.equinox.com/clubs?icmp=topnav-clubs" title="Discover More"><?=$post9->button?></a>
                </div>
                <img class="ResponsiveImage_responsive-image___2kO5 HighlightsWithPhotoBackground_photo__KRDev HighlightsWithPhotoBackground_photo__KRDev_3"
                    src="<?="storage/".$post9->image?>"
                    alt="REGENERATION MODULE SPA 375x563-min" loading="lazy" style="object-position:50% 50%"
                    title="It’s Not Fitness. It’s Life.">
            </li>
        </ul>
    </section>

    <!-- Member -->
    <?php $post10 = Post::where('code', 'ALPHA10')->first(); ?>
    <section class="app d-flex flex-column justify-content-center align-items-center" id="home">

        <div class="bg-overlay"></div>

        <div class="ExploreClubs_content" style="">
            <div class="ExploreClubs_text__XX4Mx">
                <h2 class="ExploreClubs_title__T4_4d"><?=$post10->title?>+</h2>
                <div class="ExploreClubs_description__6nXd4"><?=$post10->content?></div><a class="ExploreClubs_cta__8ymBa"
                    href="/memberbenefits"><?=$post10->button?></a>
            </div>
        </div>
    </section>
    
    
    <!-- ABOUT -->
    <section class="about section" id="about" style="padding:0">
        <div class="container" style="max-width: 100%; padding: 0;">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up"
                    data-aos-delay="700">
                    <div class="team-thumb ResponsiveImage_responsive-image___2kO5 Headline_photo__3ejp5">
                        <img src="https://images.ctfassets.net/drib7o8rcbyf/3SpgND135sTsN4L9egbRuE/0fc654e23fbec5daedc871acbc3e19da/YOGASTRONG_AMO06_060_064_V03_ORANGE_300DPI_FINAL-lpr.jpg" class="img-fluid" alt="Trainer">

                    </div>
                </div>

                <div class="col-lg-6">

                    <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400"
                        role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="Name">

                        <input type="email" class="form-control" name="cf-email" placeholder="Email">

                        <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                        <input type="text" class="form-control" name="cf-name" placeholder="Name">

                        <input type="email" class="form-control" name="cf-email" placeholder="Email">

                        <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>


                        <button type="submit" class="form-control" id="submit-button" name="submit">Send
                            Message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                    <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400"
                        role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="Name">

                        <input type="email" class="form-control" name="cf-email" placeholder="Email">

                        <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Send
                            Message</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                    <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.160670875538!2d105.79569887452762!3d21.066244086491537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab29fd5b75b9%3A0xb9734d4dd9c371ef!2sAlpha%20Fitness%2C%20Yoga%20and%20Pool!5e0!3m2!1svi!2s!4v1740885796097!5m2!1svi!2s" 
                            width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-4 col-md-5">
                    <p class="copyright-text">Copyright &copy; 2020 Gymso Fitness Co.

                        <br>Design: <a href="https://www.tooplate.com">Tooplate</a>
                    </p>
                </div>

                <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                    <p class="mr-4">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="#">hello@company.co</a>
                    </p>

                    <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="membership-form webform" role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="John Doe">

                        <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com">

                        <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                        <textarea class="form-control" rows="3" name="cf-message"
                            placeholder="Additional Message"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Submit
                            Button</button>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="signup-agree">
                            <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the
                                <a href="#">Terms &amp;Conditions</a>
                            </label>
                        </div>
                    </form>
                </div>

                <div class="modal-footer"></div>

            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>