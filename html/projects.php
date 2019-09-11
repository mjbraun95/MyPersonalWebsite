<?php $title = 'Projects'; ?>
<?php $currentPage = 'Projects'; ?>

<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<style>
    div.left 
    {
        background: rgb(0,0,0);
        color: rgb(58,58,58);
        /* width: 100px; */
        float: left;
    }
    div.right 
    {
        background: rgb(0,0,0);
        color: rgb(58,58,58);
        /* width: 100px; */
        float: right;
    }
    div.box 
    {
        border:2px solid #000000;
    }
</style>
<div class="content">
    <h3 style="background: none; border: none; box-shadow: none; text-align: center;">Personal Projects</h3>
    
    <p style="padding-bottom: 20px">
        I have numerous personal projects I have worked on over the years, both software and hardware related.
        I have built a custom 3D printer from scratch. It is controlled with Arduino.
    <div class="left">
        <!-- <div class="centered"> -->
        <img src="images/3DPrinter400.png" style="height:400px;">
    </div>

    <div class="right">
    <!-- <div class="centered"> -->
        <img src="images/Lion400.png" style="height:400px;">
    </div>
    <div style="padding-top:164px; float:left;">

        <video width="360" height="640" controls>
            <source src="images/TweetHeatMute.mp4" type="video/mp4">
        </video> 

        <p style="padding-bottom: 20px">
            This is a program that grabs live Tweets from Twitter which have location data. It then plots those locations onto a heat map across North America.
        </p>
    </div>
    <div style="padding-top:600px; float:right">

        <video width="360" height="640" controls>
            <source src="images/AudioVisualizer.mp4" type="video/mp4">
        </video> 
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
