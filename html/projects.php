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
    <!-- <script type="text/javascript">
    $('div').center();
    </script> -->
    <h3 style="background: none; border: none; box-shadow: none; text-align: center;">Personal Projects</h3>
    
    <p style="padding-bottom: 20px">
        I have numerous personal projects I have worked on over the years, both software and hardware related.
    <div class="responsive">
        <img src="images/3DPrinter400.png" class="responsive">
    </div>
    <div class="responsive">
        <img src="images/Lion400.png" class="responsive">
    </div>
    <div style="padding-top:164px; float:left;">
        <video width="480" height="853" controls>
            <source src="images/TweetHeatMute.mp4" type="video/mp4">
        </video> 
    </div>
    <div style="padding-top:164px; float:left;">
        <textarea rows="4" cols="50">
This is a program that grabs live Tweets from Twitter which have location data. It then plots those locations onto a heat map across North America.
        </textarea>
    </div>
    <div style="padding-top:600px; float:right">

        <video width="480" height="853" controls>
            <source src="images/AudioVisualizer.mp4" type="video/mp4">
        </video> 
    </div>
    <div style="padding-top:164px; float:right;">
        <textarea rows="5" cols="50">
This program generates a soundwave from any MP3 file using the fast-fourier transform algorithm. This shows which frequencies are playing at what volume, over the entire length of the MP3 file. 
        </textarea>
    </div>
    </p>
    <!-- </div> -->
        <!-- <img src="images/3DPrintedLion.jpg" width="256" height="352" class="rotate" alt="3D Printed Lion" align="right" />
        <img src="images/3DPrinter.png" width="196" height="256"  alt="3D Printer" align="left" />
        <img src="images/TweetHeat.webm" alt="Twitter Heatmap"> -->

    <!-- </div> -->
</div>
</body>
</html>
