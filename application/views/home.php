  <?php echo $header; ?>
  <div id="wowslider-container1">
    <div class="ws_images">
      <ul>
      <?php if(!empty($banner)) {
        foreach ($banner as $row){ ?>
        <li>
          <img src="<?php echo base_url()?>uploads/banner/<?php echo $row['banner_image']?>" alt="jquery slider" title="<?php echo $row['banner_title']?>" id="wows1_0"/>
        </li>
      <?php } } ?>
      </ul>
    </div>
    <div class="ws_shadow"></div>
  </div>
  <!-- ======= Hero Banner Section ======= -->
  <main id="main">
    <!-- ======= Welcome Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row gy-4">
          <div class="image col-xl-5" style="background:url('https://scene.iitmandi.ac.in/dev/uploads/homeabout/1676737649149657.jpg') no-repeat center center/cover"></div>
          <div class="col-xl-7">
            <div class="content d-flex flex-column justify-content-center ps-0 ps-xl-4">
              <h3 style="font-size: 1.5rem !important; color:black">Welcome to School of Civil and Environmental Engineering</h3>
              <br>
              <p style="line-height:unset !important ;font-size:0.95rem ;color:black ;text-align:left">
                <!-- info -->
                SCENE provides the following academic programmes - B.Tech. in Civil Engineering, M.Tech. in Structural Engineering, and MTech (R) and Ph.D. in all areas of Civil Engineering. We currently have 19 regular faculty members and two visiting faculty members to support the academic programs. We currently also have more than 50 Ph.D. students, 20 M.Tech. Students, 10 M.Tech. (R) students and 100 B.Tech. students. The School has state-of-the-art laboratory and computational facilities to support cutting-edge research in the various disciplines of Civil and Environmental Engineering.

                While being part of the School of Engineering (SE), starting from 2015, the Civil and Environmental Engineering faculty successfully secured research and consultancy projects from several renowned external funding agencies. Currently, there are several ongoing research and consultancy projects with SCENE faculty.

                We are striving our best to bring excellence in all domains of Civil and Environmental Engineering.
              </p>
            </div>
            <!-- End .content-->
          </div>
        </div>
        <br><br>
      </div>
    </section>
    <div class="containeditmain">
      <div class="section">
        <div class="first">
          <h3>Vision</h3>
          <p style="line-height:unset !important ;font-size:0.95rem ;color:black ;text-align:left">To pioneer excellence in academics, research, and innovations for sustainable and climate-resilient infrastructure development with a focus on the built environment, livelihood, and disaster risk reduction for societal benefit.</p>
        </div>
        <div class="second" style="margin-top: 45px;">
          <h3>Mission</h3>
          <p>
          <ul class="paralist">
            <li style="line-height:unset !important ;font-size:0.95rem ;color:black ;text-align:left">Multidisciplinary and holistic teaching and learning to achieve global standards in skill and research development towards self-reliant nation.</li>
            <li style="line-height:unset !important ;font-size:0.95rem ;color:black ;text-align:left">Developing innovative and sustainable solutions for resilient infrastructure with specific focus on mountain hazards.</li>
            <li style="line-height:unset !important ;font-size:0.95rem ;color:black ;text-align:left">To develop socio-techno-economic-green solutions to alleviate climatic and anthropogenic catastrophes.</li>
            <li style="line-height:unset !important ;font-size:0.95rem ;color:black ;text-align:left">To imbibe flexible, critical, creative and ethic centered principles in the education and research process.</li>
          </ul>
          </p>
        </div>
      </div>
      <!-- End Welcome Section -->

      <!-- ======= Count Section ======= -->
      <section id="clients" class="clients" style="margin-top:unset !important">
        <div class="leditclient">
          <div class="ledit_ counter-1">
            <div class="leditclientunder  ">
              <div class="iconed">
                <?php $row = $count_r->result_array();?>
                <strong class="counter-val" data-val=<?php echo $row[0]['Total']; ?>><?php echo $row[0]['Total']; ?></strong>
                <span>+</span>
              </div>
              <span style="margin-left: 5px;"><i class="bi bi-journals"></i>Research Publication</span>
            </div>
          </div>
          <div class="ledit_ counter-1">
            <div class="leditclientunder ">
              <div class="iconed">
                <?php $row1 = $count_f->result_array();?>
                <strong class="counter-val" data-val=<?php echo $row1[0]['Total']; ?>><?php echo $row1[0]['Total']; ?></strong>
                <span>+</span>
              </div>
              <span style="margin-left: 5px;"><i class="bi bi-person-workspace"></i>Faculty Member</span>
            </div>
          </div>
          <div class="ledit_ counter-1 ">
            <div class="leditclientunder ">
              <div class="iconed">
                <?php $row2 = $count_l->result_array();?>
                <strong class="counter-val" data-val=<?php echo $row2[0]['Total']; ?>><?php echo $row2[0]['Total']; ?></strong>
                <span>+</span>
              </div>
              <span style="margin-left: 5px;"><i class="bi bi-building"></i>Labs</span>
            </div>
          </div>
        </div>
      </section>
      <!-- End Count Section -->

      <!-- ======= Announcement Section ======= -->
      <div id="services" class="services">
        <div class="conti">
          <div>
            <div class="carded">
              <div class="carded-edit">
                <div class="carded-img">
                  <img src="<?php echo base_url() ?>uploads/homemessage/<?php echo $home_message[0]["homemsg_img"] ?>" alt="director" height="385" width="385">
                </div>
                <div class="intro-edit">
                  <h3 style="font-size: 30px;margin-top: 20px;"><?php echo $home_message[0]["name"] ?></h3>
                  <h4 style="margin: 0;"><?php echo $home_message[0]["designation"] ?></h4>
                </div>
              </div>
              <div class="card-body">
                <h4 class="msg_title">Message from the School Chair</h4>
                <div class="msg_des"><?php echo $home_message[0]['description'] ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper mySwiper ">
      <div class="section-title">
        <h2 style="color : black !important">News And Announcements</h2>
      </div>
      <div class="  swiper-wrapper news-section ">
        <?php if (!empty($news)) {
          foreach ($news as $row) { ?>
            <div class="card1ed swiper-slide">
              <img class="mb-2" src="uploads\news\<?php echo $row['file_name']?>">
              <h5><a href="#" style="color: #fff"; ><?php echo $row['title']?></a></h5> <!-- title of news -->
              <hr>
              <p class="paraedit mt-3" style="height: 1px";><?php echo $row['description']?></p>
            </div>
        <?php }
        } ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <br>
    </section>
    <!-- End Announcement Section -->
    <!-- ======= Events Section ======= -->
    <section id="features" class="features section-bg">
      <div class="section-title">
        <h2>Events</h2>
      </div>
      <div class="eventeditmain">
        <?php if (!empty($events)) {
          foreach ($events as $row) { ?>
            <div class="eventcard">
              <img class="imgedited" src="<?php echo base_url() ?>uploads/events/<?php echo $row['event_image'] ?>" alt="<?php echo $row['title'] ?>">
              <div class="cardedit">
                <div class=" itemedit views-field views-field-field-eventdate">
                  <div class="field-content">
                    <!-- event date from database -->
                    <?php echo date("M", strtotime($row['event_date']));?>
                  </div>
                </div>
                <div class=" itemedit views-field views-field-field-eventdate-1">
                  <div class="field-content">
                    <?php echo date("d", strtotime($row['event_date']));?>
                  </div>
                </div>
                <span class="list-inline-item itemedit"><i class="ti-calendar text-color"></i><?php echo $date = date("D, d M Y", strtotime($row['event_date'])); ?></span>
                <a href="#">
                  <h5 class="card-title itemedit"><?php echo $row['title'] ?></h5>
                </a>
                <p class="card-text itemedit"><?php// echo $row['description'] ?></p>
                <p class="hideit">
                  <?php echo mb_substr(html_entity_decode($row['description']),0,50); ?>
                  <!-- <a href="course-single.html" class="mt-4 itemedit btn btn-primary btn-sm">Read More</a> -->
                </p>
              </div>
            </div>
        <?php }
        } ?>
      </div>
    </section>
    <!-- End Events Section -->
  </main>
  <!-- End #main -->
  <?php echo $footer; ?>