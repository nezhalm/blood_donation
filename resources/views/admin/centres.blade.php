
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">
    <div class=" bg-gray-900 w-full min-h-screen flex items-center justify-center">
        <div class=" mt-10 bg-gray-800 flex-1 flex flex-col space-y-5 lg:space-y-0 lg:flex-row lg:space-x-10 max-w-6xl sm:p-6 sm:my-2 sm:mx-4 sm:rounded-2xl">
          <!-- Navigation -->
          <div class="bg-gray-900 px-2 lg:px-4 py-2 lg:py-10 sm:rounded-xl flex lg:flex-col justify-between">
            <nav class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-2">
                <a class=" bg-gray-800 text-white/50 p-4 inline-flex justify-center rounded-md hover:bg-gray-800 hover:text-white smooth-hover" href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                  </svg>
                </a>
                <!-- Active: bg-gray-800 text-white, Not active: text-white/50 -->

                <a class=" bg-gray-800 text-white/50 p-4 inline-flex justify-center rounded-md hover:bg-gray-800 hover:text-white smooth-hover" href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                  </svg>
                </a>
                <a class="bg-gray-800 text-white/50 p-4 inline-flex justify-center rounded-md hover:bg-gray-800 hover:text-white smooth-hover" href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path>
                  </svg>
                </a>
                <a class="bg-gray-800 text-white/50 p-4 inline-flex justify-center rounded-md" href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z" clip-rule="evenodd"></path>
                  </svg>

                </a>
                <a class="bg-gray-800 text-white/50 p-4 inline-flex justify-center rounded-md" href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                      <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                  </svg>

                </a>
              </nav>
            <div class="flex items-center flex-row space-x-2 lg:space-x-0 lg:flex-col lg:space-y-2">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                    </x-dropdown-link>
                   </form>




            </div>
          </div>

          <!-- Content -->
          <div class="flex-1 px-2 sm:px-0">
            <div class="flex justify-between items-center">
              <h3 class="text-3xl font-extralight text-white/50">livres</h3>
              <div class="inline-flex items-center space-x-2">

              </div>
            </div>
            <div class="mb-10 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
              <div class="group bg-gray-900/30 py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/40 hover:smooth-hover">
                <a class="bg-gray-900/70 text-white/50 group-hover:text-white group-hover:smooth-hover flex w-20 h-20 rounded-full items-center justify-center" href="/add_livre">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                  </svg>
                </a>
                <a class="text-white/50 group-hover:text-white group-hover:smooth-hover text-center" href="/add_centre">Create livre</a>
              </div>


              @foreach ( $centres as $centre )
              <?php
              $var=strtoupper(substr($centre->nom, 0, 1));
              ?>
              <div class="relative group bg-gray-900 py-5 sm:py-10 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                {{-- <h2 class="relative group bg-gray-900 py-5 w-32 h-36 sm:py-10 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover"  >
                    <img src={{asset('images/centres/'.$centres->image)}} class="object-cover buttom-2 mb-32 h-24 w-32 rounded-full" alt="" />

                </h2> --}}
                <h4 class="text-white text-xl  font-bold capitalize text-center">  {{ $centre->ville }}</h4>

                {{-- <p class=" text-slate-900 pl-2 pt-1 w-20 h-20  rounded-full object-center bg-blue-200"  > {{ $var }}</p> --}}

                <h4 class="text-white text-l font-bold capitalize text-center"></h4>

                {{-- <p class="text-white/50">  {{ $livre->image }},</p> --}}
              <div class="flex flex-auto mt-12">
                {{-- <form action="{{ route('livre.archive', ['id' => $livre->id]) }}" method="POST">
                    @csrf
                    @method('POST')
                    <button type="submit">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="yellow" class=" mr-16 h-5 w-5 ">
                            <path d="M20 6.18V3a1 1 0 0 0-1-1h-4.12a1 1 0 0 0-.7.29L13.41 4H10.59l-1.77-1.71a1 1 0 0 0-1.4 0L4.12 6.3A1 1 0 0 0 4 7v12a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7a1 1 0 0 0-.12-.82zM6 18V8.41l4-4 4 4V18zm8-13a1 1 0 0 1 .7.29l1.91 1.88a1 1 0 0 1 .29.7 1 1 0 0 1-.29.7L14.71 10a1 1 0 0 1-.7.3 1 1 0 0 1-.71-.3L11 7.59l-.29-.3a1 1 0 0 1 0-1.4A1 1 0 0 1 11.29 6z"/>
                          </svg>
                </button>
                </form>


                <form action="{{ route('livreedit', ['id' => $livre->id]) }}" method="GET">
                    @csrf
                    @method('UPDATE')
                    <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="yellow">
                        <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
                    </svg></button>
                </form> --}}
</div>
                <p class="absolute top-2 text-white/20 inline-flex items-center text-xs"> {{ $centre->created_at }} <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>

              </div>

              @endforeach

            </div>
          </div>
        </div>
      </div>




    </body>
</html>
