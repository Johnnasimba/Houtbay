
@extends('layouts.mainLayout');

@section('body')

<div class="cards">
    @foreach($Applicants as $item)

        <div class="card">
            
                <img class="card__image"  src="{{ asset('uploads/'.$item->image) }}" alt="">
                
          <div class="card__content">
            <p class="card-title " >
            {{ $item->firstJob }}, 
            {{ $item->secondJob }}, 
            {{ $item->thirdJob }}, 
            {{ $item->forthJob}}
              </p>
    
            <p style="text-transform: uppercase; font-weight: bold;" id="jobsApplied">
            
            NAME:  {{ $item->firstName }} 
            </p>
            <p>AVAILABLE DAYS: Monday, Wednesday & Friday</p>
            <p>LOCATION: {{ $item->location }}</p>
          </div>
          <div class="card__info">
            <div>
              <p> 0 recommendations</p>
            </div>
            <div>
              <a href="/{{ $item->id}}" class="card__link btn white-text">MORE INFO</a>
            </div>
          </div>
        </div>

        @endforeach
       
</div>
@endsection