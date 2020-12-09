@extends('layouts.mainLayout');

@section('body')
<div class="container ">
    <h4>Fill in appropriate information of the applicant below</h4>
     <form action="/Admin" method="POST" enctype="multipart/form-data">
      @csrf
        <label for="firstName" class="label">First Name</label>
        <input type="text" id="firstName" name="firstName" required>


        <label for="lastName" class="label">Last Name</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="location" class="label">Location</label>
        <input type="text" id="location" name="location" required>


        <label for="firstJob" class="label">first Job</label>
        <input type="text" id="firstJob" name="firstJob" required>


        <label for="secondJob" class="label">Second Job</label>
        <input type="text" id="secondJob" name="secondJob" required>

        <label for="thirdJob" class="label">Third Job</label>
        <input type="text" id="thirdJob" name="thirdJob">
        
        <label for="forthJob" class="label">Third Job</label>
        <input type="text" id="forthJob" name="forthJob">

        <label for="image">Insert Image</label><br>
        <input type="file" id="choose-file" name="image" class="file" required><br>
        <div class="center">
            <input type="submit" name="submit" value="Submit" class="btn ">
        </div>

     </form>
</div>
</div>
<style>
    form {
         max-width: 500px;
     }
     form .file{
         margin-top: 20px;
     }
     form .btn{
         margin-top: 40px;
     }
     .search .fa-search {
    position: absolute !important;
    top: -40px !important;
    left: 150px !important;
}

</style>
@endsection