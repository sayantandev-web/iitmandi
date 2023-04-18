<?php echo $header;?>
<style>
    .nav-pills .nav-link{margin-bottom: 15px;}
    .bio_img {width: 140px; height: 140px; border-radius: 50%;}
    .bio_text {margin-bottom: auto;}
    .bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
    .td_class {padding: 0px; display: initial;}
    .table>:not(caption)>*>* {text-align: center;}
    /*.col-sm-4{display: inline-block;}
    .col-sm-2{display: inline-block;}
    .filter_data{text-align:center;margin: 0 0 35px 0;}
    .fetch_data {background-color: #ffbf00; color: #fff;}*/
    .filter_data{text-align:center;margin: 0 0 35px 0;}
    .fetch_data {background-color: #ffbf00; color: #fff;}
    .box_sec{background: #efefef;  padding:20px 15px; border-radius: 20px; text-align: center; position: relative; margin-bottom:15px;}
    .box_sec img{width:220px; height:220px; transition:all ease-in-out .5s; position:relative; border-radius: 50%;}
    .box_dwn a{display:inline-block; color:#000;}
    .box_dwn a h6{margin:0px; text-transform:uppercase;}
    .box_dwn{width:100%;  padding-top:8px;}
    .box_dwn h6{margin:0px; line-height:20px;}
    /* .box_dwn p{margin:0px; font-size:16px; line-height:20px; -webkit-transform: translate3d(0,100%,0);   transform: translate3d(0,100%,0); padding-left:15px; text-align:left; color:#222; text-align: center;}*/
    .box_dwn p{margin:0px; font-size:12px; line-height:20px; padding-left:0px; color:#7a7a7a; text-align: center; font-weight:700; } 
   
    .box_sec:hover img{transition: all ease-in-out .5s; transform: scale(.7)translateY(-46px);}
    /* .box_sec:hover .box_dwn{transform: translateY(-131px); position: absolute; z-index: 1; left: 0px; right: 0px; margin: 0 auto; overflow:visible;} */
    .box_sec:hover .box_dwn{/*transform: translateY(-131px); */position: relative; z-index: 1; left: 0px; right: 0px; margin: 0 auto; overflow:visible;}
    /* .box_sec:hover{padding:32px 15px 130px;} */
    .choose_sec .btn{background:#ffdf80; color:#fff; border-radius:5px; width:100%; padding:8px 0; color:#022851;}
    .choose_sec .btn:hover{background:#022851; color:#fff;}
    .choose_sec select{height:40px; font-size:16px; padding:0 10px;}
    .box_dwn small{color: #db0000; text-transform: uppercase; font-size: 15px;}
    .box_dwn_inn{width: 100%; display: inline-block; margin-top: 0px;}
    .social_sec{width:100%;}
    .social_sec .fa-envelope{font-size: 20px; color: #7a7a7a;}
    .social_sec .fa-phone{font-size: 20px; color: #7a7a7a;}
    .res_txt2{opacity: 0;}
    .box_sec:hover .res_txt2{opacity: 1;}
    .res_txt1{opacity: 1;}
    .box_sec:hover .res_txt1{opacity: 0;}
    .container {max-width: 1440px !important;}
    .pad_btm{padding-bottom: 0px !important;}
    @media screen and (max-width: 600px) {
      .box_sec{margin-top:10px;}  

    }
</style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
<main id="main">
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 portfolio-info pad_btm">
                    <h3 style="text-align:center">Programmes</h3>
                    <p style="font-size: 18px; font-weight:500; text-transform: uppercase;">Undergraduate</p>

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Degree</th>
                                    <th>Specialization</th>
                                    <th>Duration (years)</th>
                                    <th>Credit</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                  <tr>
                                    <td>B.Tech.</td>
                                    <td>Civil Engineering</td>
                                    <td>4</td>
                                    <td>**</td>
                                </tr>
                            </tbody>
                        </table>
                    <p>For more details <a href="">Click here</a></p>
                    <p>Further, students can obtain a minor in various other disciplines such as computer science, data science, economics, etc.
</p>
                </div>

                <div class="col-lg-12 portfolio-info pad_btm">
                    
                    <p style="font-size: 18px; font-weight:500; text-transform: uppercase;">Postgraduate</p>

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Degree</th>
                                    <th>Specialization</th>
                                    <th>Duration (years)</th>
                                    <th>Credit</th>
                                    <th></th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                  <tr>
                                    <td>M.Tech.</td>
                                    <td>Structural Engineering</td>
                                    <td>2</td>
                                    <td>**</td>
                                    <td><a href="">Link</a></td>
                                </tr>
                                 <tr>
                                    <td>M.Tech (R)</td>
                                    <td>Environmental Engineering</td>
                                    <td>*</td>
                                    <td>**</td>
                                    <td><a href="">Link</a></td>
                                </tr>
                                 <tr>
                                    <td>M.Tech (R)</td>
                                    <td>Geotechnical Engineering</td>
                                    <td>*</td>
                                    <td>**</td>
                                    <td><a href="">Link</a></td>
                                </tr>
                                <tr>
                                    <td>M.Tech (R)</td>
                                    <td>Structural Engineering</td>
                                    <td>*</td>
                                    <td>**</td>
                                    <td><a href="">Link</a></td>
                                </tr>
                                 <tr>
                                    <td>M.Tech (R)</td>
                                    <td>Water Resources Engineering</td>
                                    <td>*</td>
                                    <td>**</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>For more details<a href=""> Click here</a></p>
                </div>

                <div class="col-lg-12 portfolio-info">
                    
                    <p style="font-size: 18px; font-weight:500; text-transform: uppercase;">Ph.D.</p>

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Degree</th>
                                    <th>Research Area</th>
                                    <th>Credit</th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>
                                  <tr>
                                    <td>Ph.D. </td>
                                    <td>Environmental Engineering</td>
                                    <td>**</td>                                    
                                </tr>
                                 <tr>
                                    <td>Ph.D. </td>
                                    <td>Geotechnical Engineering</td>
                                    <td>**</td>                                    
                                </tr>
                                 <tr>
                                    <td>Ph.D. </td>
                                    <td>Structural Engineering</td>
                                    <td>**</td>                                    
                                </tr>
                                 <tr>
                                    <td>Ph.D. </td>
                                    <td>Water Resources Engineering</td>
                                    <td>**</td>                                    
                                </tr>
                               
                            </tbody>
                        </table>
                        <p>For more details<a href=""> Click here</a></p>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php echo $footer?>