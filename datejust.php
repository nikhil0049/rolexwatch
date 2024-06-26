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
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">

    <!-- icons link -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="app.js"></script>
    <link rel="stylesheet" href="datejust.css">
</head>

<body>
    <div class="video-container">
        <video autoplay muted loop id="myVideo">
            <source src="img/datejustpage.webm" type="video/mp4">
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
            <h1>Datejust</h1>
        </div>
        <div class="new">
            <h1>Make A Date Of A Day</h1>
        </div>
    </div>
    <div class="container" class="dark-theme css-s30hrt e1rkjwns2" style="opacity: 0.904255;">
        <div class="row featurette my-4">
            <div class="col-md-7">
                <h1 class="featurette-heading">No one day is like another</h1>
            </div>
            <div class="col-md-5 order-md-1">
                <p class="lead">Any day can leave a lasting mark on our lives and set the stage for new aspirations. Since its creation in 1945, the Datejust has continued to reinvent itself while symbolizing Rolex’s definition of classic elegance. A milestone in watchmaking history, it was the first self-winding waterproof chronometer wristwatch to feature a window displaying the date. Magnified by the Cyclops lens, these numbers are a reminder that though 24 hours mark a day, it’s on us to make those a date to remember.</p>
            </div>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="bg-light">
        <div class="container-fluid">
            <div class="tc">
                <h1>The Birth Of Unique Vision, <br>Crowning a Long-Standing <br>Ambination. </h1>
            </div>
        </div>

        <div class="con2">
            <p class="pi">
                " This is the pinnacle of <br>watchmaking science. It <br> encapsulates every <br> discovery made to date."
                <br> <span>Hans Wilsdorf, 1945</span>
            </p>
        </div>

        <div class="con3">
            <h2 class="d1">The date: a modern milestone</h2>
            <p class="d2">Launched in 1945, the Datejust was the first self-winding waterproof chronometer wristwatch with a window displaying the date at 3 o’clock on the dial. This unique combination was further enhanced in 1953 with the magnifying effect of the Cyclops lens on the display. With these inventions, the Datejust embodied the quest for excellence of Rolex founder Hans Wilsdorf, who believed that watchmaking progress should encourage human progress. In an era of great change, our relationship with time is shifting. Modern life is less connected to the seasons as we move to the rhythm of the passing days. The Datejust offers comfort as well as legibility and daily time management. Useful and practical, it was soon established as a precious instrument for the modern, independent, active wearer.</p>
            <img src="img/datejustc2.jpg" alt="" style="height: 750px; width: 600px;" class="i1">
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 70px;">
                </div>
            </div>
        </div>

        <div class="con4">
            <div class="image-overlay"></div>
            <h2 class="e1">Iconic technical innovations</h2>
            <p class="e2">Described by Hans Wilsdorf as a technical feat, encapsulating all Rolex innovation to date, the Datejust also embodies a harmonious and classic elegance. Its inimitable and timeless style was enhanced with the special Jubilee bracelet, designed to commemorate the 40th anniversary of Rolex. Featuring rows of five metal links, it is known for its fluid contours and elegant clasp, which bring further distinction to the model. In 1957, a woman’s version with a diameter of 26 mm (today 28 mm) was released: the Oyster Perpetual Lady-Datejust. As reliable as the Datejust, it concentrates all the attributes of the original model.
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 180px;">
                </div>
            </div>
            </p>
        </div>

        <div class="con3">
            <h2 class="d1">Continually updated standards</h2>
            <p class="d2">Regular new releases of the Datejust mean this watchmaking icon is constantly reinventing itself. With its varied reinterpretations, it expresses and showcases Rolex’s expertise in dial-making. Set with diamonds or crafted from mother of pearl, or featuring a sunray finish, the selection of dials helps uphold its reputation. The same is true of its bezels – smooth, domed, fluted or diamond-set – with which the Datejust has stylishly spanned eras while perfectly adapting to the personality of its wearers.</p>
            <img src="img/rdayjust.jpg" alt="" style="height: 750px; width: 600px;" class="i1">
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 30px;">
                </div>
            </div>
            <div class="tc1">
                <h1>A daily celebration of these <br> “special dates” with destiny. </h1>
            </div>
        </div>

        <div class="con3">
            <h2 class="d1">A witness to world affairs</h2>
            <p class="d2">Reflecting the aspirations of the modern world, the Datejust has naturally become the watch of our dates with destiny. Day after day, its dial marks a meeting point between the personal course of each wearer and the passing of time. Seen on the wrists of major figures such as Winston Churchill, Dwight D. Eisenhower and Martin Luther King, the Datejust has spanned eras without ever losing its modern touch. Symbolizing this ongoing connection with time, the Datejust’s window looks out onto the world.</p>
            <div class="spacer">
                <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 50px;">
                </div>
            </div>
        </div>

        <div class="box9">
            <div class="con1">
                <h2 class="h2">Comfort</h2>
                <div class="ml-auto">
                    <p class="pb" style="font-size: 23px; letter-spacing: 0.3px;">We Know That Sensory Analysis Is Vital To Ensuring <br> Some Of Our Watches' Essential Qualities.</p>
                    <a href="#" class="dislink">Learn More ></a>
                </div>
            </div>
        </div>

        <div class="container-fluid1">
            <div class="ii1">
                <img src="img/rdayjustm1.jpg" alt="" style="height: 800px; width: 750px;">
                <img src="img/rdayjustm2.jpg" alt="" style="height: 800px; width: 764px;">
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
        ScrollReveal().reveal('.box, .con1, .con2, .content1, .new, .container, .container-fluid, .pi, .d1, .d2, .e1, .e2, .tc1', {
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

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop < lastScrollTop) {
                // Scrolling down
                imageOverlay.classList.remove('blur');
            } else {
                // Scrolling up
                imageOverlay.classList.add('blur');
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
        });
    </script>

    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".toggle").click(function() {
                $("#menu").css("color", "rgb(250, 300, 300)").html("Menu").css("transition", "2s");
            });
            $(".toggle").click(function() {
                $(".slide").css(" top", "-20pc").css("transition", "2s");
                $("#menu").css("rgb(250, 300, 300)");
            });
        });
    </script>
    <!-- 
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fixedVideo = document.getElementById('fixedVideo');
            let lastScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

            function enableDarkMode() {
                fixedVideo.classList.add('dark-mode');
            }

            function disableDarkMode() {
                fixedVideo.classList.remove('dark-mode');
            }

            window.addEventListener('scroll', function(event) {
                let currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
                if (currentScrollPosition > lastScrollPosition) {
                    enableDarkMode(); 
                } else {
                    disableDarkMode();
                }

                lastScrollPosition = currentScrollPosition;
            });
        });
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>