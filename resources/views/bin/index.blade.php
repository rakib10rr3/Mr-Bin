@extends('layouts.app')

@section('styles')
    <style>
        #map {
            height: 400px;
        }
    </style>
@endsection

@section('content')

    <div class="card mb-4">
        <div class="card-body">
            <div id="map"></div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">

            <div class="row">

                <div class="col-md-4 align-self-center">
                    <div class="ts-bin-info text-center row">
                        <div class="col-md-6">
                            <p><strong>Bin Type</strong></p>
                            <p>Waste Bin</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Bin Number</strong></p>
                            <p>1</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col text-center">
                            <input id="liveBin1" type="text" class="dial">
                        </div>
                    </div>
                </div>

                <div class="col-md-8 align-self-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <canvas id="canvas1"></canvas>
                        </div>
                    </div>

                    <form id="query" action="">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"
                                      id="inputGroup-sizing-default">History Custom Query</span>
                            </div>
                            <input id="val" name="val" type="number" min="0" class="form-control"
                                   placeholder="Last Entry"
                                   aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Show</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">

            <div class="row">

                <div class="col-md-4 align-self-center">
                    <div class="ts-bin-info text-center row">
                        <div class="col-md-6">
                            <p><strong>Bin Type</strong></p>
                            <p>Waste Bin</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Bin Number</strong></p>
                            <p>1</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col text-center">
                            <input id="liveBin1" type="text" class="dial">
                        </div>
                    </div>
                </div>

                <div class="col-md-8 align-self-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <canvas id="canvas2"></canvas>
                        </div>
                    </div>

                    <form id="query" action="">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"
                                      id="inputGroup-sizing-default">History Custom Query</span>
                            </div>
                            <input id="val" name="val" type="number" min="0" class="form-control"
                                   placeholder="Last Entry"
                                   aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Show</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">

            <div class="row">

                <div class="col-md-4 align-self-center">
                    <div class="ts-bin-info text-center row">
                        <div class="col-md-6">
                            <p><strong>Bin Type</strong></p>
                            <p>Waste Bin</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Bin Number</strong></p>
                            <p>1</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col text-center">
                            <input id="liveBin1" type="text" class="dial">
                        </div>
                    </div>
                </div>

                <div class="col-md-8 align-self-center">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <canvas id="canvas3"></canvas>
                        </div>
                    </div>

                    <form id="query" action="">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"
                                      id="inputGroup-sizing-default">History Custom Query</span>
                            </div>
                            <input id="val" name="val" type="number" min="0" class="form-control"
                                   placeholder="Last Entry"
                                   aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Show</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

@endsection


@section('scripts')

    <script>

        function initMap(num) {
            console.log(num);
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: new google.maps.LatLng(22.3655093, 91.8136954),
                mapTypeId: 'roadmap'
            });

            var features = [
                {
                    position: new google.maps.LatLng(22.3655093, 91.8136954),
                    type: 'info',
                    msg: 'BIN no. 1 '+"<br/>"+'Place: KDA IT'+"<br/>"+'Bin Status: ' + String(Math.ceil(num)) + '%'
                }, {
                     position: new google.maps.LatLng(22.3657156, 91.8138964),
                    type: 'info',
                    msg: 'BIN no. 2 '+"<br/>"+'Place: SB TV'+"<br/>"+'Bin Status: ' + String(Math.ceil(num)) + '%'
                }, {
                    position: new google.maps.LatLng(22.3650085,91.8147103),
                    type: 'info',
                    msg: 'BIN no. 3 '+"<br/>"+'Place: KDA IT'+"<br/>"+'Bin Status: ' + String(Math.ceil(num)) + '%'
                }, {
                    position: new google.maps.LatLng(22.3651995,91.8135715),
                    type: 'info',
                    msg: 'BIN no. 4 '+"<br/>"+'Place: KDA IT'+"<br/>"+'Bin Status: ' + String(Math.ceil(num)) + '%'
                },
                // {
                //     position: new google.maps.LatLng(-33.91725, 151.23011),
                //     type: 'info',
                //     msg: 'Bin 5'
                // }, {
                //     position: new google.maps.LatLng(-33.91872, 151.23089),
                //     type: 'info',
                //     msg: 'Bin 6'
                // }, {
                //     position: new google.maps.LatLng(-33.91784, 151.23094),
                //     type: 'info',
                //     msg: 'Bin 7'
                // },

            ];

            // Create markers.
            var infowindow = new google.maps.InfoWindow();
            features.forEach(function (feature) {
                addMarker(feature, map)
            });

            function addMarker(feature, map) {
                // Add the marker at the clicked location, and add the next-available label
                // from the array of alphabetical characters.
                var marker = new google.maps.Marker({
                    position: feature.position,
                    icon: '/images/recycling-bin.png',
                    map: map,
                    content: feature.msg
                });
                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.setContent(this.content);
                    infowindow.open(map, this);
                });

            }
        }
    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyArzFMzU-OzWoy2T5tzQaWqWI_usPqNuck">
    </script>

    <script>
        function update_knob(obj, value) {
            $(obj).val(value);
            var $color = '#2ecc71';

            if(parseFloat(value) > 80)
            {
                $color = '#e74c3c';
            } else if(parseFloat(value) > 40)
            {
                $color = '#f1c40f';
            }

            $(obj).knob({
                'data-displayInput': false,
                'data-linecap': 'round',
                'readOnly': true,
                'fgColor': $color,
            });
            $(obj).trigger('change');
        }

        $(function () {

            //update_knob(".dial", 0);

        });
    </script>

    <script>
        $(function () {
            var url = "{{url('/api/get-all-data')}}";

            var ctx = new Array();

            ctx.push(document.getElementById("canvas1").getContext('2d'));
            ctx.push(document.getElementById("canvas2").getContext('2d'));
            ctx.push(document.getElementById("canvas3").getContext('2d'));

            // console.log(ctx);

            $('#query').submit(function (event) {
                event.preventDefault();

                $data = {
                    value: $('#val').val(),
                };

                $(document).ready(function () {
                    $.get(url, $data, function (response) {
                        var Dates = new Array();
                        var Labels = new Array();
                        var distanceValues = new Array();

                        var json = JSON.parse(response);

                        json.feeds.forEach(function (data) {
                            // console.log(data);
                            Dates.push(data.created_at);
                            Labels.push(data.entry_id);
                            var latestValue = parseFloat(255-data.field1);
                            distanceValues.push(latestValue.toFixed(2));
                        });

                        // ctx.clearRect(0, 0, canvas.width, canvas.height);

                        ctx.forEach(function (element) {
                            element.clearRect(0, 0, element.width, element.height);

                            var myChart = new Chart(element, {
                                type: 'line',
                                data: {
                                    labels: Dates,
                                    datasets: [{
                                        label: 'Distance',
                                        data: distanceValues,
                                        backgroundColor: getRandomColor(),
                                        borderColor: getRandomColor(),
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        });


                        update_knob(".dial", json.latest_value);
                        initMap(json.latest_value);
                    });
                });


            });

            $.get(url, function (response) {

                var Dates = new Array();
                var Labels = new Array();
                var distanceValues = new Array();

                var json = JSON.parse(response);

                json.feeds.forEach(function (data) {
                    // console.log(data);
                    Dates.push(data.created_at);
                    Labels.push(data.entry_id);
                    distanceValues.push(255-data.field1);
                });

                ctx.forEach(function (element) {
                    // element.clearRect(0, 0, canvas.width, canvas.height);

                    var myChart = new Chart(element, {
                        type: 'line',
                        data: {
                            labels: Dates,
                            datasets: [{
                                label: 'Distance',
                                data: distanceValues,
                                backgroundColor: getRandomColor(),
                                borderColor: getRandomColor(),
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                });

                update_knob(".dial", json.latest_value);
                initMap(json.latest_value);

            });
        });

        function getRandomColor() {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;

            // var datasetValue = [];
            // for (var j = 0; j < team_member_count; j++) {
            //     datasetValue[j] = {
            //         backgroundColor: getRandomColor,
            //         label: name[j],
            //         data: info_data,
            //     };
            // }
            // var looped_data = datasetValue
            //
            //
            // var info_process = new Chart(ctx2, {
            //     type: 'radar',
            //     data: {
            //         labels: labels_info,
            //         datasets: looped_data
            //     },
            //     options: {
            //         scale: {
            //             display: true,
            //             ticks: {
            //                 beginAtZero: true,
            //             }
            //         },
            //         responsive: true,
            //         maintainAspectRatio: true,
            //     }
            // });
        }
    </script>
@endsection
