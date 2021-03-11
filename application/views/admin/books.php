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
                                        <h1>Books</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="<?php echo site_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Books</li>
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
                                            <!--<div class="col-md-3" align="left">
                                                <select name="category_id" class="form-control" id="category_id" data-toggle="tooltip" title="Select Category">
                                                    <?php foreach ($categories as $category): ?>
                                                        <option value="<?php echo encrypt($category->id) ?>"><?= $category->name ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>-->
                                            <div align="right">
                                                <a href="<?php echo site_url('admin/books/create') ?>" class="btn btn-outline-success" ><i class="fa fa-plus-square" aria-hidden="true"></i> Add New Book</a>
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
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Category</th>
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
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form role="form" action="<?php echo base_url('admin/services/deleteClass') ?>" method="post" id="deleteForm">
                                    <div class="modal-body">
                                        <div id="warning">
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" id="deleteClass" class="btn btn-success">Save changes</button>
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
        $("#books").addClass('active');

        manageTable = $('.manageTable').DataTable({
            'ajax': base_url + 'admin/books/fetchBooks',
            'order': [],
            'lengthMenu': [[10, 25, 50, 100, -1],[10, 25, 50, 100, "All"]]
        });

        $("#category_id").change(function( event ) {
            var val = $(this).val();
            console.log(val);
            $.ajax({
                url: base_url + 'admin/books/fetchBooks',
                type:'POST',
                data:{category_id:val},
                success:function(result){

                    manageTable.ajax.reload(null, false); 
                    //toastr.success('Booking Staus Changed');
                }
            });
        });
    });


</script>