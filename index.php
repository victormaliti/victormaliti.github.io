<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vr_studios</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>

    <div class="wrapper">

        <section id="header">
            <div class="home-logo">
                <a href="#hero-section"><img src="../Portfolio/assets/images/Logo.png" alt="Home" title="Home"></a>
            </div>
            <nav class="nav-links">
                <ul>
                    <li class="about-section-title"><a href="#about-section">About</a></li>
                    <li class="skills-section-title"><a href="#skills-section">Skills</a></li>
                    <li class="projects-section-title"><a href="#projects-section">Projects</a></li>
                    <li class="contact-section-title"><a href="#contact-section">Contact</a></li>
                </ul>
            </nav>
        </section>

        <section id="hero-section">
            <div class="hero-left-section">
                <div class="hero-left-section-contents">
                    <h3 style="margin-bottom: 20px;">Hello and Welcome,</h3>
                    <h2>I am Victor Ray</h2>
                    <h1>A Full-Stack Web Developer From Kenya</h1>
                </div>
                <button onclick="window.location.href = '#contact-section'">Get in touch</button>
            </div>
            <div class="hero-right-section">
                <img src="../Portfolio/assets/images/Polygon 1.svg" alt="">
            </div>
        </section>

        <section id="about-section">
            <div class="about-left-section"></div>
            <div class="about-right-section">
                <div class="about-right-section-title">
                    <h1>About Me</h1>
                </div>
                <div class="about-right-section-contents">
                    <p>I am a Computer Scientist with over 5 years experience in coding. My passion and commitment to programming makes me best
                        there is.</p>
                    <p>As for Web-Development, I consider it to be my easiest complex coding I do. I fell in love with website design and
                        developing as a young lad.</p>
                    <p>I'm currently freelancing and work where I am needed.</p>
                    <p><span onclick="window.location.href = '#contact-section'">Contact me</span> and let's get started on your Big Project!</p>
                </div>
            </div>
        </section>

        <section id="skills-section">
            <div class="skills-left-section">
                <div class="skills-left-section-title">
                    <h1>Skills</h1>
                </div>
                <div class="skills-left-section-contents">
                    <p>Developing Big Web Apps is my superpower. I am skilled in: JS(Typescript), HTML, CSS, PHP, Angular, jQuery for the front
                        end.</p>
                    <p>As for the backend I implement: PHP, NodeJS, ExpressJS, MySQL, Microsoft SQL, MongoDB and API integration. I am skilled
                        in DevOps too. I do database modelling and developing and can build a full-blown Web-App with a fully featured admin
                        panel.</p>
                </div>
            </div>
            <div class="skills-right-section"></div>
        </section>

        <section id="projects-section">
            <div class="projects-section-title">
                <h1>Projects</h1>
            </div>
            <div class="projects-section-contents">
                <div class="project">
                    <div class="project-one-title">
                        <h2>SN Shop</h2>
                    </div>
                    <div class="projects-card">
                        <div class="projects-card-overlay"></div>
                        <img src="../Portfolio/assets/images/home-page-snshop.png" alt="">
                        <h2>SN &nbsp;Shop</h2>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-section">
            <div class="contact-section-title">
                <h1>Let's Collaborate</h1>
            </div>
            <div class="contact-section-contents">
                <div class="contact-section-form">
                    <div class="name-inputs-div">
                        <div class="first-name-input-div">
                            <label for="fname">First</label>
                            <input type="text" name="fname" id="first-name-input" placeholder="First Name">
                        </div>
                        <div class="last-name-input-div">
                            <label for="lname">Last</label>
                            <input type="text" name="lname" id="last-name-input" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="email-input-div">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email-input" placeholder="Email">
                    </div>
                    <div class="message-input-div">
                        <label for="message">Message</label>
                        <textarea name="message" id="message-input" cols="30" rows="10" placeholder="Message"></textarea>
                    </div>
                    <button type="button" id="send-message-btn">Shoot</button>

                    <div id="error-message-div">Fill in all fields</div>
                    <div id="success-message-div">Message sent</div>
                </div>
            </div>
        </section>

        <section id="projects-showcase"></section>

    </div>
    <footer id="footer">
        <div class="copyright-text">
            <h5>Copyright 2022- &nbsp;&nbsp;All Rights Reserved</h5>
        </div>
        <div class="creator-info">
            <h5>Created by <span>vr_studios</span></h5>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script>
        const body = document.querySelector(".wrapper");
        let lastScroll = 0;

        window.addEventListener("scroll", () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                body.classList.remove("scroll-up");
            }

            if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
                body.classList.remove("scroll-up")
                body.classList.add("scroll-down")
            }

            if (currentScroll < lastScroll && body.classList.contains("scroll-down")) {
                body.classList.remove("scroll-down")
                body.classList.add("scroll-up")
            }

            lastScroll = currentScroll;
        })
    </script>
</body>

</html>