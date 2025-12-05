<!DOCTYPE html>
<html class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
      .orange-gradient {
        background: linear-gradient(to right, #fd6f00, #e46400);
        color: white;
      }
      .gradient-box {
        background: linear-gradient(to right, #fa6e00, #e60026);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      .SkillColor {
        background: linear-gradient(
          to right,
          #984300 0%,
          #fd6f00 46%,
          #ca5900 100%
        );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      @media only screen and (max-width: 425px) {
        #backGroundColor {
          width: 90%;
        }
        #ProfileImage{
            height: 400px;
        }
        #BackGroundShape{
          width: 80%;
        }
        #BackSpace{
          z-index: 10;
          width: 20px;
          height: 20px;
        }
      }

      @media only screen and (max-width: 582px) {
        html,
        body {
          overflow-x: hidden;
        }
        #ProfileImageSmall {
          height: 350px;
        }
      }

      @media only screen and (max-width: 481px) {
        html,
        body {
          overflow-x: hidden;
        }
        #HireMe {
          width: 100px;
          font-size: 16px;
        }
      }

      @media (max-width: 640px) {
        #DisplayNavBar.show {
          display: block;
        }
      }

      /* Custom Scrollbar Styling */
      /* Webkit browsers (Chrome, Safari, Edge) */
      ::-webkit-scrollbar {
        width: 10px;
        height: 10px;
      }

      ::-webkit-scrollbar-track {
        background: #1E1E1E;
        border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, #fd6f00 0%, #e46400 100%);
        border-radius: 10px;
        border: 2px solid #1E1E1E;
        transition: all 0.3s ease;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(180deg, #ff7a0a 0%, #f56a0a 100%);
        border: 2px solid #2a2a2a;
      }

      ::-webkit-scrollbar-thumb:active {
        background: linear-gradient(180deg, #e46400 0%, #ca5900 100%);
      }

      ::-webkit-scrollbar-corner {
        background: #1E1E1E;
      }

      /* Firefox */
      * {
        scrollbar-width: thin;
        scrollbar-color: #fd6f00 #1E1E1E;
      }

      /* Portfolio overlay scrollbar - more subtle */
      .portfolio-overlay::-webkit-scrollbar {
        width: 6px;
      }

      .portfolio-overlay::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
      }

      .portfolio-overlay::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.1);
      }

      .portfolio-overlay::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.5);
      }

      /* Portfolio Hover Effects */
      .portfolio-item {
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 8px;
      }

      .portfolio-item:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(253, 111, 0, 0.3);
      }

      .portfolio-item img {
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: center;
      }

      .portfolio-item:hover img {
        transform: scale(1.1);
      }

      .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(253, 111, 0, 0.95), rgba(230, 100, 0, 0.95));
        color: white;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        opacity: 0;
        transform: scale(0.9);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow-y: auto;
      }

      .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
        transform: scale(1);
      }

      .portfolio-overlay > * {
        transform: translateY(20px);
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transition-delay: 0.1s;
      }

      .portfolio-item:hover .portfolio-overlay > * {
        transform: translateY(0);
      }

      .portfolio-overlay h3 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        color: white;
      }

      .portfolio-overlay .tech-stack {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        margin: 10px 0;
      }

      .portfolio-overlay .tech-tag {
        background: rgba(255, 255, 255, 0.2);
        padding: 4px 8px;
        border-radius: 3px;
        font-size: 12px;
      }

      .portfolio-overlay .features {
        list-style: none;
        padding: 0;
        margin: 10px 0;
      }

      .portfolio-overlay .features li {
        margin: 5px 0;
        padding-left: 15px;
        position: relative;
        font-size: 13px;
      }

      .portfolio-overlay .features li:before {
        content: "✓";
        position: absolute;
        left: 0;
        color: white;
        font-weight: bold;
      }

      .portfolio-overlay .description {
        font-size: 14px;
        line-height: 1.6;
        margin-top: 10px;
      }

      /* Mobile Touch Support */
      @media (max-width: 768px) {
        .portfolio-overlay {
          padding: 15px;
          font-size: 12px;
        }

        .portfolio-overlay h3 {
          font-size: 20px;
        }

        .portfolio-overlay .description {
          font-size: 12px;
        }

        .portfolio-overlay .features li {
          font-size: 11px;
        }

        .portfolio-overlay .tech-tag {
          font-size: 10px;
          padding: 3px 6px;
        }
      }

      /* Touch device support - show overlay on tap */
      @media (hover: none) and (pointer: coarse) {
        .portfolio-item.active .portfolio-overlay {
          opacity: 1;
        }
      }

      .header-navbar {
    background-color: rgb(30 30 30);
    z-index: 99999999;
      }
    </style>
  </head>

  <body>
    <div
      class="w-full bg-[#1E1E1E] max-lg:w-full max-md:w-full max-sm:w-full flex justify-center"
    >
      <div class="w-[90%]">
        <nav class="py-5 sticky top-0 z-50 header-navbar">
          <div
            class="flex items-center text-white justify-between max-sm:align-middle"
          >
            <div class="hidden max-sm:block">
              <img src="{{ asset('assets/images/align-justify.png') }}" alt="" id="MenuIcon" />
            </div>

            <div>
              <a href="#Dashboard">
                <img src="{{ asset('assets/images/logo_2.png') }}" alt="Dhanvi - Full Stack Developer" class="h-10 max-sm:h-8 max-sm:ml-[10px]" />
              </a>
            </div>

            <div
              class="w-[35%] max-lg:w-[60%] max-md:w-[60%] max-sm:hidden"
              id="DisplayNavBar"
            >
              <ul
                class="flex justify-between flex-col max-sm:flex-col max-sm:absolute max-sm:left-0 max-sm:w-full max-sm:top-15 max-sm:bg-[#242424] max-sm:z-10 max-sm:p-3 sm:flex-row max"
              >
                <a href="#Dashboard">
                  <li class="text-[#FD6F00] cursor-pointer">Dashboard</li>
                </a>
                <a href="#Service">
                  <li class="text-[#959595] cursor-pointer max-sm:mt-1">
                    Service
                  </li>
                </a>
                <a href="#AboutMe">
                  <li class="text-[#959595] cursor-pointer max-sm:mt-1">
                    About me
                  </li>
                </a>
                <a href="#PortfolioSection">
                  <li class="text-[#959595] cursor-pointer max-sm:mt-1">
                    Portfolio
                  </li>
                </a>
                <a href="#ContactMe">
                  <li class="text-[#959595] cursor-pointer max-sm:mt-1">
                    Contact me
                  </li>
                </a>
              </ul>
            </div>
            <div>
              <a href="#ContactMe">
                <button
                  class="orange-gradient py-1 px-5 rounded-[5px] cursor-pointer"
                  id="HireMe"
                >
                  Hire Me
                </button>
              </a>
            </div>
          </div>
        </nav>

        <!-- Main Body -->
        <main>
          <div
            class="flex justify-between py-2 text-white max-sm:flex-col"
            id="Dashboard"
          >
            <div
              class="w-[50%] flex flex-col justify-center max-sm:items-center max-sm:text-center max-sm:w-full"
              id="LeftPart"
            >
              <p class="text-[#707070]" id="Hi">Hi I am</p>
              <p class="text-[#959595] text-2xl font-bold" id="Name">
                Dhanvi Bhadiyadra
              </p>
              <h1 class="SkillColor text-6xl font-bold py-2.5" id="Skill">
                Laravel / Vue.js Developer
              </h1>
              <div class="flex pb-6" id="Social">
                <a href="https://www.linkedin.com/in/dhanvi-bhadiyadara-634bbb205" target="_blank">
                  <img src="{{ asset('assets/images/frame_53.png') }}" id="link" alt="LinkedIn" class="pl-2 cursor-pointer" />
                </a>
              </div>
              <div class="pb-9">
                <a href="#ContactMe">
                  <button
                    class="orange-gradient py-1 px-5 rounded-[5px] cursor-pointer"
                  >
                    Hire Me
                  </button>
                </a>
                <a href="{{ asset('assets/docs/Dhanvi_Bhadiyadra_Resume.pdf') }}" download>
                  <button
                    class="ml-3 border-1 text-[#959595] cursor-pointer py-1 px-3 rounded-[5px]"
                  >
                    Download CV
                  </button>
                </a>
              </div>

              <div
                class="bg-[#242424] flex w-[55%] justify-between rounded-[5px] max-md:w-[100%] max-xl:w-[80%] max-lg:w-[80%] max-md:w-full"
              >
                <div class="border-r-1 my-3 px-4 border-[#DFDFDF]">
                  <p class="text-[#FD6F00] text-[18px]">3+</p>
                  <p class="text-[#DFDFDF]">Years Experience</p>
                </div>
                <div class="border-r-1 my-3 px-4 border-[#DFDFDF]">
                  <p class="text-[#FD6F00] text-[18px]">12+</p>
                  <p class="text-[#DFDFDF]">Projects Done</p>
                </div>
                <div class="my-3 px-4">
                  <p class="text-[#FD6F00] text-[18px]">7+</p>
                  <p class="text-[#DFDFDF]">Happy Clients</p>
                </div>
              </div>
            </div>
            <div
              id="ProfileImage"
              class="w-[50%] h-[500px] flex justify-center items-center relative max-sm:w-full max-md:mt-[-50px]"
            >
              <!-- Background shape div -->
              <div
                class="bg-[#272727] w-[60%] h-[80%] rounded-full absolute bottom-0" id="BackGroundShape"
              ></div>

              <!-- Empty spacer div between image and background -->
              <div class="w-[20px] h-[20px] z-10" id="BackSpace"></div>

              <!-- Image on top -->
              <img
                class="h-full relative z-20"
                src="{{ asset('assets/images/img_1.png') }}"
                alt="Person"
              />
            </div>
          </div>

          <!-- Services -->
          <div class="text-white py-20 max-md:mt-[-50px]" id="ServiceSection">
            <h3 class="text-center text-3xl text-[#FEFEFE]" id="Service">
              Services
            </h3>
            <p class="text-center text-[#707070] pt-2" id="ServiceDetails">
              Full-stack web development services with modern technologies and best practices
            </p>

            <div
              class="grid grid-cols-3 gap-10 pt-[3rem] max-md:grid-cols-2 max-sm:grid-cols-1"
              id="ServiceCard"
            >
              <div class="text-center rounded-[5px] py-5 px-2 bg-[#242424]">
                <div class="flex justify-center">
                  <img src="{{ asset('assets/images/user_2.png') }}" alt="" />
                </div>
                <h4 class="text-[#FD6F00] pt-2 text-[20px]" id="ServiceName">
                  Full-Stack Development
                </h4>
                <p class="text-[#575757] pt-4" id="ServiceDetail">
                  Building scalable web applications using Laravel, Vue.js, and Inertia.js with robust backend logic and clean frontend design
                </p>
              </div>

              <div class="text-center rounded-[5px] py-5 px-2 bg-[#242424]">
                <div class="flex justify-center">
                  <img src="{{ asset('assets/images/user_2.png') }}" alt="" />
                </div>
                <h4 class="text-[#FD6F00] pt-2 text-[20px]" id="ServiceName">
                  API Integration
                </h4>
                <p class="text-[#575757] pt-4" id="ServiceDetail">
                  Integrating third-party APIs including ChatGPT, WhatsApp, Google Calendar, Stripe, and Zoho CRM for seamless automation
                </p>
              </div>

              <div class="text-center rounded-[5px] py-5 px-3 bg-[#242424]">
                <div class="flex justify-center">
                  <img src="{{ asset('assets/images/user_2.png') }}" alt="" />
                </div>
                <h4 class="text-[#FD6F00] pt-2 text-[20px]" id="ServiceName">
                  SPA Development
                </h4>
                <p class="text-[#575757] pt-4" id="ServiceDetail">
                  Creating responsive Single Page Applications using Vue.js and Inertia.js for smooth user experiences
                </p>
              </div>
              <div class="text-center rounded-[5px] py-5 px-2 bg-[#242424]">
                <div class="flex justify-center">
                  <img src="{{ asset('assets/images/user_2.png') }}" alt="" />
                </div>
                <h4 class="text-[#FD6F00] pt-2 text-[20px]" id="ServiceName">
                  Backend Architecture
                </h4>
                <p class="text-[#575757] pt-4" id="ServiceDetail">
                  Designing and implementing clean, scalable backend architectures with Laravel, MySQL, and RESTful APIs
                </p>
              </div>
              <div class="text-center rounded-[5px] py-5 px-2 bg-[#242424]">
                <div class="flex justify-center">
                  <img src="{{ asset('assets/images/user_2.png') }}" alt="" />
                </div>
                <h4 class="text-[#FD6F00] pt-2 text-[20px]" id="ServiceName">
                  Automation & Workflows
                </h4>
                <p class="text-[#575757] pt-4" id="ServiceDetail">
                  Building automation workflows with cron jobs, real-time communication tools, and scheduled task management
                </p>
              </div>
              <div class="text-center rounded-[5px] py-5 px-2 bg-[#242424]">
                <div class="flex justify-center">
                  <img src="{{ asset('assets/images/user_2.png') }}" alt="" />
                </div>
                <h4 class="text-[#FD6F00] pt-2 text-[20px]" id="ServiceName">
                  E-commerce Solutions
                </h4>
                <p class="text-[#575757] pt-4" id="ServiceDetail">
                  Developing e-commerce platforms with payment integration, inventory management, and admin dashboards
                </p>
              </div>
            </div>
          </div>
          <!-- About Me -->

          <div id="AboutMe" class="max-md:mt-[-40px]">
            <h3 class="text-center text-3xl text-[#FEFEFE]" id="About">
              About Me
            </h3>
            <p class="text-center text-[#707070] pt-2" id="AboutShow">
              Laravel and Vue.js Developer specializing in full-stack web application development
            </p>

            <div
              class="flex justify-between max-md:flex-col max-md:items-center"
              id="ProfileImage1"
            >
              <!-- <div class="w-[30%]">
                <img class="w-full" src="./photo/Group 2.png" alt="" />
              </div> -->

              <div
                id="ProfileImageSmall"
                class="w-[50%] h-[600px] flex justify-center items-center relative max-md:w-full"
              >
                <!-- Background shape div -->
                <div
                  class="bg-[#272727] w-[60%] h-[90%] rounded-t-full absolute bottom-0"
                  id="backGroundColor"
                ></div>

                <!-- Empty spacer div between image and background -->
                <div class="w-[20px] h-[20px] z-10"></div>

                <!-- Image on top -->
                <img
                  class="relative z-20 h-full"
                  src="{{ asset('assets/images/img_3.png') }}"
                  alt="Person"
                />
              </div>

              <div
                class="w-[50%] flex flex-col justify-center max-md:w-full max-md:items-center max-md:pt-5"
              >
                <p class="text-[#959595]">
                  Highly skilled Laravel and Vue.js Developer with 3 years of experience in full-stack web application development. Expert in building responsive and scalable Single Page Applications (SPAs) using Laravel, Vue.js, Inertia.js, and Tailwind CSS. Proficient in third-party API integrations, automation workflows, and real-time communication tools including WhatsApp, ChatGPT, and Google Calendar. Strong backend architecture understanding, clean UI implementation, and a proven record of delivering business-critical projects on time. Experienced in both collaborative team settings and independent freelance projects, with excellent communication and problem-solving abilities. I specialize in creating efficient, scalable applications with robust backend logic and clean frontend design, contributing to diverse projects ranging from e-commerce platforms to CRM systems.
                </p>
                <div class="pt-5">
                  <a href="{{ asset('assets/docs/Dhanvi_Bhadiyadra_Resume.pdf') }}" download>
                    <button
                      class="orange-gradient py-2 px-4 rounded-[5px] cursor-pointer flex"
                    >
                      <img src="{{ asset('assets/images/Download.png') }}" alt="" /><span class="pl-2"
                        >Download CV</span
                      >
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio -->
          <div class="py-8" id="PortfolioSection">
            <h1 class="text-center text-3xl text-[#FEFEFE]" id="Portfolio">
              Portfolio
            </h1>

            <!-- grid grid-flow-col grid-rows-2 gap-10 pt-[3rem] -->
            <div
              class="grid grid-cols-3 gap-15 pt-[3rem] max-md:grid-cols-2 max-sm:grid-cols-1"
              id="PortfolioCard"
            >
              <!-- Recensy CRM/Wagmii System -->
              <div class="w-[100%] h-[400px] portfolio-item">
                <div class="w-full h-[350px] max-sm:h-[270px] relative">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full object-cover"
                    alt="Recensy CRM/Wagmii System"
                  />
                  <div class="portfolio-overlay">
                    <h3>Recensy CRM/Wagmii System</h3>
                    <p class="text-sm mb-3 opacity-90">Custom CRM & Payment System</p>
                    <div class="tech-stack">
                      <span class="tech-tag">Laravel</span>
                      <span class="tech-tag">PHP</span>
                      <span class="tech-tag">jQuery</span>
                      <span class="tech-tag">ChatGPT API</span>
                      <span class="tech-tag">WhatsApp API</span>
                      <span class="tech-tag">Google Calendar</span>
                      <span class="tech-tag">Payment Flow</span>
                    </div>
                    <ul class="features">
                      <li>Payment flow integration</li>
                      <li>Affiliation flow system</li>
                      <li>ChatGPT & WhatsApp integration</li>
                      <li>Google Calendar connectivity</li>
                      <li>Real-time customer communication</li>
                      <li>Automation workflows</li>
                      <li>Advanced CRM features</li>
                    </ul>
                    <p class="description">
                      Architected and developed a comprehensive CRM and payment system (Recensy CRM/Wagmii System) with integrated payment flow, affiliation management, ChatGPT and WhatsApp APIs for real-time customer communication. Implemented automation workflows with Google Calendar sync and advanced CRM features.
                    </p>
                  </div>
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">Recensy CRM/Wagmii System</p>
                  <p class="text-[#959595]">CRM & Payment System</p>
                </div>
              </div>

              <!-- EVSpares -->
              <div class="w-[100%] h-[400px] max-sm:mt-[-120px] portfolio-item">
                <div class="w-full h-[350px] max-sm:h-[270px] relative">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full object-cover"
                    alt="EVSpares"
                  />
                  <div class="portfolio-overlay">
                    <h3>EVSpares</h3>
                    <p class="text-sm mb-3 opacity-90">Automotive Parts E-commerce</p>
                    <div class="tech-stack">
                      <span class="tech-tag">Laravel</span>
                      <span class="tech-tag">Vue.js</span>
                      <span class="tech-tag">Stripe</span>
                      <span class="tech-tag">MySQL</span>
                      <span class="tech-tag">Excel Import</span>
                    </div>
                    <ul class="features">
                      <li>Stripe payment integration</li>
                      <li>VIN-based search filters</li>
                      <li>Bulk Excel product imports</li>
                      <li>Admin dashboard</li>
                      <li>Stock management system</li>
                      <li>Order control system</li>
                    </ul>
                    <p class="description">
                      Led the end-to-end development of an automotive parts e-commerce platform. Integrated Stripe for secure payments, advanced VIN-based search filters, bulk Excel product imports, and a custom-built admin dashboard.
                    </p>
                  </div>
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">EVSpares</p>
                  <p class="text-[#959595]">E-commerce</p>
                </div>
              </div>

              <!-- Talent UAE -->
              <div class="w-[100%] h-[400px] max-sm:mt-[-120px] portfolio-item">
                <div class="w-full h-[350px] max-sm:h-[270px] relative">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full object-cover"
                    alt="Talent UAE"
                  />
                  <div class="portfolio-overlay">
                    <h3>Talent UAE</h3>
                    <p class="text-sm mb-3 opacity-90">Finance Management System</p>
                    <div class="tech-stack">
                      <span class="tech-tag">Laravel</span>
                      <span class="tech-tag">Vue.js</span>
                      <span class="tech-tag">Cron Jobs</span>
                      <span class="tech-tag">MySQL</span>
                    </div>
                    <ul class="features">
                      <li>Expense tracking module</li>
                      <li>Reconciliation system</li>
                      <li>Dynamic reporting</li>
                      <li>Reactive frontend interfaces</li>
                      <li>Scheduled task automation</li>
                    </ul>
                    <p class="description">
                      Engineered a finance management system for client-side accounting. Built modules for expense tracking, reconciliation, and dynamic reporting. Utilized Vue.js for reactive frontend interfaces and Laravel for scheduled task automation using cron jobs.
                    </p>
                  </div>
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">Talent UAE</p>
                  <p class="text-[#959595]">Finance System</p>
                </div>
              </div>

              <!-- Nquiree -->
              <div class="w-[100%] h-[400px] max-sm:mt-[-120px] portfolio-item">
                <div class="w-full h-[350px] max-sm:h-[270px] relative">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full object-cover"
                    alt="Nquiree"
                  />
                  <div class="portfolio-overlay">
                    <h3>Nquiree</h3>
                    <p class="text-sm mb-3 opacity-90">E-commerce Platform</p>
                    <div class="tech-stack">
                      <span class="tech-tag">Laravel</span>
                      <span class="tech-tag">Vue.js</span>
                      <span class="tech-tag">Zoho CRM</span>
                      <span class="tech-tag">Tailwind CSS</span>
                      <span class="tech-tag">Chatbot</span>
                    </div>
                    <ul class="features">
                      <li>Zoho CRM integration</li>
                      <li>Chatbot support</li>
                      <li>Redesigned checkout flow</li>
                      <li>VAT section management</li>
                      <li>Testimonials system</li>
                      <li>Invoice system</li>
                      <li>Fully responsive design</li>
                    </ul>
                    <p class="description">
                      Enhanced an existing e-commerce system with a feature-rich front end including testimonials, product tabs, and dynamic content pages. Integrated Zoho CRM and chatbot, redesigned the checkout and invoice workflows.
                    </p>
                  </div>
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">Nquiree</p>
                  <p class="text-[#959595]">E-commerce</p>
                </div>
              </div>

              <!-- PPAY - Project Pay -->
              <div class="w-[100%] h-[400px] max-sm:mt-[-120px] portfolio-item">
                <div class="w-full h-[350px] max-sm:h-[270px] relative">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full object-cover"
                    alt="PPAY - Project Pay"
                  />
                  <div class="portfolio-overlay">
                    <h3>PPAY - Project Pay</h3>
                    <p class="text-sm mb-3 opacity-90">Payment Tracking System</p>
                    <div class="tech-stack">
                      <span class="tech-tag">Laravel</span>
                      <span class="tech-tag">Vue.js</span>
                      <span class="tech-tag">Inertia.js</span>
                      <span class="tech-tag">MySQL</span>
                      <span class="tech-tag">Modular Architecture</span>
                    </div>
                    <ul class="features">
                      <li>Payment tracking module</li>
                      <li>Claims management</li>
                      <li>Variations tracking</li>
                      <li>Due dates management</li>
                      <li>Bank detail management</li>
                      <li>Ledger entries</li>
                      <li>Live data interaction</li>
                    </ul>
                    <p class="description">
                      Designed a subcontractor payment tracking module with features for managing claims, variations, due dates, bank info, and ledger entries. Built using modular Laravel architecture with Inertia.js and Vue.js components for live data interaction.
                    </p>
                  </div>
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">PPAY - Project Pay</p>
                  <p class="text-[#959595]">Payment System</p>
                </div>
              </div>

              <!-- Bohemian Adventure -->
              <div class="w-[100%] h-[400px] max-sm:mt-[-120px] portfolio-item">
                <div class="w-full h-[350px] max-sm:h-[270px] relative">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full object-cover"
                    alt="Bohemian Adventure"
                  />
                  <div class="portfolio-overlay">
                    <h3>Bohemian Adventure</h3>
                    <p class="text-sm mb-3 opacity-90" style="color: #fd6f00; font-weight: 500;">Tour booking system</p>
                    <div class="tech-stack">
                      <span class="tech-tag">PHP</span>
                      <span class="tech-tag">Laravel</span>
                      <span class="tech-tag">Vue.js</span>
                      <span class="tech-tag">Inertia.js</span>
                      <span class="tech-tag">Bootstrap</span>
                      <span class="tech-tag">Google Map</span>
                      <span class="tech-tag">Pick up system</span>
                    </div>
                    <ul class="features">
                      <li>Tour booking functionality</li>
                      <li>Payment entries & management</li>
                      <li>Expense tracking & reports</li>
                      <li>Tour planning & scheduling</li>
                      <li>Guide & vehicle management</li>
                      <li>Availability tracking system</li>
                      <li>Place & base data management</li>
                      <li>Currency exchange rates</li>
                      <li>Profit & Loss reports</li>
                      <li>Year-over-year comparisons</li>
                      <li>Dashboard with today/tomorrow tours</li>
                      <li>Drag & drop functionality</li>
                      <li>Merchandise sales module</li>
                    </ul>
                    <p class="description">
                      Developed a comprehensive tour booking and management system with complex database structure. Features include booking functionality, payment entries, expense reports, tour planning, guide and vehicle availability, place management, currency exchange rates, profit & loss reports with year-over-year comparisons, interactive dashboard, drag & drop functionality, and merchandise sales.
                    </p>
                  </div>
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">Bohemian Adventure</p>
                  <p class="text-[#959595]">Tour Management System</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact me -->

          <div
            class="text-white flex justify-center py-5 max-md:mt-[-90px]"
            id="ContactMe"
          >
            <div class="w-[70%] max-md:w-[90%]">
              <h3 class="text-center text-3xl text-[#FEFEFE]" id="Contact">
                Contact me
              </h3>
              <p class="text-center text-[#707070] pt-2" id="ContacDetails">
                Cultivating Connections: Reach Out and Connect with Me
              </p>

              <div class="pt-5" id="Contactform">
                <div id="contact-message" class="hidden mb-4 p-3 rounded-[5px] text-center"></div>
                <form id="contact-form" action="{{ route('contact.send') }}" method="POST">
                  @csrf
                  <div class="flex max-sm:flex-col">
                    <input
                      class="border-1 w-full mr-3 px-3 py-1 outline-none rounded-[5px] bg-transparent text-white placeholder-[#707070]"
                      type="text"
                      name="name"
                      id="name"
                      placeholder="Name"
                      required
                    />
                    <input
                      class="border-1 w-full px-3 outline-none py-1 rounded-[5px] max-sm:mt-6 bg-transparent text-white placeholder-[#707070]"
                      type="email"
                      name="email"
                      id="email"
                      placeholder="Email"
                      required
                    />
                  </div>
                  <div class="flex pt-6 max-sm:flex-col">
                    <input
                      class="border-1 w-full mr-3 px-3 py-1 outline-none rounded-[5px] bg-transparent text-white placeholder-[#707070]"
                      type="text"
                      name="phone"
                      id="phone"
                      placeholder="Phone Number"
                    />
                    <input
                      class="border-1 w-full px-3 outline-none py-1 rounded-[5px] max-sm:mt-6 bg-transparent text-white placeholder-[#707070]"
                      type="text"
                      name="service"
                      id="service"
                      placeholder="Service Of Interest"
                    />
                  </div>
                  <div class="flex pt-6 max-sm:flex-col">
                    <input
                      class="border-1 w-full mr-3 px-3 py-1 outline-none rounded-[5px] bg-transparent text-white placeholder-[#707070]"
                      type="text"
                      name="timeline"
                      id="timeline"
                      placeholder="Timeline"
                    />
                    <textarea
                      class="border-1 w-full px-3 outline-none py-1 max-sm:mt-6 bg-transparent text-white placeholder-[#707070]"
                      name="message"
                      id="message"
                      rows="4"
                      placeholder="Project Details..."
                      required
                    ></textarea>
                  </div>
                  <div class="pt-3 text-end">
                    <button
                      type="submit"
                      id="submit-btn"
                      class="border-1 px-5 py-1 rounded-[5px] cursor-pointer hover:bg-[#FD6F00] hover:text-white transition-colors"
                    >
                      Send
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </main>

        <!-- footer -->
        <footer>
          <div class="py-5 px-4" id="footer">
            <div class="flex justify-center">
              <img src="{{ asset('assets/images/logo_2.png') }}" alt="Dhanvi - Full Stack Developer" class="h-10" />
            </div>

            <div class="flex justify-center pt-5">
              <ul
                class="w-full max-w-xl flex flex-wrap justify-center gap-4 md:gap-8 text-center"
              >
                <li class="text-[#959595] cursor-pointer hover:text-[#FD6F00] transition-colors">
                  <a href="#Dashboard">Dashboard</a>
                </li>
                <li class="text-[#959595] cursor-pointer hover:text-[#FD6F00] transition-colors">
                  <a href="#Service">Service</a>
                </li>
                <li class="text-[#959595] cursor-pointer hover:text-[#FD6F00] transition-colors">
                  <a href="#AboutMe">About me</a>
                </li>
                <li class="text-[#959595] cursor-pointer hover:text-[#FD6F00] transition-colors">
                  <a href="#PortfolioSection">Portfolio</a>
                </li>
                <li class="text-[#959595] cursor-pointer hover:text-[#FD6F00] transition-colors">
                  <a href="#ContactMe">Contact me</a>
                </li>
              </ul>
            </div>

            <div class="flex pt-4 text-white justify-center space-x-2">
              <a href="https://www.linkedin.com/in/dhanvi-bhadiyadara-634bbb205" target="_blank">
                <img src="{{ asset('assets/images/frame_53.png') }}" alt="LinkedIn" class="w-6 h-6 cursor-pointer" />
              </a>
            </div>

            <div class="flex pt-6 justify-center text-white">
              <div
                class="flex flex-col md:flex-row w-full max-w-2xl justify-between items-center gap-4 border-b pb-6"
              >
                <div class="flex items-center">
                  <img src="{{ asset('assets/images/mail.png') }}" alt="" class="w-5 h-5" />
                  <p class="pl-2 text-sm">dhanvibhadiyadra15@gmail.com</p>
                </div>
                <div class="flex items-center">
                  <img src="{{ asset('assets/images/phone.png') }}" alt="" class="w-5 h-5" />
                  <p class="pl-2 text-sm">+91 88666 38673</p>
                </div>
              </div>
            </div>

            <div class="text-center pt-3">
              <p class="text-[#707070] text-sm">
                Designed by Dhanvi Bhadiyadra - Laravel / Vue.js Developer
              </p>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
      integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script>
      const menuIcon = document.getElementById("MenuIcon");
      const navBar = document.getElementById("DisplayNavBar");

      menuIcon.addEventListener("click", () => {
        navBar.classList.toggle("show");
      });

      // Portfolio hover/touch support for mobile devices
      document.querySelectorAll('.portfolio-item').forEach(item => {
        // Touch support for mobile
        item.addEventListener('touchstart', function(e) {
          // Remove active class from all other items
          document.querySelectorAll('.portfolio-item').forEach(otherItem => {
            if (otherItem !== item) {
              otherItem.classList.remove('active');
            }
          });
          // Toggle active class on current item
          item.classList.toggle('active');
        });

        // Close overlay when clicking outside on mobile
        document.addEventListener('touchstart', function(e) {
          if (!item.contains(e.target)) {
            item.classList.remove('active');
          }
        });
      });

      // Contact Form Submission
      document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const form = this;
        const submitBtn = document.getElementById('submit-btn');
        const messageDiv = document.getElementById('contact-message');
        const formData = new FormData(form);
        
        // Disable submit button
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';
        messageDiv.classList.add('hidden');
        
        fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          }
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            messageDiv.className = 'mb-4 p-3 rounded-[5px] text-center bg-green-500 text-white';
            messageDiv.textContent = data.message;
            messageDiv.classList.remove('hidden');
            form.reset();
          } else {
            messageDiv.className = 'mb-4 p-3 rounded-[5px] text-center bg-red-500 text-white';
            messageDiv.textContent = data.message || 'An error occurred. Please try again.';
            messageDiv.classList.remove('hidden');
          }
        })
        .catch(error => {
          messageDiv.className = 'mb-4 p-3 rounded-[5px] text-center bg-red-500 text-white';
          messageDiv.textContent = 'An error occurred. Please try again.';
          messageDiv.classList.remove('hidden');
        })
        .finally(() => {
          submitBtn.disabled = false;
          submitBtn.textContent = 'Send';
        });
      });
    </script>

    <script src="{{ asset('assets/js/index.js') }}"></script>
  </body>
</html>
