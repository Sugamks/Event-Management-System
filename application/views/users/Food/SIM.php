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
            <h1 style="text-align:center;">South Indian Menu</h1>
            <br>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__7f8a0df8d54db3b9ee317626e2944536a1ba1d94" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__7b7138d1ffeaf53856fb18e9fd158588ea11c15d" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__4ca0177ffd8b38e935e3240076223b26455c56b5" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__430e75bcaeaafe3cae89e1368683d28645e16b93" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__d04a41ce2744a0469d5a2b427c0ee61225b83069" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__80a08d0eaaf21a429c32e6c82bf76d0a2c13b47a" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__80a08d0eaaf21a429c32e6c82bf76d0a2c13b47a" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__963ab505a223e8c572ac86a63ef990631744b123" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__e396924c0720eae9c110e36b6baeea4ccba524aa" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__16486ea4b3c1885d7d11306e2b353dc8bc007d8f" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__b931a40ece5e948221b23c69b992cfafa7cf9dce" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="https://storage.googleapis.com/showmyhall.appspot.com/package_media/package/individual_package/package_index_53/package_pic__762ad2b6ea500ed0fce1bebfd2fe331cb8588f71" class="d-block w-100 h-50" alt="...">
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
                    <span class="keypoint">Starters</span>
                    <p class="description">Gobi Manchurain or Paneer Manchurian</p>
                </li>
                <li>
                    <span class="keypoint">Soups</span>
                    <p class="description">Veg Sweet Corn Soup or any other soup</p>
                </li>
                <li>
                    <span class="keypoint">Main Course</span>
                    <p class="description">Assorted Indian Breads, Different Rice</p>
                </li>
                <li>
                    <span class="keypoint">South Indian</span>
                    <p class="description">Pongal, DOsa</p>
                </li>
                <li>
                    <span class="keypoint">Desserts</span>
                    <p class="description">Dark Chocolate Mousse, Fig and Honey Ice Cream</p>
                </li>
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
                            <input type="text" name="food" value="foo3" class="containerc">
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>

</html>
    