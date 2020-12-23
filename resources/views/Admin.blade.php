@extends('layouts.mainLayout')

@section('body')
<div class="container">
        <!-- Buttons -->
        <div class="buttons">
            <div class="logout">
                <button  class="btn btn-danger"> <a href="logout"></a> Logout</button>
            </div>
            <ul>
                <li  class="btn"><a href="/Admin/addApplicant">ADD NEW APPLICANT</a> </li>
                <li class="btn"><a href="#">UPDATE APPLICANT</a></li>
                <li class="btn"><a href="#">DELETE APPLICANT</a></li>
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
                        <li> ...</li>
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
 </div>

 @endsection
