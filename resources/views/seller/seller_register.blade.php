<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>seller Register</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Seller Register</h1>
        <form class="m-auto w-50" action="{{route('seller.register.create')}}" method="post">
          @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter name</label>
              <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1">
              @if($errors->has('name'))
              <span class="text-danger">{{$errors->first('name')}}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputEmail1">
              @if($errors->has('email'))
              <span class="text-danger">{{$errors->first('email')}}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Phone number</label>
              <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="exampleInputEmail1">
              @if($errors->has('phone'))
              <span class="text-danger">{{$errors->first('phone')}}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleInputPassword1">
              @if($errors->has('password'))
              <span class="text-danger">{{$errors->first('password')}}</span>
              @endif
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" id="exampleInputPassword1">
              @if($errors->has('password_confirmation'))
              <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
              @endif
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <a href="{{route('seller.login')}}">Click To Login</a>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>