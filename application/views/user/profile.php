<div class="wraper container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-picture" style="background-image:url('<?php echo base_url("assets/img/profile_bg.jpg"); ?>'); background-position: bottom; ">
              <span class="bg-picture-overlay"></span><!-- overlay -->
              <!-- meta -->
              <div class="box-layout meta bottom">
                <div class="col-sm-6 clearfix">
                  <span class="img-wrapper pull-left m-r-15"><img src="<?php echo $user->user_img; ?>" alt="" style="width:64px" class="br-radius"></span>
                  <div class="media-body">
                    <h3 class="text-white mb-2 m-t-10 ellipsis"><?php echo $user->name; ?></h3>
                    <h5 class="text-white"> <?php echo $user->district; ?></h5>
                  </div>
                </div>
                <div class="col-sm-6">
                    <?php if($this->utype != 3) { ?>
                    <div class="pull-right">
                        <div class="dropdown">
                            <?php if($user->availability) { ?>
                            <a data-toggle="dropdown" class="dropdown-toggle btn btn-primary" href="#"> Available <span class="caret"></span></a>
                            <?php } else { ?>
                            <a data-toggle="dropdown" class="dropdown-toggle btn btn-danger" href="#"> Unvailable <span class="caret"></span></a>
                            <?php } ?>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="<?php echo site_url('user/change_availability/1'); ?>">Available</a></li>
                                <li><a href="<?php echo site_url('user/change_availability'); ?>">Unvailable</a></li>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
              </div>
              <!--/ meta -->
            </div>
        </div>
    </div>

    <div class="row m-t-30">
        <div class="col-sm-12">
            <div class="panel panel-default p-0">
                <div class="panel-body p-0"> 
                    <ul class="nav nav-tabs profile-tabs">
                        <li class="active"><a data-toggle="tab" href="#aboutme">About Me</a></li>
                        <?php if($this->utype != 3) { ?>
                        <li class=""><a data-toggle="tab" href="#user-activities">Activities</a></li>
                        <?php } ?>
                        <li class=""><a data-toggle="tab" href="#edit-profile">Edit</a></li>
                        <li class=""><a data-toggle="tab" href="#settings">Settings</a></li>
                    </ul>

                    <div class="tab-content m-0"> 

                        <div id="aboutme" class="tab-pane active">
                        <div class="profile-desk">
                            <h1><?php echo $user->name; ?></h1>
                            <span class="designation"><?php echo $user->district; ?></span>

                            <table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td><?php echo $user->email; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Phone</b></td>
                                        <td><?php echo $user->phone; ?></td>
                                    </tr>
                                    <?php if($this->utype != 3) { ?>
                                    <tr>
                                        <td><b>Blood Group</b></td>
                                        <td><span class="text-red"><?php echo $user->blood_group; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><b>Gender</b></td>
                                        <td><?php echo ucfirst($user->gender); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Date of Birth</b></td>
                                        <td><?php echo date('d-m-Y', strtotime($user->dob)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Location</b></td>
                                        <td><?php echo $user->location; ?></td>
                                    </tr>
                                    <?php } else { ?>
                                    <tr>
                                        <td><b>Average no. of Employees</b></td>
                                        <td><?php echo $user->avg_no_employees; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Address</b></td>
                                        <td><?php echo $user->address; ?></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td><b>District</b></td>
                                        <td><?php echo $user->district; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>State</b></td>
                                        <td><?php echo $user->state; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end profile-desk -->
                    </div> <!-- about-me -->


                    <!-- Activities -->
                    <div id="user-activities" class="tab-pane">
                        <div class="timeline-2">
                            <div class="time-item">
                                <div class="item-info">
                                    <div class="text-muted"><?php echo date('d M Y', strtotime($user->created_at)); ?></div>
                                    <p><span class="text-info">Registered</span></p>
                                </div>
                            </div>
                            <?php 
                            foreach ($donation_history as $key => $value) {
                                ?>
                                <div class="time-item">
                                    <div class="item-info">
                                        <div class="text-muted"><?php echo date('d M Y', strtotime($value->date)); ?></div>
                                        <p><span class="text-info">Blood donated</span></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            
                        </div>
                    </div>

                    <!-- settings -->
                    <div id="edit-profile" class="tab-pane">
                        <div class="user-profile-content">
                            <form class="form-horizontal" action="<?php echo site_url('user/profile_update'); ?>" method="post"  enctype="multipart/form-data" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" value="<?php echo $user->name; ?>" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" value="<?php echo $user->email; ?>" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone" class="form-control" value="<?php echo $user->phone; ?>" required >
                                    </div>
                                </div>
                                <?php if($this->utype != 3) { ?>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Blood Group</label>
                                    <div class="col-sm-10">
                                        <select name="blood_group" class="form-control">
                                            <?php foreach ($blood_groups as $key => $blood_group) {
                                                if($blood_group->id == $user->blood_group_id) $selected = "selected='selected'"; else $selected = "";
                                                echo "<option $selected value='".$blood_group->id."'>".$blood_group->name."</option>";
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Gender</label>
                                    <div class="col-sm-10">
                                        <div class="radio-inline">
                                            <label class="cr-styled" for="rad-gender-male">
                                                <input type="radio" <?php if($user->gender == 'male') echo "checked"; ?> id="rad-gender-male" name="gender" value="male"> 
                                                <i class="fa"></i> Male
                                            </label>
                                        </div>
                                        <div class="radio-inline">
                                            <label class="cr-styled" for="rad-gender-female">
                                                <input type="radio" <?php if($user->gender == 'female') echo "checked"; ?> id="rad-gender-female" name="gender" value="female"> 
                                                <i class="fa"></i> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Date of Birth</label>
                                    <div class="col-sm-10">
                                        <input class="form-control datepicker" type="text" name="dob" value="<?php echo date('d-m-Y', strtotime($user->dob)); ?>" required="" readonly="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Location</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="location" class="form-control" value="<?php echo $user->location; ?>" required >
                                    </div>
                                </div>
                                <?php } else { ?>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Average no. of employees</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_employees" class="form-control" value="<?php echo $user->avg_no_employees; ?>" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Address</label>
                                    <div class="col-sm-10">
                                        <textarea name="address" class="form-control"><?php echo $user->address; ?></textarea>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">State</label>
                                    <div class="col-sm-10">
                                        <select name="state" class="form-control">
                                            <option value="">-select state--</option>
                                            <?php foreach ($states as $key => $state) {
                                                if($state->id == $user->state_id) $selected = "selected='selected'"; else $selected = "";
                                                echo "<option $selected value='".$state->id."'>".$state->name."</option>";
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">District</label>
                                    <div class="col-sm-10">
                                        <select name="district" class="form-control">
                                            <option value="">-select district--</option>
                                            <?php foreach ($districts as $key => $district) {
                                                if($district->id == $user->district_id) $selected = "selected='selected'"; else $selected = "";
                                                echo "<option $selected value='".$district->id."'>".$district->name."</option>";
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <button class="btn btn-info" type="submit">Update</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>


                    <!-- profile -->
                    <div id="settings" class="tab-pane">
                        <form class="form-horizontal" action="<?php echo site_url('user/change_password'); ?>" method="post" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Current Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="current_password" class="form-control" required placeholder="********" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" required placeholder="********" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button class="btn btn-info" type="submit">Change</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
 
            </div> 
        </div>
    </div>
</div>