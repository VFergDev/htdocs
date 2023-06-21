<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertarias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="flex-container">
        <section >
            <header class="flex-section">
                <h2><a href="index.html" class="logo">Vertarias <span class="logo-black">Black</span> </a></h2>
                <ul class="navbar">
                    <li><a class="active" href="#">Gallery</a></li>
                    <li><a class="active" href="book/booking.html">Booking</a></li>
                    <li><label for="toggle" class="show-btn menu-link">Join</label></li>
                </ul>                  
            </header>
            <input type="checkbox" id="toggle">
            <div class="wrapper gradient">
                <label for="toggle" class="cancel-btn"><i class="fas fa-times"></i></label>
                <div class="wrapper-icon"><i class="far fa-envelope"></i></div>
                <div class="content-subscribe">
                    <div class="header-subscribe">Become a fan</div>
                    <p class="subscribe">Subscribe to our mailing list and get exclusive access</p>
                </div>
                <form action="./subscribe/subscribe.php" method="POST">
                    <div class="field">
                        <input type="text" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="field btn">
                        <button type="submit" name="send" value="Subscribe">Subscribe</button>
                    </div>
                </form>
                <div class="text">We don't share your information.</div>
            </div>
            <div class="content">
                <div class="info">
                    <h2><span>Life</span> is <span>Dance</span></h2>
                    <div class="description">
                        <p><span class="pronouns">they/he</span><br>
                           <span class="title">Artist</span> /<span class="title"> Film Director</span> / <span class="title">Choreographer</span> /
                           <span class="title">Performer</span><br>
                           1 of 3 member of <a href="https://www.instagram.com/essemmvee/?igshid=YmMyMTA2M2Y%3D">@essemmvee</a><br>
                           Download “VERT” on all platforms 
                           <div class="vert-icons">
                            <a href="https://open.spotify.com/track/7sn2rfaso0e0e2b8g7Kagf"><i class="fa-brands fa-spotify"></i></a>
                            <a href="https://music.apple.com/us/album/vert-ep/1602389196"><i class="fa-brands fa-apple"></i></a>
                            <a href="https://soundcloud.com/vertarias-black"><i class="fa-brands fa-soundcloud"></i></a>
                            <a href="https://music.amazon.com/artists/B09H2CD4SQ/vertarias"><i class="fa-brands fa-amazon"></i></a>
                        </div>
                    </p>
                    </div>
                </div>
            </div>
            <div class="media-icons">
                <a href="https://www.instagram.com/vertarias/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.youtube.com/watch?v=HNfAHvb6h_s"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.tiktok.com/@vertariasblack"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </section>
    </div>
    <script src="./subscribe/subscribe.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
