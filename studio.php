<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Channel content - YouTube</title>
    <link rel="icon" href="studio/icon/youube.ico">
    <link rel="stylesheet" href="studio/styles/nav.css">
    <link rel="stylesheet" href="studio/styles/sidebar.css">
    <link rel="stylesheet" href="studio/styles/genereal.css">
    <link rel="stylesheet" href="studio/styles/sub-nav.css">
    <link rel="stylesheet" href="studio/styles/modelupload.css">
    <link rel="stylesheet" href="studio/styles/processing.css">
    <link rel="stylesheet" href="studio/styles/channel-dashboard/performance.css">
    <link rel="stylesheet" href="studio/styles/channel-dashboard/analytic.css">
    <link rel="stylesheet" href="studio/styles/channel-dashboard/creator.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.cdnfonts.com/css/youtube-sans');
    </style>

</head>
<body>


<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
        $uploadDir = "homepage/UPLOADED-IMAGES/";
        $uploadFile = $uploadDir . basename($_FILES["image"]["name"]);

        $imageType = exif_imagetype($_FILES["image"]["tmp_name"]);
        $allowedTypes = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
        if (!in_array($imageType, $allowedTypes)) {
            echo "Only JPG, JPEG, and PNG files are allowed.";
            exit;
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
            // echo "Image Goods.";
        } else {
            echo "Image No Goods";
        }

        // Retrieve the title from the uploaded file name
        $title = pathinfo($_FILES["image"]["name"], PATHINFO_FILENAME);
        // $description = isset($_POST["description"]) ? $_POST["description"] : "";

        $servername = "localhost";
        $username = "Winter";
        $password = "082133";
        $dbname = "youtubedatabase";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute the SQL statement to insert the image path and title into the database
        $stmt = $conn->prepare("INSERT INTO videos (imgSrc, videoTitle) VALUES (?, ?)");
        $stmt->bind_param("ss", $uploadFile, $title);
        $stmt->execute();

        // echo "Image and Title inserted successfully."; 

        $stmt->close();
        $conn->close();
        
    } else {
        echo "Image upload failed.";
    }
?>

        <!--                           ?NAVIGATION BAR                      -->

    <div class="navigation">

        <div class="menu">
            <div class="menu-container">
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" ><path d="M21,6H3V5h18V6z M21,11H3v1h18V11z M21,17H3v1h18V17z"></path></svg>
            </div>
            <div class="img-container">
                <img src="studio/svgs/YouTubeStudio.svg" alt="">
            </div>
        </div>

        <div class="super-container">
            <div class="input-container">
                <img class="search-icon" src="studio/svgs/Search-icon.svg" alt="">
                <input class="search-bar" type="text" name="" id="" placeholder="Search across your channel">
            </div>

            <div class="create-container">
                
                <div class="help-container">
                    <img class="help-icon" src="studio/svgs/Help-icon.svg" alt="">
                </div>
                <div class="create-profile-container">
                    <img class="create-icon" src="studio/svgs/Create-icon.svg" alt="">
                    <p class="create">CREATE</p>
                </div>
                <div class="profile-container">
                    <img id="profile-butlon" class="profile" src="studio/profile/yellow.jpg" alt="">


                    <div class="account-menu hide">
                        <div class="account-menu-container">
                            <img class="nav-profile-icon" src="studio/profile/yellow.jpg" alt="">
                            <div class="profile-at-container">
                                <div class="profile-name">YamaiKaguya</div>
                                <div class="profile-at">@yamaikaguya5550</div>
                            </div>
                        </div>

                        <div class="profile-buttons-container">
                            <a id="your-channel" class="profile-your-channel">
                                <img src="studio/svgs/profile-svg/you-channel.svg" alt="">
                                <div>Your channel</div>
                            </a>
                            <a href="index.php" class="profile-your-channel"> <!--  HEREEEEEEEEEEEEEEEEEEEEEEEEE -->
                                <img src="studio/svgs/profile-svg/youtube.svg" alt="">
                                <div>YouTube</div>
                            </a>
                            <div class="profile-your-channel">
                                <img src="studio/svgs/profile-svg/switch.svg" alt="">
                                <div>Switch account</div>
                                <img src="studio/svgs/profile-svg/angle.svg" alt="">
                            </div>
                            <div class="profile-your-channel">
                                <img src="studio/svgs/profile-svg/sign-out.svg" alt="">
                                <div>Sign out</div>
                            </div>
                        </div>

                        <div class="profile-footer">
                            <div class="profile-appearance">
                                <img src="studio/svgs/profile-svg/half-moon.svg" alt="">
                                <div class="appearance">Appearance: Device theme</div>
                                <img src="studio/svgs/profile-svg/angle.svg" alt="">
                            </div>
                            <div class="profile-appearance">
                                <img src="studio/svgs/profile-svg/feedback.svg" alt="">
                                <div>Send feedback</div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>

        </div>



    </div>
        <!--                              ?SIDEBAR                          -->

    <div class="sidebar">

        <div class="nav-profile">
                <img class="nav-profile-img" src="studio/profile/yellow.jpg" alt="">
                <div class="nav-profile-info">
                    <p class="nav-channel">Your channel</p>
                    <p class="nav-info">YamaiKaguya</p>
                </div>
        </div>

        <div class="nav-dashboard">
            <div class="dashboard-buttons dashboard-opened">
                <img class="dashboard-dashboard" src="studio/svgs/dashboard/dashboard.svg" alt="">
                <p>Dashboard</p>
            </div>
            <div class="dashboard-buttons">
                <img class="dashboard-dashboard" src="studio/svgs/dashboard/content.svg" alt="">
                <p>Content</p>
            </div>
            <div class="dashboard-buttons">
                <img class="dashboard-dashboard" src="studio/svgs/dashboard/analytics.svg" alt="">
                <p>Analytics</p>
            </div>
            <div class="dashboard-buttons">
                <img class="dashboard-dashboard" src="studio/svgs/dashboard/comments.svg" alt="">
                <p>Comments</p>
            </div>
            <div class="dashboard-buttons">
                <img class="dashboard-dashboard" src="studio/svgs/dashboard/subtitles.svg" alt="">
                <p>Subtitles</p>
            </div>
            <div class="dashboard-buttons">
                <img class="dashboard-dashboard" src="studio/svgs/dashboard/copyright.svg" alt="">
                <p>Copyright</p>
            </div>
            <div class="dashboard-buttons">
                <img class="dashboard-dashboard" src="studio/svgs/dashboard/earn.svg" alt="">
                <p>Earn</p>
            </div>
            <div class="dashboard-buttons">
                <img class="dashboard-dashboard" src="studio/svgs/dashboard/customization.svg" alt="">
                <p>Customization</p>
            </div>
            <div class="dashboard-buttons">
                <img class="dashboard-dashboard" src="studio/svgs/dashboard/auto-library.svg" alt="">
                <p>Auto Library</p>
            </div>
        </div>

        <div class="nav-bottom">
            <div class="nav-settings">
                <img class="settings-icon" src="studio/svgs/Settings-icon.svg" alt="">
                <p>Settings</p>
            </div>
            <div class="nav-feedback">
                <img class="feedback-icon" src="studio/svgs/Feedback-icon.svg" alt="">
                <p>Send feedback</p>
            </div>
        </div>

    </div>

        <!--                       ?MAIN BODY & BODY BODY                   -->
    <div class="main-body">                       

        <div class="sub-nav">
                <div class="channel-dashboard">
                    Channel dashboard
                </div>
                <div class="sub-nav-buttons">   
                    <div class="upload">
                        <img id="open-button" src="studio/svgs/sub-nav/Upload.svg" alt="">
                    </div>
                    <div class="live">
                        <img src="studio/svgs/sub-nav/live.svg" alt="">
                    </div>
                    <div class="post">
                        <img src="studio/svgs/sub-nav/post.svg" alt="">
                    </div>
                </div>
        </div>

        <div class="body-body">                         

            <div class="body-latest-video">
                <div class="dashboard-title">
                    Latest video performance
                </div>
                <div class="dashboard-image">
                    <img src="studio/images/lethal.jpg" alt="">
                </div>
                <div class="dashboard-stats">
                    <div class="three-container">
                        <div class="stats">
                            <img class="stats-icon" src="studio/svgs/other-svgs/stats.svg" alt="">
                            <div class="number">26</div>
                        </div>
                        <div class="comment">
                            <img class="comment-icon" src="studio/svgs/other-svgs/commnet.svg" alt="">
                            <div class="number">0</div>
                        </div>
                        <div class="like">
                            <img class="like-icon" src="studio/svgs/other-svgs/like.svg" alt="">
                            <div class="number">0</div>
                        </div>
                    </div>
                    <div class="up-arrow">
                        <img src="studio/svgs/other-svgs/arrow.svg" alt="">
                    </div>
                </div>
                <div class="header-line"></div>
                <div class="hours">First 62 days 5 hours</div>
                <div class="stats-2">Ranking by views</div>
                <div class="stats-2">Views</div>
                <div class="stats-2">Impressions click-through rate</div>
                <div class="stats-2">Average view duration</div>
                <div class="inv-line"></div>
                <div class="analytics">GO TO VIDEO ANALYTICS</div>
                <div class="comments">SEE COMMENTS (0)</div>
            </div>

            <div class="channel-analytics">
                <div class="analytics-title">
                    Channel analytics
                </div>
                <div class="views-watch">
                    <div class="subscribers-subs">Current subscribers</div>
                    <div class="subscribers-count">42</div>
                    <div class="subscribers-spacing"></div>
                    <div class="analytics-summary">
                        <div class="summary-title">Summary</div>
                        <div class="summary-days">Last 28 days</div>
                    </div>
                    <div class="views-container">                    
                        <div class="a-watch-time">Views</div>
                        <div class="views-container-container">
                            <div>54</div>
                            <img class="analytics-check" src="studio/check.svg" alt="">
                        </div>
                    </div>
                    <div class="watch-container">
                        <div class="a-watch-time">Watch time (hours)</div>
                        <div class="views-container-container">
                            <div>0.4</div>
                            <div>—</div>
                        </div>
                    </div>
                    <div class="spacing"></div>
                    <div class="top-video">Top videos</div>
                    <div class="last-hours">Last 48 hours · Views</div>
                    <div class="top-video-container">
                        <div class="kodama">OSU!: Kodama .Kotama HDDT</div>
                        <div class="seven">Osu! 7 -seven- -TV SIZE - [Insane] FC (99.02)</div>
                        <div class="mafumafu">Osu! mafumafu x Amatsuki - nonfantasy [airin's insane]...</div>
                    </div>
                    <div class="space-again"></div>
                    <div class="go-to">GO TO CHANNEL ANALYTICS</div>
                </div>
            </div>

            <div class="creator">
                <div class="creator-title">
                    Creator Insider
                </div>
                <div class="creator-img-container">
                    <img class="creator-img" src="studio/images/thumbnail.jpeg" alt="">
                </div>
                <div class="podcast">Podcasts on YouTube</div>
                <div class="benefit">The benefits of discovery at the episode level, the <br>
                    advantages of going video, the YouTube Music app, and <br> what AI might mean for the future
                </div>
                <div class="watch-youtube">WATCH ON YOUTUBE</div>
            </div>

        </div>
    </div>

        <!--                   ?UPLOAD VIDEO & VIDEO UPLOADED               -->
        <div class="model-background hide">

            <div class="model-container" id="modeling">
                <div class="model-header" >
                    <div class="model-title">Upload videos</div>
                    <div class="feedback-close">
                        <img class="model-feedback" src="studio/svgs/model/feedback.svg" alt="">
                        <img class="model-close" id="close-button" src="studio/svgs/model/close.svg" alt="">
                    </div>
                </div>
                <div class="model-upload-container">
                    <img class="model-upload" src="studio/upload.svg" alt="">
                    <div class="model-drag">Drag and drop video files to upload</div>
                    <div class="model-private">Your videos will be private until you publish them.</div>
                    <form id="uploadForm" method="post" enctype="multipart/form-data">
                        <input type="file" name="image" accept="image/*" id="upload-file">
                    </form>
                    <label class="model-upload-button" for="upload-file">SELECT FILES</label>
                    <div class="model-footer">
                        <div class="model-footer-first-element">By submitting your videos to YouTube, you acknowledge that you agree to YouTube's <a href="">Terms of Service</a> and <a href="">Community Guidelines</a>.</div>
                        <div class="model-footer-second-element">Please be sure not to violate others' copyright or privacy rights. <a href="">Learn more</a></div>
                    </div>
                </div>
            </div>

            <div class="video-processing-container hide" id="modelingtwo">
                <div class="video-processing-title">Video processing</div>
                <div class="private-video">Your private video is still processing standard definition (SD).</div>
                <div class="uploaded-video-container">
                    <img src="studio/images/lethal.jpg" alt="">
                    <div class="uploaded-video-title">CSS Tutorial – Full Course for Beginners</div>
                </div>

                <div class="video-processing-footer">
                    <div class="video-processing-icons">
                        <img src="studio/svgs/video-processing/videoprocessing.svg" alt="">
                        <img src="studio/svgs/video-processing/sd.svg" alt="">
                        <img src="studio/svgs/video-processing/check.svg" alt="">
                    </div>
                    <div class="video-processing-text">Upload complete ... Processing will begin shortly</div>
                </div>
                <div type="button" class="video-processing-close close-button">Close</div>
            </div>

        </div>

    <script src="studio/script/close-script.js"></script>
</body>
</html>
