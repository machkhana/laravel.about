@extends('admin.layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">მოწონება მომხრაბელების მიერ
                        <a href="{{route('admin.like.create')}}" class="btn btn-success btn-sm float-right">კატეგორიის დამატება</a>
                    </div>
                    <div class="card-body">
                        <section class="content">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                            </div><!-- /.row -->
                            <!-- Main row -->
                            <div class="row">
                                <section class="content">
                                    <div class="box">
                                        <div class="box-header"></br>
                                        </div><!-- /.box-header -->
                                        <div style="width:100%; text-align:center;">
                                            <script type="text/javascript">
                                                google.charts.load("current", {packages:["corechart"]});
                                                google.charts.setOnLoadCallback(drawChart);
                                                function drawChart() {
                                                    var data = google.visualization.arrayToDataTable([
                                                        ['Task', 'Hours per Day'],

                                                        ['აბაზანა/კერამიკა',   @foreach($likegorgia_1 as $l1){{$l1->likegorgia_1}}@endforeach],
                                                        ['სამშენებლო',   @foreach($likegorgia_2 as $l_2){{$l_1->likegorgia_2}}@endforeach],
                                                        ['გათბობა',   @foreach($likegorgia_3 as $l_3){{$l_3->likegorgia_3}}@endforeach],
                                                        ['ხელსაწყოები',   @foreach($likegorgia_4 as $l_4){{$l_4->likegorgia_4}}@endforeach],
                                                        ['ბაღი',   @foreach($likegorgia_5 as $l_5){{$l_5->likegorgia_5}}@endforeach],
                                                        ['ელექტროობა',   @foreach($likegorgia_6 as $l_6){{$l_6->likegorgia_6}}@endforeach],
                                                        ['ლამინატი',   @foreach($likegorgia_7 as $l_7){{$l_7->likegorgia_7}}@endforeach],
                                                        ['კარ-ფანჯარა',   @foreach($likegorgia_8 as $l_8){{$l_8->likegorgia_8}}@endforeach],
                                                        ['შპალერი',   @foreach($likegorgia_9 as $l_9){{$l_9->likegorgia_9}}@endforeach],
                                                        ['ლაქ საღებავები',   @foreach($likegorgia_10 as $l_10){{$l_10->likegorgia_10}}@endforeach],
                                                        ['საყოფაცხოვრებო',   @foreach($likegorgia_11 as $l_11){{$l_11->likegorgia_11}}@endforeach],
                                                        ['სახურავი',   @foreach($likegorgia_12 as $l_12){{$l_12->likegorgia_12}}@endforeach],
                                                        ['ავეჯი',   @foreach($likegorgia_13 as $l_13){{$l_13->likegorgia_13}}@endforeach],
                                                        ['ტექსტილი',   @foreach($likegorgia_14 as $l_14){{$l_14->likegorgia_14}}@endforeach],
                                                        ['სხვა',   @foreach($likegorgia_15 as $l_15){{$l_15->likegorgia_15}}@endforeach]
                                                    ]);
                                                    var  options = {
                                                        title: '',
                                                        is3D: true,
                                                    };
                                                    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                                    chart.draw(data, options);
                                                }
                                            </script>
                                            <div id="piechart_3d" style="width: 1000px; height: 500px;"></div>
                                        </div>
                                    </div><!-- /.box -->
                                </section><!-- /.content -->
                            </div><!-- /.row (main row) -->
                        </section><!-- /.content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection