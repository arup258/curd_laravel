<h1>Admin dashboard</h1>

@if(Session::has('error'))
              <span class="bg bg-danger">{{session::get('error')}}</span>
              @endif
<h1>{{Auth::guard('admin')->user()->name}}</h1>
<h1>{{Auth::guard('admin')->user()->email}}</h1>

<a href="{{route('admin.logout')}}">Logout</a>