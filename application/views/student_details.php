<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 100%;  border-radius: 50%;}
    .bio_text {margin: 0px 0px 0px 40px; text-align: left;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .bio_text1 p{text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    /* .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {max-width: 1590px !important;} */
    .cstm_gllery {float: left; display: inline;}
    .cstm_gllery img {padding: 12px;}
    .cstm_gllery h3, p {text-align: center;}
    .modal-content {padding: 30px}
    .modal-lg, .modal-xl {--bs-modal-width: 90% !important;}
    .cstm_details {float: left; display: inline-block;}
    .portfolio-details .portfolio-info h3{margin-bottom: 0 !important; padding-bottom: 0 !important; border-bottom: none !important;}
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {max-width: 1440px !important;}
    .cslm_crnt_open ul { list-style-type: disc !important; padding-left:1em !important; margin-left:1em;}
    .cstmf_gllery {float: left; display: inline;}
    .cstmf_gllery img {padding: 12px;}
    #example thead tr th {
    font-size: 18px;
}
</style>
<main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 70px">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
<<<<<<< HEAD
                    <div class="portfolio-info">
                        <div class="row">
                        <h3 style="text-align: center; text-transform: capitalize"><?php echo $about_me[0]['fname'];?></h3>                      
                        <div class="row">

                           
                            <!-- <div class="col-2">
                                
=======
                    <div class="portfolio-info" style="margin-top: 70px">
                        <h3 style="text-align: center; text-transform: capitalize"><?php echo $about_me[0]['fname'];?></h3>                      
                        <div class="row">
                            <!-- <div class="col-2">
>>>>>>> 215935d9a9fec2f3a496c16f3ef7ea71ce671497
                                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                                    <a class="nav-link active" id="v-pills-link1-tab" data-mdb-toggle="pill" role="tab">About me</a>
                                    <a class="nav-link active" id="v-pills-link2-tab" data-mdb-toggle="pill" role="tab">Education</a>
                                    <a class="nav-link active" id="v-pills-link3-tab" data-mdb-toggle="pill" role="tab">Experience</a>
                                    <a class="nav-link active" id="v-pills-link4-tab" data-mdb-toggle="pill" role="tab">Publications</a>
                                    <a class="nav-link active" id="v-pills-link5-tab" data-mdb-toggle="pill" role="tab">Awards and Honours</a>
                                    <a class="nav-link active" id="v-pills-link6-tab" data-mdb-toggle="pill" role="tab">Photo Gallery</a>
                                </div>
<<<<<<< HEAD
                                 
                            </div>  -->
                            <div class="col-md-12">
=======
                            </div> -->
                            <div class="col-sm-12">
>>>>>>> 215935d9a9fec2f3a496c16f3ef7ea71ce671497
                            <!-- Tab content -->
                                <div class="container slide_content">
                                    <div class="row">
                                        <div class="tab-content1" id="v-pills-tabContent1">
                                            <div class="tab-pane" id="v-pills-link1" role="tabpanel" aria-labelledby="v-pills-link1-tab">
                                                <div class="container" >
                                                    <div class="row ">
                                                        <div class='col-sm-12' style="margin-top: 20px;margin-bottom: 30px; border:1px solid #ddd;">


                                                        <div class="col-sm-12" style="margin-top: 20px;margin-bottom: 30px; border:1px solid #ddd;">
                                                            <div class="row p-3">
                                                                <div class="col-sm-3" style="text-align: center;float: left;display: inline-block;">
                                                                <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $about_me[0]['team_image'];?>" alt="">
                                                                </div>
                                                                <div class="col-sm-9" style="text-align: center;float: left;display: inline-block;margin-top: 28px;">
                                                                        <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77;" ><strong>Name:</strong> <?php echo $about_me[0]['fname'];?></p>
                                                                        <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77;"><strong>Enrolment No.: </strong><?php echo $about_me[0]['enrollno'];?></p>
                                                                        <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77"><strong>Email: </strong><?php echo $about_me[0]['email'];?></p>
                                                                        <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77;"><strong>Admission year: </strong><?php echo $about_me[0]['admssnyear'];?></p>
                                                                        <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77;"><strong>Research Interests: </strong><?php echo $about_me[0]['research_interest'];?></p>
                                                                                                        
                                                                    <!-- <div class="social_sec">
                                                                        <a href="mailto:vivekgupta@iitmandi.ac.in"><i class="fa-regular fa-envelope"></i> vivekgupta@iitmandi.ac.in</a><br>
                                                                        <a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i> </a>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>




                                                            <div class="p-3 row">
                                                            <div class="col-sm-3" style="text-align: center;float: left;display: inline-block;">
                                                                <img class="bio_img" src="" alt=""/>
                                                            </div>
                                                            <div class="col-sm-9" style="text-align: center;float: left;display: inline-block;margin-top: 28px;">
                                                                <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77;" ><strong>Name:</strong> <?php echo $about_me[0]['fname'];?></p>
                                                                <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77;"><strong>Enrolment No.: </strong><?php echo $about_me[0]['enrollno'];?></p>
                                                                <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77"><strong>Email: </strong><?php echo $about_me[0]['email'];?></p>
                                                                <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77;"><strong>Admission year: </strong><?php echo $about_me[0]['admssnyear'];?></p>
                                                                <p style="text-transform: capitalize; text-align: center;font-size: 25px; color:#5c5c77;"><strong>Research Interests: </strong><?php echo $about_me[0]['research_interest'];?></p>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <div class='bio_text1' style="margin-bottom:40px;"><?php echo $about_me[0]['aboutme'];?></div>
                                                        </div>
                                                        <div class="col-12" style="text-align:center">
                                <!-- Tab navs -->
                                <button type="button"  id="v-pills-link1-tab" class="btn btn-primary">About me</button>
                                <button type="button"  id="v-pills-link2-tab" class="btn btn-primary">Education</button>
                                <button type="button"  id="v-pills-link3-tab" class="btn btn-primary">Experience</button>
                                <button type="button"  id="v-pills-link4-tab" class="btn btn-primary">Publications</button>
                                <button type="button"  id="v-pills-link5-tab" class="btn btn-primary">Awards and Honours</button>
                                <button type="button"  id="v-pills-link6-tab" class="btn btn-primary">Photo Gallery</button>
                                
                                <!-- Tab navs -->
                            </div>
                                                    </div>
                                                    <div class="col-sm-12" style="display: inline-block;">
                                                    <?php 
                                                        if ($about_me[0]['supervisor'] != '') { ?>
                                                        <div class="col-sm-4" style="display: inline-block;float: left;">
                                                            <h3 style="text-align: center; border-bottom: none;">Supervisor</h3>
                                                        <?php $supervisor = $this->db->query("SELECT * FROM `iitmandi_team` WHERE `id` =".$about_me[0]['supervisor']);
                                                        if(!empty($supervisor->result_array())) {
                                                        foreach($supervisor->result_array() as $row1) { ?>
                                                            <div style="text-align: center;">
                                                                <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $row1['team_image'];?>" alt=""/>
                                                                <a href="<?php echo base_url();?>pages/faculty_details/<?php echo base64_encode($about_me[0]['supervisor'])?>"><p class='bio_text'><?php echo $row1['fname'];?></p></a>
                                                            </div>
                                                        <?php } } ?>
                                                        </div>
                                                        <?php } ?>
                                                        <?php 
                                                        if ($about_me[0]['cosupervisors'] != '') { ?>
                                                        <div class="col-sm-4" style="display: inline-block;float: left;">
                                                            <h3 style="text-align: center; border-bottom: none;">Co-Supervisor</h3>
                                                        <?php $cosupervisor = $this->db->query("SELECT * FROM `iitmandi_team` WHERE `id` IN (".$about_me[0]['cosupervisors'].")");
                                                        if(!empty($cosupervisor->result_array())) {
                                                        foreach($cosupervisor->result_array() as $row1) { ?>
                                                            <div style="text-align: center;display: inline-block;float: left;">
                                                                <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $row1['team_image'];?>" alt=""/>
                                                                <a href="<?php echo base_url();?>pages/faculty_details/<?php echo base64_encode($row1['id'])?>"><p class='bio_text'><?php echo $row1['fname'];?></p></a>
                                                            </div>
                                                        <?php } } ?>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link2" role="tabpanel" aria-labelledby="v-pills-link2-tab">
                                            <?php if(!empty($education)) {
                                                $i=1; ?>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Education</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No.</th>
                                                                        <th>Degree</th>
                                                                        <th>University</th>
                                                                        <th>Year</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach($education as $row1) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row1['degree']?></td>
                                                                        <td><?php echo $row1['university']?></td>
                                                                        <td><?php echo $row1['year']?></td>
                                                                    </tr>
                                                                    <?php $i++; } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link3" role="tabpanel" aria-labelledby="v-pills-link3-tab">
                                            <?php if(!empty($experience)) {
                                                $i=1; ?>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Professional Experience</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No.</th>
                                                                        <th>Position(Company name)</th>
                                                                        <th>Year</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php foreach($experience as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i;?></td>
                                                                        <td><?php echo $row['position'];?></td>
                                                                        <td><?php echo $row['year'];?></td>
                                                                    </tr>
                                                                    <?php $i++; } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link4" role="tabpanel" aria-labelledby="v-pills-link4-tab">
                                            <?php if(!empty($publications)) { ?>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Publications</h2>
                                                        </div>
                                                        <div class='col-sm-12' style="margin-top: 50px;">
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sl No.</th>
                                                                        <th>Pubtication Details</th>
                                                                        <th>View</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($publications)) { 
                                                                    $i=1; ?>
                                                                    <?php foreach($publications as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $i ?></td>
                                                                        <td style="text-align: left;"><?php echo $row['author_name'].", ".$row['paper_title'].", ".$row['journal_name'].", ".$row['conference_name'].", ".$row['book_name'].", ".$row['publish_date'].", ".$row['patient_number'].", ".$row['publisher'].", ".$row['location'].", ".$row['external_Link'].", ".$row['editors'].", ".$row['page_number']?></td>
                                                                        <?php if ($this->session->userdata('user_id') != '') { ?>
                                                                        <td>
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                        <?php } else { ?>
                                                                            <td><a href="<?php echo base_url()?>pages/publication_details/<?php echo $row['id']?>" target="_blank" class="btn btn-primary">View More</a></td>
                                                                        <?php } ?>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link5" role="tabpanel" aria-labelledby="v-pills-link5-tab">
                                                <?php if(!empty($awards)) {?>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Awards and Honours</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Demo</th>
                                                                        <th>Demo</th>
                                                                        <th>Demo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <!-- <div class="tab-pane" id="v-pills-link6" role="tabpanel" aria-labelledby="v-pills-link6-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Photo Gallery</h2>
                                                        </div>
                                                        <div class="content">
                                                            <div class='col-sm-12'>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                                <div class="col-sm-3 cstm_gllery">
                                                                    <a href=""><img src="<?php echo base_url()?>uploads/gallery/demo_pic.png"/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab content -->
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
</main><!-- End #main -->
<?php echo $footer?>