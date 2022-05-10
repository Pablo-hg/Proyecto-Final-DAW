@extends('layouts.app')

@section('content')
    @php $texto=""; @endphp
    <!--1ºPARTE-->
    <div class="container">
        <!--CARUSEL-->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="210" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="red"></rect>
                        <text x="50%" y="50%" fill="#555" dy=".3em">First slide</text>
                    </svg>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="210" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="brown"></rect>
                        <text x="50%" y="50%" fill="#555" dy=".3em">Second slide</text>
                    </svg>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="210" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="blue"></rect>
                        <text x="50%" y="50%" fill="#555" dy=".3em">Third slide</text>
                    </svg>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="heading-section mb-5 pb-md-4">Carousel #02</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="featured-carousel owl-carousel">
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(http://35.181.8.108/proyecto-final-daw/public/img/work-1.png);">
                                        <a href="#" class="icon d-flex align-items-center justify-content-center">
                                            <span class="ion-ios-search"></span>
                                        </a>
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="#">I code the front-end and the tools that support it.</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(http://35.181.8.108/proyecto-final-daw/public/img/work-2.png);">
                                        <a href="#" class="icon d-flex align-items-center justify-content-center">
                                            <span class="ion-ios-search"></span>
                                        </a>
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="#">Work 02</a></h3>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(http://35.181.8.108/proyecto-final-daw/public/img/work-3.jpg);">
                                        <a href="#" class="icon d-flex align-items-center justify-content-center">
                                            <span class="ion-ios-search"></span>
                                        </a>
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="#">Work 03</a></h3>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(http://35.181.8.108/proyecto-final-daw/public/img/work-4.jpg);">
                                        <a href="#" class="icon d-flex align-items-center justify-content-center">
                                            <span class="ion-ios-search"></span>
                                        </a>
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="#">Work 04</a></h3>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(http://35.181.8.108/proyecto-final-daw/public/img/work-5.jpg);">
                                        <a href="#" class="icon d-flex align-items-center justify-content-center">
                                            <span class="ion-ios-search"></span>
                                        </a>
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="#">Work 05</a></h3>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(http://35.181.8.108/proyecto-final-daw/public/img/work-6.jpg);">
                                        <a href="#" class="icon d-flex align-items-center justify-content-center">
                                            <span class="ion-ios-search"></span>
                                        </a>
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="#">Work 06</a></h3>
                                        <span>Web Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--BOTON LEARN MORE-->
        <div class="row justify-content-center py-5">
            <div class="col-lg-2">
                <a href="#" class="bt-learn fs-4 py-2 px-4">Learn more</a>
            </div>
        </div>
    </div>
    <!--2ºPARTE-->
    <div class="container2">
        <div class="position-relative d-flex flex-column">
            <!--PRESENTACION-->
            <div class="container-fluid text-white presentacion ">
                <!--SALUDO-->
                <div class="row justify-content-center pt-4 pb-3 mt-5 ">
                    <h2 class="fs-2">Hi, I’m Pablo. Nice to meet you.</h2>
                </div>
                <!--DESCRIPCION-->
                <div class="row justify-content-center descripcion mb-3">
                    <div class="fs-5 col-lg-5">
                        I’m a junior Front-End and Back-End Developer located in Madrid.
                        I’ve always been someonewho is a serius passion for code and develop webs, applications and games.
                        The very first time I stepped into the programming world in college, I came to realize this was my cup of tea.
                        I consider myself a nice, funny person.
                    </div>
                </div>
            </div>
            <!--TABLA DE CONOCIMINETOS-->
            <div class="row position-absolute tabla container">
                <!--FRONT-END-->
                <div class="col-lg-4 conocimientos front bg-white">
                    <svg class="my-4" width="76" height="73" viewBox="0 0 76 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M72.381 67.5122C72.381 68.5251 71.5613 69.35 70.5642 69.35H5.43584C4.42974 69.35 3.61908 68.5324 3.61908 67.5122V27.375V20.075V18.25H9.04765H19.9048H25.3334H30.7619H53.4896H72.381V27.375V67.5122ZM5.43584 3.65H9.04765H19.9048H25.3334H30.7619H70.5642C71.5649 3.65 72.3719 4.46212 72.3792 5.475C72.3792 5.47865 72.381 5.4823 72.381 5.48778V14.6H30.7619H25.3334H19.9048H9.04765H3.61908V5.48778C3.61908 5.4823 3.62089 5.47865 3.62089 5.475C3.62813 4.46942 4.44241 3.65 5.43584 3.65ZM70.5642 0C73.5626 0 75.991 2.44367 75.9982 5.475C75.9982 5.47865 76 5.48413 76 5.48778V67.5122C76 70.5436 73.5572 73 70.5642 73H5.43584C2.43384 73 3.05176e-05 70.549 3.05176e-05 67.5122L0.00093528 5.48139C0.00726861 3.09702 1.52365 1.09318 3.61908 0.337625C4.18908 0.1314 4.79527 0 5.43584 0H70.5642ZM41.6187 25.9026C41.3328 26.1015 41.0813 26.3588 40.9456 26.7092L40.6886 27.3754L34.5815 43.1105L29.0769 57.3017C28.7114 58.2398 29.171 59.2983 30.1029 59.6651C31.0348 60.0319 32.0843 59.5684 32.4481 58.6321L34.5815 53.1279L41.6187 34.9893L44.3149 28.0397C44.4 27.8207 44.4307 27.5962 44.4307 27.3754C44.4307 26.6454 44.0055 25.9555 43.2907 25.6745C42.708 25.4445 42.0982 25.5686 41.6187 25.9026ZM22.4461 31.5594L19.9055 34.1217L13.498 40.5822C12.7905 41.2957 12.7905 42.451 13.498 43.1627L19.9055 49.625L22.4461 52.1892C23.1536 52.9009 24.2972 52.9009 25.0048 52.1892C25.7123 51.4756 25.7123 50.3185 25.0048 49.6086L19.9055 44.4639L17.336 41.8724L19.9055 39.2828L25.0048 34.1399C25.7123 33.4263 25.7123 32.2729 25.0048 31.5594C24.2972 30.8458 23.1536 30.8458 22.4461 31.5594ZM51.1969 31.5594C50.4894 32.2729 50.4894 33.4263 51.1969 34.1399L53.4896 36.4522L58.8638 41.8724L53.4896 47.2963L51.1969 49.6086C50.4894 50.3185 50.4894 51.4756 51.1969 52.1892C51.8248 52.8206 52.7838 52.8608 53.4896 52.3662C53.5764 52.306 53.6759 52.2695 53.7556 52.1892L62.7036 43.1627C63.4112 42.451 63.4112 41.2957 62.7036 40.5822L53.7556 31.5594C53.6759 31.4809 53.5764 31.4426 53.4896 31.3805C52.7838 30.8896 51.8248 30.9243 51.1969 31.5594ZM9.04765 7.29963C8.04698 7.29963 7.23813 8.11541 7.23813 9.12464C7.23813 10.1339 8.04698 10.9496 9.04765 10.9496C10.0483 10.9496 10.8572 10.1339 10.8572 9.12464C10.8572 8.11541 10.0483 7.29963 9.04765 7.29963ZM14.4762 7.29963C13.4756 7.29963 12.6667 8.11541 12.6667 9.12464C12.6667 10.1339 13.4756 10.9496 14.4762 10.9496C15.4769 10.9496 16.2857 10.1339 16.2857 9.12464C16.2857 8.11541 15.4769 7.29963 14.4762 7.29963ZM19.9048 7.29963C18.9041 7.29963 18.0953 8.11541 18.0953 9.12464C18.0953 10.1339 18.9041 10.9496 19.9048 10.9496C20.9055 10.9496 21.7143 10.1339 21.7143 9.12464C21.7143 8.11541 20.9055 7.29963 19.9048 7.29963Z" fill="#2098FF"/>
                    </svg>
                    <h2 class="fs-2">Front-end</h2>
                    <p class="fs-5 mx-4 pt-3 pb-3">I like to code things from scratch and enjoy bringing ideas to life in the browser and on any device.</p>
                    <h3 class="fs-3 txtazul pb-2">Languages</h3>
                    <p class="fs-5 mx-4 pt-2 pb-3">HTML, CSS, JAVA, JAVASCRIPT, C#, XML</p>
                    <h3 class="fs-3 txtazul pb-2">Dev Tools</h3>
                    <p class="fs-5 pt-2 pb-4 tools">VSC Boostrap Materialize Laravel Github Terminal Netbeans</p>
                </div>
                <!--BACK-END-->
                <div class="col-lg-4 conocimientos back bg-white">
                    <svg class="logoback" width="85" height="94" viewBox="0 0 85 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.9062 29.375C24.6107 29.375 25.2864 29.0655 25.7845 28.5146C26.2826 27.9637 26.5625 27.2166 26.5625 26.4375C26.5625 25.6584 26.2826 24.9113 25.7845 24.3604C25.2864 23.8095 24.6107 23.5 23.9062 23.5C23.2018 23.5 22.5261 23.8095 22.028 24.3604C21.5299 24.9113 21.25 25.6584 21.25 26.4375C21.25 27.2166 21.5299 27.9637 22.028 28.5146C22.5261 29.0655 23.2018 29.375 23.9062 29.375V29.375ZM15.9375 26.4375C15.9375 27.2166 15.6576 27.9637 15.1595 28.5146C14.6614 29.0655 13.9857 29.375 13.2812 29.375C12.5768 29.375 11.9011 29.0655 11.403 28.5146C10.9049 27.9637 10.625 27.2166 10.625 26.4375C10.625 25.6584 10.9049 24.9113 11.403 24.3604C11.9011 23.8095 12.5768 23.5 13.2812 23.5C13.9857 23.5 14.6614 23.8095 15.1595 24.3604C15.6576 24.9113 15.9375 25.6584 15.9375 26.4375V26.4375ZM26.5625 67.5625C26.5625 68.3416 26.2826 69.0887 25.7845 69.6396C25.2864 70.1905 24.6107 70.5 23.9062 70.5C23.2018 70.5 22.5261 70.1905 22.028 69.6396C21.5299 69.0887 21.25 68.3416 21.25 67.5625C21.25 66.7834 21.5299 66.0363 22.028 65.4854C22.5261 64.9345 23.2018 64.625 23.9062 64.625C24.6107 64.625 25.2864 64.9345 25.7845 65.4854C26.2826 66.0363 26.5625 66.7834 26.5625 67.5625ZM13.2812 70.5C13.9857 70.5 14.6614 70.1905 15.1595 69.6396C15.6576 69.0887 15.9375 68.3416 15.9375 67.5625C15.9375 66.7834 15.6576 66.0363 15.1595 65.4854C14.6614 64.9345 13.9857 64.625 13.2812 64.625C12.5768 64.625 11.9011 64.9345 11.403 65.4854C10.9049 66.0363 10.625 66.7834 10.625 67.5625C10.625 68.3416 10.9049 69.0887 11.403 69.6396C11.9011 70.1905 12.5768 70.5 13.2812 70.5Z" fill="#C2C2C2"/>
                        <path d="M10.625 11.75C7.80707 11.75 5.10456 12.9879 3.11199 15.1915C1.11942 17.395 0 20.3837 0 23.5L0 29.375C0 32.4913 1.11942 35.48 3.11199 37.6835C5.10456 39.8871 7.80707 41.125 10.625 41.125H15.9375V52.875H10.625C7.80707 52.875 5.10456 54.1129 3.11199 56.3165C1.11942 58.52 0 61.5087 0 64.625L0 70.5C0 73.6163 1.11942 76.605 3.11199 78.8085C5.10456 81.0121 7.80707 82.25 10.625 82.25H74.375C77.1929 82.25 79.8954 81.0121 81.888 78.8085C83.8806 76.605 85 73.6163 85 70.5V64.625C85 61.5087 83.8806 58.52 81.888 56.3165C79.8954 54.1129 77.1929 52.875 74.375 52.875H69.0625V41.125H74.375C77.1929 41.125 79.8954 39.8871 81.888 37.6835C83.8806 35.48 85 32.4913 85 29.375V23.5C85 20.3837 83.8806 17.395 81.888 15.1915C79.8954 12.9879 77.1929 11.75 74.375 11.75H10.625ZM79.6875 23.5V29.375C79.6875 30.9331 79.1278 32.4275 78.1315 33.5293C77.1352 34.631 75.784 35.25 74.375 35.25H10.625C9.21604 35.25 7.86478 34.631 6.86849 33.5293C5.87221 32.4275 5.3125 30.9331 5.3125 29.375V23.5C5.3125 21.9419 5.87221 20.4475 6.86849 19.3457C7.86478 18.244 9.21604 17.625 10.625 17.625H74.375C75.784 17.625 77.1352 18.244 78.1315 19.3457C79.1278 20.4475 79.6875 21.9419 79.6875 23.5ZM79.6875 64.625V70.5C79.6875 72.0581 79.1278 73.5525 78.1315 74.6543C77.1352 75.756 75.784 76.375 74.375 76.375H10.625C9.21604 76.375 7.86478 75.756 6.86849 74.6543C5.87221 73.5525 5.3125 72.0581 5.3125 70.5V64.625C5.3125 63.0669 5.87221 61.5725 6.86849 60.4707C7.86478 59.369 9.21604 58.75 10.625 58.75H74.375C75.784 58.75 77.1352 59.369 78.1315 60.4707C79.1278 61.5725 79.6875 63.0669 79.6875 64.625ZM63.75 41.125V52.875H21.25V41.125H63.75Z" fill="#2098FF"/>
                    </svg>
                    <h2 class="fs-2">Back-end</h2>
                    <p class="fs-5 mx-4 py-3">I think that everything related to the cloud and servers is the most important thing when working for the user.</p>
                    <h3 class="fs-3 txtazul">Languages</h3>
                    <p class="fs-5 mx-4 pt-2 pb-4">PHP, JAVASCRIPT, C#L</p>
                    <h3 class="fs-3 txtazul pb-2">Dev Tools</h3>
                    <p class="fs-5 pt-2 pb-4 tools">PhpStorm AWS Firebase Ubuntu CloudFlare Wordpress MySQL MongoDB</p>
                </div>
                <!--EXTRAS-->
                <div class="col-lg-4 conocimientos extras bg-white">
                    <svg class="my-4" width="73" height="73" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_495_5)">
                            <path d="M45.625 9.12501C45.6255 11.1484 44.9535 13.1145 43.7147 14.7143C42.4758 16.3141 40.7404 17.4567 38.7813 17.9626V41.172C42.7187 41.5507 45.625 42.8921 45.625 44.4844C45.625 46.3733 41.5416 47.9063 36.5 47.9063C31.4584 47.9063 27.375 46.3733 27.375 44.4844C27.375 42.8875 30.2813 41.5507 34.2188 41.172V17.9626C32.5664 17.5359 31.0667 16.6544 29.8902 15.4183C28.7136 14.1821 27.9073 12.6407 27.5628 10.9693C27.2184 9.2978 27.3495 7.56324 27.9414 5.96258C28.5333 4.36193 29.5621 2.95932 30.9112 1.91409C32.2602 0.868852 33.8753 0.222873 35.5731 0.0495223C37.2709 -0.123829 38.9832 0.182396 40.5157 0.933415C42.0481 1.68443 43.3392 2.85015 44.2424 4.29815C45.1456 5.74616 45.6246 7.41842 45.625 9.12501Z" fill="#2098FF"/>
                            <path d="M6.90306e-10 44.0966V51.9304C0.000452366 52.7775 0.236717 53.6077 0.682332 54.3281C1.12795 55.0485 1.76532 55.6306 2.52306 56.0093L32.4211 70.9606C33.6877 71.5935 35.0841 71.923 36.5 71.923C37.9159 71.923 39.3123 71.5935 40.5789 70.9606L70.4769 56.0093C71.2347 55.6306 71.8721 55.0485 72.3177 54.3281C72.7633 53.6077 72.9995 52.7775 73 51.9304V44.0966C73 43.6403 72.7262 43.2297 72.3065 43.0472L43.3438 30.6372V35.1678L67.1919 45.1049C67.295 45.1483 67.3831 45.221 67.4451 45.314C67.5072 45.407 67.5405 45.5162 67.541 45.6281C67.5415 45.7399 67.5091 45.8494 67.4479 45.943C67.3866 46.0365 67.2992 46.11 67.1965 46.1543L40.0953 57.7704C38.9592 58.2574 37.736 58.5085 36.5 58.5085C35.264 58.5085 34.0408 58.2574 32.9047 57.7704L5.8035 46.1543C5.70081 46.11 5.6134 46.0365 5.55215 45.943C5.49089 45.8494 5.45849 45.7399 5.45898 45.6281C5.45946 45.5162 5.49281 45.407 5.55488 45.314C5.61695 45.221 5.70499 45.1483 5.80806 45.1049L29.6562 35.1678L29.5969 30.66L0.6935 43.0472C0.487761 43.1349 0.312332 43.2811 0.189029 43.4677C0.065727 43.6542 -7.77811e-06 43.8729 6.90306e-10 44.0966H6.90306e-10Z" fill="#2098FF"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_495_5">
                                <path d="M0 0H48C61.8071 0 73 11.1929 73 25V48C73 61.8071 61.8071 73 48 73H0V0Z" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h2 class="fs-2">Extras</h2>
                    <p class="fs-5 mx-4 py-3">I like to code things from scratch and enjoy bringing ideas to life in the browser and on any device.</p>
                    <h3 class="fs-3 txtazul">Things I Enjoy doing</h3>
                    <p class="fs-5 mx-4 pt-2 pb-4">PHP, JAVASCRIPT, C#L</p>
                    <h3 class="fs-3 txtazul pb-2">Dev Tools</h3>
                    <p class="fs-5 pt-2 pb-4 tools">
                        Figma Unity Android Studio
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--3ºPARTE-->
    <div class="container">
        <!--RECENT WORK-->
        <h2 class="fs-2 mb-2">My recent work</h2>
        <p class="fs-4 mb-5">Here are a few projects I’ve worked on recently</p>
        <div class="row justify-content-center">
            @foreach ($rowset as $row)
                <figure onmouseenter="hola(this)" onmouseleave="adios(this)" class="col-lg-3 cajaprojecto mx-4 @switch($row->logo)
                    @case($row->logo=="logosanta.png")
                        santa @php $texto="Design and creation of an NTF’S website & a 2d platform minigame." @endphp @break
                    @case($row->logo=="logocrash.png")
                        crash @php $texto="Management of users and data of a videogame and creation of the web." @endphp @break
                    @case($row->logo=="logoanime.png")
                        anime @php $texto="Creation of an online turn-based RPG card video game." @endphp @break
                @endswitch">
                    {{ Html::image('img/home/'.$row->logo,'Logo Proyecto',['class'=>'imgproyecto'])}}
                    <figcaption>
                        <div class="overlay position-absolute">
                            <p class="fs-4 text-white texto my-4"> @php echo $texto; @endphp </p>
                            <a href="#" class="bt-visit fs-4 py-2 px-4">
                                Visit web
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                </svg>
                            </a>
                        </div>
                    </figcaption>
                </figure>
            @endforeach
        </div>
        <!--BOTON VIEW MORE-->
        <div class="row justify-content-center py-5">
            <div class="col-lg-3 mt-3">
                <a href="#" class="bt-view fs-4 py-2 px-4">
                    View more
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <!--4ºPARTE-->
    <div class="container">
        <div class="row justify-content-center py-5">
            <p class="fs-2 col-lg-4">Some of the companies I have worked for:</p>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3">
                {{ Html::image('img/home/logoeuropapress.png','Logo Empresa')}}
            </div>
            <div class="col-lg-3">
                {{ Html::image('img/home/logoalten.png','Logo Empresa')}}
            </div>
            <div class="col-lg-3">
                {{ Html::image('img/home/logookdiario.png','Logo Empresa')}}
            </div>
        </div>
    </div>
@endsection

