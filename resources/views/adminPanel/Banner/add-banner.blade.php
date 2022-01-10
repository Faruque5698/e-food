@extends('adminPanel.master')

@section('body')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><strong>Add Banner</strong></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Add Banner</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="col-12">
                                <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Banner Title">
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-6">
                                <select class="form-control" id="cat_name">
                                    <option selected>Select Category</option>
                                    <option value="1">Cat_One</option>
                                    <option value="2">Cat_Two</option>
                                    <option value="3">Cat_Three</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="sub_cat_name">
                                    <option selected>Select sub Category</option>
                                    <option value="1">Cat_One</option>
                                    <option value="2">Cat_Two</option>
                                    <option value="3">Cat_Three</option>
                                </select>

                                <img src="#" alt="" width="100%">
                            </div>
                        </div>
                        <div class="form-row">
                            <input type="file" name="cat_img" id="cat_img" class="form-control" placeholder="">
                        </div>
                        <hr>
                        <div class=" ml-5">
                            <img style="width: 50%;border: 1px solid; border-radius: 10px;" id="viewer" src="{{asset('admin')}}/image/image.jpg" alt="banner image">
                        </div>
                        <hr>
                        <div class="col-2">
                            <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Add Banner">
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </section>


@endsection
