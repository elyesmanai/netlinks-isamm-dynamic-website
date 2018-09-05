@extends('layouts.front', ['title' => 'Contact'])

@section('content')  

            
<div class="container-fluid" style="text-align: center;">

    <br><br><br>

            <div class="row">
                
                  <div class="col-md-3">

                <br><br><br><br><br>
                  <p>{{$contents[0]->content}}</p>
                  
                  <hr>
                    <br><br>

                    <hr>


                    <h3>Contact Details</h3>

                    <p>Institut Supérieur Des Arts Multimédias<br>Campus Universitaire Manouba, <br></p>
                    
                    s<p><i class="fa fa-phone"></i> 
                        <abbr title="Phone">P</abbr>: +216 92179793</p>
                    <p><i class="fa fa-envelope-o"></i> 
                        <abbr title="Email">E</abbr>: <a href="mailto:netlinks.isamm16@gmail.com">netlinks.isamm16@gmail.com</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i> 
                        <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=1810343175916603&fref=ts"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>
                </div>            
            
               
                
                <div class="col-md-6">
                    <h3>Send us a Message</h3><br>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Phone Number:</label>
                                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Message:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                
                 <div class="col-md-3">
                    <br><br><br><br>
                    <div>
                        <iframe width="100%" height="475" src="http://www.citymaps.ie/create-google-map/map.php?width=100%&amp;height=475&amp;hl=en&amp;coord=36.81699237507608,10.060692793115209&amp;q=ISAMM%2C%20Campus%20Universitaire%20Manouba+(Netlinks%20ISAMM)&amp;ie=UTF8&amp;t=h&amp;z=16&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                
                </div>
      
              
        </div>
        

    </div>
  

@stop