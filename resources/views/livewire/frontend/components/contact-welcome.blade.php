<div>
    <section class="relative h-[535px] flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat h-[535px]"
            style="background-image: url('{{ asset("/assets/image/about-us.jpeg") }}');">
        </div>

        <!-- Left to Right Gradient Overlay (Same Height as Section) -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent h-[535px]"></div>

        <!-- Content -->
        <div class="relative z-10 w-full h-[535px] flex items-center">
            <div class="container mx-auto px-6">
                <div class="max-w-2xl">
                    {{-- <span class="text-white uppercase text-sm tracking-widest">EXPLORE THE FEATURES</span> --}}
                    <h1 class="text-6xl font-bold text-white mt-3"><span>Contact Us</span></h1>
                    <p class="text-lg text-white mt-4">Etiam scelerisque tortor at lectus dapibus, nec fermentum diam feugiat.</p>
                </div>
            </div>
        </div>
    </section>
</div>
