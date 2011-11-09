<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta name="author" content="haran" />
    <meta name="generator" content="haran" />
    <META NAME="description" CONTENT="Mixxx is free cross-platform digital DJ mixing software with professional features like
									  automatic BPM matching, seamless looping, quick song search, skins, high quality EQs, ..." />
    <META NAME="keywords" CONTENT="dj, dj software, free dj software, mixxx, dj mix, mp3 dj, mix mp3, download, crossfader, digital dj, beatmix, beatmixing, mp3, open source, mixing, mixer" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/prosimii-screen.css" media="screen, tv, projection" title="Default" />
    <link rel="stylesheet" type="text/css" href="css/slider.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="prettyPhoto/css/prettyPhoto.css" media="screen" /> 
    <link rel="alternate" type="application/rss+xml" title="Mixxx RSS Feed" href="http://feeds.feedburner.com/MixxxNews" />
    <link href="https://plus.google.com/102441931224839455484" rel="publisher" />
    <!--[if lt IE 7.]>
    <script defer type="text/javascript" src="js/pngfix.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
    <script type="text/javascript" src="js/mini.js"></script>
    <script type="text/javascript" src="prettyPhoto/js/jquery.prettyPhoto.js"></script>
    
    <title>Mixxx | Free Digital DJ Software</title>

    

    <script type="text/javascript">
 
function formatText(index, panel) {
    return "";
  };

$(function() {

//$("img").lazyload({ threshold : 200 });

    $("a[rel^='prettyPhoto']").prettyPhoto({
		theme: 'dark_rounded',
		image_markup: '<img id="fullResImage" src="" style="cursor: hand;" onClick="$.prettyPhoto.close();" />',

	});


    $(".splash_link").click(function() {
    	var value = $(this).attr("splash_idx");
    	//alert("value =" + value);
    	$(".splash:visible").fadeOut(500);        //Wax on
		showdiv = $("div#splash" + value);
    	setTimeout('showdiv.fadeIn(500);', 500);  //Wax off
    });

    $('.anythingSlider').anythingSlider({
        easing: "swing",                // Anything other than "linear" or "swing" requires the easing plugin
        autoPlay: true,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not
        startStopped: false,            // If autoPlay is on, this can force it to start stopped
        delay: 4000,                    // How long between slide transitions in AutoPlay mode
        animationTime: 600,             // How long the slide transition takes
        hashTags: true,                 // Should links change the hashtag in the URL?
        buildNavigation: true,          // If true, builds and list of anchor links to link to each slide
        pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
        startText: "Start",             // Start text
        stopText: "Stop",               // Stop text
        navigationFormatter: formatText // Details at the top of the file on this use (advanced use)
        });

    $("#slide-jump").click(function(e){
        $('.anythingSlider').anythingSlider(3);
        e.preventDefault();
    });
    


});

    function switchSlide(index) {
        $('.anythingSlider').anythingSlider(index);
    };
    </script>
  </head>
  <body>
    <!-- For non-visual user agents: --><div id="top"><a href="#main-copy" class="doNotDisplay doNotPrint">Skip to main content.</a></div>
    <?php  include 'header.php';?>
    <!-- ##### Main Copy ##### -->
    <div id="main-copy">
    <!---
      <div class="rowOfBoxes">
        <div class="half noBorderOnLeft" style="text-align: center;">
	  	</div>    
        
    
        <div class="half noBorderOnLeft">
            <p style="font-size: 1.5em; text-align: center;">
                <br><br><br>
                <b>Mixxx</b> is free, open source DJ software that gives
			    you everything you need to perform live mixes.
		    </p>
    -->
  	 		<script type="text/javascript">    
					var OSName="your OS";
					if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
					
					// OS X why do you come in so many binary-incompatible flavours?
					if (navigator.appVersion.indexOf("Mac")!=-1) 
					{
						OSName="Mac OS X";
						if ((navigator.userAgent.indexOf("10.5") != -1) //Leopard, Firefox
 						    || (navigator.userAgent.indexOf("10_5") != -1)) //Leopard, Webkit
						{
							OSName += " 10.5";
						}
						else if ((navigator.userAgent.indexOf("10.4") != -1) //Tiger, Firefox
 							 || (navigator.userAgent.indexOf("10_4") != -1)) //Tiger, Webkit
						{
							OSName += " 10.4";
						}
						
						if (navigator.userAgent.indexOf("Intel Mac")!=-1) //Intel machines
						{
							//OSName += " (Intel)";
							OSName += " (Intel)";
						}
					}

					if (navigator.appVersion.indexOf("X11")!=-1) OSName="Linux";
					if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
					
			</script>     
					
            <div class="anythingSlider">
                <div class="wrapper">
                    <ul>
                        <li>
                            <a href="#" onClick="switchSlide(2);">
                                <img style="padding: 0px;" src="http://web.mit.edu/rryan/www/mixxx.org/images/splash_1_colour.png" alt="Powered by Mixxx."
                                 width="680px" height="318px">
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="switchSlide(3);">
                                <img src="http://web.mit.edu/rryan/www/mixxx.org/images/splash_5_djmixes.png" alt="Create your own live DJ mixes. 
                                     And play them really, really loud." width="680px" height="318px">
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="switchSlide(4);">
                                <img src="http://web.mit.edu/rryan/www/mixxx.org/images/splash_3_library.png" alt="Crates. Auto DJ. Hot Cues. iTunes.
                                      Designed by DJs, for DJs." width="680px" height="318px">
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="switchSlide(5);">
                                <img src="http://web.mit.edu/rryan/www/mixxx.org/images/splash_2_skins.png" alt="Choose your layout. Skins make it happens."
                                 width="680px" height="318px">
                            </a>
                        </li>
                        <li>
                            <a href="#" onClick="switchSlide(6);">
                                <img src="http://web.mit.edu/rryan/www/mixxx.org/images/splash_4.png" alt="We could have hired superstar DJs to endorse us,
                                      but instead we spent our money making Mixxx better."
                                      width="680px" height="318px">
                            </a>   
                        </li>       
                    </ul>
                </div>
            </div>
            
            
            <!-- This main-copy-inside div provides padding around the edges -->
            <div id="main-copy-inside">

            <div id="middletextbox">
                <H1>Start DJing with Mixxx</H1> 
                <p> Mixxx is <b>free, open source</b> DJ software that gives
                    you everything you need to perform live mixes. </p>
                <H1>Set your Mixes Free</H1>
                <p>Our <b>advanced mixing engine</b> gives you complete control over your live mixes. Hot cues,
                   looping controls, and our high fidelity EQs let you mix and remix with more control.
                   <em>Create your own MP3 DJ mix today!</em>
                   </p>
                <H1>Open Source means Freedom</H1>
                <p>Why invest your time building your music library with expensive commercial
                   DJ software, when it costs you a hundred dollars to upgrade
                   every year? Through our open source license, Mixxx will always be <b>free</b>,
                   and you'll never be locked in.
                </p>
            </div>
            <div class="downloadFloat">
		<img src="images/download_now.png" alt="Download Now" onclick="location.href='downloadlatest.php?os=' + OSName;" border="0px" style="vertical-align: middle; cursor:pointer; padding-bottom: 5px;" /><br/><script type="text/javascript">
		if (OSName.search("OS X") >= 0) {
		    document.write('<a href="http://itunes.apple.com/us/app/mixxx/id413756578?mt=12&ls=1"><img src="images/available-on-mac-app-store-frontpage.png"></a><br>');
		}
		</script>
                <p class="downloadSmall" style="text-align: center;">
                    Mixxx 1.9.2 for 
                <script type="text/javascript">
                        document.write(OSName);
                </script>
                (Free!)<br/>
                Mixxx is tested spyware free by <a href="http://download.cnet.com/Mixxx/3000-18502_4-10514911.html">Download.com</a><br/>
                <a href="download.php">Get Mixxx for other platforms...</a>
                </p>
                <center>
                   <a href="images/splash_mixxx_screenshot.png" rel="prettyPhoto" class="screen"><img src="images/splash_mixxx_screenshot_mini.png"></a><br>
                   <a href="images/splash_mixxx_screenshot_deere.png" rel="prettyPhoto"  class="screen"><img src="images/splash_mixxx_screenshot_deere_mini.png"></a>
<!--
                   <a href="#screenshot_default" class="screen"><img src="images/splash_mixxx_screenshot_mini.png"></a><br>
                   <a href="#screenshot_deere" class="screen"><img src="images/splash_mixxx_screenshot_deere_mini.png"></a>
                   <div id="screenshot_default">
                     <img src="images/splash_mixxx_screenshot.png">
                   </div>
                   <div id="screenshot_deere">
                      <img src="images/splash_mixxx_screenshot_deere_medium.png">
                   </div>
                    <script type="text/javascript">
                        $('a.screen').fancyZoom({directory: "images/fancyzoom", closeOnClick: true});
                    </script>
-->
                    
                </center>
            </div>
            <!-- Clear the floats so that the main-copy div expands vertically. -->
			<div style="clear:both"></div>

			<br/>
			<br/>


        <div id="newsbox">
        
            <h1>Latest News <a href="http://feeds.feedburner.com/MixxxNews" rel="alternate" type="application/rss+xml"><img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="" style="vertical-align:middle;border:0;padding-bottom:2px;" /></a></h1>

    <!-- -NEWS START- -->
    <?php 
        //Mixxx RSS feed (news with full text)
        //$url = "http://mixxxblog.blogspot.com/feeds/posts/default"; 
        $url = "http://feeds.feedburner.com/MixxxNews";
        //$url = "http://feeds.feedburner.com/MixxxNews?format=rss2";

        require 'SimplePie/simplepie.inc';
        
        $feed = new SimplePie();
        $feed->set_feed_url($url);
        $feed->init();
        $feed->handle_content_type();

        //Useful for figuring out which fields we're supposed to use in the loop below
        //die(var_dump($rss));

        //Iterate through each item in the RSS feed.
        $itemcount = $feed->get_item_quantity();
        $count = 0;
        for ($i = 0; $i < $itemcount && $count < 2; $i++)
        {
            $item = $feed->get_item($i);
            $title = $item->get_title();
            $desc  = $item->get_content();
            $url   = $item->get_link();
            $date  = $item->get_date('l, F jS Y');
            
            //Trim the description and add a link to the full thing, if necessary.
            if (strlen($desc) > 60)
            {
                $desc = str_replace("<br />", " ", $desc); //Replace line breaks with spaces. (Looks better)
                $desc = strip_tags($desc); //Strip remaining HTML tags...
                $desc = substr($desc, 0, 150); //Truncate the description to 150 characters
                $desc = trim($desc); //Strip whitespace

                // Truncate at end of last word and remove any trailing punctuation
                $desc = preg_replace('/\s+?(\S+)?$/', '', $desc);
                $desc = preg_replace('/[^a-zA-Z]$/', '', $desc);

                $desc .= "... <a href=\"$url\">Read more</a>";
            }
            
            // Create timestamp from date, then format
            //$stamp =  mktime(0, 0, 0, substr($date, 5, 2), substr($date, 8, 2), substr($date, 0, 4));
            //$date = date('l, F jS Y', $stamp);
            
            echo "<a href=$url class=\"newsHeading\">$title</a>\n";
            echo "<p class=\"newsDate\">$date</p>\n";
            echo "<p class=\"newsSummary\">$desc</p>\n\n";

            // Update displayed item count
            $count++;
        }
    ?>         
            <div class="more"><a href="http://mixxxblog.blogspot.com">More News &raquo;</a></div>

    <!-- -NEWS END- -->

        </div> <!-- newsbox -->

    <div id="social-media" align="center" style="margin: auto auto;"> 
      <a href="https://plus.google.com/102441931224839455484?prsrc=3" style="text-decoration: none;">
	<img src="https://ssl.gstatic.com/images/icons/gplus-32.png" width="36" height="36" style="border: 0;"/>
      </a>
      <a href="http://www.twitter.com/mixxxdj"><img src="http://twitter-badges.s3.amazonaws.com/t_logo-c.png" alt="Follow mixxxdj on Twitter"/></a>
      <a href="http://facebook.com/pages/MIXXX-Digital-DJ/21723485212">
	<img src="http://platform.ak.fbcdn.net/www/app_full_proxy.php?app=7146470109&v=1&size=o&cksum=8011a2f81307ab0730bb21c45327d1a2&src=http%3A%2F%2Fwww.threefoldstudio.com%2Ffacebook123%2Ffb_socialmedia%2Ffacebook_icon.png" width="36" height="36" style="border: 0;"/>
      </a>
    </div>

    </div> <!-- main-copy-inside -->
    </div> <!-- main-copy ?? -->


    <!-- ##### Footer ##### -->
	<?php include 'footer.php' ?>
  </body>
</html>
