<?php $title = 'Projects'; ?>
<?php $currentPage = 'Projects'; ?>

<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<script type="text/javascript">
jQuery.fn.center = function() {
    var container = $(window);
    var top = -this.height() / 2;
    var left = -this.width() / 2;
    return this.css('position', 'absolute').css({ 'margin-left': left + 'px', 'margin-top': top + 'px', 'left': '50%', 'top': '50%' });
}
</script>
<style>
    .responsive {
        max-width: 100%;
        height: auto;
        object-fit: scale-down;
        margin: auto;
    }

    header {
        background: none; 
        border: none; 
        box-shadow: none; 
        text-align: center;
    }

    .responsiveVid {
        max-width: 70%;
        height: auto;
        object-fit: scale-down;
    }

    .content1 {
        max-width: 1000px;
        padding: 20px;
        font-size: 20px;
        width: 80%;
        background-color: white;
        border: 3px 3px 12px;
        align-content: center;
        margin: auto;
        border-radius: 5px;
        box-shadow: 2px 2px 10px grey;
        display: grid;
        grid-template-columns: 60% 40%;
        grid-template-rows: 100%;
        height: auto;
    }
    .content2 {
        max-width: 1000px;
        padding: 20px;
        font-size: 20px;
        width: 80%;
        background-color: white;
        border: 3px 3px 12px;
        align-content: center;
        margin: auto;
        border-radius: 5px;
        box-shadow: 2px 2px 10px grey;
        display: grid;
        grid-template-columns: 40% 60%;
        grid-template-rows: 100%;
        height: auto;
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

    .fullBox{
      /*align-self:start;*/
      width:100%;
      height:auto;
      /* grid-row:auto; */
      align-content:center;
      /* float:left; */
    }

    .h3Header{
      /*align-self:start;*/
      width:100%;
      height:auto;
      /* grid-row:auto; */
      align-content:center;
      text-align: center;
      padding-top: 80px;
      font-size: 50px;
    }

    .leftBox{
        grid-column-start: 1;
        grid-column-end: 2;
        grid-row-start: 1;
        grid-row-end: 2;
    }

    .rightBox{
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start: 1;
        grid-row-end: 2;
      /* height:auto
      width: 30%; 
      float: right;
      grid-area: b; */
    }

    .left70Box{
      /*align-self:end;*/
      height:auto;
      /* align-content:center; */
      width: 60%; 
      float: left;
      object-fit: scale-down;
      grid-area: a;
    }

    .right70Box{
      /*align-self:end;*/
      height:auto;
      /* align-content:center; */
      /* width: 60%;  */
      float: right;
      object-fit: scale-down;
      grid-area: a;
    }

    .vid60{
        max-width: 600px !important;
        height: auto !important;
        /* object-fit: contain;
        margin: auto; */
    }

</style>

<div class="content">
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        Here's a list of some of my favourite projects I've worked on. This section is still a work in progress. I plan on adding more of my projects in the near future!
    </p>
</div>

<h3 class="h3Header">3D Printer</h3>
<div class="content">
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        This a delta 3D printer I made from scratch with a friend. It is roughly 1 meter tall, and can print structures up to half that height. It also has a printable diameter base of 25cm. The parts for this printer were all ordered online separately. The printer can print with PLA and ABS plastic filament. On the right is a 3D printed lion that it made.
    </p>
    <div class="fullBox">
        <img src="images/3DPrinterLion1000.png" class="responsive">
        <!-- <script type="text/javascript">
        $('img').center();
        </script> -->
    </div>

</div>


<h3 class="h3Header">Tweet-Heat</h3>
<div class="content1">
    <div class="rightBox">
        <p style="padding-left: 20px; margin: 0 auto; float: right">
            This project was made for a hackathon in November of 2018. It's a program that grabs live Tweets from Twitter which have location data, using an API key. Then, it plots those locations onto a heat map across North America, refreshing every 5 seconds. The more red the area is, the more people are tweeting from that area.
        </p>
    </div>
    <div class="leftBox">
        <video controls class="vid60">
            <source src="images/TweetHeatMute.mp4" type="video/mp4" style="float:left; margin-right: 20px;">  
        </video>
    </div>
</div>


<h3 class="h3Header">AudioVisualizer</h3>
<div class="content2">
    <div class="leftBox">
        <p style="padding-right: 20px; margin: 0 auto; float: left">
            This program generates a volume-frequency wave over time from any MP3/WAV file using the fast-fourier transform algorithm. This shows which frequencies (or notes) are playing, and how loud each note is playing, over the entire length of the MP3/WAV file. The data was represented with Qt, in 2D with a moving bar graph over time, as well as a partial 3D moving bar array graph over time.
        </p>
    </div>
    <div class="rightBox">
        <video controls class="vid60">
            <source src="images/AudioVisualizer.mp4" type="video/mp4" style="float: right; margin-right: 20px;">  
        </video>
    </div>
</div>


</body>
</html>