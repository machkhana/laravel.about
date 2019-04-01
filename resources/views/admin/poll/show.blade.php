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
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_1 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> აბაზანა/კერამიკა</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_2 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> სამშენებლო</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_3 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> გათბობა</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_4 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> ხელსაწყოები</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_5 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> ბაღი</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_6 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> ელექტროობა</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_7 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> ლამინატი</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_8 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> კარ-ფანჯარა</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_9 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> შპალერი</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_10 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> ლაქ საღებავები</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_11 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> საყოფაცხოვრებო</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_12 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> სახურავი</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_13 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> ავეჯი</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_14 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> ტექსტილი</div>
                            <div class="col-sm-3"><i class="fa fa-{{ ($poll->likegorgia_15 == 1)? 'check-square-o':'square-o' }}" aria-hidden="true"></i> სხვა</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection