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
.close {padding: 0;background-color: transparent;border: 0;float: right;font-size: 1.5rem;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;opacity: .5;}
.title {display: flex;width: 40%;border-width: 2px;border-radius: 20px;justify-content: center;vertical-align: middle;margin-bottom: 50px;margin-top: 20px;}
h1 {color: rgb(1 15 112);}
.block { display: flex; width: 90%; height: 400px; background-color: lightgray; border-radius: 20px; border:rgba(110, 130, 229, 0.6); border-width: .2px; padding-right: 5px;}
.block img { max-width: 100%; max-height:100%; padding: 5px; border-radius: 20px; width: 400px; }
.block .textblock { font-size: 20px; padding-left: 20px;}
.block:hover { box-shadow: 0 0 11px rgba(110, 130, 229, 0.6); }
.text { font-size: 20px; padding-left: 20px;}
/*28.02.2023*/
.lab_details_sec{width: 100%; text-align:center;}
.lab_details_sec h4{font-size: 44px; line-height: 45px; text-align: center; color: #010f70; margin: 35px 0 30px; padding-bottom: 0px; }
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
.specialization_img {/*width: 100%; height: 450px;*/ margin-bottom: 50px;}
html {scroll-behavior: smooth;}
.profile_menu {width: 100%;z-index: 99;position: static;}.profile_menu.sticky {position: fixed;top: 0;margin-left: -41px;}.profile_menu {padding: 0;margin: 0 0 30px;font-size: 1.5em;background: #fff;}.profile_menu a {border: none;border-bottom: 5px solid #fff;display: inline-block;padding: 5px 0;margin: 0 15px;}.profile_menu a:first-child {margin-left: 0;}.profile_menu a.active,.profile_menu a:hover {border-bottom-color: #0078d7;animation-name: menu-border-fade;animation-duration: .6s;animation-timing-function: ease;}.profile_menu a.active .menu-link,.menu-link:hover {animation-name: menu-link-fade;animation-duration: .4s;animation-timing-function: ease;color: #0078d7;}
.nav-pills .nav-link{margin-bottom: 15px;}
.bio_img {width: 140px; height: 140px; border-radius: 50%;}
.bio_text {margin-bottom: auto;}
.bio_text1 {margin-top: 30px; border: 1px solid #eee; padding: 30px; text-align: justify;}
.td_class {padding: 0px; display: initial;}
.table>:not(caption)>*>* {text-align: center;}
.filter_data{text-align:center;margin: 0 0 35px 0;}
.fetch_data {background-color: #ffbf00; color: #fff;}
.box_sec{background: #efefef;  padding:20px 15px; border-radius: 20px; text-align: center; position: relative; margin-bottom:15px; height: 520px;}
.box_sec img{width:220px; height:220px; transition:all ease-in-out .5s; position:relative; border-radius: 50%;}
.box_dwn a{display:inline-block; color:#000;}
.box_dwn a h6{margin:0px; text-transform:uppercase;}
.box_dwn{width:100%;  padding-top:8px; height: 185px;}
.box_dwn h6{margin:0px; line-height:20px; height: 40px;}
.box_dwn p{margin:0px; font-size:12px; line-height:20px; padding-left:0px; color:#7a7a7a; text-align: center; font-weight:700;} 
.box_sec:hover img{transition: all ease-in-out .5s; transform: scale(.7)translateY(-46px);}
.box_sec:hover .box_dwn{transform: translateY(-75px); transition: all ease-in-out .5s; position: relative; z-index: 1; left: 0px; right: 0px; margin: 0 auto; overflow:visible;}
.choose_sec .btn{background:#ffdf80; color:#fff; border-radius:5px; width:100%; padding:8px 0; color:#022851;}
.choose_sec .btn:hover{background:#022851; color:#fff;}
.choose_sec select{height:40px; font-size:16px; padding:0 10px;}
.box_dwn small{color: #db0000; text-transform: uppercase; font-size: 15px;}
.box_dwn_inn{width: 100%; display: inline-block; margin-top: 0px;}
.social_sec{width:100%; margin-top: 50px;}
.social_sec .fa-envelope{font-size: 20px; color: #7a7a7a;}
.social_sec .fa-phone{font-size: 20px; color: #7a7a7a;}
.res_txt2{display: none;}
.box_sec:hover .res_txt2{display: block;}
.res_txt1{display: block;}
.box_sec:hover .res_txt1{display: block;}
.container {max-width: 1600px;}
@media screen and (max-width: 600px) {
    .box_sec{margin-top:10px;}  
}
@media (min-width: 1200px) and (max-width: 1460px) {
    .col-xl-2 {
        flex: 0 0 auto !important;
        width: 21.666667% !important;
    }
}
@media (min-width: 991px) and (max-width: 1030px) {
    .col-lg-3 {
        flex: 0 0 auto;
        width: 26% !important;
    }
}
@media (min-width: 1461px) and (max-width: 1541px) {
    .col-lg-3 {
        flex: 0 0 auto;
        width: 17.666667% !important;
    }
}
.cont_txt {margin-bottom: 38px;float: left;width: 100%;background: #ffffff;margin-top: 30px;box-shadow: 0 0 10px #f87b42;-webkit-border-radius: 8px;-moz-border-radius: 8px;-ms-border-radius: 8px;-o-border-radius: 8px;border-radius: 8px;overflow: hidden;}
h4:first-child{text-align: center;}
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
    <section id="portfolio-details" class="portfolio-details" style="margin-top:70px;">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm-12 offset-sm-0">
                    <div class="lab_details_sec">
                        <h4><?php echo $pageContent[0]['title']?></h4>
                        <img class="specialization_img" src="<?php echo base_url()?>/uploads/news/<?php echo $pageContent[0]['file_name']?>">
                    </div>
                    <div class="row">
                        <div class="cont_txt" id="about">
                            <h4>Description</h4>
                            <div style="font-size: 18px;"><?php echo $text = $pageContent[0]['description']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php echo $footer; ?>
<script>
    var div_top = $('.profile_menu').offset().top;

    $(window).scroll(function() {
        var window_top = $(window).scrollTop() - 0;
        if (window_top > div_top) {
            if (!$('.profile_menu').is('.sticky')) {
                $('.profile_menu').addClass('sticky');
            }
        } else {
            $('.profile_menu').removeClass('sticky');
        }
    });
</script>