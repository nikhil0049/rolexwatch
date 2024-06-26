<?php
$menuItems = [
    ['label' => 'Home', 'link' => 'index.php'],
    ['label' => 'About', 'link' => '#'],
    ['label' => 'Services', 'link' => '#'],
    ['label' => 'Contact', 'link' => '#'],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolex - Find The Time Of Your Life</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">

    <!-- icons link -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="app.js"></script>
    <link rel="stylesheet" href="sub.css">
</head>

<body>
    <div class="video-container">
        <video autoplay muted loop id="myVideo">
            <source src="img/professional-watches-submariner-flagship-video-per-flag-submariner-21-a-60-uk-16x9-en-py-ly-cl-no-clock.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <header>
            <nav class="navbar">
                <div class="logo"><span id="menu">Menu</span>
                    <img src="img/lr.png" alt="">
                </div>
                <label for="menu-toggle" class="toggle">
                    <span class="line"></span>
                    <!-- <span class="line"></span> -->
                    <span class="line"></span>
                </label>
                <input type="checkbox" id="menu-toggle">
                <div class="slide">
                    <ul>
                        <?php
                        foreach ($menuItems as $item) {
                            echo "<li><a href='{$item['link']}'>{$item['label']}</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <ul class="icon-list">
                    <li>
                        <a href="#">
                            <box-icon name='search' class="icon" color="white"></box-icon><span>Search</span>
                        </a>
                    </li>
                    <li>
                        <a href="/en-us/store-locator">
                            <svg viewBox="0 0 15 15" class="icon" height="18" width="18">
                                <path d="M7.5,0.5c-3,0-5.4,2.4-5.4,5.4c0,1.1,0.7,2.6,1.7,4c1.7,2.3,3.7,4.6,3.7,4.6s2-2.4,3.7-4.6c0.9-1.4,1.7-2.9,1.7-4
                             C12.9,2.9,10.5,0.5,7.5,0.5z M7.5,8.4C6.1,8.4,5,7.2,5,5.9c0-1.4,1.1-2.5,2.5-2.5S10,4.5,10,5.9S8.9,8.4,7.5,8.4z"></path>
                            </svg><span>Store locator</span>
                        </a>
                    </li>

                    <li>
                        <a href="/en-us/wishlist">
                            <svg class="icon" height="18" width="18" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                                <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z"></path>
                            </svg><span>Favourites</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="content1">
            <h3>oyster perpetual</h3>
            <h1>Submariner</h1>
        </div>
        <div class="new">
            <h1>Deep Confidence</h1>
        </div>
    </div>

    <div class="container" class="dark-theme css-s30hrt e1rkjwns2" style="opacity: 0.904255;">
        <div class="row featurette my-4">
            <div class="col-md-7">
                <h1 class="featurette-heading">Beneath the surface</h1>
            </div>
            <div class="col-md-5 order-md-1">
                <p class="lead">Launched in 1953, the Rolex Submariner is the first divers’ wristwatch to be waterproof to a depth of 100 metres (330 feet) – now 300 metres (1,000 feet). Its major features, such as the graduated rotatable bezel, the luminescent display, the large hands and hour markers, have been a driving force in the creation of the long line of Rolex divers’ watches which followed.

                    <br> <br> The Submariner is an iconic timepiece whose renown now extends beyond the professional world it was first designed for. The Submariner, the ultimate standard.
                </p>
            </div>
        </div>
    </div>
   
    <div class="video-container2 image-overlay">
        <video autoplay muted loop id="myVideo2">
            <source src="img/submari.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="con4">
            <div class="overlay-text">
                <h2 class="e1">A true divers’ watch by <br> design</h2>
                <p class="e2">As an underwater survival tool, this watch’s design has been entirely dictated by the practical needs of divers. Since 1953, the Submariner has evolved technically and aesthetically as it has been endowed with features to improve overall functionality. The first watch was a pioneer and its subsequent versions have continued to set the benchmark for divers’ watches.
                <div class="spacer">
                    <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 180px;">
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
    <!-- <div class="overlay" id="overlay"></div> -->

    <div class="bg2">
        <div class="con3">
            <h2 class="d1">Monitor diving time</h2>
            <p class="d2">The Submariner’s unidirectional rotatable bezel is key to the functionality of the watch. Its engraved 60-minute graduation allows divers to monitor their time underwater. Manufactured by Rolex from a hard, corrosion-resistant ceramic, the Cerachrom bezel insert is virtually scratchproof and its colour is unaffected by ultraviolet rays, seawater or water that is chlorinated. In addition, thanks to its chemical composition, the high-tech ceramic is inert and cannot corrode.</p>
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
                </div>
            </div>
        </div>

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="img/rsubmari6.jpg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img-top" src="img/rsubmari7.jpg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img-top" src="img/rsubmari8.jpg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img-top" src="img/rsubmari9.jpg" alt="Card image cap">
            </div>
        </div>

        <div class="con3">
            <h2 class="d12">The Submariner’s unidirectional rotatable bezel has knurled edges that offer excellent grip when setting the dive time, even when wearing gloves. It rotates notch by notch, accompanied by distinctive clicks.</h2>
            <img src="img/rsubmari3.jpg" alt="" style="height: 750px; width: 600px;" class="i1">
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 30px;">
                </div>
            </div>
        </div>

        <div class="con3">
            <h2 class="d11">Triple waterproofness system</h2>
            <p class="d2">The Submariner’s Oyster case, guaranteed waterproof to a depth of 300 metres (1,000 feet), provides the movement with optimal protection from water and dust. The Triplock winding crown – fitted with a triple waterproofness system – screws down securely against the case, ensuring watertight security.</p>
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
                </div>
            </div>
        </div>

        <div class="video-container2 image-overlay">
        <video autoplay muted loop id="myVideo2">
            <source src="img/submari2.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div class="con4">
            <div class="overlay-text">
                <h2 class="e11">Chromalight display</h2>
                <p class="e21">The Chromalight display is an innovation that improves visibility in dark environments, an essential feature for divers. An innovative luminescent material emitting a blue glow is applied to the hands, hour markers and the capsule on the bezel. <br><br>The Chromalight display is an innovation that improves visibility in dark environments, an essential feature for divers. An innovative luminescent material emitting a blue glow is applied to the hands, hour markers and the capsule on the bezel.
                <div class="spacer">
                    <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 180px;">
                    </div>
                </div>
                </p>
            </div>
        </div>

        <div class="con2">
            <p class="pi">
                " I was wearing a <br>Submariner the first time <br> I saw the Titanic for real <br> through the porthole of a <br>submersible, and I was <br>wearing the same watch <br> in my black tie when I <br>went up on the stage to get <br> the Oscar for directing Titanic."
                <br> <span>James Cameron</span>
            </p>
        </div>

        <div class="box9">
            <div class="con1">
                <h2 class="h2">Mastering waterproofness</h2>
                <div class="ml-auto">
                    <p class="pb" style="font-size: 23px; letter-spacing: 0.3px;">Hans Wilsdorf overcame The Challenge Of  <br> Protecting watches from dust and moistuer by <br> Creating  the first-ever waterproof wristwatch.</p>
                    <a href="#" class="dislink">Learn More ></a>
                </div>
            </div>
        </div>

        <div class="container-fluid1">
            <div class="ii1">
                <img src="img/rsubmari4.jpg" alt="" style="height: 700px; width: 750px;">
                <img src="img/rsubmari5.jpg" alt="" style="height: 700px; width: 754px;">
            </div>
        </div>

    </div>

    </div>
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1000,
            delay: 300
        });
        ScrollReveal().reveal('.box, .con1, .pi, .content1, .new, .container, .container-fluid, .pi, .d1, .d2, .e1, .e2, .tc1, .d12, .d11', {
            delay: 500,
            origin: 'bottom'
        });
    </script>

    <!-- scrolling -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var content1 = document.querySelector('.content1');
            var newElement = document.querySelector('.new');
            var lastScrollTop = 0;

            window.addEventListener('scroll', function() {
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    content1.classList.add('hide');
                    newElement.classList.add('show');
                    featuretteText.classList.remove('light-text');
                    featuretteText.classList.add('dark-text');
                } else {
                    content1.classList.remove('hide');
                    newElement.classList.remove('show');
                    featuretteText.classList.remove('dark-text');
                    featuretteText.classList.add('light-text');
                }

                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;

                if (scrollTop > 50) {
                    fixedVideo.classList.add('dark-mode');
                } else {
                    fixedVideo.classList.remove('dark-mode');
                }
            });
        });
    </script>

    <script>
        let lastScrollTop = 0;
        const imageOverlay = document.querySelector('.image-overlay');
        let blurTimeout;

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            clearTimeout(blurTimeout);

            if (scrollTop > lastScrollTop) {
                blurTimeout = setTimeout(() => {
                    imageOverlay.classList.add('blur');
                }, 900);
            } else {
                imageOverlay.classList.remove('blur');
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>