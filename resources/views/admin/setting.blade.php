@extends('layouts.adminbase')

@section('head')
    <style>
        #myTabContent div[class="tab-pane fade"]{
            display: none !important;
        }
    </style>
@endsection

@section('title','Settings')

@section('content')
    <section class="au-breadcrumb2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="{{route('admin.index')}}">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Setting</li>
                            </ul>
                        </div>
                        <form class="au-form-icon--sm" action="" method="post">
                            <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                            <button class="au-btn--submit2" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome p-t-10 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-4">Settings
                    </h1>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7" style="background-color: #E5E5E5;">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item active show">
                            <a class="nav-link" id="set-general" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Smtp E-mail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="set-social" data-toggle="tab" href="#social-content" role="tab" aria-controls="social-content" aria-selected="true">Social Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="set-about" data-toggle="tab" href="#about-content" role="tab" aria-controls="about-content" aria-selected="true">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="set-content" data-toggle="tab" href="#contact-content" role="tab" aria-controls="contact-content" aria-selected="true">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="set-refernces" data-toggle="tab" href="#references-content" role="tab" aria-controls="references-content" aria-selected="true">References</a>
                        </li>
                    </ul>
                    <div class="tab-content pl-3 pt-5" id="myTabContent">
                        <form class="form-horizontal" action="{{route('admin.setting.update')}}" method="post">
                        @csrf
                            <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="set-general">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="title" class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="title" name="title" placeholder="Title" class="form-control" value="{{$data->title}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="keywords" class=" form-control-label">Keywords</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="keywords" value="{{$data->keywords}}" name="keywords" placeholder="Keywords" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="description" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="description" value="{{$data->description}}" name="description" placeholder="Description" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="company" class=" form-control-label">Company</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="company" value="{{$data->company}}" name="company" placeholder="Company" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="address" class=" form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="address" value="{{$data->address}}" name="address" placeholder="Address" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="phone" class=" form-control-label">Phone</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="phone" name="phone" value="{{$data->phone}}" placeholder="Phone" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email" class=" form-control-label">E-mail</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="email" name="email" value="{{$data->email}}" placeholder="E-mail" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="fax" class=" form-control-label">Fax</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="fax" name="fax" value="{{$data->fax}}" placeholder="Fax" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="icon" class=" form-control-label">Icon</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="icon-input" value="{{$data->icon}}" name="icon" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="smtpserver" class="form-control-label">Smtp Server</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="smtpserver" value="{{$data->smtpserver}}" name="smtpserver" placeholder="Smtp Server" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="smtpemail" class="form-control-label">Smtp E-mail</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="smtpemail" value="{{$data->smtpemail}}" name="smtpemail" placeholder="Smtp Server" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="smtppassword" class="form-control-label">Smtp Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="smtppassword" value="{{$data->password}}" name="smtppassword" placeholder="Smtp Password" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="smtpport" class="form-control-label">Smtp Port</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="smtpport" value="{{$data->smtpsupport}}" name="smtpport" placeholder="Smtp Port" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="social-content" role="tabpanel" aria-labelledby="set-social">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="facebook" class="form-control-label">Facebook</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="facebook" value="{{$data->facebook}}" name="facebook" placeholder="Facebook" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="instagram" class="form-control-label">Instagram</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="instagram" value="{{$data->instagram}}" name="instagram" placeholder="Instagram" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="twitter" class="form-control-label">Twitter</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="twitter" value="{{$data->twitter}}" name="twitter" placeholder="Twitter" class="form-control">
                                    </div>
                                </div>
                            </div>
                                
                            <div class="tab-pane fade" id="about-content" role="tabpanel" aria-labelledby="set-about">
                                <textarea name="aboutus" rows="5" id="about-text" class="border p-2" style="width: 100%; display: none;">{{$data->aboutus}}</textarea>
                            </div>
                            
                            <div class="tab-pane fade" id="contact-content" role="tabpanel" aria-labelledby="set-content">
                                <textarea name="contact" rows="5" id="contact-text" class="border p-2" style="width: 100%; display: none;">{{$data->contact}}</textarea>
                            
                            </div>

                            <div class="tab-pane fade" id="references-content" role="tabpanel" aria-labelledby="set-refernces">
                                <textarea name="references" rows="5" id="references-text" class="border p-2" style="width: 100%; display: none;">{{$data->references}}</textarea>
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection