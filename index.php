
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/lunaplayer-full.js"></script>

<div style="position:absolute;overflow:hidden;width:100%;height:100%;top:0;left:0;z-index:2">
 <video autoplay="true" muted="true" loop="true">
  <source src="https://andreschan.website/portada/video.mp4" type="video/mp4">
 </video>
</div>

<div id="lunaradio" style="width:100%;height:100%;position:absolute;left:0px;top:0px;z-index:300;overflow:hidden;display:block">Cargando ...</div>

<!-- <div id="lunaradio" style="width:100%; height:600px;background: #000000 url(https://i.imgur.com/CTQdbqh.jpg) bottom / cover no-repeat;">Cargando ...</div> -->

<script>
$("#lunaradio").lunaradio({
userinterface: "big", 
backgroundcolor: "",
fontcolor: "#ffffff",
hightlightcolor: "#ff0000", 
fontname: "Anton", 
googlefont: "Anton&display=swap", 
fontratio: "0.4", 
radioname: "RADIO SUPAYCO", //nombre de radio
scroll: "true", 
coverimage: "https://i.ytimg.com/vi/9hRo76f343I/maxresdefault.jpg", //link o ruta de logo radio
onlycoverimage: "false", //true para mostrar solo logo radio
coverstyle: "animated",
usevisualizer: "real", 
visualizertype: "2", 
metadatatechnic: "fallback",
ownmetadataurl: "",
usestreamcorsproxy: "true", //true o false
corsproxy: "https://cors-anywhere.herokuapp.com/",
streamurl: "http://stream.zeno.fm/7wtqh97g8zquv.acc", 
streamtype: "radiozeno", //shoutcast2, icecast2, radiozeno, radionomy, radiojar, radioco
icecastmountpoint: "",
shoutcastpath: "/stream",
shoutcastid: "1", 
streamsuffix: "", 
radionomyid: "", 
radionomyapikey: "",
radiozenoid: "7wtqh97g8zquv", 
radiojarid: "",  
radiocoid: "",
itunestoken: "1000lIPN", 
metadatainterval: "15000", 
volume: "100",
debug: "false",
});
</script>