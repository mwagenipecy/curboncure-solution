<div>
    <section class="relative w-full h-[500px] md:h-[600px] lg:h-[700px] overflow-hidden">
        <!-- Background Image with Continuous Sliding Animation -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat animate-slide" style="background-image: url('{{ asset('/assets/image/welcome.png') }}');"></div>

        <!-- Gradient Overlay from Left to Near Right -->
        <div class="absolute inset-0 bg-gradient-to-r from-black via-black/70 to-transparent"></div>

        <!-- Content Container -->
        <div class="relative grid py-8 px-4 items-center mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <!-- Left Side: Text & Button -->
            <div class="place-self-center  mt-32 items-center text-white mr-auto lg:col-span-5 z-10">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl">
                    Carbon Cure Solution
                </h1>
                <p class="mb-6 max-w-2xl font-light text-gray-300 lg:mb-8 md:text-lg lg:text-xl">
                    Transforming carbon emissions into sustainable construction materials for a greener, more eco-friendly future                </p>
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                    Get started
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Transparent Cards for Metrics -->
        <div class="absolute   bottom-8 left-1/2 transform -translate-x-1/2 flex gap-4 z-10">
            <!-- Card 1 -->
            <div class="bg-black/10 backdrop-blur-sm rounded-lg p-4 text-white text-center w-[250px]">
                <p class="text-lg font-bold">50+</p>
                <p class="text-sm">Customers</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-black/10 backdrop-blur-sm rounded-lg p-4 text-white text-center  w-[250px]">
                <p class="text-lg font-bold">95%</p>
                <p class="text-sm">Success Rate</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-black/10 backdrop-blur-sm rounded-lg p-4 text-white text-center  w-[250px]">
                <p class="text-lg font-bold">24/7</p>
                <p class="text-sm">Support</p>
            </div>
        </div>


    </section>

</div>
