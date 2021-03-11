                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Categories</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="<?php echo site_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Categories</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--mail-Compose-contant-start-->
                        <div class="row account-contant">
                            <div class="col-12">
                       
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <div align="right">
                                                <button onclick="addFunc()" class="btn btn-outline-success" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus-square" aria-hidden="true"></i> Add New Category</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0 manageTable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Slug</th>
                                                        <th scope="col">Operations</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                        <!--mail-Compose-contant-end-->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <br>
                <br>
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form role="form" action="<?php echo base_url('admin/categories/editCategory') ?>" method="post" id="editCategoryForm">
                                    <div class="modal-body">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" name="title" id="title">
                                                <input type="hidden" name="category_id" value="" id="category_id">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" id="saveEdit" class="btn btn-success">Save changes</button>
                                    </div>
                                     </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Category</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form role="form" action="<?php echo base_url('admin/categories/addCategory') ?>" method="post" id="addCategoryForm">
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="add_title">Title</label>
                                                <input type="text" class="form-control" name="add_title" id="add_title">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" id="saveSubject" class="btn btn-success">Save changes</button>
                                    </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form role="form" action="<?php echo base_url('admin/categories/deleteCategory') ?>" method="post" id="deleteForm">
                                    <div class="modal-body">
                                        <div id="warning">
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" id="deleteService" class="btn btn-success">Save changes</button>
                                    </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                <!-- end app-main -->
<script type="text/javascript">

    var manageTable;
    var base_url = "<?php echo base_url(); ?>";

    $(document).ready(function() {
        $("#parent_books").addClass('active');
        $("#categories").addClass('active');

        manageTable = $('.manageTable').DataTable({
            'ajax': base_url + 'admin/categories/fetchCategories',
            'order': []
        });
    });

    function editFunc(id) {
      if(id) {
        $.ajax({
            type: 'POST',
            url: base_url + 'admin/categories/fetchCategory',
            data: {category_id:id},
            dataType: 'json',
            success: function(response){

                $('#title').val(response.category_name);
                $('#category_id').val(response.id);
            }
        });

    $("#saveEdit").click(function(e) {
        e.preventDefault(); 

    var form_data = new FormData($('#editCategoryForm')[0]);

      $.ajax({
        url: base_url + 'admin/categories/editCategory',
        type: 'post',
        data: form_data, 
        dataType: 'json',
        cache: false,
        processData: false,
        contentType: false,
        success:function(response) {

        manageTable.ajax.reload(null, false); 

        if(response.error === false) {

            toastr.success(response.message);

            // hide the modal
            $("#editModal").modal('hide');

        } else {

            toastr.error(response.message);
            //toastr.clear();

            $("#editModal").modal('hide');
        }
        }
      }); 

      return false;
        });
      }
    }

    function addFunc() {

    $("#saveSubject").click(function(e) {
        e.preventDefault(); 

    var form_data = new FormData($('#addCategoryForm')[0]);

      $.ajax({
        url: base_url + 'admin/categories/addCategory',
        type: 'post',
        data: form_data, 
        dataType: 'json',
        cache: false,
        processData: false,
        contentType: false,
        success:function(response) {

        manageTable.ajax.reload(null, false); 

        if(response.error === false) {

            toastr.success(response.message);

            // hide the modal
            $("#addModal").modal('hide');

        } else {

            toastr.error(response.message);
            //toastr.clear();

            $("#addModal").modal('hide');
        }
        }
      }); 

      return false;
        });
      
    }

    function deleteFunc(id) {
        if (id) {
        $.ajax({
            type: 'POST',
            url: base_url + 'admin/categories/fetchCategory',
            data: {category_id:id},
            dataType: 'json',
            success: function(response){

                $('#warning').html('Are you sure you want to delete ' + response.category_name);

            }
        });

    $("#deleteService").click(function(e) {
        e.preventDefault(); 

      $.ajax({
        url: base_url + 'admin/categories/deleteCategory',
        type: 'post',
        data: {category_id:id}, 
        dataType: 'json',
        success:function(response) {

        manageTable.ajax.reload(null, false); 

        if(response.error === false) {

            toastr.success(response.message);

            $("#deleteModal").modal('hide');

        } else {

            toastr.error(response.message);

            $("#deleteModal").modal('hide');
        }
        }
      }); 

      return false;
        });
      }
    }
</script>