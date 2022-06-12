@extends('layouts.adminbase')

@section('head')
    
@endsection

@section('title','Surveyee Admin')

@section('content')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Dashboard</li>
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
        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">Welcome back
                            <span>{{ Auth::user()->name }}!</span>
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- STATISTIC-->
        <section class="statistic statistic2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--green">
                            <h2 class="number">10,368</h2>
                            <span class="desc">members online</span>
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--orange">
                            <h2 class="number">388,688</h2>
                            <span class="desc">items sold</span>
                            <div class="icon">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--blue">
                            <h2 class="number">1,086</h2>
                            <span class="desc">this week</span>
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--red">
                            <h2 class="number">$1,060,386</h2>
                            <span class="desc">total earnings</span>
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END STATISTIC-->

        <!-- STATISTIC CHART-->
        <section class="statistic-chart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">statistics</h3>
                    </div>
                </div>
                <div class="row" id="tables">
                    <div class="col-md-6 col-lg-4">
                        <!-- CHART-->
                        <div class="statistic-chart-1">
                            <h3 class="title-3 m-b-30">chart</h3>
                            <div class="chart-wrap">
                                <canvas id="widgetChart5"></canvas>
                            </div>
                            <div class="statistic-chart-1-note">
                                <span class="big">10,368</span>
                                <span>/ 16220 items sold</span>
                            </div>
                        </div>
                        <!-- END CHART-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- TOP CAMPAIGN-->
                        <div class="top-campaign">
                            <h3 class="title-3 m-b-30">top campaigns</h3>
                            <div class="table-responsive">
                                <table class="table table-top-campaign">
                                    <tbody>
                                        <tr>
                                            <td>1. Australia</td>
                                            <td>$70,261.65</td>
                                        </tr>
                                        <tr>
                                            <td>2. United Kingdom</td>
                                            <td>$46,399.22</td>
                                        </tr>
                                        <tr>
                                            <td>3. Turkey</td>
                                            <td>$35,364.90</td>
                                        </tr>
                                        <tr>
                                            <td>4. Germany</td>
                                            <td>$20,366.96</td>
                                        </tr>
                                        <tr>
                                            <td>5. France</td>
                                            <td>$10,366.96</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END TOP CAMPAIGN-->
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <!-- CHART PERCENT-->
                        <div class="chart-percent-2">
                            <h3 class="title-3 m-b-30">chart by %</h3>
                            <div class="chart-wrap">
                                <canvas id="percent-chart2"></canvas>
                                <div id="chartjs-tooltip">
                                    <table></table>
                                </div>
                            </div>
                            <div class="chart-info">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>products</span>
                                </div>
                                <div class="chart-note">
                                    <span class="dot dot--red"></span>
                                    <span>Services</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CHART PERCENT-->
                    </div>
                </div>
            </div>
        </section>
        <!-- END STATISTIC CHART-->

        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">Messages</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--light rs-select2--sm">
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                            <div class="table-data__tool-right">
                                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2 mb-5">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>subject</th>
                                        <th>date</th>
                                        <th>status</th>
                                        <th>status</th>
                                        <th>
                                            <a href="" class="btn btn-primary btn-md">
                                                ALL
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr class="tr-shadow">
                                            <td>{{$item->name}}</td>
                                            <td>
                                                <span class="block-email">{{$item->email}}</span>
                                            </td>
                                            <td class="desc">{{$item->subject}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <span class="status--process">{{$item->status}}</span>
                                            </td>
                                            <td>
                                                <a href="{{route('admin.message.show',['id' => $item->id])}}" class="btn btn-primary">Show</a>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->
    </div>
@endsection