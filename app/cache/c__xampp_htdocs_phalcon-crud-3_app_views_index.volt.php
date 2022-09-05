<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moonton</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>

    <script src="<?= $this->url->get('assets/script/tailwind-config.js') ?>"></script>

    <style type="text/tailwindcss">
        .flex::before,
        .flex::after {
            display: none !important;
        }

        @layer components{
            .side-link{
                @apply flex items-center font-normal text-black text-sm w-full mb-5 gap-3 transition-all;
            }

            .side-link svg{
                @apply text-[#B7B7B7];
            }
            .side-link.active{
                @apply font-semibold border-r-[3px] border-alerange;
            }

            .side-link.active svg{
                @apply text-alerange;
            }

            input.top-search{
                @apply rounded-full border border-gray-2 placeholder:text-gray-1 text-base text-gray-1 px-5 py-[11px]
                w-full max-w-[570px] focus:outline-none focus:ring-2 transition-all bg-no-repeat bg-center
                bg-[center_right_20px];
            }
        }
    </style>
</head>

<body class="font-poppins">
    <!-- Desktop Only -->
    <div class="mx-auto max-w-screen hidden lg:block">
        <!-- START: Sidebar -->
        <aside class="fixed z-50 w-[300px] h-full">

            <div class="flex flex-col p-[30px] pr-0 border-r border-gray-[#F1F1F1] overflow-y-auto h-full">
                <a href="https://www.instagram.com/rennn.ar/">
                    <img src="assets/images/moonton.svg" alt="">
                </a>
                <div class="links flex flex-col mt-[60px] h-full gap-[50px]">

                    <!-- Menu -->
                    <div>
                        <div class="text-gray-1 text-sm mb-4">Menu</div>
                        <a href="siswa" class="side-link active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="Iconly/Bulk/Home">
                                    <g id="Home">
                                        <path id="Home_2"
                                            d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V17.7152V20.7732C14.8563 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" />
                                    </g>
                                </g>
                            </svg>
                            Home
                        </a>
                    </div>  
                    <!-- ./Menu -->
                </div>
            </div>
        </aside>
        <!-- END: Sidebar -->

        <!-- START: Content -->
        <div class="ml-[300px] px-[50px]">
            <div class="py-10 flex flex-col gap-[50px]">
                <!-- Topbar -->
                <div class="flex justify-between items-center">
                    <input type="text" class="top-search" placeholder="Example search data"
                        style="background-image: assets/icons/ic_search.svg" />
                    <div class="flex items-center gap-4">
                        <span class="text-black text-sm font-medium">Welcome, Rendy Afriatama</span>
                        <!-- user avatar -->
                        <div class="collapsible-dropdown flex flex-col gap-2 relative">
                            <a href="https://www.instagram.com/rennn.ar/"
                                class="outline outline-2 outline-gray-2 p-[5px] rounded-full w-[60px] dropdown-button"
                                data-target="#dropdown-button">
                                <img src="https://i.pinimg.com/564x/32/0e/d3/320ed3142ddf441bdb820c3d0411477d.jpg" class="rounded-full object-cover w-full" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table page -->

            <?= $this->getContent() ?>

            <!-- END Table page -->
            
            
        </div>
        <!-- END: Content -->
    </div>


    
    <div class="mx-auto px-4 w-full h-screen lg:hidden flex bg-black">
        <div class="text-white text-2xl text-center leading-snug font-medium my-auto">
            Sorry, this page only supported on 1024px screen or above
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/script/script.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.__scroll-selector').removeClass('hidden').flickity({
                "cellAlign": "left",
                "contain": true,
                "groupCells": 1,
                "wrapAround": false,
                "pageDots": false,
                "prevNextButtons": false,
                "draggable": ">1"
            });
        })
    </script>
</body>

</html>