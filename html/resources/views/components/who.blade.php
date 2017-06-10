@if(Auth::guard('web')->check())
  <p class="text-success">You are logged in As <strong>User</strong></p>
@else
  <p class=text-danger> You are logged out As User</p>
@endif 

@if(Auth::guard('admin')->check())
  <p class="text-success">You are logged in As <strong>Admin</strong></p>
@else
  <p class=text-danger> You are logged out as Admin</p>
@endif

