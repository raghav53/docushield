@extends('admin/layout')
@section('content')


<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Dashboard</h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="{{url('adminDashboard')}}">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5 class="mb-4">Content</h5>
                <div class="row icon-cards-row mb-4">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-6 mb-4"><a href="{{url('mainBanner')}}" class="card">
                            <div class="card-body text-center"><i class="iconsminds-folder-add--"></i>
                                <p class="card-text font-weight-semibold mb-0">Main Banner</p>
                                <!-- <p class="lead text-center">10</p> -->
                            </div>
                        </a></div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-6 mb-4"><a href="{{url('secMainBanner')}}" class="card">
                            <div class="card-body text-center"><i class="iconsminds-folder-add--"></i>
                                <p class="card-text font-weight-semibold mb-0">Sec Main Banner</p>
                                <!-- <p class="lead text-center">10</p> -->
                            </div>
                        </a></div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-6 mb-4"><a href="{{url('everythingYouNeed')}}" class="card">
                            <div class="card-body text-center"><i class="iconsminds-folder-edit"></i>
                                <p class="card-text font-weight-semibold mb-0">Need To know Section</p>
                                <!-- <p class="lead text-center">10</p> -->
                            </div>
                        </a></div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-6 mb-4"><a href="{{url('whatTheySay')}}" class="card">
                            <div class="card-body text-center"><i class="iconsminds-folder-edit"></i>
                                <p class="card-text font-weight-semibold mb-0"> What they say Section</p>
                                <!-- <p class="lead text-center">10</p> -->
                            </div>
                        </a></div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-6 mb-4"><a href="{{url('blog')}}" class="card">
                            <div class="card-body text-center"><i class="iconsminds-folder-edit"></i>
                                <p class="card-text font-weight-semibold mb-0">Blog Section</p>
                                <!-- <p class="lead text-center">40</p> -->
                            </div>
                        </a></div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-6 mb-4"><a href="{{url('recentMedia')}}" class="card">
                            <div class="card-body text-center"><i class="iconsminds-folder-edit"></i>
                                <p class="card-text font-weight-semibold mb-0">Recent Media Section</p>
                                <!-- <p class="lead text-center">40</p> -->
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection