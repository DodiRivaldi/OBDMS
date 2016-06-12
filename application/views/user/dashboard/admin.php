<div class="wraper container-fluid">
    <div class="page-title"> 
        <h3 class="title">Welcome !</h3> 
    </div>

    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-info">
                <i class="fa fa-users"></i> 
                <h2 class="m-0 counter"><?php echo $user_count; ?></h2>
                <div>Users</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-purple">
                <i class="fa fa-sitemap"></i> 
                <h2 class="m-0 counter"><?php echo $org_count; ?></h2>
                <div>Organizations</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-pink">
                <i class="fa fa-tint"></i> 
                <h2 class="m-0 counter"><?php echo $blood_donated_count; ?></h2>
                <div>Blood Donated</div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="widget-panel widget-style-2 bg-success">
                <i class="fa fa-user-secret"></i> 
                <h2 class="m-0 counter"><?php echo $members_count; ?></h2>
                <div>Members</div>
            </div>
        </div>
    </div> <!-- end row -->



    <div class="row">
        <div class="col-lg-6">
            <div class="portlet"><!-- /primary heading -->
                <div id="portlet1" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <div id="blood-and-registration" style="height: 350px;"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="portlet"><!-- /primary heading -->
                <div id="portlet2" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <div id="blood-group-chart" style="height: 350px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End row -->





    <div class="row">
        <div class="col-lg-4">
            <div class="portlet" id="todo-container"><!-- /primary heading -->
                <div id="portlet-5" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <p class="dashboard-quote"><i class="fa fa-quote-left"></i> To the young and healthy it’s no loss. To sick it’s hope of life. Donate Blood to give back life. <i class="fa fa-quote-right"></i></p>
                    </div>
                </div>
            </div>
            <div class="portlet" id="todo-container"><!-- /primary heading -->
                <div id="portlet-5" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <p class="dashboard-quote"><i class="fa fa-quote-left"></i> Donation of Blood means a few minutes to you but a lifetime for somebody else. <i class="fa fa-quote-right"></i></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="portlet" id="todo-container"><!-- /primary heading -->
                <div id="portlet-5" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <p class="dashboard-quote"><i class="fa fa-quote-left"></i> If you’re a blood donor, you’re a hero to someone, somewhere, who received your gracious gift of life. <i class="fa fa-quote-right"></i></p>
                    </div>
                </div>
            </div>
            <div class="portlet" id="todo-container"><!-- /primary heading -->
                <div id="portlet-5" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <p class="dashboard-quote"><i class="fa fa-quote-left"></i> To give blood you need neither extra strength nor extra food,and you will save a life. <i class="fa fa-quote-right"></i></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="portlet">
                <div class="portlet-heading">
                    <h3 class="portlet-title text-dark text-uppercase">
                        Recently Blood Donated
                    </h3>
                </div>
                <div id="portlet-6" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <ul class="list-group list-group-lg">
                            <?php 
                            if(!empty($recent_blood_donated)) { 
                                foreach ($recent_blood_donated as $key => $user) {
                                    ?>
                                    <li class="list-group-item b-0">
                                        <a class=" m-r-10">
                                          <img src="<?php echo $user->user_img; ?>" class="thumb-sm br-radius">
                                        </a>
                                        <span class="pull-right label bg-red inline m-t-10"><?php echo $user->blood_group; ?></span>
                                        <a><?php echo $user->name; ?></a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
    </div>


</div>

<script src="<?php echo base_url('assets/highcharts/highcharts.js'); ?>"></script>
<script src="<?php echo base_url('assets/highcharts/highcharts-3d.js'); ?>"></script>
<script src="<?php echo base_url('assets/highcharts/exporting.js'); ?>"></script>

<script>
    $(function () {
        $('#blood-group-chart').highcharts({
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: 'Blood Groups'
            },
            tooltip: {
                pointFormat: '<b>{series.name :.1f}%</b>'
            },
            credits: {
                enabled:false,
            },
            colors: ['#03A9F4', '#FFD600', '#00E676', '#FF7043', '#4DD0E1', '#F9A825', '#9C27B0', '#EC407A'],
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 20,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Blood Group',
                data: <?php print_r($blood_group_counts); ?>
            }]
        });
    });


    $(function () {
        $('#blood-and-registration').highcharts({
            chart: {
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha:5,
                    beta: 5,
                    depth: 0
                }
            },
            title: {
                text: 'Last 10 months Blood Donation and Registration'
            },
            colors: ['#aaaaaa', '#ff0000'],
            credits: {
                enabled:false,
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            xAxis: {
                categories: <?php print_r($reg_chart_category); ?>
            },
            yAxis: {
                title: {
                    text: null
                }
            },
            series: <?php print_r($reg_chart_data); ?>
        });
    });
</script>