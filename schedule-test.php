<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/main.css" />

    <!-- tailwind elements files -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"
    />
  </head>
  <body>
  <?php 
     $active = "schedule-test";
    include './partials/navbar.php';
    ?>
    <main class="min-h-[calc(100vh-100px)] px-2">

    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-xl  border mx-auto mt-24">
        <h2 class="text-2xl font-semibold text-center underline pb-4">Book Appointment Form</h2>
        <p class="max-w-md text-center mx-auto pb-4 text-gray-600">If you'd like to schedule a time and date for the yout test, please fill out the form</p>
      <form action="/schedule-test.html">
        <div class="grid grid-cols-2 gap-4">
          <div class="form-group mb-3">
            <input
              type="text"
              class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="Name"
              name="name"
              required
            />
          </div>
          <div class="form-group mb-3">
            <input
              type="number"
              class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="exampleInput124"
              aria-describedby="emailHelp124"
              placeholder="Mobile Number"
              name="phone"
              required
            />
          </div>
        </div>
        <div class="flex items-center justify-center">
          <div
            class="datepicker relative mb-3 w-full"
            data-mdb-toggle-button="false"
          >
            <input
              type="text"
              class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="Select a date"
              data-mdb-toggle="datepicker"
              name="date"
              required
            />
          </div>
        </div>
        <div class="form-group mb-3">
          <input
            type="email"
            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            id="exampleInput125"
            placeholder="Email address"
            name="email"
          />
        </div>
        <div class="mb-3 ">
          <select
            class="form-select form-select-lg mb-3 appearance-none block w-full px-4 py-2 text-md font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label=".form-select-lg example"
            required
          >
            <option disabled selected value >Select Service</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

         
        <button
          type="submit"
          class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
        >
          Submit
        </button>
      </form>
    </div>
</main>
<!--Footer  -->
<?php 
    include './partials/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  </body>
</html>
