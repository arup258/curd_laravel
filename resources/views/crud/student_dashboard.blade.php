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
        <h1 class="text-center mt-5">Student Details</h1>
        <div class="conatiner">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">image</th>
      <th scope="col">city</th>
      <th colspan="2">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $jatindra)
    <tr>
      <th scope="row">1</th>
      <td>{{$jatindra->name}}</td>
      <td>{{$jatindra->email}}</td>
      <td>{{$jatindra->phone}}</td>
      <td><img src="{{asset('/image/'.$jatindra->image)}}" width="100px" height="50px"></td>
      <td>{{$jatindra->city}}</td>
      <td><a class="btn btn-success" href="">update</a></td>
      <td><a class="btn btn-danger" href="">delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
        <a href="{{route('student.register')}}" class="btn btn-success">Register</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>