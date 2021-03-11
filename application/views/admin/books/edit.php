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
                                        <h1>Edit Book</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="<?php echo site_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="<?php echo site_url('admin/books') ?>">
                                                    Books
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Edit Book</li>
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
                                                <a href="<?php echo site_url('admin/books') ?>" class="btn btn-outline-success"><i class="ti ti-angle-left" aria-hidden="true"></i> Back</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                    <form role="form" action="<?php echo base_url('admin/books/create') ?>" method="post" id="editBooksForm">
                                    <div class="modal-body select-wrapper">
                                        <form>
                                            <div class="form-group">
                                                <label for="edit_title">Name</label>
                                                <input type="text" class="form-control" name="edit_title" id="edit_title" value="<?php echo !empty($this->input->post('edit_title')) ?:$book->name ?>" required>
                                                <input type="hidden" name="book_id" value="<?php echo encrypt($book->id) ?>">
                                            </div>
                                            <div class="form-group ">
                                                <label for="categories">Categories</label>
                                                <?php $data = json_decode($book->category_id); ?>
                                                <select class="js-basic-multiple form-control" name="categories[]" multiple="multiple" required>
                                                    <?php foreach ($categories as $k => $v): ?>
                                                        <option value="<?php echo $v->id ?>" <?php if(in_array($v->id, $data)) { echo 'selected="selected"'; } ?>><?php echo $v->name ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" id="editBook" class="btn btn-success">Save changes</button>
                                    </div>
                                     </form>
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

                <!-- end app-main -->
<script type="text/javascript">

    var base_url = "<?php echo base_url(); ?>";

    $(document).ready(function() {
        $("#parent_books").addClass('active');
        $("#books").addClass('active');


    $("#editBook").click(function(e) {
        e.preventDefault(); 

    var form_data = new FormData($('#editBooksForm')[0]);

      $.ajax({
        url: base_url + 'admin/books/editBook',
        type: 'post',
        data: form_data, 
        dataType: 'json',
        cache: false,
        processData: false,
        contentType: false,
        success:function(response) {

        if(response.error === false) {

            toastr.success(response.message);
            window.location.href = "<?php echo site_url('admin/books'); ?>";

        } else {

            toastr.error(response.message);

        }
        }
      }); 

      return false;
        });
    });

</script>