@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @foreach($polls as $poll)
                    <div class="card-header">დამ. თარიღი: {{substr($poll->created_at,0,10)}}</div>
                    <div class="card-body">
                        <p>სახელი: {{$poll->username}}</p>
                        <p>გვარი: {{$poll->surname}}</p>
                        <p>მობილური: {{$poll->mobile}}</p>
                        <p>მისამართი: {{$poll->address}}</p>
                        <p>სქესი: {{$poll->sex}}</p>
                        <p>პირ. ნომერი: {{$poll->mobile}}</p>
                        <p>დაბ. თარიღი: {{$poll->birthday}}</p>
                        <p>მიმდინარე რემონტი: {{$poll->repair}}</p>
                        <hr>
                        <div class="text-center">
                            <h4>რა მოეწონა გორგიაში</h4>
                        </div>
                        <div class="row">

                            @foreach($likecategories as $likecategory)
                                <div class="col-sm-3">
                                    <i class="fa {{($likecategory->results->where('poll_id', $poll->id)->first() !== null) ? 'fa-check-square-o' : 'fa-square-o'}}" aria-hidden="true"></i>
                                    {{ $likecategory->catname}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection