<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="images/fav.png" sizes="32x32" />
<title><?php echo $page_title; ?></title>
<head>
    <?php echo $header_scripts; ?>
    <style type="text/css">
        table td {overflow: scroll;height: 200px;}
        .btn {padding: 3px 3px !important;}
    </style>
</head>
<body class="skin-blue">
    <div class="wrapper">
        <header class="main-header">
            <a href="admin" class="logo"><b>Admin</b>Panel</a>
            <?php echo $header; ?>
        </header>
        <?php echo $sidebar;?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1><?php echo $page_title; ?><small>Control panel</small></h1>
                <?php $uid = $this->session->userdata('uid'); ?>
                <ol class="breadcrumb">
                    <li><a href="admin"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active"><?php echo $page_title; ?></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="display: flow-root;">
                                <h3 class="panel-title" style="float: left;"><?php echo $page_title; ?></h3>
                                <?php if ($uid == '-1') { ?>
                                <a href="admin/ourteam/add_team" style="float: right;background: #3c8dbc;padding: 10px;color: #fff;">Add User</a>
                                <?php } ?>
                            </div>
                            <div class="panel-body">
                                <?php echo $this->utilitylib->showMsg();?>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table id="datatable" class="table table-striped table-bordered dat_tbl">
                                            <thead>
                                                <tr>
                                                    <!-- <th>Image</th> -->
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Designation</th>
                                                    <th>Type</th>
                                                    <?php if ($uid == '-1') { ?>
                                                    <th style="width: 160px;">Action</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($team)) {
                                                    $i=1; ?>
                                                <?php foreach($team as $row) { ?>
                                                <tr>
                                                    <!-- <td>
                                                    <?php if(@$row['team_image']){ ?>
                                                    <img src="<?php echo base_url(); ?>uploads/our_team/thumb/<?php echo $row['team_image']; ?>" alt="<?php echo $row['team_image']; ?>" width="116" height="87">
                                                    <?php } else { ?>
                                                    <img src="<?php echo base_url(); ?>uploads/no-img.jpg" alt="no-img.jpg">
                                                    <?php } ?>
                                                    </td> -->
                                                    <td><?php echo $row['fname']." ".$row['mname']." ".$row['lname'] ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php if ($row['position'] == '1'){echo 'Faculty'; } else if($row['position'] == '2'){echo 'Postdocs'; } else if($row['position'] == '3'){echo 'Scholars'; } else if($row['position'] == '4'){echo 'Project Staff'; } else if($row['position'] == '5'){echo 'Students'; } else if($row['position'] == '6'){echo 'Technical Staff'; } else if($row['position'] == '7'){echo 'Supporting Staff'; } else if($row['position'] == '8'){echo 'External'; } else {echo '';} ?>
                                                    </td>
                                                    <?php 
                                                    if ($row['designation'] != '' OR $row['designation'] != null) {
                                                        $designation = $this->db->query("SELECT * from iitmandi_designation where id =".$row['designation']); 
                                                        foreach($designation->result_array() as $row1) { ?>
                                                        <td><?php echo $row1['designation']; ?></td>
                                                        <?php } 
                                                    } else { ?>
                                                        <td><?php echo "None"; ?></td>
                                                    <?php } ?>
                                                    <?php if ($uid == '-1') { ?>
                                                    <td>
                                                    <a href="admin/ourteam/add_team/<?php echo $row['id']; ?>" class="btn btn-info waves-effect waves-light tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    <?php if($row['status']==1) { ?>
                                                    <a href="admin/ourteam/change_status/<?php echo $row['id']; ?>" class="btn btn-info waves-effect waves-light tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inactive Status"><i class="fa fa-check" aria-hidden="true" onclick="return confirm('Are you sure you want to inactive status of this?')"></i></a>
                                                    <?php } else { ?>
                                                    <a href="admin/ourteam/change_status/<?php echo $row['id']; ?>" class="btn btn-pink waves-effect waves-light tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Active Status" onclick="return confirm('Are you sure you want to active status of this?')"><i class="fa fa-remove"></i></a>
                                                    <?php } ?>
                                                    <a href="admin/ourteam/banner_delete/<?php echo $row['id']; ?>" class="btn btn-danger waves-effect waves-light tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                    <?php if ($row['update_pass']!= 2) { ?>
                                                    <a href="javascript:void(0);" class="btn btn-info waves-effect waves-light tooltips showhidereply" data-placement="top" data-toggle="tooltip" data-original-title="Email Content" data-id="<?php echo $i?>">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    </a>
                                                    <?php } ?>
                                                    <a href="javascript:void(0);" class="btn btn-info waves-effect waves-light tooltips showhidereset_pass" data-placement="top" data-toggle="tooltip" data-original-title="Reset Password" data-id="<?php echo $i?>">
                                                    <i class="fa fa-key" aria-hidden="true"></i>
                                                    </a>
                                                    <div class ='replycomment' id="replycomment_<?php echo $i?>">
                                                    <?php echo $mailContent = '<p>Dear User,<br/>You have successfully registered into IIT Mandi website. Please use the below credential to login into website.<br/>Login Crential:<br/>Email ID: '.$row['email'].'<br/>Password: '.base64_decode($row['password']).'</p>'; ?>
                                                    </div>
                                                    <div class ='reset_pass' id="reset_pass_<?php echo $i;?>" style="margin-top: 10px;">
                                                        <form>
                                                            <div class="form-group">
                                                            <label for="exampleInputPassword1">New Password</label>
                                                            <input type="password" class="form-control" id="newpass_<?php echo $i;?>" placeholder="New Password">
                                                            </div>
                                                            <button type="button" class="btn btn-primary set_password_<?php echo $i;?>" style="margin-top: 10px;">Submit</button>
                                                            <input type='hidden' name='u_id' id='u_id_<?php echo $i;?>' value='<?php echo $row['id'];?>'>
                                                        </form>
                                                        <div id='success_<?php echo $i?>'></div>
                                                    </div>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php $i++; } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $footer; ?>
            </section>
        </div>
    </div>
    <?php echo $footer_scripts; ?>
    <script>
    $(function(){
        $('.replycomment').hide();
        $(".showhidereply").click(function(){
            var $toggle = $(this);
            var id = "#replycomment_" + $toggle.data('id'); 
            $(id).toggle();
        });

        $('.reset_pass').hide();
        $(".showhidereset_pass").click(function() {
            var $toggle1 = $(this);
            var id1 = "#reset_pass_" + $toggle1.data('id'); 
            $(id1).toggle();
        });
        <?php $i=1; 
        foreach($team as $row) { ?>
        $('.set_password_<?php echo $i;?>').click(function() {
            var newpass = $('#newpass_<?php echo $i?>').val();
            var uid = $('#u_id_<?php echo $i?>').val();
            $.post(
                "<?php echo base_url('admin/ourteam/reset_password') ?>", {uid: uid, newpass: newpass}, 
                function(result){
                    if(result) {
                        $("#success_<?php echo $i?>").html(result);
                        setTimeout(function(){
                            window.location.reload();
                        }, 2000);
                    }
                }
            )
        })
        <?php $i++; } ?>
    });
    </script>
</body>
</html>