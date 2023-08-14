<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REST-API Tester</title>
    <link rel="icon" href="assets/image/api.png">
    <!-- BootStrap CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- For Font Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- As a link -->
    <nav class="navbar">
        <div class="container-fluid">
            <img src="assets/image/api.png" alt="">
            <a class="navbar-brand" href="#">REST - API Tester</a>
        </div>
    </nav>
    <div class="container">
        <!-- Top nav bar -->
        <header>
            <!-- <form action="post"> -->
            <ul class="nav">
                <li class="nav-item">
                    <a type="submit" class="nav-link" aria-current="page" name="getRequest" id="getRequest"
                        href="components/get/">Get
                        Request <i class="fa-solid fa-arrow-left"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" name="postRequest" id="postRequest">Post Request <i
                            class="fa-solid fa-arrow-right"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="putRequest">Put Request <i class="fa-solid fa-pen"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="deleteRequest">Delete Request <i class="fa-solid fa-trash"></i></a>
                </li>
            </ul>
            <!-- </form> -->
        </header>
    </div>
    <!-- Form for Data -->
    <div class="container">

    </div>

    <div class="wrapper">
        <svg>
            <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                Home
                <!-- Protik Sarkar -->
            </text>
        </svg>
        <svg>
            <text x="50%" y="50%" dy=".35em" text-anchor="middle">
                Welcome To REST - API Tester
                <!-- Protik Sarkar -->
            </text>
        </svg>
    </div>


    <!-- Component For Form -->
    <script src="assets/js/index.js"></script>
    <!-- BootStrap JS File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Add On BootStrap JS File -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
    <!-- For Font Aswom -->
    <script src="https://kit.fontawesome.com/e57af93536.js" crossorigin="anonymous"></script>
</body>

</html>