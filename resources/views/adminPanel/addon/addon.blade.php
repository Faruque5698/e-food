@extends('adminPanel.master')

@section('body')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><strong>Addon</strong></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Add Addon</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="col-5">
                                <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Addon name">
                            </div>
                            <div class="col-5">
                                <input type="number" name="cat_img" id="cat_img" class="form-control" placeholder="Addon price">
                            </div>
                            <div class="col-.5">

                            </div>
                            <div class="col-1">
                                <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Add Addon">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Addon List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Addon Name</th>
                                        <th>Addon Price</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Addon Name</th>
                                        <th>Addon Price</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>


@endsection
