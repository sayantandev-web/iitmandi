<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <?php echo $header;?>  
    <style>
        .col-sm-5 {}
    </style>  
    <div class="post-section section">
        <div class="container">
            <div class="row" style="padding: 60px 0 0 0;">
                <div class="col-12 mb-50">
                    <div class="post-block-wrapper">
                        <div class="body" style="padding: 0px 20px;">
                            <div class="contact-info row" style="padding: 0px 10px;">
                                <div class="page-banner" style="padding: 20px 0 0 0;">
                                    <h2 style="color: #000 !important;"><?php echo $title;?></h2>
                                    <ol class="page-breadcrumb">
                                        <li>Student Login: <a href="<?php echo base_url()?>/student">Click Here</a></li>
                                        <li>Faculty Login: <a href="<?php echo base_url()?>faculty">Click Here</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $footer;?>
</body>
</html>