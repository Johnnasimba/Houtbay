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
            <h6 class="center ">{{session('mssg') }}</h6>
        </div>
    
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <h4 align=center style="color: red; margin-top:20px;">Use the following login details</h4>
    <p  align=center style="color: red;">Email: <strong>nasimba4john@gmail.com</strong></p>
    <p  align=center style="color: red;">Password: <strong>John4Nasimba</strong></p>
</div>
<style>
    #login {
       width: 300px;
       height: 300px;
       margin: 0 auto;
       margin-top: 100px;
       min-height: 100vh;

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
    #login h6 {
        color: red;
    }
   
</style>


@endsection 