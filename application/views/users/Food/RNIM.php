<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <style>
        h1{
            text-align: center;
            color: darkcyan;
            text-decoration: dashed underline;
            font-style: italic;
            font-family: cursive;
        }
        h3{
            text-align: center;
            color: darkcyan;
            font-style: italic;
            font-family: cursive;
        }
        .container{
            padding-top: 20px;
        }
        .containerc{
            float: center;
            width: 450px;
        }
        .btn{
            color:blue;
        }
        .und{
            color: #fc0f56;
            text-transform: uppercase;
            text-shadow: 2px 2px lightgray;
        }
        ol.spl{
            columns: 2;
            -webkit-columns: 2;
            -moz-columns: 2;
            list-style-type: lower-roman;
        }
        .text-center{
            padding-left: 100px;
            
        }
        p{
            font-weight: 500;
        }
    </style>
    <body style="background-color: lightgoldenrodyellow">
        <div class="container">
            <?php echo form_open('Users/ordfood'); ?>
            <h1 style="text-align:center;">Royal North Indian Meal</h1>
            <br>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__585ac8ee251bf66b311d51f25853b8f181c0c526" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__3dcaa426c2f99f1d862d49da50e63957aeb96767" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__279373a3f11443cc5cd44fcd29e821acaca03ab1" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__7da9a4eab2a87bc9f892239eeeb142980acf8a8c" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__9d83aaf07ef8252eff9f11505154ef3feea898a0" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__b00206c785a988a7d7b67ac98f576c8ba2c2cf51" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__0e45d56774da5f3753dcac964e6ad2842e25bcf9" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__1e8ae5726fbffd8405052431a05c4b24fe8d066c" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__1e8ae5726fbffd8405052431a05c4b24fe8d066c" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__1e8ae5726fbffd8405052431a05c4b24fe8d066c" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__1e8ae5726fbffd8405052431a05c4b24fe8d066c" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_233/package_pic__1e8ae5726fbffd8405052431a05c4b24fe8d066c" class="d-block w-100 h-50" alt="...">
                </div>    
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        <div class="container">
            <h4 class="und">Highlights</h4>
            <ol class="spl">
                <li>
                    <span class="keypoint">Welcome Drink</span>
                    <p class="description">Mint or Watermelon or Lime or Jaljera with Lime or Kokam</p>
                </li>
                <li>
                    <span class="keypoint">Starters</span>
                    <p class="description">Gobi Manchurain or Paneer Manchurian</p>
                </li>
                <li>
                    <span class="keypoint">Soups</span>
                    <p class="description">Veg Sweet Corn Soup or any other soup</p>
                </li>
                <li>Onion Pokada or Bhajji</li>
                <li>French Fries</li>
                <li>Rumali Roti or Poori or Akki Roti</li>
                <li>Paneer Butter Masala</li>
                <li>Veg kurma</li>
                <li>Veg basmati dum briyani or palav</li>
                <li>Raitha</li>
                <li>Rice</li>
                <li>Rasam</li>
                <li>Papad</li>
                <li>Curd</li>
                <li>Ice cream</li>
                <li>Water</li>
            </ol>  
            <div class="row">
            <div class="d-grid gap-2 col-4 mx-auto">
                <a href="http://localhost/mini/users/food" class="btn btn-outline-info">Click to go back</a>
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Book the Food Package
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Booking</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="container">
                            <label for="uname" class="text-center"></label>
                            <input type="text" name="uname" placeholder="Enter Username" class="containerc">
                        </div>
                        <div class="container">
                            <input type="text" name="food" value="foo2" class="containerc">
                        </div>
                        <div class="container">
                            <input type="date-time local" name="date" class="containerc">
                        </div>
                        <div class="container">
                            <?php echo form_submit('submit', 'Submit Package');?>
                            <?php echo form_error('date'); ?>
                            <?php echo form_error('uname'); ?>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
    