@extends('layouts.mainLayout')

@section('body')

        <?php 
                $myDate = getdate(date('U'));
                $date = "$myDate[weekday], $myDate[month] $myDate[mday], $myDate[year]";
            $avg = '';
            if($numRates != 0) {
                if(is_nan(round(($totalRates / $numRates), 2))) {
                    $avg = 0;
                }
                else {
                    $avg = round(($totalRates / $numRates), 2);
                }
            }
            else {
                $avg = 0;
            }
             
          ?>


<div class="container" id="Applicant-page" style="background-color:  #f9f9f9;">
        <div class="applicant">
          <!-- Applicant  details -->
          @foreach($Applicant as $item)
          <div class="applicant-details">
              <div class="image img-fluid">
                <img src="{{ asset('uploads/'.$item->image) }}" alt="John Nasimba">
              </div>
              <div class="personal-details">
                <ul>
                  <li>First Name:</li>
                  <li>Last Name:</li>
                  <li>Age:</li>
                  <li>Gander:</li>
                  <li>Nationality:</li>
                  <li>Available days:</li>
                </ul>
                <ul>
                  <li> {{ $item->firstName }}</li>
                  <li>{{ $item->lastName }}</li>
                  <li>{{ $item->age }} </li>
                  <li>{{ $item->gender }}</li>
                  <li>{{ $item->nationality }}</li>
                  <li>{{ $item->available_days }}</li>
                </ul>
              </div>
              <div class="extras">
                  <div class="jobs-applied">
                    <h6 >JOB TITLES</h6>
                     <p>
                      {{ $item->firstJob }}, 
                      {{ $item->secondJob }}, 
                      {{ $item->thirdJob }}, 
                      {{ $item->forthJob}}
                     </p>
                  </div>
                  <div class="education">
                    <h6 >EDUCATION</h6>
                     <p class="rrb">
                     {{ $item->qualification }}
                     </p>
                  </div>
                  <div class="experience">
                    <h6 >EXPERIENCE</h6>
                     <p>
                     {{ $item->experience }}
                     </p>
                  </div>
                  <div class="reference">
                    <h6 >REFERENCE</h6>
                     <p>
                      Available
                     </p>
                  </div>
                  <div class="contact" style="display: none;">
                    <a href="#" align="center" > CONTACT</a>
                  </div>
              </div>
          </div>
          @endforeach  
          <!-- Applicant Rating -->
        
              <section class="rating-review" id="ratingSection" >
                <h4 align="center" class="rnrn">REVIEWS</h4>
                  <div class="tri table-flex">
                      <table>
                          <tbody>
                              <tr>
                                  <!-- First table data -->
                                  <td>
                                      <div class="rnb rvl">
                                          <h3><?php echo $avg; ?> /5.0</h3>
                                      </div>
                                      <div class="pdt-rate">
                                          <div class="pro-rating">
                                              <div class="clearfix rating marT8">
                                                  <div class="rating-stars">
                                                      <div class="grey-stars"></div>
                                                      <div class="filled-stars" style="width:<?php echo ($avg * 20) ?>%"></div>
                                                      
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="rnrn">
                                          <p class="rars"> <?php if($numRates == 0){echo "No";}else{echo $numRates;}; ?> Reviews</p>
                                      </div>
                                  </td>
  
                                  <!-- Second table data -->
                                  <td>
                                      <div class="rpb">
  
                                          <div class="rnpb">
                                              <label> 5 <i class="fa fa-star" ></i>  </label>
                                              <div class="ropb">
                                                  <div class="ripb" style="width:0%"></div>
                                              </div>
                                              <label>(0)</label>
                                          </div>
  
                                          <div class="rnpb">
                                              <label for=""> 4<i class="fa fa-star"></i> </label>
                                              <div class="ropb">
                                                  <div class="ripb" style="width:60%"></div>
                                              </div>
                                              <label>(2)</label>
                                          </div>
  
                                          <div class="rnpb">
                                              <label for=""> 3 <i class="fa fa-star" ></i> </label>
                                              <div class="ropb">
                                                  <div class="ripb" style="width:20%"></div>
                                              </div>
                                              <label>(1)</label>
                                          </div>
  
                                          <div class="rnpb">
                                              <label for=""> 2 <i class="fa fa-star" ></i> </label>
                                              <div class="ropb">
                                                  <div class="ripb" style="width:20%"></div>
                                              </div>
                                              <label>(1)</label>
                                          </div>
  
                                          <div class="rnpb">
                                              <label for=""> 1 <i class="fa fa-star" ></i>     </label>
                                              <div class="ropb">
                                                  <div class="ripb" style="width:0%"></div>
                                              </div>
                                              <label>(0)</label>
                                          </div>
                                          
                                      </div>
                                  </td>
                                  <!-- Third table data -->
                                  <td>
                                      <div class="rrb">
                                          <p>Please Review This Applicant</p>
                                          <button class="rbtn opmd">Add Review</button>
                                      </div>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                      
                      <div class="review-modal" style="display:none">
                          <div class="review-bg"></div>

                          <!-- Rating form -->
                          @foreach($Applicant as $item)
                          <form method="POST" action="/details/{{$item->id}}" class="rmp">
                                @csrf
                              <div class="rpc">
                                  <span>
                                      <i class="fa fa-times" ></i>
                                  </span>
                              </div>
                              <div class="rps" align="center">
                                  <i class="fa fa-star" data-index="0" style="display: none;" ></i>
                                  <i class="fa fa-star" data-index="1"></i>
                                  <i class="fa fa-star" data-index="2"></i>
                                  <i class="fa fa-star" data-index="3"></i>
                                  <i class="fa fa-star" data-index="4"></i>
                                  <i class="fa fa-star" data-index="5"></i>
                              </div>
                              <input type="hidden" name="user-review" value="" class="starRateV" />
                              <input type="hidden" name="date-reviewed" value="<?php echo $date ?>" class="rateDate" />
  
                              <div class="rptf" align="center">
                                  <input type="text" name="user-name" class="raterName" placeholder="Enter your name..." />
                              </div>
  
                              <div class="rptf" align="center">
                                  <textarea name="user-message" id="" class="rateMsg" placeholder="Describe your experience with this Applicant" cols="30" rows="10"></textarea>
                              </div>
                              <div class="rate-rror" align="center"></div>
                              <div class="rpsb" align="center">
                                  <button type="submit" class="rpbtn">Post Review</button>
                              </div>
                          </form>
                          @endforeach
                      </div>
                  </div>
  
                  <div class="bri">
                      <div class="uscm">

                      <!-- Loop through user reviews here -->
                      @foreach($rates as $rate)

                          <div class="uscm-secs">
  
                              <div class="us-img">
                                  <p>
                                      {{substr($rate->userName, 0, 1)}}
                                  </p>
                              </div>
  
                              <div class="uscms">
                                  <div class="us-rate">
                                      <div class="pdt-rate">
                                          <div class="pro-rating">
                                              <div class="clearfix rating marT8">
                                                  <div class="rating-stars">
                                                      <div class="grey-stars"> </div>
                                                      <div class="filled-stars" style="width: {{$rate->userReview * 20}}%"></div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="us-cmt">
                                      <p>
                                          {{$rate->userMessage}}
                                      </p>
                                  </div>
                                  <div class="us-nm">
                                      <p>
                                          <i>By
                                              <span class="cmnm"> {{$rate->userName}} </span> on
                                              <span class="cmdt"> {{$rate->dateReviewed}} </span>
                                          </i>
                                      </p>
                                  </div>
                              </div>
                          </div>
                        @endforeach
                          <!-- End of user review loop -->
                      </div>
                  </div>
              </section>
          <!-- contact applicant -->
          @foreach($Applicant as $item)
          <div class="contact-applicant " align="center">
            <p class="rnrn" style="text-transform: uppercase;">SUBMIT THE FORM BELOW TO RECEIVE CONTACT INFORMATION OF  {{ $item->firstName }}  {{ $item->lastName }} </p>
            <form method="POST" action="/client/{{$item->id}}" class="left" >
            @csrf 
               <!-- Full name -->
              <div class="form-group">               
                <label class="left" >Your Name</label>
                <input type="text" name="name" placeholder="Enter your Name"
                required minlength="3" maxlength="50" required>
              </div>

              <!-- Email Address -->
              <div class="form-group">
                <label class="left" >Email</label>
                <input type="text" name="email" placeholder=" Youremail@address.com" required>
              </div>
            
              <!-- Phone number -->
              <div class="form-group">
                <label class="left" >Your Mobile Number</label>
                <input type="number" name="number"  placeholder="Enter mobile number" required>
              </div>
              <!-- Message -->
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="10" class="grey-text"
                 placeholder="What else would you like to know about {{ $item->firstName }}  {{ $item->lastName }}" ></textarea>
              </div>
              <!--Button -->
              <div>
                <button  type="submit" class="btn ">Send Message</button><br><br>
                <h4 class="blue-text"></h4>
              </div>            
              
          </form>
          </div>
          @endforeach

        </div>
    </div>
 

       
@endsection