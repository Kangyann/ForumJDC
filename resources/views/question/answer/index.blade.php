@extends('index') @section('answer')
<link
  href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css"
  rel="stylesheet"
/>
<div class="container">
  <div class="flex justify-center flex-wrap mt-6 -mx-3 scroll-behavior">
    <!-- quest -->
    <div class="w-full pb-5 px-3 mt-5 lg:mt-0 mb-6 lg:mb-0 lg:flex-none">
      <div
        class="flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="flex-auto px-4 pb-4">
          <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
              <div class="flex flex-col h-full">
                <div class="avatar flex items-center">
                  <div class="mask mask-circle w-10 lg:w-14 md:w-14 sm:w-8">
                    <img src="{{ asset('icon/anime.png') }}" />
                  </div>
                  <div class="flex flex-col gap-2">
                    <h5 class="font-bold mt-4 ml-5 h-4">Adent</h5>
                    <span class="text-xs ml-5">10.00</span>
                  </div>
                </div>
                <p class="mb-1 font-semibold">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, laudantium?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-between items-center">
        <p class="mt-5 font-bold text-xl">2 Answer</p>
        <a
          class="bg-Blue text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1"
          href="#youranswer"
        >
          Your Answer
        </a>
      </div>
      <!-- answer -->
      <!-- 1 -->
      <div
        class="mt-5 flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="flex-auto px-4 pb-4">
          <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
              <div class="flex flex-col h-full">
                <div class="avatar flex items-center">
                  <div class="mask mask-circle w-10 lg:w-14 md:w-14 sm:w-8">
                    <img src="{{ asset('icon/anime.png') }}" />
                  </div>
                  <div class="flex flex-col gap-2">
                    <h5 class="font-bold mt-4 ml-5 h-4">Adent</h5>
                    <span class="text-xs ml-5">10.00</span>
                  </div>
                </div>
                <p class="mb-1 font-semibold">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, laudantium
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- 2 -->
      <div
        class="mt-2 flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border"
      >
        <div class="flex-auto px-4 pb-4">
          <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
              <div class="flex flex-col h-full">
                <div class="avatar flex items-center">
                  <div class="mask mask-circle w-10 lg:w-14 md:w-14 sm:w-8">
                    <img src="{{ asset('icon/anime.png') }}" />
                  </div>
                  <div class="flex flex-col gap-2">
                    <h5 class="font-bold mt-4 ml-5 h-4">Adent</h5>
                    <span class="text-xs ml-5">10.00</span>
                  </div>
                </div>
                <p class="mb-1 font-semibold">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Similique, laudantium
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="w-full mt-4 max-w-full lg:flex-none" id="youranswer">
        <div
          class="shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4"
        >
          <div class="relative h-full overflow-hidden bg-cover rounded-xl">
            <div class="bg-white p-5 rounded-2xl relative">
              <h2
                class="text-md lg:text-xl md:text-xl sm:text-md font-bold mb-4 flex items-center justify-center"
              >
                Your Answer
              </h2>
              <hr class="h-0.5 bg-slate-400" />
              <form role="form text-left" id="editor"></form>
              <div class="flex justify-end gap-2 mt-5">
                <button
                  class="bg-Blue text-white rounded-xl lg:px-10 md:px-7 sm:px-5 px-4 py-1"
                >
                  Answer
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  const quill = new Quill("#editor", {
    theme: "snow",
  });
</script>

@endsection
