@extends('layouts.mainLayout')
 @section('body')
 
 @include('components.categories')

 
 
  <div class="container">
    <!-- <?php  
      echo json_encode($Applicants, JSON_PRETTY_PRINT);
     
    ?> -->
    <div class="card-deck">
        @foreach($Applicants as $Applicant) 

        <a href="/{{ $Applicant->id}}">
          <!-- An individual card -->
          <div class="card container">           
            <!-- card image -->
            <img class="card-img-top img-fluid" src="{{ asset('uploads/'.$Applicant->image) }}" alt="Card image cap">
            <!-- Card body -->
        
            <div class="card-body">
                <!-- Job titles -->
                <ul class="card-title">
                  <li>
                  <h5>{{$Applicant->firstJob}} </h5>
                  </li>
                  <li>
                      <h5>{{$Applicant->secondJob}} </h5>
                  </li>
                  <li>
                      <h5>{{$Applicant->thirdJob}} </h5>
                  </li>
                  <li>
                      <h5>{{$Applicant->forthJob}} </h5>
                  </li>
                </ul>
                <!-- Personal details (First and last name) -->
                <div class="card-text full-name">
                  <h6> <i>Name</i>  : <span>{{$Applicant->firstName}}</span> </h6>
                </div>
                <!-- Available days -->
                <div class="card-text available-days">
                  <h6> <i>Available days</i>: <span> {{$Applicant->available_days}}</span></h6>
                </div>
                <!-- Location -->
                <div class="card-text">
                  <h6> <i>Location </i> : <span> {{$Applicant->location}}</span></h6>
                </div>
            </div>
            <!-- Card footer || Rating -->
            <div class="card-footer">
                <div class="number-of-reviews">
                  <h5> 
                      <span>1</span>
                      <span> Reviews</span>
                  </h5>
                </div>
                <div class="pdt-rate">
                  <div class="pro-rating">
                      <div class="clearfix rating marT8">
                        <div class="rating-stars">
                            <div class="grey-stars"></div>
                            <div class="filled-stars" style="width: 60%"></div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="avg-rating">
                  (3.0/5.0)
                </div>
            </div>
          </div>
        </a>
        @endforeach
    </div>
  </div>

{{ $Applicants->links() }}  
@endsection
