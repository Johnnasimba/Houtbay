@extends('layouts.mainLayout');

@section('body')
<div id="Admin-section">
  <div class="center " id="addBtn">
    <a href="/Admin/addApplicant"><h5 class="btn">ADD NEW APPLICANT</h5></a>
    <a href="logout" class="btn left">Logout</a>
    <h4 class="mssg center">{{session('mssg') }}</h4>
  </div>
  

  <div class="left">
    <h5 class="center"> Client request will be displayed here</h5>

   
    <ul class="collection">
      @foreach($clients as $item)
            <li class="collection-item avatar">

              <span class="title"><strong>Client name</strong>  : {{ $item->name }}</span>
                <p><strong>Contact</strong> : {{ $item->email }}</p>
              <p><strong>Applicant selected</strong> : {{ $item->firstName }}  {{ $item->lastName }}</p>
                <p><strong> Applicant id</strong> : {{ $item->contact_id }} </p>
                <p><strong> Client message </strong> : {{ $item->message }}</p>
              <a href="#!" class="secondary-content">Delete</a>
            </li>
        
        @endforeach   
        </ul>
    </div>
 </div>

 @endsection
