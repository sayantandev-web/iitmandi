<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
   
    .filter_data{text-align:center;margin: 0 0 35px 0;}
    .fetch_data {background-color: #ffbf00; color: #fff;}
    .box_sec{background: #efefef;  padding:20px 15px 45px; border-radius: 20px; text-align: center; position: relative; margin-bottom:15px;}
    .box_sec img{width:220px; height:220px; transition:all ease-in-out .5s; position:relative; border-radius: 50%;}
    .box_dwn a{display:inline-block; color:#000;}
    .box_dwn a h6{margin:0px; text-transform:uppercase;}
    .box_dwn{width:100%; height:60px; overflow:hidden; padding-top:8px;}
    .box_dwn h6{margin:0px; line-height:20px;}
    .box_dwn p{margin:0px; font-size:16px; line-height:20px; -webkit-transform: translate3d(0,100%,0); 	transform: translate3d(0,100%,0); padding-left:15px; text-align:left; color:#222;}
    .box_sec:hover img{transition: all ease-in-out .5s; transform: scale(.5)translateY(-154px);}
    .box_sec:hover .box_dwn{transform: translateY(-131px); position: absolute; z-index: 1; left: 0px; right: 0px; margin: 0 auto; overflow:visible;}
    .box_sec:hover{padding:32px 15px 93px;}
    .choose_sec .btn{background:#ffdf80; color:#fff; border-radius:5px; width:100%; padding:8px 0; color:#022851;}
    .choose_sec .btn:hover{background:#022851; color:#fff;}
    .choose_sec select{height:40px; font-size:16px; padding:0 10px;}
    .box_dwn small{color: #db0000; text-transform: uppercase; font-size: 15px;}
   .box_dwn_inn{width: 100%; display: inline-block; margin-top: -13px;}

    @media screen and (max-width: 600px) {
      .box_sec{margin-top:10px;}  

    }

</style>
<main id="main">
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 portfolio-info">
                    <h3 style="text-align:center"><?php echo $title?></h3>
                    <div class="row filter_data choose_sec">
                    <div class="col-sm-1"></div>
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
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-secondary" onClick="window.location.reload();">Reset</button>
                            <input type="hidden" id="project_type" value = '1'>
                        </div>
                    </div>
                    <?php 
                    $faculty1 = $this->db->query("SELECT iitmandi_team.id,iitmandi_team.fname,iitmandi_team.mname,iitmandi_team.lname,iitmandi_designation.designation,iitmandi_team.specialization,iitmandi_team.team_image from iitmandi_team JOIN iitmandi_designation ON iitmandi_team.designation = iitmandi_designation.id WHERE iitmandi_team.position = 1 and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1 and iitmandi_designation.status = 1 and iitmandi_designation.is_delete = 1");
                    ?>
                    <div class="row cls_filter_data">
                        <?php if(!empty($faculty1->result_array())) {
                            $i=1; ?>
                        <?php foreach($faculty1->result_array() as $row) { ?>
                        <div class="col-sm-6 col-xl-3 col-lg-3 col-md-6 col-12">
                        <a href= '<?php echo base_url();?>pages/faculty_details/<?php echo base64_encode($row['id'])?>'>
                         <div class="box_sec">
                          <img src="<?php echo base_url();?>uploads/our_team/<?php echo $row['team_image']?>" alt="" >
                            <div class="box_dwn">
                            <h6><?php echo $row['fname']." ".$row['mname']." ".$row['lname'] ?></h6><small><?php echo $row['designation']?></small>
                               <div class="box_dwn_inn">
                                    <p><?php if ($row['specialization'] == '1'){echo 'Environmental Engineering'; } else if($row['specialization'] == '2'){echo 'Geotechnical Engineering'; } else if($row['specialization'] == '3'){echo 'Structural Engineering'; } else if($row['specialization'] == '4'){echo 'Water Resources Engineering'; } else if($row['specialization'] == '5'){echo 'Transportation Engineering'; } else if($row['specialization'] == '6'){echo 'Remote Sensing and GIS'; } else {echo '';} ?></p>
                                    <p>specialization</p>
                                    <p>Research Interest</p>
                                    <p>Email</p>
                                    <p>Phone No.</p>
                               </div>

                            </div>
                          </div> 
                         </a>   
                        </div>
                        <?php $i++; } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php echo $footer?>