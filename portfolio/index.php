<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punnawee — Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">


<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    background-color: #2F4F4F;
    color: #EEE8AA;
    font-family: 'Inter', sans-serif;
}
.bg-paw {
  position: fixed;
  width: 20px;
  height: 20px;
  pointer-events: none;
  opacity: 0.15;
  animation: fadeBgPaw 4s ease-out forwards;
  z-index: 1;
}

@keyframes fadeBgPaw {
  0% {
    opacity: 0.15;
    transform: rotate(var(--rot)) scale(1);
  }
  100% {
    opacity: 0;
    transform: rotate(var(--rot)) scale(0.8);
  }
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;   /* จัดทุกอย่างไว้กลางจอ */
  height: 100vh;
  gap: 150px;                /* ระยะห่างกลาง */
}
/* ฝั่งซ้าย */
.welcome {
  display: flex;
  flex-direction: column;
  align-items: flex-end;   /* จัดให้ชิดขวาเท่ากัน */
  text-align: right;
}

.welcome h1 {
  font-size: 120px;
  font-weight: 700;
  line-height: 1;
  margin: 0;
}

.welcome h2 {
  font-size: 60px;
  font-weight: 400;
  margin: 0;
  line-height: 1.1;
}

/* ฝั่งขวา */
.right-links {
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.right-links a {
  text-decoration: none;
  font-size: 70px;
  font-weight: 600;
  color: #EEE8AA;   /* สีฟอนต์ */
  transition: 0.3s ease;
}

.right-links a:hover {
  opacity: 0.6;
  transform: translateX(15px);
}
/* ===== Curtain Effect ===== */
body {
  overflow: hidden;
  animation: enableScroll 1.8s forwards;
}

@keyframes enableScroll {
  to { overflow: auto; }
}

body::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #EEE8AA;   /* สีฉาก */
  z-index: 9999;
  animation: curtainDrop 1.5s ease forwards;
}

@keyframes curtainDrop {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(100%);
  }
}

/* ===== Fade In Content ===== */
.container {
  opacity: 0;
  transform: translateY(40px);
  animation: fadeUp 1.5s ease forwards;
  animation-delay: 1.2s;
}

@keyframes fadeUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* =========================
   📱 Mobile Responsive
========================= */
@media (max-width: 768px) {

  .container {
    flex-direction: column;   /* เปลี่ยนเป็นเรียงลง */
    gap: 60px;
    height: auto;
    padding: 40px 20px;
    text-align: center;
  }

  /* ฝั่งซ้าย */
  .welcome {
    align-items: center;   /* ไม่ต้องชิดขวา */
    text-align: center;
  }

  .welcome h1 {
    font-size: 70px;
  }

  .welcome h2 {
    font-size: 36px;
  }

  /* ฝั่งขวา */
  .right-links {
    align-items: center;
    gap: 25px;
  }

  .right-links a {
    font-size: 40px;
  }

}



/* ===== Minimal Cute Cat ===== */

.cat {
  position: fixed;
  bottom: 40px;
  left: 0px;
  width: 220px;
  cursor: pointer;
  z-index: 1000;
  transition: transform 0.2s linear;
}


.cat-svg {
    transition: transform 0.2s ease;
  width: 100%;
  overflow: visible;
}

/* หางแกว่ง */
.tail {
  transform-origin: 170px 70px;
  animation: wag 1.2s ease-in-out infinite alternate;
}

@keyframes wag {
  from { transform: rotate(8deg); }
  to { transform: rotate(18deg); }
}

/* ตากระพริบ */
.eye {
  transform-origin: center;
  animation: blink 5s infinite;
}

@keyframes blink {
  0%, 96%, 100% { r: 5; }
  98% { r: 1; }
}

/* bubble */
.speech {
  position: absolute;
  bottom: 120px;
  left: 60px;
  background: white;
  color: #2F4F4F;
  padding: 8px 18px;
  border-radius: 25px;
  font-size: 18px;
  opacity: 0;
  transition: 0.3s ease;
}

/* ตอนกด */
.cat.stop {
  animation-play-state: paused;
}

.cat.stop .cat-svg {
  transform: rotate(8deg);

}
.cat.confused .cat-svg {
  transform: scaleX(var(--dir)) rotate(8deg);
}
.cat.stop .speech {
  opacity: 1;
}
.head-group {
  transform-box: fill-box;
  transform-origin: center;
}
.cat.stop .head-group {
  transform: rotate(-12deg);
}
/* ขาเดิน */
.leg {
  transform-box: fill-box;
  transform-origin: top;
}

.front1 {
  animation: legMove1 0.5s infinite alternate ease-in-out;
}

.front2 {
  animation: legMove2 0.5s infinite alternate ease-in-out;
}

.back1 {
  animation: legMove2 0.5s infinite alternate ease-in-out;
}

.back2 {
  animation: legMove1 0.5s infinite alternate ease-in-out;
}

@keyframes legMove1 {
  from { transform: rotate(10deg); }
  to   { transform: rotate(-10deg); }
}

@keyframes legMove2 {
  from { transform: rotate(-10deg); }
  to   { transform: rotate(10deg); }
}

/* หยุดตอนกด */
.cat.stop .leg {
  animation-play-state: paused;
}

.paw {
  position: fixed;
  width: 14px;
  height: 14px;
  pointer-events: none;
  animation: fadePaw 1.2s ease-out forwards;
  z-index: 500;
  transform: rotate(90deg);
    
}

@keyframes fadePaw {
  0% {
    opacity: 0.8;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(0.6);
  }
}
</style>

</head>
<body>

<div class="container">
    
  <div class="welcome">
    <h1>welcome</h1>
    <h2>to my portfolio</h2>
  </div>

  <div class="right-links">
    <a href="aboutme.php">About me</a>
    <a href="projects.php">Projects</a>
    <a href="https://github.com/punnawee-h">Github</a>
  </div>

</div>
    
<div class="cat" id="cat">
 <svg viewBox="0 0 220 140" class="cat-svg">

  <!-- กลับด้านภายใน SVG -->
  <g transform="translate(220,0) scale(-1,1)">

    <!-- หาง -->
    <path class="tail"
      d="M170 80 Q205 45 185 25"
      stroke="#EEE8AA"
      stroke-width="12"
      fill="none"
      stroke-linecap="round"/>

    <!-- ขาหลัง -->
    <rect class="leg back1"
      x="150" y="105"
      width="12" height="25"
      rx="6"
      fill="#DDD7A8"/>

    <rect class="leg back2"
      x="130" y="105"
      width="12" height="25"
      rx="6"
      fill="#DDD7A8"/>

    <!-- ตัว -->
    <ellipse cx="135" cy="85" rx="45" ry="30" fill="#EEE8AA"/>

    <!-- ขาหน้า -->
    <rect class="leg front1"
      x="115" y="105"
      width="12" height="25"
      rx="6"
      fill="#EEE8AA"/>

    <rect class="leg front2"
      x="95" y="105"
      width="12" height="25"
      rx="6"
      fill="#EEE8AA"/>

    <!-- หัว -->
    <g class="head-group">

      <circle cx="75" cy="70" r="32" fill="#EEE8AA"/>

      <path d="M52 48 L65 25 L78 48 Z" fill="#EEE8AA"/>
      <path d="M72 48 L85 25 L98 48 Z" fill="#EEE8AA"/>

      <circle class="eye" cx="65" cy="70" r="5" fill="#2F4F4F"/>
      <circle class="eye" cx="85" cy="70" r="5" fill="#2F4F4F"/>

      <circle cx="75" cy="78" r="2.5" fill="#DDA0A0"/>

      <!-- หนวด -->
      <path d="M58 74 Q48 72 40 76"
        stroke="#2F4F4F"
        stroke-width="1.5"
        stroke-linecap="round"
        fill="none"/>

      <path d="M58 80 Q48 82 40 84"
        stroke="#2F4F4F"
        stroke-width="1.5"
        stroke-linecap="round"
        fill="none"/>

      <path d="M92 74 Q102 72 110 76"
        stroke="#2F4F4F"
        stroke-width="1.5"
        stroke-linecap="round"
        fill="none"/>

      <path d="M92 80 Q102 82 110 84"
        stroke="#2F4F4F"
        stroke-width="1.5"
        stroke-linecap="round"
        fill="none"/>

    </g>

  </g>
</svg>

  <div class="speech">meaw 🐾</div>
</div>
    
    
</body>
</html>
    
   <script>
const cat = document.getElementById("cat");

let position = 0;
let direction = -1;
let speed = 1.5;
cat.style.transform = "scaleX(1)";
let isConfused = false;


function walk() {
  if (!cat.classList.contains("stop") && !isConfused) {

    const maxRight = window.innerWidth - cat.offsetWidth;

    position += speed * direction;

    // ชนขวา
    if (position >= maxRight) {
      position = maxRight;
      confuseAndTurn(-1);
    }

    // ชนซ้าย
    if (position <= 0) {
      position = 0;
      confuseAndTurn(1);
    }

    cat.style.left = position + "px";

    const svg = cat.querySelector(".cat-svg");
    svg.style.transform = `scaleX(${direction})`;
  }

  requestAnimationFrame(walk);
}
walk();

function createPaw() {
  const paw = document.createElement("div");
  paw.classList.add("paw");

  // ตำแหน่งแมว
  const rect = cat.getBoundingClientRect();

  // สุ่มตำแหน่งใต้ตัวแมว
  paw.style.left = rect.left + 80 + Math.random() * 40 + "px";
  paw.style.top = rect.bottom - 10 + "px";

  // SVG รูปรอยเท้า
  paw.innerHTML = `
  <svg viewBox="0 0 20 20" style="transform: rotate(90deg); transform-origin: center;">
    <circle cx="10" cy="12" r="5" fill="#DDD7A8"/>
    <circle cx="4" cy="6" r="2" fill="#DDD7A8"/>
    <circle cx="10" cy="4" r="2" fill="#DDD7A8"/>
    <circle cx="16" cy="6" r="2" fill="#DDD7A8"/>
  </svg>
`;

  document.body.appendChild(paw);

  setTimeout(() => {
    paw.remove();
  }, 1200);
}

function confuseAndTurn(newDirection) {
  isConfused = true;

  // ใช้ animation แบบเดียวกับตอนคลิก
  cat.classList.add("stop");

  setTimeout(() => {
    direction = newDirection;

    cat.classList.remove("stop");
    isConfused = false;
  }, 400);
}

// สร้างรอยเท้าทุก ๆ 400ms ตอนเดิน
setInterval(() => {
  if (!cat.classList.contains("stop")) {
    createPaw();
  }
}, 400);


cat.addEventListener("click", () => {
  cat.classList.add("stop");

  setTimeout(() => {
    cat.classList.remove("stop");
  }, 2000);
});

function createBackgroundPaw() {
  const paw = document.createElement("div");
  paw.classList.add("bg-paw");

  // สุ่มตำแหน่ง
  paw.style.left = Math.random() * window.innerWidth + "px";
  paw.style.top = Math.random() * window.innerHeight + "px";

  // 🔥 ใส่ตรงนี้
  const rotation = Math.random() * 360;
  paw.style.setProperty("--rot", rotation + "deg");

  paw.style.width = 15 + Math.random() * 15 + "px";

  paw.innerHTML = `
    <svg viewBox="0 0 20 20">
      <circle cx="10" cy="12" r="5" fill="#EEE8AA"/>
      <circle cx="4" cy="6" r="2" fill="#EEE8AA"/>
      <circle cx="10" cy="4" r="2" fill="#EEE8AA"/>
      <circle cx="16" cy="6" r="2" fill="#EEE8AA"/>
    </svg>
  `;

  document.body.appendChild(paw);

  setTimeout(() => {
    paw.remove();
  }, 4000);
}

// สุ่มเกิดทุก 2–4 วินาที
setInterval(() => {
  createBackgroundPaw();
}, 600);
</script>
