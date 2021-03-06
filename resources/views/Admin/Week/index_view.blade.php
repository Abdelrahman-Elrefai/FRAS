@extends('layouts.admin_app')
<!-- the title section  -->
@section('title')
Edit Week
@endsection
<!-- the content section -->
@section('content')
<div class="col-lg-12">
        <a class="btn btn-link" style="font-size:16px;" href="{{route('Week.Add')}}"><span class="fa fa-calendar fa-fw"></span>Add Week</a>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Week
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table width="100%"
                            class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline collapsed"
                            id="dataTables-example" role="grid" aria-describedby="dataTables-example_info"
                            style="width: 100%;">
                            <thead>
                                <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                        colspan="1" aria-label="ID: activate to sort column descending"
                                        style="width: 71px;" aria-sort="ascending">ID</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                        colspan="1" aria-label="Name: activate to sort column descending"
                                        style="width: 71px;" aria-sort="ascending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                        colspan="1" aria-label="Action: activate to sort column ascending"
                                        style="width: 61px;">Action</th>
                                        
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($weeks as $week)
                                <tr class="gradeA odd" role="row">
                                    <td class="sorting_1">{{$week->id}}</td>
                                    <td class="sorting_1">{{$week->name}}</td>
                                    <td class="center text-center">
                                        <a class="btn btn-outline btn-danger btn-sm" style="margin-bottom:5px;" href="{{route('Week.Delete',['id'=>$week->id])}}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>


@endsection
