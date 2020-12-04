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
  background-color: rgba(0,0,0,0.1);

}
	

/* styling paper */
#paper {
  width: 600px;
  height: 700px;
  position: relative;
  margin: 20px auto;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: white;
  box-shadow: 0px 0px 5px 0px #888;
}

/* styling red vertical line */
#paper::before {
  content: '';
  width: 1px;
  height: 100%;
  position: absolute;
  top: 0;
  left: 45px;
    background-color: rgba(128,0,128,0.4);
}


/* styling blue horizontal lines */
#pattern {
  height: 100%;
  background-image: repeating-linear-gradient(white 0px, white 24px, teal 25px);
}

/* styling text content */
#content {
  padding-top: 10px;
  padding-left: 56px;
  padding-right: 16px;
  line-height: 25px;
  font-family: 'my';
  font-size: 24px;
  letter-spacing: 1px;
  word-spacing: 5px;
}
		
  

  </style>
<body>

<div id="paper">
  <div id="pattern">
    <div id="content">
	<textarea style="color: black; background-color: transparent;">
      Pollution is a term which even kids are aware of these days. It has become so common that almost everyone acknowledges 
	    the fact that pollution is rising continuously. The term ‘pollution’ means the manifestation of any unsolicited 
	    foreign substance in something. When we talk about pollution on earth, we refer to the contamination that is 
	    happening of the natural resources by various pollutants. All this is mainly caused by human activities which
	    harm the environment in ways more than one. Therefore, an urgent need has arisen to tackle this issue straightaway.
	    That is to say, pollution is damaging our earth severely and we need to realize its effects and prevent this damage. 
	    In this essay on pollution, we will see what are the effects of pollution and how to reduce it.
	    </textarea>
    </div>
  </div>
</div>

</body>
</html>
