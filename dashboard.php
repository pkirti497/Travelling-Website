<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .a{
            background-color:black;
            min-height:100px;
            width:1280px;
        }
        .a1{
            display:flex;
            justify-content:end;
            color:white;
            margin-top:30px;
        }
        .a2{
            background-color:red;
            height:460px;
        }
        ul li a{
            text-decoration:none;
            color:white;
            
        }
        .c{
            margin-top:30px;
        }
        .c1{
            margin-top:40px;
        }
        .c2{
            margin-top:40px;
        }
        .c3{
            margin-top:40px;
        }
        /* .d{
            color:black;
        } */
        .a3{
            background:url('img/img-3.jpg');
            height:460px;
        }
       ul li a:hover{
            color:red;
        }
    </style>
   

</head>
<body>
    <div class="container-fluid">
        <!-- admin  -->
        <div class="row a">
            <div class="col-sm-6">
                <img src="img/c2.gif" alt="">

            </div>
            <div class="col-sm-6 a1">
                <h5 style="margin-top:10px;"><i class="fa fa-sign-out" aria-hidden="true" style="color:white;">
               <a href="index.php" style="text-decoration:none; color:white;">Admin Logout</a></i></h5>     
            </div>
        </div>
        <!-- navbar -->
        <div class="row">
            <div class="col-sm-2 a2">
            <h4><a href="admin.php" style="text-decoration:none;"><i class="fa fa-tachometer" aria-hidden="true" style="color:white;">DASHBOARD</a></i></h4>
                <ul>
                 <li class="c"><a href="index.php"><i class="fa fa-home" aria-hidden="true" style="color:white;">Home</a></i></li>
                 <li class="c1"><a href="map.php"><i class="fa fa-map" aria-hidden="true" style="color:white;">Map</a></i></li>
                 <li class="c2"><a href="news.php"><i class="fa fa-newspaper-o" aria-hidden="true" style="color:white;">News Paper</a></i></li>
                 <li class="c3"><a href="gallery.php"><i class="fa fa-google-wallet" aria-hidden="true" style="color:white;">Gallery</a></i></li>
                 </ul>
            </div>
            <div class="col-sm-10 a3">
                <table class="table table-stripped z">
                    
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Location</th>
                            <th>Guests</th>
                            <th>Arrivals</th>
                            <th>Leaving</th>
                        </tr>
                    
                    <tbody>
                    <?php
                    $con=mysqli_connect('localhost','root','','book_db');
                    $query="select * from book_form";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>

                       <tr>
                    
                    
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><?php echo $row['location'];?></td>
                        <td><?php echo $row['guests'];?></td>
                        <td><?php echo $row['arrivals'];?></td>
                        <td><?php echo $row['leaving'];?></td> 

                       </tr>
                    </tbody>
                </table>
                <?php
                };
                ?>
                
            </div>
        </div>
    </div>
    
</body>
</html>