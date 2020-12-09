@extends('layouts.mainLayout');

@section('body')
<div class="container" id="login"> 
    <h4 class="center">Login</h4>

    <form method="post" action="" class="center" >
        @csrf

        <label class="left" >Email</label>
        <input type="text" name="email" placeholder="Enter your user email" required>
        <label class="left" >Password</label>
        <input type="password" name="password"  placeholder="Enter password" required>
        <div class="container">
            <h6 class="center red-text">{{session('mssg') }}</h6>
        </div>
    
        <button type="submit" class="btn ">Login</button>
    </form>
</div>
<style>
#login{
    width: 300px;
}
#login input {
    border: 1px solid black;
    border-radius: 5px;
}
#login label {
    font-size: 20px;
    color: black;
}
#login .btn {
    background-color: #0093E3;
}
</style>
@endsection 