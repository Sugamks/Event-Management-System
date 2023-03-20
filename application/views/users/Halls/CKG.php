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
        <?php echo form_open('Users/ordckg'); ?>
            <h1>Chikkamma Kenge Gowda Convention</h1>
            <h3>Magadi Road</h3>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__80d422b02602c476d8c316965f9a2afe42a5cff1" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__b46fafb6d5beba6c30728a98d19753712d25fa74" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__463e7870c44ceff6ec299633b9269c6eceadc8c8" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__51931f811d25a59f1c2455a2fafbc9ed91909bf0" class="d-block w-100 h-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__c5a6aafe0712f5713f7be4b3453bd6ec761d96c5" class="d-block w-100 h-50" alt="...">
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
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Overview</a>
                </li>
                <li class="nav-item">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Photos
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Photos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__c5a6aafe0712f5713f7be4b3453bd6ec761d96c5" class="d-block w-100 h-50" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__51931f811d25a59f1c2455a2fafbc9ed91909bf0" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__463e7870c44ceff6ec299633b9269c6eceadc8c8" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__b46fafb6d5beba6c30728a98d19753712d25fa74" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="http://34.120.136.253/hall_media/hall_index_331/hall_pic__80d422b02602c476d8c316965f9a2afe42a5cff1" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                    </div>
                </div>
                </div>
                </li>
                <li class="nav-item">
                <a class="btn" data-bs-toggle="modal" href="" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#review">
                    Review
                    </button>
                    <div class="modal fade" id="review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <h4>Anusha Kiran</h4>
                                    <p>In a wedding, the venue is always expected to be messed up or untidy. I had been to one of my cousin's wedding at Anubhandana NK (Nadaprabhu Kempegowda) Convention Center. But after being there, I was astonished by the cleanliness they had maintained at the wedding venue.</p>
                            </div>
                            <div class="container">
                                <h4>Rajatha</h4>
                                    <p>Had the excellent experience with Anubhandana NK Convention Center, the manager at the venue is very cooperative and even made us taste food in order to make selections from the menu. The quality of food is highly maintained and whatever we selected for our wedding was delicious in taste. The main stage for reception looked beautiful, sitting arrangement was very well arranged. Overall, the hall is very well designed, the ambiance is amazing, the staff was very helpful and the food was great.</p>
                            </div>
                            <div class="container">
                                <h4>Rajeshwari</h4>
                                    <p>First things first, I have seen very few managements take such good care of a property and Anubhandana NKCC is one such. It could have been a five or ten-year-old building but I could not tell as everything looked new and blingy. </p>
                            </div>
                            <div class="container">
                                <h4>Lochan Gowda</h4>
                                    <p>The South Indian wedding that I attended of my nephew at Anubhandana NKCC was perfect in one word. With beautiful interiors and a fairly new construction, the decorator hardly had much to do to make the place look pretty</p>
                            </div>
                            <div class="container">
                                <h4>Arun Kumar</h4>
                                    <p>We booked this venue months in advance because it looked new but we werent sure how great the amenities would be. So we were pleasantly surprised by the arrangements and professional staff at Anubhandana NKCC. </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
                <li class="nav-item">
                <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Menu</a>
                </li>
            </ul>
        </div>
        <div class="container">
            <h4 class="und">Highlights</h4>
            <ol class="spl">
                <li>Cooking vessels for up to 2000 Pax.</li>
                <li>Three commercial gas cylinders are complimentary.</li>
                <li>The package is inclusive of cleaning charges.</li>
                <li>Food Type: Pure Veg</li>
                <li>Free Generator for 1 hour.</li>
            </ol>  
        </div>
        <div class="container">
        <h4 class="und">Amenities</h4>
        <ol class="spl">
            <li> Air Conditioned</li>
            <li>Power Backup</li>
            <li>Kitchen</li>
            <li>Restroom</li>
            <li>Dance Floor</li>
            <li>Elevator</li>
            <li>Sound System</li>
            <li>Mike</li>
            <li>Purohit</li>
            <li>Photographer</li>
            <li>Videographer</li>
            <li>Florist</li>
            <li>Choreographer</li>
            <li>Astrologer</li>
            <li>Caterer</li>
            <li>Lighting</li>
            <li>Orchestra</li>
            <li>Security Guard</li>
            <li>External Catering</li> 
        </ol>
        </div>
        <div class="container">
            <h4 class="und">Restrictions</h4>
            <ol class="spl">
                <li> Smoking</li>
                <li> Alcohol</li>
                <li>Loud Music</li>
                <li>Firecrackers</li>
                <li>Pets</li>
            </ol>  
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="und">Address</h4>
                    <text>No.379/11, Magadi Ring Road, Junction, Magadi Main Road, Bangalore - 560091</text>
                    <br>
                    <br>
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#gmaps">
                    Get on google maps
                    </button>
                    <div class="modal fade" id="gmaps" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Google Maps</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.0429053376847!2d77.51879161464441!3d12.904962690899628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3fa66510b395%3A0x2fbf8de1b144f827!2sChikkamma%20Kenge%20Gowda%20Convention%20Inn!5e0!3m2!1sen!2sin!4v1642149484195!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="modal-footer">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="und">Contact</h4>
                    <p>1234567890</p>
                </div>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Book the Hall
        </button>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Book the Hall</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="container">
                    <label for="unam" class="text-center"></label>
                    <input type="text" name="uname" placeholder="Enter Username" class="containerc">
                </div>
                <div class="container">
                <select name="pro" class="form-select" aria-label="">
                    <option selected>Click this to select a event</option>
                    <option value="pgm1">Marriage</option>
                    <option value="pgm2">Pooja</option>
                    <option value="pgm3">Birthday</option>
                    <option value="pgm4">Baby Shower</option>
                    <option value="pgm5">Naming Ceremony</option>
                </select>
                </div>
                <div class="container">
                    <input type="date" name="date">
                </div>
            <div class="modal-footer">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <?php echo form_submit('submit', 'Submit Post!');?>
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
    