<div class="wraper container-fluid">
    <div class="page-title"> 
        <h3 class="title">Members</h3> 
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="portlet"><!-- /primary heading -->
                <div class="portlet-heading">
                    <h3 class="portlet-title text-dark text-uppercase"><?php if($member) echo "Edit Member"; else echo "Add Member"; ?></h3>
                    <div class="portlet-widgets">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="portlet1" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <form class="form-horizontal m-t-40" name="form-add-member" method="post" >
                            <div class="form-group">
                                <div class="col-md-3">
                                    <input class="form-control" type="text" name="name" value="<?php if($member) echo $member->name; ?>" required="" placeholder="Name">
                                </div>
                                <div class="col-md-3">
                                    <select name="blood_group" class="form-control" required="required">
                                        <option value="">-select blood group--</option>
                                        <?php 
                                        $CI =& get_instance();
                                        $blood_groups = $CI->blood_groups();
                                        foreach ($blood_groups as $key => $blood_group) {
                                            $selected = "";
                                            if($member) {
                                                if($member->blood_group_id == $blood_group->id) $selected = "selected='selected'";
                                            }
                                            echo "<option $selected value='".$blood_group->id."'>".$blood_group->name."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control datepicker" value="<?php if($member) echo date('d-m-Y', strtotime($member->dob)); ?>" type="text" name="dob" required="required" readonly="" placeholder="Date of Birth">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" type="text" value="<?php if($member) echo $member->phone; ?>" name="phone" maxlength="10" required="required" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-purple w-md pull-right" type="submit"><?php if($member) echo "Update"; else echo "Add"; ?></button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Members</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Blood Group</th>
                                        <th>Age</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                         
                                <tbody>
                                <?php 
                                if(!empty($members)) { 
                                    foreach ($members as $key => $member) {
                                    ?>
                                    <tr>
                                        <td><?php echo $member->name; ?></td>
                                        <td><span class="label label-danger"><?php echo $member->blood_group; ?></span></td>
                                        <td><?php echo $member->age; ?></td>
                                        <td><?php echo $member->phone; ?></td>
                                        <td><?php if($member->availability) { ?><span class="label label-success">Available</span> <?php } else { ?><span class="label label-warning">Unavailable</span> <?php } ?></td>
                                        <td>
                                            <a class="text-info" data-toggle="tooltip" title="Edit" href="<?php echo site_url('user/members/'.encode($member->id)); ?>"><i class="fa fa-edit"></i></a>
                                            <a class="text-danger" onclick="return confirm('Are you sure to delete?')" data-toggle="tooltip" title="Delete" href="<?php echo site_url('user/delete_member/'.encode($member->id)); ?>"><i class="fa fa-trash"></i></a>
                                            <?php if($member->availability) { ?>
                                                <a class="text-warning" data-toggle="tooltip" title="Make Unavailable" href="<?php echo site_url('user/member_change_status/'.encode($member->id)); ?>"><i class="fa fa-times-circle"></i></a>
                                            <?php } else { ?>
                                                <a class="text-success" data-toggle="tooltip" title="Make Available" href="<?php echo site_url('user/member_change_status/'.encode($member->id).'/1'); ?>"><i class="fa fa-check-circle"></i></a>
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
        
    </div> <!-- End Row -->

    

</div>