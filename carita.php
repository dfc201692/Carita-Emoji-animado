<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>EFECTO EMOJI CON HTML, CSS Y JAVASCRIPT</title>
  </head>
  <style type="text/css">
    *{
      margin:0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #C7E8F4;
    }
    .cara{
      position: relative;
      width: 300px;
      height:300px;
      border-radius: 50%;
      background: #ffc107;
      display: flex;
      justify-content: center;
      align-items: center;
      animation: animate 5s;
    }

    @keyframes animate {
      0%,100%{
        opacity:0;
        transform: rotateY(90deg);
        filter: blur();
      }
      100%{
        opacity:1;
        transform: rotateY(0deg);
      }
    }
    .cara::before{
      content: '';
      position: absolute;
      top: 180px;
      width: 150px;
      height: 100px;
      background: red;
      border-bottom-right-radius: 70px;
      border-bottom-left-radius: 70px;
      transition: 0.5s;
    }
    .ojos{
      position:relative;
      top:0;
      display: flex;
    }

    .ojos .ojo{
      position: relative;
      width: 80px;
      height: 80px;
      display: block;
      background: #fff;
      margin: 0 15px;
      border-radius:50%;
      bottom: 25px;
    }
    .cara:hover::before{
    top: 210px;
    width: 150px;
    height: 20px;
    background: #b57700;
    border-bottom-right-radius: 70px;
    border-bottom-left-radius: 70px;
    }
    .ojos .ojo::before{
    content: '';
    position: absolute;
    top:50%;
    left: 25px;
    transform: translate(-50% -50%);
    width: 40px;
    height: 40px;
    background:#0C2DE7;
    border-radius:50%;  
    }
  </style>
  <body>
    <div class="cara">
      <div class="ojos">
        <div class="ojo"></div>
        <div class="ojo"></div>
      </div>
    </div>
    <script type="text/javascript">
      document.querySelector('body').addEventListener('mousemove', ojitos);
            function ojitos(){
                var ojo = document.querySelectorAll('.ojo');
                ojo.forEach(function(ojo){
                let x=(ojo.getBoundingClientRect().left)+(ojo.clientWidth/2);
                let y=(ojo.getBoundingClientRect().top)+(ojo.clientHeight/2);
                let radian=Math.atan2(event.pageX - x, event.pageY - y);
                let rot =(radian *(180 / Math.PI)* -1) + 0;
                ojo.style.transform="rotate("+rot+"deg)";
        })
      }
    </script>
  </body>
</html>