<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WIKBOOK</title>
  <link href="{{asset('assets/img/logow.png')}}" rel="icon">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            
    @if ($errors->any())
    <center>
    <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
    <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    </center>
    @endif
            
     
     @if (Session::get('fail'))
     <center>
     <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
     {{Session::get('fail')}}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    </center>   
    @endif
          <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="{{asset('assets/img/login.jpg')}}"
                class="img-fluid" alt="Sample image">
           
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="{{route('auth.login')}}" method="POST">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center ">
                  <h2 class="text center mb-3"><strong>LOGIN<hr></strong> </h2> 
                </div>
                <div class="form-outline mb-3"> 
                  <input type="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter your email" name="email"/>   
                </div>
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="password"/>
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem; background:#f67d6a;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
          
             
            </div>
          </div>
        </div>
       
        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>