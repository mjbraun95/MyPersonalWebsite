<?php $title = 'Projects'; ?>
<?php $currentPage = 'Projects'; ?>

<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<script type="text/javascript">
// jQuery.fn.center = function() {
//     var container = $(window);
//     var top = -this.height() / 2;
//     var left = -this.width() / 2;
//     return this.css('position', 'absolute').css({ 'margin-left': left + 'px', 'margin-top': top + 'px', 'left': '50%', 'top': '50%' });
// }
</script>
<style>

    .content1 {
        grid-template-columns: 70% 30%;
        max-width: 1000px;
        padding: 20px;
        font-size: 20px;
        width: 80%;
        background-color: white;
        border: 3px 3px 12px;
        align-content: center;
        margin: auto;
        border-radius: 5px;
        box-shadow: 2px 2px 10px grey
    }
    .content2 {
        grid-template-columns: 30% 70%;
        max-width: 1000px;
        padding: 20px;
        font-size: 20px;
        width: 80%;
        background-color: white;
        border: 3px 3px 12px;
        align-content: center;
        margin: auto;
        border-radius: 5px;
        box-shadow: 2px 2px 10px grey
    }

    .wrapper{
        display:grid;
        grid-gap:1em;
    }
    .wrapper > div{
        background:#eee;
        padding:1em;
    }
    .printerVid {

    }

    .box1{
      /*align-self:start;*/
      width:100%;
      height:auto;
      grid-row:auto;
      align-content:center;
      /* float:left; */
    }

    .box2{
      /*align-self:end;*/
      height:auto;
      grid-row:auto;
      /* align-content:center; */
      width: 30%; 
      float: right;
    }

    .box3{
      /*align-self:end;*/
      height:auto;
      grid-row:auto;
      /* align-content:center; */
      width: 70%; 
      float: left;
    }

    .box4{
      grid-column:1;
      grid-row:2/4; 
      /* border:1px solid #333; */
    }
    .
</style>

<div class="content">
    <h3 style="background: none; border: none; box-shadow: none; text-align: center;">3D Printer</h3>
    
    <p class="box1" style="padding-bottom: 20px; margin: 0 auto;">
        This a delta 3D printer I made from scratch with a friend. It is roughly 1 meter tall, and can print structures up to half that height. It also has a printable diameter base of 25cm. The parts for this printer were all ordered online separately. The printer can print with PLA and ABS plastic filament. On the right is a 3D printed lion that it made.
    </p>
    <div class="box1">
        <img src="images/3DPrinterLion1000.png" class="responsive">
        /* <!-- <script type="text/javascript">
        $('img').center();
        </script> --> */
    </div>

</div>

<div class="content2">
/*  <!--- Tweet-Heat-->       */
    <h3>Tweet-Heat</h3>
    /* <div class="box2"> --> */
    <p>
    This project was made for a hackathon in November of 2018. It's a program that grabs live Tweets from Twitter which have location data, using an API key. Then, it plots those locations onto a heat map across North America, refreshing every 5 seconds. The more red the area is, the more people are tweeting from that area.
    </p>
    /* </div> */
    <div style="width: 70%; height: auto; float: left;">
        <video controls class="responsiveVid">
            <source src="images/TweetHeatMute.mp4" type="video/mp4" style="float:left; margin-right: 20px;">  
        </video>
    </div>
</div>


<div class="content">
 /* <!--- AudioVisualizer-->    */
    <h3 style="background: none; border: none; box-shadow: none; text-align: center;">AudioVisualizer</h3>
    <div style="width: 70%; height: auto; float: right;">
        <video controls class="responsiveVid">
            <source src="images/AudioVisualizer.mp4" type="video/mp4" style="float: right; margin-right: 20px;">  
        </video>
    </div>
    <div style="width: 30%; height: auto; float: left;">
        <p style="padding-left: 20px; margin: 0 auto; float: left">
        This program generates a volume-frequency wave over time from any MP3/WAV file using the fast-fourier transform algorithm. This shows which frequencies (or notes) are playing, and how loud each note is playing, over the entire length of the MP3/WAV file. The data was represented with Qt, in 2D with a moving bar graph over time, as well as a partial 3D moving bar array graph over time.
        </p>
    </div>
</div>


</body>
</html>