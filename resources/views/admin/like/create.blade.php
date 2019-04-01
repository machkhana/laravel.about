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
                                        <input type="text" name="cat_name" class="form-control" >
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
                </div>
            </div>
        </div>
    </div>

@endsection