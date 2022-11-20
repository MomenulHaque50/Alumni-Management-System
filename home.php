<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.event-list{
cursor: pointer;
}
span.hightlight{
    background: yellow;
}
.banner{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 26vh;
        width: calc(30%);
    }
    .banner img{
        width: calc(100%);
        height: calc(100%);
        cursor :pointer;
    }
.event-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}

.event-list .banner {
    width: calc(40%)
}
.event-list .card-body {
    width: calc(60%)
}
.event-list .banner img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    min-height: 50vh;
}
span.hightlight{
    background: yellow;
}
.banner{
   min-height: calc(100%)
}
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
section {
  height: auto;
  width: 100%;
  display: grid;
  place-items: center;
}
.row {
  display: flex;
  flex-wrap: wrap;
}
.column {
  width: 100%;
  padding: 0 1em 1em 1em;
  text-align: center;
}
.card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  background: linear-gradient(#ffffff 50%, #2c7bfe 50%);
  background-size: 100% 200%;
  background-position: 0 2.5%;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  transition: 0.5s;
}
h3 {
  font-size: 20px;
  font-weight: 600;
  color: #1f194c;
  margin: 1em 0;
}
p {
  color: #575a7b;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
}
.icon-wrapper {
  background-color: #2c7bfe;
  position: relative;
  margin: auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: #ffffff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  transition: 0.5s;
}
.card:hover {
  background-position: 0 100%;
}
.card:hover .icon-wrapper {
  background-color: #ffffff;
  color: #2c7bfe;
}
.card:hover h3 {
  color: #ffffff;
}
.card:hover p {
  color: #f0f0f0;
}
@media screen and (min-width: 768px) {
  section {
    padding: 0 2em;
  }
  .column {
    flex: 0 50%;
    max-width: 50%;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em 3em;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
  }
}

.carousel {
    margin-left: 2%;
    margin-right: 2%;
}

ul.slides {
    display: block;
    position: relative;
    height: 600px;
    margin: 0;
    padding: 0;
    overflow: hidden;
    list-style: none;
}

.slides * {
    user-select: none;
    -ms-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -webkit-touch-callout: none;
}

ul.slides input {
    display: none; 
}


.slide-container { 
    display: block; 
}

.slide-image {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    opacity: 0;
    transition: all .7s ease-in-out;
}   

.slide-image img {
    width: auto;
    min-width: 100%;
    height: 100%;
}

.carousel-controls {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
    font-size: 100px;
    line-height: 600px;
    color: #fff;
}

.carousel-controls label {
    display: none;
    position: absolute;
    padding: 0 20px;
    opacity: 0;
    transition: opacity .2s;
    cursor: pointer;
}

.slide-image:hover + .carousel-controls label{
    opacity: 0.5;
}

.carousel-controls label:hover {
    opacity: 1;
}

.carousel-controls .prev-slide {
    width: 49%;
    text-align: left;
    left: 0;
}

.carousel-controls .next-slide {
    width: 49%;
    text-align: right;
    right: 0;
}

.carousel-dots {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 20px;
    z-index: 999;
    text-align: center;
}

.carousel-dots .carousel-dot {
    display: inline-block;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #fff;
    opacity: 0.5;
    margin: 10px;
}

input:checked + .slide-container .slide-image {
    opacity: 1;
    transform: scale(1);
    transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .carousel-controls label {
     display: block; 
}

input#img-1:checked ~ .carousel-dots label#img-dot-1,
input#img-2:checked ~ .carousel-dots label#img-dot-2,
input#img-3:checked ~ .carousel-dots label#img-dot-3,
input#img-4:checked ~ .carousel-dots label#img-dot-4,
input#img-5:checked ~ .carousel-dots label#img-dot-5,
input#img-6:checked ~ .carousel-dots label#img-dot-6 {
	opacity: 1;
}


input:checked + .slide-container .nav label { display: block; }

body { background: #141f31;}
h1 { font-size: 32px; margin-top: 30px; margin-bottom: 40px; text-align: center; font-weight: bold; color: #ffffff;}
.dealwrapper { max-width: 320px; background: #ffffff; border-radius: 8px; -webkit-box-shadow: 0px 0px 50px rgba(0,0,0,0.15); -moz-box-shadow: 0px 0px 50px rgba(0,0,0,0.15); box-shadow: 0px 0px 50px rgba(0,0,0,0.15); position: relative;}
.list-group { position: relative; display: block; background-color: #fff; border-radius: 5px;}
.list-group h4 { font-size: 18px; margin-top: 6px;  margin-bottom: 10px;}
.list-group p { font-size: 13px; line-height: 1.4; margin-bottom: 10px; font-style: italic;}
.list-group-item { display: block; padding: 10px 25px 10px 15px; border: 1px solid rgba(221, 221, 221, 0.25); text-decoration: none;}
.list-group-item .heading { color: #141f31;}
.list-group-item .text { color: #272727;}
.list-group-item.active .heading, .list-group-item.active .text { color: #ffffff;}

.ribbon-wrapper { width: 88px; height: 88px; overflow: hidden; position: absolute; top: -3px; right: -3px; z-index: 1;}
.ribbon-tag { text-align: center; -webkit-transform: rotate(45deg); -moz-transform: rotate(45deg); -ms-transform: rotate(45deg); -o-transform: rotate(45deg); position: relative; padding: 6px 0; left: -4px; top: 15px; width: 120px; color: #ffffff; -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3); -moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.3); box-shadow: 0px 0px 3px rgba(0,0,0,0.3); text-shadow: rgba(255,255,255,0.5) 0px 1px 0px; background: #343434; }

.ribbon-tag:before, .ribbon-tag:after { content: ""; border-top: 3px solid #50504f; border-left: 3px solid transparent; border-right: 3px solid transparent; position:absolute; bottom: -3px;}
.ribbon-tag:before { left: 0;}
.ribbon-tag:after { right: 0;}

.dealwrapper.purple .ribbon-tag { background: rgba(203,96,179,1);
background: -moz-linear-gradient(top, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(203,96,179,1)), color-stop(50%, rgba(193,70,161,1)), color-stop(51%, rgba(168,0,119,1)), color-stop(100%, rgba(219,54,164,1)));
background: -webkit-linear-gradient(top, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
background: -o-linear-gradient(top, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
background: -ms-linear-gradient(top, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
background: linear-gradient(to bottom, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 50%, rgba(168,0,119,1) 51%, rgba(219,54,164,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cb60b3', endColorstr='#db36a4', GradientType=0 );}

.dealwrapper.red .ribbon-tag { background: rgba(248,80,50,1);
background: -moz-linear-gradient(top, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 50%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(248,80,50,1)), color-stop(50%, rgba(241,111,92,1)), color-stop(51%, rgba(246,41,12,1)), color-stop(71%, rgba(240,47,23,1)), color-stop(100%, rgba(231,56,39,1)));
background: -webkit-linear-gradient(top, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 50%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
background: -o-linear-gradient(top, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 50%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
background: -ms-linear-gradient(top, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 50%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
background: linear-gradient(to bottom, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 50%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f85032', endColorstr='#e73827', GradientType=0 );}

.dealwrapper.blue .ribbon-tag { background: rgba(73,73,250,1);
background: -moz-linear-gradient(top, rgba(73,73,250,1) 0%, rgba(106,69,255,1) 50%, rgba(8,0,247,1) 51%, rgba(64,54,209,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(73,73,250,1)), color-stop(50%, rgba(106,69,255,1)), color-stop(51%, rgba(8,0,247,1)), color-stop(100%, rgba(64,54,209,1)));
background: -webkit-linear-gradient(top, rgba(73,73,250,1) 0%, rgba(106,69,255,1) 50%, rgba(8,0,247,1) 51%, rgba(64,54,209,1) 100%);
background: -o-linear-gradient(top, rgba(73,73,250,1) 0%, rgba(106,69,255,1) 50%, rgba(8,0,247,1) 51%, rgba(64,54,209,1) 100%);
background: -ms-linear-gradient(top, rgba(73,73,250,1) 0%, rgba(106,69,255,1) 50%, rgba(8,0,247,1) 51%, rgba(64,54,209,1) 100%);
background: linear-gradient(to bottom, rgba(73,73,250,1) 0%, rgba(106,69,255,1) 50%, rgba(8,0,247,1) 51%, rgba(64,54,209,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4949fa', endColorstr='#4036d1', GradientType=0 );}


.purple .list-group-item.active, .purple .list-group-item.active:focus, .purple .list-group-item.active:hover { background: rgba(222,54,184,1); border-color: #c653aa;}
.red .list-group-item.active, .red .list-group-item.active:focus, .red .list-group-item.active:hover { background: rgba(248,80,50,1); border-color: #e23819;}
.blue .list-group-item.active, .blue .list-group-item.active:focus, .blue .list-group-item.active:hover { background: rgba(73,73,250,1); border-color: #2525e0;}

*
{
padding:0;
margin:0;
}
body
{
overflow-x:hidden;
font-family:'PT Sans', sans-serif;
}
.section-container
{
--bs-gutter-x: 1.5rem;
--bs-gutter-y: 0;
display: flex;
flex-wrap: wrap;
}
.section-container .columns
{
flex:0 0 auto;
width:50%;
}
.section-container .columns.image
{
background-position:center;
background-repeat:no-repeat;
background-size:cover;
}
.section-container .columns.content .content-container
{
padding:40px 50px;
}
.section-container .columns.content .content-container h5
{
font-weight:700;
font-size:25px;
margin-bottom:20px;
}
.section-container .columns.content .content-container p
{
font-weight:400;
font-size:16px;
margin-bottom:20px;
margin-bottom:15px;
text-align:justify;
}
@media screen and (max-width:767px)
{
.section-container
{
flex-flow:row wrap;
}
.section-container .columns.image{
display:block;
order:1;
width:100%;
height:250px;
}
.section-container .columns.content
{
display:block;
order:2;
width:100%;
}
.section-container .columns.content .content-container
{
padding:20px 35px;
}
.section-container .columns.content .content-container h5
{
margin-bottom:5px;
}
}

</style>
  
      <div>
  <div class="carousel">
    <ul class="slides">
      <input type="radio" name="radio-buttons" id="img-1" checked />
      <li class="slide-container">
        <div class="slide-image" >
          <img src="assets/img/main.jpg"  width="1100" height="500">
        </div>
        <div class="carousel-controls">
          <label for="img-3" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-2" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-2" />
      <li class="slide-container">
        <div class="slide-image" >
          <img src="assets/img/my2.jpg"   width="1100" height="500">
        </div>
        <div class="carousel-controls">
          <label for="img-1" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-3" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-3" />
      <li class="slide-container">
        <div class="slide-image" >
          <img src="assets/img/slide 2.jpg"  width="1100" height="500">
        </div>
        <div class="carousel-controls">
          <label for="img-2" class="prev-slide">
            <span>&lsaquo;</span>
          </label>
          <label for="img-1" class="next-slide">
            <span>&rsaquo;</span>
          </label>
        </div>
      </li>
      <div class="carousel-dots">
        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
      </div>
    </ul>
  </div>
</div>

       
            <div class="container mt-3 pt-2">
                <h4 class="text-center text-white">Upcoming Events</h4>
                <hr class="divider">
                <?php
                $event = $conn->query("SELECT * FROM events where date_format(schedule,'%Y-%m%-d') >= '".date('Y-m-d')."' order by unix_timestamp(schedule) asc");
                while($row = $event->fetch_assoc()):
                    $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                    unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
                    $desc = strtr(html_entity_decode($row['content']),$trans);
                    $desc=str_replace(array("<li>","</li>"), array("",","), $desc);
                ?>
                <div class="card event-list" data-id="<?php echo $row['id'] ?>">
                     <div class='banner'>
                        <?php if(!empty($row['banner'])): ?>
                            <img src="admin/assets/uploads/<?php echo($row['banner']) ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt"><?php echo ucwords($row['title']) ?></b></h3>
                                <div><small><p><b><i class="fa fa-calendar"></i> <?php echo date("F d, Y h:i A",strtotime($row['schedule'])) ?></b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt"><?php echo strip_tags($desc) ?></larger>
                                <br>
                                <hr class="divider"  style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="<?php echo $row['id'] ?>">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                <?php endwhile; ?>
                
            </div>
<section>
      <div class="row">
        <h2 class="section-heading">Our Services</h2>
      </div>
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-hammer"></i>
            </div>
            <h3>Reconnect</h3>
            <p>
              Reconnect with your friends, classmates, seniors and juniors in the secured, ad-free BAUET Alumni Network.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-brush"></i>
            </div>
            <h3>Give Back</h3>
            <p>
              Give Back to your alma mater and your fellow alumni by participating in a fundraiser event, mentoring other alumni.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-wrench"></i>
            </div>
            <h3>Advance</h3>
            <p>
              Advance your career, post a job and look for open positions in the companies in your own professional network.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-truck-pickup"></i>
            </div>
            <h3>Build Career</h3>
            <p>
              Coming together is a beginning; keeping together is progress; working together is success. Self-belief and hard work will always earn you success.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-broom"></i>
            </div>
            <h3>Build Protfolio</h3>
            <p>
              Portfolio websites are an easy way to promote yourself, your brand, or your business. You'll increase your visibility for clients, managers, or employers to find you organically.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-plug"></i>
            </div>
            <h3>Find Jobs</h3>
            <p>
              Search, find and apply to job opportunities at BAUETAA. Bring your insight, imagination and healthy disregard for the impossible.
            </p>
          </div>
        </div>
      </div>
    </section>
	
<div class="section-container" style=" margin-left: 0.6%" >
         <div class="columns image" style="background-image:url('assets/img/bauetaa.jpg');">
            &nbsp;
         </div>
         <div class="columns content">
            <div class="content-container">
               <h5 style="
  font-size: 2.6vw; color: white;">Join today BAUET Alumni Association. Build your connection, reunite with everyone from your Department. Grow & evolve in your career with us. Thank You!</h5>
              
            </div>
         </div>
      </div>
<div class="container">
  <div class="horizontal">
    <div class="vertical">
      <h1>Latest News About Your Community</h1>
    </div>
  </div>
  
 <div class="row">
    <div class="verticals four" style="margin-left:20px;">
      <div class="dealwrapper purple">
        <div class="ribbon-wrapper">
          <div class="ribbon-tag">Recent</div>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">
            <img src="assets/img/bauetaa2.jpg" alt="Jane" style="width:100%">
          </a>
          
          <a href="#" class="list-group-item active">
            <h4 class="heading">BAUET Alumni Reunion</h4>
            <p class="text">BAUET অ্যালামনাই অ্যাসোসিয়েশনের মূল লক্ষ্য হল পারস্পরিক সুবিধা এবং সমন্বয়ের জন্য ছাত্র, শিক্ষক এবং ইনস্টিটিউটের জন্য একটি ভাল এবং শক্তিশালী সেতু প্রদান করা।</p>
          </a>
          
          <a href="#" class="list-group-item">
            <h4 class="heading">Published by: Admin</h4>
			<h6 class="heading">Date:November 07,2020</h6>
            <p class="text">Read More</p>
          </a>
        </div>
      </div>​
    </div>
    
    <div class="verticals four" style="margin-left:20px;">
      <div class="dealwrapper red">
        <div class="ribbon-wrapper">
          <div class="ribbon-tag">Trending</div>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">
            <img src="assets/img/bauetaa1.jpg" alt="Jane" style="width:100%">
          </a>
          
          <a href="#" class="list-group-item active">
            <h4 class="heading">BAUETAA</h4>
            <p class="text">BAUET অ্যালামনাই অ্যাসোসিয়েশনের মূল লক্ষ্য হল পারস্পরিক সুবিধা এবং সমন্বয়ের জন্য ছাত্র, শিক্ষক এবং ইনস্টিটিউটের জন্য একটি ভাল এবং শক্তিশালী সেতু প্রদান করা।</p>
          </a>
          
          <a href="#" class="list-group-item">
               <h4 class="heading">Published by: Admin</h4>
			<h6 class="heading">Date:December 29,2020</h6>
            <p class="text">Read More</p>
          </a>
        </div>
      </div>​
    </div>
    
    <div class="verticals four" style="margin-left:20px;">
      <div class="dealwrapper blue">
        <div class="ribbon-wrapper">
          <div class="ribbon-tag">Latest</div>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">
            <img src="assets/img/news1.jpg" alt="Jane" style="width:100%">
          </a>
          
          <a href="#" class="list-group-item active">
            <h4 class="heading">BAUET Day 2022</h4>
            <p class="text">১৫ ফেব্রুয়ারী ২০২২ বিশ্ববিদ্যালয় দিবস উদযাপন উপলক্ষে আনন্দ শোভাযাত্রা। আয়োজনেঃ  বাংলাদেশ আর্মি ইউনিভার্সিটি অব ইঞ্জিনিয়ারিং এন্ড টেকনোলজি (বাউয়েট), কাদিরাবাদ সেনানিবাস, নাটোর।</p>
          </a>
          
          <a href="#" class="list-group-item">
               <h4 class="heading">Published by: Admin</h4>
			<h6 class="heading">Date:February 16,2022</h6>
            <p class="text">Read More</p>
          </a>
        </div>
      </div>​
    </div>

  </div>
  
</div>

<script>
     $('.read_more').click(function(){
         location.href = "index.php?page=view_event&id="+$(this).attr('data-id')
     })
     $('.banner img').click(function(){
        viewer_modal($(this).attr('src'))
    })
    $('#filter').keyup(function(e){
        var filter = $(this).val()

        $('.card.event-list .filter-txt').each(function(){
            var txto = $(this).html();
            txt = txto
            if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                $(this).closest('.card').toggle(true)
            }else{
                $(this).closest('.card').toggle(false)
               
            }
        })
    })
</script>