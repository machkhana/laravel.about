@extends('admin.layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">მოწონება მომხრაბელების მიერ</div>
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
                                                        @foreach($likecontrollers as $likegorgia)
                                                        ['აბაზანა/კერამიკა',   {{$likegorgia->likegorgia_1}}],
                                                        ['სამშენებლო',   {{$likegorgia->likegorgia_2}}],
                                                        ['გათბობა',   {{$likegorgia->likegorgia_3}}],
                                                        ['ხელსაწყოები',   {{$likegorgia->likegorgia_4}}],
                                                        ['ბაღი',   {{$likegorgia->likegorgia_5}}],
                                                        ['ელექტროობა',   {{$likegorgia->likegorgia_6}}],
                                                        ['ლამინატი',   {{$likegorgia->likegorgia_7}}],
                                                        ['კარ-ფანჯარა',   {{$likegorgia->likegorgia_8}}],
                                                        ['შპალერი',   {{$likegorgia->likegorgia_9}}],
                                                        ['ლაქ საღებავები',   {{$likegorgia->likegorgia_10}}],
                                                        ['საყოფაცხოვრებო',   {{$likegorgia->likegorgia_11}}],
                                                        ['სახურავი',   {{$likegorgia->likegorgia_12}}],
                                                        ['ავეჯი',   {{$likegorgia->likegorgia_13}}],
                                                        ['ტექსტილი',   {{$likegorgia->likegorgia_14}}],
                                                        ['სხვა',   {{$likegorgia->likegorgia_15}}]
                                                        @endforeach
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