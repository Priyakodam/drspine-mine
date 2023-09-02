<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Website Title</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include FontAwesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        /* Reset CSS */
        ul,
        li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        /* Your existing styles */
        .pt-3 {
            font-size: 17px;
            text-align: justify;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: #333;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        body,
        html {
            overflow-x: hidden;
        }


        #content {
            font-size: 18px;
            min-width: 800px;
            /* Adjust the width as needed */
        }

        #content .col-4 {
            display: inline-block;
            width: 28%;
            /* This will make each column take one-third of the width */
            padding: 5px;
            vertical-align: top;
        }
    </style>

</head>

<body>

    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2 col-md-2 col-sm-12" style="margin-top: 2% !important;">
                        <a href="index.php" style="margin-right: -20px;"> <!-- Add negative margin-right here -->
                            <img src="img/logo.png" alt="Logo" >
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                            <i class="fas d-block d-md-none small-menu fa-bars"></i>
                        </button>
                    </div>

                    <div id="menu" class="col-lg-9 col-md-9 d-none d-md-block nav-item collapse" style="padding-right:40px;">
                        <ul>
                            <li style="font-size:18px;"><a href="index.php">Home</a></li>
                            <li style="font-size:18px;"><a href="about.php">About Us</a></li>




                            <li class="dropdown" style="font-size:18px;">
                                <a href="services.php">Services</a>
                                <div class="dropdown-content" id="content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="backpain.php" class="dropdown-item">Back Pain</a>
                                                <a href="neckpain.php" class="dropdown-item">Neck Pain</a>
                                                <a href="sciatica.php" class="dropdown-item">Sciatica</a>
                                                <a href="physiotherapy.php" class="dropdown-item">Physiotherapy</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="migraine.php" class="dropdown-item">Migraine</a>
                                                <a href="coccydynia.php" class="dropdown-item">Coccydynia</a>
                                                <a href="spinal_decompression.php" class="dropdown-item">Spinal Decompression</a>
                                                <a href="spinalcanel.php" class="dropdown-item">Spinal Canal Stenosis</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="disc_buldge.php" class="dropdown-item">Disc Bulge and Slipped Disc</a>
                                                <a href="piriformis_syndrome.php" class="dropdown-item">Piriformis Syndrome</a>
                                                <a href="fibromyalgia.php" class="dropdown-item">Fibromyalgia</a>
                                                <a href="kyphosis.php" class="dropdown-item">Kyphosis</a>
                                                <a href="pelvic_girdle_pain.php" class="dropdown-item">Pelvic Girdle Pain</a>
                                                <a href="sacrolic_joint_dysfunction.php" class="dropdown-item">Sacroiliac Joint Dysfunction</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li style="font-size:18px;"><a href="homeservices.php">Home Services</a></li>
                            <!-- 
                        <li style="font-size:23px;"><a href="about.php">About Us</a></li> -->
                            <li class="dropdown" style="font-size:18px;">
                                <a href="">Gallery</a>
                                <div class="dropdown-content" style="font-size:18px;">
                                    <a href="photo.php">Photo Gallery</a>
                                    <a href="video.php">Video Gallery</a>

                                </div>
                            </li>
                            <li style="font-size:18px;"><a href="contact.php">Contact Us</a></li>


                        </ul>
                    </div>
                    <div class="col-sm-2 col-lg-1  d-none d-lg-block appoint" style="font-size:23px;">
                        <a class="btn btn-success" href="book_appointment.php">Book an Appointment</a>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- Include Bootstrap JS (jQuery is required by Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>