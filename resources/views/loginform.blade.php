<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <title>Login Form</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-secondary p-3">
            <DIV class="col-3 d-flex justify-content-center fw-bold"><a class="navbar-brand text-light fs-4" href="{{route('logincheck')}}">NEOD</a></DIV>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse col-7 d-flex justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

              </ul>                 
            </div>
            <div class="col-2 d-flex justify-content-center">
       
                {{-- <a href="{{route('admin.logout')}}" class="d-flex justify-conteny-end text-decoration-none"><li class="btn btn-primary border border-3 border-primary fw-bold">Logout</li></a> --}}
            </div>
          </nav>

        
    <div class=" p-3 mt-5" style="margin-left: 29%; margin-right:29%;">
        <div class="d-flex justify-content-center mb-3 fw-bold fs-4">
            <span class="text-danger">Login Form</span>
        </div>
        <hr>
    <div>
        <form action="{{route('logging')}}" class="w-100 p-3" method="POST">
                 @csrf
            <label for="email" >Email</label><br>
            <input type="email" class="mt-3 mb-2 form-control w-100" placeholder="Enter email" id="email" name="email">
              <div class="mt-2 mb-2">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror 
            </div>              
            <label for="password" >Password</label><br>
            <input type="password" class="mt-3 mb-2 form-control" name="password" placeholder="Enter a password" id="password">
               <div class="mt-2 mb-2">
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
               </div>
            <div class="d-flex justify-content-center mt-5">            
                <button type="submit" class="btn btn-primary">Login</button>  
            </div>
        </form>
    </div>
</div>
        
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

