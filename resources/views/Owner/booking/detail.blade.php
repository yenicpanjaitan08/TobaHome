@extends('Owner.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-2">
                <h1>Booking Detail</h1>
            </div>
            <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">BookingDetail</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content-wrapper -->

<section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-user"></i>
                Description Booking
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">ID Order</dt>
                <dd class="col-sm-9">{{$data_booking->id}}</dd>
                <dt class="col-sm-3">ID Visitor</dt>
                <dd class="col-sm-9">{{$data_booking->id_visitor}}</dd>
                <dt class="col-sm-3">Visitor Name</dt>
                <dd class="col-sm-9">{{$data_booking->name}}</dd>
                <dt class="col-sm-3">Check In</dt>
                <dd class="col-sm-9">{{$data_booking->check_in}}</dd>
                <dt class="col-sm-3">Check Out</dt>
                <dd class="col-sm-9">{{$data_booking->check_out}}</dd>
                <dt class="col-sm-3">Payment</dt>
                <dd class="col-sm-9">{{$data_booking->payment}}</dd>
                <dt class="col-sm-3">Total (Rp)</dt>
                <dd class="col-sm-9"><span>Rp.</span> {{$data_booking->total}}</dd>
            </dl>
        </div>
        <!-- /.card-body -->
        <div class="col-12">
            <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc"
                        role="tab" aria-controls="product-desc" aria-selected="true">Homestay</a>
                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments"
                        role="tab" aria-controls="product-comments" aria-selected="false">Room</a>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel">
                    <table id="example2" class="table table-hover">
                        <thead>

                            <tr>
                                <th>ID Homestay</th>
                                <th>Homestay Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$data_booking->id_homestay}}</td>
                                @foreach($data_booking->homestay as $homestay)
                                <td>{{$homestay->name}}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                    <table id="example2" class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID Room</th>
                                <th>Room Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#</td>
                                <td>#</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card -->
    </div>

</section>
@endsection