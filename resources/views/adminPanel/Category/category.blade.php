@extends('adminPanel.master')

@section('body')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><strong>Category</strong></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Category List</h3>
                                <a href="" data-toggle="modal" data-target="#addcategoryModal" class="btn btn-primary float-right"><i class="fa fa-plus"></i></a>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Category Name</th>
                                        <th>Category Image</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i = 1)
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$category->category_name}}</td>
                                            <td><img src="{{asset($category->category_image)}}" alt="{{$category->category_name}}" width="100px" height="100px"></td>
                                            <td>{{$category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                            <td>
                                                @if($category->status == 'active')
                                                    <a href="{{route('category_unpublished',['id'=>$category->id])}}" class="btn btn-sm btn-info"
                                                    ><i class="fa fa-arrow-circle-up"></i></a>
                                                @else
                                                    <a href="{{route('category_published',['id'=>$category->id])}}" class="btn btn-sm btn-warning"
                                                    ><i class="fa fa-arrow-circle-down"></i></a>
                                                @endif

                                                <button href="" id="edit_btn" value="{{$category->id}}" class="btn btn-sm btn-success" data-toggle="modal" data-target="#editcategoryModal"><i class="fa fa-edit"></i></button>

                                                <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-danger" ><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modal-danger">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-danger">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" style="text-align: center;"><img src="{{asset('Admin/image/Danger.png')}}" width="100px" height="100px" alt=""></h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you want to delete it..</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                        <a href="{{route('category_destroy',['id'=>$category->id])}}" class="btn btn-outline-light">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Category Name</th>
                                        <th>Category Image</th>
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

{{--    Add Category Modal--}}

    <div class="modal hide" id="addcategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="addCategoryForm" action="{{route('add_category')}}" enctype="multipart/form-data">
                        @csrf
                        <ul class="alert alert-warning d-none" id="saveErrorList"></ul>
                        <div class="form-row">
                            <div class="col-12">
                                <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" id="cat_name" placeholder="Category name">
                            </div>
                            @error('category_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="col-10 mt-2 p-0">
                            <div class="col-4 p-0">
                                <input type="file" name="category_image" id="cat_img" class="form-control @error('category_image') is-invalid @enderror" placeholder="">
                            </div>
                            @error('category_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-sm-4 p-0 mt-2 mb-2">
                                <img style="width: 100%;border: 1px solid; border-radius: 10px;" id="viewer" src="{{asset('admin')}}/image/image.jpg" alt="banner image">
                            </div>
                        </div>
{{--                        <div class="form-row">--}}

{{--                            <select class="form-control @error('status') is-invalid @enderror" id="" name="publication_status">--}}
{{--                                <option selected>Publication Status</option>--}}
{{--                                <option value=1>Published</option>--}}
{{--                                <option value=0>Unpublished</option>--}}

{{--                            </select>--}}
{{--                            --}}{{--                                <img src="#" alt="" width="100%">--}}
{{--                        </div>--}}
{{--                        @error('status')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}

                        <div class="col-5 mt-2 float-left">
                            <input type="submit" class="form-control btn btn-primary" name="submit" id="submit" value="Add Category">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

{{--    Edit Category Modal--}}

    <div class="modal hide" id="editcategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="editCategoryForm "  action="" enctype="multipart/form-data">
                        @csrf
                        <ul class="alert alert-warning d-none" id="saveErrorList"></ul>
                        <div class="form-row">
                            <div class="col-12">
                                <input type="text" class="form-control" name="category_name" id="cat_name" placeholder="Category name">
                            </div>

                        </div>
                        <div class="col-10 mt-2 p-0">
                            <div class="col-4 p-0">
                                <input type="file" name="category_image" id="cat_img" class="form-control" placeholder="">
                            </div>
                            <div class="col-sm-4 p-0 mt-2 mb-2">
                                <img style="width: 100%;border: 1px solid; border-radius: 10px;" id="viewer" src="{{asset('admin')}}/image/image.jpg" alt="banner image">
                            </div>
                        </div>




                        <div class="col-6 mt-2 float-left">
                            <input type="submit" class="form-control btn btn-primary" name="submit" id="submit" value="Update Category">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        // $('#addCategoryForm').show();
        // $('#editCategoryForm').hide();
        $('#cat_img').on('change',function (e){
            var fileInput = this;

            if(fileInput.files[0]){
                var reader = new FileReader();

                reader.onload = function (e){
                    $('#viewer').attr('src',e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        })


    </script>

    <script>
        $(document).on('click','#edit_btn',function (e){
            e.preventDefault();

            var cat_id = $(this).val();

            // $('#editCategoryForm').modal('show');
            // alert(cat_id);
            $.ajax({
                type:'GET',
                url:'/edit_category/'+cat_id,
                data:'data',
                dataType:'dataType',
                success:function (response){
                   console.log(response);
                }
            })
        })
    </script>

    <script>
        $(function (){
            var $category_addForm = $('#addCategoryForm');

            if($category_addForm.length){
                $category_addForm.validate({
                    rules:{
                        category_name: {
                            required : true
                        },
                        category_image: {
                            required : true
                        },

                    },
                    messages:{
                        category_name:{
                            required:"<p class='validation'>Fill the category name !</p>"
                        },
                        category_image:{
                            required:"<p class='validation'>Category Image Needed !</p>"
                        },

                    }
                })
            }
        });
    </script>


@endsection
