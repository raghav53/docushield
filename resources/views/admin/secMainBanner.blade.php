@extends('admin/layout')
@section('content')

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Main Banner </h1>
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
                        @if($count>0)
                        @else
                        <button class="btn btn-outline-secondary btn-lg mb-1 " data-toggle="modal" data-backdrop="static" data-target="#exampleModalRight" style="float: right;" onclick="addNew(0,' ','','')" type="button"> Add New</button>
                        @endif
                        <table class="data-table data-tables-pagination responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                            <thead>
                                <tr>
                                    <!-- <th>S.No</th> -->
                                    <th>Title</th>
                                    <th>Text</th>
                                    <th>Image</th>
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
                                        <p class="list-item-heading">{{substr($list->header,0,10)}}..</p>
                                    </td>
                                    <td>
                                        <p class="list-item-heading">{{substr($list->text,0,10)}}..</p>
                                    </td>
                                    <td>
                                        <p class="list-item-heading"><img style="width: 70px; height:70px;" src="{{asset('images')}}/{{$list->image}}"></p>
                                    </td>
                                   
                                    <td>
                                        <div class="simple-line-icons">
                                            <a href="javascript:void(0)">
                                                <div class="glyph">
                                                    <div class="glyph-icon simple-icon-note" data-toggle="modal" data-backdrop="static" data-target="#exampleModalRight" onclick="addNew('{{$list->id}}','{{$list->header}}','{{$list->text}}','{{$list->image}}','{{$list->link}}',0,'','','{{$list->data_type}}')"></div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="glyph">
                                                    <div class="glyph-icon simple-icon-trash" onclick="DeleteMainPageData({{$list->id}})"></div>
                                                </div>
                                            </a>
                                        </div>

                                    </td>
                                    <input type="hidden" id="headerData_{{$list->id}}" class="form-control" value="{{$list->header}}"  >
                                    <input type="hidden" id="textData_{{$list->id}}" class="form-control" value="{{$list->text}}"  >
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="card mb-4">
        <div class="card-body">
        <div class="modal fade bd-example-modal-lg" id="exampleModalRight" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
            <!-- <div class="modal fade modal-right" id="exampleModalRight" tabindex="-1" role="dialog" aria-labelledby="exampleModalRight" aria-hidden="true">
                <div class="modal-dialog" role="document"> -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addTitle"></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('saveMainPageData')}}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                                @csrf
                                <div class="form-group"><label>Title</label> <input type="text" name="header" id="header" class="form-control" placeholder="" required></div>
                                <div class="form-group"><label>Text</label> <input type="text" name="text" id="text" class="form-control" placeholder="" required></div>
                                <span id="upload_images"> </span>

                             
                              
                                <input type="hidden" name="home_page" id="home_page">
                                <input type="hidden" name="type" id="type" value="6">
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