<?php $title = 'Projects'; ?>
<?php $currentPage = 'Projects'; ?>

<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<style>
  div.left {
    border:2px solid #000000;
    background: rgb(0,0,0);
    color: rgb(58,58,58);
    /* width: 100px; */
    float: left;
  }
  div.right {
    border:2px solid #000000;
    background: rgb(0,0,0);
    color: rgb(58,58,58);
    /* width: 100px; */
    float: right;
  }
</style>
<div class="content">
    <h3 style="background: none; border: none; box-shadow: none; text-align: center;">Personal Projects</h3>
    
    <p style="padding-bottom: 20px">
        I have numerous personal projects I have worked on over the years, both software and hardware related.
        I have built a custom 3D printer from scratch. It is controlled with Arduino.
        <!-- <div class="half" style="display:flex; ">
            <img src="images/3DPrinter400.png"style="height:360px; float: right;">
            <img src="images/Lion400.png" style="height:360px; ">
        </div> -->
    <div class="left">
        <!-- <div class="centered"> -->
        <img src="images/3DPrinter400.png" style="height:360px;">
    </div>

    <div class="right">
    <!-- <div class="centered"> -->
        <img src="images/Lion400.png" style="height:360px;">
    </div>
    </p>
    <!-- </div> -->
        <!-- <img src="images/3DPrintedLion.jpg" width="256" height="352" class="rotate" alt="3D Printed Lion" align="right" />
        <img src="images/3DPrinter.png" width="196" height="256"  alt="3D Printer" align="left" />
        <img src="images/TweetHeat.webm" alt="Twitter Heatmap"> -->
    <!-- <div class="video-size"> -->
        <video width="270" height="480" align-content=center controls>
            <source src="images/TweetHeat.mp4" type="video/mp4">
        </video> 
    <!-- </div> -->
    <!-- </div> -->
</div>
</body>
</html>
