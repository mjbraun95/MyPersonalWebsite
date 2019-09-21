<?php $title = 'Projects'; ?>
<?php $currentPage = 'Projects'; ?>

<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

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
        font-size: 2vw;
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
        font-size: 2vw;
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
    @media screen and (min-width: 1920px) {
        .content2 {
     font-size: 36px;
  }
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
      /* font-size: 50px; */
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

    .vid{
        max-width: 100%;
        height: auto;
        object-fit: scale-down;
        /* object-fit: contain;
        margin: auto; */
    }

</style>

<div class="content">
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        Here's a list of some of my favourite projects I've worked on. This section is still a work in progress. I plan on adding more of my projects in the near future!
    </p>
</div>

<a name="3D_Printer"></a>
<h3 class="h3Header">3D Printer</h3>
<div class="content">
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        This is a delta 3D printer I built from scratch. It is roughly 1 meter tall, and can print structures up to half that height. It also has a printable diameter base of 25cm. It is a similar build to a Kossel he parts for this printer were all ordered online separately. The printer can print with PLA and ABS plastic filament. On the right is a lion that I printed with it.
    </p>
    <div class="fullBox">
        <img src="images/3DPrinterLion1000.png" class="responsive">
    </div>
</div>

<a name="Tweet_Heat"></a>
<h3 class="h3Header">Tweet Heat</h3>
<div class="content1">
    <div class="rightBox">
        <p style="padding-left: 20px; margin: 0 auto; float: right">
            This project was made for a hackathon in November of 2018. It's a program that grabs live Tweets from Twitter which have location data, using an API key. Then, it plots those locations onto a heat map across North America, refreshing every 5 seconds. The more red the area is, the more people are tweeting from that area.
        </p>
    </div>
    <div class="leftBox" style="margin-right: 20px">
        <video controls class="vid">
            <source src="videos/TweetHeatMute.mp4" type="video/mp4" style="float:left; margin-right: 20px;">  
        </video>
    </div>
</div>

<a name="Audio_Visualizer"></a>
<h3 class="h3Header">Audio Visualizer</h3>
<div class="content2">
    <div class="leftBox">
        <p style="padding-right: 20px; margin: 0 auto; float: left">
            This program generates a volume-frequency wave over time from any MP3/WAV file using the fast-fourier transform algorithm. This shows which frequencies (or notes) are playing, and how loud each note is playing, over the entire length of the MP3/WAV file. The data was represented with Qt, in 2D with a moving bar graph over time, as well as a partial 3D moving bar array graph over time.
        </p>
    </div>
    <div class="rightBox" style="margin-left: 20px">
        <video controls class="vid">
            <source src="videos/AudioVisualizerMute.mp4" type="video/mp4" style="float: right; margin-right: 20px;">  
        </video>
    </div>
</div>

<a name="MusicBoard"></a>
<h3 class="h3Header">Music Board</h3>
<div class="content">
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        This is a music synthesizer. The interface was created using PyGame, and communicates with an Atmel ATMega2560 Board using C++, Arduino, and PySerial. The program can generate many different sound types, using combinations of different waveforms (sine, square, saw, etc.). You can make as many synth noises as you'd like, and compare them side-by-side. You can also hold down multiple keys at the same time to play chords.
    </p>
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        The synthesizer also includes features such as ADSR, LFO, and frequency range filtering.  
    </p>
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        ADSR (attack, decay, sustain, release) affects the volume of the note as you hold it over time.
    </p>
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        LFO (low frequency oscillator) creates a "wobbly" effect on the note, so as you hold the note down, the frequency moves up and down. 
    </p>
    <div class="fullBox">
        <video controls class="vid">
            <source src="videos/MusicBoard2.mp4" type="video/mp4">  
        </video>
    </div>
</div>

<a name="ISM_Parser"></a>
<h3 class="h3Header">ISM Parser</h3>
<div class="content1">
    <div class="rightBox">
        <p style="padding-left: 20px; margin: 0 auto; float: right">
            This is a project I was working on this summer. It's a web scraping program which collects data from instituteforsupplymanagement.org, specifically PMI (Product Manufacturing Index) and NMI (Non-Manufacturing Index) Reports. These reports are uploaded monthly, and have information about which different parts of which goods and services industries are growing, and which parts are shrinking, relative to each other. Check out the report to find out more information about it! This program collects all that data, along with industry comments and the report date, and writes it into an Excel spreadsheet using requests, BeautifulSoup and openpyxl modules in Python. This is one part of a larger program I am making with a friend that aims to design an algorithmic stock trading program which can invest in stocks profitably and autonomously.
        </p>
    </div>
    <div class="leftBox" style="margin-right: 20px">
        <video controls class="vid">
            <source src="videos/ISM_Parser.mp4" type="video/mp4" style="float:left; margin-right: 20px;">  
        </video>
    </div>
</div>

</body>
</html>