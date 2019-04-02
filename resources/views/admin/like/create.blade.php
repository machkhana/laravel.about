@extends('admin.layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">კატეგორიის დამატება

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.like.store')}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('POST')}}
                            <div >
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label for="disabledTextInput">დასახელება</label>
                                        <input type="text" name="catname" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <label for="disabledTextInput">სორტირება</label>
                                        <input type="text" name="sort" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">დამატება</button>
                            </div>
                        </form>
                    </div>

                    <hr>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>დასახელება</th>
                                <th>სორტირება</th>
                                <th width="15">პარამეტრები</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($likecategories as $likecat)
                                <tr>

                                    <td>{{$likecat->catname}}</td>
                                    <td>{{$likecat->sort}}</td>
                                    <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-{{$likecat->id}}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                    <a href="{{route('admin.like.destroy',$likecat->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <!-- The Modal -->
                                <div class="modal" id="myModal-{{$likecat->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal Heading</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <!-- Modal body -->
                                            <form action="{{route('admin.like.update',$likecat->id)}}" method="POST">
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                {{method_field('POST')}}
                                                <div >
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <label for="disabledTextInput">დასახელება</label>
                                                            <input type="text" name="catname" value="{{$likecat->catname}}" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-6">
                                                            <label for="disabledTextInput">სორტირება</label>
                                                            <input type="text" name="sort" value="{{$likecat->sort}}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">ცვლილება</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection