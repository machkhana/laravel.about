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
                                                        @foreach($likes as $like)
                                                        ['{{$like->catname}}',  {{ count($like->results) }}],
                                                        @endforeach
                                                    ]);
                                                    var  options = {
                                                        title: '',
                                                        is3D: true,
                                                        sliceVisibilityThreshold: 0
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