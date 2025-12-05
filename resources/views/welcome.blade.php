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
    </style>
  </head>

  <body>
    <div
      class="w-full bg-[#1E1E1E] max-lg:w-full max-md:w-full max-sm:w-full flex justify-center"
    >
      <div class="w-[90%]">
        <nav class="py-5 sticky top-0 z-50">
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
                  <p class="text-[#FD6F00] text-[18px]">20+</p>
                  <p class="text-[#DFDFDF]">Projects Done</p>
                </div>
                <div class="my-3 px-4">
                  <p class="text-[#FD6F00] text-[18px]">10+</p>
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
              <div class="w-[100%] h-[400px]">
                <div class="w-full h-[350px] max-sm:h-[270px]">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full"
                    alt=""
                  />
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">Recency CRM</p>
                  <p class="text-[#959595]">CRM System</p>
                </div>
              </div>

              <div class="w-[100%] h-[400px] max-sm:mt-[-120px]">
                <div class="w-full h-[350px] max-sm:h-[270px]">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full"
                    alt=""
                  />
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">EVSpares</p>
                  <p class="text-[#959595]">E-commerce</p>
                </div>
              </div>

              <div class="w-[100%] h-[400px] max-sm:mt-[-120px]">
                <div class="w-full h-[350px] max-sm:h-[270px]">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full"
                    alt=""
                  />
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">Talent UAE</p>
                  <p class="text-[#959595]">Finance System</p>
                </div>
              </div>

              <div class="w-[100%] h-[400px] max-sm:mt-[-120px]">
                <div class="w-full h-[350px] max-sm:h-[270px]">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full"
                    alt=""
                  />
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">Nquiree</p>
                  <p class="text-[#959595]">E-commerce</p>
                </div>
              </div>

              <div class="w-[100%] h-[400px] max-sm:mt-[-120px]">
                <div class="w-full h-[350px] max-sm:h-[270px]">
                  <img
                    src="{{ asset('assets/images/rectangle_22.png') }}"
                    class="w-full h-full"
                    alt=""
                  />
                </div>
                <div class="flex justify-between px-2 bg-[#242424] py-2">
                  <p class="text-[#C6C6C6]">PPAY - Project Pay</p>
                  <p class="text-[#959595]">Payment System</p>
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
