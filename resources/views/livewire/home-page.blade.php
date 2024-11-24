<div>
<div class="w-full h-screen bg-gradient-to-r from-blue-200 to-cyan-200 py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
      <div>
        <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">Start your journey with <span class="text-blue-600">Spartan Commerce</span></h1>
        <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Purchase wide varities of RGO products like Uniform, PE, Department Shirts, ID Lace and many more.</p>

        <!-- Buttons -->
        <div class="mt-7 grid gap-3 w-full sm:inline-flex">
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/register">
            Sign Up
            <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6" />
            </svg>
          </a>
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/contact">
            Contact Us
          </a>
        </div>
        <!-- End Buttons -->

      
      </div>
      <!-- End Col -->

      <div class="relative ms-4">
        <img class="w-full rounded-md" src="https://static.vecteezy.com/system/resources/previews/011/993/278/non_2x/3d-render-online-shopping-bag-using-credit-card-or-cash-for-future-use-credit-card-money-financial-security-on-mobile-3d-application-3d-shop-purchase-basket-retail-store-on-e-commerce-free-png.png" alt="Image Description">
        <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0"></div>

        <!-- SVG-->
        <div class="absolute bottom-0 start-0">
          <svg class="w-2/3 ms-auto h-auto text-white dark:text-slate-900" width="630" height="451" viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="531" y="352" width="99" height="99" fill="currentColor" />
            <rect x="140" y="352" width="106" height="99" fill="currentColor" />
            <rect x="482" y="402" width="64" height="49" fill="currentColor" />
            <rect x="433" y="402" width="63" height="49" fill="currentColor" />
            <rect x="384" y="352" width="49" height="50" fill="currentColor" />
            <rect x="531" y="328" width="50" height="50" fill="currentColor" />
            <rect x="99" y="303" width="49" height="58" fill="currentColor" />
            <rect x="99" y="352" width="49" height="50" fill="currentColor" />
            <rect x="99" y="392" width="49" height="59" fill="currentColor" />
            <rect x="44" y="402" width="66" height="49" fill="currentColor" />
            <rect x="234" y="402" width="62" height="49" fill="currentColor" />
            <rect x="334" y="303" width="50" height="49" fill="currentColor" />
            <rect x="581" width="49" height="49" fill="currentColor" />
            <rect x="581" width="49" height="64" fill="currentColor" />
            <rect x="482" y="123" width="49" height="49" fill="currentColor" />
            <rect x="507" y="124" width="49" height="24" fill="currentColor" />
            <rect x="531" y="49" width="99" height="99" fill="currentColor" />
          </svg>
        </div>
        <!-- End SVG-->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
</div>


{{--Categories --}}
<div class="bg-orange-200 py-20">
  <div class="max-w-xl mx-auto">
    <div class="text-center ">
      <div class="relative flex flex-col items-center">
        <h1 class="text-5xl font-bold dark:text-gray-200"> Browse <span class="text-blue-500"> Categories
          </span> </h1>
        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
          <div class="flex-1 h-2 bg-blue-200">
          </div>
          <div class="flex-1 h-2 bg-blue-400">
          </div>
          <div class="flex-1 h-2 bg-blue-600">
          </div>
        </div>
      </div>
      <p class="mb-12 text-base text-center text-gray-500">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
        Pariatur
        numquam, odio quod nobis ipsum ex cupiditate?
      </p>
    </div>
  </div>

  <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">

      @foreach ($categories as $category)
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/products?selected_categories[0]={{$category->id}}" wire:key="{{$category->id}}">
          <div class="p-4 md:p-5">
            <div class="flex justify-between items-center">
              <div class="flex items-center">
                <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{url('storage', $category->image)}}" alt="{{$category->name}}">
                <div class="ms-3">
                  <h3 class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                    {{$category->name}}
                  </h3>
                </div>
              </div>
              <div class="ps-3">
                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </div>
            </div>
          </div>
        </a>
      @endforeach
      

      
    </div>
  </div>

</div>

{{--Customer review--}}
<section class="py-14 font-poppins dark:bg-gray-800">
  <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
    <div class="max-w-xl mx-auto">
      <div class="text-center ">
        <div class="relative flex flex-col items-center">
          <h1 class="text-5xl font-bold dark:text-gray-200"> Group <span class="text-blue-500"> Developers
            </span> </h1>
          <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
            <div class="flex-1 h-2 bg-blue-200">
            </div>
            <div class="flex-1 h-2 bg-blue-400">
            </div>
            <div class="flex-1 h-2 bg-blue-600">
            </div>
          </div>
        </div>
        <p class="mb-12 text-base text-center text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
          Pariatur
          numquam, odio quod nobis ipsum ex cupiditate?
        </p>
      </div>
    </div>

    <div class="py-6 bg-transparent rounded-md dark:bg-transparent border-0">
      <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 xl:grid-cols-3">
        <div class="flex flex-col items-center p-4 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-800">
          <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="Developer 5" class="w-24 h-24 rounded-full object-cover mb-4 mt-12">
          <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Array Out Of Bounds</h3>
        </div>
        <!-- Developer 1 -->
          <div class="flex flex-col items-center p-4 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-800">
              <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="Developer 1" class="w-24 h-24 rounded-full object-cover mb-4">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Chester</h3>
              <p class="text-xs text-gray-500 dark:text-gray-400">Java Programmer</p>
              <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Experienced in building robust backend systems and software solutions.</p>
              <div class="flex space-x-4 mt-4">
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">Portfolio</a>
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">LinkedIn</a>
              </div>
          </div>
  
          <!-- Developer 2 -->
          <div class="flex flex-col items-center p-4 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-800">
              <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="Developer 2" class="w-24 h-24 rounded-full object-cover mb-4">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Maria</h3>
              <p class="text-xs text-gray-500 dark:text-gray-400">Frontend Developer</p>
              <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Skilled in React, Vue.js, and creating beautiful user interfaces.</p>
              <div class="flex space-x-4 mt-4">
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">Portfolio</a>
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">LinkedIn</a>
              </div>
          </div>
  
          <!-- Developer 3 -->
          <div class="flex flex-col items-center p-4 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-800">
              <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="Developer 3" class="w-24 h-24 rounded-full object-cover mb-4">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">John</h3>
              <p class="text-xs text-gray-500 dark:text-gray-400">UI/UX Designer</p>
              <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Passionate about user-centered design and creating seamless experiences.</p>
              <div class="flex space-x-4 mt-4">
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">Portfolio</a>
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">LinkedIn</a>
              </div>
          </div>
  
          <!-- Developer 4 -->
          <div class="flex flex-col items-center p-4 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-800">
              <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="Developer 4" class="w-24 h-24 rounded-full object-cover mb-4">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Ella</h3>
              <p class="text-xs text-gray-500 dark:text-gray-400">Backend Developer</p>
              <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Expert in Node.js, Python, and building scalable server-side applications.</p>
              <div class="flex space-x-4 mt-4">
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">Portfolio</a>
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">LinkedIn</a>
              </div>
          </div>
  
          <!-- Developer 5 -->
          <div class="flex flex-col items-center p-4 bg-gray-100 rounded-lg shadow-lg dark:bg-gray-800">
              <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="Developer 5" class="w-24 h-24 rounded-full object-cover mb-4">
              <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Alex</h3>
              <p class="text-xs text-gray-500 dark:text-gray-400">Full-Stack Developer</p>
              <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Experienced in both front-end and back-end development, specializing in MERN stack.</p>
              <div class="flex space-x-4 mt-4">
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">Portfolio</a>
                  <a href="#" class="text-blue-500 dark:text-blue-400 hover:underline">LinkedIn</a>
              </div>
          </div>
          
      </div>
        
    </div>
  
  
  </div>
</section>
</div>
