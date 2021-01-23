@extends('layouts.mainLayout')

@section('body')
<div class="container" id="admin-page">
        <!-- Buttons -->
        <div class="buttons">
            <div class="logout">
                <button  class="btn btn-danger"> <a href="/logout"> Logout</a> </button>
                <button class="btn btn-info" id="signup-user-admin"><a href="#">Sign up new user Admin</a> </button>
            </div>
            <ul>
                <li  class="btn"><a href="/Admin/addApplicant">ADD NEW APPLICANT</a> </li>
                <li class="btn" id="update-applicant"><a href="#">UPDATE APPLICANT</a></li>
                <li class="btn" id="delete-applicant"><a href="#">DELETE APPLICANT</a></li>
            </ul>
        </div>

        <!-- Client request -->
        <div class="client-request">
            <h4>CLIENT REQUEST</h4>
      @foreach($clients as $item)
      <section>
                <div class="date">
                    02 January, 2021
                </div>
                <div class="request-details">
                    <ul>
                        <li>Client Name:</li>
                        <li>Phone number:</li>
                        <li>Email Address:</li>
                        <li>Applicant selected:</li>
                        <li>Applicant ID:</li>
                    </ul>
                    <ul>
                        <li> {{ $item->name }}</li>
                        <li> {{ $item->number }}</li>
                        <li>{{ $item->email }}</li>
                        <li> {{ $item->firstName }}  {{ $item->lastName }}</li>
                        <li>{{ $item->contact_id }}</li>
                    </ul>
                </div>
                <div class="client-message">
                    <h6>MESSAGE</h6>
                    "
                    <i> {{ $item->message }}</i>
                    "
                </div>
               
            </section>
            
        
        @endforeach   
    </div>
    <script>
        const newUser = document.getElementById("signup-user-admin");
        const updateApplicant =  document.getElementById("update-applicant");
        const deleteApplicant = document.getElementById("delete-applicant")


        newUser.addEventListener("click", () => {
            alert("Currently, You are not allowed to add new user admin.")
        });
        updateApplicant.addEventListener("click", ()=> {
            alert("There is less number of applicants such that all updates are done manually for the moment.")
        });
        deleteApplicant.addEventListener("click", ()=> {
            alert("The delete applicant functionality has been disabled for the moment.")
        })
    </script>
 </div>

 @endsection
