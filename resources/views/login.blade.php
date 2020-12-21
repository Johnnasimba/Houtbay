@extends('layouts.mainLayout')

@section('body')
<div class="container" id="login" align="center"> 
    <h4 class="center">Login</h4>

    <form method="post" action="" class="center" >
        @csrf
        <div class="form-group">
            <label class="left" >Email</label>
            <input type="text" name="email" placeholder="Enter your user email" required>
        </div>

        <div class="form-group">
        <label class="left" >Password</label>
        <input type="password" name="password"  placeholder="Enter password" required>
        </div>
            
        
        <div class="container form-group">
            <h6 class="center red-text">{{session('mssg') }}</h6>
        </div>
    
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<style>
    #login {
       width: 300px;
       height: 300px;
       margin: 0 auto;

    }
    #login form {
        display: flex;
        flex-direction: column;
       
    }
    #login .form-group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    #login form input {
        height: 40px;
        width: 100%;
        border-radius: 5px;
        padding: 10px;
    }
   
</style>


@endsection 