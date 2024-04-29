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
    <div class="arrow ">
        <a class=" p-3 rounded-md font-bold fixed-bottom  "href="">^</a>
    </div>

    <!-- <div class="container"> -->
        <nav class=" navbar sticky-top navbar-expand-md ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('storage/logos/neodlogo.png') }}" alt="Bootstrap" width="auto" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end  " id="navbarTogglerDemo01">
                    <div class="navbar-nav ">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Services</a>
                        <a class="nav-link" href="#">Contant</a>

                    </div>
                </div>

            </div>
        </nav>
    <!-- </div> -->
    <div class="background">
        <h1 class="language">Welcome to our website!</h1>
        <h5 class="information">Our website lets you focus on what you do best –<br> creating great apps and user experiences – while we<br> take care of the rest.</h5>
        <div class="text-left ">
            <button class="text-capitalize">contant us</button>

        </div>


    </div>


    <div class="about">
        <h1>About us</h1>
        <h5>who we are</h5>
    </div>
    <div class="about-format">
        <div class="about-img">
            <img src="http://cmsa.org.np/images/oldhand.jpg" alt="">

        </div>
        <div class="about-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium dignissimos delectus, quasi odio debitis aspernatur ut, nostrum a sint assumenda dicta nemo optio minima eligendi distinctio! Dolor obcaecati numquam laborum? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum voluptatum libero unde, dolor sapiente corrupti nostrum, adipisci quam nulla iure rem commodi omnis illo. Ipsam eligendi velit nam sequi corporis.</p>

        </div>

    </div>
    <div class=" service ">

        <div class="text-center fw-bold common-title">
            <h2 class="common-heading">Wherever you want to go, we'll get you there forward.</h2>
            
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-lg-4 col-md-12">
                <div class="text-centre card-box rounded-2 p-5 shadow p-3 mb-5 ">
                    <img src="https://th.bing.com/th/id/OIP.2Ss53l6KNkFKDEttGeFFIQAAAA?rs=1&pid=ImgDetMain" alt="" class="image-fluid" width="200px">
                    <h5 class="my-3 ">Make more money for your app</h5>
                    <p class="mb-5">When combining with in-app purchases, mobile app advertising works as an additional strategy to make money for your app. In fact, eCPMs can be as high as a -0 for some ad units.</p>

                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#services" class="icon-span rounded-circle d-flex align-item-center "></a>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-centre card-box rounded-2 p-5">
                    <img src="https://cdn.business2community.com/wp-content/uploads/2014/02/social-media-best-practices.jpg" alt="" class="image-fluid" width="200px">
                    <h5 class="my-3">Improve user experience</h5>
                    <p class="mb-5">Seamlessly integrate mobile app ads into your game loop to create a positive experience for your users. For example, offer users rewards in exchange for watching or interacting with ads at specific points in the app lifecycle.</p>

                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#services" class="icon-span rounded-circle d-flex align-item-center "></a>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-centre card-box rounded-2 p-5">
                    <img src="https://th.bing.com/th/id/R.476d7b29a6150349d98ae037f9b52656?rik=6y0arkiqz%2fOvIA&pid=ImgRaw&r=0" alt="" class="image-fluid" width="200px">
                    <h5 class="my-3">Increase in-app purchases</h5>
                    <p class="mb-5">Drive in-app purchases with ad units that work as part of your in-app economy. Users who engage with rewarded ads, for example, are up to 6x more likely to make an in-app purchase.</p>

                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#services" class="icon-span rounded-circle d-flex align-item-center justify-content-center"></a>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="text-centre card-box rounded-2 p-5">
                    <img src="https://th.bing.com/th/id/R.476d7b29a6150349d98ae037f9b52656?rik=6y0arkiqz%2fOvIA&pid=ImgRaw&r=0" alt="" class="image-fluid" width="200px">
                    <h5 class="my-3">Increase in-app purchases</h5>
                    <p class="mb-5">Drive in-app purchases with ad units that work as part of your in-app economy. Users who engage with rewarded ads, for example, are up to 6x more likely to make an in-app purchase.</p>

                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#services" class="icon-span rounded-circle d-flex align-item-center justify-content-center"></a>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="text-centre card-box rounded-2 p-5">
                    <img src="https://th.bing.com/th/id/R.476d7b29a6150349d98ae037f9b52656?rik=6y0arkiqz%2fOvIA&pid=ImgRaw&r=0" alt="" class="image-fluid" width="200px">
                    <h5 class="my-3">Increase in-app purchases</h5>
                    <p class="mb-5">Drive in-app purchases with ad units that work as part of your in-app economy. Users who engage with rewarded ads, for example, are up to 6x more likely to make an in-app purchase.</p>

                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#services" class="icon-span rounded-circle d-flex align-item-center justify-content-center"></a>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="text-centre card-box rounded-2 p-5">
                    <img src="https://th.bing.com/th/id/R.476d7b29a6150349d98ae037f9b52656?rik=6y0arkiqz%2fOvIA&pid=ImgRaw&r=0" alt="" class="image-fluid" width="200px">
                    <h5 class="my-3">Increase in-app purchases</h5>
                    <p class="mb-5">Drive in-app purchases with ad units that work as part of your in-app economy. Users who engage with rewarded ads, for example, are up to 6x more likely to make an in-app purchase.</p>

                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#services" class="icon-span rounded-circle d-flex align-item-center justify-content-center"></a>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </div>

                </div>
            </div>



        </div>


    </div>
    <section class="common-section mb-5 pt-5">
        <div class="container text-center common-title fw-bold">
            <h2 class="common-heading">What client say <br>About us</h2>
            <hr class="w-25 mx-auto bold">
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://th.bing.com/th?id=OIP.IrUBHhdMo6wWLFueKNreRwHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Mr.Ram Prasand</h5>
                                        <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="mt-3">
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="far fa-star"></i></i>



                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://th.bing.com/th?id=OIP.IrUBHhdMo6wWLFueKNreRwHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Mr.Ram Prasand</h5>
                                        <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="mt-3">
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="far fa-star"></i></i>



                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://th.bing.com/th?id=OIP.IrUBHhdMo6wWLFueKNreRwHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Mr.Ram Prasand</h5>
                                        <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="mt-3">
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="fa-solid fa-star"></i></i>
                                            <i><i class="far fa-star"></i></i>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="https://www.amchamvietnam.com/wp-content/uploads/2017/11/Nguyen-Thuy-Hang.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
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


    </section>

    </div>
    <section class="common-section bg-color contact-section text-black">


        <div class="container text-center fw-bold common-title ">
            <h2 class="common-heading text-black ">Contact Us</h2>
            <hr class="w-25 mx-auto">
        </div>

        <div class="container ">
            <div class="form-section  mx-auto">
                <form>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="first-name" class="form-label">First name</label>
                                <input type="text" class="form-control" id="first-name" placeholder="First name" aria-label="First name" required>
                            </div>
                            <div class="col">
                                <label for="last-name" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="last-name" placeholder="Last name" aria-label="Last name" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="E-mail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="InputEmail1" required placeholder="Enter your email">
                        <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="Message" class="form-label">Message</label>
                        <textarea class="form-control" id="FormControlTextarea1" required placeholder="Enter your message " rows="3"></textarea>
                    </div>

                    <button type="submit" class="button-type">Submit</button>
                </form>
            </div>
        </div>


    </section>


    <footer class="main-footer-section">
        <div class="contact-details">
            <div class="px-5">
                <div class="row g-0">
                    <div class="col-lg-4 ">
                        <div class="contact-div p-5 d-flex flex-column justify-content-center align-items-center">
                            <div class="icon-div d-flex justify-content-center align-items-center rounded-circle mb-3">
                                <i class=" icon-span fa-solid fa-phone"></i>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 ">
                        <div class="contact-div p-5 d-flex flex-column justify-content-center align-items-center">
                            <div class="icon-div d-flex justify-content-center align-items-center rounded-circle mb-3">
                                <i class=" icon-span fa-solid fa-square-envelope"></i>


                            </div>

                        </div>
                    </div>


                </div>
            </div>

            <div class="footer-section py-5 text-white">
                <div class="containers">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-6">
                            <div class="footer-links">
                                <h4 class="text-white mt-5 mb-3">About</h4>
                                <ul class="text-light-grey list-unstyled d-flex flex-column gap-2">
                                    <li>Our Story</li>
                                    <li>Our Story</li>
                                    <li>Our Story</li>
                                    <li>Our Story</li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-6">
                            <div class="footer-links">
                                <h4 class="text-white mt-5 mb-3">About</h4>
                                <ul class="text-light-grey list-unstyled d-flex flex-column gap-2">
                                    <li>Our Story</li>
                                    <li>Our Story</li>
                                    <li>Our Story</li>
                                    <li>Our Story</li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-6">
                            <div class="footer-links">
                                <h4 class="text-white mt-5 mb-3">About</h4>
                                <ul class="text-white  list-unstyled d-flex flex-column gap-2">
                                    <li>Our Story</li>
                                    <li>Our Story</li>
                                    <li>Our Story</li>
                                    <li>Our Story</li>

                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="containers">


                <div class="row">
                    <div class=" col-lg-8  col-12 ">
                        Copyright ©2024 All rights reserved. This template is made with by <span">Surakshya</span>
                    </div>
                    <div class="col-md-4 col-12  ">
                        <div class="d-flex justify-content-center justify-content-lg-end gap-5 mt-lg-0 mt-3">
                            <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3">
                                <i class="fa-brands fa-facebook"></i>
                            </div>
                            <div class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3">
                                <i class="fa-brands fa-linkedin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://kit.fontawesome.com/5afc3c7c1e.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>