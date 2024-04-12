@extends('index')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Transaksi</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="namaProduk">Nama Produk</label>
                                <input type="text" class="form-control" id="namaProduk" placeholder="Nama Produk"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="touchSpin3">Qty</label>
                                <div class="input-group touch-spin">
                                    <span class="input-group-btn input-group-prepend">
                                    </span>
                                    <input style="text-align: center" id="touchSpin3" type="text" value="0"
                                        name="qty" class="form-control">
                                    <span class="input-group-btn input-group-append">
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning">Clear</button>
                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="kasir">Kasir</label>
                                        <input type="text" class="form-control" id="kasir" placeholder="Kasir"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="select2SinglePlaceholder">Customer</label>
                                        <select class="select2-single-placeholder form-control" name="customer" id="select2SinglePlaceholder">
                                          <option value="">Select</option>
                                          <option value="fulan">Fulan</option>
                                          <option value="sofian">Sofian</option>
                                          <option value="hadi">Hadi</option>
                                          <option value="cecep">Cecep</option>
                                        </select>
                                      </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--Row-->

        </div>
        <!---Container Fluid-->
    @endsection
