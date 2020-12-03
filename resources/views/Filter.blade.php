@extends('layouts.mainLayout');

@section('body')
<h5 class="center">Search results for {{$jobType}}</h5>
<div class="cards">
    @foreach($Applicants as $Applicant)

        <div class="card">
            
                <img class="card__image"  src="img/John Nasimba.jpg" alt="">
                
          <div class="card__content">
            <p class="card-title">
                {{ $Applicant->fullName }}
              </p>
    
            <p>
            {{ $Applicant->jobType }}
            </p>
            <p>LOCATION: Imizamo yethu</p>
          </div>
          <div class="card__info">
            <div>
              <p> {{ $Applicant->recomendations }} recomendations</p>
            </div>
            <div>
              <a href="#" class="card__link btn white-text">MORE INFO</a>
            </div>
          </div>
        </div>
        @endforeach
</div>
@endsection