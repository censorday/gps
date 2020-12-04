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
  
  
@import url(https://fonts.googleapis.com/css?family=Indie+Flower);
body {
  margin: 0;
  padding: 0;
  background: lightgoldenrodyellow;
}
.paper {
  position: absolute;
  height: 550px;
  width: 450px;
  background: rgba(255,255,255,0.9);
  margin: -275px -225px;
  left: 50%;
  top: 50%;
  box-shadow: 0px 0px 5px 0px #888;
}
.paper::before {
  content: '';
  position: absolute;
  left: 45px;
  height: 100%;
  width: 2px;
  background: rgba(255,0,0,0.4);
}
.lines {
  margin-top: 40px;
  height: calc(100% - 40px);
  width: 100%;
  background-image: repeating-linear-gradient(white 0px, white 24px, steelblue 25px);
}
.text {
  position: absolute;
  top: 65px;
  left: 55px;
  bottom: 10px;
  right: 10px;
  line-height: 25px;
  font-family: 'my';
  overflow: hidden;
  outline: none;
}
.holes {
  position: absolute;
  left: 10px;
  height: 25px;
  width: 25px;
  background: lightgoldenrodyellow;
  border-radius: 50%;
  box-shadow: inset 0px 0px 2px 0px #888;
}
.hole-top {
  top: 10%;
}
.hole-middle {
  top: 50%;
}
.hole-bottom {
  bottom: 10%;
}

  </style>
<body>

<div class="paper">
  <div class="lines">
    <div class="text" contenteditable spellcheck="false">
      You can edit this text! <br /><br />
      Cupcake ipsum dolor sit amet liquorice fruitcake. Candy canes jelly beans sweet roll cupcake lollipop. Powder carrot cake toffee brownie. Marshmallow sweet roll donut. Chocolate cake apple pie candy canes tiramisu dragée wafer. Croissant cookie lemon drops tiramisu jelly-o donut. Sweet gummi bears ice cream.</div>
  </div>
  <div class="holes hole-top"></div>
  <div class="holes hole-middle"></div>
  <div class="holes hole-bottom"></div>
</div>
</body>
</html>
