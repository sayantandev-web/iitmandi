<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    .col-sm-1 {display: inline-block;float: left; margin-left:5px;}
    .col-sm-2 {display: inline-block;float: left; margin-left:5px;}
    .col-sm-3 {display: inline-block;float: left; margin-left:5px;}
    .col-sm-4 {display: inline-block;float: left; margin-left:5px;}
    .col-sm-5 {display: inline-block;float: left; margin-left:5px;}
    .col-sm-8 {display: inline-block;float: left;}
    .col-sm-12 {display: inline-block;}
    .fade:not(.show) { opacity: 1 !important; background: #00000063;}
    .modal-lg { margin-top : 10%}
    .close {padding: 0;background-color: transparent;border: 0;float: right;font-size: 1.5rem;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;
opacity: .5;}
    .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {max-width: 1520px !important;}

</style>
<main id="main">
    <section id="portfolio-details" class="portfolio-details" style="margin-top:30px;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <h3 style="text-align:center"><?php echo $title?></h3>
                        <div class="col-sm-12 filter_data">
                            <!-- <div class="col-sm-4">
                                <select class="form-control" id="funding_agencyflt" name="funding_agency">
                                <option value="">Funding Agency</option>
                                    <?php 
                                    $funding_agency = $this->db->query("SELECT funding_agency, GROUP_CONCAT(id) as id FROM iitmandi_project WHERE `is_delete` = 1 GROUP BY funding_agency ORDER BY COUNT(*) DESC");
                                    if(!empty($funding_agency->result_array())) { 
                                    foreach($funding_agency->result_array() as $row) { 
                                        $id = explode(",",$row['id']);
                                    ?>  
                                    <option value="<?php echo $row['funding_agency']?>"><?php echo $row['funding_agency']?></option>
                                    <?php  } } else { ?>
                                    <option value="">No Data</option>
                                    <?php } ?>
                                </select>
                            </div> -->
                            <div class="col-sm-4">
                                <select class="form-control" id="starting_yearflt" name="starting_year">
                                    <option value="">Year</option>
                                    <?php 
                                    $starting_year = $this->db->query("SELECT starting_year, GROUP_CONCAT(id) as id FROM iitmandi_project WHERE `is_delete` = 1 GROUP BY starting_year ORDER BY COUNT(*) DESC");
                                    if(!empty($starting_year->result_array())) { 
                                    foreach($starting_year->result_array() as $row) { ?>
                                    <option value="<?php echo $row['starting_year']?>"><?php echo $row['starting_year']?></option>
                                    <?php  } } else { ?>
                                    <option value="">No Data</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <select class="form-control" id="faculty_memberflt" name="faculty_member">
                                    <option value="">Author</option>
                                    <?php if(!empty($team)) { 
                                    foreach($team as $row) { ?>
                                    <option value="<?php echo $row['id']?>"><?php echo $row['fname']?></option>
                                    <?php  } } else { ?>
                                    <option value="">No Data</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- <div class="col-sm-2">
                                <select class="form-control" id="statusflt" name="statusflt">
                                    <option value="">Status</option>
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Transferred">Transferred</option>
                                    <option value="Closed">Closed</option>
                                </select>
                            </div> -->
                            <div class="col-sm-1">
                                <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Reset</button>
                                <input type="hidden" id="project_type" value = '2'>
                            </div>
                        </div>

                        <?php 
                        if($this->uri->segment(2) == 'journal') {
                            if(!empty($journal)) { ?>
                            <div class='col-sm-12' style="margin-top: 50px;">
                                <h3 style="text-transform: capitalize">Journal Article</h3>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Publication Details</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $j=1;
                                        foreach($journal as $row) { ?>
                                        <tr>
                                            <td><?php echo $j ?></td>
                                            <?php 
                                            $author = $this->db->query("SELECT * FROM iitmandi_team WHERE iitmandi_team.id IN (".$row['author_name'].")");
                                                //echo "<pre>"; print_r($author->result_array());
                                                $value = $author->result_array();
                                                $count = count($author->result_array());
                                                for($i = 0; $i < $count; $i++) {
                                                    if ($value[$i]['mname'] == '') {
                                                        $commonValues[] = $value[$i]['lname'].", ".substr($value[$i]['fname'], 0, 1).".";
                                                    } else {
                                                        $commonValues[] = $value[$i]['lname'].", ".substr($value[$i]['mname'], 0, 1).", ".substr($value[$i]['fname'], 0, 1).".";
                                                    }
                                                }
                                                $lastItem = array_pop($commonValues);
                                                $text = implode(', ', $commonValues); // a, b 
                                                if ($text == ''){
                                                    $text .= $lastItem; 
                                                } else {
                                                    $text .= ', & '.$lastItem; // a, b and c
                                                }    
                                            ?> 
                                            <td style="text-align: left;"><?php echo $text." (".date('Y', strtotime($row['publish_date']))."). ".$row['paper_title'].". ".$row['journal_name'].", ".$row['volume_number']."(".$row['issue_number']."), ".$row['page_number'].". ".$row['external_Link']; ?></td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View More</button></td>
                                        </tr>
                                        <?php $j++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } 
                        } ?>

                        <?php 
                        if ($this->uri->segment(2) == 'conference') {
                            if(!empty($conference)) { ?>
                            <div class='col-sm-12' style="margin-top: 50px;">
                                <h3 style="text-transform: capitalize">Conference Paper</h3>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Publication Details</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $j=1;
                                        foreach($conference as $row) { ?>
                                        <tr>
                                            <td><?php echo $j ?></td>
                                            <?php $author1 = $this->db->query("SELECT * FROM iitmandi_team WHERE iitmandi_team.id IN (".$row['author_name'].")");
                                                $value1 = $author1->result_array();
                                                $count1 = count($author1->result_array());
                                                for($i = 0; $i < $count1; $i++) {
                                                    if ($value1[$i]['mname'] == '') {
                                                        $commonValues1[] = $value1[$i]['lname'].", ".substr($value1[$i]['fname'], 0, 1).".";
                                                    } else {
                                                        $commonValues1[] = $value1[$i]['lname'].", ".substr($value1[$i]['mname'], 0, 1).", ".substr($value1[$i]['fname'], 0, 1).".";
                                                    }
                                                }
                                                $lastItem1 = array_pop($commonValues1);
                                                $text1 = implode(', ', $commonValues1); // a, b 
                                                if ($text1 == ''){
                                                    $text1 .= $lastItem1; 
                                                } else {
                                                    $text1 .= ', & '.$lastItem1; // a, b and c
                                                }
                                            ?>
                                            <td style="text-align: left;"><?php echo $text1." (".date('Y, F', strtotime($row['publish_date']))."). ".$row['paper_title'].". ".$row['conference_name'].", ".$row['location']; ?></td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View More</button></td>
                                        </tr>
                                        <?php $j++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } 
                        } ?>

                        <?php 
                        if ($this->uri->segment(2) == 'book_chapter') {
                            if(!empty($bookc)) { ?>
                            <div class='col-sm-12' style="margin-top: 50px;">
                                <h3 style="text-transform: capitalize">Book Chapter</h3>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Publication Details</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $j=1;
                                        foreach($bookc as $row) { ?>
                                        <tr>
                                            <td><?php echo $j ?></td>
                                            <?php $author2 = $this->db->query("SELECT * FROM iitmandi_team WHERE iitmandi_team.id IN (".$row['author_name'].")");
                                                $value2 = $author2->result_array();
                                                $count2 = count($author2->result_array());
                                                for($i = 0; $i < $count2; $i++) {
                                                    if ($value2[$i]['mname'] == '') {
                                                        $commonValues2[] = $value2[$i]['lname'].", ".substr($value2[$i]['fname'], 0, 1).".";
                                                    } else {
                                                        $commonValues2[] = $value2[$i]['lname'].", ".substr($value2[$i]['mname'], 0, 1).", ".substr($value2[$i]['fname'], 0, 1).".";
                                                    }
                                                }
                                                $lastItem2 = array_pop($commonValues2);
                                                $text2 = implode(', ', $commonValues2); // a, b 
                                                if ($text2 == ''){
                                                    $text2 .= $lastItem2; 
                                                } else {
                                                    $text2 .= ', & '.$lastItem2; // a, b and c
                                                }
                                            ?>
                                            <td style="text-align: left;"><?php echo $text2." (".date('Y', strtotime($row['publish_date']))."). ".$row['paper_title'].". ".$row['editors'].", ".$row['book_name']." (".$row['page_number'].")"; ?></td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View More</button></td>
                                        </tr>
                                        <?php $j++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } 
                        } ?>

                        <?php 
                        if ($this->uri->segment(2) == 'book') {
                            if(!empty($book)) { ?>
                            <div class='col-sm-12' style="margin-top: 50px;">
                                <h3 style="text-transform: capitalize">Book</h3>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Publication Details</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $j=1;
                                        foreach($book as $row) { ?>
                                        <tr>
                                            <td><?php echo $j ?></td>
                                            <?php $author3 = $this->db->query("SELECT * FROM iitmandi_team WHERE iitmandi_team.id IN (".$row['author_name'].")");
                                                $value3 = $author3->result_array();
                                                $count3 = count($author3->result_array());
                                                for($i = 0; $i < $count3; $i++) {
                                                    if ($value3[$i]['mname'] == '') {
                                                        $commonValues3[] = $value3[$i]['lname'].", ".substr($value3[$i]['fname'], 0, 1).".";
                                                    } else {
                                                        $commonValues3[] = $value3[$i]['lname'].", ".substr($value3[$i]['mname'], 0, 1).", ".substr($value3[$i]['fname'], 0, 1).".";
                                                    }
                                                }
                                                $lastItem3 = array_pop($commonValues3);
                                                $text3 = implode(', ', $commonValues3); // a, b 
                                                if ($text3 == ''){
                                                    $text3 .= $lastItem3; 
                                                } else {
                                                    $text3 .= ', & '.$lastItem3; // a, b and c
                                                }
                                            ?>
                                            <td style="text-align: left;"><?php echo $text3." (".date('Y', strtotime($row['publish_date']))."). ".$row['paper_title'].". ".$row['publisher']; ?></td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View More</button></td>
                                        </tr>
                                        <?php $j++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } 
                        } ?>

                        <?php 
                        if ($this->uri->segment(2) == 'patent') {
                            if(!empty($patent)) { ?>
                            <div class='col-sm-12' style="margin-top: 50px;">
                                <h3 style="text-transform: capitalize">Patent</h3>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Publication Details</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $j=1;
                                        foreach($patent as $row) { ?>
                                        <tr>
                                            <td><?php echo $j ?></td>
                                            <?php $author4 = $this->db->query("SELECT * FROM iitmandi_team WHERE iitmandi_team.id IN (".$row['author_name'].")");
                                                $value4 = $author4->result_array();
                                                $count4 = count($author4->result_array());
                                                for($i = 0; $i < $count4; $i++) {
                                                    if ($value4[$i]['mname'] == '') {
                                                        $commonValues4[] = $value4[$i]['lname'].", ".substr($value4[$i]['fname'], 0, 1).".";
                                                    } else {
                                                        $commonValues4[] = $value4[$i]['lname'].", ".substr($value4[$i]['mname'], 0, 1).", ".substr($value4[$i]['fname'], 0, 1).".";
                                                    }
                                                }
                                                $lastItem4 = array_pop($commonValues4);
                                                $text4 = implode(', ', $commonValues4); // a, b 
                                                if ($text4 == ''){
                                                    $text4 .= $lastItem4; 
                                                } else {
                                                    $text4 .= ', & '.$lastItem4; // a, b and c
                                                }    
                                            ?>
                                            <td style="text-align: left;"><?php echo $text4." (".date('Y, F d', strtotime($row['publish_date']))."). ".$row['paper_title'].". ".$row['patient_number']; ?></td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">View More</button></td>
                                        </tr>
                                        <?php $j++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } 
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</main><!-- End #main -->
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
                                    <input type="text" class="form-control required" id="fname" name="fname" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Enrolment No.</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="enrollno" name="enrollno" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Email</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="email" class="form-control required" id="email" name="email" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Admission year</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="admissionyear" name="admissionyear" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Research Interests</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="research_interest" name="research_interest" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-12'>
                        <textarea id="aboutme" name="aboutme">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
                    </div>
                </div>
                <div class="col-sm-12" style="text-align: center;margin-top: 20px;">
                    <div id="err"></div>
                    <!-- <button type="button" class="btn btn-primary about_data"><a href="javascript:void(0);">Edit Record</a></button> -->
                    <!-- <button type="button" class="btn btn-primary about_save" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button> -->
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
                                    <input type="text" class="form-control required" id="degree" name="degree" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">University</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="university" name="university" value="">
                                </div>
                            </div>
                            <div class="form-group col-sm-4 cstm_details">
                                <label for="Event Name" class="control-label">Year</label>
                                <div class="col-lg-9 col-md-9 col-sm-8">
                                    <input type="text" class="form-control required" id="year" name="year" value="">
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
                                        <input type="text" class="form-control required" id="position" name="position" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Year</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="year" name="year" value="">
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
                                    <div class="form-group col-sm-4 cstm_details chapter_title">
                                        <label for="Event Name" class="control-label">Title of Chapter</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="chapter_title" name="chapter_title" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-4 cstm_details patent_title">
                                        <label for="Event Name" class="control-label">Title of Patent</label>
                                        <div class="col-lg-9 col-md-9 col-sm-8">
                                            <input type="text" class="form-control required" id="patent_title" name="patent_title" value="">
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
                                    <label for="Event Name" class="control-label">Position</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="position" name="position" value="">
                                    </div>
                                </div>
                                <div class="form-group col-sm-4 cstm_details">
                                    <label for="Event Name" class="control-label">Year</label>
                                    <div class="col-lg-9 col-md-9 col-sm-8">
                                        <input type="text" class="form-control required" id="year" name="year" value="">
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
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $footer?>