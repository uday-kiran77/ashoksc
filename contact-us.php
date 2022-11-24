<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | Ashok Scans</title>
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
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="">
    <!-- Navbar -->
    <?php 
     $active = "contact-us";
    include './partials/navbar.php';
    ?>
    <main class="min-h-[calc(100vh-150px)]">
      <!-- Contact Section -->
      <section
        class="text-gray-600 body-font relative max-w-screen-xl mx-auto mt-24"
      >
        <h2 class="text-center text-3xl text-black font-semibold hidden">
          Get In Touch
        </h2>

        <div
          class="container px-5 py-8 mx-auto flex md:flex-wrap lg:flex-nowrap gap-4 flex-wrap-reverse"
        >
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
                class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-20 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
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
