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

    <!-- <div class="container"> -->
    <!-- <nav class=" navbar sticky-top navbar-expand-md ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <div class="d-flex justify-content-end  ">
                    <div class="navbar-nav ">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Services</a>
                        <a class="nav-link" href="#">Contant</a>

                    </div>
                </div>
            </div>

        </div>
    </nav> -->
    <nav class="navbar navbar-expand-md bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('storage/logos/neodlogo.png') }}" alt="Bootstrap" width="auto" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">NEOD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- </div> -->
    <div class="background mb-8 ">
        <h1 class="language text-warning ">Welcome to NEOD!</h1>
        <h4 class="information">
            Step into NEOD ! <br> where your vision meets our expertise, forging pathways to success.🌟
        </h4>

    </div>



    <div class="row bg-dark text-white">
        <div class="col mb-4">
            <h1 class="text-center">About us</h1>
            <h5 class="text-center">who we are</h5>
            <!-- <hr class="border border-primary border-2  opacity-75 "> -->
        </div>
    </div>
    <div class="row mb-4 bg-dark text-white justify-content-center">
        <div class="col-6 col-lg-6 col-md-6 p-4 text-center">
            <img width="75%" class="rounded-5" src="https://www.nepalec.edu.np/storage/upload/22/12/1670239503about-banner.png" alt="">
        </div>
        <div class="col-8 col-lg-6 col-md-6 p-4">
            <div class="about-content ">
                <p class="show-dis">Welcome to NEOD!
                    where expertise meets innovation to drive your business forward.
                    At NEOD, we specialize in providing strategic consultancy services tailored to meet the unique needs of your organization. With a team of seasoned professionals boasting years of experience across various industries, we are committed to delivering actionable insights and sustainable solutions that propel your business to new heights.<br> You're seeking guidance on strategy development, operational optimization, or organizational transformation, NEOD is here to support you at every stage of your journey. Let us be your trusted advisor as you navigate the complexities of today's business landscape and unlock new opportunities for growth.

                    Contact us today to learn more about how we can help your organization thrive.</p>
            </div>
            <div >
                <button class="button rounded">Contant us</button>

            </div>



        </div>
    </div>
    <div class=" container mt-10">

        <div class="text-center fw-bold  mb-4">
            <h2>Wherever you want to go, we'll get you there forward.</h2>
            <hr class="border border-primary border-1  opacity-75">

        </div>
    </div>
    <div class="container mt-5">
        <div class="row px-5 ">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card  shadow p-3 mb-3 bg-body-tertiary rounded ">
                    <img src="https://th.bing.com/th/id/R.2791354819a69655329906ad66a9417e?rik=TEpvaQTwTselwA&pid=ImgRaw&r=0" class="card-img-top object-fit-none " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Study in Australia</h5>
                        <p class="card-text show-less  lh-sm">Australia is a contemporary, democratic nation with excellent healthcare, top-notch educational institutions, and a unique geography. Studying in Australia is particularly a terrific option for students to advance their education and professional opportunities.</p>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4   ">
                <div class="card  shadow p-3 mb-3 bg-body-tertiary rounded">
                    <img src="https://th.bing.com/th/id/OIP.yVCLdzTyHr92-bXrFtZfUQHaE8?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Study in Canada</h5>
                        <p class="card-text show-less lh-sm ">Studying in Canada is an intelligent investment for Nepalese students looking for a quality higher education and brighter career prospects. Canada is known for its diversity and affordable high quality education system that has made it the first choice for many international students all over the world.</p>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ">
                <div class="card shadow p-3 mb-3 bg-body-tertiary rounded">
                    <img src="https://wonderfulengineering.com/wp-content/uploads/2015/04/UK-wallpaper.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Study in UK</h5>
                        <p class="card-text show-less">The UK offers numerous reasons to study there, especially as an international student, which should be carefully considered before any commitment is made. We have enlisted some of the reasons why we study in the UK from Nepal.It is first choice for many international students all over the world.</p>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 ">
                <div class="card  shadow p-3 mb-3 bg-body-tertiary rounded">
                    <img src="https://media.istockphoto.com/photos/statue-of-liberty-and-american-flag-under-blue-sky-picture-id474645270?k=6&m=474645270&s=612x612&w=0&h=fDW16Nv5lzUxWJxArRT7Tov7Xpf12vVxLYUURrpCYwY=" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Study in USA</h5>
                        <p class="card-text show-less">The United States of America is one of the most popular study destinations around the world. These reports make it even more enticing for Nepalese students to make studying in the USA their primary choice. However, it becomes extremely important to understand various aspects of studying in the USA. </p>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4  ">
                <div class="card  shadow p-3 mb-3 bg-body-tertiary rounded">
                    <img src="https://th.bing.com/th/id/OIP.vdU815pvB4HBkC-fByJiZwHaE8?w=612&h=409&rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title ">Study in New Zealand</h5>
                        <p class="card-text show-less">Excellent teaching methods, well-equipped labs, and well-qualified teachers—these are some of the best answers to Why study in New Zealand? New Zealand, a picturesque country providing a safe environment for international students along with some of the world's most recognised universities.</p>
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 ">
                <div class="card shadow p-3 mb-3 bg-body-tertiary rounded">
                    <img src="https://th.bing.com/th/id/OIP.nvTez52E2Y2VAD8wUHlXYAHaEK?w=1920&h=1080&rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Study in Europe</h5>
                        <p class="card-text show-less">For centuries, education in Europe has been seen as a traditional experience that leads to modern career opportunities. On this page, we will explore what it is like to pursue higher education in Europe. Check out the best places to study in Europe, the cheapest places to study in Europe.</p>
                    </div>

                </div>
            </div>

        </div>


    </div>




    </div>
    <section class="common-section contact-section text-black">


        <div class="container text-center fw-bold common-title ">
            <h2 class="common-heading text-black ">Contact Us</h2>
            <hr class="border border-primary border-2  opacity-75">

        </div>

        <div class="container">
            <div class="form-section   mx-auto ">
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
                        <div id="emailHelp" class="form-text text-red ">*Required</div>
                    </div>
                    <div class="mb-3">
                        <label for="Message" class="form-label">Message</label>
                        <textarea class="form-control" id="FormControlTextarea1" required placeholder="Enter your message " rows="3"></textarea>
                    </div>

                    <button type="submit" class="button rounded mb-5">Submit</button>
                </form>
            </div>
        </div>


    </section>


    <!-- <footer class="main-footer-section text-white"> -->
    <footer class="row  d-flex justify-content-start p-4 bg-dark text-white ">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 ">
            <h5>Gangotri marga,Bharatpur-1</h5>
            <h5>Chitwan,Nepal</h5>
            <ul class="list-unstyled">
                <li><i class="fa-solid fa-envelope pe-3"></i>info@neod.bsg.com.np</li>
                <li><i class="fa-solid fa-phone pe-3"></i>+977 9874562587</li>
            </ul>
        </div>

        <div class="row ">
            <div class="  col-lg-8  col-12 ">
                Copyright ©2024 All rights reserved.
            </div>
            <div class="col-md-4 col-12 ">
                <div class="d-flex justify-content-center justify-content-lg-end gap-5 mt-lg-0 ">
                    <div class="icon-span d-flex justify-content-center align-items-center rounded-circle ">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div class="icon-span d-flex justify-content-center align-items-center rounded-circle ">
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                    <div class="icon-span d-flex justify-content-center align-items-center rounded-circle ">
                        <i class="fa-brands fa-linkedin"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- <div class="contact-details">
            <div class="footer-section py-5 text-white">
                <div class="containers">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="footer-links">

                                <ul class="text-light-grey list-unstyled d-flex flex-column gap-2 align-items-start">
                                    <div class="d-flex address ">
                                        <li>Gangotri marga,Bharatpur-1</li>
                                        <li>Chitwan,Nepal</li>
                                    </div>
                                    <div class="d-flex ">
                                        <i class=" icon-span fa-solid fa-envelope "></i>
                                        <p>admin@gmail.com</p>
                                    </div>
                                    <div class="d-flex">
                                        <i class=" icon-span fa-solid fa-phone"></i>
                                        <p>987654321</p>
                                    </div>

                                    <div>
                                        <button type="submit" class="button rounded">View Location</button>
                                    </div>
                            </div>


                            </ul>
                        </div>
                    </div>






                </div>
            </div>
        </div>


        <div class="containers">
            <div class="row">
                <div class="  col-lg-8  col-12 ">
                    Copyright ©2024 All rights reserved.
                </div>
                <div class="col-md-4 col-12 ">
                    <div class="d-flex justify-content-center justify-content-lg-end gap-5 mt-lg-0 ">
                        <div class="icon-span d-flex justify-content-center align-items-center rounded-circle ">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div class="icon-span d-flex justify-content-center align-items-center rounded-circle ">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                        <div class="icon-span d-flex justify-content-center align-items-center rounded-circle ">
                            <i class="fa-brands fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </footer> -->






    <script src="https://kit.fontawesome.com/5afc3c7c1e.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>