<nav
  class="bg-white px-2 sm:px-4 py-2.5 fixed w-full z-50 top-0 left-0 border-b border-gray-200 transition-colors"
>
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="./" class="flex items-center">
      <img
        src="./public/images/logo.png"
        class="ml-6 h-14 md:h-14"
        alt="Ashok Scans Logo"
      />
    </a>
    <div class="flex md:order-2 gap-2 mt-1  md:hidden ">
      <a href="schedule-test" class="hidden <?php if($active=='schedule-test') echo 'hidden'; ?>">
        <button
          class="bg-indigo-600 text-white transition-colors rounded-md px-3 py-2 md:px-4 font-semibold md:py-2 text-md md:text-lg flex gap-2 items-center group"
        >
          <i
            class="fa-solid fa-flask group-hover:-rotate-12 transition-transform"
          ></i>
          Schedule a Test
        </button>
      </a>
      <button
        data-collapse-toggle="navbar-sticky"
        type="button"
        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 -mt-1"
        aria-controls="navbar-sticky"
        aria-expanded="false"
      >
        <span class="sr-only">Open main menu</span>
        <svg
          class="w-6 h-6"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
    </div>
    <!-- Nav Items -->
    <div
      class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1"
      id="navbar-sticky"
    >
      <ul
        class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 text-lg md:text-md md:font-medium md:border-0 md:bg-white"
      >
        <li>
          <a
            href="./"
            class="py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent font-normal md:hover:text-theme-violet md:p-0 flex <?php if($active=='home') echo 'active'; ?>"
            aria-current="page"
            >Home</a
          >
        </li>
        <li class="group transition-all">
          <a
            href="about-us"
            class="py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent font-normal md:hover:text-theme-violet md:p-0 flex <?php if($active=='about-us') echo 'active'; ?>"
            >About
            <!-- <svg
            class="w-5 h-5 mt-[5px] ml-1"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M19 9l-7 7-7-7" 
            ></path>
          </svg>-->
          </a>
          <!-- <div
          class="absolute bg-white shadow-lg rounded-md px-4 py-2 invisible group-hover:visible w-[85vw] md:w-fit "
        >
          <ul>
            <a href="/about#dr-ashok-kumar" class="w-full">
              <li class="text-md font-normal px-4 py-2 hover:bg-gray-100">
                Dr. K. Ashok Kumar
              </li>
            </a>
            <hr />
            <a href="/about#dr-sandhya-rani">
              <li class="text-md font-normal px-4 py-2 hover:bg-gray-100">
                Dr. R. Sandhya Rani
              </li>
            </a>
          </ul>
        </div> -->
        </li>

        <li>
          <a
            href="our-services"
            class="py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent font-normal md:hover:text-theme-violet md:p-0 flex <?php if($active=='our-services') echo 'active'; ?>"
            >Services</a
          >
        </li>
        <li>
          <a
            href="contact-us"
            class="py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent font-normal md:hover:text-theme-violet md:p-0 flex <?php if($active=='contact-us') echo 'active'; ?>"
            >Contact</a
          >
        </li>
      </ul>
    </div>
  </div>
</nav>
