
@extends('layout.app', ['title' => 'Aboute'])

@section('blade_css')
  <style>
    .taps{
      max-width: 1000px;
    }
    .taps li button{
      border: 2px solid #be1c25;
      border-radius: 30px;
      font-size: 1.1rem;
      font-weight: bold
    }
    .taps .d-flex{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;

    }
    .taps li{
      padding: 0 15px;
      
    }
  </style>
@endsection

@section('content')
  <section class="hero">
   <img src="https://www.foodpanda.com/wp-content/uploads/2023/02/about-foodpanda-1920x539.jpeg" alt="">
    <div class="title">
      <div class="about_title">
        <h2 data-aos="fade-right" class="leading-normal md:text-5xl text-3xl">About <br>
            foodpanda</h2>
        </div>
    </div>
  </section>


  <section data-aos="fade-right" class="section__text lg:px-4 max-w-screen-xl mx-auto md:py-8 pt-4 md:pt-0 md:my-0 w-full">
    <div class="content-width md:py-16 md:flex md:items-center justify-between">
        <div class="md:w-2/3 md:pr-8 lg:pr-16 mt-8 md:mt-0 order-1 flex flex-col items-start justify-center  md:order-0 ">
            <aside class=" p-4 md:p-0">
                <h2 class="md:text-5xl mb-4 text-3xl font-bold md:my-12">
                    From food delivery to your daily convenience companion.    </h2>
                    <p>A subsidiary of Delivery Hero, foodpanda launched in Singapore in 2014 as a food delivery platform.  Dedicated to helping customers get their tasty favourites fast, it quickly won the hearts and minds of customers in APAC.</p>
                    <p>Powered by tech and operational excellence, foodpanda has been growing its quick-commerce footprint in more than 400 cities across 11 markets in Asia – Singapore, Hong Kong, Thailand, Malaysia, Pakistan, Taiwan, Philippines, Bangladesh, Laos, Cambodia, and Myanmar. </p>
                    <p>Thanks to dedicated partners, riders, and a team united by shared values,  foodpanda is now providing millions with a convenient way to get food and groceries in a few taps.</p>
            </aside>
        </div>
    </div>
  </section>

  <section class=" about-carousel max-w-screen-xl md:mx-auto md:py-8 md:my-10 lg:px-4 px-4">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative overflow-hidden rounded-lg md:h-auto min-h-96">
           <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <a href="#" class="absolute block w-full grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
              <div class=" md:px-0 md:order-none lg:order-none order-2">
                  <h2 class="mb-2  md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white  text-3xl">Noteworthy technology acquisitions 2021</h2>
                  <p class="md:my-6 font-normal text-gray-700 dark:text-gray-400">What makes quick commerce quick? We stand for swift personalised delivery solutions for our customers, partners and employees. Learn how we empower authentic lifestyles and drive innovation across the globe.</p>
              </div>
              <img class="md:order-none lg:order-none order-1 object-cover w-full rounded-t-lg md:h-96 h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg" alt="">
            </a>
              {{-- <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
          </div>
          
          

      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-30 md:top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
              <span class="sr-only">Previous</span>
          </span>
      </button>
      <button type="button" class="absolute top-30 md:top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
              <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="sr-only">Next</span>
          </span>
      </button>
    </div>
  </section>

  <section data-aos="fade-down" class="section__text taps md:mt-16 max-w-screen-xl md:mx-auto md:py-6 ">
    <div class="w-full">
      <span class="text-center w-full">
        <h2 class="text-5xl my-10 mb-12"> Our values </h2>
      </span>
    </div>

    <div class="w-full inline-flex items-center justify-between">
      <ul class="d-flex mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
          <li class="me-2 mb-4" role="presentation">
              <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 " id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">start with customer, end with customer</button>
          </li>
          <li class="me-2 mb-4" role="presentation">
              <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">prioritise, decide, deliver</button>
          </li>
          <li class="me-2 mb-4" role="presentation">
              <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">own it end-to-end</button>
          </li>
          <li class="me-2 mb-4" role="presentation">
              <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">challenge the status quo</button>
          </li>
          <li class="me-2 mb-5" role="presentation">
              <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">we before me</button>
          </li>
          <li class="me-2 mb-5" role="presentation">
              <button class="inline-block text-red-700 hover:text-white hover:bg-red-800  focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:text-white font-medium rounded-xl text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600" id="contacts-styled-tab" data-tabs-target="#styled-contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">plan for tomorrow, focus on today</button>
          </li>
      </ul>
    </div>

    <div id="default-styled-tab-content">
      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
      
        <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2024/06/05_we-before-me__500x500.webp" alt="">
          <div class="flex items-center">
            <div>
              <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white  text-3xl">we before me</h2>
              <p class="my-6 font-normal text-gray-700 dark:text-gray-400">Although we can make a difference individually, we will go further, accomplish more and touch more lives if we do it as one team and one organisation working towards our common goals.</p>
            </div>
          </div>
        </div>
      
      </div>

      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2024/06/05_we-before-me__500x500.webp" alt="">
          <div class="flex items-center">
            <div>
              <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white text-3xl">we before me</h2>
              <p class="my-6 font-normal text-gray-700 dark:text-gray-400">Although we can make a difference individually, we will go further, accomplish more and touch more lives if we do it as one team and one organisation working towards our common goals.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
         
        <div class=" grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <img class="object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2024/06/04_challenge-the-status-quo__500x500.webp" alt="">
          <div class="flex items-center">
            <div>
              <h2 class="mb-2 md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white  text-3xl">we before me</h2>
              <p class="my-6 font-normal text-gray-700 dark:text-gray-400">Although we can make a difference individually, we will go further, accomplish more and touch more lives if we do it as one team and one organisation working towards our common goals.</p>
            </div>
          </div>
        </div>

      </div>

      <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel" aria-labelledby="contacts-tab">
          <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
      </div>
    </div>  

  </section>

  <section class="section__text card-bottom max-w-screen-xl md:px-0 mx-auto md:py-8 my-10 px-4 lg:px-4">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 bg-white border-gray-200  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
      <div data-aos="fade-right" class="md:order-none lg:order-none order-2">
          <h2 class="mb-2  md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white  text-3xl">Noteworthy technology acquisitions 2021</h2>
          <p class="my-6 font-normal text-gray-700 dark:text-gray-400">What makes quick commerce quick? We stand for swift personalised delivery solutions for our customers, partners and employees. Learn how we empower authentic lifestyles and drive innovation across the globe.</p>
          <button type="button" class="my-6 focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Read our story</button>
      </div>
      <img data-aos="fade-left" class="md:order-none lg:order-none order-1 object-cover w-full rounded-t-lg h-96 md:h-auto  " src="https://www.foodpanda.com/wp-content/uploads/2023/02/foodpanda-home-2-1024x576.jpg" alt="">
    </div>
  </section>
@endsection