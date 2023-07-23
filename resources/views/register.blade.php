<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css"  rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
  @vite('resources/css/app.css')
  <style>
    input:-webkit-autofill,
    input:-webkit-autofill:hover, 
    input:-webkit-autofill:focus {
        -webkit-box-shadow: 0 0 0px 1000px  rgb(255, 255, 255) inset;
    }
  </style>
</head>
<body class="grid place-content-center h-screen ">
    <h1 class="mb-4 text-5xl font-extrabold leading-none tracking-tight text-center md:text-4xl lg:text-5xl ">
        <span class="text-teal-700">BLIS</span><span class="text-blue-400">STORE</span>
    </h1>
    <div class=" grid place-content-center p-8 w-98 shadow-md rounded-lg">

        <h2 class="text-center font-bold text-gray-600">Sign up to your account</h2>

        <form action="{{route("register.create")}}" method="post" class="" autocomplete="off">
            @csrf
            <div class="relative z-0 w-full mt-6 group">
                <input type="text" value="{{old('name')}}" autocomplete="off" name="name" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" "  />
                <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-teal-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
            </div>

            @error('name')
                <div class="text-red-500"><h5>{{$message}}</h5></div>
            @enderror

            <div class="relative z-0 w-full mt-6 group">
                <input  type="email" value="{{old('email')}}" autocomplete="false" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-teal-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
            </div>

            @error('email')
                <div class="text-red-500"><h5>{{$message}}</h5></div>
            @enderror

            <div class="relative z-0 w-full mt-6 group">
                <input type="password" value="{{old('password')}}" autocomplete="off" name="password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-teal-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>

            @error('password')
                <div class="text-red-500"><h5>{{$message}}</h5></div>
            @enderror

            <div class="relative z-0 w-full mt-6 group">
                <input type="password" value="{{old('repeated_password')}}" autocomplete="off" name="repeated_password" id="floating_repeated_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-600 dark:border-gray-600 dark:focus:border-teal-500 focus:outline-none focus:ring-0 focus:border-teal-600 peer" placeholder=" " required />
                <label for="floating_repeatedpassword" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-teal-600 peer-focus:dark:text-teal-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Repeat Password</label>
            </div>

            @error('repeated_password')
                <div class="text-red-500"><h5>{{$message}}</h5></div>
            @enderror

            <label for="underline_select" class="sr-only">Underline select</label>
            <select id="underline_select" name="country_id" class="mt-6 block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-teal-500 peer" required>
                <option selected>Choose a country</option>
                @foreach ($languages as $lan)
                    <option value={{$lan->id}}>{{$lan->country}}</option>
                @endforeach
                
            </select>

            @error('id_country')
                <div class="text-red-500"><h5>{{$message}}</h5></div>
            @enderror

            <p class="mt-6 md:font-sm"><a href="{{route('home.index')}}" class="font-sm text-blue-600 dark:text-blue-500 hover:underline">I have an account</a></p>

            <p class=" text-gray-500 mt-3 md:text-sm ">By registering, you accept the <a href="{{route('terms.conditions')}}" class="text-blue-600 hover:underline">terms and conditions</a></p>

            <button type="submit" class="text-white mt-5 bg-teal-500 w-full  hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Sign up</button>
        </form>
    </div>
  
</body>
</html>