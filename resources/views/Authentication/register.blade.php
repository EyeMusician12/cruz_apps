<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container">
        <form action="perform-register" method="POST">
          @if ($errors->any())
          <div class="alert alert danger">
            @foreach($errors->all() as $err)
            <li>{{ $err}}</li>
            @endforeach
          </div>
          @endif
          @csrf
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" name="RegFirstName"class="form-control" />
                <label class="form-label" for="form2Example1">First Name</label>
              </div>

            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" name="RegLastName" class="form-control" />
                <label class="form-label" for="form2Example1">Last Name</label>
              </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" name="RegEmail" class="form-control" />
              <label class="form-label" for="form2Example1">Email address</label>
            </div>
          
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2"  name="RegPassword" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>
          
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>
          
              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>
          
            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
          
            <!-- Register buttons -->
            <div class="text-center">
              <p>Not a member? <a href="#!">Register</a></p>
              <p>or sign up with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>
          
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>
          
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>
          
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
        </form>
          </form>
        </div>
</body>
</html>