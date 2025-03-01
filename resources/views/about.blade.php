<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
<!-- Hero Section with Gradient Overlay and "About Us" Heading -->







    <!-- About Us Content Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Left Side: Image -->
                <div class="flex justify-center">
                    <img src="{{ asset('/assets/image/about-us.jpeg') }}" alt="About Us" class="rounded-lg shadow-lg w-full max-w-md">
                </div>

                <!-- Right Side: Content -->
                <div class="space-y-6">
                    <!-- Paragraph 1 -->
                    <p class="text-lg text-gray-600">
                        As a Web Development Services, We are Committed to Building Custom Web Solutions that Drive Business Success.
                    </p>

                    <!-- Paragraph 2 -->
                    <p class="text-lg text-gray-600">
                        At our web development agency, we specialize in crafting bespoke online solutions tailored to elevate businesses toward their digital objectives.
                    </p>

                    <!-- Paragraph 3 -->
                    <p class="text-lg text-gray-600">
                        Our ethos is rooted in equipping clients with the essential tools for triumph in the digital realm. Committed to continuous evolution, we remain abreast of cutting-edge web technologies and trends, ensuring a constant delivery of unparalleled excellence.
                    </p>

                    <!-- Paragraph 4 -->
                    <p class="text-lg text-gray-600">
                        We firmly believe in furnishing every business with a digital presence that authentically embodies their brand essence and effectively resonates with their target demographic.
                    </p>

                    <!-- Button -->
                    <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Section (Optional) -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Why Choose Us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Expert Team</h3>
                    <p class="text-gray-600">Our team of experts is dedicated to delivering high-quality web solutions tailored to your needs.</p>
                </div>
                <!-- Feature 2 -->
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Cutting-Edge Technology</h3>
                    <p class="text-gray-600">We use the latest technologies to ensure your digital presence is modern and efficient.</p>
                </div>
                <!-- Feature 3 -->
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Customer-Centric Approach</h3>
                    <p class="text-gray-600">Your success is our priority. We work closely with you to achieve your business goals.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
