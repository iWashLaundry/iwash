@extends('dashboard.main')
@section('content')
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-action justify-content-between">
                        New Orders
                    </a>
                    <a href="#" class="list-group-item list-group-action justify-content-between">
                        New Customers
                    </a>
                    <a href="#" class="list-group-item list-group-action justify-content-between">
                        Visitors
                    </a>
                    <a href="#" class="list-group-item list-group-action justify-content-between">
                        Orders Claimed
                    </a>
                    <a href="#" class="list-group-item list-group-action justify-content-between">
                        Orders Overdue
                    </a>
                    <a href="#" class="list-group-item list-group-action justify-content-between">
                        Sales
                    </a>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-action justify-content-between">
                        Pending
                    </a>
                    <a href="#" class="list-group-item list-group-action justify-content-between">
                        In Progress
                    </a>
                    <a href="#" class="list-group-item list-group-action justify-content-between">
                        Ready
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Week</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Month</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Year</a>
                    </li>
                </ul>
                <div>
                    <canvas id="myChart" width="150" height="75"></canvas>
                    <script>
                    var ctx = document.getElementById("myChart");
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ["April 1", "April 2", "April 3", "April 4", "April 5", "April 6", "April 7"],
                            datasets: [{
                                label: 'Daily Sales',
                                data: [12, 19, 3, 5, 2, 3, 5],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                    </script>
                </div>
            </div>
        </div>
@endsection