@extends('web.layouts.app')
@section('content')
    <section id="top-area">
        <!--<header>
            <div class="container">
                <div class="row" style="text-align:center;"><img src="img/logo.png"/></div></div>
            </div>
        </header>-->
        <div class="container">
            <div class="row">
                <div class="col-md-12 main-title">
                    <h1>მომხმარებლის რჩევები</h1>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="main">
        <!-- Start Survey container -->
        <div id="survey_container">
            <div>
                @if(count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="col-md-12">
                <a href="" class="reload"><i class="fa fa-refresh" aria-hidden="true"></i></a>
            </div>
            <form id="regForm" action="{{route('addpoll')}}" method="POST" >
                <!-- One "tab" for each step in the form: -->
                {{csrf_field()}}
                {{method_field('POST')}}
                <div class="tab">
                    <h3>სქესი</h3>
                    <div data-toggle="buttons" style="text-align: center;">
                        <label class="btn btn-primary mybuttons">
                            <input name="sex" value="მდედრობითი" type="radio" id="option1" autocomplete="off" {{old('sex')}}> მდედრობითი
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="sex" value="მამრობითი" type="radio" id="option1" autocomplete="off" {{old('sex')}}> მამრობითი
                        </label>
                    </div>
                </div>
                <div class="tab">
                    <input name="sendfeedback" type="hidden"/>
                    <h3>თქვენი სახელი / გვარი</h3>
                    <p><input placeholder="სახელი" name="username" class="textform" {{old('username')}}></p>
                    <p><input placeholder="გვარი" name="surname" class="textform" {{old('surname')}}></p>
                </div>
                <div class="tab">
                    <input name="sendfeedback" type="hidden"/>
                    <h3>ასაკი</h3>
                    <div class="row">
                        <div class='col-sm-4 col-sm-offset-4'>
                            <div class="form-group">
                                <input type='text' name="birthday" id='datetimepicker1' class="textform form_datetime text-center" {{old('birthday')}}/>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datetimepicker({
                                    format: 'YYYY-MM-DD',
                                    locale:'ge',
                                    pickTime: false
                                })
                            });
                        </script>
                    </div>
                </div>
                <div class="tab">
                    <input name="sendfeedback" type="hidden"/>
                    <h3>საცხოვრებელი ქალაქი</h3>
                    <div class="row">
                        <div class="autocomplete col-sm-12">
                            <p><input placeholder="" id="myInput"  name="address" class="textform" {{old('address')}}></p>
                            @include('web.partials._autosearch')
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <input name="sendfeedback" type="hidden"/>
                    <h3>მობილური</h3>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <p><input placeholder=""  name="mobile" class="textform" {{old('mobile')}}></p>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <h3>გაქვთ თუ არა მიმდინარე რემონტი ?</h3>
                    <div data-toggle="buttons" style="text-align: center;">
                        <label class="btn btn-primary mybuttons">
                            <input name="repair" value="კი" type="radio" id="option1" autocomplete="off" {{old('repair')}}> კი
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="repair" value="არა" type="radio" id="option1" autocomplete="off" {{old('repair')}}> არა
                        </label>
                    </div>
                </div>
                <div class="tab">
                    <h3>რა მოგეწონათ გორგიაში ?</h3>
                    <div data-toggle="buttons">
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_1" value="1" type="checkbox" autocomplete="off"> აბაზანა/კერამიკა
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_2" value="1" type="checkbox"  autocomplete="off"> სამშენებლო
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_3" value="1" type="checkbox"  autocomplete="off"> გათბობა
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_4" value="1" type="checkbox"  autocomplete="off"> ხელსაწყოები
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_5" value="1" type="checkbox"  autocomplete="off"> ბაღი
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_6" value="1" type="checkbox"  autocomplete="off"> ელექტროობა
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_7" value="1" type="checkbox"  autocomplete="off"> ლამინატი
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_8" value="1" type="checkbox"  autocomplete="off"> კარ-ფანჯარა
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_9" value="1" type="checkbox"  autocomplete="off"> შპალერი
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_10" value="1" type="checkbox"  autocomplete="off"> ლაქ საღებავები
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_11" value="1" type="checkbox"  autocomplete="off"> საყოფაცხოვრებო
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_12" value="1" type="checkbox"  autocomplete="off"> სახურავი
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_13" value="1" type="checkbox"  autocomplete="off"> ავეჯი
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_14" value="1" type="checkbox"  autocomplete="off"> ტექსტილი
                        </label>
                        <label class="btn btn-primary mybuttons">
                            <input name="likegorgia_15" value="1" type="checkbox"  autocomplete="off"> სხვა
                        </label>
                    </div>
                </div>
                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>
        </div>
    </section>
@endsection