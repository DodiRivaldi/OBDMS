<div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading"> 
           <h3 class="text-center m-t-10"> Sign In to <strong>ODBMS</strong> </h3>
        </div> 

        <form class="form-horizontal m-t-40" method="post" name="form_login">                       
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" name="email" type="text" required="" placeholder="Email">
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" name="password" type="password" required="" placeholder="Password">
                </div>
            </div>

            <div class="form-group ">
                <div class="col-xs-12">
                    <label class="cr-styled">
                        <input type="checkbox" checked>
                        <i class="fa"></i> Remember me
                    </label>
                </div>
            </div>
            
            <div class="form-group text-right">
                <div class="col-xs-12">
                    <button class="btn btn-purple w-md" type="submit">Log In</button>
                </div>
            </div>
            <div class="form-group m-t-30">
                <div class="col-sm-7">
                    <a href="#"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                </div>
                <div class="col-sm-5 text-right">
                    <a href="<?php echo site_url('home/register'); ?>">Create an account</a>
                </div>
            </div>
        </form>

    </div>
</div>