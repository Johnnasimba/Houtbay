


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
            <p>AVAILABLE DAYS: Monday, Wesday & Friday</p>
            <p>LOCATION: {{ $item->location }}</p>
          </div>
          <div class="card__info">
            <div>
              <p> 0 recomendations</p>
            </div>
            <div>
              <a href="/{{ $item->id}}" class="card__link btn white-text">MORE INFO</a>
            </div>
          </div>
        </div>
 <style>
  .cards {
    margin: 20px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    grid-auto-rows: auto;
    gap: 20px;
    font-family: sans-serif;
    padding-top: 30px;
    margin-bottom: 100px;
}

.cards * {
    box-sizing: border-box;
}

.card__image {
    width: 100%;
    height: 350px;
    object-fit: cover;
    display: block;
    /*border-top: 2px solid #333333;
    border-right: 2px solid #333333;
    border-left: 2px solid #333333;*/
}

.card__content {
    line-height: 1.5;
    font-size: 0.9em;
    padding: 15px;
    background: #fafafa;
   /* border-right: 2px solid #333333;
    border-left: 2px solid #333333;*/
    
}

.card__content > p:first-of-type {
    margin-top: 0;
}

.card__content > p:last-of-type {
    margin-bottom: 0;
}

.card__info {
    padding: 15px;
    padding-bottom: 0px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #555555;
    background: #eeeeee;
    font-size: 0.8em;
    /*border-bottom: 2px solid #333333;
    border-right: 2px solid #333333;
    border-left: 2px solid #333333;*/
}

.card__info i {
    font-size: 0.9em;
    margin-right: 8px;
    margin-bottom: 0px !important;
}

.card__link {
    color: #64968c;
    text-decoration: none;
    margin-bottom: 0px;
    padding-bottom: 0px;
}

.card__link:hover {
    text-decoration: underline;
}
        </style>
        @endforeach
       
</div>
@endsection