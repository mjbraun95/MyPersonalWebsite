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
    <h3 style="background: none; border: none; box-shadow: none; text-align: center;">3D Printer</h3>
    
    <p style="padding-bottom: 20px; margin: 0 auto;">
        This a delta 3D printer I made from scratch with a friend. It is roughly 1 meter tall, and can print structures up to half that height. It also has a printable diameter base of 25cm. The parts for this printer were all ordered online separately. The printer can print with PLA and ABS plastic filament. On the right is a 3D printed lion that it made.
    </p>
    <div>
        <img src="images/3DPrinterLion1000.png" class="responsive">
        <!-- <script type="text/javascript">
        $('img').center();
        </script> -->
    </div>

</div>

<div class="content">      
    <!-- <div style="padding-top: 20px; text-align: left;"> -->
    <h3 style="background: none; border: none; box-shadow: none; text-align: center;">Tweet-Heat</h3>
    <div style="width: 70%; height: auto; float: left;">
        <video controls class="responsiveVid">
            <source src="images/TweetHeatMute.mp4" type="video/mp4" style="float:left; margin-right: 20px;">  
        </video>
    </div>
    <div style="width: 30%; height: auto; float: right;">
        <p style="padding-left: 20px; margin: 0 auto; float: right">
        This project was made for a hackathon in November of 2018. It's a program that grabs live Tweets from Twitter which have location data, using an API key. Then, it plots those locations onto a heat map across North America, refreshing every 5 seconds. The more red the area is, the more people are tweeting from that area.
        </p>
    </div>
</div>

<div class="content">      
    <!-- <div style="padding-top: 20px; text-align: left;"> -->
    <h3 style="background: none; border: none; box-shadow: none; text-align: center;">Tweet-Heat</h3>
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