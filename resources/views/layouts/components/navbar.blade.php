<!--Nav bar start-->
<div class="manu_bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopad">
                <nav class="navbar navbar-expand-lg navbar-light bg-light1">
                    <img class="logo" src="img/lg.png" alt="">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul  id="menusection" class="navbar-nav pull-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('welcome.index')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('jobs.index')}}">Jobs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">My Jobs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Trainee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('companies.index')}}">Companies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary btn-lg outline"  href="{{route('jobs.postJob')}}"> <i class="fas fa-folder-plus"></i> Post Job</a>
                            </li>
                        </ul>
                        <ul id="settings" class="nav navbar-nav flex-row justify-content-between">
                            <li class="nav-item order-2 order-md-2"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                            <li class="dropdown order-1">
                                <a href="{{ url('/login') }}" class="btn btn-default">Login <span class="caret"></span></a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>
</div>
<!---Nav bar End--->
