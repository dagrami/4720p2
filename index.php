  <!DOCTYPE html>

  <html>
  <head>
    <title>Daniel G. Miller</title>
    <link rel ="stylesheet" href="style.css" />
    <meta charset="utf-8">
    <link type="text/css" href="css/ui-lightness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
    <script>
    var rect1;
    var rect2;
    var ctx;
    var canvas;
    var WIDTH;
    var HEIGHT;

    function draw() {
      clear();
      rect.move();
      rect.draw();
      rect2.move();
      rect2.draw();
      rect3.move();
      rect3.draw();
    }

    function init() {
      canvas = document.getElementById("canvas");
      ctx = canvas.getContext("2d");
      WIDTH = $("#canvas").width();
      HEIGHT = $("#canvas").height();
      rect = new Rectangle(30, 30, 55, 50, "rgba(0,0,200,0.5)");
      rect2 = new Rectangle2(120, 30, 55, 50, "rgba(200,0,0,0.5)");
      rect3 = new Rectangle3(210, 30, 55, 50, "rgba(0,200,0,0.5)");
      return setInterval(draw, 10);
    }
    function Rectangle3(x, y, height, width, color) {
      this.x = x;
      this.y = y;
      this.height = height;
      this.width = width;
      this.color = color;

      this.draw = function() {
        ctx.fillStyle = this.color;
        ctx.fillRect(this.x, this.y, this.height, this.width);
      }
      this.move = function() {
        this.x += 5;
        if(this.x > WIDTH || this.x < 0) {
          this.x = 0;
        }
      }
    }

    function Rectangle2(x, y, height, width, color) {
      this.x = x;
      this.y = y;
      this.height = height;
      this.width = width;
      this.color = color;

      this.draw = function() {
        ctx.fillStyle = this.color;
        ctx.fillRect(this.x, this.y, this.height, this.width);
      }
      this.move = function() {
        this.y += 1;
        if(this.y > HEIGHT || this.y < 0) {
          this.y = 0;
        }
      }
    }
    function Rectangle(x, y, height, width, color) {
      this.x = x;
      this.y = y;
      this.height = height;
      this.width = width;
      this.color = color;

      this.draw = function() {
        ctx.fillStyle = this.color;
        ctx.fillRect(this.x, this.y, this.height, this.width);
      }
      this.move = function() {
        this.y -= 1;
        if(this.y > HEIGHT+y || this.y < 0-y) {
          this.y = HEIGHT;
        }
      }
    }

    function clear() {
      ctx.fillStyle = "#fff";
      ctx.fillRect(0, 0, WIDTH, HEIGHT);
    }

    $(document).ready(function() {
      init();
      $("#date").datepicker();
    })
    </script>

    <script>
    $(document).ready(function(){
      $( '#button' ).click(function(){
        var current = document.getElementById('change').innerText
        switch(current) {
          case "Dynamic Content":
          document.getElementById('change').innerText = "Contenido Dinámico";
          break;
          case "Contenido Dinámico":
          document.getElementById('change').innerText = "dynamische Inhalte";
          break;
          case "dynamische Inhalte":
          document.getElementById('change').innerText = "Dynamic Content";
          break;
          default:
          confirm("You broke it.");
        }
      })
    })
    </script>
  </head>
  <body id="index">
    <div id="header">
      <h1>Daniel G. Miller</h1>
      <ul id="nav">
        <li><a href="index.php" id="indexnav">Home</a></li>
        <li><a href="http://www.sinuousgame.com/" target="_blank">This is cool</a></li>
        <li><a href="http://inception.davepedu.com" target="_blank">So is this</a></li>
        <li><a href="http://en.wikipedia.org/wiki/Sun" target="_blank">Not this</a></li>
      </ul>
    </div>
    <div id="content">
      <div id="right">
        <h2>About Me</h2><br>
        <table>
          <tr>
            <td>
              <img alt="me" src="http://people.virginia.edu/~dgm3df/me.jpg" style="padding-right: 10px; padding-top: 3px" width="98" height="134" />
            </td>
            <td>
              <strong>
                Daniel Grant Miller <br>
                Department of Computer Science, Rice Hall <br>
                University of Virginia <br>
                Charlottesville, VA 22904 <br>
                <a href="mailto:danmiller@virginia.edu">danmiller at virginia dot edu</a>
              </strong>
              <p>
                I am a fourth-year student in the School of Engineering and Applied Science at the 
                University of Virginia pursuing a Bachelor of Science degree in the field of Computer
                Science.  I plan on entering the software development industry upon graduation and
                obtaining a Masters Degree in Computer Science at some point in the near future.
              </p>
            </td>
          </tr>
        </table>
        <hr>
        <p>
          In addition to being a full-time student, I also serve as a teaching assistant for CS 1110
          / 1111 (Introduction to Programming) under the direction of Professor Mark S. Sherriff and 
          have done so since the Fall semester of 2010.  I am responsible for supervising and
          directing a weekly laboratory session in which students utilize pair programming methods in
          order to complete a computational task.  In addition, I hold office hours, grade 
          assignments, proctor and grade exams, and provide input on the course curriculum.
        </p>
        <hr>
        <p>
          I also work as a bus driver for the University Transit Service.  UTS provides service
          to the University community primarily for academic purposes and safety reasons, but also
          provides chartered service to local popular destinations.
        </p>
        <hr>
        <p>
          This past summer, I served as the Carbon Technical Division's 
          Information Systems Intern at MeadWestvaco in Charleston, 
          South Carolina.  I worked on a variety of projects including web design, software
          development, and data recovery.  My primary objective, however, was to research and
          recommend a powerful new laboratory information management system to use for future
          laboratory testing as well as consolidate and migrate existing historical data to a 
          secure and stable database.
        </p>
        <hr>
        <div id="jquery">
          <h1 id="change">Dynamic Content</h1>
          <input type="button" value="Click this!" id="button"><br><br>
          <form action="birthday.php" method="post">
            Enter your birthday:
            <input type = "text" name="birthday" id="date">
            <button type ="submit">Click here</button>
          </form>
        </div>
        <hr>
        An example of an HTML5 canvas animated with JavaScript...<br><br>
        <canvas id="canvas"></canvas>
        <hr>
        <h1>Cool HTML5 Media Stuff</h1>
        <audio src="farandole.mp3" controls="controls" autoplay="autoplay" loop="loop">Your browser sucks.</audio>
        <br>
        <video src="gizmo.mp4" width="300" height="230" controls>Your browser is not supported</video>
        </div> 	
        <div id="left">
          <div class="box">
            <p>
              There is a theory which states that if ever anyone discovers exactly what the Universe 
              is for and why it is here, it will instantly disappear and be replaced by something even
              more bizarre and inexplicable.
            </p>
            <p>
              There is another theory which states that this has already happened.
            </p>
            <p>
              <em>Douglass Adams</em>
            </p>
          </div>
          <div class="box">
            <p>
              Design by <a href="minimalistic-design.com">Minimalistic Design</a>.
            </p>
          </div>
        </div>
      </div>
    </body>

    </html>
