@if (Auth::guard('web')->check())
    <h1 class="text-success">Logged in as a <strong>USER</strong></h1>
@else
    <h1 class="text-danger" >Logged out as a <strong>USER</strong></h1>
@endif

@if (Auth::guard('admin')->check())
    <h1 class="text-success">Logged in as a <strong>ADMIN</strong></h1>
@else
    <h1 class="text-danger" >Logged out as a <strong>ADMIN</strong></h1>
@endif
