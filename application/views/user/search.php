<div class="wraper container-fluid">
    <div class="page-title"> 
        <h3 class="title">Search </h3> 
    </div>
      
    <div class="row">
    
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body p-t-0">
                    <div class="input-group">
                        <select data-url="<?php echo site_url('user/search') ?>" class="form-control drp_search_bg">
                            <option value="">Search...</option>
                            <?php
                            $CI =& get_instance();
                            $blood_groups = $CI->blood_groups();
                            foreach ($blood_groups as $key => $blood_group) {
                                $selected = "";
                                if(!empty($group)) if($blood_group->id == $group) $selected = "selected='selected'";
                                echo "<option $selected value='".$blood_group->id."'>".$blood_group->name."</option>";
                            }
                            ?>
                        </select>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-effect-ripple btn-primary"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    
    </div> <!-- End row -->

    <div class="row">
        <?php
        if(!empty($profiles_org)) { 
            foreach ($profiles_org as $key => $profile) {
        ?>
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-body p-t-10">
                    <div class="media-main">
                        <a class="pull-left" href="#">
                            <img class="thumb-lg img-circle bx-s" src="<?php echo $profile->user_img; ?>" alt="">
                        </a>
                        <div class="pull-right btn-group-sm">
                            <a class="btn btn-red"><?php echo $profile->blood_group; ?> <span class="badge bg-white text-red"><?php echo $profile->members_count; ?></span></a>
                        </div>
                        <div class="info">
                            <h4><?php echo $profile->name; ?> <small class="text-info">Organization</small></h4>
                            <p class="text-muted"><?php echo $profile->address.', '.$profile->district; ?></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr/>
                    <ul class="social-links list-inline p-b-10">
                        <li>
                            <a><i class="fa fa-phone" aria-hidden="true"></i></a> <?php echo $profile->phone; ?>
                        </li>
                        <li>
                            <a><i class="fa fa-envelope-o" aria-hidden="true"></i></a> <?php echo $profile->email; ?>
                        </li>
                    </ul>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div>

        <?php
            }
        }

        if(!empty($profiles)) { 
            foreach ($profiles as $key => $profile) {
        ?>
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-body p-t-10">
                    <div class="media-main">
                        <a class="pull-left" href="#">
                            <img class="thumb-lg img-circle bx-s" src="<?php echo $profile->user_img; ?>" alt="">
                        </a>
                        <div class="pull-right btn-group-sm">
                            <a class="btn btn-red"><?php echo $profile->blood_group; ?> </a>
                        </div>
                        <div class="info">
                            <h4><?php echo $profile->name; ?> <small class="text-success"><i class="fa fa-circle" aria-hidden="true"></i></small></h4>
                            <p class="text-muted"><?php echo $profile->location.', '.$profile->district; ?></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr/>
                    <ul class="social-links list-inline p-b-10">
                        <li>
                            <a><i class="fa fa-phone" aria-hidden="true"></i></a> <?php echo $profile->phone; ?>
                        </li>
                        <li>
                            <a><i class="fa fa-envelope-o" aria-hidden="true"></i></a> <?php echo $profile->email; ?>
                        </li>
                    </ul>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div>

        <?php
            }
        }
        ?>



    </div> <!-- End row -->

    <!-- <div class="row">
        <div class="col-sm-12">
            <ul class="pagination pull-right">
                <li>
                  <a href="#" aria-label="Previous">
                    <i class="fa fa-angle-left"></i>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="disabled"><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
            </ul>
        </div>
    </div> -->


</div>