<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    .col-sm-1 {display: inline-block;}
    .col-sm-4{display: inline-block;}
    .col-sm-2 {width:20.667%;display: inline-block;}
    .filter_data{text-align:center;margin: 0 0 35px 0;}
    .fetch_data {background-color: #ffbf00; color: #fff;}
</style>
<main id="main">
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 portfolio-info">
                    <h3 style="text-align:center"><?php echo $title?></h3>
                    <div class="col-sm-12 filter_data">
                        <div class="col-sm-4">
                            <select class="form-control" id="designation" name="designation">
                                <option value="">Choose Designation</option>
                            <?php 
                            $designate = $this->db->query("SELECT DISTINCT iitmandi_designation.id, iitmandi_designation.designation from iitmandi_team JOIN iitmandi_designation ON iitmandi_team.designation = iitmandi_designation.id WHERE iitmandi_team.position = 1 and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1 and iitmandi_designation.status = 1 and iitmandi_designation.is_delete = 1");
                            if(!empty($designate->result_array())) { 
                                foreach($designate->result_array() as $row) { ?>
                                <option value="<?php echo $row['id']?>"><?php echo $row['designation']?></option>
                            <?php  } } else { ?>
                                <option value="">No Data</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" id="specialization" name="specialization">
                                <option value="">Choose an Option</option>
                                <option value="1" <?php if(@$banner['specialization']==1){ echo "selected"; } ?>>Environmental Engineering</option>
                                <option value="2" <?php if(@$banner['specialization']==2){ echo "selected"; } ?>>Geotechnical Engineering</option>
                                <option value="3" <?php if(@$banner['specialization']==3){ echo "selected"; } ?>>Structural Engineering</option>
                                <option value="4" <?php if(@$banner['specialization']==4){ echo "selected"; } ?>>Water Resources Engineering</option>
                                <option value="5" <?php if(@$banner['specialization']==5){ echo "selected"; } ?>>Transportation Engineering</option>
                                <option value="6" <?php if(@$banner['specialization']==6){ echo "selected"; } ?>>Remote Sensing and GIS</option>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Reset</button>
                            <input type="hidden" id="project_type" value = '1'>
                        </div>
                    </div>
                    <?php 
                    $faculty1 = $this->db->query("SELECT iitmandi_team.id,iitmandi_team.fname,iitmandi_team.mname,iitmandi_team.lname,iitmandi_designation.designation,iitmandi_team.specialization,iitmandi_team.team_image from iitmandi_team JOIN iitmandi_designation ON iitmandi_team.designation = iitmandi_designation.id WHERE iitmandi_team.position = 1 and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1 and iitmandi_designation.status = 1 and iitmandi_designation.is_delete = 1");
                    ?>
                    <div class="col-sm-12 cls_filter_data">
                        <?php if(!empty($faculty1->result_array())) {
                            $i=1; ?>
                        <?php foreach($faculty1->result_array() as $row) { ?>
                        <div class="col-sm-2" style="border: 1px solid;/*box-shadow: 1px 1px 0px #999,2px 2px 0px #999,3px 3px 0px #999,4px 4px 0px #999,5px 5px 0px #999,6px 6px 0px #999;*/ margin-right: 40px; float: left; padding:0px; border-radius: 20px 20px 0 0px">
                            <img src="<?php echo base_url();?>uploads/our_team/<?php echo $row['team_image']?>" alt="" style="width: 261px;height: 250px; border-radius: 20px 20px 0 0px">
                            <a href= '<?php echo base_url();?>pages/faculty_details/<?php echo base64_encode($row['id'])?>'><p style="text-align: center; background: #fff;"><?php echo $row['fname']." ".$row['mname']." ".$row['lname'] ?><br><small><?php echo $row['designation']?></small></p></a>
                            <p style="text-align: center; background: #fff;"><?php if ($row['specialization'] == '1'){echo 'Environmental Engineering'; } else if($row['specialization'] == '2'){echo 'Geotechnical Engineering'; } else if($row['specialization'] == '3'){echo 'Structural Engineering'; } else if($row['specialization'] == '4'){echo 'Water Resources Engineering'; } else if($row['specialization'] == '5'){echo 'Transportation Engineering'; } else if($row['specialization'] == '6'){echo 'Remote Sensing and GIS'; } else {echo '';} ?></p>
                        </div>
                        <?php $i++; } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php echo $footer?>