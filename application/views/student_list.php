<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
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
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info">
                        <h3 style="text-align:center">Student List</h3>
                        <!-- <div class="col-sm-12">
                            <?php if(!empty($students)) {
                                $i=1; ?>
                            <?php foreach($students as $row) { ?>
                            <div class="col-sm-2" style="border: 1px solid;box-shadow: 1px 1px 0px #999,2px 2px 0px #999,3px 3px 0px #999,4px 4px 0px #999,5px 5px 0px #999,6px 6px 0px #999; margin-right: 40px; float: left;">
                                <img src="<?php echo base_url();?>uploads/our_team/<?php echo $row['team_image']?>" alt="">
                                <a href= '<?php echo base_url();?>pages/student_details/<?php echo base64_encode($row['id'])?>'><p style="text-align: center; background: #fff;"><?php echo $row['fname']?><br><small><?php echo $row['designation']?></small></p></a>
                                <p></p>
                            </div>
                            <?php $i++; } } ?>
                        </div> -->
                        <?php if(!empty($designation)) {
                            foreach($designation as $row1) { ?>
                            <h3 style="text-align:center"><?php echo $row1['designation']?></h3>
                            <div class="col-sm-12" style="display: inline-block;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <?php if ($row1['designation'] == 'M-Tech') { ?>
                                            <th scope="col">Specialization</th>
                                            <?php } ?>
                                            <th scope="col">En. No.</th>
                                            <th scope="col">Year of admission</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php 
                                        $students = $this->db->query("SELECT * from iitmandi_team WHERE iitmandi_team.position = 5 and iitmandi_team.designation = '".$row1['id']."' and iitmandi_team.status = 1 and iitmandi_team.is_delete = 1");
                                        if(!empty($students->result_array())) {
                                            foreach($students->result_array() as $row) { ?>
                                                <td><p><?php echo $row['fname']?></p></td>
                                                <?php if ($row1['designation'] == 'M-Tech') { ?>
                                                <td><p><?php echo $row['specialization']?></p></td>
                                                <?php } ?>
                                                <td><p><?php echo $row['enrollno']?></p></td>
                                                <td><p><?php echo $row['admssnyear']?></p></td>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php echo $footer?>