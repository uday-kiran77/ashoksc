<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us | Ashok Scans</title>
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
  <body class="">
    <!-- Navbar -->
    <?php 
     $active = "about-us";
    include './partials/navbar.php';
    ?>

    <main class="min-h-[calc(100vh-60px)]">
      <!-- About Section -->
      <section class="text-gray-600 body-font mt-12">
        <div
          class="container mx-auto flex px-5 pt-24 pb-12 lg:flex-row flex-col items-center  justify-center"
        >
          <div class=" lg:w-full max-w-lg  mb-10 md:mb-0">
            <img
              class="object-cover object-center rounded"
              alt="hero"
              src="https://dummyimage.com/600x400"
            />
          </div>
          <div
            class="lg:w-1/2 lg:pl-24 px-0 sm:px-12 lg:px-0 flex flex-col md:items-start text-left "
          >
            <h1
              class="title-font sm:text-xl text-2xl mb-4 font-medium text-gray-900 small-underline-left w-fit"
            >
              About Ashok Scans
            </h1>
            <p class="mb-8 leading-relaxed ">
            We at Ashok Scans pride ourselves on being one of the top and best diagnostic centers in Kurnool. In order to serve people in need of high-quality diagnostic solutions coupled with excellent hospitality. We are committed to deliver approriate, reliable, accurate and timely services by professional excellence achieved by continious exposure to contemporary practices and technology. Ashok Scans was founded with the purpose of providing high-quality diagnostic solutions with excellent hospitality. It is Ashok Scans' mission to provide quality healthcare services in a fast and efficient manner to its patients with the assistance of highly qualified and experienced staff. With Ashok Scans, you can expect a highly reliable, affordable, and customer-centric method of providing quality services. We offer a wide range of ultrasound services, and you can check out our service offerings here

 
            </p>
          
            </div>
          </div>
        </div>
      </section>
      <!-- Team Section -->
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 font-opensans">Our Doctors</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus vero neque nam quae repellendus aperiam provident, alias rerum animi voluptatibus commodi obcaecati debitis suscipit? Assumenda?</p>
          </div>
          <div class="flex flex-wrap -m-4 items-center justify-center">
            <div class="p-4 lg:w-1/4 md:w-1/2">
              <div class="h-full flex flex-col items-center text-center">
                <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
                <div class="w-full">
                  <h2 class="title-font font-medium text-lg text-gray-900">
                    Dr. R.Sandhya Rani
                  </h2>
                  <h3 class="text-gray-500 mb-3">Consultant Radiologist</h3>
                  <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit harum perferendis </p>
               
                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/4 md:w-1/2">
              <div class="h-full flex flex-col items-center text-center">
                <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/200x200">
                <div class="w-full">
                  <h2 class="title-font font-medium text-lg text-gray-900">Dr. K. Ashok Kumar</h2>
                  <h3 class="text-gray-500 mb-3">Consultant Radiologist</h3>
                  <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut debitis iste sit Lorem, ipsum.</p>
            
                </div>
              </div>
            </div>
            
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
