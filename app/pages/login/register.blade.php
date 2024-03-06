<!doctype html>
<html lang="en">
  <head>
    <title>Login/Create account</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="/css/style.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://unpkg.com/htmx.org@1.9.10"
      integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC"
      crossorigin="anonymous"
    ></script>
  </head>

  <body
    style="background-image: url(&quot;/img/login/background.png&quot;)"
    class="bg-cover bg-no-repeat bg-bottom grid justify-center items-center min-h-[100vh]"
  >
    <form
      class="max-w-96 flex flex-col justify-between gap-2 p-8 rounded shadow-[rgba(0,0,0,0.25)] shadow-xl min-h-[50vh] min-w-[50vh]"
      style="background-color: var(--color-bg-yellow)"
      hx-target="#error"
      hx-post
    >
      <div class="flex flex-col gap-2">
        <label for="email" class="flex flex-col">
          Email
          <input
            id="email"
            type="email"
            name="email"
            class="border border-black rounded p-2"
            required
          />
        </label>
        <label for="username" class="flex flex-col">
          Username
          <input
            id="username"
            type="string"
            name="username"
            class="border border-black rounded p-2"
            required
          />
        </label>
        <label for="name" class="flex flex-col">
          Name
          <input
            id="name"
            type="string"
            name="name"
            class="border border-black rounded p-2"
            required
          />
        </label>
        <label for="password" class="flex flex-col">
          Password
          <input
            id="password"
            type="password"
            name="password"
            class="border border-black rounded p-2"
            required
          />
        </label>
      </div>
      <div class="flex flex-col">
          <input
            type="submit"
            name="action"
            value="Register"
            class="cursor-pointer bg-white border border-black rounded hover:bg-gray-100 h-10"
          />
        <p class="text-red-700" id="error"></p>
        <a class="text-gray-500 hover:underline" href="login">Already have an account?</a>
      </div>
    </form>
  </body>
</html>
