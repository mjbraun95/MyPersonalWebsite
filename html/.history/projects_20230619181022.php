<?php $title = 'Projects'; ?>
<?php $currentPage = 'Projects'; ?>

<?php include('head.php'); ?>
<div class="nav-wrapper">
    <?php include('navbar.php'); ?>
</div>
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

<div class="content">
    <p class="fullBox">
        Here's a list of some of my favourite projects I've worked on. This list is not extensive, I plan on adding more of my projects in the future!
    </p>
</div>

<a name="SPR"></a>
<h3 class="header">Seed Planting Robot</h3>
<div class="content1a">
    <div class="rightBox">
        <img src="images/Github.png" class="responsiveIcon">
        <a href="https://github.com/mjbraun95/Seed_Planting_Robot" target="_blank" class="header">Github Link</a>
        <p style="margin: 0 auto; float: left">
            This project was made in a group of 4 for our Computer Engineering Capstone Project. In this project, we designed a three-wheeled robot in a group of 4 to autonomously plant seeds in a field It uses a LiDAR camera to detect objects, GPS + motors to navigate to the planting locations, and a servo motor to dispense different seed types. The navigation system was programmed in Python and largely used the adafruit_gps library to interface with the GPS module.

            The Serial Python library was used to connect the GPS module directly using the TX and RX pins. The system stores the latitudinal and longitudinal coordinates of all the locations entered through the GUI and removes each location point from the path as it reaches it to plant the seeds.

            The motor driver board is controlled using GPIO pins from the Raspberry Pi. There is a direction input pin, as well as, a Pulse Width Modulation (PWM) input pin for each motor. The PWM input pins are used to control the speed of each motor. The DC motors have PWM outputs from their encoders, which are fed back into the Pi to send feedback on how many rotations each wheel does over time.
        </p>
    </div>
    <div class="leftBox">
        <iframe class="vid" style="float:left; margin-right: 20px;" width="560" height="315" src="https://www.youtube.com/embed/pulFcguEh7g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<a name="3D_Printer"></a>
<h3 class="header">3D Printer</h3>
<div class="content">
    <p class="fullBox">
        This is a delta 3D printer I built from scratch. It is a little over 1 meter tall, and can print structures up to half of that height. It also has a printable base diameter of 25cm. The design is similar to the Kossel XL, however this is a custom build as all of the parts were ordered individually online. The printer can print with PLA and ABS plastic filament. On the right is a lion that I printed with it. It is run using Marlin firmware and an Atmel ATMega2560 microcontroller.
    </p>
    <div class="fullBox">
        <img src="images/3DPrinterLion1000.png" class="responsive">
    </div>
</div>

<a name="Tweet_Heat"></a>
<h3 class="header">Tweet Heat</h3>
<div class="content1">
    <div class="rightBox">
        <img src="images/Github.png" class="responsiveIcon">
        <a href="https://github.com/mjbraun95/Tweet-Heat" target="_blank" class="header">Github Link</a>
        <p style="margin: 0 auto; float: left">
            This project was made for a Hackathon. It's a program that grabs live Tweets from Twitter which have location data, using an API key. Then, it plots those locations onto a heat map across North America, refreshing every 5 seconds. The more red the area is, the more people are tweeting from that area.
        </p>
    </div>
    <div class="leftBox">
        <video controls class="vid">
            <source src="videos/TweetHeatMute.mp4" type="video/mp4" style="float:left; margin-right: 20px;">  
        </video>
    </div>
</div>

<a name="Audio_Visualizer"></a>
<h3 class="header">Audio Visualizer</h3>
<div class="content2">
    <div class="leftBox">
        <img src="images/Github.png" class="responsiveIcon">
        <a href="https://github.com/mjbraun95/AudioVisualizer" target="_blank" class="header">Github Link</a>
        <p style="margin: 0 auto; float: left">
            This program generates a volume-frequency wave over time from any MP3/WAV file using the fast-fourier transform algorithm. It shows which frequencies (or notes) are playing, and how loud each note is playing, over the entire length of the MP3/WAV file. The program was made using the C++ library Qt, and the audio data was represented as a 2D, as well as a 3D moving bar graph over time.
        </p>
    </div>
    <div class="rightBox">
        <video controls class="vid">
            <source src="videos/AudioVisualizerMute.mp4" type="video/mp4" style="float: right; margin-right: 20px;">  
        </video>
    </div>
</div>

<a name="MusicBoard"></a>
<h3 class="header">Music Board</h3>
<div class="content">
    <img src="images/Github.png" class="responsiveIcon">
    <a href="https://github.com/mjbraun95/MusicBoard" target="_blank" class="header">Github Link</a> 
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        This is a music synthesizer. The interface was created using PyGame, and communicates with an Atmel ATMega2560 Microcontroller Board using C++, Arduino, and PySerial. The program can generate many different sound types, using combinations of different waveforms (sine, square, saw, etc.). You can make as many synth noises as you'd like, and compare them side-by-side. You can also hold down multiple keys at the same time to play chords.
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
            <source src="videos/MusicBoard.mp4" type="video/mp4">  
        </video>
    </div>
</div>

<a name="ISM_Parser"></a>
<h3 class="header">ISM Parser</h3>
<div class="content">
    <img src="images/Github.png" class="responsiveIcon">
    <a href="https://github.com/mjbraun95/ISM_Parser" target="_blank" class="header">Github Link</a> 
    <p class="fullBox" style="padding-bottom: 20px; margin: 0 auto;">
        This is a project I was working on this summer. It's a web scraping program which collects data from instituteforsupplymanagement.org, specifically PMI (Product Manufacturing Index) and NMI (Non-Manufacturing Index) Reports. These reports are uploaded monthly, and have information about which different parts of which goods and services industries are growing, and which parts are shrinking, relative to each other. Check out the report to find out more information about it! This program collects all that data, along with industry comments and the report date, and writes it into an Excel spreadsheet using requests, BeautifulSoup and openpyxl modules in Python. This is one part of a larger program I am making with a friend that aims to design a stock trading program.
    </p>
    <div class="fullBox">
        <video controls class="vid">
            <source src="videos/ISM_Parser.mp4" type="video/mp4">  
        </video>
    </div>
</div>

</body>
</html>