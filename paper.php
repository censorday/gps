<html>
<title>Canva</title>
<style>
@import url('https://fonts.googleapis.com/css?family=Dancing+Script');
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
  width: 2px;
  height: 100%;
  position: absolute;
  top: 0;
  left: 40px;
    background-color: rgba(128,0,128,0.4);
}

/* styling blue horizontal lines */
#pattern {
  height: 100%;
  background-image: repeating-linear-gradient(white 0px, white 24px, teal 25px);
}

/* styling text content */
#content {
  padding-top: 6px;
  padding-left: 56px;
  padding-right: 16px;
  line-height: 25px;
  font-family: 'Dancing Script', cursive;
  font-size: 19px;
  letter-spacing: 1px;
  word-spacing: 5px;
}
</style>
<body>

<div id="paper">
  <div id="pattern">
    <div id="content">
      Dear Diary ... Clifton Hill. 
    </div>
  </div>
</div>

</body>
</html>
