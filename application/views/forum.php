<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <meta name="title" content="">
    <meta name="description" content="">
    <?php echo $header;?>    
    <div class="post-section section">
        <div class="container">
            <div class="row" style="padding: 60px 0 0 0;">
                <div class="col-lg-8 col-12">
                    <div class="post-block-wrapper">
                        <div class="body" style="padding: 0px 20px;">
                            <div class="contact-info row" style="padding: 0px 10px;">
                                <div class="page-banner" style="padding: 20px 0 0 0;">
                                    <ol class="page-breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active"><?php echo $title;?></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-12 page_forum">
                                    <?php if(!empty($allnews)) {
                                    foreach ($allnews as $row_news){ ?>
                                    <div class="post post-small post-list feature-post post-separator-border">
                                        <div class="post-wrap">
                                            <div class="content">
                                                <h5 class="title" data-id="<?php echo $row_news['id']; ?>" id="getData"><a href="javascript:void(0);"><?php echo $row_news['title']?></a></h5>
                                                <div class="content">
                                                    <div class="meta fix">
                                                        <a href="#" class="meta-item author"><i class="fa fa-user"></i>
                                                        <?php 
                                                        $fa_user = $this->db->query("SELECT * FROM `knosmosdb_users` WHERE `id` = '".$row_news['role_id']."'")->result_array();
                                                        if(!empty($fa_user)){
                                                            if($fa_user[0]['id'] == $row_news['role_id']){
                                                                echo $fa_user[0]['fullname'];
                                                            } else {
                                                                echo "KNOSMOS";
                                                            }
                                                        } else {
                                                            echo "KNOSMOS"; 
                                                        }
                                                        ?>
                                                        </a>
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i><?php echo date("jS M, Y", strtotime($row_news['add_date']));?></span>
                                                        <a href="#" class="meta-item comment"><i class="fa fa-eye"></i>(<?php echo $row_news['viewers']?>)</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } else { ?>
                                        <div >No Record Found!</div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $sidebar;?>
            </div>
        </div>
    </div>
    <?php echo $footer;?>
    <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog"> 
            <div class="modal-content">
                <div class="comment_data" style="margin: 25px 0 0 0;overflow: scroll;height: 310px;"></div>
                <div class="comment_form">
                    <div class="col-md-12 mb-md-0 mb-5">
                        <h3 style="text-align: center;margin: 15px 0 15px 0px;text-decoration: underline;">Write your Opinion</h3>
                        <div class="err_msg" style="text-align: center;">Please fill all the fields.</div>
                        <form id="contact-form" name="contact-form" method="POST">
                            <div class="row" style="margin: 0 0 10px 0;">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Email" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin: 0 0 10px 0;">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="comment" name="comment" class="form-control" placeholder="Comment" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin: 0 15px 25px 0;text-align: right;display: inherit;">
                                <button type="button" class="btn btn-primary" id="submit_cmnt">Submit</button>
                            </div>
                        </form>
                        <div class="status"></div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('.err_msg').hide();
        $(document).on('click', '#getData', function(e){
            var v = $(this).data('id');
            $.ajax({
                url: '<?php echo base_url();?>/page/getdata',
                type: 'POST',
                data: 'id='+v,
                dataType: 'html'
            })
            .done(function(data){
                $('.comment_data').html(''); // blank before load.
                $('.comment_data').html(data); // load here
                $('#view-modal').modal('show');
            })
            .fail(function(){
                $('.modal-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            });
        });
        $('#submit_cmnt').click(function(){
            var news_id = $('#news_id').val();
            var name = $('#name').val();
            var email = $('#email').val();
            var comment = $('#comment').val();
            if($('#name').val()=='' || $('#email').val()=='' || $('#comment').val()==''){
                $('.err_msg').show();
            } else{
                $.ajax({
                url: '<?php echo base_url();?>/page/postcomment',
                type: 'POST',
                data: 'name='+name+'&email='+email+'&comment='+comment+'&news_id='+news_id,
            })
            .done(function(data){
                if(data == 1){
                    $('#contact-form')[0].reset();
                    $('#view-modal').modal('hide');
                    location.reload();
                }
            })
            .fail(function(){
                $('.modal-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            });
            }
        })
    });
    </script>
</body>
</html>