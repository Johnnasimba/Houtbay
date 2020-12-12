
@extends('layouts.mainLayout');

@section('body')

<div class="cards">
    @foreach($Applicants as $Applicant)

        <div class="card">
            
                <img class="card__image"  src="{{ asset('uploads/'.$Applicant->image) }}" alt="">
                
          <div class="card__content">
            <p class="card-title " >
            {{ $Applicant->firstJob }}, 
            {{ $Applicant->secondJob }}, 
            {{ $Applicant->thirdJob }}, 
            {{ $Applicant->forthJob}}
              </p>
    
            <p style="text-transform: uppercase; font-weight: bold;" id="jobsApplied">
            
            NAME:  {{ $Applicant->firstName }} 
            </p>
            <p>AVAILABLE DAYS: Monday, Wednesday & Friday</p>
            <p>LOCATION: {{ $Applicant->location }}</p>
          </div>
          <div class="card__info">
            <div>
              <p> 0 recommendations</p>
            </div>
            <div>
              <a href="/{{ $Applicant->id}}" class="card__link btn white-text">MORE INFO</a>
            </div>
          </div>
        </div>
        @endforeach
       
</div>
{{ $Applicants->links() }}

  
@endsection