@extends('layouts.mainLayout')

@section('body')
<div class="container " id="addApplicant-page">
            <div id="addApplicant" align="center">
                <h4>FILL THE FORM BELOW WITH APPROPRIATE INFORMATION OF THE NEW APPLICANT</h4>
                <form action="/Admin" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="firstName" class="label">First Name</label>
                        <input type="text" id="firstName" name="firstName" placeholder="Applicant first name" required>
                    </div>
                        
                    <div class="form-group">        
                        <label for="lastName" class="label">Last Name</label>
                        <input type="text" id="lastName" name="lastName" placeholder="Applicant last name" required>
                    </div>
                        
                    <div class="form-group">
                        <label for="location" class="label">Location</label>
                        <input type="text" id="location" name="location" placeholder="Applicant location" required>
                    </div>
                        
                    <div class="form-group">
                        <label for="firstJob" class="label">first Job</label>
                        <input type="text" id="firstJob" name="firstJob" placeholder="First job title" required>

                    </div>
                        
                    <div class="form-group">        
                        <label for="secondJob" class="label">Second Job</label>
                        <input type="text" id="secondJob" name="secondJob" placeholder="Second job title" required>
                    </div>
                        
                    <div class="form-group">        
                        <label for="thirdJob" class="label">Third Job</label>
                        <input type="text" id="thirdJob" name="thirdJob" placeholder="Third job title">
                    </div>

                    <div class="form-group">
                        <label for="forthJob" class="label">Last Job</label>
                        <input type="text" id="forthJob" name="forthJob" placeholder="Last job title">
                    </div>

                    <div class="form-group">        
                        <label for="image">Insert Image</label><br>
                        <input type="file" id="choose-file" name="image" class="file"   required><br>
                    </div>     
                    

                    <div class="btn button" >
                        <input type="submit" name="submit" value="Submit" ></input>
                    </div>
                </form>
            </div>
         </div>

@endsection