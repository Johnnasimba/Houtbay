@extends('layouts.mainLayout')

@section('body')

@foreach($Applicant as $item)
<div class="container" style="background-color:  #f9f9f9;">
        <div class="applicant">
          <!-- Applicant  details -->
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
                                          <h3>1.5/5.0</h3>
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
                                      <div class="rnrn">
                                          <p class="rars">No Reviews</p>
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
                          <div class="rmp">
  
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
                              <input type="hidden" value="" class="starRateV" />
                              <input type="hidden" value="" class="rateDate" />
  
                              <div class="rptf" align="center">
                                  <input type="text" class="raterName" placeholder="Enter your name..." />
                              </div>
  
                              <div class="rptf" align="center">
                                  <textarea name="" id="" class="rateMsg" placeholder="Describe your experience with this Applicant" cols="30" rows="10"></textarea>
                              </div>
                              <div class="rate-rror" align="center"></div>
                              <div class="rpsb" align="center">
                                  <button class="rpbtn">Post Review</button>
                              </div>
                          </div>
                      </div>
                  </div>
  
                  <div class="bri">
                      <div class="uscm">
                          <div class="uscm-secs">
  
                              <div class="us-img">
                                  <p>B</p>
                              </div>
  
                              <div class="uscms">
                                  <div class="us-rate">
                                      <div class="pdt-rate">
                                          <div class="pro-rating">
                                              <div class="clearfix rating marT8">
                                                  <div class="rating-stars">
                                                      <div class="grey-stars"> </div>
                                                      <div class="filled-stars" style="width: 60%"></div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="us-cmt">
                                      <p>He is the best gardener</p>
                                  </div>
                                  <div class="us-nm">
                                      <p>
                                          <i>By
                                              <span class="cmnm">Bright</span> on
                                              <span class="cmdt"> 23 december, 2020</span>
                                          </i>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
          <!-- contact applicant -->
          <div class="contact-applicant " align="center">
            <p class="rnrn">SUBMIT THE FORM BELOW TO RECEIVE CONTACT INFORMATION OF JOHN NASIMBA</p>
            <form method="POST" action="/" class="left" >
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
                <input type="number" name="id" value="" style="display : none" >
              </div>
              <!-- Message -->
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="" cols="30" rows="10" class="grey-text" placeholder="Tell as anything else you what to know about John "></textarea>
              </div>
              <!--Button -->
              <div>
                <button  type="button" class="btn btn-primary ">Send Message</button><br><br>
                <h4 class="blue-text"></h4>
              </div>            
              
          </form>
          </div>

        </div>
    </div>
 
  @endforeach  
       
@endsection