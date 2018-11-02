@extends('layouts.dai_links')


@section('navbar')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent" id="navigation-example">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="{{url('/league')}}">League</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-default btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="">--}}
                            {{--<i class="material-icons">dashboard</i>--}}
                            {{--<p class="d-lg-none d-md-block">--}}
                                {{--Stats--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item dropdown">--}}
                        {{--<a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--<i class="material-icons">notifications</i>--}}
                            {{--<span class="notification">5</span>--}}
                            {{--<p class="d-lg-none d-md-block">--}}
                                {{--Some Actions--}}
                            {{--</p>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
                            {{--<a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>--}}
                            {{--<a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>--}}
                            {{--<a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>--}}
                            {{--<a class="dropdown-item" href="javascript:void(0)">Another Notification</a>--}}
                            {{--<a class="dropdown-item" href="javascript:void(0)">Another One</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="javascript:void(0)">--}}
                            {{--<i class="material-icons">person</i>--}}
                            {{--<p class="d-lg-none d-md-block">--}}
                                {{--Account--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </nav>

@endsection

@section('content')
    <?php
            $count = 0 ;
            $user = \App\User_Profile::where('user_id',$league->league_founder)->first() ;

    ?>
        <div class="row">
            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-3">

                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <p class="card-category">Winning Ratio</p>
                                <h3 class="card-title">{{$winningRatio}}
                                </h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <p class="card-category">Points</p>
                                <h3 class="card-title">{{$points}}
                                </h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{$league->league_name}}</h4>
                                <p class="card-category">Rankings Table </p>
                                <i> created by {{$user->username}}</i>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                    <th>Name</th>
                                    <th>Coins</th>
                                    <th>Score</th>
                                    </thead>
                                    <tbody>
                                    @foreach($player_names as $player_name)
                                    <tr>

                                        <td>{{$player_name}}</td>
                                        <td>{{$coins[$count]}}</td>
                                        <td>{{$score[$count]}}</td>
                                        <td><a href="" class="btn btn-primary btn-round btn-sm">Battle</a></td>
                                    </tr>
                                        <p hidden>{{$count += 1}}</p>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            {{--<div class="col-md-4">--}}
                    {{----}}
                {{--<div class="row">--}}
                    {{----}}
                    {{--<div class="">--}}
                        {{----}}
                        {{----}}
                    {{--</div>--}}
               {{----}}

            {{--</div>--}}
                {{----}}
            {{--</div>--}}

        </div>

@endsection