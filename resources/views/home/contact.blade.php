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
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control-input" placeholder="Name" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <select class="form-control-select" required="">
                                <option class="select-option" value="" disabled="" selected="">Contact type</option>
                                <option class="select-option" value="Info">Info</option>
                                <option class="select-option" value="Project">Project</option>
                                <option class="select-option" value="Shop">Shop</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" placeholder="Message" required=""></textarea>
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