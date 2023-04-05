<?php 
//$uid = $this->session->userdata('user_id');
//$about_me = get_users_name($uid);
if ($this->session->userdata('user_id') != "") {
    $uid = $this->session->userdata('user_id');
} else {
    $uid = $about_me[0]['id'];
}
echo $header;
?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin: 0px 0px 0px 40px; text-align: left;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    .cstm_gllery {float: left; display: inline;}
    .cstm_gllery img {padding: 12px;}
    .modal-content {padding: 30px}
    .modal-lg, .modal-xl {--bs-modal-width: 90% !important;}
    .cstm_details {float: left; display: inline-block;}
    .degree_sec h2 { margin: 0; padding: 0 0 25px; font-size: 25px;}
    

</style>
<main id="main">
    <section id="portfolio-details" class="portfolio-details">
        <!-- <div class="container"> -->
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <h3 style="text-align: center; text-transform: capitalize">Welcome <?php echo $about_me[0]['fname'];?></h3>
                        <div class="row">
                            <div class="col-2">
                                <!-- Tab navs -->
                                <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
                                    <a class="nav-link active" id="v-pills-link1-tab" data-mdb-toggle="pill" role="tab">About me</a>
                                    <a class="nav-link active" id="v-pills-link2-tab" data-mdb-toggle="pill" role="tab">Education</a>
                                    <a class="nav-link active" id="v-pills-link3-tab" data-mdb-toggle="pill" role="tab">Experience</a>
                                    <a class="nav-link active" id="v-pills-link4-tab" data-mdb-toggle="pill" role="tab">Publications</a>
                                    <a class="nav-link active" id="v-pills-link5-tab" data-mdb-toggle="pill" role="tab">Awards and Honours</a>
                                    <a class="nav-link active" id="v-pills-link6-tab" data-mdb-toggle="pill" role="tab">Photo Gallery</a>
                                    <a href="<?php echo base_url()?>student/logout" class="nav-link active" id="v-pills-link6-tab" data-mdb-toggle="pill" role="tab">Logout</a>
                                </div>
                                <!-- Tab navs -->
                            </div>
                            <div class="col-10">
                            <!-- Tab content -->
                                <div class="container slide_content">
                                    <div class="row" style="overflow: scroll; height: 480px;">
                                        <div class="tab-content1" id="v-pills-tabContent1">
                                            <div class="tab-pane" id="v-pills-link1" role="tabpanel" aria-labelledby="v-pills-link1-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-12">

                                                        
                                                            <div class="col-sm-6" style="text-align: right;float: left;display: inline-block;">
                                                                <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/<?php echo $about_me[0]['team_image'];?>" alt=""/>
                                                            </div>
                                                            <div class="col-sm-6" style="float: left;display: inline-block;">
                                                                <p class='bio_text'>Name: <?php echo $about_me[0]['fname'];?></p>
                                                                <p class='bio_text'>Enrolment No.: <?php echo $about_me[0]['enrollno'];?></p>
                                                                <p class='bio_text'>Email: <?php echo $about_me[0]['email'];?></p>
                                                                <p class='bio_text'>Admission year: <?php echo $about_me[0]['admssnyear'];?></p>
                                                                <p class='bio_text'>Research Interests: <?php echo $about_me[0]['research_interest'];?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="bio_text1"><?php echo $about_me[0]['aboutme'];?></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary about_btn" data-toggle="modal" data-target=".bd-example-modal-lg1">Edit Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link2" role="tabpanel" aria-labelledby="v-pills-link2-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-12 degree_sec">
                                                            <div class="row">
                                                            <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Education</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Degree</th>
                                                                        <th>University</th>
                                                                        <th>Year</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($education)) {
                                                                    $i=1; ?>
                                                                <?php foreach($education as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $row['degree'];?></td>
                                                                        <td><?php echo $row['university'];?></td>
                                                                        <td><?php echo $row['year'];?></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary edu_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2" onclick="EditEduID(<?php echo $row['id']?>)">Edit</button>
                                                                            <input type="hidden" id="data_id" name="data_id" value="<?php echo $row['id'];?>">
                                                                            <button type="button" class="btn btn-danger edu_add_btn" onclick="DtlEduID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary edu_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg2">Add New Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link3" role="tabpanel" aria-labelledby="v-pills-link3-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Professional Experience</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Position(Company name)</th>
                                                                        <th>Year</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($experience)) {
                                                                    $i=1; ?>
                                                                    <?php foreach($experience as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $row['position'];?></td>
                                                                        <td><?php echo $row['year'];?></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary exp_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg3" onclick="EditExpID(<?php echo $row['id']?>)">Edit</button>
                                                                            <button type="button" class="btn btn-danger exp_add_btn" onclick="DtlExpID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary exp_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg3">Add New Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link4" role="tabpanel" aria-labelledby="v-pills-link4-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Publications</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <p>1. Journal article</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title of Paper</th>
                                                                        <th>Journal Name</th>
                                                                        <th>Publised date</th>
                                                                        <th>Publisher</th>
                                                                        <th>DOI (External Link)</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($journal)) {
                                                                    $i=1; ?>
                                                                    <?php foreach($journal as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['journal_name'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['publisher'];?></td>
                                                                        <td><?php echo $row['external_Link'];?></td>
                                                                        <td><?php echo $row['page_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary pub_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg4" onclick="EditjorID(<?php echo $row['id']?>)">Edit</button>
                                                                            <button type="button" class="btn btn-danger exp_add_btn" onclick="DtljorID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>2. Conference paper</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title of Paper</th>
                                                                        <th>Conference name</th>
                                                                        <th>Publised date</th>
                                                                        <th>Organizer/Publisher</th>
                                                                        <th>location</th>
                                                                        <th>External Link</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($conference)) {
                                                                    $i=1; ?>
                                                                    <?php foreach($conference as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['conference_name'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['publisher'];?></td>
                                                                        <td><?php echo $row['location'];?></td>
                                                                        <td><?php echo $row['external_Link'];?></td>
                                                                        <td><?php echo $row['page_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary pub_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg4" onclick="EditconID(<?php echo $row['id']?>)">Edit</button>
                                                                            <button type="button" class="btn btn-danger exp_add_btn" onclick="DtlconID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>3. Book chapter</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title</th>
                                                                        <th>Book name</th>
                                                                        <th>Publised date</th>
                                                                        <th>DOI (External Link)</th>
                                                                        <th>Editors</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($book_chapter)) {
                                                                    $i=1; ?>
                                                                    <?php foreach($book_chapter as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['book_name'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['external_Link'];?></td>
                                                                        <td><?php echo $row['editors'];?></td>
                                                                        <td><?php echo $row['page_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary pub_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg4" onclick="EditBcID(<?php echo $row['id']?>)">Edit</button>
                                                                            <button type="button" class="btn btn-danger exp_add_btn" onclick="DtlBcID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>4. Book</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title</th>
                                                                        <th>Publised date</th>
                                                                        <th>Publisher</th>
                                                                        <th>DOI (External Link)</th>
                                                                        <th>Page Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($book)) {
                                                                    $i=1; ?>
                                                                    <?php foreach($book as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['publisher'];?></td>
                                                                        <td><?php echo $row['external_Link'];?></td>
                                                                        <td><?php echo $row['page_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary pub_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg4" onclick="EditBkID(<?php echo $row['id']?>)">Edit</button>
                                                                            <button type="button" class="btn btn-danger exp_add_btn" onclick="DtlBkID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <p>5. Patent</p>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Image</th>
                                                                        <th>Authors Name</th>
                                                                        <th>Title</th>
                                                                        <th>Publised date</th>
                                                                        <th>Patent Number</th>
                                                                        <th>Highlights</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(!empty($patent)) {
                                                                    $i=1; ?>
                                                                    <?php foreach($patent as $row) { ?>
                                                                    <tr>
                                                                        <td><?php echo $row['attachment'];?></td>
                                                                        <td><?php echo $row['author_name'];?></td>
                                                                        <td><?php echo $row['paper_title'];?></td>
                                                                        <td><?php echo $row['publish_date'];?></td>
                                                                        <td><?php echo $row['patient_number'];?></td>
                                                                        <td><?php echo $row['highlight'];?></td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary pub_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg4" onclick="EditPtID(<?php echo $row['id']?>)">Edit</button>
                                                                            <button type="button" class="btn btn-danger exp_add_btn" onclick="DtlPtID(<?php echo $row['id']?>)" style="background: red; color: #fff;">Delete</button>
                                                                        </td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary pub_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg4">Add New Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link5" role="tabpanel" aria-labelledby="v-pills-link5-tab">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class='col-sm-12'>
                                                            <h2 style="text-align: center;">Awards and Honours</h2>
                                                        </div>
                                                        <div class='col-sm-12'>
                                                            <table id="example" class="table table-striped" style="width:100%">
                                                                <thead>
                                                                <?php if(!empty($award)) {
                                                                    $i=1; ?>
                                                                    <?php foreach($award as $row) { ?>
                                                                    <tr>
                                                                        <th>Demo</th>
                                                                        <th>Demo</th>
                                                                        <th>Demo</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>Demo</td>
                                                                        <td>
                                                                            <a href="#" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a href="##" class="btn waves-effect waves-light tooltips td_class" data-placement="top" data-toggle="tooltip" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                <?php $i++; } } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary awrd_add_btn" data-toggle="modal" data-target=".bd-example-modal-lg5">Add New Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="v-pills-link6" role="tabpanel" aria-labelledby="v-pills-link6-tab">
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
                                                    <div class="col-sm-12" style="text-align: right;">
                                                        <button type="button" class="btn btn-primary"><a href=''>Add New Album</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </section>
    <!-- End Portfolio Details Section -->
</main>
<!-- End #main -->
<div class="modal fade bd-example-modal-lg1 about_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
        <form id="form_aboutme" action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="margin-bottom: 40px;">
                        <div class="col-sm-2" style="text-align: right;float: left;display: inline-block;">
                            <img class="bio_img" src="<?php echo base_url();?>uploads/our_team/1667140703711760.jpg" alt=""/>
                        </div>
                        <div class="col-sm-10" style="float: left; display: inline-block;">
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Name</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="fname" name="fname" value="<?php echo $about_me[0]['fname'];?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Enrolment No.</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="enrollno" name="enrollno" value="<?php echo $about_me[0]['enrollno'];?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Email</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="email" class="form-control required" id="email" name="email" value="<?php echo $about_me[0]['email'];?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Admission year</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="admissionyear" name="admissionyear" value="<?php echo $about_me[0]['admssnyear'];?>">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Research Interests</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="research_interest" name="research_interest" value="<?php echo $about_me[0]['research_interest'];?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12'>
                        <textarea id="aboutme" name="aboutme"><?php echo $about_me[0]['aboutme'];?></textarea>
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
        <form id="form_edu" action="" method="post" enctype="multipart/form-data">
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
                                    <select class="form-control" id="status" name="status">
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
                    <input type="hidden" id="dataid" name="dataid">
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg3 exp_data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="background: #000000b0;">
    <div class="modal-dialog modal-lg" style="margin-top: 5%; width: 100%;">
        <div class="modal-content">
            <form id="form_exp" action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 40px;">
                            <div class="col-sm-12" style="float: left; display: inline-block;">
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
                                            <input type="file" class="form-control required" id="attachment" name="attachment">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details author_name">
                                        <label for="Event Name" class="control-label">Authors Name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="author_name" name="author_name">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details paper_title">
                                        <label for="Event Name" class="control-label">Title of Paper</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="paper_title" name="paper_title">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details journal_name">
                                        <label for="Event Name" class="control-label">Journal Name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="journal_name" name="journal_name">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details conference_name">
                                        <label for="Event Name" class="control-label">Conference name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="conference_name" name="conference_name">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details book_name">
                                        <label for="Event Name" class="control-label">Book name</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="book_name" name="book_name">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details publish_date">
                                        <label for="Event Name" class="control-label">Publised date</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="publish_date" name="publish_date">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details patient_number">
                                        <label for="Event Name" class="control-label">Patent Number</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="patient_number" name="patient_number">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details publisher">
                                        <label for="Event Name" class="control-label">Publisher</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="publisher" name="publisher">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details location">
                                        <label for="Event Name" class="control-label">location</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="location" name="location">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details external_Link">
                                        <label for="Event Name" class="control-label">DOI (External Link)</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="external_Link" name="external_Link">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details editors">
                                        <label for="Event Name" class="control-label">Editors</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="editors" name="editors">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details page_number">
                                        <label for="Event Name" class="control-label">Page Number</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="page_number" name="page_number">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details volume_number">
                                        <label for="Event Name" class="control-label">Volume Number</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="volume_number" name="volume_number" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details issue_number">
                                        <label for="Event Name" class="control-label">Issue Number</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="issue_number" name="issue_number" value="">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group col-sm-12 cstm_details page_number">
                                        <label for="Event Name" class="control-label">Short Summary</label>
                                        <div class="col-sm-12">
                                            <textarea id="short_summery" name="short_summery"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 cstm_details page_number">
                                        <label for="Event Name" class="control-label">Key points</label>
                                        <div class="col-sm-12">
                                            <textarea id="key_points" name="key_points"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="form-group col-sm-4 cstm_details">
                                        <label for="Event Name" class="control-label">Highlights</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <select class="form-control" id="highlight" name="highlight">
                                                <option value="On My Page">On My Page</option>
                                                <option value="On Supervisor Page">On Supervisor Page</option>
                                                <option value="On School Page">On School Page</option>
                                                <option value="All of Above">All of Above</option>
                                            </select>
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
                        <input type="hidden" id="pubid" name="pubid">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php echo $footer?>