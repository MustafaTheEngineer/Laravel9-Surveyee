@extends('layouts.frontbase')

@section('title', 'Contact Us - '.$setting->title)
@section('keywords',$setting->keywords)
@section('description',$setting->description)

@section('content')
    <h1 class="mt-5 pt-5 d-flex justify-content-center">Contact Us</h1>

    <div class="container mt-5">
        {!! $setting->contact !!}
    </div>

    <div id="contact" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading"><span>Use the following form to</span><br> Contact Us</h2>
                    <p class="p-heading">Vel malesuada sapien condimentum nec. Fusce interdum nec urna et finibus pulvinar
                        tortor id</p>
                    <ul class="list-unstyled li-space-lg">
                        <li><i class="fas fa-map-marker-alt"></i> &nbsp;Karabuk University</li>
                        <li><i class="fas fa-phone"></i> &nbsp;<a href="tel:00817202212">0555 555 55 55</a></li>
                        <li><i class="fas fa-envelope"></i> &nbsp;<a href="mailto:lorem@ipsum.com">karabuk@edu.com.tr</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
    
                    <!-- Contact Form -->
                    <form action="{{route('storemessage')}}" method="post">
                        @csrf

                        @include('home.messages')

                        <div class="form-group">
                            <input type="text" class="form-control-input" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control-input" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" name="subject" placeholder="Subject" style="font-weight: 700;">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Send</button>
                        </div>
                    </form>
                    <!-- end of contact form -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
@endsection