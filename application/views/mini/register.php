<div class="wrapper-page wrapper-page-lg animated fadeInDown">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading"> 
           <h3 class="text-center m-t-10"> Create a new Account </h3>
        </div> 
        
        <?php echo validation_errors(); ?>

        <div class="register-tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#person">Person</a></li>
              <li><a data-toggle="tab" href="#organization">Organization</a></li>
            </ul>
            <div class="tab-content">
              <div id="person" class="tab-pane fade in active">
                <form class="form-horizontal m-t-40" name="form-register-person" method="post" >
                    <input type="hidden" name="type" value="2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="name" required="" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="phone" required="" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <select name="blood_group" class="form-control">
                                    <option value="">-select blood group--</option>
                                    <?php foreach ($blood_groups as $key => $blood_group) {
                                        echo "<option value='".$blood_group->id."'>".$blood_group->name."</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Gender</label>
                            <div class="col-md-9">
                                <div class="radio-inline">
                                    <label class="cr-styled" for="rad-gender-male">
                                        <input type="radio" id="rad-gender-male" name="gender" value="male"> 
                                        <i class="fa"></i> Male
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label class="cr-styled" for="rad-gender-female">
                                        <input type="radio" id="rad-gender-female" name="gender" value="female"> 
                                        <i class="fa"></i> Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control datepicker" type="text" name="dob" required="" readonly="" placeholder="Date of Birth">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control " type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <select name="state" class="form-control">
                                    <option value="">-select state--</option>
                                    <?php foreach ($states as $key => $state) {
                                        echo "<option value='".$state->id."'>".$state->name."</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <select name="district" class="form-control">
                                    <option value="">-select district--</option>
                                    <?php foreach ($districts as $key => $district) {
                                        echo "<option value='".$district->id."'>".$district->name."</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" name="location" placeholder="Location">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label class="cr-styled">
                                    <input type="checkbox" checked required="">
                                    <i class="fa"></i> 
                                     I accept <strong><a href="#">Terms and Conditions</a></strong>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button class="btn btn-purple w-md" type="submit">Register</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="<?php echo site_url('home/login'); ?>">Already have account?</a>
                        </div>
                    </div>
                </form> 
              </div>
              <div id="organization" class="tab-pane fade">
                <form class="form-horizontal m-t-40" name="form-register-organization" method="post" >
                    <input type="hidden" name="type" value="3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="name" required="" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="phone" required="" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="no_employees" required="" placeholder="Average no. of employees">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control " type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <select name="state" class="form-control">
                                    <option value="">-select state--</option>
                                    <?php foreach ($states as $key => $state) {
                                        echo "<option value='".$state->id."'>".$state->name."</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <select name="district" class="form-control">
                                    <option value="">-select district--</option>
                                    <?php foreach ($districts as $key => $district) {
                                        echo "<option value='".$district->id."'>".$district->name."</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <textarea class="form-control" name="address" required="" placeholder="Address"></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label class="cr-styled">
                                    <input type="checkbox" checked required="">
                                    <i class="fa"></i> 
                                     I accept <strong><a href="#">Terms and Conditions</a></strong>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button class="btn btn-purple w-md" type="submit">Register</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="<?php echo site_url('home/login'); ?>">Already have account?</a>
                        </div>
                    </div>
                </form> 
              </div>
            </div>
        </div>

    </div>
</div>

<style>
    .register-tabs {
        margin-left: -30px;
        margin-right: -30px;
        margin-bottom: -20px;
    }
    .register-tabs .tab-content {
        padding-top: 0 !important;
        margin-bottom: 5px !important;
    }
    .register-tabs .nav.nav-tabs>li>a {
        background-color: #E5FFFA;
        border-top: 2px solid #E5FFFA;
        border-bottom: 2px solid #E5FFFA;
    }
    .register-tabs .nav.nav-tabs>li.active>a {
        background-color: #fff;
        border-top: 2px solid #fff;
        border-bottom: 2px solid #70D0B8;
    }
</style>