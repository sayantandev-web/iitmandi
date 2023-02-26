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
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 portfolio-info">
                    <h3 style="text-align:center"><?php echo $title?></h3>
                    <?php
                    $chk_postdoc = $this->db->query("SELECT DISTINCT iitmandi_designation.id,iitmandi_designation.designation from iitmandi_team JOIN iitmandi_designation ON iitmandi_team.designation = iitmandi_designation.id WHERE iitmandi_team.position = 2 and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1 and iitmandi_designation.status = 1 and iitmandi_designation.is_delete = 1");
                    if(!empty($chk_postdoc->result_array())) {
                    foreach($chk_postdoc->result_array() as $row) { ?>
                    <div class="col-sm-12 cls_filter_data" style="display: inline-block;">
                        <h3 style="text-align:center"><?php echo $row['designation']?></h3>
                        <?php 
                        //echo "SELECT * from iitmandi_team WHERE iitmandi_team.position = 2 and iitmandi_team.designation = ".$row['id']." and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1";
                        $postdoc = $this->db->query("SELECT * from iitmandi_team WHERE iitmandi_team.position = 2 and iitmandi_team.designation = ".$row['id']." and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1");
                        if(!empty($postdoc->result_array())) {
                        foreach($postdoc->result_array() as $row1) { ?>
                        <div class="col-sm-2" style="border: 1px solid;box-shadow: 1px 1px 0px #999,2px 2px 0px #999,3px 3px 0px #999,4px 4px 0px #999,5px 5px 0px #999,6px 6px 0px #999; margin-right: 40px; float: left;">
                            <img src="<?php echo base_url();?>uploads/our_team/<?php echo $row1['team_image']?>" alt="" style="width: 210px;height: 185px;">
                            <a href= '<?php echo base_url();?>pages/faculty_details/<?php echo base64_encode($row1['id'])?>'>
                                <p style="text-align: center; background: #fff;"><?php echo $row1['fname']?><!-- <br><small><?php //echo $row1['designation']?></small> --></p></a>
                            <p style="text-align: center; background: #fff;"><?php if ($row1['specialization'] == '1'){echo 'Environmental Engineering'; } else if($row1['specialization'] == '2'){echo 'Geotechnical Engineering'; } else if($row1['specialization'] == '3'){echo 'Structural Engineering'; } else if($row1['specialization'] == '4'){echo 'Water Resources Engineering'; } else if($row1['specialization'] == '5'){echo 'Transportation Engineering'; } else if($row1['specialization'] == '6'){echo 'Remote Sensing and GIS'; } else {echo '';} ?></p>
                        </div>
                        <?php } } ?>
                    </div>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php echo $footer?>