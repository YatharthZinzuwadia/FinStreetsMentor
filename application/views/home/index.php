    <style>
    .one-img{  background: url(assets/images/A.jpg)no-repeat;width: 100%;}
    .two-img{  background: url(assets/images/B1.jpg)no-repeat center;}
    .three-img{  background: url(assets/images/B.jpg)no-repeat center;}
</style>
    <?php
// $this->load->view('home/slider');
// print_r($slider_image);die;
?>
    <div class="slider">
      <div class="callbacks_container">
          <ul class="rslides" id="slider4">
            <?php foreach ($slider_image as $slider) {?>
              <li>
                  <div class="slider-img one-img" style="background: url(<?=base_url();?>assets/images/slider_images/<?=$slider['image_name']?>) no-repeat;width: 100%; background-size: cover;">
                      <div class="container">
                          <div class="slider-info text-left">
                              <h4 ><?=$slider['image_title']?></h4>
                              <div class="outs_more-buttn" >
                                  <a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="bgColor">More</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </li>
              <?php }?>
          </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <section class="pt-md-5 pt-sm-4 pt-3">
      <div class="container-fluid ">
        <div class="main row ">
          <!-- TENTH EXAMPLE -->
          <?php foreach ($slider_image as $slider) {?>
          <div class="col-lg-4 view view-tenth">
            <img src="<?=base_url();?>assets/images/slider_images/<?=$slider['image_name']?>" alt="" class="img-fluid">
            <div class="mask">
              <h3 data-blast="bgColor"><?=$slider['image_title']?></h3>
              <p><?=$slider['image_sub_title']?></p>
              <a href="#" class="info" data-toggle="modal" data-target="#exampleModalLive" data-blast="bgColor">Read More</a>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </section>
    <?php
//$this->load->view('home/mentor');
$this->load->view('home/about');
$this->load->view('home/servicies');
?>
    <!--//about-->
    <!--service-->

    <!--//service-->
    <!--blog -->
    <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Courses </h3>
        <div class="row">
          <?php foreach ($course as $cours): ?>
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="<?=base_url();?>assets/images<?='/course_images/'.$cours['image_name'] ?>" class="img-fluid" alt="">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" onclick="setCourse('<?= $cours['title'] ?>', <?= $cours['course_id'] ?>);" data-toggle="modal" data-target="#courseModal" data-blast="color">
                  <?= $cours['title'] ?>
                </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li class="mr-3"><span class="far fa-calendar-check"></span><a href="#" onclick="setCourse('<?= $cours['title'] ?>', <?= $cours['course_id'] ?>);" data-toggle="modal" data-target="#courseModal">
                      <?= date('d/m/y') ?>
                    </a></li>
                    <li><span class="far fa-comments"></span><a href="#" onclick="setCourse('<?= $cours['title'] ?>', <?= $cours['course_id'] ?>);" data-toggle="modal" data-target="#courseModal">5 Comments</a></li>
                  </ul>
                </div>
                <p style="text-align: justify; text-justify: inter-word;"><?= $cours['description'] ?></p>
                <div class="outs_more-buttn" >
                  <a href="#" onclick="setCourse('<?= $cours['title'] ?>', <?= $cours['course_id'] ?>);" data-toggle="modal" data-target="#courseModal" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!--//blog -->
    <!--Subscribe-->
    <section class="py-md-5 py-sm-4 py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 subscrib-w3layouts text-center">
            <h2 data-blast="color">Subscribe Us</h2>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="newsletter">
              <form action="#" method="post" class="d-flex">
                <input type="email" class="form-control" placeholder="Your Email" required="">
                <button class="btn1">
                <span class="far fa-envelope"></span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//Subscribe-->
    <!--stats-->
    <section class="stats py-lg-4 py-md-3 py-sm-3 py-3" id="stats">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Stats </h3>
        <div class="jst-must-info text-center">
          <div class="row stats-info">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 stats-grid-1">
              <div class="stats-grid" data-blast="bgColor">
                <div class="counter">2045</div>
                <div class="stat-info">
                  <h5 class="pt-2">Experience </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 stats-grid-2">
              <div class=" stats-grid" data-blast="bgColor">
                <div class="counter">350</div>
                <div class="stat-info">
                  <h5 class="pt-2"> Staff</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 stats-grid-3">
              <div class=" stats-grid" data-blast="bgColor">
                <div class="counter">1000</div>
                <div class="stat-info">
                  <h5 class="pt-2"> Coffee</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 stats-grid-4">
              <div class=" stats-grid" data-blast="bgColor">
                <div class="counter">650</div>
                <div class="stat-info">
                  <h5 class="pt-2"> Projects </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//stats-->
    <!--Team-->

    <!--//Team-->
    <!--contact -->
    <?php $this->load->view('home/contact');?>
  <div class="container"></div>
</body>
</html>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#submit").on('click',function(){

    var username = $(".username").val();
    var course =$(".course").val();
    $.ajax({
      url:'<?=base_url()?>home/get_mentors',
      type:"POST",
      data:{username,course},
      success: function(response){
      console.log(response);
      var data = $.parseJSON(response);
      console.log(data);
      }
    })
  })
});
</script>
<script type="text/javascript">
    (function(d, m){
        var kommunicateSettings =
            {"appId":"1df1491c921e86423d0da4e64318d9e4f","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
<?php $this->load->view('home/bot')?>
