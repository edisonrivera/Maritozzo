<!-- AlpineJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.8.1/cdn.min.js" defer></script>

<!-- Slider Component Container -->
<div class="flex flex-col items-center justify-center mt-32 font-mono" x-cloak x-data="appData()" x-init="appInit()">
    <div class="flex flex-col">
        <!-- Page Scroll Progress -->
        <div class="fixed inset-x-0 top-0 z-50 h-0.5 mt-0.5
            bg-blue-500" :style="`width: ${percent}%`"></div>

        <!-- Navbar -->
        <nav class="flex justify-around py-4 bg-white/80
            backdrop-blur-md shadow-md w-full
            fixed top-0 left-0 right-0 z-10">

            <!-- Logo Container -->
            <div class="flex items-center">
                <!-- Logo -->
                <a class="cursor-pointer">
                    <h3 class="text-2xl font-medium text-blue-500">
                        <img class="h-auto object-cover w-64"
                            src="{{asset('/storage/navbar-logo.svg')}}" alt="Store Logo">
                    </h3>
                </a>
            </div>

            <!-- Links Section -->
            <div class="items-center hidden space-x-8 lg:flex text-xl">
                <a class="flex text-gray-600 font-bold hover:text-blue-500
                    cursor-pointer transition-colors duration-300" href="{{route('home')}}">
                    Home
                </a>

                <a class="flex text-gray-600 font-bold hover:text-blue-500
                cursor-pointer transition-colors duration-300">
                    Menu
                </a>

                <a class="flex text-gray-600 font-bold hover:text-blue-500
                    cursor-pointer transition-colors duration-300">
                    Contáctanos
                </a>

                <a class="flex text-gray-600 font-bold hover:text-blue-500
                    cursor-pointer transition-colors duration-300">
                    Reseñas
                </a>

                <a class="flex text-gray-600 font-bold hover:text-blue-500
                    cursor-pointer transition-colors duration-300" href="{{route('about')}}">
                    Nosotros
                </a>
            </div>

            <!-- Icon Menu Section -->
            <div class="flex items-center space-x-5">
                <!-- Register -->
                <a class="flex text-gray-600 hover:text-blue-500
                    cursor-pointer transition-colors duration-300 mt-1">

                    <svg width="22px" height="22px" viewBox="0 -2.72 54.624 54.624" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" stroke-width="0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_iconCarrier"> <g id="Group_38" data-name="Group 38" transform="translate(-150.273 -1577.233)"> <path id="Path_98" data-name="Path 98" d="M159.723,1596.869v13.651h32.746l6.107-13.651Z" fill="#d1d3d4"></path> <path id="Path_99" data-name="Path 99" d="M152.273,1579.233h7.683v31.286h32.513l10.428-23.312h-39.26" fill="none" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path> <path id="Path_100" data-name="Path 100" d="M167.668,1620.451a3.972,3.972,0,1,1-3.973-3.973A3.972,3.972,0,0,1,167.668,1620.451Z" fill="#ffffff" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path> <path id="Path_101" data-name="Path 101" d="M187.532,1620.451a3.973,3.973,0,1,1-3.972-3.973A3.972,3.972,0,0,1,187.532,1620.451Z" fill="#ffffff" stroke="#231f20" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path> </g> </g></svg>
                    Pedidos
                </a>

                <!-- Login -->
                <a class="flex text-gray-600 
                    cursor-pointer transition-colors duration-300
                    font-semibold text-red-600" href="{{route('logout')}}">

                    <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                    </svg>
                    Salir
                </a>
            </div>
        </nav>
    </div>
</div>
<script>
    const appData = () => {
        return {
            percent: 0,

            appInit() {
                // source: https://codepen.io/A_kamel/pen/qBmmGKJ
                window.addEventListener('scroll', () => {
                    let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
                        height = document.documentElement.scrollHeight - document.documentElement.clientHeight;

                    this.percent = Math.round((winScroll / height) * 100);
                });
            },
        };
    };
</script>