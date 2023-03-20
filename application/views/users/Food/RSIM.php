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
            <h1 style="text-align:center;">Royal South Indian Meal</h1>
            <br>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__d1dae148d3d636135976549e88b3f71a8e9f4f9a" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__16be1f80942872d983e5e11cd6ac73600850d5bb" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__279373a3f11443cc5cd44fcd29e821acaca03ab1" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__44127a8c102f4c37d64eb36f68954a6e7d830349" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__8c5536d16b4b3d86972ee0bc6282e38dcd10a8d3" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__1cf87fe01f3ad782fbf9fa0708e6ed6f63ab72b3" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__f33d1b93cefcd709a1fa1541f339cf8e4e9c1412" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__4b14913267e505d5fa04d8ef609ffe17af7c8f32" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__eacce5705dee39261f2a4820f71086916463b778" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__b7a6daaf7ba986127731c432244184d8658c69cb" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__f006f316ae406d6594ed574475d7bd5935ba50c9" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_232/package_pic__5791d61b824f1dd0327a4eee851877ba6f21834e" class="d-block w-100 h-50" alt="...">
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
                <li>Payasam</li>
                <li>Salt</li>
                <li>Pickle</li>
                <li>Papad</li>
                <li>Pallaya</li>
                <li>Kosambari</li>
                <li>Congress masala or Bendi Fry</li>
                <li>
                    <span class="keypoint">Color rice</span>
                    <p class="description">Palav or Biriyani or Ghee Rice or Vegetable Bath or Other Rice Item</p>
                </li>
                <li>Raitha or Chutney</li>
                <li>
                <span class="keypoint">Desserts</span>
                    <p class="description">Bele Holige or Kayi Holige or any other South Indian Sweet</p>
                </li>
                <li>Poori or Akki Roti or Beli Holige or Dosa</li>
                <li>Kurma or Yenagi or Vegetable Curry</li>
                <li>Rice</li>
                <li>Rasam</li>
                <li>Curd</li>
                <li>Pokada or Bhajji or Manchurian</li>
                <li>Beeda</li>
                <li>Banana</li>
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
                            <input type="text" name="food" value="foo1" class="containerc">
                        </div>
                        <div class="container">
                            <input type="date" name="date" cclass="containerc">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
    