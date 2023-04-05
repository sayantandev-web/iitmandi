<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    .col-sm-4{display: inline-block;}
    .col-sm-2{display: inline-block;}
    .filter_data{text-align:center;margin: 0 0 35px 0;}
    .fetch_data {background-color: #ffbf00; color: #fff;}
    .box_sec{background: #efefef;  padding:20px 15px; border-radius: 20px; text-align: center; position: relative; margin-bottom:15px;}
    .box_sec img{width:220px; height:220px; transition:all ease-in-out .5s; position:relative; border-radius: 50%;}
    .box_dwn a{display:inline-block; color:#000;}
    .box_dwn a h6{margin:0px; text-transform:uppercase;}
    .box_dwn{width:100%;  padding-top:8px;}
    .box_dwn h6{margin:0px; line-height:20px;}
    /* .box_dwn p{margin:0px; font-size:16px; line-height:20px; -webkit-transform: translate3d(0,100%,0); 	transform: translate3d(0,100%,0); padding-left:15px; text-align:left; color:#222; text-align: center;}*/
    .box_dwn p{margin:0px; font-size:14px; line-height:20px; padding-left:0px; color:#7a7a7a; text-align: center; font-weight:700; } 
    .box_dwn_inn p{margin:0px; font-size:14px; line-height:20px; padding-left:0px; color:#7a7a7a; text-align: center; font-weight:700; } 
    .box_sec:hover img{transition: all ease-in-out .5s; transform: scale(.7)translateY(-46px);}
    /* .box_sec:hover .box_dwn{transform: translateY(-131px); position: absolute; z-index: 1; left: 0px; right: 0px; margin: 0 auto; overflow:visible;} */
    .box_sec:hover .box_dwn{/*transform: translateY(-131px); */position: relative; z-index: 1; left: 0px; right: 0px; margin: 0 auto; overflow:visible;}
    /* .box_sec:hover{padding:32px 15px 130px;} */
    .choose_sec .btn{background:#ffdf80; color:#fff; border-radius:5px; width:100%; padding:8px 0; color:#022851;}
    .choose_sec .btn:hover{background:#022851; color:#fff;}
    .choose_sec select{height:40px; font-size:16px; padding:0 10px;}
    .box_dwn small{color: #db0000; text-transform: uppercase; font-size: 15px;}
   .box_dwn_inn{width: 100%; display: inline-block; margin-top: 15px;}
    .social_sec{width:100%;}
    .social_sec .fa-envelope{font-size: 20px; color: #7a7a7a;}
    .social_sec .fa-phone{font-size: 20px; color: #7a7a7a;}
   
    
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
                    <?php
                    $chk_scholars = $this->db->query("SELECT DISTINCT iitmandi_designation.id,iitmandi_designation.designation from iitmandi_team JOIN iitmandi_designation ON iitmandi_team.designation = iitmandi_designation.id WHERE iitmandi_team.position = 3 and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1 and iitmandi_designation.status = 1 and iitmandi_designation.is_delete = 1");
                    if(!empty($chk_scholars->result_array())) {
                    foreach($chk_scholars->result_array() as $row) { ?>
                    <div class="row">
                    
                   
                        <h3 style="text-align:center"><?php echo $row['designation']?></h3>
                        <?php 
                        //echo "SELECT * from iitmandi_team WHERE iitmandi_team.position = 2 and iitmandi_team.designation = ".$row['id']." and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1";
                        $scholars = $this->db->query("SELECT * from iitmandi_team WHERE iitmandi_team.position = 3 and iitmandi_team.designation = ".$row['id']." and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1");
                        if(!empty($scholars->result_array())) {
                        foreach($scholars->result_array() as $row1) { ?>
<<<<<<< HEAD




                     
                      

                        <div class="col-sm-6 col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="box_sec">
                        <a href= '<?php echo base_url();?>pages/student_details/<?php echo base64_encode($row1['id'])?>'>
                            <div class="box_dwn">
                                <img src="<?php echo base_url();?>uploads/our_team/<?php echo $row1['team_image']?>" alt="" style="width: 210px;height: 185px;">
                            </div>     
                            <div class="box_dwn_inn">                       
                                <p style="text-align: center;"><?php echo $row1['fname']?><!-- <br><small><?php //echo $row1['designation']?></small> --></p>
                            
                                <p style="text-align: center;"><?php if ($row1['specialization'] == '1'){echo 'Environmental Engineering'; } else if($row1['specialization'] == '2'){echo 'Geotechnical Engineering'; } else if($row1['specialization'] == '3'){echo 'Structural Engineering'; } else if($row1['specialization'] == '4'){echo 'Water Resources Engineering'; } else if($row1['specialization'] == '5'){echo 'Transportation Engineering'; } else if($row1['specialization'] == '6'){echo 'Remote Sensing and GIS'; } else {echo '';} ?></p>
                            </div>
                        </a>
=======
                        <!-- <div class="col-sm-2" style="border: 1px solid;box-shadow: 1px 1px 0px #999,2px 2px 0px #999,3px 3px 0px #999,4px 4px 0px #999,5px 5px 0px #999,6px 6px 0px #999; margin-right: 40px; float: left;">
                            <img src="<?php echo base_url();?>uploads/our_team/<?php echo $row1['team_image']?>" alt="" style="width: 210px;height: 185px;">
                            <a href= '<?php echo base_url();?>pages/student_details/<?php echo base64_encode($row1['id'])?>'>
                                <p style="text-align: center; background: #fff;"><?php echo $row1['fname']?></p></a>
                            <p style="text-align: center; background: #fff;"><?php if ($row1['specialization'] == '1'){echo 'Environmental Engineering'; } else if($row1['specialization'] == '2'){echo 'Geotechnical Engineering'; } else if($row1['specialization'] == '3'){echo 'Structural Engineering'; } else if($row1['specialization'] == '4'){echo 'Water Resources Engineering'; } else if($row1['specialization'] == '5'){echo 'Transportation Engineering'; } else if($row1['specialization'] == '6'){echo 'Remote Sensing and GIS'; } else {echo '';} ?></p>
                        </div> -->
                        <div class="col-sm-6 col-xl-3 col-lg-3 col-md-6 col-12">
                            <div class="box_sec">
                                <a href= '<?php echo base_url();?>pages/student_details/<?php echo base64_encode($row1['id'])?>'>
                                    <div class="box_dwn">
                                        <img src="<?php echo base_url();?>uploads/our_team/<?php echo $row1['team_image']?>" alt="" style="width: 210px;height: 185px;">
                                    </div>     
                                    <div class="box_dwn_inn">                       
                                        <p style="text-align: center;"><?php echo $row1['fname']?><!-- <br><small><?php //echo $row1['designation']?></small> --></p>
                                        <p style="text-align: center;"><?php if ($row1['specialization'] == '1'){echo 'Environmental Engineering'; } else if($row1['specialization'] == '2'){echo 'Geotechnical Engineering'; } else if($row1['specialization'] == '3'){echo 'Structural Engineering'; } else if($row1['specialization'] == '4'){echo 'Water Resources Engineering'; } else if($row1['specialization'] == '5'){echo 'Transportation Engineering'; } else if($row1['specialization'] == '6'){echo 'Remote Sensing and GIS'; } else {echo '';} ?></p>
                                    </div>
                                </a>
                            </div>
>>>>>>> 215935d9a9fec2f3a496c16f3ef7ea71ce671497
                        </div>
                        </div>
                        
                    
                        <?php } } ?>
                    
                        </div>
                        </div>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php echo $footer?>