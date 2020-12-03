@extends('layouts.mainLayout');

@section('body')

@foreach($Applicant as $item)
<div class="row">
        
        <div class="col " id="col-image">
            <div class="container ">
            <img class="" src="{{ asset('uploads/'.$item->image) }}" alt="">
            </div>
            <div class="container" id="personal-info">
                <p><strong>NAME: </strong> <span class="right"> {{ $item->firstName }}</span></p>
                <p><strong>SURNAME:</strong> <span class="right">{{ $item->lastName }}</p>
                <p><strong>AGE:  </strong><span class="right"> {{ $item->age }} </span> </p>
                <p><strong>GENDER:</strong> <span class="right">{{ $item->gender }} </span> </p>
                <p><strong>NATIONALITY:</strong><span class="right"> {{ $item->nationality }} </span> </p>
                <p><strong>Available days:</strong> <span class="right">{{ $item->available_days }} </span> </p>

                <div class="container" id="recommendation">
                  <h6 class="center">RECOMMENDATIONS</h6>
                  <form method="POST" action="/{{$item->id}}">
                  @csrf
                    <label for="name">Your Name</label><br>
                    <input type="text" name="name">
                    
                    <textarea name="recommend" id="recommed" cols="30" rows="10" placeholder="Recommend {{ $item->lastName }}"></textarea>
                    <button type="submit" class="center btn">Post</button>
                  </form>
                  <div class="recPost  ">
                      @foreach($recommendations as $recommendation)
                    <p><strong>{{ $recommendation->name }}</strong></p>
                    <p class=" blue lighten-4"> "<i> {{ $recommendation->recommendation }}"</i></p>
                      @endforeach
                  </div>
                </div>
            </div>
            
        
        </div>
        <div class="col s12 m6 l4 " id="col-extra-info"> 
            <h6 class="left"><strong> JOBS APPLIED</strong></h6><br>
             <p>
                {{ $item->firstJob }}, 
                {{ $item->secondJob }}, 
                {{ $item->thirdJob }}, 
                {{ $item->forthJob}}
            </p>

            <h6 class="left"><strong> QUALIFICATION</strong></h6><br>
            <p>{{ $item->qualification }}</p>
           

            <h6 class="left"><strong> EXPERIENCE</strong></h6><br>
            <P>{{ $item->experience }}</P>
            <h6 class="left"><strong>RENFERENCE</strong></h6><br>
            <P>{{ $item->reference }}</P>
             <p>contact information reserved. </p>
             <div class="left">
                 <h6 class="light-blue-text">Submit the form below to receive contact information for JOHN. <br> It will be sent to you within 24hrs</h6>
             </div><br><br><br>
             <div class="container" id="login"> 
    <h6 class="left">Contact</h6>

    <form method="POST" action="/" class="left" >
        @csrf
        <label class="left" >Your Name</label>
        <input type="text" name="name" placeholder="Enter your Name" required>

        <label class="left" >Email</label>
        <input type="text" name="email" placeholder="Enter your user email" required>

        <label class="left" >Your Mobile Number</label>
        <input type="number" name="number"  placeholder="Enter mobile number" required>
        <input type="number" name="id" value="{{ $item->id }}" style="display : none" >

        <label for="message">Message</label>
        <textarea name="message" id="" cols="30" rows="10" class="grey-text">Please send me contact information for {{$item->firstName}} {{$item->lastName}} with an id of {{$item->extra_id}} </textarea><br>
        <button  type="submit" class="btn right">Send Message</button><br><br>
        <h4 class="blue-text">{{session('message') }}</h4>
    </form>
   
  </div>
      
</div>
@endforeach
        
        <div class="col s12 m12 l4 right" id="col-related"> 
            <h6 class="center">RELATED</h6>
            
            <div class="cards related-cards">
            @foreach($related as $item)
                <div class="card">
                    
                        <img class="card__image related-card__image" src="{{ asset('uploads/'.$item->image) }}" alt="">
                        
                  <div class="card__content related-card__content">
                    <p class="card-title" id="card-title">
                        {{$item->firstName}}  {{$item->lastName}}
                      </p>
            
                    <p>
                        {{ $item->firstJob }}, 
                        {{ $item->secondJob }}, 
                        {{ $item->thirdJob }}, 
                        {{ $item->forthJob}}
                    </p>
                    <p>LOCATION: Imizamo yethu</p>
                  </div>
                  <div class="card__info related-card__info">
                    <div>
                      <p> 0 recomendations</p>
                    </div>
                    <div>
                      <a href="/{{ $item->id}}" class="card__link btn white-text">MORE INFO</a>
                    </div>
                  </div>
                </div>
               @endforeach
        
        
                @include('sweetalert::alert')
        </div>

 </div>
 
 
    <style>
        body{
            background-color: white;
        }
        .row{
            padding: 0px 10px;
        }
        div #col-image{
            background-color: white;
            
        }
        #col-image img{
            max-height: 300px;
            padding-top: 5px;
        }
        #personal-info{
            /*background-color: lightgoldenrodyellow;
            text-decoration: underline;*/
            min-height: 700px;
        }
       /* #personal-info p{
          text-decoration: underline;
        }*/
        div #col-extra-info{
            background-color: white;
            height: 860px;
            padding-left: 60px;
            
        }
        div #col-related{
         /* background-color: cadetblue;*/
            min-height: 600px;
            padding-top: 50px;
        }
        #recommendation{
           /* background-color: grey;*/
            width: 300px;
            
        }
        #recommendation input{
            border: 1px solid black;
            border-radius: 5px;
            height: 30px;
            width: 200px;
        }
        #recommendation textarea{
          max-width: 300px;
        }
        #recommendation .recPost{
          margin-top: 30px;
          
        }
        #login{
        width: 300px;
        height: 50px;
        margin-left: 0px;
        }
        #login input {
            border: 1px solid black;
            border-radius: 5px;
            height: 40px;
        }
        #login label {
            font-size: 20px;
            color: black;
        }
        #login .btn {
            margin-top: 10px;
        }
        #login textarea {
          min-height: 100px;
        }


        /*cards*/
        .related-cards {
    margin-top: 0px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 2fr));
    grid-auto-rows: auto;
    gap: 5px;
    font-family: sans-serif;
    padding-top: 0px;
    margin-bottom: 100px;
}

.related-cards * {
    box-sizing: border-box;
}

.related-card__image {
    width: 100%;
    height: 300px;
    object-fit: cover;
    display: block;
    /*border-top: 2px solid #333333;
    border-right: 2px solid #333333;
    border-left: 2px solid #333333;*/
}

.related-card__content {
    line-height: 1.5;
    font-size: 0.8em;
    background: #fafafa;
   /* border-right: 2px solid #333333;
    border-left: 2px solid #333333;*/
    
}

.related-card__content > p:first-of-type {
    margin-top: 0;
}

.related-card__content > p:last-of-type {
    margin-bottom: 0;
}

.related-card__info {
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

.related-card__info i {
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



@endsection