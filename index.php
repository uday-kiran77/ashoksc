<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ashok Scans</title>
    <link rel="stylesheet" href="./public/css/main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans,wght@1,700&display=swap"
      rel="stylesheet"
    />
   
  </head>
  <body>
    <!-- Navbar -->
    <?php 
     $active = "home";
    include './partials/navbar.php';
    ?>
    <main>
      <!-- Hero Section -->
      <section
        class="text-gray-600 body-font flex items-center bg-[url('../images/hero-img.jpg')] bg-cover bg-center bg-no-repeat md:bg-none"
      >
        <div
          class="container flex md:flex-row flex-col items-center justify-center backdrop-blur-sm backdrop-saturate-100 bg-black/30 md:bg-white/0 md:backdrop-filter-none h-screen w-[100vw] mx-auto px-2 md:px-0 m-0"
        >
          <div
            class="lg:max-w-xl lg:w-full md:w-1/2 w-5/6 md:mb-0 hidden md:flex justify-center"
          >
            <img
              src="./public/images/hero-img.jpg"
              alt=""
              class="w-full h-96 object-cover rounded-xl"
            />
          </div>
          <div
            class="md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center"
          >
            <div class="px-2 md:px-0">
              <h1
                class="mb-6 font-heading text-5xl md:text-10xl xl:text-6xl text-white md:text-theme-blue font-bold"
              >
                Caring for the whole patient, not just your symptoms
              </h1>
              <p class="mb-9 text-gray-100 md:text-theme-blue text-xl">
               As a leading ultrasound diagnostic center, Ashok Scan takes pride in offering a comprehensive range of services and affordable prices to ensure accurate, timely, and cost-effective healthcare.
              </p>
              <div class="flex gap-2 md:gap-4 flex-col md:flex-row">
                <a href="./our-services"
                    class="bg-indigo-100 text-indigo-600 hover:text-indigo-100 hover:bg-indigo-600 transition-colors rounded-md px-4 font-semibold py-3 md:py-2 text-lg flex items-center gap-2 justify-center w-full md:w-fit"
                  >
                    <i class="fa-solid fa-flask-vial"></i>
                    Services We Offer
                  </button>
                </a>
                <a href="./contact-us">
                  <button
                    class="bg-indigo-600 text-indigo-100 hover:bg-indigo-100 hover:text-indigo-600 transition-colors rounded-md px-4 font-semibold py-3 md:py-2 text-lg flex items-center gap-2 justify-center w-full md:w-fit"
                  >
                    <svg
                      class="w-6 h-6"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                      ></path>
                    </svg>
                    Contact Us
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services Section -->
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
          <div class="text-center mb-20">
            <h1
              class="sm:text-4xl text-3xl font-medium text-center title-font text-gray-900 mb-8 "
            >
              Services We Offer
            </h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
              At Ashok Scans, it's our mission to provide you with the best
              service at a competitive price, and we're committed to providing
              you with accurate results every time you entrust us with your
              Tests. Our Ultrasound Services include the following:
            </p>
          </div>
          <div class="flex flex-wrap -m-4 max-w-screen-xl mx-auto gap-6">
            <!-- Item 01 -->
            <div class="px-1 w-full md:w-fit mx-auto">
              <h2
                class="font-semibold title-font tracking-wider text-gray-900 mb-4 text-2xl text-center sm:text-left"
              >
                Abdomen Pelvis
              </h2>
              <div
                class="flex items-center mx-auto justify-between flex-wrap gap-2 md:gap-10"
              >
                <div class="flex flex-col justify-start space-y-2.5">
                  <h4 class="text-lg font-medium text-black">Small Parts</h4>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Breast
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Thyroid
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Scrotum
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >MSK / Joints
                  </a>
                </div>
                <div class="flex flex-col justify-start space-y-2.5">
                  <h4 class="text-lg font-medium text-black">
                    Color Doppler Studies
                  </h4>

                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Cartoid
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Lower Limb
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Upper Limb
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Renal
                  </a>
                </div>
              </div>
            </div>
            <!-- Item 02 -->
            <div class="px-1 w-full md:w-fit mx-auto">
              <h2
                class="font-semibold title-font tracking-wider text-gray-900 mb-4 text-2xl text-center sm:text-left"
              >
                Elastography
              </h2>
              <div class="flex items-center mx-auto justify-between flex-wrap">
                <div
                  class="flex flex-col justify-start space-y-2.5 items-start md:items-start mx-auto ml-5 sm:ml-0"
                >
                  <h4 class="text-lg font-medium text-black">
                    Ultrasound Guided Interventions
                  </h4>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Fluid Aspiration
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >FNAC
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Pigtail Insertion
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Abscess Drainage
                  </a>
                </div>
              </div>
            </div>
            <!-- Item 03 -->
            <div class="px-1 w-full md:w-fit mx-auto">
              <h2
                class="font-semibold title-font tracking-wider text-gray-900 mb-4 text-2xl text-center sm:text-left"
              >
                Neurosonogram
              </h2>
              <div
                class="flex items-center mx-auto justify-between flex-wrap gap-2 md:gap-10 ml-5 sm:ml-0"
              >
                <div class="flex flex-col justify-start space-y-2.5">
                  <h4 class="text-lg font-medium text-black">Woman Imaging</h4>

                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Whole Abdomen
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Pelvis
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Follicular Study
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >NT Scan
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >TIFFA Scan
                  </a>
                </div>
                <div class="flex flex-col justify-start space-y-2.5">
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Growth Scan
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Pregnancy Doppler
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Biophysical Profile
                  </a>
                  <a>
                    <span
                      class="bg-indigo-100 text-indigo-600 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center"
                    >
                      <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="3"
                        class="w-3 h-3"
                        viewBox="0 0 24 24"
                      >
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg> </span
                    >Trans Vaginal Scan (TVS)
                  </a>
                </div>
              </div>
            </div>
          </div>
          <a href="/our-services">
            <button
              class="flex mx-auto mt-16 text-white bg-indigo-600 border-0 py-2 px-8 rounded text-lg"
            >
              Know More
            </button>
          </a>
        </div>
      </section>

      <!-- About Section -->
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
          <div
            class="flex flex-wrap w-full mb-12 flex-col items-center text-center"
          >
            <h1
              class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"
            >
              Why Choose Us?
            </h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
              We are dedicated to providing excellent services to ensure the
              prevention of diseases and the accurate detection of these
              diseases. With the assistance of the latest technology,
              sophisticated equipment, and stringent quality measures, we are
              able to accomplish this consistently.
            </p>
          </div>
          <div class="flex flex-wrap max-w-screen-xl mx-auto">
            <div class="xl:w-1/3 md:w-1/2 p-2 flex flex-grow">
              <div class="border border-gray-200 p-6 rounded-lg">
                <div
                  class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600 mb-4"
                >
               
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>

                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                  Short Wait Times
                </h2>
                <p class="leading-relaxed text-base">
                  We provide a timely service with short wait times for getting
                  tested and for receiving the results as well
                </p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-2 flex flex-grow">
              <div class="border border-gray-200 p-6 rounded-lg">
                <div
                  class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600 mb-4"
                >
                <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    class="w-6 h-6"
                    viewBox="0 0 24 24"
                  >
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                  Advanced Technology
                </h2>
                <p class="leading-relaxed text-base">
                  Using advanced technology and cutting edge techniques, we are
                  able to deliver the exact results you are looking for
                </p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-2 flex flex-grow">
              <div class="border border-gray-200 p-6 rounded-lg">
                <div
                  class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600 mb-4"
                >
                  <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    class="w-6 h-6"
                    viewBox="0 0 24 24"
                  >
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                  Medical Professionals
                </h2>
                <p class="leading-relaxed text-base">
                  In addition to being very experienced and qualified, our
                  Doctors are also very friendly
                </p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-2 flex flex-grow">
              <div class="border border-gray-200 p-6 rounded-lg">
                <div
                  class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600 mb-4"
                >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 8.25H9m6 3H9m3 6l-3-3h1.5a3 3 0 100-6M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>

                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                  Affordable
                </h2>
                <p class="leading-relaxed text-base">
                  We offer a wide range of testing services at an affordable
                  price without compromising on any of the quality of the
                  testing
                </p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-2 flex flex-grow">
              <div class="border border-gray-200 p-6 rounded-lg">
                <div
                  class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600 mb-4"
                >
                <i class="fa-regular fa-handshake text-lg"></i>
                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                  Reliable
                </h2>
                <p class="leading-relaxed text-base">
                  You can trust and rely on our test results to provide you with
                  accurate and reliable information
                </p>
              </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-2 flex flex-grow">
              <div class="border border-gray-200 p-6 rounded-lg">
                <div
                  class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600 mb-4"
                >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
</svg>

                </div>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                  Accurate Results
                </h2>
                <p class="leading-relaxed text-base">
                  We are committed to providing accurate results as part of the
                  testing process that we perform
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Walk in section -->
      <section class="text-gray-600 body-font bg-indigo-50">
        <div class="container px-5 pt-8 pb-2 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1
              class="sm:text-3xl text-2xl font-medium title-font mb-4 text-indigo-900"
            >
              We accept walk-in appointments.
            </h1>
            <p
              class="lg:w-2/3 mx-auto leading-relaxed text-base text-indigo-800"
            >
              Our services are open on weekdays from 9:00 a.m. to 9:00 p.m., and
              Sunday from 10:00 a.m. to 2:00 p.m. Call +91- 08518 296 097 or
              8074 805 859 for telephonic appointments.
            </p>
            <div>
              <a href="/">
                <button
                  class="flex items-center justify-center gap-1 rounded-md text-indigo-50 bg-indigo-900 px-6 py-3 text-lg mx-auto mt-6"
                >
                  Schedule An Appointment
                </button>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section class="text-gray-600 body-font relative max-w-screen-xl mx-auto">
        <div class="container px-5 py-24 mx-auto flex flex-wrap lg:flex-nowrap">
          <div
            class="w-full lg:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative min-h-[50vh]"
          >
            <iframe
              width="100%"
              height="100%"
              class="absolute inset-0"
              frameborder="0"
              title="map"
              marginheight="0"
              marginwidth="0"
              scrolling="no"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1016.7737540436345!2d78.03856669853397!3d15.813096405573683!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf35c172d77c9ea74!2sAshok%20scans!5e0!3m2!1sen!2sin!4v1669285870111!5m2!1sen!2sin"
            ></iframe>
          

            <div
              class="bg-white relative md:flex flex-wrap py-6 rounded shadow-md hidden"
            >
              <div class="lg:w-1/2 px-6">
                <h2
                  class="title-font font-semibold text-gray-900 tracking-widest text-xs"
                >
                  ADDRESS
                </h2>
                <p class="mt-1">
                  Gayatri Estate, RK Complex, Opposite Ravindra Bharathi School,
                  Kurnool, 518001.
                </p>
              </div>
              <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                <h2
                  class="title-font font-semibold text-gray-900 tracking-widest text-xs"
                >
                  EMAIL
                </h2>
                <a
                  class="text-indigo-600 leading-relaxed"
                  href="mailto:ashokscans@gmail.com"
                  >ashokscans@gmail.com</a
                >
                <h2
                  class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4"
                >
                  PHONE
                </h2>
                <a
                  class="leading-relaxed text-indigo-600"
                  href="tel:08581296097"
                  >08518-296097</a
                >
              </div>
            </div>
          </div>
          <!-- Address -->
          <div
            class="bg-white relative md:hidden flex-wrap py-6 rounded shadow-md flex my-8 border"
          >
            <div class="lg:w-1/2 px-6">
              <h2
                class="title-font font-semibold text-gray-900 tracking-widest text-xs"
              >
                ADDRESS
              </h2>
              <p class="mt-1">
                Gayatri Estate, RK Complex, Opposite Ravindra Bharathi School,
                Kurnool, 518001.
              </p>
            </div>
            <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
              <h2
                class="title-font font-semibold text-gray-900 tracking-widest text-xs"
              >
                EMAIL
              </h2>
              <a
                class="text-indigo-600 leading-relaxed"
                href="mailto:ashokscans@gmail.com"
                >ashokscans@gmail.com</a
              >
              <h2
                class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4"
              >
                PHONE
              </h2>
              <a class="leading-relaxed text-indigo-600" href="tel:08581296097"
                >08518-296097</a
              >
            </div>
          </div>
          <div class="lg:w-1/2 bg-white flex flex-col md:ml-auto w-full">
            <h2 class="text-gray-900 text-3xl mb-1 font-medium title-font">
              Contact Us
            </h2>
            <p class="leading-relaxed mb-3 text-gray-600">
              Fill out the form and we'll get back to you.
            </p>
            <div class="relative mb-2">
              <label for="name" class="leading-7 text-sm text-gray-600"
                >Name</label
              >
              <input
                type="text"
                id="name"
                name="name"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
              />
            </div>
            <div class="relative mb-2">
              <label for="phone" class="leading-7 text-sm text-gray-600"
                >Phone</label
              >
              <input
                type="number"
                id="phone"
                name="phone"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
              />
            </div>
            <div class="relative mb-2">
              <label for="email" class="leading-7 text-sm text-gray-600"
                >Email</label
              >
              <input
                type="email"
                id="email"
                name="email"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
              />
            </div>
            <div class="relative mb-2">
              <label for="message" class="leading-7 text-sm text-gray-600"
                >Message</label
              >
              <textarea
                id="message"
                name="message"
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
              ></textarea>
            </div>
            <button
              class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
            >
              Submit
            </button>
          </div>
        </div>
      </section>
    </main>

    <!--Footer  -->
    <?php 
    include './partials/footer.php';
    ?>

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  </body>
</html>
