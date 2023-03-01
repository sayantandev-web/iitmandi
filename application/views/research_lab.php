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
    * {box-sizing: border-box;}
    
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
            h1 {
                color: rgb(1 15 112);
            
        }
        .card_sp{
          position: relative;
          transition: transform .2s;
        }
        .card_sp:hover{
            transform: scale(1.3); 
            z-index: 9999;
        }
        /*img {
            border-radius: 20px;
            border: solid black;
            border-width: 1px;
            width: 200px;
            height: 300px;

        }*/
      
        
        .text-overlay {
          position: absolute;
          top: 0;
          left: 0;
          padding: 1rem;
          font-size: 1.5rem;
          font-weight: 100;
          color: white;
          backdrop-filter: blur(8px) brightness(30%);
        } 

        /*27.02.2023*/
        .portfolio-info{width:100%;}
        .portfolio-info h6{font-size: 35px; line-height: 45px; text-align: center; color: #010f70; margin: 0px;padding-bottom: 15px; }
        .lab_sec{width:100%; margin-top: 15px; position: relative; overflow: hidden;transition: all ease-in-out .2s; border-radius: 40px;} 
        .lab_img{width: 100%;} 
        .lab_img img{border-radius: 40px;   transition: all ease-in-out .2s; width: 100%;}
        .lab_txt{width: 100%; position: absolute; left:0px; right: 0px; margin: 0 auto; top: 36%; background: rgba(0, 0, 0, 0.5); padding: 10px 0;}
        .lab_txt p{font-size: 24px; line-height: 40px; text-align: center; color: #fff; margin: 0px;padding:0px; }
        .lab_sec:hover .lab_img img{transform: scale(1.1);transition: all ease-in-out .2s; border-radius: 40px;}
        a{cursor: pointer;}
</style>
<main id="main">
    <section id="portfolio-details" class="portfolio-details" style="margin-top:30px;">
        <div class="container_1">
            <div class="row gy-4">
                <div class="col-sm-10 offset-sm-1">
                    <div class="portfolio-info">
                       <h6>Research Laboratories</h6>
                        <div class="row">
                            <div class="col-sm-4">
                                <a onclick="location.href='<?php echo base_url()?>pages/teaching_labs_details';">
                                    <div class="lab_sec">
                                        <div class="lab_img">
                                            <img src="https://www.zingerbug.com/Backgrounds/background_images/blue-sky-background.jpg" alt="">
                                             <div class="lab_txt">
                                                 <p>Environmental Engineering </p>
                                             </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                             <div class="col-sm-4">                                
                                    <div class="lab_sec">
                                        <div class="lab_img">
                                           <img src="https://images.theconversation.com/files/275002/original/file-20190516-69195-1yg53ff.jpg?ixlib=rb-1.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip"  alt="">
                                             <div class="lab_txt">
                                                 <p>Geotechnical Engineering</p>
                                             </div>
                                        </div>
                                    </div>                                
                            </div>

                             <div class="col-sm-4">                                
                                    <div class="lab_sec">
                                        <div class="lab_img">
                                           <img src="https://damassets.autodesk.net/content/dam/autodesk/www/solutions/bim/fy22/structural-design/what-is-bim-for-structures-thumb-1172x660.jpg"  alt="">
                                             <div class="lab_txt">
                                                 <p>Structural Engineering</p>
                                             </div>
                                        </div>
                                    </div>                                 
                              </div>

                              <div class="col-sm-4">                                
                                    <div class="lab_sec">
                                        <div class="lab_img">
                                           <img src=""  alt="">
                                             <div class="lab_txt">
                                                 <p>Transportation Engineering</p>
                                             </div>
                                        </div>
                                    </div>                                 
                              </div>

                              <div class="col-sm-4">                                
                                    <div class="lab_sec">
                                        <div class="lab_img">
                                           <img src=""  alt="">
                                             <div class="lab_txt">
                                                 <p>Water Resources Engineering</p>
                                             </div>
                                        </div>
                                    </div>                                 
                              </div>
                          </div>
                       








                        <!-- <h3 style="text-align:center"><?php echo $title?></h3> -->
                        <!-- <div class='col-sm-12' style="margin-top: 50px;">
                            <div class="container_1">
        <div class="title">
            <h1 style="font-size: 38px;"> Teaching Laboratories</h1>
        </div>

  
    </div>
    <div class="container_1">
        <div class = card_sp onclick="location.href='<?php echo base_url()?>pages/teaching_labs_details';" style="cursor: pointer;">
        <h3 class="text-overlay">Environmental Engineering </h3>
        <img src="https://www.zingerbug.com/Backgrounds/background_images/blue-sky-background.jpg" style="border-radius: 20px;
            border: solid black;
            border-width: 1px;
            width: 200px;
            height: 300px;">
    </div>
    <div class="container_1">
        <div class = card_sp>
        <h3 class="text-overlay">Geotechnical Engineering</h3>
        <img src="https://images.theconversation.com/files/275002/original/file-20190516-69195-1yg53ff.jpg?ixlib=rb-1.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip" style="border-radius: 20px;
            border: solid black;
            border-width: 1px;
            width: 200px;
            height: 300px;">
    </div>
    <div class="container_1">
        <div class = card_sp>
        <h3 class="text-overlay">Structural Engineering</h3>
        <img src="https://damassets.autodesk.net/content/dam/autodesk/www/solutions/bim/fy22/structural-design/what-is-bim-for-structures-thumb-1172x660.jpg" style="border-radius: 20px;
            border: solid black;
            border-width: 1px;
            width: 200px;
            height: 300px;">
    </div>
    <div class="container_1">
        <div class = card_sp>
        <h3 class="text-overlay">Transportation Engineering</h3>
        <img src="data:image/jpeg;base64,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" style="border-radius: 20px;
            border: solid black;
            border-width: 1px;
            width: 200px;
            height: 300px;">
    </div>
    <div class="container_1">
        <div class = card_sp>
        <h3 class="text-overlay">Water Resources Engineering</h3>
        <img src="data:image/jpeg;base64,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"  style="border-radius: 20px;
            border: solid black;
            border-width: 1px;
            width: 200px;
            height: 300px;">
    </div>



</div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
</main>