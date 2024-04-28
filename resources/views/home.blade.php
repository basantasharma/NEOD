<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>NEOD</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container">
        <nav class=" navbar navbar-expand-lg  ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('storage/logos/neodlogo.png') }}" alt="Bootstrap" width="auto" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end  " id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Services</a>
                        <a class="nav-link" href="#">Contant</a>

                    </div>
                </div>

            </div>
        </nav>
    </div>
    <div class="background">
        <h1 class="language">Welcome to our website!</h1>
        <h5 class="information">Our website lets you focus on what you do best –<br> creating great apps and user experiences – while we<br> take care of the rest.</h5>
        <div class="text-left ">
            <button class="text-capitalize">contant us</button>

        </div>


    </div>


    <div class="about">
        <h1>About us</h1>
        <h5>-who we are</h5>
    </div>
    <div class="about-format">
        <div class="about-img">
            <img src="http://cmsa.org.np/images/oldhand.jpg" alt="">

        </div>
        <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium dignissimos delectus, quasi odio debitis aspernatur ut, nostrum a sint assumenda dicta nemo optio minima eligendi distinctio! Dolor obcaecati numquam laborum? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum voluptatum libero unde, dolor sapiente corrupti nostrum, adipisci quam nulla iure rem commodi omnis illo. Ipsam eligendi velit nam sequi corporis.</p>

        </div>

    </div>
    <div class="service">
       
        <h1 class="paragraph">Our Service</h1>
        <hr class="w-25 mx-auto">
        <div class="grid">
            <div class=""></div>


        </div>

    </div>
    <footer class="down">


    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>