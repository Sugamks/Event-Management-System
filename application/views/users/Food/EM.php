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
            <h1 style="text-align:center;">Economic Meal</h1>
            <br>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__cf1f6ccab504c847150d159797e11a96f9f3456a" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__ac633fab641a5a914752ae3b686678068552e9e5" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__2e4dc57514cd1ebe8cd31024d5f53022cb5c7c81" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__da3b41189143f66aed5b9c4fd3a8a3cac1dbbaaa" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__c94aa991b6330cedebcf808d9a0cb13746849017" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__0a960c9157950b1410293d3a0d08ac71c0591f68" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__a1f7c2f53b1c7652f5263c7d7ec4d260a87a8eb8" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__f957704749255a387e9db77435cb1c73baba65e8" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__564ba9f88bce7704f7ee322bfc7508aebe45d564" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__556c1d15dbc8b6deb3c6fde85fdfa93192856969" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__556c1d15dbc8b6deb3c6fde85fdfa93192856969" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_49/package_pic__4a94d5286ad9af3041757adc73c6c4ddf3577f26" class="d-block w-100 h-50" alt="...">
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
                <li>Rumali Roti</li>
                <li>Veg Gravy</li>
                <li>Veg Dum Biryani</li>
                <li>Dahi Vada</li>
                <li>Dal Fry</li>
                <li>Veg Curry</li>
                <li>Veg Sabzi</li>
                <li>Kaju Pakoda</li>
                <li>Raitha</li>
                <li>Rice</li>
                <li>Rasam</li>
                <li>Papad</li>
                <li>Dry Jamun</li>
                <li>Salad</li>
                <li>Pickle</li>
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
                            <input type="text" name="food" value="foo4" class="containerc">
                        </div>
                        <div class="container">
                            <input type="date" name="date" class="containerc">
                            <?php echo form_error('date'); ?>
                        </div>
                        <div class="container">
                            <?php echo form_submit('submit', 'Submit Package');?>
                        </div>
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