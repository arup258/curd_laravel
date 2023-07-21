<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>seller login</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Seller Login</h1>
        @if(Session::has('error'))
        <!-- <span class="m-auto p-5 text-danger bg bg-success">{{session::get('error')}}</span> -->
        <div class="alert alert-danger alert-dismissible fade show w-50 m-auto">
          <strong>Alert!</strong> {{session::get('error')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
        @endif

        @if(Session::has('error_logout'))
        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show w-50 m-auto">
            <strong class="mx-2">Success!</strong> {{session::get('error_logout')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif
        <form class="m-auto w-50 mt-3" action="{{route('seller.login.create')}}" method="post">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">login</button>
            <a href="{{route('seller.register')}}">Click To Register</a>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>