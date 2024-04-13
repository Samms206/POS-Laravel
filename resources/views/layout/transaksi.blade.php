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
        <!--Row-->
        <div class="row">
            <div class="col-lg-4">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="idBarang" name="idBarang" placeholder="ID Barang">
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
                                        <select class="select2-single-placeholder form-control" name="customer"
                                            id="select2SinglePlaceholder">
                                            <option value="">Select</option>
                                            <option value="fulan">Fulan</option>
                                            <option value="sofian">Sofian</option>
                                            <option value="hadi">Hadi</option>
                                            <option value="cecep">Cecep</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- DataTable with Hover -->
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="table-responsive p-3">
                                <table class="table align-items-center table-flush table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Total</th>
                                            <th>Rp.28000</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            <td>Coca-cola</td>
                                            <td>5000</td>
                                            <td>2</td>
                                            <td>10000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            <td>Potato</td>
                                            <td>9000</td>
                                            <td>2</td>
                                            <td>18000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Row-->
                <div class="row mb-4">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="diskon">Diskon(Rp.)</label>
                            <input type="text" class="form-control" id="diskon" placeholder="Rp.-">
                        </div>
                        <div class="form-group">
                            <label for="bayar">Bayar(Rp.)</label>
                            <input type="text" class="form-control" id="bayar" placeholder="Rp.-">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <button style="width: 100%" type="submit" class="btn btn-danger">batal</button>
                            </div>
                            <div class="col-lg-6">
                                <button style="width: 100%" type="submit" class="btn btn-primary">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->

        </div>
        <!---Container Fluid-->
    @endsection
