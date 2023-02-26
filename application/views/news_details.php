<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <meta name="title" content="<?php echo $fullnews[0]['meta_title'];?>">
    <meta name="description" content="<?php echo $fullnews[0]['meta_desc'];?>">
    <style type="text/css">
    .wp-image-6{width: 708px; height: 400px;}
    .wp-image-8{width: 708px; height: 400px;}
    .page-banner{background-color: rgba(0, 0, 0, 0.5); top: 0; left: 0; content: ""; display: block; height: 100%; width: 100%; -webkit-box-shadow: inset 0 0 188px 0 #000000; -moz-box-shadow: inset 0 0 188px 0 #000000; box-shadow: inset 0 0 188px 0 #000000;z-index: -1; padding: 20px 30px !important;}
    .cstm_meta_cls{display: inline-block !important; color: #fff;}
    .page-breadcrumb{margin-bottom: 30% !important;}
    .cstm_title_cls{color: #fff; font-size: 36px; line-height: 50px;}
    .cstm_meta_cls .meta-item {margin: 0 10px;}
    #accordion .panel {border-radius: 0; border: 0; margin-top: 0px; display: flow-root;}
    #accordion a {display: block; padding: 10px 15px; border-bottom: 1px solid #b42b2b; text-decoration: none;}
    #accordion .panel-heading a.collapsed:hover,
    #accordion .panel-heading a.collapsed:focus {background-color: #b42b2b; color: white; transition: all 0.2s ease-in;}
    #accordion .panel-heading a.collapsed:hover::before,
    #accordion .panel-heading a.collapsed:focus::before {color: white;}
    #accordion .panel-heading {padding: 0; border-radius: 0px; text-align: center;}
    #accordion .panel-heading a:not(.collapsed) {color: white; background-color: #b42b2b; transition: all 0.2s ease-in;}
    /* Add Indicator fontawesome icon to the left */
    #accordion .panel-heading .accordion-toggle::before {font-family: 'FontAwesome'; content: '\f00d'; float: left; color: white; font-weight: lighter; transform: rotate(0deg); transition: all 0.2s ease-in;}
    #accordion .panel-heading .accordion-toggle.collapsed::before {color: #444; transform: rotate(-135deg); transition: all 0.2s ease-in;}
    .panel-collapse p {width: 100%;display: inline-block !important;}
    .panel-collapse a { padding: 0 !important; border-bottom: none !important; text-decoration: none; display: inline-block !important;}
    </style>
    <?php echo $header;?>
    <!-- <div class="blog-section section" style="background-image: url('<?php echo base_url();?>assets/images/news/<?php echo $fullnews[0]['file_name'];?>');z-index: 99999999;position: relative; background-size: contain;"> -->
	<div class="blog-section section">
        <input type="hidden" name="reader_id" id="reader_id" value="<?php echo $this->session->userdata('uid'); ?>">
        <input type="hidden" name="news_id" id="news_id" value="<?php echo $fullnews[0]['id']; ?>">
        <div class="container">
            <div class="row">
                <div class="page-banner" style="background-image: url('<?php echo base_url();?>assets/images/news/<?php echo $fullnews[0]['file_name'];?>');z-index: 99999999;position: relative; background-size: cover;">
                    <ol class="page-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <?php $cat_name=$this->common_model->get_data_array(CATEGORY,array('slug'=>$fullnews[0]['category'],'status' =>1, 'is_delete'=>1),'','','','','',''); ?>
                        <li class="active"><?php echo $cat_name[0]['category_name']?></li>
                        <li class="active"><?php echo $fullnews[0]['title']; ?></li>
                    </ol>
                    <a href="<?php echo base_url().'category/'.$fullnews[0]['category']?>"><h3 class="category" style="padding: 5px;font-size: 12px;color: #fff;background: #000;"><?php echo $cat_name[0]['category_name']?></h3></a>
                    <h3 class="title cstm_title_cls"><?php echo $fullnews[0]['title']; ?></h3>
                    <div class="meta fix cstm_meta_cls">
                        <a href="#" class="meta-item author">
                            <?php 
                            $fa_user = $this->db->query("SELECT * FROM `knosmosdb_users` WHERE `id` = '".$fullnews[0]['role_id']."'")->result_array();
                            if(!empty($fa_user)){
                                if($fa_user[0]['id'] == $fullnews[0]['role_id']){
                                    echo $fa_user[0]['fullname'];
                                } else {
                                    echo "Admin";
                                }
                            } else {
                                echo "Admin";   
                            }
                            ?>
                        </a>
                        <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo date("jS M, Y", strtotime($fullnews[0]['add_date']));?></span>
                        <span class="meta-item view"><i class="fa fa-eye"></i><?php echo $fullnews[0]['viewers']?></span>
                    </div>
                </div>
                <div class="col-sm-12" style="background: #fff;">
                    <div class="col-sm-8 mb-50" style="float: left; display: inline-block;">
                        <div class="single-blog mb-50">
                            <div class="blog-wrap">
                                <div class="content cstm_news_cls">
                                    <div id="accordion" class="panel-group">
                                        <?php 
                                        if($fullnews[0]['role_id'] != "0"){ 
                                            //$a_bio = $this->common_model->get_data_array(USERS,array('id'=>$fullnews[0]['role_id'],'status' =>1),'','','','','',''); 
                                            $a_bio = $this->db->query("SELECT * FROM `knosmosdb_users` WHERE `id` = '".$fullnews[0]['role_id']."' AND `status` = '1'")->result_array();
                                            if($a_bio[0]['bio'] != ""){ 
                                        ?>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#panelBodyOne" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Author Bio</a></h4>
                                            </div>
                                            <div id="panelBodyOne" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <div><?php echo $a_bio[0]['bio']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }} ?>
                                        <?php /*if($fullnews[0]['table_content'] != "" && $a_bio[0]['bio'] != ""){ */?>
                                        <?php if($fullnews[0]['table_content'] != ""){ ?>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#panelBodyTwo" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Table of Contents</a></h4>
                                            </div>
                                            <div id="panelBodyTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div><?php echo $fullnews[0]['table_content']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } else { ?>
                                        	<div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#panelBodyTwo" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Table of Contents</a></h4>
                                            </div>
                                            <div id="panelBodyTwo" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <div><?php echo $fullnews[0]['table_content']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php if($fullnews[0]['description'] != ""){ ?>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#panelBodyThree" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Overview</a></h4>
                                            </div>
                                            <div id="panelBodyThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div><?php echo $fullnews[0]['overview']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php if($fullnews[0]['overview'] != ""){ ?>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#panelBodyFour" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Description</a></h4>
                                            </div>
                                            <div id="panelBodyFour" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div><?php echo $fullnews[0]['description']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php if($fullnews[0]['conclusion'] != ""){ ?>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#panelBodyFive" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Conclusion</a></h4>
                                            </div>
                                            <div id="panelBodyFive" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div><?php echo $fullnews[0]['conclusion']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php if($fullnews[0]['reference'] != ""){ ?>
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a href="#panelBodySix" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion">Reference</a></h4>
                                            </div>
                                            <div id="panelBodySix" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div><?php echo $fullnews[0]['reference']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="tags-social float-left">
                                    <div class="tags float-left"></div>
                                    <!-- AddToAny BEGIN -->
									<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                        <a class="a2a_button_facebook"></a>
                                        <a class="a2a_button_twitter"></a>
                                        <a class="a2a_button_google_gmail"></a>
    									<a class="a2a_button_whatsapp"></a>
    									<a class="a2a_button_reddit"></a>
    									<a class="a2a_button_pinterest"></a>
    									<a class="a2a_button_linkedin"></a>
									</div>
									<script async src="https://static.addtoany.com/menu/page.js"></script>
									<!-- AddToAny END -->
                                </div>
                                <div style=" display: inline-block; margin: 25px 0 0 0;"><a href="<?php echo base_url().'page/forums'?>">Click Here to Discuss</a></div>
                            </div>
                        </div>
                    </div>
                    <?php echo $sidebar;?>
                </div>
            </div>
        </div>
    </div>
    <?php echo $footer; ?>
    <script type="text/javascript">
        $(document).ready(function(){
            var reader_id = $('#reader_id').val();
            var news_id = $('#news_id').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>user/readernews",
                data: 'reader_id='+ reader_id + '&news_id=' + news_id,
                success: function(result) {}
            });
            var news_id = $('#news_id').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>home/viewnews",
                data: 'news_id=' + news_id,
                success: function(result) {}
            });
        });
    </script>
</body>
</html>