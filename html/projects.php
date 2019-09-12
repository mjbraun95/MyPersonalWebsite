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
    div.left 
    {
        background: rgb(58,58,58);
        color: rgb(58,58,58);
        /* width: 100px; */
        float: left;
    }
    div.right 
    {
        background: rgb(58,58,58);
        color: rgb(58,58,58);
        /* width: 100px; */
        float: right;
    }
    div.box 
    {
        /* border:2px solid #000000; */
    }

    /* <div class="left">
        <textarea rows="26" cols="16">
This is a 3D printer I built with a friend from scratch. It is programmed with Arduino and an Atmel ATMega 2560 Board.
        </textarea>
    </div> */
</style>
<div class="content">
    <h3 style="background: none; border: none; box-shadow: none; text-align: center;">Personal Projects</h3>
    
    <p style="padding-bottom: 20px">
        I have numerous personal projects I have worked on over the years, both software and hardware related. 
    <div>
        <img src="images/3DPrinterLion1000.png" class="responsive">
        <!-- <script type="text/javascript">
        $('img').center();
        </script> -->
    </div>
    </p>
</div>

<div class="content" style="justify-items: left">      
    <!-- <div style="padding-top: 20px; text-align: left;"> -->
    <video controls class="responsiveVid">
        <source src="images/TweetHeatMute.mp4" type="video/mp4" style="float:left; margin-right: 20px;">  
    </video>
    <p style="padding-left: 20px; margin: 0 auto;">
    This project was made for a hackathon in November of 2018. It's a program that grabs live Tweets from Twitter which have location data, using an API key. Then, it plots those locations onto a heat map across North America, refreshing every 5 seconds. The more red the area is, the more people are tweeting from that area.
    </p>
        <!-- <br>
        <p style="padding-left: 50px; margin: 0px;">

        </p>
        <br>
        <p style="padding-left: 50px; margin: 0px;">

        </p> -->
    <!-- </div> -->
</div>


</body>
</html>


    <!-- <div style="padding-top:164px; float:left;">
        <video width="480" height="853" controls>
            <source src="images/TweetHeatMute.mp4" type="video/mp4" class="responsive">
        </video> 
    </div>
    <div style="padding-top:164px; float:left;">
        <textarea rows="4" cols="50">
This is a program that grabs live Tweets from Twitter which have location data. It then plots those locations onto a heat map across North America.
        </textarea>
    </div>
    <div style="padding-top:600px; float:right">

        <video width="480" height="853" controls>
            <source src="images/AudioVisualizer.mp4" type="video/mp4" class="responsive">
        </video> 
    </div>
    <div style="padding-top:164px; float:right;">
        <textarea rows="5" cols="50">
This program generates a soundwave from any MP3 file using the fast-fourier transform algorithm. This shows which frequencies are playing at what volume, over the entire length of the MP3 file. 
        </textarea>
    </div> -->

    <!-- </div> -->
        <!-- <img src="images/3DPrintedLion.jpg" width="256" height="352" class="rotate" alt="3D Printed Lion" align="right" />
        <img src="images/3DPrinter.png" width="196" height="256"  alt="3D Printer" align="left" />
        <img src="images/TweetHeat.webm" alt="Twitter Heatmap"> -->

    <!-- </div> -->
