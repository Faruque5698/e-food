@extends('adminPanel.master')

@section('body')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><strong>Sub Category</strong></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Add Sub Category</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form >
                        <div class="form-row">
                            <div class="col-6">
                                <input type="text" class="form-control" name="sub_cat_name" id="sub_cat_name" placeholder="Sub Category name">
                            </div>
                            <div class="col-4">
                                <select class="form-control" id="cat_name">
                                    <option selected>Select Category</option>
                                    <option value="1">Cat_One</option>
                                    <option value="2">Cat_Two</option>
                                    <option value="3">Cat_Three</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Add Sub Category">
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
                                <h3 class="card-title">Category List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Sub Category Name</th>
                                        <th>Sub Category Name</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Sub Category Name</th>
                                        <th>Sub Category Name</th>
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
