<html>
<title>Canva</title>
<style>

  
  @font-face {
  font-family: my;
  src: url(/avs.ttf);
}

div {
  font-family: my;
}
  
 
body {
  margin: 0;
  padding: 0;
  background: rgba(204,204,204,0.9);
}
.paper {
  position: absolute;
  height: 550px;
  width: 450px;
  background: rgba(255,255,255,0.9);
  margin: -275px -225px;
  left: 50%;
  top: 50%;
  box-shadow: 0px 0px 9px 0px #888;
}
.paper::before {
  content: '';
  position: absolute;
  left: 45px;
  height: 100%;
  width: 1px;
  background: rgba(128,0,128,0.4);
}
.lines {
  margin-top: 40px;
  height: calc(100% - 40px);
  width: 100%;
  background-image: repeating-linear-gradient(white 0px, white 24px, steelblue 25px);
}
.text {
  position: absolute;
  top: 55px;
  left: 55px;
  bottom: 1px;
  right: 10px;
  line-height: 25px;
  font-family: 'my';
  overflow: hidden;
  outline: none;
}


  </style>
<body>
<br>
<div class="paper">
  <div class="lines">
    <div class="text" contenteditable spellcheck="false">
      This can be the title <br />
      Hello I am Vashishth and this is totlaly developed by me</div>
  </div>
  
</div>
</body>
</html>
