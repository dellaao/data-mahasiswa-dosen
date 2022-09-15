<!-- Main jumbotron for a primary marketing message or call to action -->
<head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Montserrat&display=swap");
    body, html {
      margin: 0;
      padding: 0;
      background: #95edff;
      background: linear-gradient(0deg, rgba(149, 237, 255, 1) 0%, rgba(31, 151, 254, 1) 100%);
      color: rgba(57, 62, 65, 1);
      width: calc(100% - 2em);
      font-family: "Montserrat", sans-serif;
      display: flex;
      flex-flow: column;
      min-height: 80vh;
      transition: 1s;
    }
    h1 {
      position: fixed;
      text-align: center;
      width: 100%;
    }
    h1 img {
      width: 50vh;
    }
    h1 .header {
      font-family: "Press Start 2P", cursive;
      text-transform: uppercase;
      font-size: 1.2em;
      margin: 0;
      padding: 0;
      color: white;
      text-shadow: 0.1em 0.1em red;
      width: 100%;
    }
    h1 .description {
      font-family: "Press Start 2P", cursive;
      font-size: 0.25em;
      text-align: center;
      width: 50%;
      margin: 1em auto;
      line-height: 1.5em;
    }
    ul {
      width: auto;
      white-space: nowrap;
      margin: 0;
      padding: 0;
      list-style: none;
      position: absolute;
      bottom: 20vh;
      margin-left: 80vw;
      padding-right: 50vw;
    }
    ul:before {
      content: "";
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 20vh;
      background-image: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/a0d4f96a4aa2122.png);
      background-size: 2em;
    }
    ul li.click:not(.active):not(.visited):before {
      content: "click \A \25BC";
      display: block;
      position: absolute;
      top: -3em;
      white-space: pre-wrap;
      text-align: center;
      font-family: "Press Start 2P", cursive;
      font-size: 0.7em;
      font-weight: bold;
      left: calc(0px - 1em);
      width: 5em;
      opacity: 0.5;
      animation: click 1s ease-in-out 0s infinite normal forwards;
    }
    @keyframes click {
      0%, 100% {
        transform: translateY(-0.3em);
      }
      50% {
        transform: translateY(0.3em);
      }
    }
    ul li {
      display: inline-block;
      width: 25vw;
      overflow: hidden;
      margin: 0;
      padding: 0;
      white-space: normal;
    }
    ul li .overlay {
      display: none;
      padding-right: 1em;
      padding-left: 1em;
    }
    ul li .overlay:before {
      content: "..";
      position: absolute;
      font-family: "Press Start 2P", cursive;
      text-shadow: 0.1em 0.1em black;
      left: 0;
      top: -0.3em;
      letter-spacing: 10.2em;
    }
    ul li .overlay:after {
      content: "..";
      position: absolute;
      font-family: "Press Start 2P", cursive;
      text-shadow: 0.1em 0.1em black;
      left: 0;
      bottom: 0.1em;
      letter-spacing: 10.2em;
    }
    ul li.active .overlay {
      position: fixed;
      display: block;
      bottom: 42vh;
      left: calc(50% - 6em);
      min-width: 10em;
      max-width: 10em;
      text-align: center;
      white-space: normal;
      background: #de5918;
      color: #f7d8c7;
      box-shadow: -2px 0 #f7d8c7, 0 -2px #f7d8c7, 0 2px black, 2px 0 black;
      animation: mystery-box 0.5s ease-out 0s 1 normal forwards;
      animation-delay: 0.2s;
      transform-origin: bottom center;
      transform: translateY(4em) scale(0);
    }
    @keyframes mystery-box {
      0% {
        transform: translateY(3em) scale(0);
      }
      100% {
        transform: translateY(0em) scale(1);
      }
    }
    ul li.active a {
      border: 2px solid white;
    }
    ul li a {
      display: block;
      width: 2em;
      height: 2em;
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/1d3110dedd750a9.png) no-repeat;
      background-size: 2em;
      cursor: pointer;
      border: 2px solid transparent;
      margin-bottom: 4em;
    }
    ul li a:hover {
      border: 2px solid white;
    }
    .mario {
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/4717f552c59c347.png) no-repeat;
      background-size: 2.5em;
      display: block;
      width: 2.5em;
      height: 2.3em;
      position: fixed;
      bottom: 20vh;
      left: calc(50% - 1.25em);
    }
    .mario.jump {
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/ee2ecc687ac3ded.png) no-repeat;
      background-size: 2.5em;
      bottom: calc(20vh + 2em);
    }
    time {
      display: block;
      font-family: "Press Start 2P", cursive;
      transform-origin: center;
      transform: scaleX(70%);
      margin-top: 1em;
      text-shadow: 0.1em 0.1em black;
    }
    .bush {
      position: absolute;
      bottom: 0;
      width: 9em;
      height: 2em;
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/baa2bf3f33eab8f.png) no-repeat;
      background-size: 9em;
    }
    .bush1 {
      left: -80vw;
    }
    .bush2 {
      left: 50%;
    }
    .bush3 {
      left: 27%;
    }
    .bush4 {
      right: 70vw;
    }
    .hill {
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/a3ce658940e9d15.png) no-repeat;
      background-size: 8em;
      position: absolute;
      bottom: 0;
      width: 8em;
      height: 3em;
    }
    .hill1 {
      left: -70vw;
    }
    .hill2 {
      left: 25%;
    }
    .hill3 {
      right: 65%;
    }
    .hill4 {
      right: 65vw;
    }
    .pipe {
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/ab2b05219d2a12d.png) no-repeat;
      background-size: 4em;
      position: absolute;
      bottom: 0;
      width: 10em;
      height: 4em;
    }
    .pipe1 {
      left: 10vw;
    }
    .pipe2 {
      left: 45%;
    }
    .pipe3 {
      right: 35%;
    }
    .goal {
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/c4104bf2a2cdffc.png) no-repeat;
      background-size: 2.5em;
      position: absolute;
      bottom: 0;
      right: 40vw;
      width: 2.5em;
      height: 17.5em;
    }
    .castle {
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/d73d6701fb6c0c1.png) no-repeat;
      background-size: 10em;
      position: absolute;
      bottom: 0;
      right: 0;
      width: 10em;
      height: 9em;
    }
    .cloud {
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/de22c357bcdfd0e.png) no-repeat;
      background-size: 6em;
      position: absolute;
      width: 6em;
      height: 3em;
    }
    .cloud1 {
      top: -100%;
      left: -10vw;
    }
    .cloud2 {
      top: -80%;
      left: 35%;
    }
    .cloud3 {
      top: -90%;
      right: 20%;
    }
    .cloud-s {
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/53736165bcbfe7e.png) no-repeat;
      background-size: 4em;
      position: absolute;
      width: 4em;
      height: 3em;
    }
    .cloud-s1 {
      top: -50%;
      left: -40vw;
    }
    .cloud-s2 {
      top: -40%;
      left: 10%;
    }
    .cloud-s3 {
      top: -55%;
      left: 14%;
    }
    .cloud-s4 {
      top: -95%;
      left: 40%;
    }
    .cloud-s5 {
      top: -85%;
      left: 66%;
    }
    .cloud-s6 {
      top: -55%;
      right: 14%;
    }
    .coin {
      background: url(https://pixelartmaker-data-78746291193.nyc3.digitaloceanspaces.com/image/ffe952392545e39.png) no-repeat;
      background-size: 1.5em;
      position: absolute;
      width: 2.1em;
      height: 2.1em;
      animation: coin 1.5s ease-in-out 0s infinite normal forwards;
      top: -2.5em;
      background-position: center;
    }
    @keyframes coin {
      0%, 100% {
        transform: rotateY(0) translateY(-0.3em);
      }
      50% {
        transform: rotateY(90deg) translateY(0.3em);
      }
    }
    
  </style>
</head>

<div class="container">
    <!-- Example row of columns -->
    <!-- <div class="row" id="konten">
      
    </div> -->

    <h1>
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Mario_Series_Logo.svg" alt="Super Mario Timeline" />
      <p class="header">Timeline</p>
      <p class="description">Initial launch dates of games in the Super Mario series. </p>
    </h1>

    <ul class="timeline">
      <div class="cloud cloud1"></div>
      <div class="cloud cloud2"></div>
      <div class="cloud cloud3"></div>
      <div class="cloud-s cloud-s1"></div>
      <div class="cloud-s cloud-s2"></div>
      <div class="cloud-s cloud-s3"></div>
      <div class="cloud-s cloud-s4"></div>
      <div class="cloud-s cloud-s5"></div>
      <div class="cloud-s cloud-s6"></div>
      <div class="hill hill1"></div>
      <div class="hill hill2"></div>
      <div class="hill hill3"></div>
      <div class="hill hill4"></div>
      <div class="bush bush1"></div>
      <div class="bush bush2"></div>
      <div class="bush bush3"></div>
      <div class="bush bush4"></div>
      <div class="pipe pipe1"></div>
      <div class="pipe pipe2"></div>
      <div class="pipe pipe3"></div>
      <div class="goal"></div>
      <div class="castle"></div>
      <div class="mario"></div>
      <li class="click"><a></a>
        <div class="overlay"><time datetime="1985-09">September 1985</time>
          <p>Super Mario Brothers</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="1986-06">June 1986</time>
          <p>Super Mario Bros: The Lost Levels</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="1988-10">October 1988</time>
          <p>Super Mario Bros. 2</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="1988-10">October 1988</time>
          <p>Super Mario Bros. 3</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="1989-04">April 1989</time>
          <p>Super Mario Land</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="1990-11">November 1990</time>
          <p>Super Mario World</p>
        </div>
      </li>
      <li>
        <div class="coin"></div>
        <a></a>
        <div class="overlay"><time datetime="1992-10">October 1992</time>
          <p>Super Mario Land: 6 Golden Coins</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="1995-08">August 1995</time>
          <p>Super Mario World 2: Yoshi's Island</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="1996-06">June 1996</time>
          <p>Super Mario 64</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2002-07">July 2002</time>
          <p>Super Mario Sunshine</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2006-05">May 2006</time>
          <p>New Super Mario Bros.</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2007-11">November 2007</time>
          <p>Super Mario Galaxy</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2009-11">November 2009</time>
          <p>New Super Mario Bros. Wii</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2010-05">May 2010</time>
          <p>Super Mario Galaxy 2</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2011-11">November 2011</time>
          <p>Super Mario 3D Land</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2012-07">July 2012</time>
          <p>New Super Mario Bros 2</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2012-11">November 2012</time>
          <p>New Super Mario Bros. U</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2013-11">November 2013</time>
          <p>Super Mario 3D World</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2015-09">September 2015</time>
          <p>Super Mario Maker</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2016-12">December 2016</time>
          <p>Super Mario Run</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2017-10">October 2017</time>
          <p>Super Mario Odyssey</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2019-06">June 2019</time>
          <p>Super Mario Maker 2</p>
        </div>
      </li>
      <li><a></a>
        <div class="overlay"><time datetime="2021-02">February 2021</time>
          <p>Super Mario 3D World + Bowser's Fury</p>
        </div>
      </li>
    </ul>

    <!-- <hr> -->

  </div> <!-- /container -->
<!-- 
  <script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
          url: "<?php echo base_url();?>index.php/Oprec/getListTestimoni",
        }).done(function( res ) {
            //alert( "Data Saved: " + res );
            var listTestimoni = JSON.parse(res);
            var konten="";
            for(i=0;i<listTestimoni.length;i++){
                konten+=" <div class='col-md-6'><h2>"+listTestimoni[i]['nama']+"</h2><p> "+listTestimoni[i]['konten']+" </p><p><a class='btn btn-secondary' href='#' role='button'>View details &raquo;</a></p></div>";
            }

            $("#konten").html(konten);

            //console.log(listTestimoni);
            //console.log(res);
          });


    });
  </script> -->

  <script>
    $(document).ready(() => {
    $(window).click(function () {
      $("li").removeClass("active");
    });

    $("li a").on("click", (e) => {
      e.stopPropagation();
      e.target.scrollIntoView({
        behavior: "smooth",
        block: "start",
        inline: "center"
      });
      setTimeout(() => {
        $(".mario").addClass("jump");
      }, 200);
      setTimeout(() => {
        $(".mario").removeClass("jump");
      }, 500);
      $("li").removeClass("active");
      $(e.target.parentElement).addClass("active");

      if (!$(e.target.parentElement).hasClass("visited")) {
        $(e.target.parentElement).addClass("visited");
      }
    });
  });

  </script>