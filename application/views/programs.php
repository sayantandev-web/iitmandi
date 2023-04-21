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
    .accordion-button:focus{box-shadow:none;}
    .prog_list ul{margin:0px; padding-left: 32px;}
    .prog_list ul li {padding: 5px 0 0; list-style-type: disc;color:#5c5c77; }
    .accordion-header button{border:1px solid #dee2e6; border-radius:5px;}
    .accordion-item{border-radius:5px;}
    @media screen and (max-width: 600px) {
      .box_sec{margin-top:10px;}  

    }
</style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
<main id="main">
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 30px">
        <div class="container">
            <div class="row">
               


                <div class="accordion mt-5" id="accordionExample">
  <div class="accordion-item mb-3">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        UNDERGRADUATE
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
            <div class="col-sm-6">
                 <p>
                The School of Civil and Environmental Engineering offers a four-year B.Tech. program in Civil Engineering.
                The program is designed to provide students with a solid foundation in the fundamentals of Civil Engineering.
                Course work include a wide variety of courses in the areas of Structural Engineering, Geotechnical Engineering, Water Resources Engineering, Transportation Engineering, Environmental Engineering, and Construction Engineering and Management.
              
                For more information on the program <a href="https://iitmandi.ac.in/academics/files/B.Tech%20Ordinance%20and%20Regulations.pdf">click here. </a>
                
            </p>
        <p>For more details Click here</p>

        <p>Further, students can obtain a minor in various other disciplines such as computer science, data science, economics, etc.</p>
            </div>
            <div class="col-sm-6">
                <img src="http://localhost/mandi/iitmandi/uploads/homeabout/1680781829326843.jpg" alt="">
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item mb-3">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        POSTGRADUATE
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <div class="row">
            <div class="col-sm-6 prog_list">
                 <p style="margin-bottom: 15px !important;">
               M.Tech.
The School of Civil and Environmental Engineering offers a two-year M.Tech. program in Civil Engineering with specialization in Structural Engineering. The program is designed to provide students with a solid foundation in the fundamentals of Structural Engineering. The courses includes Design, Analysis and Construction of Structures, Earthquake Engineering, Structural Dynamics, Structural Mechanics, Structural Optimization, Structural Reliability, and Finite Element Methods. For more information on the program click here.</p>
              
                
                <p>M.Tech. (By Research)
The School of Civil and Environmental Engineering offers a two-year M.Tech. (By Research) program in following desciplines:
<ul>
    <li>Geotechnical Engineering</li>
    <li>Water Resources Engineering</li>
    <li>Environmental Engineering</li>
    <li>Structural Engineering</li>
    <li>For more information on the program click here.  </li>
</ul>
               
            </p>
        <p>For more details Click here</p>

       
            </div>
            <div class="col-sm-6">
                <img src="http://localhost/mandi/iitmandi/uploads/homeabout/1680781829326843.jpg" alt="">
            </div>
        </div>
    </div>
  </div>
                </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        PH.D.
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
            <div class="col-sm-6 prog_list">
                 <p style="margin-bottom: 15px !important;">
              The School of Civil and Environmental Engineering also offers the prestigious doctoral program. Students enrolled in this program earn a degree of Doctor of Philosophy (PhD). Students are expected to make an original research contribution of significance in their chosen area of research. They also must finish a minimum coursework requirement. The courses are chosen suitably by students to aid in their respective research work. Towards the end, students must submit and defend a thesis. The broard research areas are as follows:</p>
              
<ul>
    <li>Geotechnical Engineering</li>
    <li>Remote Sensing and GIS</li>
    <li>Environmental Engineering</li>
    <li>Structural Engineering</li>
    <li>Climate Change and Water Resources Engineering </li>
</ul>
               
            </p>
        <p>For more information on the program click here.</p>

       
            </div>
            <div class="col-sm-6">
                <img src="http://localhost/mandi/iitmandi/uploads/homeabout/1680781829326843.jpg" alt="">
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php echo $footer?>