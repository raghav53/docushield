@extends('admin/layout')
@section('content')

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Blog </h1>
                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="{{url('/adminDashboard')}}">Dashboard</a></li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">:Data</li> -->
                    </ol>
                </nav>
                <div class="separator mb-5"></div>
            </div>
        </div>
        <!-- creators Data table -->
        <!-- 1 for game and 2 for console -->


        <!-- Game Data -->
        <div class="row mb-4" id="game">
            <div class="col-12 data-tables-hide-filter">
                <div class="card">
                    <div class="card-body">
                        @if($count>1)
                        @else
                        <button class="btn btn-outline-secondary btn-lg mb-1 " data-toggle="modal" data-backdrop="static" data-target="#exampleModalRight" style="float: right;" onclick="addNew(0,' ','','')" type="button"> Add New</button>
                        @endif
                        <table class="data-table data-tables-pagination responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                            <thead>
                                <tr>
                                    <!-- <th>S.No</th> -->
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Keywords</th>
                                  
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($data as $list)
                                <tr>
                                    <!-- <td>
                                        <p class="text-muted">{{$i++}}</p>
                                    </td> -->
                                    <td>
                                        <p class="list-item-heading">{{$list->header}}</p>
                                    </td>
                                    
                                    <td>
                                        <p class="list-item-heading"><img style="width: 70px; height:70px;" src="{{asset('images')}}/{{$list->image}}"></p>
                                    </td>
                                    <td>
                                        <p class="list-item-heading">{{$list->keywords}}</p>
                                    </td>
                                    <td>
                                        <div class="simple-line-icons">
                                            <a href="javascript:void(0)">
                                                <div class="glyph">
                                                    <div class="glyph-icon simple-icon-note" data-toggle="modal" data-backdrop="static" data-target="#exampleModalRight" onclick="addNew('{{$list->id}}','{{$list->header}}','{{$list->text}}','{{$list->image}}','{{$list->link}}',0,'{{$list->name}}','{{$list->position}}','','{{$list->keywords}}')"></div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="glyph">
                                                    <div class="glyph-icon simple-icon-trash" onclick="DeleteMainPageData({{$list->id}})"></div>
                                                </div>
                                            </a>
                                        </div>

                                    </td>
                                    <!-- <input type="hidden" id="descriptionData" value="{{$list->description}}"> -->
                                    <textarea style="display: none;" class="form-control" id="descriptionData_{{$list->id}}" name="description" >{{$list->description}}</textarea>
                                    <textarea style="display: none;" class="form-control" id="short_descriptionData_{{$list->id}}"  name="description" >{{$list->short_desc}}</textarea>
                                    <input type="hidden" id="facebookData_{{$list->id}}" class="form-control" value="{{$list->fb_link}}"  >
                                    <input type="hidden" id="twitterData_{{$list->id}}" class="form-control" value="{{$list->twitter_link}}"  >
                                    <input type="hidden" id="youtubeData_{{$list->id}}" class="form-control"value="{{$list->youtube_link}}"  >
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="card mb-4   ">
        <div class="card-body">

            <!-- <div class="modal fade modal-right" id="exampleModalRight" tabindex="-1" role="dialog" aria-labelledby="exampleModalRight" aria-hidden="true">
                <div class="modal-dialog" role="document"> -->
                            <div class="modal fade bd-example-modal-lg" id="exampleModalRight" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addTitle"></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('saveMainPageData')}}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                @csrf
                                <div class="form-group"><label>Title*</label> <input type="text" name="header" id="header" class="form-control" placeholder="" required></div>
                                <span id="upload_images"> </span>
                                <div class="form-group"><label>Name</label> <input type="text" name="name" id="name" class="form-control" placeholder="" ></div>
                                <div class="form-group"><label> Position</label> <input type="text" name="position" id="position" class="form-control" placeholder="" ></div>

                                <div class="form-group"><label>Keywords*</label> <input type="text" name="keywords" id="keywords" class="form-control" placeholder="" required></div>
                                <div class="form-group"><label>Short Desc*</label> <textarea  name="short_desc" id="short_desc" class="form-control" placeholder="" rows="8" cols="200" required></textarea></div>
                                <div class="form-group"><label>Description*</label>   <textarea class="form-control"  id="description" placeholder="Enter the Description" name="description" required></textarea></div>
                                <div class="form-group"><label>Facebook Link</label> <input type="text" name="fb_link" id="fb_link" class="form-control" placeholder="" ></div>
                                <div class="form-group"><label>Twitter Link</label> <input type="text" name="twitter_link" id="twitter_link" class="form-control" placeholder="" ></div>
                                <div class="form-group"><label>Youtube Link</label> <input type="text" name="youtube_link" id="youtube_link" class="form-control" placeholder="" ></div>
                                <input type="hidden" name="home_page" id="home_page">
                                <input type="hidden" name="type" id="type" value="4">
                                <div class="modal-footer"> <button type="submit" class="btn btn-primary">Submit</button><button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection