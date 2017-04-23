var ship = new triangle(canvasElem.width/2, canvasElem.height/2, 60, 30, 'gray');
ship.deltaX = 4;
ship.deltaY = 4;
ship.deltaAngle = 5;
ship.accelerate = 66;
ship.accelerateDelta = 0;
ship.dead = false;

var background = new rectangle(canvasElem.width/2, canvasElem.height/2, canvasElem.width, canvasElem.height, 'black');

var stars = {};
stars.length = randomInt(200, 400);
for (var i = 0; i < stars.length; i++) {
  var x = randomInt(0, canvasElem.width);
  var y = randomInt(0, canvasElem.height);
  var color = randomInt(1, 20);
  if (color < 18) {
    color = 'white';
  } else if (color < 19) {
    color = '#88f'; 
  } else {
    color = '#f88'; 
  }
  stars[i] = new circle(x, y, 2, color);
}

var explosions = {};
explosions.length = 15;
for (var i = 0; i < explosions.length; i++) {
  explosions[i] = new circle(0, 0, 3, 'red');
  explosions[i].angle = (randomInt(0, 360)*Math.PI)/180;
  explosions[i].deltaX = randomInt(3,5)+Math.random();
  explosions[i].deltaY = randomInt(3,5)+Math.random();
}


var aliens = {};
aliens.length = randomInt(5, 18);
for (var i = 0; i < aliens.length; i++) {
  
  var spot = randomInt(0, 2*canvasElem.width + 2*canvasElem.height);
  
  if (spot < canvasElem.width) {
    var x = spot;
    var y = 0;
  } else if (spot < canvasElem.width+canvasElem.height) {
    var x = canvasElem.width;
    var y = spot-canvasElem.width;
  } else if (spot < 2*canvasElem.width + canvasElem.height) {
    var x = spot - canvasElem.width - canvasElem.height;
    var y = canvasElem.height;
  } else {
    var x = 0;
    var y = spot - 2*canvasElem.width - canvasElem.height;
  }
  
  aliens[i] = new rectangle(x, y, 25, 50, 'green');
  aliens[i].deltaX = 3;
  aliens[i].deltaY = 3;
  aliens[i].angle = randomInt(0, 360);
  aliens[i].dead = false;
}


var bullet = new rectangle(0, 0, 5, 25, 'blue');
bullet.deltaX = 16;
bullet.deltaY = 16;
bullet.letsDraw = false;


var speedup = new circle(randomInt(0, canvasElem.width), randomInt(0, canvasElem.height), 15, 'red');
speedup.letsDraw = true;


var blastGradient = canvas.createLinearGradient(canvasElem.width, canvasElem.height, 0, 0);
blastGradient.addColorStop(0,"yellow");
blastGradient.addColorStop(1,"red");

var winner = new circle(canvasElem.width, canvasElem.height, 0, blastGradient);
winner.deltaRadius = 1;

function loop() {
  clearCanvas();

  //Rotate ship left
  if (keyboard.left) {
    ship.angle -= ship.deltaAngle;
    if (ship.angle < 0) ship.angle += 360;
  }

  if (ship.dead === false) {
  //Rotate ship right
  if (keyboard.right) {
    ship.angle += ship.deltaAngle;
    if (ship.angle > 360) ship.angle -= 360;
  }

  //Move ship forward
  if (keyboard.up) {
    ship.x += Math.sin(ship.radAngle())*ship.deltaX;
    ship.y -= Math.cos(ship.radAngle())*ship.deltaY;
    ship.accelerateDelta = ship.accelerate;
  } else {
    //Keep forward momentum
    if (ship.accelerateDelta > 0) {
      ship.x += Math.sin(ship.radAngle())*(ship.deltaX * (ship.accelerateDelta/ship.accelerate));
      ship.y -= Math.cos(ship.radAngle())*(ship.deltaY * (ship.accelerateDelta/ship.accelerate));
      ship.accelerateDelta--;
    }
    
  }
 
  //Move ship backward
  if (keyboard.down) {
    ship.x -= Math.sin(ship.radAngle())*ship.deltaX;
    ship.y += Math.cos(ship.radAngle())*ship.deltaY;
    ship.accelerateDelta = -ship.accelerate;
  } else {
    //Keep backward momentum
    if (ship.accelerateDelta < 0) {
      ship.x += Math.sin(ship.radAngle())*(ship.deltaX * (ship.accelerateDelta/ship.accelerate));
      ship.y -= Math.cos(ship.radAngle())*(ship.deltaY * (ship.accelerateDelta/ship.accelerate));
      ship.accelerateDelta++;
    }
  }

  if (ship.x >= canvasElem.width){
    ship.x = 0;
  } else if (ship.x <= 0 ){
    ship.x = canvasElem.width;
  }

  if (ship.y >= canvasElem.height){
    ship.y = 0;
  } else if (ship.y <= 0 ){
    ship.y = canvasElem.height;
  }
    
  
  //Shoot the bullet at the tip of the ship
  if (keyboard[' ']) {
    if (bullet.letsDraw === false) {
      bullet.letsDraw = true;
      bullet.x = ship.getCenterX() + Math.sin(ship.radAngle())*(ship.height/2);
      bullet.y = ship.getCenterY() - Math.cos(ship.radAngle())*(ship.height/2);
      bullet.angle = ship.angle;
    }
  }
  
  }

  //Draw background
  background.draw();

  //Draw stars
  var randomNoDraw = randomInt(0, stars.length*5);
  for (var i = 0; i < stars.length; i++) {
    if (i != randomNoDraw) stars[i].draw();
  }

  
  //Draw the bullet and remove it of the screen
  if (bullet.letsDraw === true) {
    bullet.x += Math.sin(bullet.radAngle())*bullet.deltaX;
    bullet.y -= Math.cos(bullet.radAngle())*bullet.deltaY;
    if (bullet.y > canvasElem.height || bullet.y < 0 || bullet.x > canvasElem.width || bullet.x < 0) {
      bullet.letsDraw = false;
    }
    bullet.draw();
  }

  
  
  var count = 0;
  for (i = 0; i < aliens.length; i++) {
    if (aliens[i].dead === false) {
      count++;
      
      aliens[i].x += Math.sin(aliens[i].radAngle())*aliens[i].deltaX;
      aliens[i].y -= Math.cos(aliens[i].radAngle())*aliens[i].deltaY;
      
      if (aliens[i].x > canvasElem.width) aliens[i].x = 0;
      if (aliens[i].x < 0) aliens[i].x = canvasElem.width;
      if (aliens[i].y > canvasElem.height) aliens[i].y = 0;
      if (aliens[i].y < 0) aliens[i].y = canvasElem.height;
      
      if (ship.x < aliens[i].x + aliens[i].width/2  && ship.x > aliens[i].x - aliens[i].width/2 && 
        ship.y < aliens[i].y + aliens[i].height/2 && ship.y > aliens[i].y - aliens[i].height/2) {
        
        ship.dead = true;
      }
      
      
      if (bullet.letsDraw === true) {
        if (bullet.x < aliens[i].x + aliens[i].width/2  && bullet.x > aliens[i].x - aliens[i].width/2 &&
          bullet.y < aliens[i].y + aliens[i].height/2 && bullet.y > aliens[i].y - aliens[i].height/2) {
          bullet.letsDraw = false;
          aliens[i].dead = true;
          count--;
        } else {
          aliens[i].draw(); 
        }
      } else {
        aliens[i].draw();
      }
    }

  }
  
  if (speedup.letsDraw === true) {
    if (ship.x < speedup.x + speedup.radius  && ship.x > speedup.x - speedup.radius && 
        ship.y < speedup.y + speedup.radius  && ship.y > speedup.y - speedup.radius) {
      ship.deltaX *= 1.5;
      ship.deltaY *= 1.5;
      speedup.letsDraw = false;
      console.log('heyo;');
    }
  }
    

  if (count === 0) {
    winner.radius += winner.deltaRadius;
    winner.deltaRadius *= 1.05;
    winner.draw();
    if (winner.radius > canvasElem.width*2) {
      winner.radius = canvasElem.width*2;
      canvas.font = '48px sans-serif';
      canvas.fillStyle = 'black';
      canvas.fillText('You win!', 40, canvasElem.height/2);
    }
  }
  
  if (speedup.letsDraw === true) {
    speedup.draw();
  }

  if (ship.dead === false) {
    ship.draw();
  } else {
    for (i = 0; i < explosions.length; i++) {
      if (explosions[i].set === true) {
        explosions[i].x += Math.sin(explosions[i].angle)*explosions[i].deltaX;
        explosions[i].y -= Math.cos(explosions[i].angle)*explosions[i].deltaY;
        explosions[i].draw();
      } else {
        explosions[i].x = ship.x;
        explosions[i].y = ship.y;
        explosions[i].set = true;
      }
    } 
  }
}

setInterval(loop, 15);
