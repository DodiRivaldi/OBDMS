<div class="wraper container-fluid">
    <div class="page-title"> 
        <h3 class="title">Organizations</h3> 
    </div>
    
    <?php if(!empty($user)) { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">View Details</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <th colspan="2" class="text-center"><img class="thumb-lg img-circle bx-s" src="<?php echo $user->user_img; ?>" ></th>
                                    </tr>
                                    <tr>
                                        <th width="50%">Name</th>
                                        <td><?php echo $user->name; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td><?php echo $user->phone; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Members</th>
                                        <td><span class="label label-info"><?php echo $user->members; ?></span></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $user->email; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td><?php echo $user->address; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Average no. of Employees</th>
                                        <td><?php echo $user->avg_no_employees; ?></td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td><?php echo $user->state; ?></td>
                                    </tr>
                                    <tr>
                                        <th>District</th>
                                        <td><?php echo $user->district; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Login Status</th>
                                        <td><?php if($user->status == 1) { ?><span class="label label-success">Active</span> <?php } else { ?><span class="label label-danger">Blocked</span> <?php } ?></td>
                                    </tr>
                                    <tr>
                                        <th>Registered at</th>
                                        <td><?php echo date('d-m-Y', strtotime($user->created_at)); ?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <?php } ?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Organizations</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Members</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Login Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                         
                                <tbody>
                                <?php 
                                if(!empty($users)) { 
                                    foreach ($users as $key => $user) {
                                    ?>
                                    <tr>
                                        <td><?php echo $user->name; ?></td>
                                        <td><span class="label label-info"><?php echo $user->members; ?></span></td>
                                        <td><?php echo $user->phone; ?></td>
                                        <td><?php if($user->availability) { ?><span class="label label-success">Available</span> <?php } else { ?><span class="label label-warning">Unavailable</span> <?php } ?></td>
                                        <td><?php if($user->status == 1) { ?><span class="label label-success">Active</span> <?php } else { ?><span class="label label-danger">Blocked</span> <?php } ?></td>
                                        <td>
                                            <a class="text-info" data-toggle="tooltip" title="View" href="<?php echo site_url('user/organizations/'.encode($user->id)); ?>"><i class="fa fa-search-plus"></i></a>
                                            <?php if($user->status == 1) { ?>
                                                <a class="text-danger" data-toggle="tooltip" title="Block" href="<?php echo site_url('user/user_change_status/'.encode($user->id).'/2/1'); ?>"><i class="fa fa-ban"></i></a>
                                            <?php } else { ?>
                                                <a class="text-success" data-toggle="tooltip" title="Activate" href="<?php echo site_url('user/user_change_status/'.encode($user->id).'/1/1'); ?>"><i class="fa fa-check-circle"></i></a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php 
                                    } 
                                } 
                                ?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    

</div>