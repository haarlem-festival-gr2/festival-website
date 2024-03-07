<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Restaurant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      rel="stylesheet"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
      .font-open-sans {
        font-family: "Open Sans", sans-serif;
      }

      .button {
        background-color: #c026d3;
        color: #fff;
        padding: 8px 16px;
        border-radius: 8px;
        font-weight: 600;
        text-transform: uppercase;
        cursor: pointer;
      }
    </style>
  </head>

  <body class="font-open-sans bg-amber-100 text-black">
    <div class="relative">
      <img
        src="img/yummy/RatatouileHeader.png"
        alt="The Grote Markt which has people walking and restaurant stalls."
        class="w-full"
      />
    </div>
    <div class="bg-amber-400 p-10 text-black font-bold text-center">
      <h1 class="text-8xl mb-6">Ratatouile!</h1>
      <p class="text-4xl mb-2">Food & Wine</p>
    </div>
    <div class="relative mt-8">
      <!-- Shadow Bar-->
      <div class="bg-pink-300 h-16 w-4/6 left-1 top-0"></div>
      <!-- Main Bar -->
      <div class="bg-pink-400 h-16 w-4/6 absolute left-0 top-1">
        <h1 class="text-4xl p-2 font-bold text-center">Who are we?</h1>
      </div>
      <div class="bg-yellow-300 rounded-2xl shadow-lg text-center text-3xl p-6">
        <p>We love to cook delicious food!</p>
        <p>We cook <b>French & Seafood,</b> And <b>European</b> food.</p>
      </div>
    </div>
    <section>
      <!-- Restaurant -->
      <div class="grid grid-cols-10 mt-8 text-center text-3xl relative">
        <!-- Restaurant Location -->
        <div
          class="col-span-6 row-span-1 flex justify-center items-center h-24"
        >
          <i
            class="fa-solid fa-location-dot fa-2xl p-8"
            style="color: #c026d3"
          ></i>
          <h1 class="text-5xl p-2 font-bold">Spaarne 96, 2011 CL Haarlem</h1>
        </div>

        <!-- Star Rating -->
        <div class="col-span-4 p-12 row-span-1 flex justify-end">
          <i
            class="fa-sharp fa-solid fa-star fa-2xl"
            style="color: #ffd43b"
          ></i>
          <!--Yellow Star Icon-->
          <i
            class="fa-sharp fa-solid fa-star fa-2xl"
            style="color: #ffd43b"
          ></i>
          <!--Yellow Star Icon-->
          <i
            class="fa-sharp fa-solid fa-star fa-2xl"
            style="color: #ffd43b"
          ></i>
          <!--Yellow Star Icon-->
          <i
            class="fa-sharp fa-solid fa-star fa-2xl"
            style="color: #ffd43b"
          ></i>
          <!--Yellow Star Icon-->
          <i
            class="fa-sharp fa-solid fa-star fa-2xl"
            style="color: #98a6a9"
          ></i>
          <!--White Star Icon-->
        </div>

        <!-- Restaurant Image -->
        <div class="col-span-3 p-2 row-span-2">
          <img
            src="img/yummy/RatatouileFood1.png"
            alt="A fancy dish being displayed on a fancy plate."
            class="mt-8 shadow-lg rounded-3xl"
          />
        </div>
        <div class="col-span-4 p-2 row-span-2">
          <img
            src="img/yummy/RatatouileFood2.png"
            alt="Food on a grill looking tasty."
            class="shadow-lg rounded-3xl"
          />
        </div>
        <div class="col-span-3 p-2 row-span-2">
          <img
            src="img/yummy/RatatouileFood3.png"
            alt="Fancy looking dish."
            class="mt-8 shadow-lg rounded-3xl"
          />
        </div>

        <!-- Restaurant Information -->
        <div class="col-span-5 p-2 row-span-4">
          <div
            class="grid grid-cols-4 bg-amber-400 h-full rounded-2xl shadow-lg"
          >
            <div class="col-span-1 row-spawn-2 mt-12">
              <i
                class="fa-sharp fa-regular fa-3 fa-2xl"
                style="color: #c026d3"
              ></i>
              <!--3 Icon-->
              <h1 class="mt-6">Sessions</h1>
              <h1><b>3 a day</b></h1>
            </div>
            <div class="col-span-1 row-spawn-2 mt-12">
              <i
                class="fa-sharp fa-regular fa-hourglass-half fa-2xl"
                style="color: #c026d3"
              ></i>
              <!--Hourglass Icon-->
              <h1 class="mt-6">Session Time</h1>
              <h1><b>2 hours</b></h1>
            </div>
            <div class="col-span-1 row-spawn-2 mt-12">
              <i
                class="fa-sharp fa-regular fa-clock fa-2xl"
                style="color: #c026d3"
              ></i>
              <!--Clock Icon-->
              <h1 class="mt-6">Start Time</h1>
              <h1>session starts</h1>
              <h1><b>17:00</b></h1>
            </div>
            <div class="col-span-1 row-spawn-2 mt-12">
              <i
                class="fa-solid fa-regular fa-user-group fa-2xl"
                style="color: #c026d3"
              ></i>
              <!--Cutlery Icon-->
              <h1 class="mt-6">Seats</h1>
              <h1><b>52</b> per</h1>
              <h1>session</h1>
            </div>
          </div>
        </div>

        <!-- Restaurant Information -->
        <div class="col-span-5 p-2 row-span-4">
          <div class="grid grid-cols-4 bg-amber-400 rounded-2xl shadow-lg p-2">
            <div
              class="col-span-2 row-spawn-2 flex justify-center items-center"
            >
              <i
                class="fa-sharp fa-regular fa-user fa-2xl"
                style="color: #c026d3"
              ></i>
              <!--3 Person Icon-->
              <div
                class="bg-pink-500 p-2 shadow-lg rounded-3xl flex justify-center items-center ml-4"
              >
                <i
                  class="fa-solid fa-euro-sign fa-2xl"
                  style="color: #ffffff"
                ></i>
                <!--Euro Idockcon-->
                <h1 class="p-6 text-white"><b>45.00</b></h1>
              </div>
            </div>
            <div class="col-span-2 row-spawn-4">
              <i
                class="fa-solid fa-regular fa-utensils fa-2xl mt-8"
                style="color: #c026d3"
              ></i>
              <!--Cutlery Icon-->
              <h1 class="mt-2"><b>French</b></h1>
              <h1><b>Fish & Seafood</b></h1>
              <h1><b>European</b></h1>
            </div>
            <div
              class="col-span-2 row-spawn-2 flex justify-center items-center"
            >
              <i
                class="fa-solid fa-regular fa-baby fa-2xl"
                style="color: #c026d3"
              ></i>
              <!--Baby Icon-->
              <div
                class="bg-pink-500 p-2 shadow-lg rounded-3xl flex justify-center items-center ml-4"
              >
                <i
                  class="fa-solid fa-euro-sign fa-2xl"
                  style="color: #ffffff"
                ></i>
                <!--Euro Icon-->
                <h1 class="p-6 text-white"><b>22.50</b></h1>
              </div>
            </div>
          </div>
        </div>

        <!-- Cook along -->
        <div>
          <div class="grid grid-cols-6 p-2">
            <div class="col-span-3 row-spawn-1">
              <h1 class="text-4xl p-2 font-bold text-center">Cook along!</h1>
            </div>
            <div class="col-span-3 row-spawn-1">
              <div class="bg-pink-400">
                <h1 class="text-4xl p-2 font-bold text-center">Cook along!</h1>
              </div>
            </div>
          </div>
        </div>

        <!-- Schedule -->
        <div></div>

        <!-- Get in contact -->
        <div></div>
      </div>
    </section>
  </body>
</html>
