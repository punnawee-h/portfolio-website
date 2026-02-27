<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

<title>About</title>

<style>
    html {
    scroll-behavior: smooth;
}
body {
    margin: 0;
    background-color: #2F4F4F;
    color: #EEE8AA;
    font-family: 'Inter', sans-serif;
}

.container {
    width: 85%;
    max-width: 1200px;
    margin: 80px auto;
}

.content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 80px;
}

/* ฝั่งซ้าย */
.left {
    flex: 1;
}

.left h1 {
    font-size: 90px;
    margin: 0 0 30px 0;
}

.left h2 {
    font-size: 40px;
    margin-top: 60px;
    margin-bottom: 15px;
}

.left p {
    font-size: 24px;
    line-height: 1.8;
    margin-bottom: 20px;
}

/* ฝั่งขวา */
.right {
    width: 350px;
    top: 80px;  
}

.right img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}
/* ===== Curtain Drop ===== */
body {
    overflow: hidden;
    animation: enableScroll 2s forwards;
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
    background: #EEE8AA;
    z-index: 9999;
    animation: curtainDrop 1.5s ease forwards;
}

@keyframes curtainDrop {
    0% { transform: translateY(0); }
    100% { transform: translateY(100%); }
}

/* ===== Title Animation ===== */
.left h1 {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 1s ease forwards;
    animation-delay: 1.2s;
}

/* ===== Text Sections Animation ===== */
.left p,
.left h2 {
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 1s ease forwards;
}

/* ไล่ delay ทีละส่วน */
.left p:nth-of-type(1) { animation-delay: 1.6s; }
.left p:nth-of-type(2) { animation-delay: 1.8s; }
.left p:nth-of-type(3) { animation-delay: 2s; }

.left h2:nth-of-type(1) { animation-delay: 2.2s; }
.left h2:nth-of-type(2) { animation-delay: 2.8s; }
.left h2:nth-of-type(3) { animation-delay: 3.4s; }
.left h2:nth-of-type(4) { animation-delay: 4s; }

/* ===== Image Slide From Right ===== */
.right {
    opacity: 0;
    transform: translateX(60px);
    animation: slideIn 1.2s ease forwards;
    animation-delay: 1.8s;
}

@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.fade {
    opacity: 0;
    animation: fadeIn 1s ease forwards;
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}
/* Sidebar */
.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: 120px;
    height: 100vh;
    border-right: 2px solid #EEE8AA;
    display: flex;
    align-items: center;
    justify-content: center;
}

    /* เวลาเลื่อนลงให้ซ่อน */
    .sidebar.hide {
        transform: translateY(-100%);
    }

/* Home text */
.sidebar a {
    writing-mode: vertical-rl; /* ตัวอักษรแนวตั้ง */
    transform: rotate(180deg);
    text-decoration: none;
    color: #EEE8AA;
    font-size: 40px;
    letter-spacing: 4px;
    transition: 0.3s;
}

.sidebar a:hover {
    opacity: 0.6;
}

/* ดันเนื้อหาให้ไม่ทับ sidebar */
.container {
    margin-left: 160px;
}
/* =========================
   📱 Mobile Responsive
========================= */
@media (max-width: 768px) {

       .sidebar {
    width: 100%;
    height: 60px;
    border-right: none;
    border-bottom: 2px solid #EEE8AA;
    background: rgba(47,79,79,0.95);
    backdrop-filter: blur(8px);
    transition: transform 0.3s ease;
    z-index: 2000;
}

.sidebar.hide {
    transform: translateY(-100%);
}

    .sidebar a {
        writing-mode: horizontal-tb;
        transform: none;
        font-size: 24px;
    }

    /* เอาระยะ margin-left ออก */
    .container {
    margin: 120px auto 0 auto;
    width: 90%;
}

    /* เปลี่ยน layout เป็นแนวตั้ง */
    .content {
        flex-direction: column;
        gap: 40px;
        align-items: center;
        text-align: center;
    }

    /* ตัวหนังสือ */
    .left h1 {
        font-size: 60px;
    }

    .left h2 {
        font-size: 28px;
        margin-top: 40px;
    }

    .left p {
        font-size: 18px;
    }

    /* รูป */
    .right {
        width: 80%;
        transform: none; /* กัน animation เพี้ยน */
    }

    .right img {
        width: 100%;
    }
}

</style>
</head>
<body>
<div class="sidebar">
    <a href="index.php">Home</a>
</div>
    
<div class="container">
    <div class="content">
        
        <div class="left">
    
            <h1>About</h1>
            <p>
                Im <strong>Punnawee Hengsomboon</strong>. A web developer, problem solver and technology enthusiast.
            </p>
    
            <p>
                The intersection of logic and creativity has always fascinated me. From the first time I explored computers and experimented with HTML, I knew I enjoyed building things that work and solving real problems through code. Whether it’s PHP, JavaScript, Java, or database design, I’ve never been afraid to dive in and learn by doing.
            </p>

            <p>
                Fast forward to 2025, I’ve worked on web application development, IT support, troubleshooting systems, and optimizing websites for better performance and usability. Every experience has been a stepping stone to where I am today.
            </p>

            <h2>Experience</h2>

                   <p class="fade">
                <strong>Web Application for Cooperative Education Document Checking | 2025</strong><br>
                Developed a web-based system using PHP, JavaScript, and MySQL to track and manage cooperative education documents for students and faculty.
            </p>

            <p>
                <strong>TBS Marketing | Jun – Oct 2024</strong><br>
                Worked as a Web Developer building and maintaining dynamic, responsive web applications. Provided IT support, troubleshooting, and assisted with SEO optimization.
            </p>

            <p>
                <strong>Computer Repair Shop | 2020</strong><br>
                Assisted with hardware/software troubleshooting, system maintenance, and customer technical support.
            </p>

            <h2>Skills</h2>

            <p>
                HTML5 / CSS (Responsive Design) / PHP / JavaScript / Java / MySQL / Arduino / Network Configuration / IT Support / Troubleshooting
            </p>

            <h2>Education</h2>

            <p>
                Rajamangala University of Technology Krungthep – Information Technology (Graduated 2025)
            </p>

            <h2>Contact</h2>

            <p>
                092-735-6556<br>
                punnawee.h@gmail.com<br>
                Lat Krabang, Bangkok, Thailand<br>
                    <a href="images/ResumePunnawee.pdf" download style="color: white;">
  Download Resume
</a>
            </p>

        </div>



        <div class="right">
            <img src="images/pro.jpg" alt="My Photo">
        </div>

    </div>
</div>

                    <script>
let lastScroll = 0;
const sidebar = document.querySelector(".sidebar");

window.addEventListener("scroll", () => {

    if (window.innerWidth > 768) return;

    const currentScroll = window.pageYOffset;

    if (currentScroll > lastScroll && currentScroll > 50) {
        sidebar.classList.add("hide"); // เลื่อนลง
    } else {
        sidebar.classList.remove("hide"); // เลื่อนขึ้น
    }

    lastScroll = currentScroll;
});
</script>
                    
                    
</body>
</html>
