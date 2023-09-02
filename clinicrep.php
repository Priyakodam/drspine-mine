<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
<style>


/* Banner style start for all 3 views */
@media only screen and (max-width: 767px) {
    .carousel-inner .carousel-item img {
        height: 200px;
        max-width: 100%;
    }

    .carousel-caption h2 {
        font-size: 18px;
        padding-top: 20%;

    }
}

.carousel-caption {
    display: grid;
    place-items: center;
    height: 100%;
    text-align: center;

}

.carousel-caption h2 {
    max-width: 80%;

    margin: 0;

    padding-top: 35px;

    color: white;

}


.overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity here */
z-index: 1; /* Place overlay above the image */
}


/* Banner style start end for all 3 views*/
</style>

<body>
<div class="container-fluid p-0">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="overlay"></div>
            <img src="img/careerbanner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <h2>Clinic Representative</h2>
            </div>

        </div>
    </div>
</div>



<div class="container pt-3">
    <div class="row">
        <center>
        <div class="col-md-12">
            <img src="img/Dr.-Spine-Team-1.png" alt="">
        </div>
        </center>
    </div>
</div>
</body>

</html>
    </body>

</html>