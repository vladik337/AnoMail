<!--
Copyright 2017 Vladik Y. AnoMail
-->
<html>
<head>
  <title>AnoMail</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="materialize.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head><style>
body {background-image: url(bg.jpg);}
.logo {
position: absolute;
bottom: 0px;
}
.main {
  position: absolute;
  left: 0%;
  width: 100%;
  height: 100%;
  top: 0%;
  background-color: #f4f4f4;
}
.txt {
  width: 100%;
}
#sub {
  position: absolute;
  right: 15px;
  bottom: 15px;
}

.validate {
  width: 100%;
}
@media screen and (min-height: 685px) {
@media screen and (min-width: 600px) {
  .main {
    left: 10%;
    top: 20%;
    width: 80%;
    height: 60%;
  }
  .logo {
    position: absolute;
    right: 15px;
    top: 15px;
  }
  .txt {
    width: 50%;
  }

  }
  .box {
    position: static;
    width: 100%;
    height: 1px;
  }
  .info {
    position: fixed;
    right: 0px;
    top: 0px;
    background-color: orange;
    color: white;
  }
  .bottom {

  }
}

</style><body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="materialize.min.js"></script><div class="main z-depth-5"><br/>
    <script>
    var options = [
  {selector: '.class', offset: 200, callback: customCallbackFunc } },
  {selector: '.other-class', offset: 200, callback: function() {
    customCallbackFunc();
  } },
];
Materialize.scrollFire(options);

    </script>
    <script>
    function getURL() {
        document.getElementById("demo").innerHTML = '<div class="bottom"><div class="row"><form class="col s12"><div class="row"><div class="input-field col s6"><i class="material-icons prefix">http</i><input name="url" id="icon_prefix" type="text" class="validate"><label for="icon_prefix">URL of File</label></div></div>';
    }
    function getImg() {
      document.getElementById("demo").innerHTML = '<div class="bottom"><div class="row"><form class="col s12"><div class="row"><div class="input-field col s6"><i class="material-icons prefix">image</i><input name="img" id="icon_prefix" type="text" class="validate"><label for="icon_prefix">Path to Image</label></div></div>';
    }

    </script><script>
    /*! modernizr 3.5.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-forcetouch-setclasses !*/
!function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,i,s,a;for(var l in C)if(C.hasOwnProperty(l)){if(e=[],n=C[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),h.push((o?"":"no-")+a.join("-"))}}function i(e){var n=S.className,t=Modernizr._config.classPrefix||"";if(E&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),E?S.className.baseVal=n:S.className=n)}function s(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):E?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function a(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function l(e,n){return!!~(""+e).indexOf(n)}function u(e,n){return function(){return e.apply(n,arguments)}}function f(e,n,t){var o;for(var i in e)if(e[i]in n)return t===!1?e[i]:(o=n[e[i]],r(o,"function")?u(o,t||n):o);return!1}function c(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function p(n,t,r){var o;if("getComputedStyle"in e){o=getComputedStyle.call(e,n,t);var i=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(i){var s=i.error?"error":"log";i[s].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else o=!t&&n.currentStyle&&n.currentStyle[r];return o}function d(){var e=n.body;return e||(e=s(E?"svg":"body"),e.fake=!0),e}function m(e,t,r,o){var i,a,l,u,f="modernizr",c=s("div"),p=d();if(parseInt(r,10))for(;r--;)l=s("div"),l.id=o?o[r]:f+(r+1),c.appendChild(l);return i=s("style"),i.type="text/css",i.id="s"+f,(p.fake?p:c).appendChild(i),p.appendChild(c),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(n.createTextNode(e)),c.id=f,p.fake&&(p.style.background="",p.style.overflow="hidden",u=S.style.overflow,S.style.overflow="hidden",S.appendChild(p)),a=t(c,e),p.fake?(p.parentNode.removeChild(p),S.style.overflow=u,S.offsetHeight):c.parentNode.removeChild(c),!!a}function v(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(c(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+c(n[o])+":"+r+")");return i=i.join(" or "),m("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==p(e,null,"position")})}return t}function y(e,n,o,i){function u(){c&&(delete z.style,delete z.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var f=v(e,o);if(!r(f,"undefined"))return f}for(var c,p,d,m,y,g=["modernizr","tspan","samp"];!z.style&&g.length;)c=!0,z.modElem=s(g.shift()),z.style=z.modElem.style;for(d=e.length,p=0;d>p;p++)if(m=e[p],y=z.style[m],l(m,"-")&&(m=a(m)),z.style[m]!==t){if(i||r(o,"undefined"))return u(),"pfx"==n?m:!0;try{z.style[m]=o}catch(h){}if(z.style[m]!=y)return u(),"pfx"==n?m:!0}return u(),!1}function g(e,n,t,o,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+b.join(s+" ")+s).split(" ");return r(n,"string")||r(n,"undefined")?y(a,n,o,i):(a=(e+" "+T.join(s+" ")+s).split(" "),f(a,n,t))}var h=[],C=[],_={_version:"3.5.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){C.push({name:e,fn:n,options:t})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=_,Modernizr=new Modernizr;var S=n.documentElement,E="svg"===S.nodeName.toLowerCase(),w=function(){function e(e,n){var o;return e?(n&&"string"!=typeof n||(n=s(n||"div")),e="on"+e,o=e in n,!o&&r&&(n.setAttribute||(n=s("div")),n.setAttribute(e,""),o="function"==typeof n[e],n[e]!==t&&(n[e]=t),n.removeAttribute(e)),o):!1}var r=!("onblur"in n.documentElement);return e}();_.hasEvent=w;var x="Moz O ms Webkit",b=_._config.usePrefixes?x.split(" "):[];_._cssomPrefixes=b;var O=function(n){var r,o=prefixes.length,i=e.CSSRule;if("undefined"==typeof i)return t;if(!n)return!1;if(n=n.replace(/^@/,""),r=n.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+n;for(var s=0;o>s;s++){var a=prefixes[s],l=a.toUpperCase()+"_"+r;if(l in i)return"@-"+a.toLowerCase()+"-"+n}return!1};_.atRule=O;var T=_._config.usePrefixes?x.toLowerCase().split(" "):[];_._domPrefixes=T;var N={elem:s("modernizr")};Modernizr._q.push(function(){delete N.elem});var z={style:N.elem.style};Modernizr._q.unshift(function(){delete z.style}),_.testAllProps=g;var A=_.prefixed=function(e,n,t){return 0===e.indexOf("@")?O(e):(-1!=e.indexOf("-")&&(e=a(e)),n?g(e,n,t):g(e,"pfx"))};Modernizr.addTest("forcetouch",function(){return w(A("mouseforcewillbegin",e,!1),e)?MouseEvent.WEBKIT_FORCE_AT_MOUSE_DOWN&&MouseEvent.WEBKIT_FORCE_AT_FORCE_MOUSE_DOWN:!1}),o(),i(h),delete _.addTest,delete _.addAsyncTest;for(var P=0;P<Modernizr._q.length;P++)Modernizr._q[P]();e.Modernizr=Modernizr}(window,document);
</script>
<script>
if ("ontouchstart" in window || navigator.msMaxTouchPoints)
        {
            isTouch = true;
            window.location.replace('http://www.yegorov.it/vladik/AnoMailM');
        } else {
            isTouch = false;
        }
</script>


    <div class="logo">
      <h1>AnoMail</h1><img src="email-secure.png"><img src="fingerprint.png"><img src="clock-fast.png"><img src="check.png"><img src="cloud-check.png"><img src="cellphone.png">
    </div>
    <form name="form" action="" method="get">
  <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
           <i class="material-icons prefix">email</i>
            <input name="mail" id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">E-Mail</label>
          </div>
          <br/><br/><br/><br/>
          <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <i class="material-icons prefix">textsms</i>
                    <input name="subject" id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Subject</label>
                  </div>
                <div class="txt">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea name="txt" id="textarea1" class="materialize-textarea" data-length="500"></textarea>
                    <label for="textarea1">Message</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <p name="url" id="demo"></p>
          <div id="sub"><button class="btn waves-effect waves-light">Submit<i class="material-icons right">send</i></button></div>
        </form>
      </form>
    </div>

    <!-- <div class="info">
    <i class="btn tooltipped" data-position="left" data-delay="50" data-tooltip="Made by: Vladik Y. E-mail: vladik.yeg@gmail.com" class="material-icons right">info</i></div>-->
    <div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large tail">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li class="waves-effect waves-light"><a onclick="getImg();" ><i class="material-icons">image</i></a></li>
      <li class="waves-effect waves-light"><a onclick="getURL();" ><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
<?php
      error_reporting(E_ERROR | E_PARSE);
      $headers[] = 'MIME-Version: 1.0';
      $headers[] = 'Content-type: text/html; charset=iso-8859-1';
      if ($_GET['img'] == '') {
      if ($_GET['url'] != '') {
      $body = '<html><body>' . $_GET['txt'] . '<br/>' . '<a href="' . $_GET['url'] . '">Attached File</a>' . '</body></html>';
      $result = mail($_GET['mail'], $_GET['subject'], $body, implode("\r\n", $headers), 'Unknown');
      if ($_GET['txt'] == '') {

      } else {
        echo '<div class="progress">
        <div class="indeterminate"></div>
        </div>';

      if ($result == 'true') {
        echo '<i class="material-icons prefix">check</i><b>Done.</b>';
        sleep(2);
        ob_clean();
        header( 'Location: http://www.yegorov.it/vladik/AnoMail/index.php');
      } else {
        echo '<i class="material-icons prefix">close</i><b>Something went wrong :(</b>';
      }
    }
  } else {
    $body = '<html><body>' . $_GET['txt'];
    $result = mail($_GET['mail'], $_GET['subject'], $body, implode("\r\n", $headers), 'Unknown');
    if ($_GET['txt'] != '') {
    if ($result == 'true') {
      echo '<i class="material-icons prefix">check</i><b>Done.</b>';
      sleep(2);
      ob_clean();
      header( 'Location: http://www.yegorov.it/vladik/AnoMail/index.php');
    } else {
      echo '<i class="material-icons prefix">close</i><b>Something went wrong :(</b>';
    }
  }
}

} else {

  $body = '<html><body>' . $_GET['txt'] . '<br/>' . '<img src="' . $_GET['img'] . '">' . '</body></html>';
  $result = mail($_GET['mail'], $_GET['subject'], $body, implode("\r\n", $headers), 'Unknown');
  if ($result == 'true') {
    echo '<i class="material-icons prefix">check</i><b>Done.</b>';
    sleep(2);
    ob_clean();
    header( 'Location: http://www.yegorov.it/vladik/AnoMail/index.php');
  } else {
    echo '<i class="material-icons prefix">close</i><b>Something went wrong :(</b>';
  }
}
  ?>

</body>
</html>
