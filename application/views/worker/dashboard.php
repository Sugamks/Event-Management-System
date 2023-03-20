<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <style>
        .tbl_full
        {
            width:100%;
        }
        table tr th
        {
            border-bottom:1px solid black;
            padding:1%;
            text-align:left;

        }
        table tr td{
            padding:1%;
        }
        .nav-link{
            color: black;
        }
        h1{
            padding-top: 10px;
            color: whitesmoke;
            text-align: center;
            font-family: cursive;
            font-weight: bold;
        }
        h3{
            color: whitesmoke;
            text-align: center;
            font-family: cursive;
        }
        .containerc{
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
        padding-top: 10px;
        }
        .container{
        padding-top: 20px;
        }
        body{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.3)), url(../assets/back2.png);
        background-repeat: no-repeat;
        background-position: absolute;
        background-size: cover;
        }
        .nav-link{
        
        color: whitesmoke;
        font-weight: 700;
        }
        </style>
</head>
<body>
    <div class="container">
        <h1>Aishwarya Creations Worker Page</h1>
        <h3>Marriages are made in Heaven</h3>
        <h3>we arrage to celebrate it on Earth</h3>
    </div>
    <div class="containerc">
    <ul class="nav nav-pills nav-fill">
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Food Orders</a>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Orders and dates</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <table class="tbl_full">
                        <tr>
                            <th>User Name</th>
                            <th>Orderd Food package</th>
                            <th>Ordered Date</th>
                        </tr>
                        <?php
                        $conn=mysqli_connect('localhost','root','','mini');
                        $sql="SELECT * FROM food_user";
                        $res=mysqli_query($conn,$sql);
                        if($res==TRUE)
                        {
                            $rows=mysqli_num_rows($res);
                            if($rows>0)
                            {
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $user_id=$rows["user_id"];
                                    $food_package_id=$rows["food_package_id"];
                                    $date=$rows["date"];
                                    ?>

                                    
                                    <tr>
                                    <td><?php echo $user_id;?></td>
                                    <td><?php echo $food_package_id;?></td>
                                    <td><?php echo $date;?></td>
                                    </tr>
                                    <?php

                                }
                            }
                        }
                        ?>
                        
                    </table>
                </div>
            </div>
        </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#Backdrop">Program Orders</a>
        <div class="modal fade" id="Backdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Orders and dates</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <table class="tbl_full">
                        <tr>
                            <th>User Name</th>
                            <th>Program Ordered</th>
                            <th>Ordered Date</th>
                            <th>Convention Center</th>
                        </tr>
                        <?php
                        $conn=mysqli_connect('localhost','root','','mini');
                        $sql="SELECT * FROM program_user";
                        $res=mysqli_query($conn,$sql);
                        if($res==TRUE)
                        {
                            $rows=mysqli_num_rows($res);
                            if($rows>0)
                            {
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $program_id=$rows["program_id"];
                                    $user_id=$rows["user_id"];
                                    $date=$rows["date"];
                                    $place_id=$rows["place_id"];
                                    
                                    ?>

                                    
                                    <tr>
                                    <td><?php echo $user_id;?></td>
                                    <td><?php echo $program_id; ?>
                                    <td><?php echo $date;?></td>
                                    <td><?php echo $place_id;?></td>
                                    
                                    </tr>
                                    <?php

                                }
                            }
                        }
                        ?>
                        
                    </table>
                </div>
            </div>
        </div>
        </div>
    </li>
    </ul>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
    </html>