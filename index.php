<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube</title>
    <link rel="icon" href="homepage/icon/youube.ico">
    <link rel="stylesheet" href="homepage/styles/Thumbnail.css">
    <link rel="stylesheet" href="homepage/styles/Navigation-bar.css">
    <link rel="stylesheet" href="homepage/styles/General.css">
    <link rel="stylesheet" href="homepage/styles/Sidebar.css">
    <link rel="stylesheet" href="homepage/styles/Nav-Sub-nav.css">
    <link rel="stylesheet" href="homepage/styles/youtube-studio.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body> 

    <!--                                 ?HEADER                              -->
    <div class="header">   
        <div class="left"> 
            <div class="youtube-menu">
                <img src="homepage/imgsource/hamburger-menu.svg" alt="youtube-menu">
            </div>
            <div class="youtube-logo">
                <img src="homepage/imgsource/youtube-logo.svg" alt="youtube-logo">
                <div class="philippines">PH</div>
            </div>
        </div>
        <div class="mid">
            <input class="Search-bar" type="text" placeholder="Search">
            <button class="youtube-search">
                <img class="search" src="homepage/imgsource/search.svg" alt="">
                <span class="search-tooltip">Search</span>
            </button>
            <button class="youtube-voice">
                <img class="voice" src="homepage/imgsource/voice-search-icon.svg" alt="">
                <span class="search-tooltip">Search with your voice</span>
            </button>
        </div>
        <div class="right">
            <div class="upload-container">
                <div class="upload-background">
                    <a href="studio.php">    <!--  HEREEEEEEEEEEEEEEEEEEEEEEEEE -->
                        <img class="upload" src="homepage/imgsource/upload.svg" alt="">
                    </a>
                </div>
                <div class="search-tooltip">Upload</div>
            </div>
            <div class="notification-container">
                    <div class="notification-background">
                        <img class="notification" src="homepage/imgsource/notifications.svg" alt="">
                        <div class="notification-count">9+</div>
                    </div>
                    <div class="search-tooltip">Notifications</div>
            </div>
            <div class="profile-background">
                <img class="channel" src="homepage/profiles/Admin/yellow.jpg" alt="">
            </div>
        </div>
    </div> 

    

    <!--                              ?CHANNEL-BODY                              -->
    <div class="youtube-channel-body hide" id="studio-main-show">
    

        <img class="yc-banner" src="homepage/banner2.jpg" alt="">

        <div class="bottom-banner-container">
            <div class="yc-stats">
                <div class="yc-container">
                    <img class="ys-image" src="homepage/profiles/Admin/yellow.jpg" alt="">
                    <div class="ys-icon">
                        <div class="yi-name">YamaiKaguya</div>
                        <div class="yi-stats">
                            <div>@yamaikaguya5550</div>
                            <div>&nbsp;·&nbsp</div>
                            <div>42 subscribers</div>
                            <div>&nbsp;·&nbsp</div>
                            <div>11</div>
                            <div>&nbsp;</div>
                            <div>videos</div>
                        </div>
                        <div class="yi-description">
                            <div class="yd-description">Hello, please do subscribe ty</div>
                            <img class="yd-icon" src="homepage/svgs/rightanglearrow.svg" alt="">
                        </div>
                        <div class="channel-buttons">
                            <div>Customize channel</div>
                            <div>Manage videos</div>
                        </div>
                    </div>
                </div>
                
                <div class="channel-option">
                    <div class="co-home">Home</div>
                    <div class="co-videos">Videos</div>
                    <div class="co-shorts">Shorts</div>
                    <div class="co-live">Live</div>
                    <div class="co-playlist">Playlists</div>
                    <div class="co-community">Community</div>
                    <img class="co-icon" src="homepage/svgs/search.svg" alt="">
                </div>

            </div>
        </div>

        <div class="channel-video-container">

            <div class="channel-for-you">For You</div>
            <div class="channel-youtube-videos" id="youtube-video-video">
                <!-- <div>
                    <img src="homepage/thumbnails/attention.jpg" alt="">
                    <div class="channel-youtube-title">OSU!: Kodama .Kotama HDDT</div>
                    <div class="channel-youtube-stats">27 views · 2 months ago</div>
                </div> -->
            </div>
        </div>
    </div>

    <!--                           ?SUB-NAVIGATION-BAR                      -->
    <div class="Sub-nav" id="studio-main-hide">
        <div class="buttons-container">
            <div class="All" style="background-color: white; color: black;">All</div>
            <div class="All">New to you</div>
            <div class="All">Music</div>
            <div class="All">Gaming</div>
            <div class="All">Valorant</div>
            <div class="All">Mixes</div>
            <div class="All">Audio</div>
            <div class="All">K-Pop</div>
            <div class="All">Guitar Chords</div>
            <div class="All">Indie pop music</div>
            <div class="All">Live</div>
            <div class="All">News</div>
            <div class="All">Computer programming</div>
            <div class="All">Bass Guitar</div>
            <div class="All">League of Legends</div>
            <div class="All">RPGs</div>
            <div class="All">Animated Films</div>
            <div class="All">Recently Uploaded</div>
            <div class="All">Watched</div>
        </div>
        <button class="buttonds-shadow"><img class="buttonds-arrow" src="homepage/svgs/rightanglearrow.svg" alt=""></button>
    </div>


    <!--                                ?SIDEBAR                            -->
    <div class="side-bar">
        <div class="sidebar-first-group">
            <div class="button-container" style="background-color: rgb(37, 37, 37); border-radius: 10px;">
                <img class="button-icon" src="homepage/svgs/Home/home.svg" alt="">
                <div class="button-text">Home</div>
            </div>
            <div class="button-container">
                <img class="button-icon" src="homepage/svgs/Home/shorts.svg" alt="">
                <div class="button-text">Shorts</div>
            </div>
            <div class="button-container">
                <img class="button-icon" src="homepage/svgs/Home/subscriptions.svg" alt="">
                <div class="button-text">Subscriptions</div>
            </div>

            <div class="you-container">
                <div>
                    <div class="button-container">
                        <div class="you-header">You</div>
                        <img class="you-arrow" src="homepage/svgs/rightanglearrow.svg" alt="">
                    </div>
                </div>

                <div>
                    <div class="button-container">
                        <img class="button-icon" src="homepage/svgs/You/Yourchannel.svg" alt="">
                        <div class="button-text">Your channel</div>
                    </div>
                    <div class="button-container">
                        <img class="button-icon" src="homepage/svgs/You/History.svg" alt="">
                        <div class="button-text">History</div>
                    </div>
                    <div class="button-container">
                        <img class="button-icon" src="homepage/svgs/You/Playlist.svg" alt="">
                        <div class="button-text">Playlists</div>
                    </div>
                    <div class="button-container">
                        <img class="button-icon" src="homepage/svgs/You/Yourvideos.svg" alt="">
                        <div class="button-text">Your videos</div>
                    </div>
                    <div class="button-container">
                        <img class="button-icon" src="homepage/svgs/You/Watchlater.svg" alt="">
                        <div class="button-text">Watch later</div>
                    </div>
                    <div class="button-container">
                        <img class="button-icon" src="homepage/svgs/You/Likevideos.svg" alt="">
                        <div class="button-text">Liked videos</div>
                    </div>
                </div>
            </div> 
        </div>

        <div class="subscription special">
            <div class="sub-header-text">Subscriptions</div>
            <div class="sub-header-buttons-container" id="subscriptions-js">
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/angle-down.svg" alt="">
                    <div class="button-text">Show 868 more</div>
                </div>
            </div>
        </div>

        <div class="explore">
            <div class="sub-header-text">Explore</div>
            <div class="sub-header-buttons-container">
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Explore/Trending.svg" alt="">
                    <div class="button-text">Trending</div>                
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Explore/Music.svg" alt="">
                    <div class="button-text">Music</div>                
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Explore/Movies.svg" alt="">
                    <div class="button-text">Movies</div>
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Explore/Gaming.svg" alt="">
                    <div class="button-text">Gaming</div>
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Explore/News.svg" alt="">
                    <div class="button-text">News</div>
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Explore/Sport.svg" alt="">
                    <div class="button-text">Sports</div>
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Explore/Fashion.svg" alt="">
                    <div class="button-text">Fashion & Beauty</div>
                </div>
            </div>
        </div>

        <div class="Morefromyoutube">
            <div class="sub-header-text">More from YouTube</div>
            <div class="sub-header-buttons-container">
                <div class="button-container ">
                    <img class="button-icon" src="homepage/svgs/MoreFromYoutube/youtubepremium.svg" alt="">
                    <div class="button-text">YouTube Premium</div>                
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/MoreFromYoutube/Youtubestudio.svg" alt="">
                    <div class="button-text">YouTube Studio</div>                
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/MoreFromYoutube/Youtubemusic.svg" alt="">
                    <div class="button-text">YouTube Music</div>
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/MoreFromYoutube/Youtubekids.svg" alt="">
                    <div class="button-text">YouTube Kids</div>
                </div>
            </div>
        </div>

        <div class="two-side-border">
            <div class="sub-header-buttons-container">
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Settings/Settings.svg" alt="">
                    <div class="button-text">Settings</div>                
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Settings/History.svg" alt="">
                    <div class="button-text">Report history</div>                
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Settings/Help.svg" alt="">
                    <div class="button-text">Help</div>
                </div>
                <div class="button-container">
                    <img class="button-icon" src="homepage/svgs/Settings/Feedback.svg" alt="">
                    <div class="button-text">Send feedback</div>
                </div>
            </div>
        </div>

        <div class="About-texts">
            <span class="About-text">About</span>
            <span class="About-text">Press</span>
            <span class="About-text">Copyright</span><br>
            <span class="About-text">Contact us</span>
            <span class="About-text">Creators</span><br>
            <span class="About-text">Advertise</span>
            <span class="About-text">Developers</span>
        </div>
        <div class="About-texts2">
            <span class="About-text">Terms</span>
            <span class="About-text">Privacy</span>
            <span class="About-text">Policy & Safety</span><br>
            <span class="About-text">How YouTube works</span><br>
            <span class="About-text">Test new features</span>
        </div>
        <div class="About-texts Copyright">© 2024 Google LLC</div>

    </div>

    <!--                               ?THUMBNAIL                           -->
<div class="Video-Grid" id="videos-js">
</div>

<script src="homepage/scripts/youtube-video.js"></script>
<script src="homepage/scripts/general.js"></script>
<script src="homepage/scripts/subscriptions.js"></script>
<script src="homepage/scripts/thumbnail.js"></script>
<script src="homepage/scripts/server.js"></script>

</body>
</html> 
