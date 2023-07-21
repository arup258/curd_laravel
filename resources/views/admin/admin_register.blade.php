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
        <h1>Admin Register</h1>

        <form action="{{route('admin.register.create')}}" method="post">
          @csrf
        <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{old('name')}}">
              @if($errors->has('name'))
              <span class="text-danger">{{$errors->first('name')}}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{old('email')}}">
              @if($errors->has('email'))
              <span class="text-danger">{{$errors->first('email')}}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">phone</label>
              <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value="{{old('phone')}}">
              @if($errors->has('phone'))
              <span class="text-danger">{{$errors->first('phone')}}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{old('password')}}">
              @if($errors->has('password'))
              <span class="text-danger">{{$errors->first('password')}}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" value="{{old('password_corfirmation')}}">
              @if($errors->has('password_confirmation'))
              <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
              @endif
            </div>
            <button type="submit" class="btn btn-primary">register</button>
        </form>
        <a href="{{route('admin.login')}}">Login</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> 
</body>
</html>