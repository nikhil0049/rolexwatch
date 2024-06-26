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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "DM Sans", sans-serif;
        }

        body {
            background-color: aliceblue;
        }

        .video-container {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        #myVideo {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        header {
            position: absolute;
            top: 0;
            width: 100%;
            transition: height 0.3s ease;
            z-index: 10;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            /* background-color: rgba(0, 0, 0, 0.5); */
            background: linear-gradient(90deg, #0b3e27, #197149);
            /* background: linear-gradient(to right , rgb(0, 78, 50),rgb(6, 146, 95)); */
            height: 70px;
            transition: height 0.3s ease-in-out;
        }

        .navbar .logo {
            font-size: 1.5em;
            color: white;
        }

        .logo img {
            height: 45px;
            width: 45px;
            margin-left: 45pc;
        }

        .navbar .lg img {
            width: 50px;
        }

        input {
            display: none;
        }

        #menu {
            font-family: "DM Sans", sans-serif;
            position: absolute;
            margin: 13px 8pc;
            font-size: 19px;
        }

        .toggle {
            position: absolute;
            height: 9px;
            width: 30px;
            z-index: 1;
            cursor: pointer;
            top: 38px;
            left: 110px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .toggle .line {
            height: 3px;
            width: 24px;
            background-color: white;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .slide {
            position: absolute;
            top: -20pc;
            left: -2pc;
            width: 0pc;
            height: 13pc;
            opacity: 0;
            padding: 50px 20px;
            overflow: hiden;
            transition: left 0.3s ease;
        }

        input:checked~.slide {
            /* left: 0; */
            top: 0pc;
            opacity: 1;
            transition: 2s;
        }

        .slide ul {
            list-style: none;
            display: inline-block;
            padding: 1pc 0pc;
            padding-left: 5pc;
            padding-right: 2952px;
            margin-top: 20px;
            background: linear-gradient(to right, rgb(0, 78, 50), rgb(6, 146, 95));
        }

        .slide ul li {
            margin: 20px 0;
        }

        .slide ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            display: block;
        }

        input:checked~.toggle .line:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        input:checked~.toggle .line:nth-child(2) {
            opacity: 0;
        }

        input:checked~.toggle .line:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        @media (max-width: 768px) {
            .slide {
                left: -100%;
                width: 100%;
                transition: left 0.3s ease;
            }

            input:checked~.slide {
                left: 0;
            }

            .toggle {
                left: 100px;
            }
        }

        .box {
            margin-left: 140px;
            margin-right: 180px;
            border-radius: 20px;
            margin-bottom: 30px;
        }

        html {
            scroll-behavior: smooth;
        }

        .text-center {
            margin-top: 6pc;
            font-size: 45px;
            color: rgb(1, 87, 55);
            font-family: Arial, Helvetica, sans-serif;
        }

        .p1 {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            color: grey;
            margin-left: 45pc;
            margin-top: 20px;
        }

        .p1 .fi {
            margin-top: 34px;
            color: rgb(1, 87, 55);
            cursor: pointer;
        }

        .p1 .fi:hover {
            color: black;
        }

        .box1 {
            background: url('img/datejust.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .con1 .h2 {
            margin-left: 7pc;
            font-weight: 700;
            color: white;
            font-size: 50px;
            cursor: pointer;
        }

        .con1 .pb {
            margin-left: 7pc;
            cursor: pointer;
            font-size: 25px;
            color: white;
        }

        .con1 a {
            text-decoration: none;
            color: white;
            margin-left: 7pc;
            font-size: 20px;
        }

        .con1 a:hover {
            color: grey;
        }

        .con1 {
            margin-bottom: 160px;
        }


        .box2 {
            background: url('img/submari.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .con2 .h2 {
            margin-left: 7pc;
            font-weight: 700;
            color: black;
            font-size: 50px;
            cursor: pointer;
        }

        .con2 .pb1 {
            margin-left: 7pc;
            cursor: pointer;
            font-size: 25px;
            color: black;
        }

        .con2 a {
            text-decoration: none;
            color: black;
            margin-left: 7pc;
            font-size: 20px;
        }

        .con2 a:hover {
            color: grey;
        }

        .con2 {
            margin-bottom: 160px;
        }

        .box3 {
            background: url('img/gmt2.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box4 {
            background: url('img/daydatereal.jpg') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box5 {
            background: url('img/r1.jpg') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box6 {
            background: url('img/oyster.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box7 {
            background: url('img/yatch.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box8 {
            background: url('img/deepsa.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box9 {
            background: url('img/dweller.jpd.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box10 {
            background: url('img/r13.jpg') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .content1 {
            text-align: center;
        }

        .content1 h1 {
            font-size: 90px;
            color: white;
            font-weight: 700;
        }

        .content1 h3 {
            margin-top: 200px;
            font-variant: small-caps;
            color: white;
            font-size: xx-large;
            letter-spacing: 0.2em;
            unicode-bidi: isolate;
        }

        .new {
            margin-top: 14pc;
            text-align: center;
            color: white;
            font-weight: 600;
            cursor: pointer;
        }

        .new:hover {
            color: grey;
        }

        /* icons */
        .icon {
            fill: white;
            margin-top: 10px;
            flex-direction: row;
            display: inline;
            margin-right: 8px;
        }

        .box-icon {
            fill: white;
        }


        .icon-list {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .icon-list li {
            display: flex;
            align-items: center;
            margin: 0 10px;
            /* Adjust the margin as needed */
        }

        .icon-list a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            /* color: inherit; */
        }

        .icon-list a:hover {
            color: rgb(116, 241, 195);
        }
    </style>
</head>

<body>
    <div class="video-container">
        <video autoplay muted loop id="myVideo">
            <source src="img/rolex-watches-collection-hub-cover-autoplay.webm" type="video/mp4">
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
                        <a href="https://www.google.com/maps/search/rolex+store+in+india/@21.200292,72.8809674,11.36z?entry=ttu">
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
            <h3>the collection</h3>
            <h1>Rolex watches</h1>
        </div>
        <div class="new">
            New Watches 2024 >
        </div>
    </div>
    <div class="box">
        <div class="row">
            <div class="col-md-5">
                <h1 class="text-center">Explore the Rolex <br>Collection</h1>
            </div>
            <div class="p1">
                The Rolex collection offers a wide range of prestigious, <br>high-precision timepieces, from Professional to Classic models to suit any wrist.
                <div class="fi">
                    Find Your Rolex >
                </div>
            </div>
        </div>
    </div>

    <div class="box1">
        <div class="con1">
            <h2 class="h2">Datejust</h2>
            <div class="ml-auto">
                <p class="pb">A Watch For The Dates To Remember</p>
                <a href="datejust.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box2">
        <div class="con2">
            <h2 class="h2">Submariner</h2>
            <div class="ml-auto">
                <p class="pb1">The Supreme Diver's Watch</p>
                <a href="submarinar.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box3">
        <div class="con1">
            <h2 class="h2">GMT-Master II</h2>
            <div class="ml-auto">
                <p class="pb">Two Time-Zones, Two-Colors, Uniquely Iconic</p>
                <a href="#" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box4">
        <div class="con2">
            <h2 class="h2">Day-Date</h2>
            <div class="ml-auto">
                <p class="pb1">A Witness To Some Of History's Most Pivotal Moments</p>
                <a href="#" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box5">
        <div class="con1">
            <h2 class="h2">Cosmograph Daytona</h2>
            <div class="ml-auto">
                <p class="pb">The Chronograph That Made A Watch An Icon</p>
                <a href="#" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box6">
        <div class="con1">
            <h2 class="h2">Oyster Perpetual</h2>
            <div class="ml-auto">
                <p class="pb">Quintessentailly Rolex</p>
                <a href="#" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box7">
        <div class="con2">
            <h2 class="h2">Yacht-Master</h2>
            <div class="ml-auto">
                <p class="pb1">To Keep Your Heading, No Matters The Circumstances</p>
                <a href="#" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box9">
        <div class="con1">
            <h2 class="h2">Sea-Dweller</h2>
            <div class="ml-auto">
                <p class="pb">Citizen of The Deep</p>
                <a href="#" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box8">
        <div class="con1">
            <h2 class="h2">Deepsea</h2>
            <div class="ml-auto">
                <p class="pb">Extream Diver's watches</p>
                <a href="#" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box10">
        <div class="con1">
            <h2 class="h2">Air-King</h2>
            <div class="ml-auto">
                <p class="pb">An Ever-improved Homage To The Pioneers Of The Skies</p>
                <a href="#" class="dislink">Discover Me ></a>
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
        ScrollReveal().reveal('.box, .con1, .con2, .content1', {
            delay: 500,
            origin: 'bottom'
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const favoriteButtons = document.querySelectorAll('.favorite-button');
            const favoritesContainer = document.getElementById('favorites');

            favoriteButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    const box = event.target.closest('.box1');
                    const model = box.dataset.model;
                    toggleFavorite(model, button);
                });
            });

            function toggleFavorite(model, button) {
                const icon = button.querySelector('box-icon');
                const isFavorited = icon.getAttribute('color') === 'red';
                if (isFavorited) {
                    removeFavorite(model);
                    icon.setAttribute('color', 'white');
                } else {
                    addFavorite(model);
                    icon.setAttribute('color', 'red');
                }
            }

            function addFavorite(model) {
                const favoriteItem = document.createElement('div');
                favoriteItem.className = 'favorite-item';
                favoriteItem.innerHTML = `
            <p>${model}</p>
            <button class="remove-favorite-button">Remove</button>
        `;
                favoriteItem.querySelector('.remove-favorite-button').addEventListener('click', () => {
                    favoriteItem.remove();
                    const originalButton = document.querySelector(`.box1[data-model="${model}"] .favorite-button box-icon`);
                    if (originalButton) {
                        originalButton.setAttribute('color', 'white');
                    }
                });
                favoritesContainer.appendChild(favoriteItem);
            }

            function removeFavorite(model) {
                const favoriteItem = Array.from(favoritesContainer.children).find(item => item.querySelector('p').textContent === model);
                if (favoriteItem) {
                    favoriteItem.remove();
                }
            }
        });
    </script>



</body>

</html>