@extends('admin.layouts.master')

@section('content')
    <form action="" method="post" name="discountForm" id="discountForm">
        @csrf
        <div class="row">

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Code</label>
                    <input type="text" name="code" id="code" class="form-control">

                    @error('code')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <p></p>
                </div>
            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <p></p>
                </div>

            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Max Uses</label>
                    <input type="number" name="max_uses" id="max_uses" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <p></p>
                </div>

            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Max Uses User</label>
                    <input type="number" name="max_uses_user" id="max_uses_user" class="form-control">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <p></p>
                </div>

            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Type</label>
                    <select name="type" id="" class="form-control">
                        <option value="percent">Percent</option>
                        <option value="fixed">Fixed</option>
                    </select>
                    <p></p>
                </div>

            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Discount Amount</label>
                    <input type="text" name="discount" id="discount" class="form-control">
                    @error('discount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Min Amount</label>
                    <input type="text" name="min_amount" id="discount" class="form-control">

                </div>

            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Block</option>
                    </select>
                    <p></p>
                </div>

            </div>


            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Starts At</label>
                    <input type="text" name="starts_at" id="starts_at" class="form-control">

                </div>

            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Expires At</label>
                    <input type="text" name="expires_at" id="expires_at" class="form-control">

                </div>

            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                    <p></p>
                </div>
            </div>


        </div>
        <button type="submit" class="btn btn-info">SAVE</button>
    </form>
@endsection

@section('customJs')
    <script>
        jQuery(document).ready(function($) {

            $('#starts_at').datetimepicker({
                // options here
                format: 'Y-m-d H:i:s',
            });

            $('#expires_at').datetimepicker({
                // options here
                format: 'Y-m-d H:i:s',
            });

            "use strict";

            // Pie chart flotPie1
            var piedata = [{
                    label: "Desktop visits",
                    data: [
                        [1, 32]
                    ],
                    color: '#5c6bc0'
                },
                {
                    label: "Tab visits",
                    data: [
                        [1, 33]
                    ],
                    color: '#ef5350'
                },
                {
                    label: "Mobile visits",
                    data: [
                        [1, 35]
                    ],
                    color: '#66bb6a'
                }
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [{
                    label: "Direct Sell",
                    data: [
                        [1, 65]
                    ],
                    color: '#5b83de'
                },
                {
                    label: "Channel Sell",
                    data: [
                        [1, 35]
                    ],
                    color: '#00bfa5'
                }
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [
                [0, 3],
                [1, 5],
                [2, 4],
                [3, 7],
                [4, 9],
                [5, 3],
                [6, 6],
                [7, 4],
                [8, 10]
            ];

            var plot = $.plot($('#flotLine5'), [{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }], {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    series: [
                        [0, 18000, 35000, 25000, 22000, 0],
                        [0, 33000, 15000, 20000, 15000, 300],
                        [0, 15000, 28000, 15000, 30000, 5000]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    showLine: false,
                    showPoint: false,
                    fullWidth: true,
                    axisX: {
                        showGrid: true
                    }
                });

                chart.on('draw', function(data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect
                                    .height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById("TrafficChart");
                ctx.height = 150;
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [{
                                label: "Visit",
                                borderColor: "rgba(4, 73, 203,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(4, 73, 203,.5)",
                                data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                            },
                            {
                                label: "Bounce",
                                borderColor: "rgba(245, 23, 66, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(245, 23, 66,.5)",
                                pointHighlightStroke: "rgba(245, 23, 66,.5)",
                                data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                            },
                            {
                                label: "Targeted",
                                borderColor: "rgba(40, 169, 46, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(40, 169, 46, .5)",
                                pointHighlightStroke: "rgba(40, 169, 46,.5)",
                                data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [
                    [0, 18],
                    [2, 8],
                    [4, 5],
                    [6, 13],
                    [8, 5],
                    [10, 7],
                    [12, 4],
                    [14, 6],
                    [16, 15],
                    [18, 9],
                    [20, 17],
                    [22, 7],
                    [24, 4],
                    [26, 9],
                    [28, 11]
                ],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });

        $("#discountForm").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            $("button[type=submit]").prop('disabled', true);

            $.ajax({
                url: '{{ route('admin.vouchers.store') }}',
                type: 'POST',
                data: element.serialize(),
                dataType: 'json',
                success: function(response) {
                    $("button[type=submit]").prop('disabled', false);
                    if (response["status"] === true) {
                        // Xử lý khi tạo voucher thành công (ví dụ: hiển thị thông báo, chuyển hướng)
                        // alert('Voucher đã được tạo thành công!');
                        window.location.href = "{{ route('admin.vouchers.index') }}";

                        $("#code").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback').html("");
                        $("#discount").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback').html("");
                        $("#starts_at").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback').html("");
                        $("#expires_at").removeClass('is-invalid')
                            .siblings('p')
                            .removeClass('invalid-feedback').html("");

                    } else {
                        var errors = response['errors'];
                        // Xóa các thông báo lỗi cũ
                        $('.invalid-feedback').remove();
                        $('.is-invalid').removeClass('is-invalid');

                        // Hiển thị thông báo lỗi cho từng trường
                        $.each(errors, function(key, value) {
                            $('#' + key).addClass('is-invalid');
                            $('#' + key).after('<p class="invalid-feedback">' + value + '</p>');
                        });
                    }
                },
                error: function(error) {
                    // Xử lý lỗi chung
                    console.error('Có lỗi xảy ra:', error);
                    alert('Có lỗi xảy ra khi gửi dữ liệu. Vui lòng thử lại.');
                }
            });
        });

        // $("#discountForm").submit(function(event) {

        //     event.preventDefault();

        //     var element = $(this);

        //     $("button[type=submit]").prop('disabled', true);



        //     $.ajax({

        //         url: '{{ route('admin.vouchers.store') }}',

        //         type: 'post',

        //         data: element.serialize(),

        //         dataType: 'json',

        //         success: function(response) {

        //             $("button[type=submit]").prop('disabled', true);

        //             if (response["status"] == true) {



        //             } else {

        //                 var errors = response['errors'];

        //                 if (errors['code']) {

        //                     $("#code").addClass('is-invalid')

        //                         .siblings('p')

        //                         .addClass('invalid-feedback').html(errors['code']);

        //                 } else {

        //                     $("#code").removeClass('is-invalid')

        //                         .siblings('p')

        //                         .removeClass('invalid-feedback').html("");

        //                 }

        //             }

        //         }

        //     })

        // })
    </script>
@endsection
