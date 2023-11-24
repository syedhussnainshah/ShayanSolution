<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Shayan Solutionsss</title>
    <link rel="icon" href="https://test-shayansolution.syedhussnainshah.tech/images/icon-logo.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('js/owl/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/owl/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/fontawesome-free-6.4.2-web/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('fontawesome/fontawesome-free-6.4.2-web/css/fontawesome.min.css') }}"> --}}

    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body>
    <div style="overflow: hidden">
        @inertia
        {{-- <p>Current Route Name: {{ Route::currentRouteName() }}</p>
        <p>Current Route URL: {{ url()->current() }}</p> --}}
    </div>
    <script src="{{ asset('fontawesome/fontawesome-free-6.4.2-web/js/all.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/owl/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    @if (Route::currentRouteName() == 'home')
        <script>
            $(document).ready(function() {
                function setCarousel() {
                    const windowWidth = $(window).width();
                    let items = 2; // Default number of items to display

                    if (windowWidth < 1200) {
                        items = 1.5; // Change the number of items on smaller screens
                    }

                    if (windowWidth < 794) {
                        items = 1; // Change the number of items on smaller screens
                    }
                    if (windowWidth < 320) {
                        items = 1;
                    }
                    // Destroy the existing Owl Carousel
                    $(".owl-carousel").owlCarousel('destroy');

                    // Reinitialize the Owl Carousel with the updated configuration
                    $(".owl-carousel").owlCarousel({
                        items: items,
                        loop: true,
                    });
                }

                // Initialize the carousel
                setCarousel();

                // Handle window resize to adjust the carousel
                $(window).resize(function() {
                    const windowWidth = $(window).width();
                    if (windowWidth > 600) {
                        setCarousel();
                    } else {}
                });

                // Initialize the manual next/prev buttons
                $(".owl-next").click(function() {
                    $(".owl-carousel").trigger("next.owl.carousel");
                });

                $(".owl-prev").click(function() {
                    $(".owl-carousel").trigger("prev.owl.carousel");
                });
            });
        </script>
    @endif
    @if (Route::currentRouteName() == 'blog' || Route::currentRouteName() == 'blog.detail')
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel({
                    items: 6, // Number of items to display
                    autoplay: true, // Enable autoplay
                    autoplayTimeout: 3000, // Set autoplayTimeout to 0 to disable the interval
                    autoplayHoverPause: false, // Disable pause on hover
                    loop: true, // Infinite loop
                    autoplaySpeed: 3000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        455: {
                            items: 2 // Change to 2 items on screens smaller than 600px
                        },

                        700: {
                            items: 3 // Change to 3 items on screens between 600px and 991px
                        },
                        935: {
                            items: 4 // Change to 3 items on screens between 600px and 991px
                        },
                        1150: {
                            items: 5 // Change to 4 items on screens between 600px and 991px
                        },
                        1400: {
                            items: 6 // Back to 6 items on screens larger than 992px
                        }
                    }
                });
            });
        </script>
    @endif
    @if (Route::currentRouteName() == 'project.detail')
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel({
                    items: 6, // Number of items to display
                    autoplay: true, // Enable autoplay
                    autoplayTimeout: 3000, // Set autoplayTimeout to 0 to disable the interval
                    autoplayHoverPause: false, // Disable pause on hover
                    loop: true, // Infinite loop
                    autoplaySpeed: 3000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        455: {
                            items: 2 // Change to 2 items on screens smaller than 600px
                        },

                        700: {
                            items: 2 // Change to 3 items on screens between 600px and 991px
                        },
                        935: {
                            items: 2 // Change to 3 items on screens between 600px and 991px
                        },
                        1150: {
                            items: 3 // Change to 4 items on screens between 600px and 991px
                        },
                        1400: {
                            items: 3 // Back to 6 items on screens larger than 992px
                        }
                    }
                });
            });
        </script>
    @endif
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the current page's URL
            var currentUrl = window.location.pathname;

            // Get all the navigation links
            var navLinks = document.querySelectorAll("#navbar a.nav-link");

            // Loop through the links and add the "active" class to the one that matches the current URL
            for (var i = 0; i < navLinks.length; i++) {
                if (navLinks[i].getAttribute("href") === currentUrl) {
                    navLinks[i].classList.add("active");
                } else {
                    navLinks[i].classList.remove("active");
                }
            }
        });
    </script>

</body>

</html>
