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
                                        <h1>Schemes</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="<?php echo site_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Schemes</li>
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
                                                <button onclick="addFunc()" class="btn btn-outline-success" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus-square" aria-hidden="true"></i> Add New Scheme</button>
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
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Class</th>
                                                        <th scope="col">Subject</th>
                                                        <th scope="col">Term</th>
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
                                        <h5 class="modal-title">Edit Scheme</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="<?php echo base_url('admin/schemes/editScheme') ?>" method="post" id="editSchemeForm" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" name="title" id="title" required>
                                                <input type="hidden" name="scheme_id" id="scheme_id">
                                            </div>
                                            <div class="form-group">
                                                <label for="add_class">Class</label>
                                                <select name="edit_class_id" class="form-control" id="edit_class_id" required>
                                                    <option value="">Select class</option>
                                                    <?php foreach ($classes as $class): ?>
                                                        <option value="<?php echo encrypt($class->id) ?>" ><?php echo $class->class_name?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit_subject_id">Subject</label>
                                                <select name="edit_subject_id" class="form-control" id="edit_subject_id" required>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit_term">Term</label>
                                                <select name="edit_term" class="form-control" id="edit_term" required>
                                                    <option value="">Select Term</option>
                                                    <option value="1">Term 1</option>
                                                    <option value="2">Term 2</option>
                                                    <option value="3">Term 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit_description">Description:</label>
                                                <textarea class="form-control" id="edit_description" rows="4" name="edit_description"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" id="saveEdit" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Scheme</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="<?php echo base_url('admin/subjects/addSubject') ?>" method="post" id="addSchemeForm" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="add_title">Title</label>
                                                <input type="text" class="form-control" name="add_title" id="add_title" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="add_class">Class</label>
                                                <select name="class_id" class="form-control" id="class_id" required>
                                                    <option value="">Select class</option>
                                                    <?php foreach ($classes as $class): ?>
                                                        <option value="<?php echo encrypt($class->id) ?>" ><?php echo $class->class_name?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="add_class">Subject</label>
                                                <select name="subject_id" class="form-control" id="subject_id" required>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="term">Term</label>
                                                <select name="term" class="form-control" id="term" required>
                                                    <option value="">Select Term</option>
                                                    <option value="1">Term 1</option>
                                                    <option value="2">Term 2</option>
                                                    <option value="3">Term 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="scheme_file">File</label>
                                                <input type="file" class="form-control" id="scheme_file" name="scheme_file">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description:</label>
                                                <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" id="saveScheme" class="btn btn-success">Save changes</button>
                                    </div>
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
                                    <form role="form" action="<?php echo base_url('admin/schemes/deleteScheme') ?>" method="post" id="deleteForm">
                                    <div class="modal-body">
                                        <div id="warning">
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" id="deleteScheme" class="btn btn-success">Save changes</button>
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
        $("#parent_schemes").addClass('active');
        $("#schemes").addClass('active');

        manageTable = $('.manageTable').DataTable({
            'ajax': base_url + 'admin/schemes/fetchSchemes',
            'order': []
        });

    $('#class_id').change(function(){
      var class_id  =   $(this).val();

      if(class_id){
          $.ajax({
            url: '<?php echo site_url('admin/schemes/getSubject') ?>',
            type:'POST',
            data:{class_id: class_id},
            success:function(result){
                
                $("#subject_id").html('');
                $("#subject_id").html(result);
                
             }
          });
      }  
    });

    $('#edit_class_id').change(function(){
      var class_id  =   $(this).val();

      if(class_id){
          $.ajax({
            url: '<?php echo site_url('admin/schemes/getSubject') ?>',
            type:'POST',
            data:{class_id: class_id},
            success:function(result){
                
                $("#edit_subject_id").html('');
                $("#edit_subject_id").html(result);
                
             }
          });
      }  
    });
    });

    function editFunc(id) {
      if(id) {
        $.ajax({
            type: 'POST',
            url: base_url + 'admin/schemes/fetchScheme',
            data: {scheme_id:id},
            dataType: 'json',
            success: function(response){

                $('#title').val(response.scheme_name);
                $('#scheme_id').val(response.scheme_id);
                $('#edit_class_id').html(response.classes);
                $('#edit_subject_id').html(response.subject);
                $('#edit_term').html(response.term);
                $('#edit_description').html(response.description);
            }
        });

    $("#saveEdit").click(function(e) {
        e.preventDefault(); 

    var form_data = new FormData($('#editSchemeForm')[0]);

      $.ajax({
        url: base_url + 'admin/schemes/editScheme',
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

    $("#saveScheme").click(function(e) {
        e.preventDefault(); 

    var form_data = new FormData($('#addSchemeForm')[0]);
    form_data.append('scheme_file', $('#scheme_file')[0].files[0]);

      $.ajax({
        url: base_url + 'admin/schemes/addScheme',
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
            url: base_url + 'admin/schemes/fetchScheme',
            data: {scheme_id:id},
            dataType: 'json',
            success: function(response){

                $('#warning').html('Are you sure you want to delete ' + response.scheme_name);

            }
        });

    $("#deleteScheme").click(function(e) {
        e.preventDefault(); 

      $.ajax({
        url: base_url + 'admin/schemes/deleteScheme',
        type: 'post',
        data: {scheme_id:id}, 
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