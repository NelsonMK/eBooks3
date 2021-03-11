                                    <!-- end app-navbar -->
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
                                                            <h1 class="text-purple">eBooks</h1>
                                                        </div>
                                                        <div class="ml-auto d-flex align-items-center">
                                                            <nav>
                                                                <ol class="breadcrumb p-0 m-b-0">
                                                                    <li class="breadcrumb-item">
                                                                        <a href="<?php echo site_url('admin/dashboard') ?>"><i class="ti ti-home"></i></a>
                                                                    </li>
                                                                </ol>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                    <!-- end page title -->
                                                </div>
                                            </div>
                                            <!-- end row -->
                                            <!-- begin row -->
                                            <div class="row">
                                                <div class="col-xxl-3 col-xl-3 col-sm-6">
                                                    <div class="card card-statistics employees-contant px-2">
                                                        <div class="card-body pb-5 pt-4">
                                                            <div class="w-100">
                                                                <div class="w-100">
                                                                    <div class="row p-3">
                                                                        <div class="col">
                                                                            <h3 class="mb-0"><?php echo 20; ?></h3>
                                                                            <!--<small class="d-block">Last 90 days</small>-->
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h5 class="text-muted mb-0">Site Visits</h5>
                                                                            <!--<strong class="text-orange m-t-5"><i class="zmdi zmdi-long-arrow-up font-weight-bold"></i> 4.65%</strong>-->
                                                                        </div>
                                                                    </div>
                                                                </div>                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-sm-6">
                                                    <a href="<?php echo site_url('admin/books') ?>">
                                                    <div class="card card-statistics employees-contant px-2">
                                                        <div class="card-body pb-5 pt-4">
                                                            <div class="w-100">
                                                                <div class="w-100">
                                                                    <div class="row p-3">
                                                                        <div class="col">
                                                                            <h3 class="mb-0"><?php echo $books; ?></h3>
                                                                            
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h5 class="text-muted mb-0">Books</h5>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-sm-6">
                                                    <a href="<?php echo site_url('admin/schemes') ?>">
                                                    <div class="card card-statistics employees-contant px-2">
                                                        <div class="card-body pb-5 pt-4">
                                                            <div class="w-100">
                                                                <div class="w-100">
                                                                    <div class="row p-3">
                                                                        <div class="col">
                                                                            <h3 class="mb-0"><?php echo $schemes; ?></h3>
                                                                            
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h5 class="text-muted mb-0">Schemes</h5>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-sm-6">
                                                    <div class="card card-statistics employees-contant px-2">
                                                        <div class="card-body pb-5 pt-4">
                                                            <div class="w-100">
                                                                <div class="w-100">
                                                                    <div class="row p-3">
                                                                        <div class="col">
                                                                            <h3 class="mb-0"><?php echo $categories; ?></h3>
                                                                            
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h5 class="text-muted mb-0">Categories</h5>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-sm-6">
                                                    <a href="<?php echo site_url('admin/classes') ?>">
                                                    <div class="card card-statistics employees-contant px-2">
                                                        <div class="card-body pb-5 pt-4">
                                                            <div class="w-100">
                                                                <div class="w-100">
                                                                    <div class="row p-3">
                                                                        <div class="col">
                                                                            <h3 class="mb-0"><?php echo $classes; ?></h3>
                                                                            
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h5 class="text-muted mb-0">Classes</h5>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="col-xxl-3 col-xl-3 col-sm-6">
                                                    <a href="<?php echo site_url('admin/subjects') ?>">
                                                    <div class="card card-statistics employees-contant px-2">
                                                        <div class="card-body pb-5 pt-4">
                                                            <div class="w-100">
                                                                <div class="w-100">
                                                                    <div class="row p-3">
                                                                        <div class="col">
                                                                            <h3 class="mb-0"><?php echo $subjects; ?></h3>
                                                                           
                                                                        </div>
                                                                        <div class="col text-right">
                                                                            <h5 class="text-muted mb-0">Subjects</h5>
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-12 m-b-30">
                                                    <div class="card card-statistics h-100 mb-0">
                                                        <div class="card-header d-flex align-items-center justify-content-between">
                                                            <div class="card-heading">
                                                                <h4 class="card-title">Site Visists</h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body " style="max-height: 350px;">
                                                            <div class="apexchart-wrapper">
                                                                <div id="graph"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-4 m-b-30">
                                                    <div class="card card-statistics h-100 mb-0">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <div class="card-heading">
                                                                <h4 class="card-title">Daily Sales (<?php echo date('Y-m-d'); ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row mt-4">
                                                                <div class="col-lg-8">
                                                                    <div class="morris-wrapper">
                                                                        <div id="morrisDailySales" style="height: 260px;"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 mt-4">
                                                                    <div class="mb-3">
                                                                        <h3 class="mb-0"><?php echo "KES ". number_format($daily_sales, 2); ?></h3>
                                                                       
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <p class="mb-0 text-info">Books</p>
                                                                        <h5 class="mb-0"><?php echo "KES " . number_format($daily_book_sales, 2); ?></h5> 
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <p class="mb-0 text-danger">Schemes</p>
                                                                        <h5 class="mb-0"><?php echo "KES " . number_format($daily_schemes_sales, 2); ?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 m-b-30">
                                                    <div class="card card-statistics h-100 mb-0">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <div class="card-heading">
                                                                <h4 class="card-title">Monthly Sales (<?php echo date('M'); ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row mt-4">
                                                                <div class="col-lg-8">
                                                                    <div class="morris-wrapper">
                                                                        <div id="morrisMonthlySales" style="height: 260px;"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 mt-4">
                                                                    <div class="mb-3">
                                                                        <h3 class="mb-0"><?php echo "KES ". number_format($monthly_sales, 2); ?></h3>
                                                                
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <p class="mb-0 text-info">Books</p>
                                                                        <h5 class="mb-0"><?php echo "KES " . number_format($monthly_book_sales, 2); ?></h5> 
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <p class="mb-0 text-danger">Schemes</p>
                                                                        <h5 class="mb-0"><?php echo "KES " . number_format($monthly_schemes_sales, 2); ?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 m-b-30">
                                                    <div class="card card-statistics h-100 mb-0">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <div class="card-heading">
                                                                <a href="<?php echo site_url('dashboard/sales/'.'year') ?>"><h4 class="card-title">Yearly Sales (<?php echo date('Y'); ?>)</h4></a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row mt-4">
                                                                <div class="col-lg-8">
                                                                    <div class="morris-wrapper">
                                                                        <div id="morrisYearlySales" style="height: 260px;"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 mt-4">
                                                                    <div class="mb-3">
                                                                        <h3 class="mb-0"><?php echo "KES " . number_format($yearly_sales, 2); ?></h3>
                                                                        
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <p class="mb-0 text-info">Books</p>
                                                                        <h5 class="mb-0"><?php echo "KES " . number_format($yearly_book_sales, 2); ?></h5> 
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <p class="mb-0 text-danger">Schemes</p>
                                                                        <h5 class="mb-0"><?php echo "KES " . number_format($yearly_schemes_sales, 2); ?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-6 m-b-30">
                                                    <div class="card card-statistics h-100 mb-0">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <div class="card-heading">
                                                                <h4 class="card-title">Top Selling Books (<?php echo date('Y'); ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Book Title</th>
                                                                            <th scope="col">Total Income</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php if (!empty($yearly_top_selling_books)): ?>
                                                                            <?php $count = 1; foreach ($yearly_top_selling_books as $year_top_selling): ?>
                                                                                <tr>
                                                                                    <td><?= $count ?></td>
                                                                                    <td><?= $year_top_selling->name ?></td>
                                                                                    <td><?= number_format($year_top_selling->value, 2) ?></td>
                                                                                </tr>
                                                                            <?php $count ++; endforeach ?>
                                                                        <?php else: ?>
                                                                           <?php echo "<tr><td>No Records Found</td></tr>"; ?>
                                                                        <?php endif ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 m-b-30">
                                                    <div class="card card-statistics h-100 mb-0">
                                                        <div class="card-header d-flex justify-content-between">
                                                            <div class="card-heading">
                                                                <h4 class="card-title">Top Selling Schemes (<?php echo date('Y'); ?>)</h4>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Scheme Title</th>
                                                                            <th scope="col">Total Income</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php if (!empty($yearly_top_selling_schemes)): ?>
                                                                            <?php $count = 1; foreach ($yearly_top_selling_schemes as $year_top_selling): ?>
                                                                                <tr>
                                                                                    <td><?= $count ?></td>
                                                                                    <td><?= $year_top_selling->scheme_name ?></td>
                                                                                    <td><?= number_format($year_top_selling->value, 2) ?></td>
                                                                                </tr>
                                                                            <?php $count ++; endforeach ?>
                                                                        <?php else: ?>
                                                                           <?php echo "<tr><td>No Records Found</td></tr>"; ?>
                                                                        <?php endif ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end container-fluid -->
                                    </div>
                      <!-- end app-main -->

<script type="text/javascript">
    $(document).ready(function() {

        $("#dashboard").addClass('active');

        var morrisDailySales = jQuery("#morrisDailySales");
        var daily_book_sales = <?php if (empty($daily_book_sales)) { echo 0;} else { echo $daily_book_sales;}  ?>;
        var daily_schemes_sales = <?php if (empty($daily_schemes_sales)) { echo 0;} else { echo $daily_schemes_sales;}  ?>;
        if (morrisDailySales.length > 0) {
            Morris.Donut({
                element: morrisDailySales,
                data: [
                    { label: "Books", value: daily_book_sales },
                    { label: "Schemes", value: daily_schemes_sales }
                ],
                colors: ['#45aaf2', '#EC5F67']
            });
        }

        var morrisMonthlySales = jQuery("#morrisMonthlySales");
        var monthly_book_sales = <?php if (empty($monthly_book_sales)) { echo 0;} else { echo $monthly_book_sales;}  ?>;
        var monthly_schemes_sales = <?php if (empty($monthly_schemes_sales)) { echo 0;} else { echo $monthly_schemes_sales;} ?>;
        if (morrisMonthlySales.length > 0) {
            Morris.Donut({
                element: morrisMonthlySales,
                data: [
                    { label: "Books", value: monthly_book_sales },
                    { label: "Schemes", value: monthly_schemes_sales }
                ],
                colors: ['#45aaf2', '#EC5F67', '#F9AE57']
            });
        }


        var morrisYearlySales = jQuery("#morrisYearlySales");
        var yearly_book_sales = <?php if (empty($yearly_book_sales)) { echo 0;} else { echo $yearly_book_sales;}  ?>;
        var yearly_schemes_sales =  <?php if (empty($yearly_schemes_sales)) { echo 0;} else { echo $yearly_schemes_sales;}  ?>;
        if (morrisYearlySales.length > 0) {
            Morris.Donut({
                element: morrisYearlySales,
                data: [
                    { label: "Books", value: yearly_book_sales },
                    { label: "Schemes", value: yearly_schemes_sales }
                ],
                colors: ['#45aaf2', '#EC5F67']
            });
        }

                    var morrisdemo2 = jQuery("#graph");
                    if (morrisdemo2.length > 0) {
                        Morris.Area({
                            element: morrisdemo2,
                            data: <?php echo $chart_data;?>,
                            xkey: 'visit_date',
                            ykeys: ['value'],
                            labels: ['Visits'],
                            lineColors: ['#2bcbba', '#8E54E9'],
                            resize: true,
                            fillOpacity: 0.4,
                            padding: 20,
                            grid: false,
                            gridTextFamily: 'Roboto',
                            gridTextSize: 10
                        });
                    }

                var siteVisits = jQuery('#siteVisits')
                if (siteVisits.length > 0) {
                  var options = {
                    chart: {
                      height: 350,
                      type: 'area',
                      stacked: true,
                      events: {
                        selection: function(chart, e) {
                          console.log(new Date(e.xaxis.min) )
                        }
                      },
              
                    },
                    colors: ['#8E54E9', '#2bcbba', '#eceef3'],
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                      curve: 'smooth'
                    },
              
                    series: [{
                        name: 'Visit Date',
                        data: generateDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 20, {
                          min: 10,
                          max: 60
                        })
                      }
                    ],
                    fill: {
                      type: 'gradient',
                      gradient: {
                        opacityFrom: 0.6,
                        opacityTo: 0.8,
                      }
                    },
                    legend: {
                      position: 'top',
                      horizontalAlign: 'left'
                    },
                    xaxis: {
                      type: 'datetime'
                    },
                  }
              
                  var chart = new ApexCharts(
                    document.querySelector("#siteVisits"),
                    options
                  );
              
                  chart.render();
              
                  function generateDayWiseTimeSeries(baseval, count, yrange) {
                    var i = 0;
                    var series = [];
                    while (i < count) {
                      var x = baseval;
                      var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
              
                      series.push([x, y]);
                      baseval += 86400000;
                      i++;
                    }
                    return series;
                  }
                          
                }
                    
    });

</script>