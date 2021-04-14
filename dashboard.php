<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style1.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script type='text/javascript' src='loadImg.js'></script>
<script type='text/javascript'>
    $(function(){
        $('img').imgPreload()
    })
    
</script>
</head>
<div class="se-pre-con"></div>
<body>
<div class="grid-container">
      <div class="menu-icon">
        <strong> &#9776;</strong>
      </div>
      <header class="header">
      <p>Hallo, <?php echo $_SESSION['username']; ?>!</p>
        <p><a href="logout.php">Logout</a></p>
      </header>
      <aside class="aside">
        <div class="aside_close-icon">
          <strong>&times;</strong>
        </div>
        <ul class="aside_list">
          <li class="aside_list-item">Kosten Berekenaar</li>
          <li class="aside_list-item">Huis Aanpassen</li>
          <li class="aside_list-item">License</li>
          <li class="aside_list-item">Instellingen</li>
        </ul>
      </aside>
      <main class="main">
        <div class="main_overview">
          <div class="overview_card">
            <div class="overview_card-info">Gas Kosten
              <h2>€104,-</h2>
            </div>
          </div>
          <div class="overview_card">
            <div class="overview_card-info">Energie Kosten
              <h2>€83,-</h2>
            </div>
          </div>
          <div class="overview_card">
            <div class="overview_card-info">Water Kosten
              <h2>€105,-</h2>
            </div>
          </div>
          <div class="overview_card">
            <div class="overview_card-info">Temperatuur<div id="m-booked-bl-simple-26995"> <div class="booked-wzs-160-110 weather-customize" style="background-color:#137AE9;width:160px;" id="width1"> <div class="booked-wzs-160-110_in"> <a target="_blank" class="booked-wzs-top-160-110" href="https://www.booked.net/"><img src="//s.bookcdn.com/images/letter/s5.gif" alt="booked.net" /></a> <div class="booked-wzs-160-data"> <div class="booked-wzs-160-left-img wrz-18"></div> <div class="booked-wzs-160-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>6</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d"><span class="plus">+</span>7&deg;</div> <div class="booked-wzs-day-n"><span class="plus">+</span>4&deg;</div> </div> </div> <div class="booked-wzs-160-info"> <div class="booked-wzs-160-city">Amsterdam</div> <div class="booked-wzs-160-date">Tuesday, 16</div> </div> </div> </div> <a target="_blank" href="https://www.booked.net/weather/amsterdam-18051" class="booked-wzs-bottom-160-110"> <div class="booked-wzs-center"><span class="booked-wzs-bottom-l"> See 7-Day Forecast</span></div> </a> </div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-160.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-bl-simple-26995'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=6;cityID=18051;type=1;scode=124;ltid=3457;domid=w209;anc_id=29616;countday=undefined;cmetric=1;wlangID=1;color=137AE9;wwidth=160;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';wstrackId=345186';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end --></div>
          </div>
        </div>

        <div class="main_cards">
          <div class="card">
          <figure aria-hidden="true">
          Verbruik Overview
    <div class="graph">
        <span class="graphRowLabel">3000</span>
        <span class="graphRowLabel">2500</span>
        <span class="graphRowLabel">2000</span>
        <span class="graphRowLabel">1500</span>
        <span class="graphRowLabel">1000</span>
        <span class="graphRowLabel">750</span>
        <span class="graphRowLabel">500</span>
        <span class="graphRowLabel">250</span>
        <span class="graphRowLabel">0</span>
        <div  class="graphBar"></div>
        <div  class="graphBar"></div>
        <div  class="graphBar"></div>
        <div  class="graphBar"></div>
        <div  class="graphBar"></div>
    </div>
</figure>
</div>
          <div class="card">Temperatuur Aanpassen
          <div class="temp">
          <input id=demoInput type=number min=15 max=30 placeholder="20">
<button onclick="increment()">+</button>
<button onclick="decrement()">-</button>
          </div>
            </div>
          <div class="card">Lampen Aanzetten
          <div class="lamp"><label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<div class="kleur">
<label for="kleurtext">Kleur:</label>
  <select name="kleur" id="kleur">
    <option value="rood">Rood</option>
    <option value="groen">Groen</option>
    <option value="paars">Paars</option>
    <option value="blauw">Blauw</option>
  </select>
            </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="footer">
        <div class="footer_copyright">&copy;2021</div>
        <div class="footer_byline">Gemaakt door Sem Hiel & Finn Mulder</div>
      </footer>
    </div>
    <script type="text/javascript">
    $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
    function increment() {
      document.getElementById('demoInput').stepUp();
   }
   function decrement() {
      document.getElementById('demoInput').stepDown();
   }
      const menuIcon = document.querySelector('.menu-icon');
      const aside = document.querySelector('.aside');
      const asideClose = document.querySelector('.aside_close-icon');

      function toggle(el, className) {
        if (el.classList.contains(className)) {
          el.classList.remove(className);
        } else {
          el.classList.add(className);
        }
      }

      menuIcon.addEventListener('click', function() {
        toggle(aside, 'active');
      });

      asideClose.addEventListener('click', function() {
        toggle(aside, 'active');
      });
      
    </script>
    <script src="scripts/request.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
    </style>
</body>
</html>