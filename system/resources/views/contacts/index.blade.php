@extends('layouts.app')

@section('content')
<h2>Contact Us</h2>
<p>Feel free to shout us by feeling the contact form or visiting our social network sites like Fackebook,Whatsapp,Twitter.</p>
<form method="POST" action="{{route('contact-us')}}">
{{ csrf_field() }}
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
          <label for="exampleInputName2">Name</label>
          <input name="name" type="text" class="form-control" id="exampleInputName2" placeholder="Your name...">
      </div>
    </div>
     <div class="col-md-6">
      <div class="form-group">
        <label for="exampleInputName2">Email</label>
        <input name="email" type="email" class="form-control" id="exampleInputName2" placeholder="Your email...">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group ">
        <label for="exampleInputText">Your Message</label>
        <textarea  name="description" rows="4" cols="50" class="form-control" placeholder="Description..."></textarea> 
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-default">Send Message</button>
</form>

<hr>
<h3>Our Social Sites</h3>
<ul class="list-inline banner-social-buttons">
  <li>
      <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a>
  </li>
  <li>
      <a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a>
  </li>
  <li>
      <a href="#" class="btn btn-default btn-lg"><i class="fa fa-instagram"> <span class="network-name">Instagram</span></i></a>
  </li>
</ul>
                    <!-- <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li> -->
      <!--             


       <!--   <h2>Contact Us</h2>
              <p>Feel free to shout us by feeling the contact form or visiting our social network sites like Fackebook,Whatsapp,Twitter.</p> -->
<!-- <section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
     
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Name</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Your Message</label>
                     <textarea  class="form-control" placeholder="Description"></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Send Message</button>
                  </form>

                  <hr>
                    <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-instagram"> <span class="network-name">Instagram</span></i></a></li> -->
                    <!-- <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li> -->
      <!--             </ul>
                </div>
              </div>
            </div>
        </div>
      </section> -->

@endsection