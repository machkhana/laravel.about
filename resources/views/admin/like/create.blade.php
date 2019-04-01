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
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>დასახელება</th>
                                <th>სორტირება</th>
                                <th>პარამეტრები</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($likecategories as $likecat)
                                <tr>
                                    <td>{{$likecat->catname}}</td>
                                    <td>{{$likecat->sort}}</td>
                                    <td>
                                        <a href="{{route('admin.like.show',$likecat->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="{{route('admin.like.destroy',$likecat->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection