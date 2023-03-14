<?php 
if ($this->session->userdata('user_id') != "") {
    $uid = $this->session->userdata('user_id');
    $position = $this->session->userdata('position');
} else {
    $uid = $about_me[0]['id'];
}
echo $header;
?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 100%; }
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
    .btn-primary{background:#ff9800 !important; color:#022851 !important;margin: 0px;}
    *,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
.clearfix {
  display: inline-block;
}

* html .clearfix {
  height: 1%;
}
.clearfix {
  display: block;
}
/*--------------------------------------------------------------
	10. Social
--------------------------------------------------------------*/
.basr-social-share {
  /* position:absolute;
  top:6em;
  left:0;
  right:40em;
  width: 32%; */
  display: block;
  /* text-align:center;
  padding:0 auto;
  margin:5em auto;
  z-index: 999999999; */
  width: 33%;
  margin-left: 35%;
}

.social ul {
  list-style: none;
  padding-left: 0;
  padding-right: 0;
}
.social ul li {
  border: 5px solid #512e12;
  border-radius: 50%;
  float: left;
  position: relative;
  width: 60px;
  height: 60px;
  text-align: center;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
@media only screen and (max-width: 480px) {
  .social ul li {
    border-width: 4px;
    width: 45px;
    height: 45px;
  }
}
.social ul li:not(:last-child) {
  margin-right: 10px;
}
.social ul li:before {
  content: '';
  border-radius: 50%;
  -webkit-shadow: inset 0 0px 3px rgba(149, 90, 42, 0.28), 0px 0px 0px 2px rgba(149, 90, 42, 0.28);
  -ms-box-shadow: inset 0 0px 3px rgba(149, 90, 42, 0.28), 0px 0px 0px 2px rgba(149, 90, 42, 0.28);
  box-shadow: inset 0 0px 3px rgba(149, 90, 42, 0.28), 0px 0px 0px 2px rgba(149, 90, 42, 0.28);
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  width: 60px;
  height: 60px;
  opacity: 0.35;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
@media only screen and (max-width: 480px) {
  .social ul li:before {
    width: 43px;
    height: 43px;
  }
}
.social ul li:hover {
  border-color: #a33629;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.social ul li:hover:before {
  -webkit-shadow: inset 0 0px 3px rgba(163, 54, 41, 0.28), 0px 0px 0px 2px rgba(163, 54, 41, 0.28);
  -ms-box-shadow: inset 0 0px 3px rgba(163, 54, 41, 0.28), 0px 0px 0px 2px rgba(163, 54, 41, 0.28);
  box-shadow: inset 0 0px 3px rgba(163, 54, 41, 0.28), 0px 0px 0px 2px rgba(163, 54, 41, 0.28);
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.social ul li:hover i {
  color: #d66557;
  -webkit-stroke-width: 5.3px;
  -webkit-stroke-color: #a33629;
  -webkit-fill-color: #a33629;
  text-shadow: 1px 0px 20px #a33629;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.social ul li a {
  border-radius: 50%;
  display: block;
  position: absolute;
  top: -5px;
  left: -5px;
  width: 60px;
  height: 60px;
  line-height: 60px;
}
@media only screen and (max-width: 480px) {
  .social ul li a {
    background-size: cover;
    top: -5px;
    left: -5px;
    width: 45px;
    height: 45px;
    line-height: 45px;
  }
}
.social ul li a:before {
  content: '';
  background-image: url('https://img.picload.org/image/dcocwcga/border-social-hover.png');
  border-radius: 50%;
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 46px;
  height: 45px;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: -1;
  opacity: 0;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
@media only screen and (max-width: 480px) {
  .social ul li a:before {
    background-size: cover;
    width: 30px;
    height: 30px;
  }
}
.social ul li a:after {
  content: '';
  background-image: url('https://img.picload.org/image/dcocwcgd/border-social.png');
  border-radius: 50%;
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 46px;
  height: 45px;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: -1;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
@media only screen and (max-width: 480px) {
  .social ul li a:after {
    background-size: cover;
    width: 30px;
    height: 30px;
  }
}
.social ul li a:hover:before {
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) rotate(360deg);
  -ms-transform: translate(-50%, -50%) rotate(360deg);
  transform: translate(-50%, -50%) rotate(360deg);
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.social ul li a:hover:after {
  opacity: 0;
  -webkit-transform: translate(-50%, -50%) rotate(360deg);
  -ms-transform: translate(-50%, -50%) rotate(360deg);
  transform: translate(-50%, -50%) rotate(360deg);
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.social ul li a i {
  color: #ffead3;
  font-size: 23px;
  font-weight: 900;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-stroke-width: 5.3px;
  -webkit-stroke-color: #ffead3;
  -webkit-fill-color: #ffead3;
  text-shadow: 1px 0px 20px #ffead3;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
@media only screen and (max-width: 480px) {
  .social ul li a i {
    font-size: 16px;
  }
}
.social ul li a i.fa-envelope {
  font-size: 14px;
  top: 48%;
}
.k2t-footer.dark-style .social li a,
.dark-style .social li a {
  color: #fff;
}
.k2t-footer.dark-style .social li a:hover,
.dark-style .social li a:hover {
  color: #fff;
}
.basr-social-share.social li:hover a {
  color: #898989;
}
.basr-social-share.social li a {
  border-width: 0;
  color: #cccccc;
}
.basr-social-share.social li a:hover {
  color: #898989;
}
.basr-social-share.social li a span {
  display: none;
}
#example tbody tr:hover{background:#ddd;}
#example thead tr th{ font-size:18px;}
#example tbody tr td{font-size:16px;}
.degree_sec h2{margin:0px; margin:0px; font-size:25px;}
</style>
<main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 70px;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <!-- <h3 style="text-transform: capitalize">Welcome <?php echo $about_me[0]['fname'];?></h3>
                        <p style="text-transform: capitalize">Welcome <?php echo $about_me[0]['designation'];?></p> -->
                        <?php if ($this->session->userdata('user_id') == '') { ?>
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12' style="margin-top: 20px;margin-bottom: 30px; border:1px solid #ddd;">
                                        <div class="row p-3">
                                        <div class="col-sm-3" style="text-align: center;float: left;display: inline-block;">
                                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $about_me[0]['team_image'];?>" alt=""/>
                                        </div>
                                        <div class="col-sm-9" style="text-align: center;float: left;display: inline-block;margin-top: 28px;">
                                            <h3 style="text-transform: capitalize; text-align: center;font-size: 36px; color:#022851;"><?php echo $about_me[0]['fname'];?></h3>
                                            <?php 
                                            $designation = $this->db->query("SELECT * FROM iitmandi_designation WHERE id = ".$about_me[0]['designation']);
                                            foreach ($designation->result_array() as $row1) { ?>
                                                <p style="text-align: center; background: #fff;font-size: 25px;margin: 0; "><?php echo $row1['designation'];?></p>
                                            <?php } ?>
                                            <p style="text-align: center; background: #fff;font-size: 25px;"><?php if ($about_me[0]['specialization'] == '1'){echo 'Environmental Engineering'; } else if($about_me[0]['specialization'] == '2'){echo 'Geotechnical Engineering'; } else if($about_me[0]['specialization'] == '3'){echo 'Structural Engineering'; } else if($about_me[0]['specialization'] == '4'){echo 'Water Resources Engineering'; } else if($about_me[0]['specialization'] == '5'){echo 'Transportation Engineering'; } else if($about_me[0]['specialization'] == '6'){echo 'Remote Sensing and GIS'; } else {echo '';} ?></p>
                                        </div>
                                        </div>
                                        <!-- <div class="basr-social-share social" style="margin-left: 47%;">
                                            <ul class="">
                                                <?php if ($about_me[0]['research_gate'] != '') {?>
                                                <li style="margin-top: 10px;">
                                                    <a class="facebook" href="<?php echo $about_me[0]['research_gate'] ?>">RG</a>
                                                </li>
                                                <?php } ?>
                                                <?php if($about_me[0]['google_scholar'] != '') {?>
                                                <li>
                                                    <a class="twitter" href="<?php echo $about_me[0]['google_scholar'] ?>">GS</a>
                                                </li>
                                                <?php } ?>
                                                <?php if($about_me[0]['linedin_link'] != '') {?>
                                                <li>
                                                    <a class="googleplus" href="<?php echo $about_me[0]['linedin_link'] ?>">in</a>
                                                </li>
                                                <?php } ?>
                                                <?php if($about_me[0]['twitter_link'] != '') {?>
                                                <li>
                                                    <a class="linkedin" href="<?php echo $about_me[0]['twitter_link'] ?>">t</a>
                                                </li>
                                                <?php } ?>
                                                <?php if($about_me[0]['github_link'] != '') {?>
                                                <li>
                                                    <a class="tumblr" href="<?php echo $about_me[0]['github_link'] ?>">GH</a>
                                                </li>
                                                <?php } ?>
                                                <?php if($about_me[0]['medium_link'] != '') {?>
                                                <li>
                                                    <a class="tumblr" href="<?php echo $about_me[0]['medium_link'] ?>">M</a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-12 profile_menu" style="text-align:center">
                                <!-- Tab navs -->
                                <a href="<?php echo base_url()?>faculty/dashboard/<?php echo $uid?>"><button type="button" class="btn btn-primary active">Home</button></a>
                                <a href="<?php echo base_url()?>faculty/research/<?php echo $uid?>"><button type="button" class="btn btn-primary">Research</button></a>
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
                                <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                <a href="<?php echo base_url()?>faculty/logout"><button type="button" class="btn btn-primary">Logout</button></a>
                                <?php } ?>
                                <!-- Tab navs -->
                            </div>
                            <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                            <div class="basr-social-share social" style="margin-left: 47%;">
                                <ul class="">
                                    <?php if ($about_me[0]['research_gate'] != '') {?>
                                    <li style="margin-top: 10px;">
                                        <a class="facebook" href="<?php echo $about_me[0]['research_gate'] ?>">RG</a>
                                    </li>
                                    <?php } ?>
                                    <?php if($about_me[0]['google_scholar'] != '') {?>
                                    <li>
                                        <a class="twitter" href="<?php echo $about_me[0]['google_scholar'] ?>">GS</a>
                                    </li>
                                    <?php } ?>
                                    <?php if($about_me[0]['linedin_link'] != '') {?>
                                    <li>
                                        <a class="googleplus" href="<?php echo $about_me[0]['linedin_link'] ?>">in</a>
                                    </li>
                                    <?php } ?>
                                    <?php if($about_me[0]['twitter_link'] != '') {?>
                                    <li>
                                        <a class="linkedin" href="<?php echo $about_me[0]['twitter_link'] ?>">t</a>
                                    </li>
                                    <?php } ?>
                                    <?php if($about_me[0]['github_link'] != '') {?>
                                    <li>
                                        <a class="tumblr" href="<?php echo $about_me[0]['github_link'] ?>">GH</a>
                                    </li>
                                    <?php } ?>
                                    <?php if($about_me[0]['medium_link'] != '') {?>
                                    <li>
                                        <a class="tumblr" href="<?php echo $about_me[0]['medium_link'] ?>">M</a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>
                            <!-- Home Start -->
                            <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'  style="margin-top: 50px;margin-bottom: 30px;">
                                        <div class="col-sm-12" style="float: left;display: inline-block;">
                                            <h3 style="text-transform: uppercase; text-align: center; margin:0px; padding-bottom:18px !important;">About</h3>
                                            <div class='bio_text1'>
                                                <div class="col-sm-12"><?php echo $about_me[0]['aboutme'];?></div>
                                            </div>
                                        </div>
                                        <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                        <div class="col-sm-12" style="text-align: right;">
                                            <button type="button" class="btn btn-primary about_btn" data-toggle="modal" data-target=".bd-example-modal-lg1">Edit Record</button>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 degree_sec">
                                <?php if(!empty($education)) { ?>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center; padding: 20px 0;">Academic Background</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Degree</th>
                                                    <th>University</th>
                                                    <th>Year</th>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <th>Action</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                            <?php foreach($education as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row['degree'];?></td>
                                                    <td><?php echo $row['university'];?></td>
                                                    <td><?php echo $row['year'];?></td>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <td>
                                                        <button type="button" class="btn btn-primary edu_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2" onclick="EditFEduID(<?php echo $row['id']?>)">Edit</button>
                                                        <button type="button" class="btn btn-primary edu_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2" onclick="DtlFEduID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                            <?php $i++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary edu_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2" style="margin-top: 20px;">Add Academic Background</button>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-12 degree_sec">
                                <?php if(!empty($experience)) { ?>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">Professional Background</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Organisation</th>
                                                    <th>Post</th>
                                                    <th>Year</th>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <th>Action</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $i=1; ?>
                                                <?php foreach($experience as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row['organization'];?></td>
                                                    <td><?php echo $row['position'];?></td>
                                                    <td><?php echo $row['year'];?></td>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <td>
                                                        <button type="button" class="btn btn-primary exp_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg3" onclick="EditFExpID(<?php echo $row['id']?>)">Edit</button>
                                                        <button type="button" class="btn btn-primary edu_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2" onclick="DtlFExpID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                            <?php $i++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary exp_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg3" style="margin-top: 20px;">Add Professional Background</button>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-12 degree_sec">
                                <?php if(!empty($award)) { ?>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">Awards and Distinctions</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Year</th>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <th>Action</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $i=1; ?>
                                                <?php foreach($award as $row) { ?>
                                                <tr>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['year'];?></td>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <td>
                                                        <button type="button" class="btn btn-primary awrd_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg5" onclick="EditFAwrdID(<?php echo $row['id']?>)">Edit</button>
                                                        <button type="button" class="btn btn-primary edu_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2" onclick="DtlFAwrdID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php $i++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary awrd_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg5" style="margin-top: 20px;">Add Awards and Distinctions</button>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="col-12 degree_sec">
                                <?php if(!empty($event)) { ?>
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">Events Organised</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Location</th>
                                                    <th>Year</th>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <th>Action</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                                <?php foreach($event as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row['name'];?></td>
                                                    <td><?php echo $row['location'];?></td>
                                                    <td><?php echo $row['year'];?></td>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <td>
                                                        <button type="button" class="btn btn-primary evnt_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg6" onclick="EditFEvntID(<?php echo $row['id']?>)">Edit</button>
                                                        <button type="button" class="btn btn-primary evnt_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2" onclick="DtlFEvntID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                                <?php $i++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary evnt_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg6" style="margin-top: 20px;">Add New Event</button>
                                </div>
                                <?php } ?>
                            </div>
                            <!-- <div class="col-12">
                                <div class="row">
                                    <div class='col-sm-12'>
                                        <h2 style="text-align: center;">News</h2>
                                    </div>
                                    <div class='col-sm-12'>
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Organisation</th>
                                                    <th>Post</th>
                                                    <th>Year</th>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <th>Action</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <td>Demo</td>
                                                    <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class exp_edit_btn" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="javascript:void(0)" class="btn waves-effect waves-light tooltips td_class exp_dlt_btn" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <?php } ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php if ($this->session->userdata('user_id') != '' && $this->session->userdata('position') == 'Faculty') { ?>
                                <div class="col-sm-12" style="text-align: right;">
                                    <button type="button" class="btn btn-primary exp_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg3">Add New Record</button>
                                </div>
                                <?php } ?>
                            </div> -->
                            <!-- Home End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<div class="modal fade bd-example-modal-lg1 about_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
        <form id="formf_aboutme" action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom: 40px;">
                        <div class="col-sm-2" style="text-align: right;float: left;display: inline-block;">
                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/1667140703711760.jpg" alt=""/>
                        </div>
                    </div>
                    <div class='col-sm-12'>
                        <textarea id="aboutme" name="aboutme"><?php echo $about_me[0]['aboutme'];?></textarea>
                    </div>
                    <div class="col-sm-12" style="margin-bottom: 40px;">
                        <div class="col-sm-12" style="float: left; display: inline-block;">
                            <div class="form-group col-sm-12 cstm_details">
                                <label for="Event Name" class="control-label">Research Gate Link</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="research_gate" name="research_gate" value="<?php echo $about_me[0]['research_gate'];?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-12 cstm_details">
                                <label for="Event Name" class="control-label">Google Scholar Link</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="google_scholar" name="google_scholar" value="<?php echo $about_me[0]['google_scholar'];?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-12 cstm_details">
                                <label for="Event Name" class="control-label">Linedin Link</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="linedin_link" name="linedin_link" value="<?php echo $about_me[0]['linedin_link'];?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-12 cstm_details">
                                <label for="Event Name" class="control-label">Twitter Link</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="twitter_link" name="twitter_link" value="<?php echo $about_me[0]['twitter_link'];?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-12 cstm_details">
                                <label for="Event Name" class="control-label">Github Link</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="github_link" name="github_link" value="<?php echo $about_me[0]['github_link'];?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-12 cstm_details">
                                <label for="Event Name" class="control-label">Medium Link</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="medium_link" name="medium_link" value="<?php echo $about_me[0]['medium_link'];?>">
                                </div>
                            </div>
                        </div>
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
<div class="modal fade bd-example-modal-lg2 edu_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
        <form id="formf_edu" action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom: 40px;">
                        <div class="col-sm-12" style="float: left; display: inline-block;">
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Degree</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="degree" name="degree">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">University</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="university" name="university">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Year</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="year" name="year">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-md-3 col-sm-4 control-label">Status</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <select class="form-control" name="status">
                                        <option value="1" <?php if(@$research_category['status']==1){ echo "selected"; } ?>>Active</option>
                                        <option value="2" <?php if(@$research_category['status']==2){ echo "selected"; } ?>>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                    <div id="err"></div>
                    <!-- <button type="button" class="btn btn-primary about_data"><a href="javascript:void(0);">Edit Record</a></button> -->
                    <!-- <button type="button" class="btn btn-primary about_save" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button> -->
                    <input class="btn btn-primary edu_save" type="submit" value="Submit">
                    <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                    <input type="hidden" id="acaid" name="acaid">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg3 exp_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
            <form id="formf_exp" action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 40px;">
                            <div class="col-sm-12" style="float: left; display: inline-block;">
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Organization</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="organization" name="organization">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Position</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="position" name="position">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Year</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="exp_year" name="exp_year">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Status</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <select class="form-control" name="status">
                                            <option value="1" <?php if(@$research_category['status']==1){ echo "selected"; } ?>>Active</option>
                                            <option value="2" <?php if(@$research_category['status']==2){ echo "selected"; } ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                        <div id="err"></div>
                        <!-- <button type="button" class="btn btn-primary about_data"><a href="javascript:void(0);">Edit Record</a></button> -->
                        <!-- <button type="button" class="btn btn-primary about_save" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button> -->
                        <input class="btn btn-primary exp_save" type="submit" value="Submit">
                        <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                        <input type="hidden" id="expid" name="expid">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg4 pub_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
            <form id="form_pub" action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 40px;">
                            <div class="col-sm-12" style="float: left; display: inline-block;">
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Publications Type" class="control-label ">Publications Type</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <select class="form-control publication_type" name="publication_type" id="publication_type">
                                            <option value="">Choose an option</option>
                                            <option value="Journal Article">Journal Article</option>
                                            <option value="Conference Paper">Conference Paper</option>
                                            <option value="Book Chapter">Book Chapter</option>
                                            <option value="Book">Book</option>
                                            <option value="Patent">Patent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 body_content" style="float: left; display: inline-block;">
                                <div>
                                    <div class="form-group col-sm-4 cstm_details attachment">
                                        <label for="Event Name" class="control-label">Image</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="file" class="form-control required" id="attachment" name="attachment" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details author_name">
                                        <label for="Event Name" class="control-label">Authors Name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="author_name" name="author_name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details paper_title">
                                        <label for="Event Name" class="control-label">Title of Paper</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="paper_title" name="paper_title" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details journal_name">
                                        <label for="Event Name" class="control-label">Journal Name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="journal_name" name="journal_name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details conference_name">
                                        <label for="Event Name" class="control-label">Conference name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="conference_name" name="conference_name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details book_name">
                                        <label for="Event Name" class="control-label">Book name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="book_name" name="book_name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details publish_date">
                                        <label for="Event Name" class="control-label">Publised date</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="publish_date" name="publish_date" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details patient_number">
                                        <label for="Event Name" class="control-label">Patent Number</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="patient_number" name="patient_number" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details publisher">
                                        <label for="Event Name" class="control-label">Publisher</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="publisher" name="publisher" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details location">
                                        <label for="Event Name" class="control-label">location</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="location" name="location" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details external_Link">
                                        <label for="Event Name" class="control-label">DOI (External Link)</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="external_Link" name="external_Link" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details editors">
                                        <label for="Event Name" class="control-label">Editors</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="editors" name="editors" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details page_number">
                                        <label for="Event Name" class="control-label">Page Number</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="page_number" name="page_number" value="">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group col-sm-12 cstm_details page_number">
                                        <label for="Event Name" class="control-label">Short Summary</label>
                                        <div class="col-sm-12">
                                            <!-- <input type="text" class="form-control required" id="page_number" name="page_number" value=""> -->
                                            <textarea id="short_summery" name="short_summery"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 cstm_details page_number">
                                        <label for="Event Name" class="control-label">Key points</label>
                                        <div class="col-sm-12">
                                            <!-- <input type="text" class="form-control required" id="page_number" name="page_number" value=""> -->
                                            <textarea id="key_points" name="key_points"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group col-sm-4 cstm_details">
                                        <label for="Event Name" class="control-label">Highlights</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="highlight" name="highlight" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details">
                                        <label for="Event Name" class="control-label">Status</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <select class="form-control" id="status" name="status">
                                                <option value="1" <?php if(@$research_category['status']==1){ echo "selected"; } ?>>Active</option>
                                                <option value="2" <?php if(@$research_category['status']==2){ echo "selected"; } ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                        <div id="err"></div>
                        <input class="btn btn-primary publication_save" type="submit" value="Submit">
                        <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg5 awrd_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
            <form id="form_awrd" action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 40px;">
                            <div class="col-sm-12" style="float: left; display: inline-block;">
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Name</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="title" name="title" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Year</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="awrd_year" name="awrd_year" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Status</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <select class="form-control" name="status">
                                            <option value="1" <?php if(@$research_category['status']==1){ echo "selected"; } ?>>Active</option>
                                            <option value="2" <?php if(@$research_category['status']==2){ echo "selected"; } ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                        <div id="err"></div>
                        <input class="btn btn-primary awd_save" type="submit" value="Submit">
                        <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                        <input type="hidden" id="awdid" name="awdid">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg6 event_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
            <form id="form_evnt" action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 40px;">
                            <div class="col-sm-12" style="float: left; display: inline-block;">
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Name</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="event_title" name="event_title" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Location</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="event_location" name="event_location" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Year</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="event_year" name="event_year" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Status</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <select class="form-control" name="event_status">
                                            <option value="1" <?php if(@$research_category['status']==1){ echo "selected"; } ?>>Active</option>
                                            <option value="2" <?php if(@$research_category['status']==2){ echo "selected"; } ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                        <div id="err"></div>
                        <input class="btn btn-primary evnt_save" type="submit" value="Submit">
                        <input type="hidden" id="uid" name="uid" value="<?php echo $uid?>">
                        <input type="hidden" id="evntid" name="evntid">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $footer?>