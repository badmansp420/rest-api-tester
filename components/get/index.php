<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REST-API Tester</title>
    <link rel="icon" href="../../assets/image/api.png">
    <!-- BootStrap CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/index.css">
    <!-- For Font Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- <div class="d-flex justify-content-center" style="align-items:center; text-align: center; margin:20%">
        <div class="spinner-border" style="width: 5rem; height: 5rem; color:green;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div> -->

    <!-- As a link -->
    <main>
        <nav class="navbar">
            <div class="container-fluid">
                <img src="../../assets/image/api.png" alt="">
                <a class="navbar-brand" href="../../">REST - API Tester</a>
            </div>
        </nav>
        <div class="container">
            <!-- Top nav bar -->
            <header>
                <!-- <form action="post"> -->
                <ul class="nav">
                    <li class="nav-item active">
                        <a type="submit" class="nav-link" aria-current="page" name="getRequest" id="getRequest"
                            href="#">Get
                            Request <i class="fa-solid fa-arrow-left"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" name="postRequest" id="postRequest">Post Request <i
                                class="fa-solid fa-arrow-right-to-bracket"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="putRequest">Put Request <i
                                class="fa-solid fa-arrow-right-arrow-left"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="deleteRequest">Delete Request <i
                                class="fa-solid fa-trash"></i></a>
                    </li>
                </ul>
                <!-- </form> -->
            </header>
        </div>
        <!-- Form for Data -->
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h2 class="sl-no" id="sl_no">111</h2>
                        <h5 class="card-title" id="st_name">Name...</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary" id="fa_name">Father Name...</h6>
                        <p class="card-text" id="contact">Email..., Ph. No.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="sl-no" id="sl_no">111</h2>
                        <h5 class="card-title" id="st_name">Name...</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary" id="fa_name">Father Name...</h6>
                        <p class="card-text" id="contact">Email..., Ph. No.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="sl-no" id="sl_no">111</h2>
                        <h5 class="card-title" id="st_name">Name...</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary" id="fa_name">Father Name...</h6>
                        <p class="card-text" id="contact">Email..., Ph. No.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="sl-no" id="sl_no">111</h2>
                        <h5 class="card-title" id="st_name">Name...</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary" id="fa_name">Father Name...</h6>
                        <p class="card-text" id="contact">Email..., Ph. No.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="sl-no" id="sl_no">111</h2>
                        <h5 class="card-title" id="st_name">Name...</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary" id="fa_name">Father Name...</h6>
                        <p class="card-text" id="contact">Email..., Ph. No.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="sl-no" id="sl_no">111</h2>
                        <h5 class="card-title" id="st_name">Name...</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary" id="fa_name">Father Name...</h6>
                        <p class="card-text" id="contact">Email..., Ph. No.</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // var key;
            // fetch("http://localhost/rest-api/config/api.php", {
            //     method: "GET",
            //     headers: {
            //         "Content-Type": "application/json"
            //     },
            //     body: JSON.stringify(data)
            // }).then(Response => Response.json())
            //     .then(data => console.log(data.lenght));

            // For text-body-secondary

            fetch('http://localhost/rest-api/config/api.php').then(result => {
                return result.json();
            }).then(key => {
                if (key.status == 'true') {
                    console.log(key.data);
                    const sl_no = document.querySelectorAll("#sl_no");
                    const st_name = document.querySelectorAll("#st_name");
                    const fa_name = document.querySelectorAll("#fa_name");
                    const contact = document.querySelectorAll("#contact");
                    for (i = 0; i < sl_no.length; i++) {
                        sl_no[i].innerText = key.data[i].sl_no;
                        st_name[i].innerText = key.data[i].st_name;
                        fa_name[i].innerText = key.data[i].fa_name;
                        contact[i].innerText = key.data[i].email;
                    }
                    // sl_no.innerText = key.data[0].sl_no;
                    // st_name.innerText = key.data[0].st_name;
                    // fa_name.innerText = key.data[0].fa_name;
                    // contact.innerText = key.data[0].email;
                }

            })
        </script>
    </main>

    <!--  -->


    <!-- Component For Form -->
    <script src="../../assets/js/index.js"></script>
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