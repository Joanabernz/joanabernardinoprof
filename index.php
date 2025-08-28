<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joana M. Bernardino - IT Educator & Technology Professional</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --dark-glass: rgba(0, 0, 0, 0.1);
            --text-primary: #2d3748;
            --text-secondary: #4a5568;
            --text-light: #718096;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0f0f23;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, #667eea33 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, #764ba233 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, #f093fb33 0%, transparent 50%);
            animation: backgroundShift 20s ease-in-out infinite;
            z-index: -2;
        }

        @keyframes backgroundShift {
            0%, 100% { transform: rotate(0deg) scale(1); }
            33% { transform: rotate(1deg) scale(1.05); }
            66% { transform: rotate(-1deg) scale(0.95); }
        }

        /* Floating particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 20s linear infinite;
        }

        .particle:nth-child(1) { width: 4px; height: 4px; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 6px; height: 6px; left: 20%; animation-delay: 2s; }
        .particle:nth-child(3) { width: 3px; height: 3px; left: 30%; animation-delay: 4s; }
        .particle:nth-child(4) { width: 8px; height: 8px; left: 40%; animation-delay: 6s; }
        .particle:nth-child(5) { width: 5px; height: 5px; left: 60%; animation-delay: 8s; }
        .particle:nth-child(6) { width: 4px; height: 4px; left: 70%; animation-delay: 10s; }
        .particle:nth-child(7) { width: 7px; height: 7px; left: 80%; animation-delay: 12s; }
        .particle:nth-child(8) { width: 3px; height: 3px; left: 90%; animation-delay: 14s; }

        @keyframes float {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .profile-wrapper {
            position: relative;
            backdrop-filter: blur(20px);
            border-radius: 32px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        .hero-section {
            position: relative;
            padding: 80px 60px;
            background: linear-gradient(135deg, 
                rgba(102, 126, 234, 0.1) 0%, 
                rgba(118, 75, 162, 0.1) 100%);
            text-align: center;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
            animation: patternMove 40s linear infinite;
        }

        @keyframes patternMove {
            0% { transform: translate(0, 0) rotate(0deg); }
            100% { transform: translate(-20px, -20px) rotate(360deg); }
        }

        .avatar {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 0 auto 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
            font-weight: 800;
            color: white;
            box-shadow: 
                0 0 0 4px rgba(255, 255, 255, 0.1),
                0 0 0 8px rgba(255, 255, 255, 0.05),
                0 20px 40px rgba(102, 126, 234, 0.3);
            animation: avatarPulse 4s ease-in-out infinite;
            z-index: 2;
        }

        @keyframes avatarPulse {
            0%, 100% { transform: scale(1) rotate(0deg); }
            50% { transform: scale(1.05) rotate(2deg); }
        }

        .name {
            font-size: 4rem;
            font-weight: 800;
            background: linear-gradient(135deg, #fff 0%, #e2e8f0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            letter-spacing: -0.02em;
            position: relative;
            z-index: 2;
        }

        .tagline {
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 400;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 60px;
            margin-top: 40px;
            position: relative;
            z-index: 2;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: block;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 8px;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 40px;
            padding: 60px;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            gap: 50px;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .section {
            position: relative;
            animation: slideInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .section:nth-child(1) { animation-delay: 0.1s; }
        .section:nth-child(2) { animation-delay: 0.2s; }
        .section:nth-child(3) { animation-delay: 0.3s; }
        .section:nth-child(4) { animation-delay: 0.4s; }

        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
        }

        .section-title::after {
            content: '';
            flex: 1;
            height: 2px;
            background: linear-gradient(90deg, rgba(102, 126, 234, 0.5), transparent);
            margin-left: 20px;
        }

        .section-icon {
            font-size: 1.5rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            padding: 12px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(102, 126, 234, 0.3);
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 30px;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .skill-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .skill-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s;
        }

        .skill-card:hover::before {
            left: 100%;
        }

        .skill-card:hover {
            transform: translateY(-10px) scale(1.02);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 25px 50px rgba(102, 126, 234, 0.2);
            border-color: rgba(102, 126, 234, 0.3);
        }

        .skill-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .skill-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .skill-desc {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
        }

        .experience-timeline {
            position: relative;
            padding-left: 40px;
        }

        .experience-timeline::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #667eea, #764ba2, #f093fb);
        }

        .experience-item {
            position: relative;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .experience-item::before {
            content: '';
            position: absolute;
            left: -30px;
            top: 30px;
            width: 16px;
            height: 16px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            border: 4px solid #0f0f23;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.3);
        }

        .experience-item:hover {
            transform: translateX(10px);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.15);
        }

        .exp-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
        }

        .exp-company {
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
            margin-bottom: 5px;
        }

        .exp-duration {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .exp-desc {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
        }

        .sidebar-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 30px;
            position: relative;
            overflow: hidden;
        }

        .sidebar-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .contact-item:last-child {
            border-bottom: none;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 15px;
            margin: 0 -15px;
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
        }

        .contact-details h4 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .contact-details p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .education-item {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            border: 1px solid rgba(102, 126, 234, 0.2);
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .education-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.2);
        }

        .edu-degree {
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
        }

        .edu-school {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .edu-year {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.8rem;
        }

        .floating-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .floating-element {
            position: absolute;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            border-radius: 50%;
            animation: floatAround 20s linear infinite;
        }

        .floating-element:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 10%;
            left: 80%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 60%;
            left: 10%;
            animation-delay: 5s;
        }

        .floating-element:nth-child(3) {
            width: 80px;
            height: 80px;
            top: 80%;
            left: 70%;
            animation-delay: 10s;
        }

        @keyframes floatAround {
            0% { transform: translate(0, 0) rotate(0deg); }
            25% { transform: translate(20px, -20px) rotate(90deg); }
            50% { transform: translate(0, -40px) rotate(180deg); }
            75% { transform: translate(-20px, -20px) rotate(270deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 40px;
            }
            
            .sidebar {
                order: -1;
            }
            
            .hero-stats {
                flex-direction: column;
                gap: 30px;
                align-items: center;
            }
            
            .name {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 30px;
            }
            
            .content-grid {
                padding: 30px 20px;
            }
            
            .name {
                font-size: 2.5rem;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-stats {
                gap: 20px;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Animated particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Floating elements -->
    <div class="floating-elements">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <div class="container">
        <div class="profile-wrapper">
            <!-- Hero Section -->
            <div class="hero-section">
                <div class="avatar">JB</div>
                <h1 class="name">Joana M. Bernardino</h1>
                <p class="tagline">IT Educator & Technology Innovator</p>
                
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">MIT</span>
                        <span class="stat-label">Degree</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Students Mentored</span>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content-grid">
                <div class="main-content">
                    <!-- About Section -->
                    <div class="section">
                        <h2 class="section-title">
                            <span class="section-icon">✨</span>
                            About Me
                        </h2>
                        <p class="about-text">
                            I'm a passionate technology educator with over a decade of experience transforming the way students engage with Information Technology. With my Master's degree and hands-on industry experience, I bridge the gap between cutting-edge theory and real-world application, preparing the next generation for our digital future.
                        </p>
                        <p class="about-text">
                            My mission is to empower students with not just technical skills, but the critical thinking and innovation mindset needed to thrive in our rapidly evolving technological landscape.
                        </p>
                    </div>

                    <!-- Skills Section -->
                    <div class="section">
                        <h2 class="section-title">
                            <span class="section-icon">🚀</span>
                            Expertise & Specializations
                        </h2>
                        <div class="skills-grid">
                            <div class="skill-card">
                                <div class="skill-title">
                                    <div class="skill-icon">🌐</div>
                                    Internet of Things (IoT)
                                </div>
                                <p class="skill-desc">Leading expert in IoT implementation, smart systems design, and connected device architectures. Regular speaker at technology conferences.</p>
                            </div>
                            
                            <div class="skill-card">
                                <div class="skill-title">
                                    <div class="skill-icon">🎨</div>
                                    3D Animation & Design
                                </div>
                                <p class="skill-desc">Advanced 3D modeling, animation techniques, and digital content creation. Specializing in educational and interactive media.</p>
                            </div>
                            
                            <div class="skill-card">
                                <div class="skill-title">
                                    <div class="skill-icon">⚡</div>
                                    Hardware & Networking
                                </div>
                                <p class="skill-desc">Comprehensive expertise in computer hardware servicing, network infrastructure design, and system optimization.</p>
                            </div>
                            
                            <div class="skill-card">
                                <div class="skill-title">
                                    <div class="skill-icon">🎓</div>
                                    Educational Technology
                                </div>
                                <p class="skill-desc">Innovative curriculum development, blended learning strategies, and technology-enhanced pedagogical approaches.</p>
                            </div>
                            
                            <div class="skill-card">
                                <div class="skill-title">
                                    <div class="skill-icon">☁️</div>
                                    Cloud Technologies
                                </div>
                                <p class="skill-desc">Google Workspace certified expert with deep knowledge of cloud computing and collaborative digital environments.</p>
                            </div>
                            
                            <div class="skill-card">
                                <div class="skill-title">
                                    <div class="skill-icon">👥</div>
                                    Student Leadership
                                </div>
                                <p class="skill-desc">Mentoring future IT leaders through PSITS, fostering professional growth and industry connections.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Experience Section -->
                    <div class="section">
                        <h2 class="section-title">
                            <span class="section-icon">💼</span>
                            Professional Journey
                        </h2>
                        <div class="experience-timeline">
                            <div class="experience-item">
                                <h3 class="exp-title">Senior IT Educator</h3>
                                <p class="exp-company">Western Institute of Technology - College of Engineering</p>
                                <p class="exp-duration">2014 - Present</p>
                                <p class="exp-desc">Leading comprehensive IT education programs for college and senior high school students. Developing cutting-edge curricula that integrate emerging technologies with fundamental computer science principles.</p>
                            </div>
                            
                            <div class="experience-item">
                                <h3 class="exp-title">Laboratory Director & Custodian</h3>
                                <p class="exp-company">Western Institute of Technology</p>
                                <p class="exp-duration">2014 - Present</p>
                                <p class="exp-desc">Managing state-of-the-art IT laboratory facilities, ensuring optimal learning environments and maintaining cutting-edge technology infrastructure for student hands-on experience.</p>
                            </div>
                            
                            <div class="experience-item">
                                <h3 class="exp-title">PSITS Chapter Adviser</h3>
                                <p class="exp-company">Philippine Society of Information Technology Students</p>
                                <p class="exp-duration">2014 - Present</p>
                                <p class="exp-desc">Guiding and mentoring IT students in professional development, organizing industry engagement activities, and fostering connections between academia and technology industry.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Contact Info -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">
                            <span class="section-icon">📞</span>
                            Get In Touch
                        </h3>
                        <div class="contact-item">
                            <div class="contact-icon">📧</div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p>onlychildbernz@hotmail.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📱</div>
                            <div class="contact-details">
                                <h4>Phone</h4>
                                <p>09179770635<br>09177280737</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div class="contact-details">
                                <h4>Location</h4>
                                <p>Nanga, Guimbal<br>Iloilo, Philippines</p>
                            </div>
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">
                            <span class="section-icon">🎓</span>
                            Education
                        </h3>
                        <div class="education-item">
                            <h4 class="edu-degree">Master in Information Technology</h4>
                            <p class="edu-school">University of Saint Louis, Tuguegarao</p>
                            <p class="edu-year">Batch 2024</p>
                        </div>
                        <div class="education-item">
                            <h4 class="edu-degree">Bachelor of Science in IT</h4>
                            <p class="edu-school">Western Institute of Technology</p>
                            <p class="edu-year">Batch 2013</p>
                        </div>
                    </div>

                    <!-- Certifications -->
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">
                            <span class="section-icon">🏆</span>
                            Certifications
                        </h3>
                        <div class="education-item">
                            <h4 class="edu-degree">Google Workspace Certified</h4>
                            <p class="edu-year"></p>