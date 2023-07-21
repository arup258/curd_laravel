<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Admin Login</h1>
        @if(Session::has('error'))
              <span class="bg bg-danger">{{session::get('error')}}</span>
              @endif

        <form action="{{route('admin.login.create')}}" method="post">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{old('email')}}">
              @if($errors->has('email'))
              <span class="text-danger">{{$errors->first('email')}}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{old('password')}}">
              @if($errors->has('password'))
              <span class="text-danger">{{$errors->first('password')}}</span>
              @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="{{route('admin.register')}}">Register</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> 
</body>
</html>