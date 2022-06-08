<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Nafie develops the best quality website that serves for the long-term. Well-documented, clean, easy and elegant interface helps any non-technical clients.">
    <meta name="keywords"
          content="portfolio, agency, business, clean, company, corporate, creative, gallery, rtl, modern, photography, vue, vuejs, responsive, sass">

    <!-- title of the browser tab -->
    <title>Nafie - HTML Portfolio Template</title>

    <!-- favicon -->
    <link rel="icon" href="{{asset('layouts/favicon.io')}}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto&family=Saira+Stencil+One&text=Nafie&display=swap">

    <!-- css libraries file -->
    <link rel="stylesheet" href="{{asset('css/libraries.min.css')}}">

    <!-- bootstrap css file -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- main style file -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
<div id="app">
    <div id="app-inner" ref="appRef"
         :class="[savedTheme, {'enable-focus-style': isAnyFocus}]"
         @click="isAnyFocus = false"
         @keyup.tab="isAnyFocus = true">

        <div class="circle-cursor circle-cursor-outer" ref="circleCursorOuter"></div>
        <div class="circle-cursor circle-cursor-inner" ref="circleCursorInner"></div>

        <!-- start preloader-->
        <div class="preloader" ref="preloader">
            <div class="preloader-content">
                <div class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 199">
                        <path d="M0.720001 8.91999V0.855993H58.32L169.488 190.648V199H112.176L0.720001 8.91999ZM114.768 73.144V0.855993H169.488V166.744L114.768 73.144ZM0.720001 32.824L55.44 126.424V199H0.720001V32.824Z"/>
                    </svg>
                </div>
                <div class="loading-bar">
                    <span class="loading-bar-progress"></span>
                </div>
            </div>
        </div>
        <!-- end preloader-->

        <!-- start of header -->
        <header class="hide-in-preloading" :class="{
          'big-header': isHeaderBig,
          'small-header': !isHeaderBig,
          'header-hidden': isHeaderHidden
        }">
            <div class="container">
                <!-- logo -->
                <div class="logo" title="Nafie">
                    <h1><a href="index.html">Nafie</a></h1>
                </div>

                <!-- nav links -->
                <nav class="">
                    <ul class="nav-links">
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <div class="desktop-menu-content" tabindex="-1">
                        <div class="container">
                            <div class="about-us">
                                <p> I love making things simple, intuitive and expertly crafted! </p>
                                <h4 class="block-title">
                                    Product is the vital essence of what i do, truly great product
                                    is born of meticulous planning and process. This is where i specialized!
                                </h4>
                            </div>
                            <ul class="contact-info row">
                                <li class="col-lg-4"><h4 class="block-title">Email</h4>
                                    <ul>
                                        <li><a href="mailto:info@nafie.com">info@nafie.com</a></li>
                                        <li><a href="mailto:support@nafie.com">support@nafie.com</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg-4"><h4 class="block-title">Address</h4>
                                    <ul>
                                        <li> 941 saqrqorish Road, alandalos, <br> grnata, wa 47122-4194</li>
                                    </ul>
                                </li>
                                <li class="col-lg-4"><h4 class="block-title">Phone</h4>
                                    <ul>
                                        <li><a href="tel:02966202290">(02) 966 202 290</a></li>
                                        <li><a href="tel:02966202291">(02) 966 202 291</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- options icons -->
                <ul class="options-icons">

                    <!-- lang switcher button -->
                    <li class="lang-switcher">
                        <ul class="lang-switcher-menu">
                            <li class="menu-item menu-item-has-children">
                                <a href="#">En</a>

                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="index.html">En</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="rtl-index.html">ع</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- theme switcher button -->
                    <li class="theme-switcher">
                        <button :class="savedTheme" title="Change Mode" @click="changeAppTheme"></button>
                    </li>

                    <!-- hamburger button -->
                    <li class="hamburger-btn" :class="{'open': isNavMenuOpen}">
                        <button @click="toggleNavMenu"
                                title="Toggle Side Menu"
                                aria-label="Toggle Side Menu"
                                ref="navMenuToggleBtn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </li>
                </ul>
            </div>
        </header>
        <!-- end of header -->

        <!-- start of hero section -->
        <div id="hero"
             class="hero-section hide-in-preloading"
             data-paneffect="true"
             ref="heroSection">
            <div class="hero-img">
                <div class="layer">
                    <img src="{{asset('layouts/images/hero-img.png')}}" alt="User Name">
                </div>
                <div class="layer">
                    <img src="{{asset('layouts/images/hero-img.png')}}" alt="User Name">
                </div>
            </div>

            <div class="hero-text">
                <h2>
                    We Design & Build
                    <br>
                    Creative Products
                </h2>
                <a href="#contact" class="btn">Get In Touch</a>
            </div>

            <div class="social">
                <ul>
                    <li>
                        <a href="#" target="_blank" rel="noreferrer" v-tooltip="{text: 'Facebook', dir: 'right'}">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noreferrer" v-tooltip="{text: 'Twitter', dir: 'right'}">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noreferrer" v-tooltip="{text: 'LinkedIn', dir: 'right'}">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="scroll-down">
                <a href="#about" title="Scroll Down">Scroll</a>
            </div>
        </div>
        <!-- end of hero section -->

        <!-- start of statistics section -->
        <div id="statistics" class="statistics-section section">
            <div class="section-content">
                <div class="container">
                    <ul class="statistics-items row">
                        <li class="col-sm-12 col-md-6 col-lg-4"
                            style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><a
                                    href="#experience">
                                <div class="icon"><img src="{{asset('layouts/images/icons/emblem.png')}}"
                                                       alt="Years of Experience"></div>
                                <div class="text"><h3>12+</h3><strong>Years of Experience</strong></div>
                                <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li class="col-sm-12 col-md-6 col-lg-4"
                            style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><a
                                    href="#portfolio">
                                <div class="icon"><img src="{{asset('layouts/images/icons/check-mark.png')}}"
                                                       alt="Completed Projects"></div>
                                <div class="text"><h3>230+</h3><strong>Completed Projects</strong></div>
                                <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li class="col-sm-12 col-md-6 col-lg-4"
                            style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><a
                                    href="#testimonials">
                                <div class="icon"><img src="{{asset('layouts/images/icons/happy.png')}}"
                                                       alt="Happy Clients"></div>
                                <div class="text"><h3>95+</h3><strong>Happy Clients</strong></div>
                                <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end of statistics section -->

        <!-- start of about section -->
        <div id="about" class="about-section section" tabindex="-1" ref="aboutSection">
            <div class="container">
                <div class="section-content row">

                    <!-- about image -->
                    <div class="about-img col-lg-6"
                         style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                        <div class="layer">
                            <img src="{{asset('layouts/images/about-img.png')}}" alt="User Name">
                        </div>
                        <div class="layer">
                            <img src="{{asset('layouts/images/about-img.png')}}" alt="User Name">
                        </div>
                    </div>

                    <!-- text box -->
                    <div class="about-text col-lg-6">
                        <div class="text-box-inline">
                            <span class="subtitle">about me</span>
                            <h2>
                                Need a Creative Product?
                                <br>
                                I can Help You!
                            </h2>
                            <p>
                                Hi! I’m Muhammad Mabrouk, and I’m a developer who has passion for building clean web
                                applications with intuitive functionality. I enjoy the process of turning ideas into
                                reality using creative solutions. I’m always curious about learning new skills, tools,
                                and concepts. In addition to working on various solo full stack projects, I have worked
                                with creative teams, which involves daily stand-ups and communications, source control,
                                and project management.
                            </p>
                            <div class="btns-container">
                                <a href="#contact" class="btn btn-primary">Hire Me</a>
                                <a download href="#" class="btn btn-outline-light">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of about section -->

        <!-- start of skills section -->
        <div id="skills" class="skills-section section" tabindex="-1">
            <div class="container">
                <div class="section-content row">

                    <!-- text box -->
                    <div class="skills-text col-lg-6">
                        <div class="text-box-inline">
                            <span class="subtitle">my skills</span>
                            <h2>
                                What My Programming
                                <br>
                                Skills Included?
                            </h2>
                            <p>
                                I develop simple, intuitive and responsive user interface that helps users get things
                                done with less effort and time with those technologies.
                            </p>
                            <div ref="skillsSwitchBtn" class="toggle-switch-btn">
                                <input id="skills-list" type="radio" value="skills" v-model="skillsType" checked>
                                <label for="skills-list" class="link-hover">Skills</label>
                                <input id="tools-list" type="radio" value="tools" v-model="skillsType">
                                <label for="tools-list" class="link-hover">Tools</label>
                                <span class="switcher-toggle" style="width: calc((100% - 8px) / 2);"></span>
                            </div>
                        </div>
                    </div>

                    <!-- skills items -->
                    <div class="skills-items col-lg-6">

                        <!-- skills list -->
                        <ul v-staggerdelay="50" v-show="skillsType === 'skills'">
                            <li tabindex="0"
                                v-for="skill in skillsItems"
                                :key="skill.title"
                                v-tooltip="{text: skill.title, dir: 'top'}">
                                <div class="skill-icon">
                                    <img :src="skill.imgUrl" :alt="skill.title">
                                </div>
                            </li>
                        </ul>

                        <!-- tools list -->
                        <ul v-staggerdelay="50" v-show="skillsType === 'tools'">
                            <li tabindex="0"
                                v-for="tool in toolsItems"
                                :key="tool.title"
                                v-tooltip="{text: tool.title, dir: 'top'}">
                                <div class="skill-icon">
                                    <img :src="tool.imgUrl" :alt="tool.title">
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{--
                    <div class="skills-items col-lg-6">

                        <!-- skills list -->
                        <ul style="">
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 50ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="HTML5"></div>
                                <div class="custom-tooltip custom-tooltip-top">HTML5</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 100ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="CSS3"></div>
                                <div class="custom-tooltip custom-tooltip-top">CSS3</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 150ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="JavaScript">
                                </div>
                                <div class="custom-tooltip custom-tooltip-top">JavaScript</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 200ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="TypeScript">
                                </div>
                                <div class="custom-tooltip custom-tooltip-top">TypeScript</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 250ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="jQuery"></div>
                                <div class="custom-tooltip custom-tooltip-top">jQuery</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 300ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Bootstrap"></div>
                                <div class="custom-tooltip custom-tooltip-top">Bootstrap</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 350ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Angular"></div>
                                <div class="custom-tooltip custom-tooltip-top">Angular</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 400ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="React"></div>
                                <div class="custom-tooltip custom-tooltip-top">React</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 450ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Vue"></div>
                                <div class="custom-tooltip custom-tooltip-top">Vue</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 500ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Firebase"></div>
                                <div class="custom-tooltip custom-tooltip-top">Firebase</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 550ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="PugJS"></div>
                                <div class="custom-tooltip custom-tooltip-top">PugJS</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 600ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="SASS"></div>
                                <div class="custom-tooltip custom-tooltip-top">SASS</div>
                            </li>
                        </ul>

                        <!-- tools list -->
                        <ul style="display: none;">
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 50ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Ajax"></div>
                                <div class="custom-tooltip custom-tooltip-top">Ajax</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 100ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Gulp"></div>
                                <div class="custom-tooltip custom-tooltip-top">Gulp</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 150ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Webpack"></div>
                                <div class="custom-tooltip custom-tooltip-top">Webpack</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 200ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Git (Github)">
                                </div>
                                <div class="custom-tooltip custom-tooltip-top">Git (Github)</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 250ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Npm"></div>
                                <div class="custom-tooltip custom-tooltip-top">Npm</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 300ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Command Line">
                                </div>
                                <div class="custom-tooltip custom-tooltip-top">Command Line</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 350ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="VS Code"></div>
                                <div class="custom-tooltip custom-tooltip-top">VS Code</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 400ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Trello"></div>
                                <div class="custom-tooltip custom-tooltip-top">Trello</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 450ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="ClickUp"></div>
                                <div class="custom-tooltip custom-tooltip-top">ClickUp</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 500ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Slack"></div>
                                <div class="custom-tooltip custom-tooltip-top">Slack</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 550ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Photoshop"></div>
                                <div class="custom-tooltip custom-tooltip-top">Photoshop</div>
                            </li>
                            <li tabindex="0" class="has-tooltip"
                                style="animation-delay: 600ms; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                <div class="skill-icon"><img src="https://via.placeholder.com/48" alt="Adobe XD"></div>
                                <div class="custom-tooltip custom-tooltip-top">Adobe XD</div>
                            </li>
                        </ul>
                    </div>
                    --}}

                </div>
            </div>
        </div>
        <!-- end of skills section -->

        <!-- start of experience section -->
        <div id="experience" class="experience-section section" tabindex="-1">
            <div class="container">
                <div class="section-content row">
                    <div class="col-lg-6">
                        <div class="experience-timeline">
                            <div class="timepath"><span class="line"
                                                        style="opacity: 1; visibility: inherit; clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);"></span><span
                                        class="semicircle"
                                        style="opacity: 1; visibility: inherit; clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%, 0% 75%, 75% 75%, 75% 25%, 0% 25%);"></span><span
                                        class="line"
                                        style="opacity: 1; visibility: inherit; clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);"></span><span
                                        class="semicircle"
                                        style="opacity: 1; visibility: inherit; clip-path: polygon(100% 0%, 0% 0%, 0% 100%, 100% 100%, 100% 75%, 25% 75%, 25% 25%, 100% 25%);"></span><span
                                        class="line"
                                        style="opacity: 1; visibility: inherit; clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);"></span>
                            </div>
                            <ul class="timeline-items">
                                <li class="has-ultimate-tooltip" tabindex="0"
                                    style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><h3>
                                        2010</h3>
                                    <div class="ultimate-tooltip" data-popper-placement="bottom"
                                         style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-115px, 60px);"
                                         data-popper-reference-hidden="" data-popper-escaped=""><h4
                                                class="ultimate-tooltip-title">Google Inc.</h4><h5
                                                class="ultimate-tooltip-subtitle">Front-End Developer</h5>
                                        <p>Monitored technical aspects of the front-end delivery for projects.</p></div>
                                    <div class="ultimate-tooltip-arrow"></div>
                                </li>
                                <li class="has-ultimate-tooltip" tabindex="0"
                                    style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><h3>
                                        2012</h3>
                                    <div class="ultimate-tooltip" data-popper-placement="bottom"
                                         style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-115px, 60px);"
                                         data-popper-reference-hidden="" data-popper-escaped=""><h4
                                                class="ultimate-tooltip-title">Facebook Inc.</h4><h5
                                                class="ultimate-tooltip-subtitle">Full Stack Developer</h5>
                                        <p>Collaborate with creative and development teams on the execution of
                                            ideas.</p></div>
                                    <div class="ultimate-tooltip-arrow"></div>
                                </li>
                                <li class="has-ultimate-tooltip" tabindex="0"
                                    style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><h3>
                                        2014</h3>
                                    <div class="ultimate-tooltip" data-popper-placement="bottom"
                                         style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-115px, 60px);"
                                         data-popper-reference-hidden="" data-popper-escaped=""><h4
                                                class="ultimate-tooltip-title">Envato Inc.</h4><h5
                                                class="ultimate-tooltip-subtitle">UI/UX Developer</h5>
                                        <p>Converted Photoshop layouts to web pages using HTML, CSS, and JavaScript.</p>
                                    </div>
                                    <div class="ultimate-tooltip-arrow"></div>
                                </li>
                                <li class="has-ultimate-tooltip" tabindex="0"
                                    style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><h3>
                                        2016</h3>
                                    <div class="ultimate-tooltip" data-popper-placement="bottom"
                                         style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-115px, 60px);"
                                         data-popper-reference-hidden=""><h4 class="ultimate-tooltip-title">Google
                                            Inc.</h4><h5 class="ultimate-tooltip-subtitle">Front-End Developer</h5>
                                        <p>Monitored technical aspects of the front-end delivery for projects.</p></div>
                                    <div class="ultimate-tooltip-arrow"></div>
                                </li>
                                <li class="has-ultimate-tooltip" tabindex="0"
                                    style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><h3>
                                        2018</h3>
                                    <div class="ultimate-tooltip" data-popper-placement="bottom"
                                         style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-115px, 60px);"
                                         data-popper-reference-hidden=""><h4 class="ultimate-tooltip-title">Facebook
                                            Inc.</h4><h5 class="ultimate-tooltip-subtitle">Full Stack Developer</h5>
                                        <p>Collaborate with creative and development teams on the execution of
                                            ideas.</p></div>
                                    <div class="ultimate-tooltip-arrow"></div>
                                </li>
                                <li class="has-ultimate-tooltip" tabindex="0"
                                    style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><h3>
                                        2020</h3>
                                    <div class="ultimate-tooltip" data-popper-placement="bottom"
                                         style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-115px, 60px);"
                                         data-popper-reference-hidden=""><h4 class="ultimate-tooltip-title">Google
                                            Inc.</h4><h5 class="ultimate-tooltip-subtitle">Front-End Developer</h5>
                                        <p>Monitored technical aspects of the front-end delivery for projects.</p></div>
                                    <div class="ultimate-tooltip-arrow"></div>
                                </li>
                                <li class="has-ultimate-tooltip" tabindex="0"
                                    style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"><h3>
                                        2022</h3>
                                    <div class="ultimate-tooltip" data-popper-placement="bottom"
                                         style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-115px, 60px);"
                                         data-popper-reference-hidden=""><h4 class="ultimate-tooltip-title">Facebook
                                            Inc.</h4><h5 class="ultimate-tooltip-subtitle">Full Stack Developer</h5>
                                        <p>Collaborate with creative and development teams on the execution of
                                            ideas.</p></div>
                                    <div class="ultimate-tooltip-arrow"></div>
                                </li>
                                <li class="has-ultimate-tooltip" tabindex="0"
                                    style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"></li>
                                <li class="has-ultimate-tooltip" tabindex="0"
                                    style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="experience-text col-lg-6">
                        <div class="text-box-inline"><span class="subtitle"
                                                           style="top: 5px; opacity: 1; visibility: inherit;">experience</span>
                            <h2 style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">12+ Years of
                                Experience <br> With Many Awards! </h2>
                            <p style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;"> I have been
                                developing sites and apps for 12 years and i know for sure the main trends and
                                directions of modern design, I have been a visionary and a reliable software engineering
                                partner for world-class brands. You will get a decent result as you expect. </p></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of experience section -->

        <!-- start of portfolio section -->
        <div id="portfolio" class="portfolio-section section" tabindex="-1">
            <div class="container">
                <div class="section-content">
                    <ul class="portfolio-items has-works" data-no-works-msg="No works to load">
                        <li>
                            <div class="text-box-inline"><span class="subtitle"
                                                               style="top: 5px; opacity: 1; visibility: inherit;">my works</span>
                                <h2 style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;"> See My
                                    Works Which <br> Will Amaze You! </h2>
                                <p style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;"> We develop
                                    the best quality website that serves for the long-term. Well-documented, clean, easy
                                    and elegant interface helps any non-technical clients. </p>
                                <ul class="works-filter"
                                    style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                    <li>
                                        <button class="active">All</button>
                                    </li>
                                    <li>
                                        <button class="">HTML</button>
                                    </li>
                                    <li>
                                        <button class="">Angular</button>
                                    </li>
                                    <li>
                                        <button class="">Vue</button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="portfolio-item"
                            style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><a
                                    href="single-portfolio.html?id=18" target="_blank" rel="noopener">
                                <div class="item-img"><img src="https://via.placeholder.com/350x500"
                                                           alt="Lorem Ipsum Dolor 18"></div>
                                <div class="item-details"><h3 class="title">Lorem Ipsum Dolor 18</h3>
                                    <div class="date">April 2021</div>
                                </div>
                            </a>
                            <div class="js-tilt-glare"
                                 style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;">
                                <div class="js-tilt-glare-inner"
                                     style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0; width: 1016px; height: 1016px;"></div>
                            </div>
                        </li>
                        <li class="portfolio-item"
                            style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><a
                                    href="single-portfolio.html?id=17" target="_blank" rel="noopener">
                                <div class="item-img"><img src="https://via.placeholder.com/375x300"
                                                           alt="Lorem Ipsum Dolor 17"></div>
                                <div class="item-details"><h3 class="title">Lorem Ipsum Dolor 17</h3>
                                    <div class="date">April 2021</div>
                                </div>
                            </a>
                            <div class="js-tilt-glare"
                                 style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;">
                                <div class="js-tilt-glare-inner"
                                     style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0; width: 710px; height: 710px;"></div>
                            </div>
                        </li>
                        <li class="portfolio-item"
                            style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                            <a href="single-portfolio.html?id=16" target="_blank" rel="noopener">
                                <div class="item-img"><img src="https://via.placeholder.com/570x400"
                                                           alt="Lorem Ipsum Dolor 16"></div>
                                <div class="item-details"><h3 class="title">Lorem Ipsum Dolor 16</h3>
                                    <div class="date">April 2021</div>
                                </div>
                            </a>
                            <div class="js-tilt-glare"
                                 style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;">
                                <div class="js-tilt-glare-inner"
                                     style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0; width: 710px; height: 710px;"></div>
                            </div>
                        </li>
                        <li class="portfolio-item"
                            style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1); will-change: transform;">
                            <a href="single-portfolio.html?id=15" target="_blank" rel="noopener">
                                <div class="item-img"><img src="https://via.placeholder.com/375x240"
                                                           alt="Lorem Ipsum Dolor 15"></div>
                                <div class="item-details"><h3 class="title">Lorem Ipsum Dolor 15</h3>
                                    <div class="date">April 2021</div>
                                </div>
                            </a>
                            <div class="js-tilt-glare"
                                 style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;">
                                <div class="js-tilt-glare-inner"
                                     style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0; width: 710px; height: 710px;"></div>
                            </div>
                        </li>
                        <li class="portfolio-item"
                            style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><a
                                    href="single-portfolio.html?id=14" target="_blank" rel="noopener">
                                <div class="item-img"><img src="https://via.placeholder.com/375x500"
                                                           alt="Lorem Ipsum Dolor 14"></div>
                                <div class="item-details"><h3 class="title">Lorem Ipsum Dolor 14</h3>
                                    <div class="date">April 2021</div>
                                </div>
                            </a>
                            <div class="js-tilt-glare"
                                 style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;">
                                <div class="js-tilt-glare-inner"
                                     style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0; width: 948px; height: 948px;"></div>
                            </div>
                        </li>
                        <li class="portfolio-item"
                            style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><a
                                    href="single-portfolio.html?id=13" target="_blank" rel="noopener">
                                <div class="item-img"><img src="https://via.placeholder.com/300x270"
                                                           alt="Lorem Ipsum Dolor 13"></div>
                                <div class="item-details"><h3 class="title">Lorem Ipsum Dolor 13</h3>
                                    <div class="date">April 2021</div>
                                </div>
                            </a>
                            <div class="js-tilt-glare"
                                 style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;">
                                <div class="js-tilt-glare-inner"
                                     style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0; width: 710px; height: 710px;"></div>
                            </div>
                        </li>
                        <li class="portfolio-item"
                            style="transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><a
                                    href="single-portfolio.html?id=12" target="_blank" rel="noopener">
                                <div class="item-img"><img src="https://via.placeholder.com/300x280"
                                                           alt="Lorem Ipsum Dolor 12"></div>
                                <div class="item-details"><h3 class="title">Lorem Ipsum Dolor 12</h3>
                                    <div class="date">April 2021</div>
                                </div>
                            </a>
                            <div class="js-tilt-glare"
                                 style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none;">
                                <div class="js-tilt-glare-inner"
                                     style="position: absolute; top: 50%; left: 50%; pointer-events: none; background-image: linear-gradient(0deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 100%); transform: rotate(180deg) translate(-50%, -50%); transform-origin: 0% 0%; opacity: 0; width: 710px; height: 710px;"></div>
                            </div>
                        </li>
                        <li>
                            <button class="more">Load more works</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end of portfolio section -->

        <!-- start of testimonials section -->
        <div id="testimonials" class="testimonials-section section" tabindex="-1" ref="testimonialsSection">
            <div class="container">
                <div class="section-title">
                    <span class="subtitle">testimonials</span>
                    <h2 class="title">
                        Check What's My Clients
                        <br>
                        Say About Me
                    </h2>
                </div>
            </div>

            <div class="section-content">
                <ul class="testimonials-items">
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 500ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Terrell Grimes"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-62px, -120px);"
                                 data-popper-escaped=""><p>Nafie simply provides amazing web development service. Their
                                    team is extremely professional and the easiest to meet I have ever worked with. I
                                    would recommend Nafie to anyone.</p><h4 class="ultimate-tooltip-title">Terrell
                                    Grimes</h4><h5 class="ultimate-tooltip-subtitle">Photographer</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 1000ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Lonny Corkery"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-50px, -230px);"
                                 data-popper-escaped=""><p>Excellent Team to work with. Always positive to find the most
                                    appropriate solution. Nafie is one of the professional web development agency that
                                    provides awesome services.</p><h4 class="ultimate-tooltip-title">Lonny Corkery</h4>
                                <h5 class="ultimate-tooltip-subtitle">Project Manager</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 1500ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Max Schmidt DDS"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-115px, -100px);">
                                <p>Nafie team is very professional, always delivers high quality results, and is always
                                    there to help. Look forward to working with Nafie in other projects.</p><h4
                                        class="ultimate-tooltip-title">Max Schmidt DDS</h4><h5
                                        class="ultimate-tooltip-subtitle">CEO, Designer</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 2000ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Amir Stoltenberg"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-90px, -150px);"
                                 data-popper-escaped=""><p>Nafie worked on a handful of projects for us and has always
                                    exceeded our expectations. Nafie team is dedicated, talented and a delight to work
                                    with.</p><h4 class="ultimate-tooltip-title">Amir Stoltenberg</h4><h5
                                        class="ultimate-tooltip-subtitle">Sales Manager</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 2500ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Kenton Marquardt"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-75px, -180px);"
                                 data-popper-escaped=""><p>I know I can count on your service if I need my project done
                                    fast and with the best possible result. I am a regular customer and hope to continue
                                    our work!</p><h4 class="ultimate-tooltip-title">Kenton Marquardt</h4><h5
                                        class="ultimate-tooltip-subtitle">Art Director</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 3000ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Reyna Hammes"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-133px, -120px);"
                                 data-popper-reference-hidden="" data-popper-escaped=""><p>Muhammad was a real pleasure
                                    to work with and we look forward to working with him again. He’s definitely the kind
                                    of developer you can trust with a project from start to finish.</p><h4
                                        class="ultimate-tooltip-title">Reyna Hammes</h4><h5
                                        class="ultimate-tooltip-subtitle">Motion Graphic Animator</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 3500ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Jovan Parisian"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-35px, -270px);">
                                <p>Muhammad was a real pleasure to work with and we look forward to working with him
                                    again. He’s definitely the kind of developer you can trust with a project from start
                                    to finish.</p><h4 class="ultimate-tooltip-title">Jovan Parisian</h4><h5
                                        class="ultimate-tooltip-subtitle">Motion Graphic Animator</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 4000ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Pasquale Deckow"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-624px, -277px);">
                                <p>I know I can count on your service if I need my project done fast and with the best
                                    possible result. I am a regular customer and hope to continue our work!</p><h4
                                        class="ultimate-tooltip-title">Pasquale Deckow</h4><h5
                                        class="ultimate-tooltip-subtitle">Art Director</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 4500ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Rosa Ferry"></div>
                            <div class="ultimate-tooltip" data-popper-reference-hidden="" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-2089px, -1214px);">
                                <p>Nafie worked on a handful of projects for us and has always exceeded our
                                    expectations. Nafie team is dedicated, talented and a delight to work with.</p><h4
                                        class="ultimate-tooltip-title">Rosa Ferry</h4><h5
                                        class="ultimate-tooltip-subtitle">Sales Manager</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 5000ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Keshaun Robel"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-3183px, -904px);">
                                <p>Nafie team is very professional, always delivers high quality results, and is always
                                    there to help. Look forward to working with Nafie in other projects.</p><h4
                                        class="ultimate-tooltip-title">Keshaun Robel</h4><h5
                                        class="ultimate-tooltip-subtitle">CEO, Designer</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 5500ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Casper Paucek"></div>
                            <div class="ultimate-tooltip" data-popper-reference-hidden="" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-4112px, -1244px);">
                                <p>Excellent Team to work with. Always positive to find the most appropriate solution.
                                    Nafie is one of the professional web development agency that provides awesome
                                    services.</p><h4 class="ultimate-tooltip-title">Casper Paucek</h4><h5
                                        class="ultimate-tooltip-subtitle">Project Manager</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 6000ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Archibald Fadel"></div>
                            <div class="ultimate-tooltip" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-5046px, -1054px);">
                                <p>Nafie simply provides amazing web development service. Their team is extremely
                                    professional and the easiest to meet I have ever worked with. I would recommend
                                    Nafie to anyone.</p><h4 class="ultimate-tooltip-title">Archibald Fadel</h4><h5
                                        class="ultimate-tooltip-subtitle">Photographer</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 6500ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Tabitha Denesik"></div>
                            <div class="ultimate-tooltip" data-popper-reference-hidden="" data-popper-escaped=""
                                 data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-834px, -2144px);">
                                <p>Nafie simply provides amazing web development service. Their team is extremely
                                    professional and the easiest to meet I have ever worked with. I would recommend
                                    Nafie to anyone.</p><h4 class="ultimate-tooltip-title">Tabitha Denesik</h4><h5
                                        class="ultimate-tooltip-subtitle">Photographer</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 7000ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Javon Bogan"></div>
                            <div class="ultimate-tooltip" data-popper-reference-hidden="" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-1189px, -1694px);">
                                <p>Excellent Team to work with. Always positive to find the most appropriate solution.
                                    Nafie is one of the professional web development agency that provides awesome
                                    services.</p><h4 class="ultimate-tooltip-title">Javon Bogan</h4><h5
                                        class="ultimate-tooltip-subtitle">Project Manager</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 7500ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Duncan Kemmer"></div>
                            <div class="ultimate-tooltip" data-popper-reference-hidden="" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-2283px, -2064px);">
                                <p>Nafie team is very professional, always delivers high quality results, and is always
                                    there to help. Look forward to working with Nafie in other projects.</p><h4
                                        class="ultimate-tooltip-title">Duncan Kemmer</h4><h5
                                        class="ultimate-tooltip-subtitle">CEO, Designer</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 8000ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Coy Johns"></div>
                            <div class="ultimate-tooltip" data-popper-reference-hidden="" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-3213px, -1604px);">
                                <p>Nafie worked on a handful of projects for us and has always exceeded our
                                    expectations. Nafie team is dedicated, talented and a delight to work with.</p><h4
                                        class="ultimate-tooltip-title">Coy Johns</h4><h5
                                        class="ultimate-tooltip-subtitle">Sales Manager</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 8500ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Murphy Roberts"></div>
                            <div class="ultimate-tooltip" data-popper-reference-hidden="" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-4107px, -2014px);">
                                <p>I know I can count on your service if I need my project done fast and with the best
                                    possible result. I am a regular customer and hope to continue our work!</p><h4
                                        class="ultimate-tooltip-title">Murphy Roberts</h4><h5
                                        class="ultimate-tooltip-subtitle">Art Director</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                    <li class="has-ultimate-tooltip" tabindex="0" style="animation-delay: 9000ms">
                        <div class="testimonials-item"
                             style="opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                            <div class="testimonial-author-img"><img src="https://via.placeholder.com/200"
                                                                     alt="Dimitri Lockman"></div>
                            <div class="ultimate-tooltip" data-popper-reference-hidden="" data-popper-placement="top"
                                 style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(-5436px, -1544px);">
                                <p>Muhammad was a real pleasure to work with and we look forward to working with him
                                    again. He’s definitely the kind of developer you can trust with a project from start
                                    to finish.</p><h4 class="ultimate-tooltip-title">Dimitri Lockman</h4><h5
                                        class="ultimate-tooltip-subtitle">Motion Graphic Animator</h5></div>
                            <div class="ultimate-tooltip-arrow"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end of testimonials section -->

        <!-- start of contact section -->
        <div id="contact" class="contact-section section" tabindex="-1">
            <div class="container">
                <div class="section-content row">

                    <!-- text box -->
                    <div class="contact-text col-lg-6">
                        <div class="text-box-inline">
                            <span class="subtitle">contact</span>
                            <h2>
                                Have You Any Project?
                                <br>
                                Please Drop a Message
                            </h2>
                            <p>
                                Get in touch and let me know how i can help. Fill out the form and i’ll be in touch as
                                soon as possible.
                            </p>
                        </div>

                        <!-- contact info -->
                        <ul class="contact-info">
                            <li>
                                <img src="{{asset('layouts/images/icons/address.png')}}" alt="Address">
                                <div>
                                    <strong>Address:</strong>
                                    941 Saqrqorish Road, alandalos, grnata, wa 47122-4194
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('layouts/images/icons/phone.png')}}" alt="Phone">
                                <div>
                                    <strong>Phone:</strong>
                                    <ul>
                                        <li><a href="tel:02966202290" class="ltr-dir">(02) 966 202 290</a></li>
                                        <li><a href="tel:02966202291" class="ltr-dir">(02) 966 202 291</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('layouts/images/icons/email.png')}}" alt="Email">
                                <div>
                                    <strong>Email:</strong>
                                    <ul>
                                        <li><a href="mailto:info@nafie.com">info@nafie.com</a></li>
                                        <li><a href="mailto:support@nafie.com">support@nafie.com</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                        <!-- social links -->
                        <ul class="social">
                            <li>
                                <a href="#" target="_blank" rel="noreferrer" v-tooltip="{text: 'Facebook', dir: 'top'}">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noreferrer" v-tooltip="{text: 'Twitter', dir: 'top'}">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noreferrer" v-tooltip="{text: 'LinkedIn', dir: 'top'}">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noreferrer" v-tooltip="{text: 'YouTube', dir: 'top'}">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- contact form -->
                    <div class="col-lg-6">
                        <form ref="contactForm"
                              class="contact-form form-styled"
                              action="contact_form.php"
                              data-success-msg="Message sent successfully!"
                              data-err-msg="Oops! something went wrong, please try again.">
                            <div class="group">
                                <label>Name</label>
                                <div class="control has-prefix-icon">
                                    <input type="text"
                                           name="name"
                                           placeholder="e.g. John Doe"
                                           minlength="3"
                                           required>
                                    <i class="fa fa-user-circle prefix-icon" aria-hidden="true"></i>

                                    <!-- validation errors messages -->
                                    <div class="errors-msgs">
                                        <input class="required" type="hidden" value="Name is required">
                                        <input class="minLength" type="hidden"
                                               value="Name must be at least 3 characters">
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <label>Email</label>
                                <div class="control has-prefix-icon">
                                    <input class="ltr-dir"
                                           type="email"
                                           inputmode="email"
                                           name="email"
                                           placeholder="e.g. john.doe@gmail.com"
                                           required>
                                    <i class="fa fa-envelope prefix-icon" aria-hidden="true"></i>

                                    <!-- validation errors messages -->
                                    <div class="errors-msgs">
                                        <input class="required" type="hidden" value="Email is required">
                                        <input class="invalid" type="hidden" value="Please enter a valid email address">
                                    </div>
                                </div>
                            </div>
                            <div class="group phone-number">
                                <label>Phone <span class="optional">(Optional)</span></label>
                                <div class="control has-prefix-icon">
                                    <input type="tel"
                                           inputmode="tel"
                                           name="phone"
                                           placeholder="Phone Number">
                                    <i class="fa fa-phone prefix-icon" aria-hidden="true"></i>

                                    <!-- validation errors messages -->
                                    <div class="errors-msgs">
                                        <input class="invalid" type="hidden" value="Please enter a valid Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <label>Message</label>
                                <div class="control has-prefix-icon">
                                    <textarea name="message" placeholder="Write message..." required></textarea>
                                    <i class="fa fa-comments prefix-icon" aria-hidden="true"></i>

                                    <!-- validation errors messages -->
                                    <div class="errors-msgs">
                                        <input class="required" type="hidden" value="Message is required">
                                    </div>
                                </div>
                            </div>
                            <div class="group">
                                <div class="control">
                                    <button class="submit-btn btn btn-dark" type="button"
                                            @click="contactFormValidation">Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of contact section -->

        <!-- start of footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="logo" title="Nafie"><h1><a href="index.html">Nafie</a></h1></div>
                    </div>
                    <div class="col-lg-6"> © 2021 - 2022 Proudly Powered by <a
                                href="https://themeforest.net/user/webrouk/portfolio" target="_blank" rel="noopener">Webrouk</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- scroll to top button -->
        <button class="scroll-to-top" ref="scrollTopBtn"
                title="Back To Top"
                data-show-at="50"
                @click="scrollToTop">
            <svg width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </button>

        <!-- toast notifications -->
        <ul class="notifications-container hide-in-preloading" style="opacity: 1; visibility: inherit;"></ul>

        <!-- ajax loading -->
        <div class="ajax-loading hide-in-preloading" v-show="isAjaxLoading">
            <span></span>
        </div>
    </div>
</div>

<!-- js plugins file -->
<script src="{{asset('js/plugins.min.js')}}"></script>

<!-- main script file -->
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
