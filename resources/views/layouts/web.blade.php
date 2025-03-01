

<!DOCTYPE html>
 <html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarbonCureSolution</title>
    <meta name="description" content="Get started with a free landing page built with Tailwind CSS and the Flowbite Blocks system.">
    <link href="./output.css" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        @keyframes slide {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
        .animate-slide {
            animation: slide 20s linear infinite;
        }
    </style>


</head>
<body>


    <livewire:frontend.components.navbar />



    @yield('body-section')




   <livewire:frontend.components.footer />


    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>


