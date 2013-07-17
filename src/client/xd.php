<?php include_once( "config.php"); ?>
  <!DOCTYPE HTML>
  <!--[if lt IE 7]>
    <html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7">
    <![endif]-->
    <!--[if IE 7]>
      <html class="lt-ie10 lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if IE 8]>
        <html class="lt-ie10 lt-ie9">
        <![endif]-->
        <!--[if IE 9]>
          <html class="lt-ie10">
          <![endif]-->
          <!--[if gt IE 9]>
            <!-->
            <html manifest="/static/manifest.appcache" itemscope="" itemtype="http://schema.org/Product">
            <!--<![endif]-->
            
            <head>
            <!--<![endif]-->
            <meta charset="utf-8">
            <title>
              DragonBound
            </title>
            <meta property="og:type" content="game">
            <meta property="og:title" content="DragonBound - Next generation HTML5 online massive multi-player game!">
            <meta property="og:url" content="http://dragonbound.net">
            <meta property="og:description" content="Play with or against your friends from your browser anywhere for free. Shop for items to make you stronger. Unlock hidden characters, new game modes, and challenges. Meet new friends. Single player option too.">
            <meta property="og:image" content="http://dragonbound.net/static/images/icon2_200x200.png">
            <meta property="og:site_name" content="dragonbound.net">
            <meta property="fb:app_id" content="154795011315451">
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">
            <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.es.xGxG4ekMnlo.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=EQ/rs=AItRSTN47MmnuZkGa0TY5xYGPRKMGKoW3Q/cb=gapi.loaded_0" async="">
            </script>
            <script type="text/javascript" async="" src="https://apis.google.com/js/plusone.js" gapi_processed="true">
            </script>
            <script id="twitter-wjs" src="//platform.twitter.com/widgets.js">
            </script>
            <script id="facebook-jssdk" async="" src="//connect.facebook.net/en_US/all.js">
            </script>
            <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js">
            </script>
            <script async="" src="//ajax.cloudflare.com/cdn-cgi/nexp/abv=3609848800/cloudflare.min.js">
            </script>
            <script type="text/javascript">
              //<![CDATA[
              window.__CF = window.__CF || {};
              window.__CF.AJS = {
                "ga_key": {
                  "ua": "UA-33394735-1",
                  "ga_bs": "2"
                }
              };
              //]]>
              
            </script>
            <script type="text/javascript">
              //<![CDATA[
              try {
                if (!window.CloudFlare) {
                  var CloudFlare = [{
                    verbose: 0,
                    p: 0,
                    byc: 0,
                    owlid: "cf",
                    mirage: {
                      responsive: 0,
                      lazy: 0
                    },
                    mirage2: 0,
                    oracle: 0,
                    paths: {
                      cloudflare: "/cdn-cgi/nexp/abv=2706741234/"
                    },
                    atok: "1bf23b2a1035443f58bf5f9387618aa8",
                    zone: "dragonbound.net",
                    rocket: "0",
                    apps: {
                      "ga_key": {
                        "ua": "UA-33394735-1",
                        "ga_bs": "2"
                      }
                    }
                  }];
                  var a = document.createElement("script"),
                      b = document.getElementsByTagName("script")[0];
                  a.async = !0;
                  a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/abv=3609848800/cloudflare.min.js";
                  b.parentNode.insertBefore(a, b);
                }
              } catch (e) {};
              //]]>
              
            </script>
            <link rel="apple-touch-icon" href="/static/images/icon.png">
            <link rel="apple-touch-startup-image" href="/static/images/splash2.png">
            <meta itemprop="name" content="DragonBound">
            <meta itemprop="description" content="Play with or against your friends from your browser anywhere for free. Shop for items to make you stronger. Unlock hidden characters, new game modes, and challenges. Meet new friends. Single player option too.">
            <meta itemprop="image" content="http://dragonbound.net/static/images/icon2_200x200.png">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
            </script>
            <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js">
            </script>
            <script src="/static/js/avatars.js?45">
            </script>
            <script src="/static/js/DragonBound.compiled2.js?257">
            </script>
            <link rel="stylesheet" href="/static/css/DragonBound.min.css?82">
            <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/themes/base/jquery-ui.css">
            <style id="DragonTheme">
              body {
              background-image:url(/static/images/themes/gl/bg_full.jpg);
              }

              #channelScreen {
              background-image:url(.);
              }

              #roomScreen {
              background-image:url(.);
              }

              #shopScreen {
              background-image:url(.);
              }

              .rank {
              background-image:url(/static/images/lobby_stuff4.png);
              background-repeat:no-repeat;
              }

              .itemDual,.itemTeleport {
              background-image:url(/static/images/items2.png);
              background-repeat:no-repeat;
              }

              .roomMap,#room_map,#RoomOptionsMapImage {
              background-image:url(/static/images/themes/gl/maps.png);
              background-repeat:no-repeat;
              }

              .zotata-chat-icon,.room,.roomExtraInfo,.status,.roomLocked,#dialogCreateRoom,#BrokerLogout,.LobbyButton,.iconModeNormal,.iconModeBoss,.iconModeSame,.gameModeNormal,.gameModeBoss,.gameModeSame,#OptionsDialog,#BrokerRefresh,.players1v1,.players2v2,.players3v3,.players4v4,.players1vB,.players2vB,.players3vB,.players4vB,#CreateRoomPassword,.buttonOK,.buttonCancel,.buttonPrev,.buttonNext,.checkboxOff,.checkboxOn,.CheckboxOff,.CheckboxOn,.AlertBox,#ConnectWithFacebook,#ConnectWithPassword,#buttonRanking,#dialogCreateLocked,#RoomOptionsModeLocked,#OptionsOK,#OptionsLeave,.RadioOn,.RadioOff,#infoAddBuddy,#infoGuildInvite,.chatDialogDelete,.chatDialogGuildKick,.roomBuddy,.roomGuildMember,#guild_create,#guild_leave,.BrokerChannel,.paypal_corner,.buttonClose,#new_img,.BrokerChannelFullIcon,.imgLock {
              background-image:url(/static/images/lobby_stuff4.png);
              background-repeat:no-repeat;
              }

              #roomButtonBack,#roomButtonChangeTeam,.buttonMobile,.roomPlayerInfo,.roomPlayerNotReady,.roomPlayerReady,.roomPlayerMaster,.roomPlayerShadow,.roomBotSelect,.roomBotRemove,.roomPlayerBalloonTip,#room_timer,.GamePlayerBalloonTip,#room_change_title_button,#room_options_button,#add_bot_button,#playerInfoDialog,#infoRankingTab,#infoChat,#infoClose,.ChatDialog,.chatDialogClose,#room_item_buddy_tab,#dialog_room_options {
              background-image:url(/static/images/room_stuff2.png);
              background-repeat:no-repeat;
              }

              .weather-0,.weather-1,#message_over_items.items_locked,#message_over_items.sudden_death,#gameui,#powerBar,#powerMark,.Turn,.DamageDigit,.LastAngleDigit,.UIGoldDigit,#btnShot1,#btnShot2,#btnShotSS,#btnPass,#btnEsc,#last_power_mark,#all_chat,#team_chat,.turn_line_number,#slice_drag_button,.imgS1 {
              background-image:url(/static/images/game_stuff4.png);
              background-repeat:no-repeat;
              }

              #game_over,#scores_lose_a,#scores_lose_b,.score,.score_me {
              background-image:url(/static/images/scores_stuff.png);
              background-repeat:no-repeat;
              }

              .shopButton,.shop_item,.shop_item_icon,.stat_icon,.stat_font,.shop_my_item,.shop_my_item_cash,.shop_my_item_gift,.shop_my_item_icon,.shop_my_item_equip.equipped,#shop_buy_dialog {
              background-image:url(/static/images/shop_stuff3.png);
              background-repeat:no-repeat;
              }
            </style>
            <script type="text/javascript">
              /* <![CDATA[ */
              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', 'UA-33394735-1']);
              _gaq.push(['_trackPageview']);

              (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
              })();

              (function(b) {
                (function(a) {
                  "__CF" in b && "DJS" in b.__CF ? b.__CF.DJS.push(a) : "addEventListener" in b ? b.addEventListener("load", a, !1) : b.attachEvent("onload", a)
                })(function() {
                  "FB" in b && "Event" in FB && "subscribe" in FB.Event && (FB.Event.subscribe("edge.create", function(a) {
                    _gaq.push(["_trackSocial", "facebook", "like", a])
                  }), FB.Event.subscribe("edge.remove", function(a) {
                    _gaq.push(["_trackSocial", "facebook", "unlike", a])
                  }), FB.Event.subscribe("message.send", function(a) {
                    _gaq.push(["_trackSocial", "facebook", "send", a])
                  }));
                  "twttr" in b && "events" in twttr && "bind" in twttr.events && twttr.events.bind("tweet", function(a) {
                    if (a) {
                      var b;
                      if (a.target && a.target.nodeName == "IFRAME") a: {
                        if (a = a.target.src) {
                          a = a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);
                          b = 0;
                          for (var c; c = a[b]; ++b) if (c.indexOf("url") === 0) {
                            b = unescape(c.split("=")[1]);
                            break a
                          }
                        }
                        b = void 0
                      }
                      _gaq.push(["_trackSocial", "twitter", "tweet", b])
                    }
                  })
                })
              })(window); /* ]]> */
              
            </script>
            <style type="text/css">
              .fb_hidden {
              position:absolute;
              top:-10000px;
              z-index:10001
              }

              .fb_invisible {
              display:none
              }

              .fb_reset {
              background:none;
              border:0;
              border-spacing:0;
              color:#000;
              cursor:auto;
              direction:ltr;
              font-family: "lucida grande ",tahoma,verdana,arial,sans-serif;
              font-size:11px;
              font-style:normal;
              font-variant:normal;
              font-weight:normal;
              letter-spacing:normal;
              line-height:1;
              margin:0;
              overflow:visible;
              padding:0;
              text-align:left;
              text-decoration:none;
              text-indent:0;
              text-shadow:none;
              text-transform:none;
              visibility:visible;
              white-space:normal;
              word-spacing:normal
              }

              .fb_reset >div {
              overflow:hidden
              }

              .fb_link img {
              border:none
              }

              .fb_dialog {
              background:rgba(82,82,82,.7);
              position:absolute;
              top:-10000px;
              z-index:10001
              }

              .fb_dialog_advanced {
              padding:10px;
              -moz-border-radius:8px;
              -webkit-border-radius:8px;
              border-radius:8px
              }

              .fb_dialog_content {
              background:#fff;
              color:#333
              }

              .fb_dialog_close_icon {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
              _background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);
              cursor:pointer;
              display:block;
              height:15px;
              position:absolute;
              right:18px;
              top:17px;
              width:15px;
              top:8px \9;
              right:7px \9
              }

              .fb_dialog_mobile .fb_dialog_close_icon {
              top:5px;
              left:5px;
              right:auto
              }

              .fb_dialog_padding {
              background-color:transparent;
              position:absolute;
              width:1px;
              z-index:-1
              }

              .fb_dialog_close_icon:hover {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;
              _background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)
              }

              .fb_dialog_close_icon:active {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;
              _background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)
              }

              .fb_dialog_loader {
              background-color:#f2f2f2;
              border:1px solid #606060;
              font-size:24px;
              padding:20px
              }

              .fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right {
              height:10px;
              width:10px;
              overflow:hidden;
              position:absolute
              }

              .fb_dialog_top_left {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;
              left:-10px;
              top:-10px
              }

              .fb_dialog_top_right {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;
              right:-10px;
              top:-10px
              }

              .fb_dialog_bottom_left {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;
              bottom:-10px;
              left:-10px
              }

              .fb_dialog_bottom_right {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;
              right:-10px;
              bottom:-10px
              }

              .fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom {
              position:absolute;
              background:#525252;
              filter:alpha(opacity=70);
              opacity:.7
              }

              .fb_dialog_vert_left,.fb_dialog_vert_right {
              width:10px;
              height:100%
              }

              .fb_dialog_vert_left {
              margin-left:-10px
              }

              .fb_dialog_vert_right {
              right:0;
              margin-right:-10px
              }

              .fb_dialog_horiz_top,.fb_dialog_horiz_bottom {
              width:100%;
              height:10px
              }

              .fb_dialog_horiz_top {
              margin-top:-10px
              }

              .fb_dialog_horiz_bottom {
              bottom:0;
              margin-bottom:-10px
              }

              .fb_dialog_iframe {
              line-height:0
              }

              .fb_dialog_content .dialog_title {
              background:#6d84b4;
              border:1px solid #3b5998;
              color:#fff;
              font-size:14px;
              font-weight:bold;
              margin:0
              }

              .fb_dialog_content .dialog_title >span {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
              float:left;
              padding:5px 0 7px 26px
              }

              body.fb_hidden {
              -webkit-transform:none;
              height:100%;
              margin:0;
              left:-10000px;
              overflow:visible;
              position:absolute;
              top:-10000px;
              width:100%
              }

              .fb_dialog.fb_dialog_mobile.loading {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
              min-height:100%;
              min-width:100%;
              overflow:hidden;
              position:absolute;
              top:0;
              z-index:10001
              }

              .fb_dialog.fb_dialog_mobile.loading.centered {
              max-height:590px;
              min-height:590px;
              max-width:500px;
              min-width:500px
              }

              #fb-root #fb_dialog_ipad_overlay {
              background:rgba(0,0,0,.45);
              position:absolute;
              left:0;
              top:0;
              width:100%;
              min-height:100%;
              z-index:10000
              }

              #fb-root #fb_dialog_ipad_overlay.hidden {
              display:none
              }

              .fb_dialog.fb_dialog_mobile.loading iframe {
              visibility:hidden
              }

              .fb_dialog_content .dialog_header {
              -webkit-box-shadow:white 0 1px 1px -1px inset;
              background:-webkit-gradient(linear,0 0,0 100%,from(#738ABA),to(#2C4987));
              border-bottom:1px solid;
              border-color:#1d4088;
              color:#fff;
              font:14px Helvetica,sans-serif;
              font-weight:bold;
              text-overflow:ellipsis;
              text-shadow:rgba(0,30,84,.296875) 0 -1px 0;
              vertical-align:middle;
              white-space:nowrap
              }

              .fb_dialog_content .dialog_header table {
              -webkit-font-smoothing:subpixel-antialiased;
              height:43px;
              width:100%
              }

              .fb_dialog_content .dialog_header td.header_left {
              font-size:12px;
              padding-left:5px;
              vertical-align:middle;
              width:60px
              }

              .fb_dialog_content .dialog_header td.header_right {
              font-size:12px;
              padding-right:5px;
              vertical-align:middle;
              width:60px
              }

              .fb_dialog_content .touchable_button {
              background:-webkit-gradient(linear,0 0,0 100%,from(#4966A6),color-stop(0.5,#355492),to(#2A4887));
              border:1px solid #29447e;
              -webkit-background-clip:padding-box;
              -webkit-border-radius:3px;
              -webkit-box-shadow:rgba(0,0,0,.117188) 0 1px 1px inset,rgba(255,255,255,.167969) 0 1px 0;
              display:inline-block;
              margin-top:3px;
              max-width:85px;
              line-height:18px;
              padding:4px 12px;
              position:relative
              }

              .fb_dialog_content .dialog_header .touchable_button input {
              border:none;
              background:none;
              color:#fff;
              font:12px Helvetica,sans-serif;
              font-weight:bold;
              margin:2px -12px;
              padding:2px 6px 3px 6px;
              text-shadow:rgba(0,30,84,.296875) 0 -1px 0
              }

              .fb_dialog_content .dialog_header .header_center {
              color:#fff;
              font-size:16px;
              font-weight:bold;
              line-height:18px;
              text-align:center;
              vertical-align:middle
              }

              .fb_dialog_content .dialog_content {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
              border:1px solid #555;
              border-bottom:0;
              border-top:0;
              height:150px
              }

              .fb_dialog_content .dialog_footer {
              background:#f2f2f2;
              border:1px solid #555;
              border-top-color:#ccc;
              height:40px
              }

              #fb_dialog_loader_close {
              float:left
              }

              .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
              text-shadow:rgba(0,30,84,.296875) 0 -1px 0
              }

              .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
              visibility:hidden
              }

              .fb_iframe_widget {
              display:inline-block;
              position:relative
              }

              .fb_iframe_widget span {
              display:inline-block;
              position:relative;
              text-align:justify
              }

              .fb_iframe_widget iframe {
              position:absolute
              }

              .fb_iframe_widget_lift {
              z-index:1
              }

              .fb_hide_iframes iframe {
              position:relative;
              left:-10000px
              }

              .fb_iframe_widget_loader {
              position:relative;
              display:inline-block
              }

              .fb_iframe_widget_fluid {
              display:inline
              }

              .fb_iframe_widget_fluid span {
              width:100%
              }

              .fb_iframe_widget_loader iframe {
              min-height:32px;
              z-index:2;
              zoom:1
              }

              .fb_iframe_widget_loader .FB_Loader {
              background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;
              height:32px;
              width:32px;
              margin-left:-16px;
              position:absolute;
              left:50%;
              z-index:4
              }

              .fb_connect_bar_container div,.fb_connect_bar_container span,.fb_connect_bar_container a,.fb_connect_bar_container img,.fb_connect_bar_container strong {
              background:none;
              border-spacing:0;
              border:0;
              direction:ltr;
              font-style:normal;
              font-variant:normal;
              letter-spacing:normal;
              line-height:1;
              margin:0;
              overflow:visible;
              padding:0;
              text-align:left;
              text-decoration:none;
              text-indent:0;
              text-shadow:none;
              text-transform:none;
              visibility:visible;
              white-space:normal;
              word-spacing:normal;
              vertical-align:baseline
              }

              .fb_connect_bar_container {
              position:fixed;
              left:0 !important;
              right:0 !important;
              height:42px !important;
              padding:0 25px !important;
              margin:0 !important;
              vertical-align:middle !important;
              border-bottom:1px solid #333 !important;
              background:#3b5998 !important;
              z-index:99999999 !important;
              overflow:hidden !important
              }

              .fb_connect_bar_container_ie6 {
              position:absolute;
              top:expression(document.compatMode== "CSS1Compat " ?document.documentElement.scrollTop+ "px ":body.scrollTop+ "px ")
              }

              .fb_connect_bar {
              position:relative;
              margin:auto;
              height:100%;
              width:100%;
              padding:6px 0 0 0 !important;
              background:none;
              color:#fff !important;
              font-family: "lucida grande ",tahoma,verdana,arial,sans-serif !important;
              font-size:13px !important;
              font-style:normal !important;
              font-variant:normal !important;
              font-weight:normal !important;
              letter-spacing:normal !important;
              line-height:1 !important;
              text-decoration:none !important;
              text-indent:0 !important;
              text-shadow:none !important;
              text-transform:none !important;
              white-space:normal !important;
              word-spacing:normal !important
              }

              .fb_connect_bar a:hover {
              color:#fff
              }

              .fb_connect_bar .fb_profile img {
              height:30px;
              width:30px;
              vertical-align:middle;
              margin:0 6px 5px 0
              }

              .fb_connect_bar div a,.fb_connect_bar span,.fb_connect_bar span a {
              color:#bac6da;
              font-size:11px;
              text-decoration:none
              }

              .fb_connect_bar .fb_buttons {
              float:right;
              margin-top:7px
              }

              .fb_edge_widget_with_comment {
              position:relative;
              *z-index:1000
              }

              .fb_edge_widget_with_comment span.fb_edge_comment_widget {
              position:absolute
              }

              .fb_edge_widget_with_comment span.fb_send_button_form_widget {
              z-index:1
              }

              .fb_edge_widget_with_comment span.fb_send_button_form_widget .FB_Loader {
              left:0;
              top:1px;
              margin-top:6px;
              margin-left:0;
              background-position:50% 50%;
              background-color:#fff;
              height:150px;
              width:394px;
              border:1px #666 solid;
              border-bottom:2px solid #283e6c;
              z-index:1
              }

              .fb_edge_widget_with_comment span.fb_send_button_form_widget.dark .FB_Loader {
              background-color:#000;
              border-bottom:2px solid #ccc
              }

              .fb_edge_widget_with_comment span.fb_send_button_form_widget.siderender .FB_Loader {
              margin-top:0
              }

              .fbpluginrecommendationsbarleft,.fbpluginrecommendationsbarright {
              position:fixed !important;
              bottom:0;
              z-index:999
              }

              .fbpluginrecommendationsbarleft {
              left:10px
              }

              .fbpluginrecommendationsbarright {
              right:10px
              }
            </style>
            </head>
            
            <body data-twttr-rendered="true">
              <script type="text/javascript">
                //<![CDATA[
                try {
                  (function(a) {
                    var b = "http://",
                        c = "dragonbound.net",
                        d = "/cdn-cgi/cl/",
                        e = "4a04a7ef93f99d693b204e89772c1ff4f306b85e.gif",
                        f = new a;
                    f.src = [b, c, d, e].join("")
                  })(Image)
                } catch (e) {}
                //]]>
                
              </script>
              <div id="fb-root" class=" fb_reset">
                <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                  <div>
                    <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="http://static.ak.facebook.com/connect/xd_arbiter.php?version=25#channel=f1fa5f4b28&amp;origin=http%3A%2F%2Fdragonbound.net&amp;channel_path=%2Fchannel.html%3Ffb_xd_fragment%23xd_sig%3Df1a1f007%26"
                    style="border: none;">
                    </iframe>
                    <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="https://s-static.ak.facebook.com/connect/xd_arbiter.php?version=25#channel=f1fa5f4b28&amp;origin=http%3A%2F%2Fdragonbound.net&amp;channel_path=%2Fchannel.html%3Ffb_xd_fragment%23xd_sig%3Df1a1f007%26"
                    style="border: none;">
                    </iframe>
                  </div>
                </div>
                <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                  <div>
                  </div>
                </div>
              </div>
              <div id="updater" style="display: none;">
                At Latest Version!
              </div>
              <div id="ranking_panel">
                <div id="ranking_title">
                  DragonBound Global
                </div>
                <div id="ranking_title2">
                </div>
                <div id="ranking_btns">
                  <div id="ranking_btn_type1" class="ranking_btn NoSelect">
                    Jugadores Top
                  </div>
                  <div id="ranking_btn_type2" class="ranking_btn NoSelect">
                    Torneo
                  </div>
                  <div id="ranking_btn_ranks" class="ranking_btn NoSelect">
                    Niveles
                  </div>
                  <div id="ranking_btn_howto" class="ranking_btn NoSelect selected">
                    Cómo jugar
                  </div>
                  <div id="ranking_btn_contact" class="ranking_btn NoSelect">
                    Contáctanos
                  </div>
                  <div id="ranking_btn_terms" class="ranking_btn NoSelect">
                    T. de Servicio
                  </div>
                  <div id="ranking_btn_privacy" class="ranking_btn NoSelect">
                    P. de Privacidad
                  </div>
                </div>
                <div id="ranking_data">
                  <div class="howto1">
                    Pantalla Lobby
                  </div>
                  <div class="howto4">
                    Entra a un juego, chat o tienda
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      Quick Play
                    </span>
                    - Entrar a una sala disponible.
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      Create
                    </span>
                    - Crea tu propia sala.
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      Shop
                    </span>
                    - Comprar y usar avatares (items).
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      My Info
                    </span>
                    - Cambia Nombre &amp; Foto.
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      Options
                    </span>
                    - Música / Sonido / Gráficos.
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      Lista de Salas
                    </span>
                    - Clic en una sala "En Espera" para entrar en juego.
                  </div>
                  <br>
                  <div class="howto1">
                    Pantalla de Salas
                  </div>
                  <div class="howto4">
                    Cuando todos los jugadores estén "Listos" el master de la sala puede iniciar el juego.
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      Ready Button
                    </span>
                    - Listo.
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      Start
                    </span>
                    - Para el master de la para comenzar el juego.
                  </div>
                  <br>
                  <div class="howto1">
                    Pantalla de Juego
                  </div>
                  <div class="howto4">
                    Tienes que matar al otro equipo para ganar. Dispara en tu turno.
                  </div>
                  <br>
                  <div class="howto3">
                    <span class="howto2">
                      Arriba/Abajo
                    </span>
                    - Cambiar Angulo.
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      Izquierda/Derecha
                    </span>
                    - Caminar (en su turno).
                  </div>
                  <div class="howto3">
                    <span class="howto2">
                      Espacio
                    </span>
                    - Dispara. Mantega presionado para mas poder.
                  </div>
                </div>
              </div>
              <div id="chargeWindow">
                <div id="chargeWindowSellers">
                  <span id="charge_myinfo_btn" class="seller_button opacity_button">
                  </span>
                  <span id="charge_pin_btn" class="seller_button opacity_button">
                  </span>
                  <span id="charge_bitcoin_btn" class="seller_button opacity_button">
                  </span>
                  <br>
                  <span id="ultimatepay_btn" class="seller_button opacity_button">
                  </span>
                  <span id="paymentwall_btn" class="seller_button opacity_button buttonGlow">
                  </span>
                  <span id="resellers_btn" class="seller_button opacity_button">
                  </span>
                </div>
                <div id="chargeWindowPayment">
                </div>
                <div id="chargeWindowClose" class="buttonClose opacity_button">
                </div>
              </div>
              <div id="DragonVideo">
                <video id="localVideo">
                </video>
                <div id="remotesVideos">
                </div>
              </div>
              <div id="container" style="-webkit-transform: scale(0.775, 0.775); left: 248px; top: 0px;">
                <div class="DialogLayer hide" style="display: none; z-index: 1010;">
                  <div id="myDialog">
                    <div class="AlertBoxBackground">
                    </div>
                    <div class="AlertBox" style="display: none;">
                      <div class="AlertBoxTitle">
                        Ingreso... Por favor espere
                      </div>
                      <div class="AlertBoxContent blackShadow">
                        Connected.
                        <br>
                        <br>
                        Ingreso... OK
                        <br>
                        <br>
                        Cargando perfil... OK
                        <br>
                        <br>
                        Cargando tus avatares...
                      </div>
                      <div class="AlertBoxOK buttonOK" style="display: block;">
                      </div>
                      <div class="AlertBoxCancel buttonCancel" style="display: none;">
                      </div>
                      <div id="dialog_graphic">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="BrokerScreen" style="display: none;">
                  <div class="AlertBoxBackground">
                  </div>
                  <div id="BrokerWindow">
                    <div id="BrokerTitle" class="blackShadow">
                      Seleccionar Server
                    </div>
                    <div id="BrokerChannels">
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel0" channel_number="0" ip="54.243.66.44" port="9001">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 1 - Ranks Altos
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:6.6415px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                      <div class="BrokerRanks">
                        <span class="InlineRank rank rank7">
                        </span>
                        -
                        <span class="InlineRank rank rank23">
                        </span>
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel1" channel_number="1" ip="23.21.149.33" port="9002">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 2 - Principiantes
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:8.4175px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                      <div class="BrokerRanks">
                        <span class="InlineRank rank rank0">
                        </span>
                        -
                        <span class="InlineRank rank rank6">
                        </span>
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel2" channel_number="2" ip="54.243.66.44" port="9003">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 3 - Principiantes
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:2.146px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                      <div class="BrokerRanks">
                        <span class="InlineRank rank rank0">
                        </span>
                        -
                        <span class="InlineRank rank rank6">
                        </span>
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel3" channel_number="3" ip="23.21.149.33" port="9004">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 4 - All
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:46.81733333333333px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel4" channel_number="4" ip="54.243.66.44" port="9005">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 5 - All
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:21.213333333333335px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel5" channel_number="5" ip="23.21.149.33" port="9006">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 6 - English Only
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:4.1995px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel6" channel_number="6" ip="54.243.66.44" port="9007">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 7 - All
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:3.515px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel7" channel_number="7" ip="23.21.149.33" port="9008">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 8 - All
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:6.697px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel8" channel_number="8" ip="54.243.66.44" port="80">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 9 - En Puerto 80
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:1.6465px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel9" channel_number="9" ip="23.21.149.33" port="9010">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 10 - All
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:5.3095px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel10" channel_number="10" ip="54.243.66.44" port="9011">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 11 - All
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:2.2385px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel" id="BrokerChannel11" channel_number="11" ip="23.21.149.33" port="9012">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 12 - Ranks Medios
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:13.2275px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                      <div class="BrokerRanks">
                        <span class="InlineRank rank rank7">
                        </span>
                        -
                        <span class="InlineRank rank rank17">
                        </span>
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel12" channel_number="12" ip="54.243.66.44" port="9013">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 13 - Test Zone
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:5.217px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel13" channel_number="13" ip="23.21.149.33" port="9014">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 14 - All
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:1.924px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div class="BrokerChannel BrokerChannelOnline opacity_button" id="BrokerChannel14" channel_number="14" ip="54.243.66.44" port="9015">
                      <div class="BrokerChannelName blackShadow">
                        Servidor 15 - All
                      </div>
                      <div class="BrokerMaxPlayers2">
                      </div>
                      <div class="BrokerNumPlayers2" style="width:2.4605px">
                      </div>
                      <div class="BrokerChannelFullIcon">
                      </div>
                    </div>
                    <div id="BrokerTotalPlayers" class="blackShadow">
                    </div>
                    <div class="NoSelect opacity_button" id="BrokerLogout">
                    </div>
                    <div id="BrokerRefresh" class="opacity_button NoSelect">
                    </div>
                  </div>
                </div>
                <div id="friendsList" class="NoSelect hide" style="display: none;">
                  <div class="scrollbar" style="height: 208px; display: none;">
                    <div class="track" style="height: 208px;">
                      <div class="thumb">
                        <div class="end">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="viewport">
                    <div class="overview" id="friendsListHtml" style="top: 0px;">
                    </div>
                  </div>
                </div>
                <div id="guildMembersList" class="NoSelect hide" style="display: none;">
                  <div class="scrollbar" style="height: 208px; display: none;">
                    <div class="track" style="height: 208px;">
                      <div class="thumb">
                        <div class="end">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="viewport">
                    <div class="overview" id="guildMembersListHtml" style="top: 0px;">
                    </div>
                  </div>
                </div>
                <div id="OptionsDialog" class="ui-widget-content NoSelect" style="z-index: 1005; display: none;">
                  <div class="opacity_button" id="OptionsLeave">
                  </div>
                  <div class="opacity_button" id="OptionsOK">
                  </div>
                  <div class="opacity_button CheckboxOn" id="OptionsMusic">
                  </div>
                  <div class="opacity_button CheckboxOn" id="OptionsEffects">
                  </div>
                  <div class="opacity_button RadioOn" id="OptionsGraphicsHigh">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsGraphicsLow">
                  </div>
                  <div class="opacity_button RadioOn" id="OptionsBackgroundOn">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsBackgroundOff">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsShootingModeDrag">
                  </div>
                  <div class="opacity_button RadioOn" id="OptionsShootingModeSlice">
                  </div>
                  <div class="opacity_button RadioOn" id="OptionsLangEN">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsLangPR">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsLangFI">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsLangES">
                  </div>
                  <div class="opacity_button RadioOff" id="OptionsLangVN">
                  </div>
                  <div class="" id="OptionsLangBeta">
                    BETA
                  </div>
                  <div class="opacity_button" id="OptionsTheme">
                    [Change Graphics BETA]
                  </div>
                </div>
                <div id="chat_divs">
                </div>
                <div class="screen" id="channelScreen" style="display: none;">
                  <div id="tournament_waiting" class="anim_ease" style="display: none; top: -400px;">
                  </div>
                  <div id="dialog_change_name_div">
                    <div class="AlertBoxBackground">
                    </div>
                    <div class="AlertBox">
                      <div class="AlertBoxTitle">
                        Seleccionar Nombre y Foto
                      </div>
                      <div class="AlertBoxContent blackShadow">
                        <label for="display_name" id="display_name_label">
                          Cambiar Nombre:
                        </label>
                        <input type="text" value="" id="display_name" maxlength="15">
                        <br>
                        <div id="NameChangeLittle">
                          (Name Change costs 4,000 Cash)
                        </div>
                        <br>
                        <input type="checkbox" checked="" id="can_show_photo">
                        <label for="can_show_photo" id="can_show_photo_label">
                          Mostrar mi foto de facebook
                        </label>
                        <br>
                        <br>
                        <button id="changePassword" class="glow_button_anim">
                          Set Password Login
                        </button>
                        <div id="dialog_change_name_ok" class="buttonOK">
                        </div>
                        <div id="dialog_change_name_cancel" class="buttonCancel">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="dialog_join_room_div">
                    <div class="AlertBoxBackground">
                    </div>
                    <div class="AlertBox">
                      <div class="AlertBoxTitle">
                        Entrar a Sala
                      </div>
                      <div class="AlertBoxContent blackShadow">
                        <p>
                          <label for="join_room_input" id="join_room1">
                            Numero:
                          </label>
                          <input type="text" value="" id="join_room_input" maxlength="10" class="input_field">
                        </p>
                        <br>
                        <p>
                          <label for="join_password_input" id="join_room2">
                            Contraseña:
                          </label>
                          <input type="text" value="" id="join_password_input" maxlength="10" class="input_field">
                        </p>
                        <div id="dialog_join_room_ok" class="buttonOK">
                        </div>
                        <div id="dialog_join_room_cancel" class="buttonCancel">
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type="text" id="channelInput" value="" maxlength="150" class="TBGnBorder">
                  <div id="channel" class="TBGnBorder">
                    <div class="scrollbar" style="height: 101px; display: none;">
                      <div class="track" style="height: 101px;">
                        <div class="thumb" style="height: 49.838427947598255px; top: 51.16157205240175px;">
                          <div class="end">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="CanSelect overview" id="channelTextHtml" style="top: 0px;">
                        <div class="zotata-chat-line zotata-chat-type0">
                          Cynthia Dominguez P] jaja
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          Oscar Alvarado Nuñez] hola
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          Oscar Alvarado Nuñez] ya pz
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          Oscar Alvarado Nuñez] donde
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          Oscar Alvarado Nuñez] holaaaaaaaaaaaaaaaaaaaaaaaaaaa
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          Cynthia Dominguez P] crea
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          <span class="GuildName">
                            $SJL$
                          </span>
                          JuNiiOrAlaraKo] hijos de perra levelee en una hora si quieren saber el el truco llamen a este numero
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          <span class="GuildName">
                            $SJL$
                          </span>
                          JuNiiOrAlaraKo] 95**6593*
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          <span class="GuildName">
                            $SJL$
                          </span>
                          JuNiiOrAlaraKo] nuevo truco
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          <span class="GuildName">
                            $SJL$
                          </span>
                          JuNiiOrAlaraKo] antes q se den cuenta
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          <span class="GuildName">
                            $SJL$
                          </span>
                          JuNiiOrAlaraKo] en acha plateada en 1 hora
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          <span class="GuildName">
                            $SJL$
                          </span>
                          JuNiiOrAlaraKo] de pollo a acha plaateada
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          <span class="GuildName">
                            ??DB??
                          </span>
                          Antony Valderrama3] x
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          <span class="GuildName">
                            CHALOM
                          </span>
                          Edgard Bustamante Pa] j
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          <span class="GuildName">
                            CHALOM
                          </span>
                          Edgard Bustamante Pa] jm
                        </div>
                        <div class="zotata-chat-line zotata-chat-type9">
                          <div class="zotata-chat-icon zotata-chat-icon9">
                          </div>
                          Welcome to DragonBound 5.0! -
                          <a href="http://www.dragonbound-news.com/" target="_blank">DragonBound News (NEW!)</a>
                        </div>
                        <div class="zotata-chat-line zotata-chat-type9">
                          <div class="zotata-chat-icon zotata-chat-icon9">
                          </div>
                          New: Tournament Servers, Custom Maps, Random Teams, New Avatars, Disable S1/Teleport, Video Chat
                        </div>
                        <div class="zotata-chat-line zotata-chat-type0">
                          Angel Rospigliosi] q fue
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="playersList" class="NoSelect TBG">
                    <div class="scrollbar disable" style="height: 207px; display: none;">
                      <div class="track" style="height: 207px;">
                        <div class="thumb" style="height: 207px; top: 0px;">
                          <div class="end">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="overview" id="channelPlayersListHtml" style="top: 0px;">
                        <div class="playerListItem" id="player_user_id_2701993" user_id="2701993">
                          <div class="playerListRank rank rank2">
                          </div>
                          <div class="playerListName blackShadow">
                            Lean *w*
                          </div>
                        </div>
                        <div class="playerListItem" id="player_user_id_836610" user_id="836610">
                          <div class="playerListRank rank rank2">
                          </div>
                          <div class="playerListName blackShadow">
                            <span class="GuildName">
                              CHALOM
                            </span>
                            Edgard Bustamante Pa
                          </div>
                        </div>
                        <div class="playerListItem" id="player_user_id_2675921" user_id="2675921">
                          <div class="playerListRank rank rank5">
                          </div>
                          <div class="playerListName blackShadow">
                            <span class="GuildName">
                              pegazo
                            </span>
                            persie
                          </div>
                        </div>
                        <div class="playerListItem" id="player_user_id_146634" user_id="146634">
                          <div class="playerListRank rank rank0">
                          </div>
                          <div class="playerListName blackShadow">
                            Carlos 22
                          </div>
                        </div>
                        <div class="playerListItem" id="player_user_id_2541068" user_id="2541068">
                          <div class="playerListRank rank rank4">
                          </div>
                          <div class="playerListName blackShadow">
                            a1k4
                          </div>
                        </div>
                        <div class="playerListItem" id="player_user_id_2042721" user_id="2042721">
                          <div class="playerListRank rank rank2">
                          </div>
                          <div class="playerListName blackShadow">
                            El Guachin
                          </div>
                        </div>
                        <div class="playerListItem" id="player_user_id_2466387" user_id="2466387">
                          <div class="playerListRank rank rank4">
                          </div>
                          <div class="playerListName blackShadow">
                            <span class="GuildName">
                              ?pro?
                            </span>
                            Gabriel Lazaro
                          </div>
                        </div>
                        <div class="playerListItem" id="player_user_id_2744712" user_id="2744712">
                          <div class="playerListRank rank rank5">
                          </div>
                          <div class="playerListName blackShadow">
                            <span class="GuildName">
                              +pro''
                            </span>
                            Joseph Henry
                          </div>
                        </div>
                        <div class="playerListItem" id="player_user_id_2764195" user_id="2764195">
                          <div class="playerListRank rank rank0">
                          </div>
                          <div class="playerListName blackShadow">
                            Rosali Alvarado Sanc
                          </div>
                        </div>
                        <div class="playerListItem" id="player_user_id_1470716" user_id="1470716">
                          <div class="playerListRank rank rank4">
                          </div>
                          <div class="playerListName blackShadow">
                            Renzito xD
                          </div>
                        </div>
                      </div>
                      <div class="overview hide" id="channelFriendsListHtml" style="top: 0px;">
                      </div>
                    </div>
                  </div>
                  <div id="FacebookLike" class="NoSelect fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="http://DragonBound.net" data-send="true" data-layout="button_count" data-width="360" data-show-faces="false"
                  data-font="verdana" data-colorscheme="dark" fb-xfbml-state="rendered">
                    <span style="height: 20px; width: 131px;">
                      <iframe id="f2841df17c" name="f1189f5e98" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=154795011315451&amp;locale=en_US&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D25%23cb%3Df36dc1572%26origin%3Dhttp%253A%252F%252Fdragonbound.net%252Ff1fa5f4b28%26domain%3Ddragonbound.net%26relation%3Dparent.parent&amp;href=http%3A%2F%2FDragonBound.net&amp;node_type=link&amp;width=360&amp;font=verdana&amp;layout=button_count&amp;colorscheme=dark&amp;show_faces=false&amp;send=true&amp;extended_social_context=false"
                      style="border: none; overflow: hidden; height: 20px; width: 131px;">
                      </iframe>
                    </span>
                  </div>
                  <div id="Tweeter">
                    <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.1372833608.html#_=1374039492746&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fdragonbound.net%2F&amp;size=m&amp;text=DragonBound.net%20-%20Next%20generation%20HTML5%20online%20massive%20multi-player%20game!&amp;url=http%3A%2F%2Fdragonbound.net"
                    class="twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 110px; height: 20px;">
                    </iframe>
                  </div>
                  <div id="GooglePlus">
                    <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background-position: initial initial; background-repeat: initial initial;">
                      <iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;"
                      tabindex="0" vspace="0" width="100%" id="I0_1374039492772" name="I0_1374039492772" src="https://apis.google.com/_/+1/fastbutton?bsv&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Fdragonbound.net&amp;url=http%3A%2F%2Fdragonbound.net%2F&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.es.xGxG4ekMnlo.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTN47MmnuZkGa0TY5xYGPRKMGKoW3Q#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Conload&amp;id=I0_1374039492772&amp;parent=http%3A%2F%2Fdragonbound.net&amp;pfname=&amp;rpctoken=28956121"
                      allowtransparency="true" data-gapiattached="true" title="+1">
                      </iframe>
                    </div>
                  </div>
                  <div id="myInfoBox">
                  </div>
                  <div id="myRank2" class="rank rank0">
                  </div>
                  <div id="myName2" class="blackShadow NoSelect">
                    Carlos 22
                  </div>
                  <div id="myGP2" class="blackShadow NoSelect">
                    804 GP
                  </div>
                  <div id="myGold2" class="blackShadow NoSelect">
                    83,624 Gold
                  </div>
                  <div id="myCash2" class="blackShadow NoSelect">
                    1,290 Cash
                  </div>
                  <div id="myPhotoDiv">
                    <img id="myPhotoImage2" src="http://graph.facebook.com/100000014337670/picture?type=large" alt="My Photo">
                  </div>
                  <div id="channel_player">
                  </div>
                  <div id="channelName" class="blackShadow NoSelect TBGnBorder">
                    Servidor 3 - Principiantes
                  </div>
                  <div id="tournament_info" class="blackShadow NoSelect">
                  </div>
                  <div id="roomsList">
                    <div class="room" id="room0" style="display: block;">
                      <div class="roomNumber blackShadow">
                        1
                      </div>
                      <div class="roomTitle blackShadow">
                        Ponte arañita (aduka) :33
                      </div>
                      <div class="numPlayers whiteShadow">
                        8
                      </div>
                      <div class="maxPlayers whiteShadow">
                        8
                      </div>
                      <div class="status status-playing">
                      </div>
                      <div class="roomMap" style="background-position: 0px -500px;">
                      </div>
                      <div class="gameMode iconModeNormal">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember" style="display: none;">
                      </div>
                      <div class="roomBuddy" style="display: none;">
                      </div>
                    </div>
                    <div class="room" id="room1" style="display: block;">
                      <div class="roomNumber blackShadow">
                        2
                      </div>
                      <div class="roomTitle blackShadow">
                        Welcome
                      </div>
                      <div class="numPlayers whiteShadow">
                        2
                      </div>
                      <div class="maxPlayers whiteShadow">
                        2
                      </div>
                      <div class="status status-playing">
                      </div>
                      <div class="roomMap" style="background-position: 0px -500px;">
                      </div>
                      <div class="gameMode iconModeNormal">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember" style="display: none;">
                      </div>
                      <div class="roomBuddy" style="display: none;">
                      </div>
                    </div>
                    <div class="room" id="room2" style="display: block;">
                      <div class="roomNumber blackShadow">
                        3
                      </div>
                      <div class="roomTitle blackShadow">
                        aduka o kick
                      </div>
                      <div class="numPlayers whiteShadow">
                        8
                      </div>
                      <div class="maxPlayers whiteShadow">
                        8
                      </div>
                      <div class="status status-playing">
                      </div>
                      <div class="roomMap" style="background-position: 0px -500px;">
                      </div>
                      <div class="gameMode iconModeNormal">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember" style="display: none;">
                      </div>
                      <div class="roomBuddy" style="display: none;">
                      </div>
                    </div>
                    <div class="room" id="room3" style="display: block;">
                      <div class="roomNumber blackShadow">
                        6
                      </div>
                      <div class="roomTitle blackShadow">
                        Hello World
                      </div>
                      <div class="numPlayers whiteShadow">
                        4
                      </div>
                      <div class="maxPlayers whiteShadow">
                        4
                      </div>
                      <div class="status status-playing">
                      </div>
                      <div class="roomMap" style="background-position: 0px -250px;">
                      </div>
                      <div class="gameMode iconModeSame">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember" style="display: none;">
                      </div>
                      <div class="roomBuddy" style="display: none;">
                      </div>
                    </div>
                    <div class="room" id="room4" style="display: block;">
                      <div class="roomNumber blackShadow">
                        10
                      </div>
                      <div class="roomTitle blackShadow">
                        The Love Room
                      </div>
                      <div class="numPlayers whiteShadow">
                        4
                      </div>
                      <div class="maxPlayers whiteShadow">
                        4
                      </div>
                      <div class="status status-playing">
                      </div>
                      <div class="roomMap" style="background-position: 0px 0px;">
                      </div>
                      <div class="gameMode iconModeNormal">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember" style="display: none;">
                      </div>
                      <div class="roomBuddy" style="display: none;">
                      </div>
                    </div>
                    <div class="room" id="room5" style="display: block;">
                      <div class="roomNumber blackShadow">
                        11
                      </div>
                      <div class="roomTitle blackShadow">
                        Hello World
                      </div>
                      <div class="numPlayers whiteShadow">
                        4
                      </div>
                      <div class="maxPlayers whiteShadow">
                        6
                      </div>
                      <div class="status status-playing">
                      </div>
                      <div class="roomMap" style="background-position: 0px 0px;">
                      </div>
                      <div class="gameMode iconModeNormal">
                      </div>
                      <div class="roomLock">
                      </div>
                      <div class="roomGuildMember" style="display: none;">
                      </div>
                      <div class="roomBuddy" style="display: none;">
                      </div>
                    </div>
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonCreateRoom">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonMyInfo">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonShop">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonCharge2">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonJoin">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonQuickJoin">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonRoomsListUp">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonRoomsListDown">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton open" id="buttonRanking">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton blackShadow" id="facebook_post">
                    <div class="event_button_text">
                      +?? Cash
                    </div>
                  </div>
                  <div class="NoSelect opacity_button LobbyButton blackShadow" id="event_button">
                    <div class="event_button_text">
                      +?? Gold
                    </div>
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonOptions">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonChannels">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="buttonAllBuddyList">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="filter_all">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="filter_waiting">
                  </div>
                  <div class="NoSelect opacity_button iconModeNormal" id="filter_normal">
                  </div>
                  <div class="NoSelect opacity_button iconModeBoss" id="filter_boss">
                  </div>
                  <div class="NoSelect opacity_button iconModeSame" id="filter_same">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="filter_friends">
                  </div>
                  <div class="NoSelect opacity_button LobbyButton" id="filter_guild">
                  </div>
                  <div class="NoSelect glow_button hide StartGame" id="buttonStart1v1">
                    Start 1v1 Game
                  </div>
                  <div class="NoSelect glow_button hide StartGame" id="buttonCreateTeam">
                    Create Team
                  </div>
                  <div class="NoSelect glow_button hide StartGame" id="buttonJoinTeam">
                    Join Team
                  </div>
                  <div id="lobbyButtonMobile" class="NoSelect buttonMobile hide glow_button">
                  </div>
                  <div id="dialogCreateRoom" class="ui-widget-content" style="z-index: 1002;">
                    <input type="text" id="createRoomTitle" value="Hello World" maxlength="30">
                    <div id="CreateRoomPrivateCheckbox" class="checkboxOff opacity_button">
                    </div>
                    <div id="CreateRoomPassword" class="hide">
                      <input type="text" id="createRoomPasswordInput" value="" maxlength="10">
                    </div>
                    <div id="CreateRoomNumPlayersPrev" class="buttonPrev opacity_button">
                    </div>
                    <div id="CreateRoomNumPlayersNext" class="buttonNext opacity_button">
                    </div>
                    <div id="CreateRoomPlayers" class="players4vB">
                    </div>
                    <div id="CreateRoomModePrev" class="buttonPrev opacity_button">
                    </div>
                    <div id="CreateRoomModeNext" class="buttonNext opacity_button">
                    </div>
                    <div id="CreateRoomMode" class="gameModeBoss">
                    </div>
                    <div id="CreateRoomModeIcon" class="iconModeBoss">
                    </div>
                    <div id="CreateRoomModeText">
                    </div>
                    <div id="dialogCreateRoomButtonCancel" class="buttonCancel">
                    </div>
                    <div id="dialogCreateRoomButtonOK" class="buttonOK">
                    </div>
                    <div id="dialogCreateLocked">
                    </div>
                    <div id="dialogCreateMessage">
                    </div>
                  </div>
                  <div id="myName" class="hide">
                    <span>
                      6i
                    </span>
                    TSP
                  </div>
                  <div id="myRank" class="hide rank0">
                  </div>
                  <div id="myGP" class="hide">
                    27090"&gt;
                  </div>
                  <div id="myGold" class="hide">
                    17871"&gt;
                  </div>
                  <div id="myCash" class="hide">
                    640"&gt;
                  </div>
                  <div id="myPhotoImage" class="hide" src="http://graph.facebook.com/669100765/picture?type=large">
                    93"&gt;
                  </div>
                </div>
                <div class="screen" id="roomScreen">
                  <div id="team_search">
                  </div>
                  <div id="roomOverly">
                    <div id="roomInfoBG">
                    </div>
                    <div id="roomItemsBG" class="TBG">
                    </div>
                    <div id="roomInfo1" class="blackShadow">
                      Game Mode:
                    </div>
                    <div id="roomInfo2" class="blackShadow">
                      Players:
                    </div>
                    <div id="roomInfo3" class="blackShadow">
                      Avatars:
                    </div>
                    <div id="roomInfo4" class="blackShadow">
                      Max Wind:
                    </div>
                    <div id="roomInfo5" class="blackShadow">
                      ^ Using Items ^
                    </div>
                    <div id="roomInfo6" class="blackShadow">
                      Available Items:
                    </div>
                  </div>
                  <div id="roomNumber" class="blackShadow">
                  </div>
                  <div id="roomTitle" class="blackShadow">
                  </div>
                  <div id="roomButtonBack">
                  </div>
                  <div id="roomButtonReady" class="opacity_button">
                  </div>
                  <div id="roomButtonStart" class="opacity_button">
                  </div>
                  <div id="roomButtonChangeTeam">
                  </div>
                  <div id="roomButtonMobile" class="buttonMobile">
                  </div>
                  <div id="DragonVideoControls">
                    <div id="roomButtonVideoChat" class="opacity_button">
                      VideoChat
                    </div>
                    <div id="videoChannelDiv" class="blackShadow">
                      <nobr>
                        CH:
                        <input id="VideoChannelInput">
                      </nobr>
                    </div>
                    <div id="DrgaonVideoBeta" class="blackShadow">
                      BETA
                    </div>
                  </div>
                  <div class="playerInRoom SideA" id="playerInRoom0">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideA" id="playerInRoom2">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideA" id="playerInRoom4">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideA" id="playerInRoom6">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideB" id="playerInRoom1">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomBotRemove opacity_button">
                    </div>
                    <div class="roomBotSelect opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideB" id="playerInRoom3">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomBotRemove opacity_button">
                    </div>
                    <div class="roomBotSelect opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideB" id="playerInRoom5">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomBotRemove opacity_button">
                    </div>
                    <div class="roomBotSelect opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div class="playerInRoom SideB" id="playerInRoom7">
                    <div class="roomPlayerRank">
                    </div>
                    <div class="roomPlayerName blackShadow">
                    </div>
                    <div class="roomPlayerInfo opacity_button">
                    </div>
                    <div class="roomBotRemove opacity_button">
                    </div>
                    <div class="roomBotSelect opacity_button">
                    </div>
                    <div class="roomPlayerReady">
                    </div>
                    <div class="roomPlayerNotReady">
                    </div>
                    <div class="roomPlayerMaster">
                    </div>
                    <div class="roomPlayerMobile">
                    </div>
                    <div class="roomPlayerMyself">
                    </div>
                    <div class="roomPlayerBalloon">
                    </div>
                    <div class="roomPlayerBalloonTip">
                    </div>
                  </div>
                  <div id="vortex0" class="vortex">
                  </div>
                  <div id="vortex1" class="vortex">
                  </div>
                  <div id="vortex2" class="vortex">
                  </div>
                  <div id="vortex3" class="vortex">
                  </div>
                  <div id="vortex4" class="vortex">
                  </div>
                  <div id="vortex5" class="vortex">
                  </div>
                  <div id="vortex6" class="vortex">
                  </div>
                  <div id="vortex7" class="vortex">
                  </div>
                  <div id="add_bot_button" class="opacity_button">
                  </div>
                  <div id="itemSlot0" class="itemDual">
                  </div>
                  <div id="itemSlot1">
                  </div>
                  <div id="itemSlot2" class="itemDual">
                  </div>
                  <div id="itemSlot3">
                  </div>
                  <div id="itemSlot4" class="itemTeleport">
                  </div>
                  <div id="itemSlot5">
                  </div>
                  <div id="itemDual" class="itemDual">
                  </div>
                  <div id="itemTeleport" class="itemTeleport">
                  </div>
                  <div id="room_timer">
                    <div id="room_timer_text">
                    </div>
                  </div>
                  <div id="room_game_mode">
                  </div>
                  <div id="room_players">
                  </div>
                  <div id="room_avatars" class="blackShadow">
                  </div>
                  <div id="room_wind" class="blackShadow">
                  </div>
                  <div id="room_change_title_button" class="opacity_button">
                  </div>
                  <div id="room_item_buddy_tab" class="opacity_button">
                  </div>
                  <div id="friendsListExtra">
                    Puedes agregar amigos haciendo click en "Info" cerca de ellos y luego "Añadir"
                  </div>
                  <div id="guildRoomTabExtra">
                    El líder de un guild puede invitarte haciendo click en tu "Info" y luego pulsando "Invitación para Guild"
                  </div>
                  <div id="room_options_button" class="opacity_button room_options_button_fix">
                  </div>
                  <div id="room_map" class="room_map_fix">
                  </div>
                  <div id="gp_team_a" class="blackShadow">
                  </div>
                  <div id="gp_team_b" class="blackShadow">
                  </div>
                  <div id="gp_rate" class="blackShadow">
                  </div>
                  <div id="no_win_bonus" class="blackShadow">
                  </div>
                  <div id="RoomS1Disabled" class="NoSelect imgS1 grayscale">
                  </div>
                  <div id="RoomRandomTeams" class="NoSelect blackShadow">
                    Random Teams
                  </div>
                  <input type="text" id="roomInput" value="" maxlength="150" class="TBGnBorder">
                  <div id="roomChat" class="TBGnBorder">
                    <div class="scrollbar" style="height: 58px; display: none;">
                      <div class="track" style="height: 58px;">
                        <div class="thumb">
                          <div class="end">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="CanSelect overview" id="roomChatHtml" style="top: 0px;">
                      </div>
                    </div>
                  </div>
                  <div id="dialog_change_title_div" class="hide">
                    <div class="AlertBoxBackground">
                    </div>
                    <div class="AlertBox">
                      <div class="AlertBoxTitle">
                        Título de Sala
                      </div>
                      <div class="AlertBoxContent blackShadow">
                        <br>
                        <p>
                          <label for="room_change_title_input">
                            Nuevo Título
                          </label>
                          <input type="text" value="" id="room_change_title_input" maxlength="30" class="input_field">
                        </p>
                        <div id="dialog_change_title_ok" class="buttonOK">
                        </div>
                        <div id="dialog_change_title_cancel" class="buttonCancel">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="playerInfoDialog" style="z-index: 1004;">
                    <div id="infoLoading" class="blackShadow">
                      Cargando...
                    </div>
                    <div id="infoKey1" class="blackShadow">
                      Ranking
                    </div>
                    <div id="infoKey2" class="blackShadow">
                      Género
                    </div>
                    <div id="infoKey3" class="blackShadow">
                      GP
                    </div>
                    <div id="infoKey4" class="blackShadow">
                      % de Victorias
                    </div>
                    <div id="infoKey5" class="blackShadow">
                      Daño Prom.
                    </div>
                    <div id="infoKey6" class="blackShadow">
                      Ganadas
                    </div>
                    <div id="infoKey7" class="blackShadow">
                      Perdidas
                    </div>
                    <div id="infoKey8" class="blackShadow">
                      Guild
                    </div>
                    <div id="infoKey9" class="blackShadow">
                      Cargo en el Guild
                    </div>
                    <div id="infoName" class="blackShadow">
                    </div>
                    <div id="infoRanking" class="blackShadow">
                    </div>
                    <div id="infoGender" class="blackShadow">
                    </div>
                    <div id="infoGP" class="blackShadow">
                    </div>
                    <div id="infoWinRate" class="blackShadow">
                    </div>
                    <div id="infoDamage" class="blackShadow">
                    </div>
                    <div id="infoWin" class="blackShadow">
                    </div>
                    <div id="infoLose" class="blackShadow">
                    </div>
                    <div id="infoGuild" class="blackShadow">
                    </div>
                    <div id="infoGuildJob" class="blackShadow">
                    </div>
                    <div id="infoRank" class="rank rank0">
                    </div>
                    <div id="infoImageDiv">
                      <div id="infoImageDiv2">
                        <img id="infoImage" src="/static/images/fb_boy.gif" alt="Photo">
                      </div>
                    </div>
                    <div id="infoAddBuddy" class="opacity_button">
                    </div>
                    <div id="infoGuildInvite" class="opacity_button">
                    </div>
                    <div id="infoChat" class="opacity_button">
                    </div>
                    <div id="infoClose" class="opacity_button">
                    </div>
                  </div>
                  <div id="dialog_room_options" class="hide NoSelect">
                    <div id="RoomOptionsNumPlayersPrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsNumPlayersNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsPlayers" class="NoSelect">
                    </div>
                    <div id="RoomOptionsModePrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsModeNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsMode" class="NoSelect">
                    </div>
                    <div id="RoomOptionsModeIcon" class="NoSelect iconModeBoss">
                    </div>
                    <div id="RoomOptionsModeLocked" class="NoSelect imgLock">
                    </div>
                    <div id="RoomOptionsMessage" class="NoSelect">
                    </div>
                    <div id="RoomOptionsMapPrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsMapNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsMapName" class="NoSelect">
                    </div>
                    <div id="RoomOptionsMapImage" class="NoSelect">
                    </div>
                    <div id="RoomOptionsAvatars" class="NoSelect blackShadow">
                    </div>
                    <div id="RoomOptionsAvatarsPrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsAvatarsNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsAvatarsGP" class="NoSelect blackShadow">
                    </div>
                    <div id="RoomOptionsWind" class="NoSelect blackShadow">
                    </div>
                    <div id="RoomOptionsWindPrev" class="NoSelect buttonPrev opacity_button">
                    </div>
                    <div id="RoomOptionsWindNext" class="NoSelect buttonNext opacity_button">
                    </div>
                    <div id="RoomOptionsWindGP" class="NoSelect blackShadow">
                    </div>
                    <div id="RoomOptionsRandomTeams" class="NoSelect grayscale blackShadow glow_button">
                      [ ] Random Teams
                    </div>
                    <div id="RoomOptionsRandomTeamsRank" class="NoSelect rank rank7">
                    </div>
                    <div id="RoomOptionsRandomTeamsLock" class="NoSelect imgLock">
                    </div>
                    <div id="RoomOptionsTele" class="NoSelect itemTeleport glow_button">
                    </div>
                    <div id="RoomOptionsTeleRank" class="NoSelect rank rank11">
                    </div>
                    <div id="RoomOptionsTeleLock" class="NoSelect imgLock">
                    </div>
                    <div id="RoomOptionsS1" class="NoSelect imgS1 glow_button">
                    </div>
                    <div id="RoomOptionsS1Rank" class="NoSelect rank rank9">
                    </div>
                    <div id="RoomOptionsS1Lock" class="NoSelect imgLock">
                    </div>
                    <div id="RoomOptionsCustomMap" class="NoSelect opacity_button">
                      <a href="/static/images/custom_maps.png" target="_blank">(Drag PNG for custom map)</a>
                    </div>
                    <div id="RoomOptionsCancel" class="NoSelect buttonCancel">
                    </div>
                    <div id="RoomOptionsOK" class="NoSelect buttonOK">
                    </div>
                  </div>
                  <div id="select_bot_div">
                  </div>
                </div>
                <div class="screen" id="gameScreen">
                  <div id="game_back" style="position: fixed; overflow: hidden;">
                    <div id="map_bg" style="display: block;">
                    </div>
                    <div id="ss_shot_background">
                    </div>
                    <div id="camera">
                      <canvas id="ground_canvas">
                      </canvas>
                      <div id="thor">
                        <div id="thor_rotate">
                          <div id="thor_laser">
                          </div>
                        </div>
                        <div id="thor_lvl" class="blackShadow">
                        </div>
                        <div id="thor_damage" class="blackShadow">
                        </div>
                      </div>
                      <div id="game_objects">
                      </div>
                    </div>
                  </div>
                  <div id="game_front" style="position: fixed; overflow: hidden;">
                    <div id="turn_timer">
                    </div>
                    <div id="gameui">
                      <div id="powerBar">
                      </div>
                      <div id="walkBar">
                      </div>
                      <div id="powerMarkArea">
                        <div id="powerMark">
                        </div>
                      </div>
                      <canvas id="MyAngle" width="39" height="13">
                      </canvas>
                      <div class="UIGoldDigit" id="UIGoldDigit0">
                      </div>
                      <div class="UIGoldDigit" id="UIGoldDigit1">
                      </div>
                      <div class="UIGoldDigit" id="UIGoldDigit2">
                      </div>
                      <div class="UIGoldDigit" id="UIGoldDigit3">
                      </div>
                      <div class="UIGoldDigit" id="UIGoldDigit4">
                      </div>
                      <div id="btnShot1" class="Pressed">
                      </div>
                      <div id="btnShot2">
                      </div>
                      <div id="btnShotSS">
                      </div>
                      <div id="btnPass" class="opacity_button">
                      </div>
                      <div id="btnEsc" class="opacity_button">
                      </div>
                      <div id="gameItemSlot0">
                      </div>
                      <div id="gameItemSlot1">
                      </div>
                      <div id="gameItemSlot2">
                      </div>
                      <div id="gameItemSlot3">
                      </div>
                      <div id="gameItemSlot4">
                      </div>
                      <div id="gameItemSlot5">
                      </div>
                      <div id="last_power_mark">
                      </div>
                      <div id="weatherSlot0">
                      </div>
                      <div id="weatherSlot1">
                      </div>
                      <div id="weatherSlot2">
                      </div>
                      <div id="weatherSlot3">
                      </div>
                      <div id="weatherSlot4">
                      </div>
                      <div id="slice_drag_button">
                      </div>
                      <div id="LastAngleDigit-" class="LastAngleDigit LastAngleDigit-">
                      </div>
                      <div id="LastAngleDigit1">
                      </div>
                      <div id="LastAngleDigit2">
                      </div>
                      <div id="message_over_items">
                      </div>
                      <div id="all_chat">
                      </div>
                      <div id="team_chat">
                      </div>
                    </div>
                    <div id="turns_list">
                      <div class="turn_list_title blackShadow">
                        Lista de turnos
                      </div>
                      <div class="turn_line" id="turn_line0">
                        <div class="turn_line_number turn_line_number0">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line1">
                        <div class="turn_line_number turn_line_number1">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line2">
                        <div class="turn_line_number turn_line_number2">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line3">
                        <div class="turn_line_number turn_line_number3">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line4">
                        <div class="turn_line_number turn_line_number4">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line5">
                        <div class="turn_line_number turn_line_number5">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line6">
                        <div class="turn_line_number turn_line_number6">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                      <div class="turn_line" id="turn_line7">
                        <div class="turn_line_number turn_line_number7">
                        </div>
                        <div class="turn_line_rank">
                        </div>
                        <div class="turn_line_name blackShadow">
                        </div>
                        <div class="turn_line_delay blackShadow">
                        </div>
                      </div>
                    </div>
                    <input type="text" id="gameInput" value="" maxlength="150">
                    <div id="gameChat">
                      <div class="scrollbar" style="height: 99px; display: none;">
                        <div class="track" style="height: 99px;">
                          <div class="thumb">
                            <div class="end">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="viewport">
                        <div class="CanSelect overview" id="gameChatHtml" style="top: 0px;">
                        </div>
                      </div>
                    </div>
                    <canvas id="wind_meter2" width="54" height="54">
                    </canvas>
                    <div id="game_replay">
                      &lt;&lt; Replay del Juego &gt;&gt;
                    </div>
                    <div id="touch_ui">
                      <div id="btnShoot">
                      </div>
                      <div id="btnRight">
                      </div>
                      <div id="btnLeft">
                      </div>
                      <div id="btnUp">
                      </div>
                      <div id="btnDown">
                      </div>
                    </div>
                    <div id="game_over">
                      <div id="scores_lose_a">
                      </div>
                      <div id="scores_lose_b">
                      </div>
                      <div class="score" id="score0">
                        <div class="score_me">
                        </div>
                        <div class="score_rank">
                        </div>
                        <div class="score_name blackShadow">
                        </div>
                        <div class="score_gp blackShadow">
                        </div>
                        <div class="score_gold blackShadow">
                        </div>
                        <div class="score_bonus_gp blackShadow">
                        </div>
                        <div class="score_bonus_gold blackShadow">
                        </div>
                      </div>
                      <div class="score" id="score1">
                        <div class="score_me">
                        </div>
                        <div class="score_rank">
                        </div>
                        <div class="score_name blackShadow">
                        </div>
                        <div class="score_gp blackShadow">
                        </div>
                        <div class="score_gold blackShadow">
                        </div>
                        <div class="score_bonus_gp blackShadow">
                        </div>
                        <div class="score_bonus_gold blackShadow">
                        </div>
                      </div>
                      <div class="score" id="score2">
                        <div class="score_me">
                        </div>
                        <div class="score_rank">
                        </div>
                        <div class="score_name blackShadow">
                        </div>
                        <div class="score_gp blackShadow">
                        </div>
                        <div class="score_gold blackShadow">
                        </div>
                        <div class="score_bonus_gp blackShadow">
                        </div>
                        <div class="score_bonus_gold blackShadow">
                        </div>
                      </div>
                      <div class="score" id="score3">
                        <div class="score_me">
                        </div>
                        <div class="score_rank">
                        </div>
                        <div class="score_name blackShadow">
                        </div>
                        <div class="score_gp blackShadow">
                        </div>
                        <div class="score_gold blackShadow">
                        </div>
                        <div class="score_bonus_gp blackShadow">
                        </div>
                        <div class="score_bonus_gold blackShadow">
                        </div>
                      </div>
                      <div class="score" id="score4">
                        <div class="score_me">
                        </div>
                        <div class="score_rank">
                        </div>
                        <div class="score_name blackShadow">
                        </div>
                        <div class="score_gp blackShadow">
                        </div>
                        <div class="score_gold blackShadow">
                        </div>
                        <div class="score_bonus_gp blackShadow">
                        </div>
                        <div class="score_bonus_gold blackShadow">
                        </div>
                      </div>
                      <div class="score" id="score5">
                        <div class="score_me">
                        </div>
                        <div class="score_rank">
                        </div>
                        <div class="score_name blackShadow">
                        </div>
                        <div class="score_gp blackShadow">
                        </div>
                        <div class="score_gold blackShadow">
                        </div>
                        <div class="score_bonus_gp blackShadow">
                        </div>
                        <div class="score_bonus_gold blackShadow">
                        </div>
                      </div>
                      <div class="score" id="score6">
                        <div class="score_me">
                        </div>
                        <div class="score_rank">
                        </div>
                        <div class="score_name blackShadow">
                        </div>
                        <div class="score_gp blackShadow">
                        </div>
                        <div class="score_gold blackShadow">
                        </div>
                        <div class="score_bonus_gp blackShadow">
                        </div>
                        <div class="score_bonus_gold blackShadow">
                        </div>
                      </div>
                      <div class="score" id="score7">
                        <div class="score_me">
                        </div>
                        <div class="score_rank">
                        </div>
                        <div class="score_name blackShadow">
                        </div>
                        <div class="score_gp blackShadow">
                        </div>
                        <div class="score_gold blackShadow">
                        </div>
                        <div class="score_bonus_gp blackShadow">
                        </div>
                        <div class="score_bonus_gold blackShadow">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="screen NoSelect" id="shopScreen" style="display: block;">
                  <div id="shopOverly">
                    <div id="shopTitle" class="blackShadow NoSelect">
                      Items Shop
                    </div>
                    <div id="shopMyBox">
                    </div>
                    <div id="shopInvBox" class="TBGnBorder">
                    </div>
                    <div id="shopInvTitle" class="blackShadow NoSelect">
                      My Items
                    </div>
                  </div>
                  <div id="buttonShopExit" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopBuy" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopHead" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopBody" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopEyes" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopFlag" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopBackground" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopForeground" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopExItem" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopPrev" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="buttonShopNext" class="opacity_button NoSelect shopButton">
                  </div>
                  <div id="shop_player">
                    <div class="AniObject FlipH" style="position: absolute; width: 39px; height: 31px; margin-left: -28px; margin-top: -31px; opacity: 1; background-image: url(http://dragonbound.net/static/images/avatars/mh03289.png); background-color: transparent; zoom: 1; z-index: 5; left: 0px; top: -19px; background-position: -1214px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="AniObject FlipH" style="position: absolute; width: 20px; height: 16px; margin-left: -17px; margin-top: -3px; opacity: 1; background-image: url(http://dragonbound.net/static/images/avatars/mb03288.png); background-color: transparent; zoom: 1; z-index: 4; left: 0px; top: -19px; background-position: -171px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                  </div>
                  <div id="shop_my_cash" class="cashShadow">
                    1,290 Cash
                  </div>
                  <div id="shop_my_gold" class="goldShadow">
                    83,624 Gold
                  </div>
                  <div id="shop_my_stats">
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_pop">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_shld">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon stat_icon_item">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon stat_icon_def">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon stat_icon_life">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon stat_icon_atk">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon stat_icon_dig">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon stat_icon_time">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                  </div>
                  <div id="shop_my_items_container">
                    <div class="scrollbar disable" style="height: 237px; display: none;">
                      <div class="track" style="height: 237px;">
                        <div class="thumb" style="height: 237px;">
                          <div class="end">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="overview NoSelect" id="shop_my_items" style="top: 0px;">
                      </div>
                    </div>
                  </div>
                  <div id="shop_my_items_number">
                    <div class="digit0 stat_font stat_font0">
                    </div>
                    <div class="digit1">
                    </div>
                    <div class="digit2">
                    </div>
                    <div class="digit3">
                    </div>
                  </div>
                  <div id="shop_item0" class="shop_item" avatar_index="800">
                    <div class="shop_item_icon shop_item_icon_hm">
                    </div>
                    <div class="shop_item_name blackShadow">
                      DragonPower
                    </div>
                    <div class="shop_item_image NoSelect" style="background-image: url(http://dragonbound.net/static/images/avatars/mh03333.png); width: 36px; height: 52px; left: 61px; background-position: -40px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_pop">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font6">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_dig">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font2">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_cash cashShadow">
                      1,600 Cash
                    </div>
                    <div class="shop_item_gold goldShadow">
                      80,000 Gold
                    </div>
                  </div>
                  <div id="shop_item1" class="shop_item" avatar_index="797">
                    <div class="shop_item_icon shop_item_icon_hm">
                    </div>
                    <div class="shop_item_name blackShadow">
                      Afro 80
                    </div>
                    <div class="shop_item_image NoSelect" style="background-image: url(http://dragonbound.net/static/images/avatars/mh03330.png); width: 32px; height: 35px; left: 63px; background-position: -32px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_pop">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_time">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font5">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_cash cashShadow">
                      700 Cash
                    </div>
                    <div class="shop_item_gold goldShadow">
                      35,000 Gold
                    </div>
                  </div>
                  <div id="shop_item2" class="shop_item" avatar_index="794">
                    <div class="shop_item_icon shop_item_icon_hm">
                    </div>
                    <div class="shop_item_name blackShadow">
                      Demon Boy
                    </div>
                    <div class="shop_item_image NoSelect" style="background-image: url(http://dragonbound.net/static/images/avatars/mh03327.png); width: 25px; height: 38px; left: 66.5px; background-position: -27px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_atk">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font5">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_life">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font5">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon stat_icon_item">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font5">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_cash cashShadow">
                      2,525 Cash
                    </div>
                    <div class="shop_item_gold goldShadow">
                      126,250 Gold
                    </div>
                  </div>
                  <div id="shop_item3" class="shop_item" avatar_index="793">
                    <div class="shop_item_icon shop_item_icon_hm">
                    </div>
                    <div class="shop_item_name blackShadow">
                      Cow Boy
                    </div>
                    <div class="shop_item_image NoSelect" style="background-image: url(http://dragonbound.net/static/images/avatars/mh03326.png); width: 26px; height: 29px; left: 66px; background-position: -27px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_pop">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font6">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_item">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font6">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon stat_icon_shld">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font6">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_cash cashShadow">
                      1,875 Cash
                    </div>
                    <div class="shop_item_gold goldShadow">
                      93,750 Gold
                    </div>
                  </div>
                  <div id="shop_item4" class="shop_item" avatar_index="786">
                    <div class="shop_item_icon shop_item_icon_ha">
                    </div>
                    <div class="shop_item_name blackShadow">
                      Space Adventurer
                    </div>
                    <div class="shop_item_image NoSelect" style="background-image: url(http://dragonbound.net/static/images/avatars/ah03319.png); width: 31px; height: 44px; left: 63.5px; background-position: -29px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_pop">
                      </div>
                      <div class="stat_digit1 stat_font stat_font2">
                      </div>
                      <div class="stat_digit2 stat_font stat_font5">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_time">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font7">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon stat_icon_atk">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font4">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon stat_icon_dig">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font4">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_cash cashShadow">
                      2,500 Cash
                    </div>
                    <div class="shop_item_gold goldShadow">
                      600,000 Gold
                    </div>
                  </div>
                  <div id="shop_item5" class="shop_item" avatar_index="772">
                    <div class="shop_item_icon shop_item_icon_ha">
                    </div>
                    <div class="shop_item_name blackShadow">
                      Team Force
                    </div>
                    <div class="shop_item_image NoSelect" style="background-image: url(http://dragonbound.net/static/images/avatars/ah03305.png); width: 29px; height: 30px; left: 64.5px; background-position: -30px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_pop">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font5">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_atk">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font6">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_cash cashShadow">
                      1,875 Cash
                    </div>
                    <div class="shop_item_gold goldShadow">
                      90,000 Gold
                    </div>
                  </div>
                  <div id="shop_item6" class="shop_item" avatar_index="770">
                    <div class="shop_item_icon shop_item_icon_hm">
                    </div>
                    <div class="shop_item_name blackShadow">
                      Toilet Hat
                    </div>
                    <div class="shop_item_image NoSelect" style="background-image: url(http://dragonbound.net/static/images/avatars/mh03303.png); width: 48px; height: 49px; left: 55px; background-position: -49px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_pop">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font4">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_def">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font4">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon stat_icon_life">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_cash cashShadow">
                      1,500 Cash
                    </div>
                    <div class="shop_item_gold goldShadow">
                      75,000 Gold
                    </div>
                  </div>
                  <div id="shop_item7" class="shop_item" avatar_index="769">
                    <div class="shop_item_icon shop_item_icon_hm">
                    </div>
                    <div class="shop_item_name blackShadow">
                      Mutant
                    </div>
                    <div class="shop_item_image NoSelect" style="background-image: url(http://dragonbound.net/static/images/avatars/mh03302.png); width: 23px; height: 28px; left: 67.5px; background-position: -28px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_pop">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font2">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_def">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_cash cashShadow">
                      1,875 Cash
                    </div>
                    <div class="shop_item_gold goldShadow">
                      90,000 Gold
                    </div>
                  </div>
                  <div id="shop_item8" class="shop_item" avatar_index="767">
                    <div class="shop_item_icon shop_item_icon_hm">
                    </div>
                    <div class="shop_item_name blackShadow">
                      Roman Executioner
                    </div>
                    <div class="shop_item_image NoSelect" style="background-image: url(http://dragonbound.net/static/images/avatars/mh03300.png); width: 33px; height: 32px; left: 62.5px; background-position: -30px 0px; background-repeat: no-repeat no-repeat;">
                    </div>
                    <div class="shop_item_stat shop_item_stat0">
                      <div class="stat_icon stat_icon_pop">
                      </div>
                      <div class="stat_digit1 stat_font stat_font1">
                      </div>
                      <div class="stat_digit2 stat_font stat_font0">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat1">
                      <div class="stat_icon stat_icon_time">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font5">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat2">
                      <div class="stat_icon stat_icon_atk">
                      </div>
                      <div class="stat_digit1 stat_font stat_font0">
                      </div>
                      <div class="stat_digit2 stat_font stat_font5">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat3">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat4">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat5">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat6">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_stat shop_item_stat7">
                      <div class="stat_icon" style="display: none;">
                      </div>
                      <div class="stat_digit1 stat_font" style="display: none;">
                      </div>
                      <div class="stat_digit2 stat_font" style="display: none;">
                      </div>
                    </div>
                    <div class="shop_item_cash cashShadow">
                      2,450 Cash
                    </div>
                    <div class="shop_item_gold goldShadow">
                      122,500 Gold
                    </div>
                  </div>
                  <div id="shop_buy_dialog" class="ui-widget-content" style="z-index: 1003;">
                    <div class="shop_item_icon">
                    </div>
                    <div class="shop_item_name blackShadow">
                    </div>
                    <div class="shop_item_image NoSelect">
                    </div>
                    <div id="buy_cash_week" class="buy_option cashShadow">
                      Can't buy
                    </div>
                    <div id="buy_cash_month" class="buy_option cashShadow">
                      Can't buy
                    </div>
                    <div id="buy_cash_perm" class="buy_option cashShadow">
                      Can't buy
                    </div>
                    <div id="buy_gold_week" class="buy_option goldShadow">
                      Can't buy
                    </div>
                    <div id="buy_gold_month" class="buy_option goldShadow">
                      Can't buy
                    </div>
                    <div id="buy_gold_perm" class="buy_option goldShadow">
                      Can't buy
                    </div>
                    <div id="buy_period">
                    </div>
                    <div id="buy_period_next_btn" class="opacity_button shopButton">
                    </div>
                    <div id="buy_period_prev_btn" class="opacity_button shopButton">
                    </div>
                    <div id="buy_gold_btn" class="opacity_button shopButton">
                    </div>
                    <div id="buy_cash_btn" class="opacity_button shopButton">
                    </div>
                    <div id="buy_cancel_btn" class="opacity_button shopButton">
                    </div>
                  </div>
                </div>
              </div>
              <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-labelledby="ui-id-1" style="display: none; outline: 0px; z-index: 1000; position: absolute;">
                <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
                  <span id="ui-id-1" class="ui-dialog-title">
                    Change Graphics [BETA]
                  </span>
                  <a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a>
                </div>
                <div id="DragonThemeDialog" class="ui-dialog-content ui-widget-content" style="display: block;">
                  <table>
                    <tbody>
                      <tr>
                        <td>
                          Lobby BG
                        </td>
                        <td>
                          <input id="theme_lobby_bg">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Room BG
                        </td>
                        <td>
                          <input id="theme_room_bg">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Shop BG
                        </td>
                        <td>
                          <input id="theme_shop_bg">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Ranks
                        </td>
                        <td>
                          <input id="theme_ranks">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          BG Full
                        </td>
                        <td>
                          <input id="theme_bg_full">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Lobby Stuff
                        </td>
                        <td>
                          <input id="theme_lobby_stuff">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Room Stuff
                        </td>
                        <td>
                          <input id="theme_room_stuff">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Game Stuff
                        </td>
                        <td>
                          <input id="theme_game_stuff">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <nobr>
                            Scores Stuff&nbsp;
                          </nobr>
                        </td>
                        <td>
                          <input id="theme_scores_stuff">
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Shop Stuff
                        </td>
                        <td>
                          <input id="theme_shop_stuff">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  DragonBound Theme (set of graphics):
                  <br>
                  <textarea id="themeFull">
                  </textarea>
                </div>
                <div class="ui-resizable-handle ui-resizable-n" style="z-index: 1000;">
                </div>
                <div class="ui-resizable-handle ui-resizable-e" style="z-index: 1000;">
                </div>
                <div class="ui-resizable-handle ui-resizable-s" style="z-index: 1000;">
                </div>
                <div class="ui-resizable-handle ui-resizable-w" style="z-index: 1000;">
                </div>
                <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ui-icon-grip-diagonal-se" style="z-index: 1000;">
                </div>
                <div class="ui-resizable-handle ui-resizable-sw" style="z-index: 1000;">
                </div>
                <div class="ui-resizable-handle ui-resizable-ne" style="z-index: 1000;">
                </div>
                <div class="ui-resizable-handle ui-resizable-nw" style="z-index: 1000;">
                </div>
              </div>
            </body>
            
            </html>