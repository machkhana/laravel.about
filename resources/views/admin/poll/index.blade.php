@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">შეფასება მომხრაბელების მიერ
                        <a href="{{ route('admin.export') }}" class="btn btn-success">Export to .xlsx</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>სახელი</th>
                                    <th>გვარი</th>
                                    <th>მობილური</th>
                                    <th>დამ. თარიღი</th>
                                    <th>პარამეტრები</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($polls as $poll)
                                <tr>
                                    <td>{{$poll->username}}</td>
                                    <td>{{$poll->surname}}</td>
                                    <td>{{$poll->mobile}}</td>
                                    <td>{{substr($poll->created_at,0,10)}}</td>
                                    <td width="150">
                                        <a href="{{route('admin.poll.show',$poll->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{route('admin.poll.destroy',$poll->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>სახელი</th>
                                <th>გვარი</th>
                                <th>მობილური</th>
                                <th>დამ. თარიღი</th>
                                <th>პარამეტრები</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
