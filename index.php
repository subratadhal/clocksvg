<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>clockSVG</title>
<meta name="author" content="Subrata Dhal">
<meta name="desription" content="SVG path animation tutorial of clock.">
<meta name="keyword" content="svg,svg path,svg animation,svg animation,svg path animation">
<meta name="robots" content="index,follow">
<link rel="canonical" href="http://subratadhal.com/svg/clocksvg/" />
<link href="css/page.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/clock.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'/>
</head>

<body> 
<div id="container">
    <header>
        <h1>clockSVG</h1>
    </header>
	<section>
        <div id="svg-div">
            <div class="svg-container">
							<svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							x="0px" y="0px" width="550px" height="600px" enable-background="new 0 0 550 600" xml:space="preserve" 
							viewBox="0 0 550 600" 					 
							id="clock" > 
							<circle cx="310" cy="300" r="170" class="dial2"/>
							<circle cx="300" cy="300" r="170" class="dial"/>
							<circle cx="300" cy="300" r="150" class="center1" />
							<text class="number-small" x="363" y="202">1</text>
							<text class="number-small" x="405" y="246">2</text>
							<text class="number" x="422" y="316">3</text>
							<text class="number-small" x="400" y="377">4</text>
							<text class="number-small" x="355" y="420">5</text>
							<text class="number" x="287" y="440">6</text>
							<text class="number-small" x="225" y="420">7</text>
							<text class="number-small" x="180" y="377">8</text>
							<text class="number" x="160" y="312">9</text>
							<text class="number-small" x="225" y="202">11</text>
							<text class="number-small" x="180" y="246">10</text>
							<text class="number" x="287" y="190">12</text>
							<line x1="280"  y1="280" x2="400" y2="400" class="second" >
								<animateTransform 
									attributeName="transform"
									type="rotate"
									from="0 300 300 " to="360 300 300"
									begin="0s" dur="60s"
									repeatCount="indefinite"
								/>
							</line>
							<line x1="300"  y1="300" x2="370" y2="370" class="minute" >
								<animateTransform 
									attributeName="transform"
									type="rotate"
									from="0 300 300 " to="360 300 300"
									begin="0s" dur="180s"
									repeatCount="indefinite"
								/>
							</line>
							<line x1="300"  y1="300" x2="345" y2="345" class="hour" >
								<animateTransform 
									attributeName="transform"
									type="rotate"
									from="0 300 300 " to="360 300 300"
									begin="0s" dur="360s"
									repeatCount="indefinite"
								/>
							</line>
							<circle cx="300" cy="300" r="8" class="lines" />
							<circle cx="300" cy="300" r="2" class="lines2" />
							
							</svg>
						</div>
        </div>
        <div class="divider"></div>
    </section>
</div>
    <article>
        <header>
        	<h2>Features</h2>
        </header>
        <ul class="feature">
            <li>Based on SVG/HTML5/CSS3/Jquery</li>
            <li>Fully Customizable CSS</li>
            <li>Compatible in Firefox, Safari, Opera</li>
        </ul>
    </article>
    <div class="github-link">
        <img src="images/github.png" alt=""/>
        <p> Find the working url on <a href="https://github.com/subratadhal/clocksvg" target="_blank">github.</a></p>
    </div>
    <footer>    
        <div class="footer">
            Designed and Developed by: <a target="_blank" href="http://www.subratadhal.com">subratadhal.com</a>
        </div>
    </footer>
    
</body>
</html>
