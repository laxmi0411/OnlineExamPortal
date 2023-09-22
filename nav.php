<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sen&display=swap">

    <title>navigation</title>
    <!-- <style>
        .brand-logo,
        .brand-info,
        .user {
            align-items: center;
        }
        .navbar{
            background-color: #568aed;
        }
    </style> -->
</head>

<body>

    <style>
        .menu{
  display: flex;
  justify-content: center;}

 
 .dropdown{
   padding: 20px 40px;
   display: flex;
   justify-content: center;
   align-items: center;
   color: white;
   background: #C06162;
   background: #34495e;
   position: relative;
   font-size: 18px;
   perspective: 1000px;
   z-index: 100;
   background: #2980b9 ;
  cursor: pointer;
    
 }
 .dropdown:hover{
   
    background: #2980b9 ;
     cursor: pointer;}

   .dropdown:hover> .dropdown_menu li{
    display: block;
   }
 .dropdown_menu{
   position: absolute;
   top: 100%;
   left: 0;
   width: 100%;
   perspective: 1000px;
   z-index: -1;}
   .dropdown_menu li{
    display: none;
    color: white;
    background-color: #34495e;
    padding: 10px 20px;
    font-size: 16px;
    opacity: 0;
   }
    .dropdown_menu li:hover{
      background-color: #2980b9;
   
 }

 /* Menu as a whole animated */
.dropdown:hover .dropdown_menu--animated{
    display: block;
}
.dropdown_menu--animated{
    display: none;
}
.dropdown_menu--animated li{
      display: block;
      opacity: 1;
    }

.dropdown_menu-6{
    animation: growDown 300ms ease-in-out forwards;
    transform-origin: top center;
}

@keyframes growDown {
    0% {
        transform: scaleY(0)
    }
    80% {
        transform: scaleY(1.1)
    }
    100% {
        transform: scaleY(1)
    }
}


    </style>



<ul class="menu">
    <li class="dropdown dropdown-6">
      Scale Down
      <ul class="dropdown_menu dropdown_menu--animated dropdown_menu-6">
        <li class="dropdown_item-1">Item 1</li>
        <li class="dropdown_item-2">Item 2</li>
        <li class="dropdown_item-3">Item 3</li>
          <li class="dropdown_item-4">Item 4</li>
          <li class="dropdown_item-5">Item 5</li>
      </ul>
    </li>
</ul>










    <!-- <div class="container">
        <div class="brand-logo d-flex ">

            <a class="navbar-brand" href="#"><img src="./assets/media/nav-brand.png"></a>

            <div class="brand-info d-flex">

                <div class=" user d-flex pe-3">
                    <i class=" fa-solid fa-circle-plus  pe-2"></i>
                    <a href="#">BOOK AN APPOINTMENT</a>
                </div>

                <div class="user d-flex pe-3 ">
                    <i class=" fa-solid fa-phone pe-2 "></i>
                    <p>+91 123 456 678</p>
                </div>

                <div class=" user btn btn-warning hvr-sweep-to-right d-flex pe-3">
                    <i class="fa-solid fa-location-dot text-dark pe-2 "></i>
                    <a href="#">VIEW LOCATION</a>

                </div>
            </div>



        </div>

        <a href="#"><i class="fa-solid fa-user"></i>
        <p class="user-text  ms-3">Register / Login</p></a>


    </div>--/





    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            THERIPIST
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            GALLERY
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            FEATURE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            BLOG
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"></a></li>
                            <li><a class="dropdown-item" href="#">LOCATION</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            CONTECT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">APPOINTMENT FORM</a></li>
                            <li><a class="dropdown-item" href="#">LOCATION</a></li>

                        </ul>
                    </li>

                </ul>

            </div>

        </div>

    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
         
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
   
    <!-- Option 1: Bootstrap Bundle with Popper -->
 
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>  -->
</body>

</html>

   