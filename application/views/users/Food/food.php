<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <style>
        h1{
            text-align: center;
            color: whitesmoke;
            font-family: cursive;
            font-style: italic;
            text-decoration: underline;
        }
        h5{
            text-align: center;
            color: #26282b ;
            font-family: cursive;
            font-style: italic;
        }
        a{
            text-align: center;
            color: #0d00ff;
        }
        .container{
            padding-top: 20px;
        }
        .card-text{
            font-weight: 700;
            font-size: large;
        }
        .card-body{
            text-align: center;
        }
        .ha{
            opacity: 0.0;
        }
        .containerc{
            float: center;
            width: 450px;
        }
        body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.3)), url(../assets/food.jpg);
        background-repeat: no-repeat;
        background-position: absolute;
        background-size: cover;
        }
    </style>
    <body style="background-color: lightgoldenrodyellow">
        <div class="container">
            <H1>Food Packages</H1>
        </div>
        <div class="container">
        <?php echo form_open('Users/ordfood'); ?>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img src="http://34.120.136.253/package_media/package/individual_package/package_index_232/package_pic__ed758c2270ea2a92a3a985bdc728e7d53311b7e6" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Royal South Indian Meal</h5>
                            <p class="card-text" >&#x20b9; 275</p>
                            <a href="http://localhost/mini/users/Rsim" class="btn btn-outline-danger" type="">Click To Know More</a>    
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="http://34.120.136.253/package_media/package/individual_package/package_index_233/package_pic__e22c2426eebe7050a38343fca12dcbebbf4fa928" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Royal North Package</h5>
                        <p class="card-text">&#x20b9; 275</p>
                    <a href="http://localhost/mini/users/Rnim" class="btn btn-outline-danger" type="">Click To Know More</a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="http://34.120.136.253/package_media/package/individual_package/package_index_351/package_pic__9a41da409d1549a792998c4c79d4066893cc812d" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">South Indian Menu</h5>
                        <p class="card-text">&#x20b9; 275</p>
                        <a href="http://localhost/mini/users/Sim" class="btn btn-outline-danger" type="">Click To Know More</a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="http://34.120.136.253/package_media/package/individual_package/package_index_49/package_pic__1e1d320e8246954481fc8c38ed6362796dd6edc5" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Economical Meal</h5>
                        <p class="card-text">&#x20b9; 275</p>
                        <a href="http://localhost/mini/users/Em" class="btn btn-outline-danger" type="">Click To Know More</a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="http://34.120.136.253/package_media/package/individual_package/package_index_352/package_pic__22bea2368215581b07609e79dcd5e481d369e7bb" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">North Indian Menu</h5>
                        <p class="card-text">&#x20b9; 275</p>
                        <a href="#" class="btn btn-outline-danger" type="">Click To Know More</a>
                    </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card">
                    <img src="http://34.120.136.253/package_media/package/individual_package/package_index_50/package_pic__d1af6d8a9a2f88ea97d0ee3dbc4ee1d863a155b2" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Classic Meal</h5>
                        <p class="card-text">&#x20b9; 275</p>
                        <a href="#" class="btn btn-outline-danger" type="">Click To Know More</a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="http://34.120.136.253/package_media/package/individual_package/package_index_55/package_pic__5eb05cc215865acad98cea6dbc9c559d830cc2d8" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Indo-Continential Meal 1</h5>
                        <p class="card-text">&#x20b9; 275</p>
                        <a href="#" class="btn btn-outline-danger" type="">Click To Know More</a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="http://34.120.136.253/package_media/package/individual_package/package_index_57/package_pic__884f5dddb63ef47946cfe96fb5ef4beeaa0b096e" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Indo-Continential Meal 2</h5>
                        <p class="card-text">&#x20b9; 275</p>
                        <a href="#" class="btn btn-outline-danger" type="">Click To Know More</a>
                    </div>
                    </div>
                </div>
            </div>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
    </body>
</html>