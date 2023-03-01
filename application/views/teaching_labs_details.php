<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    
    .fade:not(.show) { opacity: 1 !important; background: #00000063;}
    .modal-lg { margin-top : 10%}
    .close {padding: 0;background-color: transparent;border: 0;float: right;font-size: 1.5rem;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;
opacity: .5;}
   
 
}


.title {
            display: flex;
            width: 40%;
            border-width: 2px;
            border-radius: 20px;
            justify-content: center;
            vertical-align: middle;
            margin-bottom: 50px;
            margin-top: 20px;
            
        }
h1      {
        color: rgb(1 15 112);

        }
.block {
  display: flex;
  width: 90%;
  height: 400px;
  background-color: lightgray;
  border-radius: 20px;
  border:rgba(110, 130, 229, 0.6);
  border-width: .2px;
  padding-right: 5px;
}
.block img {
  max-width: 100%;
  max-height:100%;
  padding: 5px;
  border-radius: 20px;
  width: 400px;
}
.block .textblock{
    font-size: 20px;
  padding-left: 20px;
}
.block:hover{
    box-shadow: 0 0 11px rgba(110, 130, 229, 0.6); 
}
.text {
  font-size: 20px;
  padding-left: 20px;
}

/*28.02.2023*/
.lab_details_sec{width: 100%;}
.lab_details_sec h4{font-size: 35px; line-height: 45px; text-align: center; color: #010f70; margin: 0px;padding-bottom: 70px; }
.lab_details_lt{width: 100%; border: 1px solid #ffbf00; border-radius: 15px;}
.lab_details_lt img{width: 100%; border-radius: 15px;}
.lab_details_rt{width: 100%; padding-top:0px;}
.lab_details_rt h6{font-size: 26px; line-height: 30px; text-align: left; color: #13639e; margin: 0px;padding-bottom: 15px; }
.lab_details_rt p{padding: 0px; font-size: 16px; line-height: 22px; text-align: left; color: #444444;}
.lab_details_inn{width: 100%; margin-top:15px; padding: 15px; box-shadow: 2px 4px 9px 0px rgb(120 120 120 / 75%);     -webkit-box-shadow: 2px 4px 9px 0px rgb(120 120 120 / 75%);  -moz-box-shadow: 2px 4px 9px 0px rgba(120,120,120,0.75); border-radius: 8px; margin-bottom: 15px;}
.lab_details_rt_top{width: 100%; margin-bottom: 30px;}
.lab_details_rt_top p{font-size: 16px; color:#222; text-align: center; line-height: 25px}
.lab_details_rt_top p strong{font-size: 20px;}
.cont_txt{width:100%; padding: 15px;}
.cont_txt p{padding: 0px 0 20px; font-size: 16px; line-height: 22px; text-align: left; color: #444444;}
.cont_txt
</style>
<main id="main">
    <section id="portfolio-details" class="portfolio-details" style="margin-top:30px;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm-10 offset-sm-1">
                  <div class="lab_details_sec">
                      <h4>Environmental Engineering Laboatory</h4>
                       <div class="cont_txt">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>

                           <span>Coordinator <img style="width:50px;" src="<?php echo base_url() ?>uploads/environmentallab/user.png" alt=""></span>
                           <span>Coordinator <img style="width:50px;" src="<?php echo base_url() ?>uploads/environmentallab/user.png" alt=""></span>
                       </div>
                        <div class="lab_details_inn">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="lab_details_rt_top">
                                           <p><strong>Name of the Equipment:</strong>  Concrete Moisture Meter </p>
                                           <p><strong>Specialization:</strong> Construction Material Non Destructive Testing</p>
                                           <p><strong>Name of the lab:</strong> Construction Material Lab </p>
                                           <p><strong>Type of Lab:</strong> Research</p>
                                       </div>
                                </div>
                               <div class="col-sm-4">
                                   <div class="lab_details_lt">
                                       <img src="<?php echo base_url() ?>uploads/environmentallab/01.png" alt="">
                                   </div>
                               </div>
                               <div class="col-sm-8">
                                   <div class="lab_details_rt">                                       
                                       <h6>Concrete Moisture Meter</h6>
                                       <p>Tramex Concrete Moisture Encounter X5 detects and evaluates the moisture conditions within the slab or screed by non-destructively measuring the electrical impedance. A low frequency electronic signal is transmitted into the material under test via the electrodes in the base of the instrument.</p>
                                   </div>
                               </div>
                            </div>
                        </div>

                        <div class="lab_details_inn">
                            <div class="row">
                               <div class="col-sm-3">
                                   <div class="lab_details_lt">
                                       <img src="<?php echo base_url() ?>uploads/environmentallab/env2.jpg">
                                   </div>
                               </div>
                               <div class="col-sm-9">
                                   <div class="lab_details_rt">
                                       <h6>Five-stage cascade impactor</h6>
                                       <p>The 5-stage cascade impactor is used for size-segregated particulate matter collection. The individual stages collect particles of size range >2.5 µm, 2.5-1 µm, 1-0.5 µm, 0.5-0.25 µm, and ≤0.25 µm. It operates with a flow rate of 9 liters per minute (lpm). The instrument is generally used for particulate matter collection in indoor environments; however, it can be used to collect ambient particles if the wind speed is less than 5 km/hr. The initial 4 stages require filters of 25 mm while the last stage of 37 mm diameter for particulate matter collection.</p>
                                   </div>
                               </div>
                            </div>
                        </div>

                        <div class="lab_details_inn">
                            <div class="row">
                               <div class="col-sm-3">
                                   <div class="lab_details_lt">
                                       <img src="<?php echo base_url() ?>uploads/environmentallab/env3.jpg">
                                   </div>
                               </div>
                               <div class="col-sm-9">
                                   <div class="lab_details_rt">
                                       <h6> Ultrasonicator</h6>
                                       <p> An ultrasonicator is generally used for cleaning of glasswares and metals. It is also used commonly in the field of aerosol research to extract the chemical components of particulate matter onto a solvent of interest.</p>
                                   </div>
                               </div>
                            </div>
                        </div>

                        <div class="lab_details_inn">
                            <div class="row">
                               <div class="col-sm-3">
                                   <div class="lab_details_lt">
                                       <img src="<?php echo base_url() ?>uploads/environmentallab/env4.jpg">
                                   </div>
                               </div>
                               <div class="col-sm-9">
                                   <div class="lab_details_rt">
                                       <h6> Digital pH meter</h6>
                                       <p>The digital pH meter is used to measure the pH of an aqueous solution.</p>
                                   </div>
                               </div>
                            </div>
                        </div>

                        <div class="lab_details_inn">
                            <div class="row">
                               <div class="col-sm-3">
                                   <div class="lab_details_lt">
                                       <img src="<?php echo base_url() ?>uploads/environmentallab/env5.jpg">
                                   </div>
                               </div>
                               <div class="col-sm-9">
                                   <div class="lab_details_rt">
                                       <h6>Solid phase extraction system</h6>
                                       <p>The solid phase extraction system is used for rapid separation of organic analyte of interest from a mixture. One or more analytes from a liquid sample mixture is isolated by extracting, partitioning, and/or adsorbing onto a solid stationary phase.</p>
                                   </div>
                               </div>
                            </div>
                        </div>
                  </div>


                   <!--  <div class="portfolio-info">
                        <!-- <h3 style="text-align:center"><?php echo $title?></h3> --
                        <div class='col-sm-12' style="margin-top: 50px;">
                            <div class="container height:20px">
                                    <div class = title>  
                                    <h1 style="font-size:30px">Environmental Engineering Laboatory</h1>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class = block>    
                                        <img src="<?php echo base_url() ?>uploads/environmentallab/env1.jpg">
                                        <div class="textblock">
                                            <h2> PM2.5 sampler</h1>
                                                PM2.5 sampler is used for collection of ambient particulate matter with aerodynamic diameter ≤ 2.5 µm. It operates with a flow rate of 16.7 liters per minute (lpm). The sample is collected using a filter of 47 mm diameter.

                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class = block>    
                                        <img src="<?php echo base_url() ?>uploads/environmentallab/env2.jpg">
                                        <div class="textblock">
                                            <h2> Five-stage cascade impactor</h1>
                                                The 5-stage cascade impactor is used for size-segregated particulate matter collection. The individual stages collect particles of size range >2.5 µm, 2.5-1 µm, 1-0.5 µm, 0.5-0.25 µm, and ≤0.25 µm. It operates with a flow rate of 9 liters per minute (lpm). The instrument is generally used for particulate matter collection in indoor environments; however, it can be used to collect ambient particles if the wind speed is less than 5 km/hr. The initial 4 stages require filters of 25 mm while the last stage of 37 mm diameter for particulate matter collection.

                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class = block>    
                                        <img src="<?php echo base_url() ?>uploads/environmentallab/env3.jpg">
                                        <div class="textblock">
                                            <h2> Ultrasonicator</h1>
                                                An ultrasonicator is generally used for cleaning of glasswares and metals. It is also used commonly in the field of aerosol research to extract the chemical components of particulate matter onto a solvent of interest.
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class = block>    
                                        <img src="<?php echo base_url() ?>uploads/environmentallab/env4.jpg">
                                        <div class="textblock">
                                            <h2> Digital pH meter</h1>
                                                The digital pH meter is used to measure the pH of an aqueous solution.
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class = block>    
                                        <img src="<?php echo base_url() ?>uploads/environmentallab/env5.jpg">
                                        <div class="textblock">
                                            <h2> Solid phase extraction system</h1>
                                                The solid phase extraction system is used for rapid separation of organic analyte of interest from a mixture. One or more analytes from a liquid sample mixture is isolated by extracting, partitioning, and/or adsorbing onto a solid stationary phase. 
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</main>