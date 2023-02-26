<?php 
if ($this->session->userdata('user_id') != "") {
    $uid = $this->session->userdata('user_id');
} else {
    $uid = $about_me[0]['id'];
}
echo $header;
?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 200px; height: 200px;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {text-align: justify; /*border: 1px solid #eee; padding: 30px;margin: 20px 0 0 0;*/}
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
    .profile_menu a {color: #FFF; text-decoration: none;}
    .active {background: #032851 !important; color: #fff !important;}
    .btn {padding: 15px 35px !important;}
</style>
<main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Portfolio Details</h2>
                <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li>Portfolio Details</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <!-- <h3 style="text-transform: capitalize">Welcome <?php echo $about_me[0]['fname'];?></h3>
                        <p style="text-transform: capitalize">Welcome <?php echo $about_me[0]['designation'];?></p> -->
                        <?php if ($this->session->userdata('user_id') == '') { ?>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12' style="margin-top: 20px;border: 1px solid;box-shadow: 1px 1px 0px #999,2px 2px 0px #999,3px 3px 0px #999,4px 4px 0px #999,5px 5px 0px #999,6px 6px 0px #999;margin-bottom: 30px;">
                                        <div class="col-sm-3" style="text-align: center;float: left;display: inline-block;">
                                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $about_me[0]['team_image'];?>" alt=""/>
                                        </div>
                                        <div class="col-sm-9" style="text-align: center;float: left;display: inline-block;margin-top: 28px;">
                                            <h3 style="text-transform: capitalize; text-align: center;font-size: 36px;"><?php echo $about_me[0]['fname'];?></h3>
                                            <?php 
                                            $designation = $this->db->query("SELECT * FROM iitmandi_designation WHERE id = ".$about_me[0]['designation']);
                                            foreach ($designation->result_array() as $row1) { ?>
                                                <p style="text-align: center; background: #fff;font-size: 25px;margin: 0;"><?php echo $row1['designation'];?></p>
                                            <?php } ?>
                                            <p style="text-align: center; background: #fff;font-size: 25px;"><?php if ($about_me[0]['specialization'] == '1'){echo 'Environmental Engineering'; } else if($about_me[0]['specialization'] == '2'){echo 'Geotechnical Engineering'; } else if($about_me[0]['specialization'] == '3'){echo 'Structural Engineering'; } else if($about_me[0]['specialization'] == '4'){echo 'Water Resources Engineering'; } else if($about_me[0]['specialization'] == '5'){echo 'Transportation Engineering'; } else if($about_me[0]['specialization'] == '6'){echo 'Remote Sensing and GIS'; } else {echo '';} ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-12 profile_menu" style="text-align:center">
                                <!-- Tab navs -->
                                <a href="<?php echo base_url()?>faculty/dashboard/<?php echo $uid?>"><button type="button" class="btn btn-primary">Home</button></a>
                                <a href="<?php echo base_url()?>faculty/research/<?php echo $uid?>"><button type="button" class="btn btn-primary active">Research</button></a>
                                <?php //if(!empty($publications)) { ?>
                                <a href="<?php echo base_url()?>faculty/publication/<?php echo $uid?>"><button type="button" class="btn btn-primary">Publication</button></a>
                                <?php //} ?>
                                <?php if(!empty($project)) { ?>
                                <a href="<?php echo base_url()?>faculty/projects/<?php echo $uid?>"><button type="button" class="btn btn-primary">Projects</button></a>
                                <?php } ?>
                                <?php if(!empty($lab_member)) { ?>
                                <a href="<?php echo base_url()?>faculty/lab_members/<?php echo $uid?>"><button type="button" class="btn btn-primary">Lab Members</button></a>
                                <?php } ?>
                                <a href="<?php echo base_url()?>faculty/current_opening/<?php echo $uid?>"><button type="button" class="btn btn-primary">Current Openings</button></a>
                                <?php //if(!empty($experience)) { ?>
                                <a href="<?php echo base_url()?>faculty/miscellaneous/<?php echo $uid?>"><button type="button" class="btn btn-primary">Miscellaneous</button></a>
                                <?php //} ?>
                                <?php if ($this->session->userdata('user_id') != '') { ?>
                                <a href="<?php echo base_url()?>faculty/logout"><button type="button" class="btn btn-primary">Logout</button></a>
                                <?php } ?>
                                <!-- Tab navs -->
                            </div>
                            
                            <!-- Research Start -->
                            <section id="features" class="features section-bg1">
                                <div class="container">
                                    <div class="section-title">
                                        <h2 data-aos="fade-in">About Research</h2>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class='col-sm-12'>
                                                <div class="col-sm-12" style="float: left;display: inline-block;">
                                                    <div class='bio_text1'><?php echo $about_me[0]['research_interest'];?></div>
                                                </div>
                                                <?php if ($this->session->userdata('user_id') != '') { ?>
                                                <div class="col-sm-12" style="text-align: right;">
                                                    <button type="button" class="btn btn-primary research_btn" data-toggle="modal" data-target=".bd-example-modal-lg1">Update Research</button>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-title">
                                        <h2 data-aos="fade-in">Research Highlights</h2>
                                    </div>
                                    <div class="row content">
                                        <div class="col-md-5" data-aos="fade-right">
                                            <img src="<?php echo base_url();?>assets/fontend/img/features-1.svg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-7 pt-4" data-aos="fade-left">
                                            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                                            <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            </p>
                                            <ul>
                                                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row content">
                                        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                                            <img src="<?php echo base_url();?>assets/fontend/img/features-2.svg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                                            <h3>Corporis temporibus maiores provident</h3>
                                            <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            </p>
                                            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row content">
                                        <div class="col-md-5" data-aos="fade-right">
                                            <img src="<?php echo base_url();?>assets/fontend/img/features-3.svg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-7 pt-5" data-aos="fade-left">
                                            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                                            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                                            <ul>
                                                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                                <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row content">
                                        <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                                            <img src="<?php echo base_url();?>assets/fontend/img/features-4.svg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                                            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                                            <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            </p>
                                            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Research End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->
<div class="modal fade bd-example-modal-lg1 research_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
        <form id="formf_research" action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class='col-sm-12'>
                        <textarea id="research_interest" name="research_interest"><?php echo $about_me[0]['research_interest'];?></textarea>
                    </div>
                </div>
                <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                    <div id="err"></div>
                    <input class="btn btn-primary about_save" type="submit" value="Update">
                    <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<?php echo $footer?>