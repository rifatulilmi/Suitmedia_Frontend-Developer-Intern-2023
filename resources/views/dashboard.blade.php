<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!-- CSS -->
    @vite('resources/css/css/dashboard.css')

    <title>SUITMEDIA</title>
</head>

<body id="dashboard">
    <!-- Navbar -->
    <class="min-h-screen">
        <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
            <div id="header" class="w-full text-gray-700 bg-ff6600 dark-mode:text-gray-200 dark-mode:bg-gray-800 fixed-header">
                <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="flex flex-row items-center justify-between">
                        <a href="#" class="text-lg font-semibold text-white tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                            SuitMedia
                        </a>
                        <button class="rounded-lg md:hidden text-white focus:outline-none focus:shadow-outline" x-bind:class="{'text-white': !open, 'text-black': open}" @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                        <a class="px-2 mt-3 text-lg bg-transparent rounded-lg text-white dark-mode:bg-transparent dark-mode:text-gray-200 md:mt-0 md:ml-4 menu-item hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Work</a>
                        <a class="px-2 mt-3 text-lg bg-transparent rounded-lg text-white dark-mode:bg-transparent dark-mode:text-gray-200 md:mt-0 md:ml-4 menu-item hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>
                        <a class="px-2 mt-3 text-lg bg-transparent rounded-lg text-white dark-mode:bg-transparent dark-mode:text-gray-200 md:mt-0 md:ml-4 menu-item hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Services</a>
                        <a class="px-2 mt-3 text-lg bg-transparent rounded-lg text-white dark-mode:bg-transparent dark-mode:text-gray-200 md:mt-0 md:ml-4 menu-item hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Ideas</a>
                        <a class="px-2 mt-3 text-lg bg-transparent rounded-lg text-white dark-mode:bg-transparent dark-mode:text-gray-200 md:mt-0 md:ml-4 menu-item hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Careers</a>
                        <a class="px-2 mt-3 text-lg bg-transparent rounded-lg text-white dark-mode:bg-transparent dark-mode:text-gray-200 md:mt-0 md:ml-4 menu-item hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a>
                    </nav>

                </div>
            </div>
        </div>

        <!-- Banner -->
        <div id="parallax-container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ url('images/banner.jpg') }}" class="parallax-bg d-block w-100" alt="banner_suitmedia">
                        <div class="carousel-caption">
                            <h1>Ideas</h1>
                            <p>Where all our great things begin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Category Filters -->
        <div class="bg-white">
            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-end pb-6 pt-4">
                    <div class="flex items-center">
                        <div class="relative inline-block px-4 text-left">
                            <div>
                                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="sort-button" aria-expanded="false" aria-haspopup="true">
                                    Show per page
                                    <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <!-- Sort Pop-up element -->
                            <div id="sort-popup" class="popup">
                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm" data-sort=" ">10</a>
                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm" data-sort=" ">20</a>
                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm" data-sort=" ">50</a>
                            </div>
                        </div>

                        <div class="relative inline-block px-4 text-left">
                            <div>
                                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="filter-button" aria-expanded="false" aria-haspopup="true">
                                    Sort by
                                    <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <!-- Filter Pop-up element -->
                            <div id="filter-popup" class="popup">
                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm" data-sort=" ">Newest</a>
                                <a href="#" class="text-gray-500 block px-4 py-2 text-sm" data-sort=" ">Oldest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- Card -->
        <div class="p-5" id="app">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ url('images/photo.jpg') }}" class="card-img-top" alt="photo" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-date mt-3" style="font-weight: 600; color: #BDBDBD;">
                                    5 SEPTEMBER 2023
                                </h5>
                                <p class="card-title text-lg">
                                    Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ url('images/photo1.jpg') }}" class="card-img-top" alt="photo" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-date mt-3" style="font-weight: 600; color: #BDBDBD;">
                                    5 SEPTEMBER 2023
                                </h5>
                                <p class="card-title text-lg">
                                    Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
            <div class="flex flex-1 justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium">1</span>
                        to
                        <span class="font-medium">10</span>
                        of
                        <span class="font-medium">97</span>
                        results
                    </p>
                </div>
                <div>
                    <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                        <a href="{{ route('dashboard') }}" aria-current="page" class="relative z-10 inline-flex items-center bg-orange-500 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                        <a href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </a>

                    </nav>
                </div>
            </div>
        </div>



        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>

        <!-- Script -->
        <script>
            // Navbar
            let prevScrollPos = window.pageYOffset;
            const header = document.getElementById("header");

            window.onscroll = function() {
                const currentScrollPos = window.pageYOffset;

                if (prevScrollPos > currentScrollPos) {
                    // Scrolling up
                    header.classList.remove("transparent");
                } else {
                    // Scrolling down
                    header.classList.add("transparent");
                }

                prevScrollPos = currentScrollPos;
            };

            //Banner Parallax
            document.addEventListener('DOMContentLoaded', function() {
                const parallaxBg = document.querySelector('.parallax-bg');

                window.addEventListener('scroll', function() {
                    let scrollPosition = window.pageYOffset;
                    parallaxBg.style.transform = 'translateY(' + scrollPosition * 0.4 + 'px)';
                });
            });

            //filter
            document.addEventListener('DOMContentLoaded', function() {
                const sortButton = document.getElementById('sort-button');
                const filterButton = document.getElementById('filter-button');
                const sortPopup = document.getElementById('sort-popup');
                const filterPopup = document.getElementById('filter-popup');

                sortButton.addEventListener('click', function() {
                    // Toggle the visibility of the sort pop-up
                    if (sortPopup.style.display === 'none' || sortPopup.style.display === '') {
                        sortPopup.style.display = 'block';
                    } else {
                        sortPopup.style.display = 'none';
                    }

                    // Close the filter pop-up
                    filterPopup.style.display = 'none';
                });

                filterButton.addEventListener('click', function() {
                    // Toggle the visibility of the filter pop-up
                    if (filterPopup.style.display === 'none' || filterPopup.style.display === '') {
                        filterPopup.style.display = 'block';
                    } else {
                        filterPopup.style.display = 'none';
                    }

                    // Close the sort pop-up
                    sortPopup.style.display = 'none';
                });

                // Close the pop-ups when clicking outside of them
                document.addEventListener('click', function(event) {
                    if (!sortButton.contains(event.target) && !sortPopup.contains(event.target)) {
                        sortPopup.style.display = 'none';
                    }

                    if (!filterButton.contains(event.target) && !filterPopup.contains(event.target)) {
                        filterPopup.style.display = 'none';
                    }
                });
            });

            //
            
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>