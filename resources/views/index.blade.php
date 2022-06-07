<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nafie develops the best quality website that serves for the long-term. Well-documented, clean, easy and elegant interface helps any non-technical clients.">
    <meta name="keywords" content="portfolio, agency, business, clean, company, corporate, creative, gallery, rtl, modern, photography, vue, vuejs, responsive, sass">

    <!-- title of the browser tab -->
    <title>Nafie - HTML Portfolio Template</title>

    <!-- favicon -->
    <link rel="icon" href="{{asset('layouts/favicon.io')}}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto&family=Saira+Stencil+One&text=Nafie&display=swap">

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
                        <path d="M0.720001 8.91999V0.855993H58.32L169.488 190.648V199H112.176L0.720001 8.91999ZM114.768 73.144V0.855993H169.488V166.744L114.768 73.144ZM0.720001 32.824L55.44 126.424V199H0.720001V32.824Z" />
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
                <nav :class="{'menu-open': isNavMenuOpen}" ref="headerNav">

                    <!-- nav menu links -->
                    <ul class="nav-links">
                        <li v-for="link in navLinks" :key="link.url">
                            <a :href="link.url" @click="closeNavMenu">
                                {{ link.title.en }}
                            </a>
                        </li>
                    </ul>

                    <!-- menu content in big devices (hidden in mobile/tablet) -->
                    <div class="desktop-menu-content" tabindex="-1">
                        <div class="container">

                            <!-- about us -->
                            <div class="about-us">
                                <p>
                                    I love making things simple, intuitive and expertly crafted!
                                </p>
                                <h4 class="block-title">
                                    Product is the vital essence of what i do, truly great product is born of meticulous planning and process. This is where i specialized!
                                </h4>
                            </div>

                            <!-- contact info -->
                            <ul class="contact-info row">
                                <li class="col-lg-4">
                                    <h4 class="block-title">Email</h4>
                                    <ul>
                                        <li><a href="mailto:info@nafie.com">info@nafie.com</a></li>
                                        <li><a href="mailto:support@nafie.com">support@nafie.com</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg-4">
                                    <h4 class="block-title">Address</h4>
                                    <ul>
                                        <li>
                                            941 saqrqorish Road, alandalos,
                                            <br>
                                            grnata, wa 47122-4194
                                        </li>
                                    </ul>
                                </li>
                                <li class="col-lg-4">
                                    <h4 class="block-title">Phone</h4>
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
                <div class="layer" v-clone>
                    <img src="https://via.placeholder.com/600x800" alt="User Name">
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
                        <li class="col-sm-12 col-md-6 col-lg-4">
                            <a href="#experience">
                                <div class="icon">
                                    <img src="assets/images/icons/emblem.png" alt="Years of Experience">
                                </div>
                                <div class="text">
                                    <h3>{{ experienceYears }}+</h3>
                                    <strong>Years of Experience</strong>
                                </div>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="col-sm-12 col-md-6 col-lg-4">
                            <a href="#portfolio">
                                <div class="icon">
                                    <img src="assets/images/icons/check-mark.png" alt="Completed Projects">
                                </div>
                                <div class="text">
                                    <h3>230+</h3>
                                    <strong>Completed Projects</strong>
                                </div>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="col-sm-12 col-md-6 col-lg-4">
                            <a href="#testimonials">
                                <div class="icon">
                                    <img src="assets/images/icons/happy.png" alt="Happy Clients">
                                </div>
                                <div class="text">
                                    <h3>95+</h3>
                                    <strong>Happy Clients</strong>
                                </div>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </li>
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
                    <div class="about-img col-lg-6">
                        <div class="layer" v-clone>
                            <img src="https://via.placeholder.com/330x500" alt="User Name">
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
                                Hi! I’m Muhammad Mabrouk, and I’m a developer who has passion for building clean web applications with intuitive functionality. I enjoy the process of turning ideas into reality using creative solutions. I’m always curious about learning new skills, tools, and concepts. In addition to working on various solo full stack projects, I have worked with creative teams, which involves daily stand-ups and communications, source control, and project management.
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
                                I develop simple, intuitive and responsive user interface that helps users get things done with less effort and time with those technologies.
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
                </div>
            </div>
        </div>
        <!-- end of skills section -->

        <!-- start of experience section -->
        <div id="experience" class="experience-section section" tabindex="-1">
            <div class="container">
                <div class="section-content row">

                    <!-- timeline -->
                    <div class="col-lg-6">
                        <div class="experience-timeline">
                            <div class="timepath" ref="experienceTimepath">
                                <span class="line"></span>
                                <template v-for="line in experienceChunks">
                                    <span class="semicircle"></span>
                                    <span class="line"></span>
                                </template>
                            </div>

                            <ul class="timeline-items">
                                <li class="has-ultimate-tooltip" tabindex="0" v-for="item in experienceItems">
                                    <template v-if="Object.keys(item).length > 0">
                                        <h3>{{ item.date }}</h3>
                                        <div class="ultimate-tooltip">
                                            <h4 class="ultimate-tooltip-title">{{ item.companyName.en }}</h4>
                                            <h5 class="ultimate-tooltip-subtitle">{{ item.jobTitle.en }}</h5>
                                            <p>{{ item.desc.en }}</p>
                                        </div>
                                        <div class="ultimate-tooltip-arrow"></div>
                                    </template>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- text box -->
                    <div class="experience-text col-lg-6">
                        <div class="text-box-inline">
                            <span class="subtitle">experience</span>
                            <h2>
                                {{ experienceYears }}+ Years of Experience
                                <br>
                                With Many Awards!
                            </h2>
                            <p>
                                I have been developing sites and apps for {{ experienceYears }} years and i know for sure the main trends and directions of modern design, I have been a visionary and a reliable software engineering partner for world-class brands. You will get a decent result as you expect.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of experience section -->

        <!-- start of portfolio section -->
        <div id="portfolio" class="portfolio-section section" tabindex="-1">
            <div class="container">
                <div class="section-content">

                    <!-- portfolio items -->
                    <ul class="portfolio-items has-works" ref="portfolioItems" data-no-works-msg="No works to load">
                        <li>
                            <!-- text box -->
                            <div class="text-box-inline">
                                <span class="subtitle">my works</span>
                                <h2>
                                    See My Works Which
                                    <br>
                                    Will Amaze You!
                                </h2>
                                <p>
                                    We develop the best quality website that serves for the long-term. Well-documented, clean, easy and elegant interface helps any non-technical clients.
                                </p>
                                <ul class="works-filter">
                                    <li v-for="filter in filters" :key="filter">
                                        <button :class="{'active': currentFilter === filter}"
                                                @click="filterPortfolioItems(filter)">
                                            {{ filter }}
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- start items list -->
                        <li class="portfolio-item"
                            v-for="work in filteredPortfolioItems"
                            :key="work.title.en">
                            <a :href="work.url" target="_blank" rel="noopener">
                                <div class="item-img">
                                    <img :src="work.imgUrl" :alt="work.title.en">
                                </div>
                                <div class="item-details">
                                    <h3 class="title">{{ work.title.en }}</h3>
                                    <div class="date">{{ work.date.en }}</div>
                                </div>
                            </a>
                        </li>
                        <!-- end items list -->

                        <li>
                            <button class="more" @click="getPortfolioItems">Load more works</button>
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
                <ul class="testimonials-items" v-staggerdelay="500">
                    <li class="has-ultimate-tooltip"
                        tabindex="0"
                        v-for="item in testimonialsItems"
                        :key="item.quoteAuthor.en">
                        <div class="testimonials-item">
                            <div class="testimonial-author-img">
                                <img :src="item.imgUrl || 'assets/images/testimonials/anonymous-user.png'" :alt="item.quoteAuthor.en">
                            </div>
                            <div class="ultimate-tooltip">
                                <p>{{ item.quoteContent.en }}</p>
                                <h4 class="ultimate-tooltip-title">{{ item.quoteAuthor.en }}</h4>
                                <h5 class="ultimate-tooltip-subtitle">{{ item.jobTitle.en }}</h5>
                            </div>
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
                                Get in touch and let me know how i can help. Fill out the form and i’ll be in touch as soon as possible.
                            </p>
                        </div>

                        <!-- contact info -->
                        <ul class="contact-info">
                            <li>
                                <img src="assets/images/icons/address.png" alt="Address">
                                <div>
                                    <strong>Address:</strong>
                                    941 Saqrqorish Road, alandalos, grnata, wa 47122-4194
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/icons/phone.png" alt="Phone">
                                <div>
                                    <strong>Phone:</strong>
                                    <ul>
                                        <li><a href="tel:02966202290" class="ltr-dir">(02) 966 202 290</a></li>
                                        <li><a href="tel:02966202291" class="ltr-dir">(02) 966 202 291</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/icons/email.png" alt="Email">
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
                                        <input class="minLength" type="hidden" value="Name must be at least 3 characters">
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
                                    <button class="submit-btn btn btn-dark" type="button" @click="contactFormValidation">Send</button>
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
                        <!-- logo -->
                        <div class="logo" title="Nafie">
                            <h1><a href="index.html">Nafie</a></h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        &copy; {{ copyrightDate }} Proudly Powered by
                        <a href="https://themeforest.net/user/webrouk/portfolio" target="_blank" rel="noopener">Webrouk</a>
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
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </button>

        <!-- toast notifications -->
        <ul class="notifications-container hide-in-preloading">
            <transition-group name="notify">
                <li v-for="notify of notifications"
                    :key="notify.id"
                    :id="notify.id"
                    :class="['notification', 'show', notify.className, notify.time && 'timer']"
                >
                    {{ notify.msg }}
                    <i class="fa fa-times link-hover" aria-hidden="true" @click="dismissNotify(notify.id)"></i>
                    <span v-if="notify.time"
                          class="disappearing-time"
                          :style="{ 'animation-duration': notify.time + 'ms' }"></span>
                </li>
            </transition-group>
        </ul>

        <!-- ajax loading -->
        <div class="ajax-loading hide-in-preloading" v-show="isAjaxLoading">
            <span></span>
        </div>
    </div>
</div>

<!-- js plugins file -->
<script src="{{asset('js/plugins.min.js')}}"></script> {{asset('js/plugins.min.js')}}

<!-- main script file -->
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
