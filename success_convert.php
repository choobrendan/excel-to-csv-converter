<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://www.dafontfree.net/embed/Z291ZHktaGFuZHRvb2xlZC1yZWd1bGFyJmRhdGEvMjUvZy8xMjc2MjYvR291ZHlIYW5kdG9vbGVkLnR0Zg" rel="stylesheet" type="text/css" />
    <title>
        CAT201 Assignment
    </title>
</head>

<body>
    <!-- <div class="gear-container" id="gear-container-1">
    <div class="gear">
      <div class="center"></div>
      <div class="tooth"></div>
      <div class="tooth"></div>
      <div class="tooth"></div>
      <div class="tooth"></div>
    </div> 
  </div>
  
  <div class="gear-container" id="gear-container-2">
    <div class="gear">
      <div class="center"></div>
      <div class="tooth"></div>
      <div class="tooth"></div>
      <div class="tooth"></div>
      <div class="tooth"></div>
    </div> 
  </div> -->

    <section class="sec" id="sec-1">
        <!-- <div class="archive">
      PLACEHOLDER FOR ARCHIVE
    </div> -->

        <div class="wrapper">
            <div class="header">
                <img class="board" src="images/board.png">
                <h1 class="title">XL S to CSV Converter</h1>
            </div>

            <div class="box">
                <form action="upload.php" method="post" enctype="multipart/form-data" id="form-convert">
                    <div class="ornament" id="ornament-1">
                        <img class="ornament-obj" src="images/ornament-1.png" height="200px">
                        <label for="uploadFile" id="button-words-1" class="button">
                            <p>Upload</p>
                            <input type="file" id="uploadFile" name="uploadFile" accept="application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" hidden />
                        </label>
                    </div>

                    <div class="ornament" id="ornament-2">
                        <img class="ornament-obj" src="images/ornament-1.png" height="200px">
                        <label for="submit" id="button-words-2" class="button">
                            <p>Start</p>
                            <input type="submit" id="submit" hidden />
                        </label>
                    </div>

                    <div class="ornament" id="ornament-3">
                        <img class="ornament-obj" src="images/ornament-1.png" height="200px">
                        <div class="button" id="button-words-3">
                            <?php
                            $converted_excel_file = $_GET['converted_file'];
                            echo '
                            <p><a href="download.php?converted_excel_file=' . $converted_excel_file . '">Download</a></p>'
                            ?>
                        </div>
                    </div>
                </form>
            </div>

            <div class="instructions">
                <p class="instruction-words" id="instruction-1">Select files by pressing 'Upload' or dragging it on the speech
                    bubble.</p>
                <p class="instruction-words" id="instruction-2">Press "Start" to begin the conversion!</p>
                <p class="instruction-words" id="instruction-3">Let the file convert and you can download your csv file right
                    afterwards</p>
            </div>

            <div class="chains-container">
                <!-- <img src="images/chain.png" alt="chain" class="chain">
        <img src="images/chain.png" alt="chain" class="chain">
        <img src="images/chain.png" alt="chain" class="chain">
        <img src="images/chain.png" alt="chain" class="chain">
        <img src="images/chain.png" alt="chain" class="chain">
        <img src="images/chain.png" alt="chain" class="chain">
        <img src="images/chain.png" alt="chain" class="chain"> -->
            </div>

            <div class="main-container">
                <div class="sub-container" id="sub-container-1">
                    <div class="main-machine-part">
                        <div class="opening" id="entry">
                            <div class="partition"></div>
                            <div class="partition"></div>
                            <div class="partition"></div>
                        </div>
                        <div class="main-machine-body">
                            <div class="sub-machine-body"></div>
                        </div>
                        <div class="opening" id="exit">
                            <div class="partition"></div>
                            <div class="partition"></div>
                            <div class="partition"></div>
                        </div>
                    </div>
                    <div class="gauge-body">
                        <img src="images/gauge.png" height="175px">

                    </div>
                    <div class="pointer">
                        <img src="images/pointer.png" height="130px">
                    </div>
                    <div class="track">
                        <div class="sub-track" id="track-1">
                            <div class="excel-container">
                                <div class="speech-container">
                                    <!-- <img src="images/speech flip.png" alt="bubble" class="speech-bubble"> -->
                                    <div class="talk-bubble tri-right round btm-left">
                                        <div class="talktext">

                                        </div>
                                    </div>
                                </div>
                                <div class="sub-excel-container">
                                    <img src="images/excel 1.svg" alt="excel" class="excel">
                                </div>
                            </div>
                        </div>
                        <div class="sub-track" id="track-2">
                            <img src="images/csv 1.svg" alt="csv" class="csv">
                        </div>
                    </div>
                </div>
                <div class="sub-container" id="sub-container-2">
                    <div class="conveyor-belt">
                        <div class="sub-conveyor-belt">
                            <ul>
                                <li class="cog" id="cog-1"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                                <li class="cog" id="cog-2"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                                <li class="cog" id="cog-3"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                                <li class="cog" id="cog-4"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                                <li class="cog" id="cog-5"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                                <li class="cog" id="cog-6"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                                <li class="cog" id="cog-7"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                                <li class="cog" id="cog-8"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                                <li class="cog" id="cog-9"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                                <li class="cog" id="cog-10"><img src="images/gear.png" aria-hidden="true" height="90px"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="sub-container" id="sub-container-3">
          <div class="beam"></div>
          <div class="support-container" id="support-container-1">
            <div class="support" id="support-1"></div>
            <div class="support" id="support-2"></div>
          </div>
          <div class="support-container" id="support-container-2">
            <div class="support" id="support-3"></div>
            <div class="support" id="support-4"></div>
          </div>
        </div> -->
            </div>
            <div class="scroll-container">
                <a href="#sec-2">
                    <div class="scroll-down"></div>
                </a>
                <div class="scroll-instruction-container">
                    <p class="scroll-instruction" id="scroll-down-instruction">Click or scroll down for more instructions!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sec" id="sec-2">
        <div class="wrapper" id="wrapper-2">
            <div class="scroll-container" id="scroll-up-container">
                <a href="#sec-1">
                    <div class="scroll-up"></div>
                </a>
                <div class="scroll-instruction-container">
                    <p class="scroll-instruction" id="scroll-up-instruction">Click or scroll up for conversion!</p>
                </div>
            </div>
            <div class="about-us">
                <div class="about-us-header">
                    <img class="board" src="images/board.png">
                    <h1 class="about-us-word">About Us</h1>
                </div>
                <div class="about-us-desc">
                    <p>We are 4 people from CAT201 CS USM ready to change da world with our epic programming skillz</p>
                </div>
                <div class="people">
                    <div class="tty">
                        <img src="images/taiyu.png" height="300px">
                    </div>
                    <div class="yeo">
                        <img src="images/yingsheng.png" height="300px">
                    </div>
                    <div class="choo">
                        <img src="images/brendanchoo.png" height="300px">
                    </div>
                    <div class="dick">
                        <img src="images/dick.png" height="300px">
                    </div>
                </div>
                <div class="names">
                    <a class="ind-name" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Then Tai Yu</a>
                    <a class="ind-name" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Yeo Ying Sheng</a>
                    <a class="ind-name" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Brendan Choo</a>
                    <a class="ind-name" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Dickson Tan</a>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>