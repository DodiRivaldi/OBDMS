<div class="wraper container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Contact Us</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table class="table table-striped table-bordered datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                         
                                <tbody>
                                <?php 
                                if(!empty($messages)) { 
                                    foreach ($messages as $key => $message) {
                                    ?>
                                    <tr>
                                        <td><?php echo $message->name; ?></td>
                                        <td><?php echo $message->phone; ?></td>
                                        <td><?php echo $message->email; ?></td>
                                        <td><?php echo $message->subject; ?></td>
                                        <td><?php echo $message->message; ?></td>
                                        <td>
                                            <a class="text-danger" onclick="return confirm('Are you sure to delete?')" data-toggle="tooltip" title="Delete" href="<?php echo site_url('user/delete_contact_us/'.encode($message->id)); ?>"><i class="fa fa-trash"></i></a>
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