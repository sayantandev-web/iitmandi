<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 200px; height: 200px;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    .cstm_gllery {float: left; display: inline;}
    .cstm_gllery img {padding: 12px; border-radius: 50%; height: 313px;}
    .cstm_gllery h3, p {text-align: center;}
    .modal-content {padding: 30px}
    .modal-lg, .modal-xl {--bs-modal-width: 90% !important;}
    .cstm_details {float: left; display: inline-block;}
    .portfolio-details .portfolio-info h3{margin-bottom: 0 !important; padding-bottom: 0 !important; border-bottom: none !important;}
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {max-width: 1440px !important;}
    .cslm_crnt_open ul { list-style-type: disc !important; padding-left:1em !important; margin-left:1em;}
    .cstmf_gllery {float: left; display: inline;}
    .cstmf_gllery img {padding: 12px;}
</style>
<main id="main">
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12' style="margin-top: 50px;">
                                    <?php if ($pub_details[0]['publication_type'] == 'Journal Article') { ?>
                                        <div class="col-sm-12" style="text-align: center;float: left;display: inline-block;">
                                        <?php if (!empty($pub_details[0]['attachment'])) { ?>
                                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $pub_details[0]['attachment'];?>" alt=""/>
                                        <?php } ?>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <h3 style="text-align:center">Paper Title: <?php echo $pub_details[0]['paper_title'];?></h3>
                                                <h3 style="text-align:center">Journal Name: <?php echo $pub_details[0]['journal_name'];?></h3>
                                                <h3 style="text-align:center">Author Name: <?php echo $pub_details[0]['author_name'];?></h3>
                                                <h3 style="text-align:center">Publish Date: <?php echo $pub_details[0]['publish_date'];?></h3>
                                                <h3 style="text-align:center">Publisher: <?php echo $pub_details[0]['publisher'];?></h3>
                                                <h3 style="text-align:center">External Link: <?php echo $pub_details[0]['external_Link'];?></h3>
                                                <h3 style="text-align:center">Page Number: <?php echo $pub_details[0]['page_number'];?></h3>
                                                <h3 style="text-align:center">Volume Number: <?php echo $pub_details[0]['volume_number'];?></h3>
                                                <h3 style="text-align:center">Issue Number: <?php echo $pub_details[0]['issue_number'];?></h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <?php echo $pub_details[0]['short_summery'];?>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <?php echo $pub_details[0]['key_points'];?>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if ($pub_details[0]['publication_type'] == 'Conference Paper') { ?>
                                        <div class="col-sm-12" style="text-align: center;float: left;display: inline-block;">
                                        <?php if (!empty($pub_details[0]['attachment'])) { ?>
                                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $pub_details[0]['attachment'];?>" alt=""/>
                                        <?php } ?>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <h3 style="text-align:center">Paper Title: <?php echo $pub_details[0]['paper_title'];?></h3>
                                                <h3 style="text-align:center">Conference Name: <?php echo $pub_details[0]['conference_name'];?></h3>
                                                <h3 style="text-align:center">Author Name: <?php echo $pub_details[0]['author_name'];?></h3>
                                                <h3 style="text-align:center">Publish Date: <?php echo $pub_details[0]['publish_date'];?></h3>
                                                <h3 style="text-align:center">Publisher: <?php echo $pub_details[0]['publisher'];?></h3>
                                                <h3 style="text-align:center">Location: <?php echo $pub_details[0]['location'];?></h3>
                                                <h3 style="text-align:center">External Link: <?php echo $pub_details[0]['external_Link'];?></h3>
                                                <h3 style="text-align:center">Page Number: <?php echo $pub_details[0]['page_number'];?></h3>
                                                <h3 style="text-align:center">Volume Number: <?php echo $pub_details[0]['volume_numbers'];?></h3>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <?php echo $pub_details[0]['short_summery'];?>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <?php echo $pub_details[0]['key_points'];?>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if ($pub_details[0]['publication_type'] == 'Book Chapter') { ?>
                                        <div class="col-sm-12" style="text-align: center;float: left;display: inline-block;">
                                        <?php if (!empty($pub_details[0]['attachment'])) { ?>
                                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $pub_details[0]['attachment'];?>" alt=""/>
                                        <?php } ?>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <h3 style="text-align:center">Paper Title: <?php echo $pub_details[0]['paper_title'];?></h3>
                                                <h3 style="text-align:center">Book Name: <?php echo $pub_details[0]['book_name'];?></h3>
                                                <h3 style="text-align:center">Author Name: <?php echo $pub_details[0]['author_name'];?></h3>
                                                <h3 style="text-align:center">Publish Date: <?php echo $pub_details[0]['volume_number'];?></h3>
                                                <h3 style="text-align:center">External Link: <?php echo $pub_details[0]['external_Link'];?></h3>
                                                <h3 style="text-align:center">Editors: <?php echo $pub_details[0]['editors'];?></h3>
                                                <h3 style="text-align:center">Page Number: <?php echo $pub_details[0]['page_number'];?></h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <?php echo $pub_details[0]['short_summery'];?>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <?php echo $pub_details[0]['key_points'];?>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if ($pub_details[0]['publication_type'] == 'Book') { ?>
                                        <div class="col-sm-12" style="text-align: center;float: left;display: inline-block;">
                                        <?php if (!empty($pub_details[0]['attachment'])) { ?>
                                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $pub_details[0]['attachment'];?>" alt=""/>
                                        <?php } ?>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <h3 style="text-align:center">Paper Title: <?php echo $pub_details[0]['paper_title'];?></h3>
                                                <h3 style="text-align:center">Author Name: <?php echo $pub_details[0]['author_name'];?></h3>
                                                <h3 style="text-align:center">Publish Date: <?php echo $pub_details[0]['publish_date'];?></h3>
                                                <h3 style="text-align:center">Publisher: <?php echo $pub_details[0]['publisher'];?></h3>
                                                <h3 style="text-align:center">External Link: <?php echo $pub_details[0]['external_Link'];?></h3>
                                                <h3 style="text-align:center">Page Number: <?php echo $pub_details[0]['page_number'];?></h3>
                                                <h3 style="text-align:center">Volume Number: <?php echo $pub_details[0]['volume_number'];?></h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <?php echo $pub_details[0]['short_summery'];?>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <?php echo $pub_details[0]['key_points'];?>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if ($pub_details[0]['publication_type'] == 'Patent') { ?>
                                        <div class="col-sm-12" style="text-align: center;float: left;display: inline-block;">
                                        <?php if (!empty($pub_details[0]['attachment'])) { ?>
                                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $pub_details[0]['attachment'];?>" alt=""/>
                                        <?php } ?>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div>
                                                <h3 style="text-align:center">Paper Title: <?php echo $pub_details[0]['paper_title'];?></h3>
                                                <h3 style="text-align:center">Author Name: <?php echo $pub_details[0]['author_name'];?></h3>
                                                <h3 style="text-align:center">Publish Date: <?php echo $pub_details[0]['publish_date'];?></h3>
                                                <h3 style="text-align:center">Patient Number: <?php echo $pub_details[0]['patient_number'];?></h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div style="text-align:center">
                                                <?php echo $pub_details[0]['short_summery'];?>
                                            </div>
                                        </div>
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <div style="text-align:center">
                                                <?php echo $pub_details[0]['key_points'];?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php echo $footer?>