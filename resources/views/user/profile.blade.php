@include('components.header2')

<!-- hero -->
<div class="hero bg-Background relative">
  <div class="absolute right-0 top-0 mt-20 mr-2">
    <input type="file" id="file" class="hidden" />
    <label
      for="file"
      class="flex items-center py-2 lg:mt-0 md:mt-0 px-3 md:px-3 sm:px-2 bg-white font-semibold text-Blue text-sm rounded-lg border-2 border-solid border-Blue gap-2"
    >
      <img class="w-5" src="{{ asset('icon/changecover.png') }}" />Change
      Cover</label
    >
  </div>
  <img
    src="{{ asset('img/banneruser.png') }}"
    alt=""
    class="w-full h-80 object-cover mt-16"
  />
  <div class="avatar absolute mt-80">
    <div class="bg-white mask mask-hexagon w-28 lg:w-40 md:w-40 sm:w-30">
      <div
        class="bg-Aqua mask mask-hexagon w-24 lg:w-32 md:w-36 sm:w-24 mx-auto"
      >
        <div
          class="w-16 lg:w-30 md:w-28 sm:w-20 mask mask-hexagon mt-3 mx-auto"
        >
          <span>.</span>
          <img src="{{ asset('icon/jd.png') }}" class="w-10" />
        </div>
      </div>
    </div>
  </div>

  <div class="absolute mt-80 right-0">
    <div
      class="flex flex-col lg:flex-row md:flex-row rounded-md squircle mt-14 lg:mr-10 p-1"
    >
      <button
        class="flex items-center ml-5 py-1 lg:mt-0 md:mt-0 px-3 md:px-3 sm:px-2 bg-Blue font-semibold text-white lg:text-lg md:text-lg text-sm rounded-lg border-4 border-solid border-white gap-3"
      >
        <img src="{{ asset('icon/editpp.png') }}" class="w-6" />
        Edit Profil
      </button>
      <button
        class="flex items-center mt-1 lg:mt-0 md:mt-0 ml-5 py-1 px-3 bg-Aqua font-semibold text-white lg:text-lg md:text-lg text-sm rounded-lg border-4 border-solid border-white gap-2"
      >
        <img src="{{ asset('icon/scan.png') }}" class="w-6" />
        Scan QR
      </button>
    </div>
  </div>
</div>

<!-- left menu-->
<div class="bg-white pb-4 lg:pb-9 md:pb-7 sm:pb-6 pt-1">
  <div class="relative mt-2">
    <ul class="menu-horizontal ml-2 lg:ml-10 mt-6">
      <div class="lg:mr-8 md:mr-8 sm:mr-5 mr-2">
        <a
          href="#"
          class="text-xs lg:text-lg md:text-md sm:text-sm font-bold text-black"
          >0</a
        >
        <p
          class="text-xs lg:text-md md:text-sm sm:text-xs font-semibold text-slate-500"
        >
          Followers
        </p>
      </div>

      <div class="lg:mr-8 md:mr-8 sm:mr-5 mr-2">
        <a
          href="#"
          class="text-xs lg:text-lg md:text-md sm:text-sm font-bold text-black"
          >0</a
        >
        <p
          class="text-xs lg:text-md md:text-sm sm:text-xs font-semibold text-slate-500"
        >
          Following
        </p>
      </div>

      <div class="hidden lg:inline md:inline lg:mr-8 md:mr-8 sm:mr-2 mr-2">
        <a
          href="#"
          class="text-xs lg:text-lg md:text-md sm:text-sm font-bold text-black"
          >0</a
        >
        <p
          class="text-xs lg:text-md md:text-sm sm:text-xs font-semibold text-slate-500"
        >
          Posts
        </p>
      </div>

      <div class="hidden lg:inline lg:mr-8 md:mr-8 sm:mr-2 mr-2">
        <a
          href="#"
          class="text-xs lg:text-lg md:text-md sm:text-sm font-bold text-black"
          >0</a
        >
        <p
          class="text-xs lg:text-md md:text-sm sm:text-xs font-semibold text-slate-500"
        >
          Threads
        </p>
      </div>

      <div class="hidden lg:inline">
        <p
          class="text-xs lg:text-md md:text-sm sm:text-xs font-semibold text-slate-500"
        >
          <img src="{{ asset('icon/nocountry.png') }}" alt="idn" />
          Country
        </p>
      </div>

      <details class="lg:hidden dropdown">
        <summary class="m-1 font-medium text-sm">More</summary>
        <ul
          class="shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-16"
        >
          <div class="md:hidden">
            <a href="#">0</a>
            <p
              class="text-xs lg:text-md md:text-sm sm:text-xs font-semibold text-slate-500"
            >
              Posts
            </p>
          </div>
          <div class="mt-2">
            <a href="#">0</a>
            <p
              class="text-xs lg:text-md md:text-sm sm:text-xs font-semibold text-slate-500"
            >
              Threads
            </p>
          </div>
          <div class="mt-2">
            <img src="{{ asset('icon/nocountry.png') }}" alt="idn" />
            <p
              class="text-xs lg:text-md md:text-sm sm:text-xs font-semibold text-slate-500"
            >
              IDN
            </p>
          </div>
        </ul>
      </details>
    </ul>

    <!-- right -->
    <ul class="absolute menu-horizontal mt-6 right-1 lg:right-10">
      <div>
        <a href="#"
          ><button
            class="flex items-center mt-1 lg:mt-0 md:mt-0 py-1 lg:px-1 md:px-2 sm:px-4 px-5 mr-1 text-xs font-semibold text-Blue lg:text-lg md:text-lg sm:text-md rounded-md border-2 border-Blue"
          >
            Add Acount +
          </button></a
        >
      </div>
    </ul>

    <!-- center -->
    <div
      class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-6 lg:mt-12 md:mt-10 sm:mt-10"
    >
      <div
        class="flex gap-2 font-bold text-lg lg:text-2xl md:text-xl pb-3 font-inter"
      >
        User1234
        <a href="#" class="mt-1"
          ><img src="{{ asset('icon/editname.png') }}"
        /></a>
      </div>
    </div>
  </div>
</div>

<!-- layout -->
<div class="mx-2 mt-4">
  <div class="flex justify-between flex-wrap lg:flex-nowrap">
    <div class="lg:w-1/3 w-2/5">
      <div class="bg-white p-5 rounded-2xl">
        <h2 class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4">
          About Me
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <p class="text-center mt-5 text-xs lg:text-md md:text-md sm:text-sm">
          No Description yet
        </p>
        <p class="mt-5 text-xs lg:text-md md:text-md sm:text-sm">Joined :</p>
        <p class="mt-5 text-xs lg:text-md md:text-md sm:text-sm">City :</p>
        <p class="mt-5 text-xs lg:text-md md:text-md sm:text-sm">Country :</p>
        <p class="mt-5 text-xs lg:text-md md:text-md sm:text-sm">Age :</p>
        <p class="mt-5 text-xs lg:text-md md:text-md sm:text-sm">Email :</p>
      </div>

      <div class="bg-white p-5 rounded-2xl mt-4 relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Badges
          <a
            class="text-Blue text-xs absolute right-0 mr-2 lg:text-md lg:mr-5 md:text-md md:mr-5 sm:text-sm sm:mr-5 mt-6"
            >More</a
          >
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <!-- <ul class="menu menu-horizontal flex">
          <li class="">
            <a class=""
              ><img
                src="{{ asset('icon/Discord.png') }}"
                class="lg:w-8 md:w-7 sm:w-5 w-4 mt-2 rounded-md"
                alt=""
            /></a>
          </li>
          <li class="">
            <a class=""
              ><img
                src="{{ asset('icon/Discord.png') }}"
                class="lg:w-8 md:w-7 sm:w-5 w-4 mt-2 rounded-md"
                alt=""
            /></a>
          </li>
          <li class="">
            <a class=""
              ><img
                src="{{ asset('icon/Discord.png') }}"
                class="lg:w-8 md:w-7 sm:w-5 w-4 mt-2 rounded-md"
                alt=""
            /></a>
          </li>
          <li class="">
            <a class=""
              ><img
                src="{{ asset('icon/Discord.png') }}"
                class="lg:w-8 md:w-7 sm:w-5 w-4 mt-2 rounded-md"
                alt=""
            /></a>
          </li>
        </ul> -->
        <div class="flex mt-5 justify-center gap-2">
          <p class="text-xs lg:text-md md:text-md sm:text-sm">
            You don't have a badge
          </p>
          <img
            src="{{ asset('icon/formkit_sad.png') }}"
            alt=""
            class="w-5 h-5"
          />
        </div>
        <a
          class="flex justify-center items-center py-2 mt-5 lg:mx-12 md:mx-12 bg-white font-semibold text-Blue text-sm rounded-lg border-2 border-solid border-Blue gap-2"
        >
          Learn how to earn badges</a
        >
      </div>
      <!-- 
      <div class="bg-white p-5 rounded-2xl mt-4 relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Friends
          <span class="ml-2 text-Blue text-xs lg:text-lg md:text-lg sm:text-md"
            >0</span
          >
          <a
            class="text-Blue text-xs absolute right-0 mr-2 lg:text-md lg:mr-5 md:text-md md:mr-5 sm:text-sm sm:mr-5 mt-6"
            >More</a
          >
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <div class="flex">
          <div class="avatar mt-5 flex items-center">
            <div
              class="bg-Aqua mask mask-hexagon w-9 lg:w-16 md:w-16 sm:w-10 mx-auto"
            >
              <div
                class="w-7 lg:w-14 md:w-14 sm:w-8 mask mask-hexagon mx-auto mt-1"
              >
                <img
                  src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"
                />
              </div>
            </div>
            <div class="ml-5">
              <p class="font-bold text-xs lg:text-lg md:text-lg sm:text-md">
                Adent
              </p>
              <p class="mb-2 text-xs lg:text-md md:text-md sm:text-md">
                online
              </p>
            </div>
          </div>
          <button
            class="lg:p-1 lg:px-3 md:p-1 md:px-3 bg-Blue text-white text-xs rounded-md absolute mt-7 px-1 lg:mt-10 lg:mr-5 md:mt-10 md:mr-5 mr-2 right-0"
          >
            Follow
          </button>
        </div>
      </div> -->
      <div class="bg-white p-5 rounded-2xl mt-4 relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Friends
          <a
            class="text-Blue text-xs absolute right-0 mr-2 lg:text-md lg:mr-5 md:text-md md:mr-5 sm:text-sm sm:mr-5 mt-6"
            >More</a
          >
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <div class="flex mt-5 justify-center gap-2">
          <p class="text-xs lg:text-md md:text-md sm:text-sm">
            You don't have any friend
          </p>
          <img
            src="{{ asset('icon/formkit_sad.png') }}"
            alt=""
            class="w-5 h-5"
          />
        </div>
        <a
          class="flex justify-center items-center py-2 mt-5 lg:mx-12 md:mx-12 bg-white font-semibold text-Blue text-sm rounded-lg border-2 border-solid border-Blue gap-2"
        >
          Click here to find some friends</a
        >
      </div>
    </div>

    <div class="w-1/2 bg-white lg:mx-4 h-14 rounded-2xl">
      <div class="flex flex-wrap w-full">
        <a class="ml-5 mr-3 lg:mr-5 md:mr-5 flex mt-2"
          ><img
            src="{{ asset('icon/amount.png') }}"
            class="lg:w-8 lg:h-6 md:w-8 sm:w-5 w-5 mt-2 opacity-40"
            alt=""
        /></a>
        <a
          href="#"
          class="mr-3 lg:mr-5 md:mr-5 flex mt-4 text-xs lg:text-sm md:text-sm sm:text-sm text-slate-400"
          >Post</a
        >
        <a
          class="mr-3 lg:mr-5 md:mr-5 flex mt-4 text-xs lg:text-sm md:text-sm sm:text-sm font-semibold"
          >Thread</a
        >
        <a
          class="mr-3 lg:mr-5 md:mr-5 flex mt-4 text-xs lg:text-sm md:text-sm sm:text-sm text-slate-400"
          >Photos</a
        >
        <a
          class="mr-3 lg:mr-5 md:mr-5 flex mt-4 text-xs lg:text-sm md:text-sm sm:text-sm text-slate-400"
          >Videos</a
        >
      </div>

      <div class="w-full rounded-2xl">
        <img
              class="mx-auto mt-16 mb-2 w-96"
              src="{{ asset('img/nodata.png') }}"
            />
      </div>
<!-- 
      <div class="w-full bg-white mt-7 pb-3 rounded-2xl">
        <div class="flex relative">
          <div class="avatar flex items-center ml-5 mt-5">
            <div class="mask mask-circle w-7 lg:w-12 md:w-14 sm:w-8 mx-auto">
              <img src="{{ asset('icon/anime.png') }}" />
            </div>
            <div class="ml-5">
              <p
                class="font-bold text-xs lg:text-lg md:text-lg sm:text-md mt-1"
              >
                Adent
              </p>
              <p class="mb-2 text-xs lg:text-md md:text-md sm:text-md">
                09.00 AM
              </p>
            </div>
          </div>
          <a
            href="#"
            class="absolute mt-7 right-0 mr-10 lg:mr-14 md:mr-14 sm:mr-14"
          >
            <svg
              class="w-4 lg:w-6 md:w-6 sm:w-6"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="m19 21-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
            </svg>
          </a>
          <a href="#" class="absolute mt-7 right-0 mr-5">
            <svg
              class="w-4 lg:w-6 md:w-6 sm:w-6"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
              <path d="M19 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
              <path d="M5 11a1 1 0 1 0 0 2 1 1 0 1 0 0-2z"></path>
            </svg>
          </a>
        </div>

        <p
          class="text-xs lg:text-sm md:text-sm sm:text-sm font-medium mx-8 mt-2"
        >
          eat > sleep > code 😋
        </p>

        <div class="mx-5 mt-5">
        </div>

        <div class="flex relative">
          <div class="flex mt-3 ml-7">
            <a href="#">
              <svg
                class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5 lg:mt-0 md:mt-0 sm:mt-0"
                fill="none"
                stroke="#bfbfbf"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                ></path>
              </svg>
            </a>
            <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
              1.7M
            </p>
          </div>

          <div class="flex mt-3 ml-1 lg:ml-5 md:ml-5 sm:ml-3">
            <a href="#">
              <svg
                class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5"
                fill="none"
                stroke="#bfbfbf"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"
                ></path>
              </svg>
            </a>
            <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
              20
            </p>
          </div>

          <div class="flex absolute right-0 mr-7">
            <div class="flex mt-3 ml-2">
              <a href="#">
                <svg
                  class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5"
                  fill="none"
                  stroke="#bfbfbf"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                  ></path>
                </svg>
              </a>
              <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
                3.2K
              </p>
            </div>

            <div class="flex mt-3 ml-1 lg:ml-5 md:ml-5 sm:ml-3">
              <a href="#">
                <svg
                  class="w-3 lg:w-5 md:w-5 sm:w-5 mt-0.5"
                  fill="none"
                  stroke="#bfbfbf"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M18 2a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                  <path d="M6 9a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                  <path d="M18 16a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
                  <path d="m8.59 13.51 6.83 3.98"></path>
                  <path d="m15.41 6.51-6.82 3.98"></path>
                </svg>
              </a>
              <p class="text-slate-400 ml-1 text-xs lg:text-sm font-semibold">
                1K
              </p>
            </div>
          </div>
        </div>
      </div> -->

      

      <!-- pagination -->
      <!-- <div class="w-full bg-white mt-4 text-center rounded-2xl">
        <div class="join flex justify-center flex-wrap">
          <button class="join-item btn bg-white">
            <svg
              width="26"
              height="26"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 2a10 10 0 1 0 0 20 10 10 0 1 0 0-20z"></path>
              <path d="m12 8-4 4 4 4"></path>
              <path d="M16 12H8"></path>
            </svg>
          </button>
          <button class="join-item btn bg-white">1</button>
          <button class="join-item btn bg-white">2</button>
          <button class="join-item btn bg-white">3</button>
          <button class="join-item btn bg-white">...........</button>
          <button class="join-item btn bg-white">70</button>
          <button class="join-item btn bg-white">
            <svg
              width="26"
              height="26"
              fill="none"
              stroke="#bfbfbf"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 2a10 10 0 1 0 0 20 10 10 0 1 0 0-20z"></path>
              <path d="m12 16 4-4-4-4"></path>
              <path d="M8 12h8"></path>
            </svg>
          </button>
        </div>
      </div> -->
    </div>

    <div class="lg:w-1/3 w-2/5 mt-4 lg:mt-0">
      <div class="bg-white p-5 rounded-2xl relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Photos
          <span class="ml-2 text-Blue text-xs lg:text-lg md:text-lg sm:text-md"
            >0</span
          >
          <a
            class="text-Blue text-xs absolute right-0 mr-2 lg:text-md lg:mr-5 md:text-md md:mr-5 sm:text-sm sm:mr-5 mt-6"
            >More</a
          >
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <div class="flex mt-4">
          <input type="file" id="file" class="hidden" />
          <label
            for="file"
            class="text-center bg-Background font-bold text-xs h-60 w-full cursor-pointer rounded-xl border-4 border-dashed border-slate-400"
          >
            <img
              class="mx-auto mt-20 mb-2 w-8"
              src="{{ asset('icon/addphoto.png') }}"
            />Add Some Photos</label
          >
        </div>

        <!-- Content for Photos section -->
      </div>
      <div class="bg-white p-5 mt-4 rounded-2xl relative">
        <h2
          class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center"
        >
          Videos
          <span class="ml-2 text-Blue text-xs lg:text-lg md:text-lg sm:text-md"
            >0</span
          >
          <a
            class="text-Blue text-xs absolute right-0 mr-2 lg:text-md lg:mr-5 md:text-md md:mr-5 sm:text-sm sm:mr-5 mt-6"
            >More</a
          >
        </h2>
        <hr class="h-0.5 bg-slate-400" />
        <div class="flex mt-4">
          <input type="file" id="file" class="hidden" />
          <label
            for="file"
            class="text-center bg-Background font-bold text-xs h-60 w-full cursor-pointer rounded-xl border-4 border-dashed border-slate-400"
          >
            <img
              class="mx-auto mt-20 mb-2 w-8"
              src="{{ asset('icon/addvideo.png') }}"
            />Add Some Videos</label
          >
        </div>

        <!-- Content for Photos section -->
      </div>
    </div>
  </div>
</div>

@include('components.footer')
