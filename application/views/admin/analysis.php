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
                                        <h1>Analysis</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="<?php echo site_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Analysis</li>
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
                                                                                <div class="col-md-12 col-xs-12">
          <form class="form-inline" action="<?php echo base_url('admin/analysis') ?>" method="POST">
            <div class="form-group">
              <label for="date">Year: </label>
              <select class="form-control" name="select_year" id="select_year">
                <?php foreach ($years as $key): ?>
                  <option value="<?php echo $key->years ?>" <?php if($key->years == $selected_year) { echo "selected"; } ?>><?php echo $key->years; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group" style="padding-left: 5px; padding-right: 5px;">
              <label for="date">Product: </label>
              <select class="form-control" name="select_product" id="select_product">
                <option value="">Select product</option>
                <option value="1">Books</option>
                <option value="2">Schemes</option>
              </select>
            </div>
            <button style="padding-left: 15px;" type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>


                            <div class="col-12">
                                <br />
                                <br />
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h3><?php echo $title; ?></h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas style="height:250px;" id="barChart" ></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <br />
                                <br />
                       
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h3><?php echo $title; ?></h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered table-striped manageTable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Year - Month</th>
                                                        <th scope="col">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($results as $k => $v): ?>
                                                        <tr>
                                                            <td><?php echo $k; ?></td>
                                                            <td><?php echo $v; ?></td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                                <tbody>
                                                    <tr>
                                                        <th>Total Amount</th>
                                                        <th><?php echo 'KES' . ' ' . array_sum($results); ?></th>
                                                    </tr>
                                                </tbody>
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
        $("#parent_sales").addClass('active');
        $("#analysis").addClass('active');

        /*manageTable = $('.manageTable').DataTable({
            'ajax': base_url + 'admin/analysis/fetchResults',
            'order': []
        });*/
    });

    function deleteFunc(id) {
        if (id) {
        $.ajax({
            type: 'POST',
            url: base_url + 'admin/classes/fetchClass',
            data: {class_id:id},
            dataType: 'json',
            success: function(response){

                $('#warning').html('Are you sure you want to delete ' + response.class_name);

            }
        });

    $("#deleteClass").click(function(e) {
        e.preventDefault(); 

      $.ajax({
        url: base_url + 'admin/classes/deleteClass',
        type: 'post',
        data: {class_id:id}, 
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
  <script type="text/javascript">

    var report_data = <?php echo '[' . implode(',', $results) . ']'; ?>;
    

    $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
     var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label               : 'Sales',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : report_data
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#00a65a';
    barChartData.datasets[0].strokeColor = '#00a65a';
    barChartData.datasets[0].pointColor  = '#00a65a';
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
  </script>