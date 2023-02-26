<!DOCTYPE html>
<html>
<link rel="icon" type="image/png" href="images/fav.png" sizes="32x32" />
<title><?php echo $page_title; ?></title>
<head>
    <?php echo $header_scripts; ?>
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
                <ol class="breadcrumb">
                    <li><a href="admin"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active"><?php echo $page_title; ?></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo $page_title; ?>
                            </div>
                            <div class="panel-body">
                                <?php echo $this->utilitylib->showMsg();?>
                                <div class="form">
                                    <form class="cmxform form-horizontal tasi-form" id="editForm" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="page_title" class="control-label col-lg-3 col-md-3 col-sm-4">Page Title (required)</label>
                                            <div class="col-lg-9 col-md-9 col-sm-8">
                                                <input type="text" class="form-control required" id="page_title" name="page_title"  placeholder="Page Title" value="<?php echo @$pages[0]['page_title'] ?>" <?php if(@$pages[0]['not_edit'] ==1) {?>readonly<?php } ?>>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="control-label col-lg-3 col-md-3 col-sm-4">Meta Title (Required)</label>
                                            <div class="col-lg-9 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="meta_title" name="meta_title" required  placeholder="Meta Title" value="<?php echo @$pages[0]['meta_title'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="control-label col-lg-3 col-md-3 col-sm-4">Meta Description (Required)</label>
                                            <div class="col-lg-9 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="meta_desc" name="meta_desc" required  placeholder="Meta Description" value="<?php echo @$pages[0]['meta_desc'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="page_description" class="control-label col-lg-3 col-md-3 col-sm-4">Page Description</label>
                                            <div class="col-lg-9 col-md-9 col-sm-8">
                                                <textarea class="form-control text_area" id="page_description" name="page_description"><?php echo @$pages[0]['page_description'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 col-md-3 col-sm-4 control-label">Status</label>
                                            <div class="col-lg-9 col-md-9 col-sm-8">
                                                <select class="form-control" name="status">
                                                    <option value="1" <?php if(@$pages[0]['status']==1){ echo "selected"; } ?>>Active</option>
                                                    <option value="2" <?php if(@$pages[0]['status']==2){ echo "selected"; } ?>>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-10">
                                                <button class="btn btn-success_cust waves-effect waves-light m-b-5" type="submit">Save</button>
                                                <a href="admin/page"><button class="btn btn-success_cust waves-effect waves-light m-b-5" type="button">Back</button></a>
                                            </div>
                                        </div>
                                    </form>
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
</body>
</html>