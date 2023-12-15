@extends('layouts.master')

@section('content')
<!-- breadcrumb-area-start -->
<div class="tp-breadcrumb__area fix tp-breadcrumb-height"
    data-background={{ asset("assets/img/breadcrumb/breadcrumb.png") }}>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcrumb__content text-center z-index-5">
                    <div class="tp-breadcrumb__list">
                        <span><a href="index.html">Home </a></span>
                        <span class="dvdr">.</span>
                        <span>Shop Details</span>
                    </div>
                    <h3 class="tp-breadcrumb__title"><span class="p-relative z-index-5">
                            Shop
                            <span class="tp-title-shape">
                                <svg width="233" height="5" viewBox="0 0 233 5" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M229.237 2.64045C229.948 2.63606 231.134 2.60076 231.845 2.6523C230.66 2.65963 229.474 2.69493 228.526 2.70079C228.052 2.75967 229.238 2.78031 229.712 2.80535C230.661 2.79949 231.609 2.79363 232.321 2.84517C231.61 2.87754 230.661 2.8834 229.713 2.88927C228.764 2.89513 227.579 2.87449 226.868 2.93483C227.579 2.9584 227.579 2.9584 227.579 3.01434C225.92 3.05258 225.921 3.2204 223.312 3.18058C222.364 3.18645 221.415 3.19231 220.467 3.19817C219.282 3.31739 217.86 3.43807 214.777 3.40118C213.829 3.43501 212.88 3.44088 211.932 3.41877C209.324 3.49083 206.715 3.47899 204.107 3.52308C203.87 3.55252 203.633 3.55398 203.396 3.52748C202.448 3.53334 201.499 3.5392 200.551 3.54507L200.314 3.54653L200.076 3.548C199.128 3.55386 198.417 3.58623 197.468 3.56412C194.149 3.58464 190.592 3.60663 187.272 3.65512C185.138 3.66831 183.478 3.6506 182.292 3.57401L182.055 3.57548L181.818 3.57694C181.107 3.63728 181.345 3.71973 178.974 3.73439C176.602 3.72108 174.231 3.73573 171.623 3.75186C169.963 3.73415 168.303 3.80035 166.644 3.78264C160.715 3.79131 154.788 3.82795 148.86 3.83662C143.643 3.86887 138.426 3.87314 133.21 3.87742C131.313 3.94509 129.416 3.90087 127.756 3.91113C118.271 3.94179 108.55 4.00188 99.0646 3.9766C94.7964 3.97501 90.5285 4.02936 86.2601 3.9998C82.4663 4.02326 78.9094 4.01727 75.1154 4.01275C66.3418 4.01104 57.5683 4.00933 49.0315 3.95021C45.4748 3.97219 42.155 3.96474 39.072 3.89988C34.0926 3.93066 29.3498 3.87606 24.8441 3.82C24.1328 3.82439 23.6584 3.79935 23.1842 3.80229C21.2874 3.84198 19.8644 3.79483 18.2042 3.74915C17.0187 3.75648 16.07 3.73437 15.3585 3.7108C14.647 3.68722 13.9357 3.69162 13.2241 3.66805C12.5125 3.6165 11.3269 3.62383 10.1413 3.63116C8.24405 3.58694 5.87274 3.57363 5.39765 3.4367C1.84077 3.43071 0.891628 3.32469 1.12788 3.18337C-0.295844 3.02433 -0.0597648 2.85504 1.12477 2.67988C1.12425 2.59597 1.12373 2.51205 1.12321 2.42814L1.12304 2.40017C0.647594 2.2073 3.2548 2.02334 2.54243 1.85991C2.30444 1.72152 3.72644 1.60084 4.6742 1.48309C4.67403 1.45512 4.67368 1.39918 5.62198 1.36534C5.85891 1.33591 6.5701 1.30354 7.51838 1.2697C8.70326 1.15049 10.1254 1.05778 12.4964 1.01515C12.9702 0.956276 13.9189 0.978385 14.6302 0.973987C15.3414 0.941619 16.0526 0.90925 16.7637 0.876881C17.4749 0.844513 18.1862 0.840116 18.8976 0.835718C21.7426 0.762187 24.5878 0.716626 27.6703 0.697572C28.8559 0.690243 29.8043 0.68438 30.9899 0.677052C31.4641 0.67412 32.1754 0.669723 32.6495 0.63882C39.0516 0.599246 45.6908 0.558205 52.0931 0.546602C55.4127 0.526082 58.7321 0.47759 62.0522 0.540985C64.8975 0.523396 68.2168 0.446933 71.2998 0.511793C72.0111 0.507395 72.7225 0.502998 73.1967 0.500067C75.3306 0.458904 77.2275 0.447178 79.3617 0.461958C84.5782 0.429712 89.7949 0.425438 94.7744 0.422629C96.4342 0.412369 98.331 0.372671 99.754 0.41982C100.703 0.441929 101.651 0.436066 102.599 0.402231C105.682 0.383177 108.764 0.364122 111.847 0.373039C112.321 0.370108 112.795 0.367177 113.27 0.364245C114.455 0.384888 115.878 0.348122 117.064 0.368765C118.723 0.358505 120.62 0.346779 122.28 0.336519C123.703 0.327725 125.363 0.317465 126.548 0.338107C127.497 0.332244 128.445 0.326382 129.394 0.320519C131.291 0.308793 133.425 0.26763 135.322 0.311847C138.879 0.289861 142.435 0.295847 145.755 0.275326C151.446 0.240149 157.137 0.260915 162.828 0.253709C164.725 0.241983 166.384 0.231723 168.282 0.247968C166.622 0.258229 164.725 0.269954 163.065 0.280214C164.725 0.241983 166.622 0.230257 168.282 0.247968C171.364 0.228914 174.209 0.211325 177.055 0.24968C178.241 0.242351 179.426 0.235022 180.612 0.255665C180.849 0.254199 181.086 0.252734 181.323 0.251268C183.932 0.235145 186.54 0.246993 189.149 0.286814C191.52 0.272156 193.654 0.314908 195.788 0.329688C196.974 0.322359 198.159 0.31503 199.345 0.363645C201.48 0.378425 203.377 0.39467 204.089 0.474188C205.511 0.40945 206.46 0.45953 207.645 0.480173C208.831 0.528788 208.358 0.615634 209.781 0.662782C209.069 0.667179 208.358 0.671577 207.647 0.675974C207.884 0.70248 208.121 0.728985 208.358 0.72752C210.018 0.773202 211.678 0.790914 213.338 0.808625C213.576 0.80716 213.813 0.805694 214.05 0.804228C215.71 0.793968 217.606 0.754271 219.029 0.801419L219.266 0.799954C219.266 0.799954 219.267 0.827925 219.029 0.829391C218.081 0.835254 217.133 0.841117 216.421 0.845514L216.184 0.84698C217.369 0.811679 218.318 0.805817 219.029 0.829391C219.504 0.938345 218.082 0.975111 217.608 1.03399C217.845 1.06049 216.66 1.09579 217.609 1.1179C218.32 1.1135 219.505 1.0782 219.268 1.13561C219.032 1.19302 217.609 1.17384 216.898 1.17824C216.66 1.17971 216.423 1.20914 216.186 1.21061C218.084 1.2828 219.981 1.29904 221.878 1.34326C224.723 1.32567 225.91 1.43023 227.57 1.50388C228.044 1.52892 228.756 1.49655 228.993 1.52306C227.57 1.53186 228.282 1.61137 227.334 1.64521C224.015 1.72167 224.015 1.80558 227.098 1.89842C228.047 1.92052 229.944 1.93677 230.419 2.01775C230.419 2.04572 230.419 2.0737 230.419 2.0737C230.893 2.07076 231.368 2.06783 231.368 2.0958C231.131 2.15321 230.419 2.12964 229.708 2.13404C229.234 2.13697 228.523 2.14137 228.286 2.1708C228.76 2.25179 228.523 2.28122 227.101 2.29002C227.575 2.34303 228.998 2.30626 228.761 2.39164C229.473 2.38725 229.947 2.41229 230.658 2.40789C229.947 2.46823 228.524 2.42108 228.287 2.47849C228.999 2.53003 228.999 2.55801 227.814 2.53736C226.865 2.54323 225.679 2.52258 226.865 2.59917C227.577 2.59477 228.525 2.58891 229.237 2.64045ZM6.81321 2.28107C6.57609 2.28254 6.57612 2.28254 6.57629 2.31051C6.57612 2.28254 6.81321 2.28107 6.81321 2.28107ZM66.5686 2.33128C66.8059 2.35779 66.8057 2.32982 67.0428 2.32835C66.8057 2.32982 66.5686 2.33128 66.5686 2.33128ZM96.2104 2.56764C95.9733 2.56911 95.9733 2.56911 96.2104 2.56764V2.56764ZM76.2909 2.38307C76.2908 2.3551 76.2908 2.3551 76.2909 2.38307V2.38307ZM65.1499 2.98342C64.9128 2.98489 64.9128 2.98489 64.6755 2.95838C64.6755 2.95838 64.4384 2.95985 64.4385 2.98782C64.6757 2.98635 64.9128 2.98489 65.1499 2.98342ZM38.828 2.78249C39.0649 2.75305 38.8278 2.75452 38.828 2.78249V2.78249ZM77.2442 3.16041C77.4814 3.15895 77.4814 3.15895 77.2442 3.16041V3.16041ZM72.5015 3.10581C72.2643 3.10728 72.2645 3.13525 71.7903 3.13818C72.0272 3.10874 72.2643 3.10728 72.5015 3.10581ZM27.4465 2.85284C27.4467 2.88081 27.4467 2.88081 27.4465 2.85284V2.85284ZM174.691 1.3832C174.691 1.3832 174.691 1.35523 174.454 1.38466C174.454 1.38466 174.454 1.38466 174.217 1.38613C174.454 1.38466 174.454 1.38466 174.691 1.3832ZM193.903 2.27145C193.903 2.24348 194.14 2.24201 194.14 2.21404C193.666 2.24494 193.666 2.24494 193.903 2.27145ZM138.421 3.00603C138.421 3.00603 138.184 3.00749 138.184 3.03547C138.421 3.034 138.895 3.03107 139.133 3.0296C138.895 3.0031 138.658 3.00456 138.421 3.00603ZM153.35 1.34728C153.349 1.31931 153.349 1.31931 153.35 1.34728C153.349 1.31931 153.112 1.32078 153.35 1.34728ZM189.393 1.51609C189.63 1.51463 189.63 1.51463 189.393 1.51609C189.63 1.48666 189.867 1.48519 189.867 1.45722C189.63 1.45868 189.393 1.46015 189.156 1.46162C189.393 1.48812 189.393 1.48812 189.393 1.51609ZM186.782 1.0567C186.545 1.08614 186.545 1.08614 186.782 1.0567V1.0567ZM118.269 3.52222C118.269 3.55019 118.269 3.55019 118.032 3.57962C118.269 3.57816 118.506 3.57669 118.743 3.57523C118.506 3.54872 118.506 3.54872 118.269 3.52222ZM166.624 0.677801C166.861 0.676335 166.861 0.676335 167.099 0.674869C167.099 0.674869 166.861 0.676335 166.624 0.677801ZM97.1478 0.771601C96.9107 0.773067 96.9107 0.773067 97.1478 0.771601V0.771601ZM224.734 3.03193C225.682 2.97013 226.394 2.9937 227.342 3.01581C226.631 3.02021 225.682 3.02607 224.734 3.03193ZM127.023 0.391119C127.26 0.389653 127.497 0.388187 127.735 0.414693C127.26 0.389653 127.023 0.391119 127.023 0.391119Z"
                                        fill="url(#paint0_linear_720_932)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_720_932" x1="196.345" y1="-0.373061"
                                            x2="24.7083" y2="95.8315" gradientUnits="userSpaceOnUse">
                                            <stop  offset="0" stop-color="#FF307C" />
                                            <stop offset="0.247843" stop-color="#A85CC5" />
                                            <stop offset="1" stop-color="#3075FF" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                        </span>
                        Details
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!--product-details-area-start -->
<div class="tp-product-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="tp-shop-details__wrapper">
                    <div class="tp-shop-details__tab-content-box mb-20">
                        <div class="tab-content" id="nav-tabContent">
                            @foreach ($product['images_url'] as $index => $image)
                            <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="nav-{{ $index }}" role="tabpanel" aria-labelledby="nav-{{ $index }}-
                                aria-labelledby="nav-one-tab">
                                <div class="tp-shop-details__tab-big-img">
                                    <img src={{ $image }} alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tp-shop-details__tab-btn-box">
                        <nav>
                            <div class="nav nav-tab" id="nav-tab" role="tablist">
                                @foreach ($product['images_url'] as $image)
                                <button class="nav-links {{ $loop->first ? 'active' : '' }}" id="nav-one-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one"
                                    aria-selected="true">
                                    <img src={{ asset("assets/img/product/product-details-sm-1.png") }} alt="">
                                </button>
                                @endforeach
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="tp-shop-details__right-warp">
                    <h3 class="tp-shop-details__title-sm">{{ $product['name'] }}</h3>
                    <div class="tp-shop-details__ratting">
                        <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.99725 13.695L3.7075 16.656L4.88875 10.71L0.4375 6.594L6.45775 5.88L8.99725 0.375L11.5368 5.88L17.557 6.594L13.1058 10.71L14.287 16.656L8.99725 13.695Z"
                                    fill="currentcolor" />
                            </svg>
                        </span>
                        <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.99725 13.695L3.7075 16.656L4.88875 10.71L0.4375 6.594L6.45775 5.88L8.99725 0.375L11.5368 5.88L17.557 6.594L13.1058 10.71L14.287 16.656L8.99725 13.695Z"
                                    fill="currentcolor" />
                            </svg>
                        </span>
                        <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.99725 13.695L3.7075 16.656L4.88875 10.71L0.4375 6.594L6.45775 5.88L8.99725 0.375L11.5368 5.88L17.557 6.594L13.1058 10.71L14.287 16.656L8.99725 13.695Z"
                                    fill="currentcolor" />
                            </svg>
                        </span>
                        <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.99725 13.695L3.7075 16.656L4.88875 10.71L0.4375 6.594L6.45775 5.88L8.99725 0.375L11.5368 5.88L17.557 6.594L13.1058 10.71L14.287 16.656L8.99725 13.695Z"
                                    fill="currentcolor" />
                            </svg>
                        </span>
                        <span>
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.99725 13.695L3.7075 16.656L4.88875 10.71L0.4375 6.594L6.45775 5.88L8.99725 0.375L11.5368 5.88L17.557 6.594L13.1058 10.71L14.287 16.656L8.99725 13.695Z"
                                    fill="currentcolor" />
                            </svg>
                        </span>
                        <span class="review-text">(2 Review)</span>
                    </div>
                    <div class="tp-shop-details__price">
                        <span>{{ $product['price'] }} DA</span>
                        <del>{{ $product['price'] }} DA</del>
                        <span class="red-color">-34%</span>
                    </div>
                    <div class="tp-shop-details__text-2">
                        <p>{{ $product['recap'] }}</p>
                    </div>
                    <div class="tp-shop-details__product-info">
                        <ul>
                            <li><span>color :</span>
                                <div class="tp-shop-details__variation-list">
                                    <button type="button" class="color tp-color-variation-btn">
                                        <span></span>
                                    </button>
                                    <button type="button" class="color tp-color-variation-btn">
                                        <span class="red"></span>
                                    </button>
                                    <button type="button" class="color tp-color-variation-btn">
                                        <span class="blue"></span>
                                    </button>
                                    <button type="button" class="color tp-color-variation-btn">
                                        <span class="purple"></span>
                                    </button>
                                    </div>
                            </li>
                            <li><span>Size :</span>
                                <div class="tp-shop-details__size">
                                    <span class="active">XL</span>
                                    <span>XXL</span>
                                    <span>M</span>
                                    <span>L</span>
                                    <span>4XL</span>
                                </div>
                            </li>
                            <li><span>Categories : </span>Tags	clothing, e-commerce, fashion</li>
                            <li><span>Tags :</span>Black, Brown, Red, Shoes, £0.00 - £150.00 </li>
                        </ul>
                    </div>
                    <div class="tp-shop-details__social">
                        <span>Share:</span>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <div class="tp-shop-details__quantity-wrap mt-30 d-flex align-items-center">
                        <div class="tp-shop-details__btn mr-30">
                            <a class="tp-btn-square" href="cart.html">Add To Cart</a>
                        </div>
                        <div class="tp-shop-details__quantity-box">
                            <div class="tp-shop-details__quantity">
                                <div class="tp-cart-minus"><i class="fal fa-minus"></i></div>
                                <input type="text" value="1">
                                <div class="tp-cart-plus"><i class="fal fa-plus"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="productdetails-tabs mb-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-12">
                        <div class="product-additional-tab">
                            <div class="pro-details-nav mb-40">
                                <ul class="nav nav-tabs pro-details-nav-btn" id="myTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-links active" id="home-tab-1" data-bs-toggle="tab"
                                            data-bs-target="#home-1" type="button" role="tab"
                                            aria-controls="home-1" aria-selected="true"><span>Prodcut
                                                Details</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-links" id="information-tab" data-bs-toggle="tab"
                                            data-bs-target="#additional-information" type="button" role="tab"
                                            aria-controls="additional-information"
                                            aria-selected="false"><span>Additional Info</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-links" id="reviews-tab" data-bs-toggle="tab"
                                            data-bs-target="#reviews" type="button" role="tab"
                                            aria-controls="reviews" aria-selected="false"><span>Review
                                                (08)</span></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-links" id="size-chart-tab" data-bs-toggle="tab"
                                            data-bs-target="#chart" type="button" role="tab"
                                            aria-controls="chart"
                                            aria-selected="false"><span>Faq</span></button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content tp-content-tab" id="myTabContent-2">
                                <div class="tab-para tab-pane fade show active" id="home-1" role="tabpanel"
                                    aria-labelledby="home-tab-1">
                                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra
                                        pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus.
                                        Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla
                                        quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus
                                        faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean
                                        consequat pulvinar luctus. Suspendisse consectetur tristique tortor</p>
                                    <p class="pb-55">We have covered many special events such as fireworks, fairs, parades,
                                        races, walks, awards ceremonies, fashion shows, sporting events, and
                                        even a memorial service.Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor
                                        eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat
                                        elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt
                                        sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim.
                                        Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui.
                                        Aenean consequat pulvinar luctus. Suspendisse consectetur</p>
                                    <div class="product-details-list-box">
                                        <span>
                                            More Details :
                                        </span>
                                        <ul>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry

                                            </li>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span> If you are going to use a passage.
                                            </li>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>type here your detail one by one li more add
                                            </li>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>                                                        Lorem Ipsum generators on the tend to repeat.

                                            </li>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>Lorem Ipsum generators on the tend to repeat.
                                            </li>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span> If you are going to use a passage.
                                            </li>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span> Lorem Ipsum generators on the tend to repeat.
                                            </li>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span> Lorem Ipsum generators on the tend to repeat.
                                            </li>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>Research beyond the business plan
                                            </li>
                                            <li>
                                                <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.794 2.17595C14.426 3.42395 13.094 4.87595 11.798 6.53195C10.67 7.95995 9.656 9.42395 8.756 10.924C7.94 12.268 7.346 13.42 6.974 14.38C6.962 14.416 6.938 14.446 6.902 14.47C6.866 14.506 6.824 14.524 6.776 14.524C6.764 14.536 6.752 14.542 6.74 14.542C6.656 14.542 6.596 14.518 6.56 14.47L0.134 7.93595C0.122 7.92395 0.278 7.76795 0.602 7.46795C0.926 7.15595 1.244 6.87395 1.556 6.62195C1.904 6.33395 2.09 6.20195 2.114 6.22595L5.642 8.99795C6.674 7.78595 7.832 6.58595 9.116 5.39795C11.048 3.62195 13.04 2.10995 15.092 0.861953C15.128 0.861953 15.266 1.02995 15.506 1.36595L15.866 1.88795C15.878 1.93595 15.878 1.98995 15.866 2.04995C15.854 2.09795 15.83 2.13995 15.794 2.17595Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span> If you are going to use a passage.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="additional-information" role="tabpanel"
                                    aria-labelledby="information-tab">
                                    <div class="product__details-info table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td class="add-info">Weight</td>
                                                    <td class="add-info-list"> 2 lbs</td>
                                                </tr>
                                                <tr>
                                                    <td class="add-info">Dimensions</td>
                                                    <td class="add-info-list"> 12 × 16 × 19 in</td>
                                                </tr>
                                                <tr>
                                                    <td class="add-info">Product</td>
                                                    <td class="add-info-list"> Purchase this product on
                                                        rag-bone.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="add-info">Color</td>
                                                    <td class="add-info-list"> Gray, Black</td>
                                                </tr>
                                                <tr>
                                                    <td class="add-info">Size</td>
                                                    <td class="add-info-list"> S, M, L, XL</td>
                                                </tr>
                                                <tr>
                                                    <td class="add-info">Model</td>
                                                    <td class="add-info-list"> Model </td>
                                                </tr>
                                                <tr>
                                                    <td class="add-info">Shipping</td>
                                                    <td class="add-info-list"> Standard shipping: $5,95L</td>
                                                </tr>
                                                <tr>
                                                    <td class="add-info">Care Info</td>
                                                    <td class="add-info-list"> Machine Wash up to 40ºC/86ºF
                                                        Gentle Cycle</td>
                                                </tr>
                                                <tr>
                                                    <td class="add-info">Brand</td>
                                                    <td class="add-info-list"> Kazen</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel"
                                    aria-labelledby="reviews-tab">
                                    <div class="product-details-review">
                                        <h3 class="tp-comments-title mb-35">3 reviews for “Wide Cotton Tunic
                                            extreme hammer”</h3>
                                        <div class="latest-comments mb-55">
                                            <ul>
                                                <li>
                                                    <div class="comments-box d-flex">
                                                        <div class="comments-avatar mr-25">
                                                            <img src={{ asset("assets/img/product/client.png") }} alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div
                                                                class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                                <div class="avatar-name">
                                                                    <b>Siarhei Dzenisenka</b>
                                                                    <div class="comments-date mb-20">
                                                                        <span>March 27, 2018 9:51 am</span>
                                                                    </div>
                                                                </div>
                                                                <div class="user-rating">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fal fa-star"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="m-0">Lorem ipsum dolor sit amet,
                                                                consectetur adipiscing elit. Curabitur vulputate
                                                                vestibulum Phasellus rhoncus, dolor eget viverra
                                                                pretium, dolor tellus aliquet nunc, vitae
                                                                ultricies erat elit eu lacus. Vestibulum non
                                                                justo consectetur, cursus ante, tincidunt
                                                                sapien. Nulla quis diam sit amet turpis interdum
                                                                accumsan quis nec enim. Vivamus faucibus ex sed
                                                                nibh egestas elementum. Mauris et bibendum dui.
                                                                Aenean consequat pulvinar luctus. Suspendisse
                                                                consectetur tristique tortor</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comments-box d-flex">
                                                        <div class="comments-avatar mr-25">
                                                            <img src={{ asset("assets/img/product/client-2.png") }} alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div
                                                                class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                                <div class="avatar-name">
                                                                    <b>Tommy Jarvis </b>
                                                                    <div class="comments-date mb-20">
                                                                        <span>March 27, 2018 9:51 am</span>
                                                                    </div>
                                                                </div>
                                                                <div class="user-rating">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fal fa-star"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="m-0">We have covered many special events
                                                                such as fireworks, fairs, parades, races, walks,
                                                                awards ceremonies, fashion shows, sporting
                                                                events, and even a memorial service.
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit. Curabitur vulputate vestibulum
                                                                Phasellus rhoncus, dolor eget viverra pretium,
                                                                dolor tellus aliquet nunc, vitae ultricies erat
                                                                elit eu lacus. Vestibulum non justo consectetur,
                                                                cursus ante, tincidunt sapien. Nulla quis diam
                                                                sit amet turpis interdum accumsan quis nec enim.
                                                                Vivamus faucibus ex sed nibh egestas elementum.
                                                                Mauris et bibendum dui. Aenean consequat
                                                                pulvinar luctus. Suspendisse consectetur</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comments-box d-flex">
                                                        <div class="comments-avatar mr-25">
                                                            <img src={{ asset("assets/img/product/client-3.png") }} alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div
                                                                class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                                <div class="avatar-name">
                                                                    <b>Johnny Cash</b>
                                                                    <div class="comments-date mb-20">
                                                                        <span>March 27, 2018 9:51 am</span>
                                                                    </div>
                                                                </div>
                                                                <div class="user-rating">
                                                                    <ul>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fas fa-star"></i></a>
                                                                        </li>
                                                                        <li><a href="#"><i
                                                                                    class="fal fa-star"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="m-0">This is cardigan is a comfortable
                                                                warm classic piece. Great to layer with a light
                                                                top and you can dress up or down given the jewel
                                                                buttons. I'm 5'8” 128lbs a 34A and the Small fit
                                                                fine.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-details-comment pb-100">
                                            <div class="comment-title mb-20">
                                                <h3>Add a review</h3>
                                                <p>Your email address will not be published. Required fields are
                                                    marked*</p>
                                            </div>
                                            <div class="comment-rating mb-20 d-flex">
                                                <span>Overall ratings</span>
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="comment-input-box">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-xxl-12">
                                                            <div class="comment-input">
                                                                <textarea
                                                                    placeholder="Your review..."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="comment-input">
                                                                <input type="text" placeholder="Your Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="comment-input">
                                                                <input type="email" placeholder="Your Email*">
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-12">
                                                            <div class="comment-submit">
                                                                <button type="submit"
                                                                    class="tp-btn-square">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chart" role="tabpanel"
                                    aria-labelledby="size-chart-tab">
                                    <div class="tp-service-details-faq tp-faq-inner__customize">
                                        <div class="tp-custom-accordion">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-items tp-faq-active">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-buttons " type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            Why Internet is so popular amonth others?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne"
                                                        class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            A G.xber has its own IP address, which is made
                                                            public instead. While a rather seemingly
                                                            insignificant change, the G.xber IP address can be
                                                            used for a number of vital business to everything
                                                            from security to customer experience.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-items">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-buttons collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            What makes Cretive best creative template?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            A G.xber has its own IP address, which is made
                                                            public instead. While a rather seemingly
                                                            insignificant change, the G.xber IP address can be
                                                            used for a number of vital business to everything
                                                            from security to customer experience.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-items">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-buttons collapsed"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            How can we get the best from G.xber template?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            A G.xber has its own IP address, which is made
                                                            public instead. While a rather seemingly
                                                            insignificant change, the G.xber IP address can be
                                                            used for a number of vital business to everything
                                                            from security to customer experience.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-details-area-end -->

<!-- new-product-area-start -->
<div class="tp-new-product-5__area fix  grey-bg-2 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-new-product-5__section-title mb-50">
                    <span class="tp-section-subtitle-5">100% Best Products</span>
                    <h4 class="tp-section-title-5">New Arrival<span class="p-relative">
                            Products
                            <span class="tp-title-shape">
                                <svg width="169" height="4" viewBox="0 0 169 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M166.756 3.21678C167.274 3.21678 168.137 3.18881 168.655 3.24476C167.792 3.24476 166.929 3.27273 166.238 3.27273C165.893 3.32867 166.756 3.35664 167.101 3.38462C167.792 3.38462 168.482 3.38462 169 3.44056C168.482 3.46853 167.792 3.46853 167.101 3.46853C166.411 3.46853 165.548 3.44056 165.03 3.4965C165.548 3.52448 165.548 3.52448 165.548 3.58042C164.34 3.60839 164.34 3.77622 162.441 3.72028C161.751 3.72028 161.06 3.72028 160.37 3.72028C159.507 3.83217 158.471 3.94406 156.227 3.88811C155.537 3.91608 154.847 3.91608 154.156 3.88811C152.258 3.94406 150.359 3.91608 148.46 3.94406C148.288 3.97203 148.115 3.97203 147.943 3.94406C147.252 3.94406 146.562 3.94406 145.871 3.94406H145.699H145.526C144.836 3.94406 144.318 3.97203 143.628 3.94406C141.211 3.94406 138.622 3.94406 136.206 3.97203C134.652 3.97203 133.444 3.94406 132.581 3.86014H132.408H132.236C131.718 3.91608 131.891 4 130.165 4C128.439 3.97203 126.713 3.97203 124.814 3.97203C123.606 3.94406 122.398 4 121.189 3.97203C116.874 3.94406 112.559 3.94406 108.244 3.91608C104.447 3.91608 100.65 3.88811 96.8525 3.86014C95.4717 3.91608 94.0909 3.86014 92.8827 3.86014C85.9786 3.83217 78.902 3.83217 71.9979 3.74825C68.8911 3.72028 65.7843 3.74825 62.6774 3.69231C59.9158 3.69231 57.3268 3.66434 54.5651 3.63636C48.1789 3.58042 41.7926 3.52448 35.579 3.41259C32.9899 3.41259 30.5735 3.38462 28.3297 3.3007C24.7051 3.3007 21.253 3.21678 17.9736 3.13287C17.4558 3.13287 17.1106 3.1049 16.7654 3.1049C15.3846 3.13287 14.349 3.07692 13.1408 3.02098C12.2778 3.02098 11.5874 2.99301 11.0695 2.96503C10.5518 2.93706 10.034 2.93706 9.51614 2.90909C8.99834 2.85315 8.13533 2.85315 7.27232 2.85315C5.89151 2.7972 4.1655 2.76923 3.82028 2.62937C1.23126 2.6014 0.540848 2.48951 0.713455 2.34965C-0.322159 2.18182 -0.149551 2.01399 0.713455 1.84615C0.713455 1.76224 0.713455 1.67832 0.713455 1.59441V1.56643C0.368256 1.37063 2.26688 1.2028 1.74907 1.03497C1.57646 0.895105 2.61206 0.783217 3.30247 0.671329C3.30247 0.643357 3.30247 0.587413 3.99287 0.559441C4.16548 0.531469 4.6833 0.503497 5.3737 0.475524C6.23671 0.363636 7.27231 0.27972 8.99832 0.251748C9.34352 0.195804 10.0339 0.223776 10.5517 0.223776C11.0695 0.195804 11.5874 0.167832 12.1052 0.13986C12.623 0.111888 13.1408 0.111888 13.6586 0.111888C15.7298 0.0559441 17.801 0.027972 20.0448 0.027972C20.9078 0.027972 21.5983 0.027972 22.4613 0.027972C22.8065 0.027972 23.3243 0.027972 23.6695 0C28.3297 0 33.1626 0 37.8228 0.027972C40.2392 0.027972 42.6556 0 45.0721 0.0839161C47.1433 0.0839161 49.5597 0.027972 51.8035 0.111888C52.3213 0.111888 52.8391 0.111888 53.1843 0.111888C54.7377 0.0839161 56.1186 0.0839161 57.672 0.111888C61.4692 0.111888 65.2664 0.13986 68.8911 0.167832C70.0993 0.167832 71.4801 0.13986 72.5157 0.195804C73.2061 0.223776 73.8965 0.223776 74.5869 0.195804C76.8308 0.195804 79.0746 0.195804 81.3184 0.223776C81.6636 0.223776 82.0088 0.223776 82.354 0.223776C83.217 0.251748 84.2526 0.223776 85.1156 0.251748C86.3238 0.251748 87.7047 0.251748 88.9129 0.251748C89.9485 0.251748 91.1567 0.251748 92.0197 0.27972C92.7101 0.27972 93.4005 0.27972 94.0909 0.27972C95.4717 0.27972 97.0251 0.251748 98.406 0.307692C100.995 0.307692 103.584 0.335664 106 0.335664C110.143 0.335664 114.285 0.391608 118.428 0.41958C119.809 0.41958 121.017 0.41958 122.398 0.447552C121.189 0.447552 119.809 0.447552 118.6 0.447552C119.809 0.41958 121.189 0.41958 122.398 0.447552C124.641 0.447552 126.713 0.447552 128.784 0.503497C129.647 0.503497 130.51 0.503497 131.373 0.531469C131.545 0.531469 131.718 0.531469 131.891 0.531469C133.789 0.531469 135.688 0.559441 137.587 0.615385C139.313 0.615385 140.866 0.671329 142.419 0.699301C143.282 0.699301 144.145 0.699301 145.008 0.755245C146.562 0.783217 147.943 0.811189 148.46 0.895105C149.496 0.839161 150.186 0.895105 151.049 0.923077C151.912 0.979021 151.567 1.06294 152.603 1.11888C152.085 1.11888 151.567 1.11888 151.049 1.11888C151.222 1.14685 151.395 1.17483 151.567 1.17483C152.775 1.23077 153.984 1.25874 155.192 1.28671C155.364 1.28671 155.537 1.28671 155.71 1.28671C156.918 1.28671 158.299 1.25874 159.334 1.31469H159.507C159.507 1.31469 159.507 1.34266 159.334 1.34266C158.644 1.34266 157.953 1.34266 157.436 1.34266H157.263C158.126 1.31469 158.817 1.31469 159.334 1.34266C159.68 1.45455 158.644 1.48252 158.299 1.53846C158.471 1.56643 157.608 1.59441 158.299 1.62238C158.817 1.62238 159.68 1.59441 159.507 1.65035C159.334 1.70629 158.299 1.67832 157.781 1.67832C157.608 1.67832 157.436 1.70629 157.263 1.70629C158.644 1.79021 160.025 1.81818 161.406 1.87413C163.477 1.87413 164.34 1.98601 165.548 2.06993C165.893 2.0979 166.411 2.06993 166.584 2.0979C165.548 2.0979 166.066 2.18182 165.375 2.20979C162.959 2.26573 162.959 2.34965 165.203 2.46154C165.893 2.48951 167.274 2.51748 167.619 2.6014C167.619 2.62937 167.619 2.65734 167.619 2.65734C167.964 2.65734 168.31 2.65734 168.31 2.68531C168.137 2.74126 167.619 2.71329 167.101 2.71329C166.756 2.71329 166.238 2.71329 166.066 2.74126C166.411 2.82517 166.238 2.85315 165.203 2.85315C165.548 2.90909 166.584 2.88112 166.411 2.96503C166.929 2.96503 167.274 2.99301 167.792 2.99301C167.274 3.04895 166.238 2.99301 166.066 3.04895C166.584 3.1049 166.584 3.13287 165.721 3.1049C165.03 3.1049 164.167 3.07692 165.03 3.16084C165.548 3.16084 166.238 3.16084 166.756 3.21678ZM4.85588 1.48252C4.68329 1.48252 4.68329 1.48252 4.68329 1.51049C4.68329 1.48252 4.85588 1.48252 4.85588 1.48252ZM118.083 1.76224C117.91 1.76224 117.737 1.76224 117.565 1.79021C117.737 1.76224 117.91 1.76224 118.083 1.76224ZM29.7105 1.87413C29.8831 1.87413 29.8831 1.87413 29.7105 1.87413C29.8831 1.87413 29.8831 1.87413 29.7105 1.87413ZM48.3515 1.9021C48.5241 1.93007 48.5241 1.9021 48.6967 1.9021C48.5241 1.9021 48.3515 1.9021 48.3515 1.9021ZM69.9267 2.32168C69.9267 2.32168 69.7541 2.29371 69.9267 2.32168C69.7541 2.32168 69.7541 2.32168 69.9267 2.32168ZM55.4282 2.01399C55.4282 1.98601 55.4282 2.01399 55.4282 2.01399C55.4282 1.98601 55.4282 1.98601 55.4282 2.01399C55.4282 2.01399 55.4282 1.98601 55.4282 2.01399ZM47.3159 2.54545C47.1433 2.54545 47.1433 2.54545 46.9707 2.51748C46.9707 2.51748 46.7981 2.51748 46.7981 2.54545C46.9707 2.54545 47.1433 2.54545 47.3159 2.54545ZM34.8886 2.20979C35.0612 2.20979 35.0612 2.20979 34.8886 2.20979C35.0612 2.20979 35.0612 2.20979 34.8886 2.20979C34.8886 2.20979 35.0612 2.20979 34.8886 2.20979ZM28.1571 2.18182C28.3297 2.15385 28.1571 2.15385 28.1571 2.18182C28.1571 2.15385 28.1571 2.15385 28.1571 2.18182C28.1571 2.15385 28.1571 2.15385 28.1571 2.18182ZM56.1186 2.7972C56.2912 2.7972 56.2912 2.7972 56.1186 2.7972C56.2912 2.7972 56.2912 2.7972 56.1186 2.7972C56.2912 2.7972 56.2912 2.7972 56.1186 2.7972ZM52.6665 2.71329C52.4939 2.71329 52.4939 2.74126 52.1487 2.74126C52.3213 2.71329 52.4939 2.71329 52.6665 2.71329ZM19.8722 2.18182C19.8722 2.20979 19.8722 2.20979 19.8722 2.18182C19.8722 2.20979 19.8722 2.20979 19.8722 2.18182C19.8722 2.20979 19.8722 2.20979 19.8722 2.18182ZM127.058 1.62238C127.058 1.62238 127.058 1.59441 126.885 1.62238C126.885 1.62238 126.885 1.62238 126.713 1.62238C126.885 1.62238 126.885 1.62238 127.058 1.62238ZM141.039 2.62937C141.039 2.6014 141.211 2.6014 141.211 2.57343C140.866 2.6014 140.866 2.6014 141.039 2.62937ZM100.65 3.02098C100.65 3.02098 100.477 3.02098 100.477 3.04895C100.65 3.04895 100.995 3.04895 101.168 3.04895C100.995 3.02098 100.822 3.02098 100.65 3.02098ZM111.524 1.45455C111.524 1.42657 111.524 1.42657 111.524 1.45455C111.524 1.42657 111.351 1.42657 111.524 1.45455C111.351 1.45455 111.524 1.45455 111.524 1.45455ZM113.94 3.1049C114.113 3.1049 114.113 3.1049 113.94 3.1049C114.113 3.1049 114.113 3.1049 113.94 3.1049ZM26.2585 0.979021C26.2585 0.951049 26.2585 0.979021 26.2585 0.979021C26.2585 0.951049 26.2585 0.979021 26.2585 0.979021ZM137.759 1.84615C137.932 1.84615 137.932 1.84615 137.759 1.84615C137.932 1.81818 138.104 1.81818 138.104 1.79021C137.932 1.79021 137.759 1.79021 137.587 1.79021C137.759 1.81818 137.759 1.81818 137.759 1.84615ZM146.389 1.45455C146.217 1.45455 146.044 1.45455 145.871 1.45455C146.044 1.45455 146.217 1.45455 146.389 1.45455ZM135.86 1.37063C135.688 1.3986 135.688 1.3986 135.86 1.37063C136.206 1.37063 136.551 1.37063 136.896 1.37063C136.551 1.37063 136.206 1.37063 135.86 1.37063ZM85.9786 3.41259C85.9786 3.44056 85.9786 3.44056 85.806 3.46853C85.9786 3.46853 86.1512 3.46853 86.3238 3.46853C86.1512 3.44056 86.1512 3.44056 85.9786 3.41259ZM121.189 0.867133C121.362 0.867133 121.362 0.867133 121.535 0.867133C121.535 0.867133 121.362 0.867133 121.189 0.867133ZM3.64769 1.76224C3.64769 1.76224 3.47508 1.76224 3.64769 1.76224V1.76224ZM39.031 0.307692H38.8584H39.031ZM70.6171 0.531469C70.4445 0.531469 70.4445 0.531469 70.6171 0.531469C70.6171 0.531469 70.4445 0.531469 70.6171 0.531469ZM78.3842 0.391608C78.5568 0.391608 78.5568 0.391608 78.7294 0.391608C78.5568 0.391608 78.5568 0.391608 78.3842 0.391608ZM163.477 3.58042C164.167 3.52448 164.685 3.55245 165.375 3.58042C164.858 3.58042 164.167 3.58042 163.477 3.58042ZM51.6309 0.111888V0.13986V0.111888ZM92.3649 0.335664C92.5375 0.335664 92.7101 0.335664 92.8827 0.363636C92.5375 0.335664 92.3649 0.335664 92.3649 0.335664ZM154.156 1.62238C154.156 1.62238 154.156 1.65035 154.156 1.62238V1.62238Z"
                                        fill="url(#paint0_linear_492_315)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_492_3155" x1="142.827"
                                            y1="4.37008e-06" x2="1.97766" y2="56.6374"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#3AFFDC" />
                                            <stop offset="0.247843" stop-color="#94E7A5" />
                                            <stop offset="1" stop-color="#FFCA63" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                        </span> </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-new-product-5__wrapper tp-new-product-5__wrapper-box">
                    <div class="swiper-container tp-new-product-5__active-2">
                        <div class="swiper-wrapper">
                            @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="tp-new-product-5__item-box">
                                    <div class="tp-new-product-5__item">
                                        <div class="tp-new-product-5__thumb fix p-relative">
                                            <img src={{ $product['images_url'] }} alt="">
                                            <div class="tp-new-product-5__social-box">
                                                <a href="#">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.892 8.16932C16.7401 7.96157 13.1215 3.0824 8.49992 3.0824C3.87833 3.0824 0.259582 7.96157 0.107877 8.16913C-0.035959 8.36622 -0.035959 8.63354 0.107877 8.83063C0.259582 9.03839 3.87833 13.9176 8.49992 13.9176C13.1215 13.9176 16.7401 9.03835 16.892 8.8308C17.036 8.63374 17.036 8.36622 16.892 8.16932ZM8.49992 12.7967C5.09563 12.7967 2.14715 9.55828 1.27434 8.4996C2.14602 7.43998 5.08832 4.20327 8.49992 4.20327C11.904 4.20327 14.8523 7.44111 15.7255 8.50036C14.8538 9.55994 11.9115 12.7967 8.49992 12.7967Z"
                                                            fill="currentcolor" />
                                                        <path
                                                            d="M8.49986 5.13733C6.64573 5.13733 5.13721 6.64585 5.13721 8.49998C5.13721 10.3541 6.64573 11.8626 8.49986 11.8626C10.354 11.8626 11.8625 10.3541 11.8625 8.49998C11.8625 6.64585 10.354 5.13733 8.49986 5.13733ZM8.49986 10.7417C7.26371 10.7417 6.25811 9.7361 6.25811 8.49998C6.25811 7.26386 7.26374 6.25823 8.49986 6.25823C9.73598 6.25823 10.7416 7.26386 10.7416 8.49998C10.7416 9.7361 9.73601 10.7417 8.49986 10.7417Z"
                                                            fill="currentcolor" />
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.2068 15.7012C12.9933 15.7014 12.783 15.6492 12.5943 15.5493L9.08822 13.7066C9.06105 13.6921 9.03072 13.6845 8.99991 13.6845C8.9691 13.6845 8.93877 13.6921 8.9116 13.7066L5.4061 15.5493C5.18886 15.6637 4.94397 15.7149 4.69913 15.6973C4.45429 15.6796 4.21928 15.5938 4.02068 15.4495C3.82208 15.3052 3.66783 15.1082 3.57538 14.8808C3.48292 14.6534 3.45596 14.4047 3.49754 14.1628L4.16691 10.2596C4.17205 10.229 4.16961 10.1976 4.15981 10.1682C4.15 10.1388 4.13312 10.1122 4.11066 10.0908L1.27679 7.32503C1.10084 7.15361 0.976416 6.93634 0.917621 6.69783C0.858825 6.45932 0.868005 6.20912 0.944121 5.97556C1.02024 5.742 1.16024 5.53443 1.34828 5.37636C1.53632 5.2183 1.76487 5.11605 2.00804 5.08122L5.92472 4.51253C5.9552 4.5081 5.98414 4.49631 6.00903 4.47818C6.03393 4.46004 6.05403 4.43612 6.0676 4.40847L7.81866 0.856285C7.92712 0.636078 8.09507 0.450638 8.30349 0.320963C8.51191 0.191287 8.75247 0.122559 8.99794 0.122559C9.24341 0.122559 9.48397 0.191287 9.69239 0.320963C9.90081 0.450638 10.0688 0.636078 10.1772 0.856285L11.9294 4.40735C11.9431 4.43491 11.9632 4.45876 11.9881 4.47687C12.013 4.49499 12.0419 4.50684 12.0723 4.51141L15.9923 5.08066C16.2354 5.11569 16.4638 5.21804 16.6517 5.37613C16.8396 5.53422 16.9795 5.74174 17.0556 5.97522C17.1317 6.20869 17.1409 6.4588 17.0822 6.69724C17.0236 6.93569 16.8993 7.15296 16.7236 7.32447L13.8869 10.0886C13.8645 10.11 13.8477 10.1366 13.8379 10.166C13.8281 10.1954 13.8256 10.2268 13.8307 10.2573L14.5 14.1605C14.5322 14.3491 14.523 14.5425 14.4728 14.7271C14.4227 14.9118 14.333 15.0833 14.2098 15.2297C14.0867 15.3761 13.9331 15.494 13.7598 15.575C13.5865 15.656 13.3976 15.6983 13.2063 15.699L13.2068 15.7012ZM8.99991 12.5591C9.21324 12.559 9.42335 12.6112 9.61191 12.711L13.1174 14.5532C13.1484 14.5709 13.184 14.579 13.2197 14.5765C13.2553 14.574 13.2894 14.561 13.3177 14.5391C13.3471 14.5189 13.37 14.4905 13.3835 14.4574C13.397 14.4243 13.4005 14.388 13.3936 14.3529L12.7237 10.4492C12.6879 10.2391 12.7036 10.0234 12.7694 9.82072C12.8352 9.61803 12.9492 9.43432 13.1017 9.28535L15.9383 6.52066C15.9637 6.49586 15.9816 6.46448 15.99 6.43005C15.9984 6.39562 15.9971 6.35952 15.9861 6.32583C15.9751 6.29213 15.9549 6.26218 15.9277 6.23936C15.9006 6.21653 15.8677 6.20174 15.8326 6.19666L11.9131 5.62685C11.7021 5.59629 11.5017 5.51482 11.3292 5.38948C11.1567 5.26413 11.0173 5.09868 10.9231 4.90741L9.16866 1.35579C9.15295 1.324 9.12866 1.29724 9.09854 1.27854C9.06843 1.25983 9.03368 1.24991 8.99822 1.24991C8.96277 1.24991 8.92802 1.25983 8.8979 1.27854C8.86778 1.29724 8.8435 1.324 8.82778 1.35579L7.07672 4.90628C6.98244 5.09762 6.84298 5.26312 6.67039 5.38847C6.4978 5.51382 6.29728 5.59525 6.08616 5.62572L2.16722 6.19666C2.13207 6.20163 2.09902 6.21637 2.07184 6.23921C2.04466 6.26204 2.02444 6.29205 2.01347 6.32582C2.00251 6.35958 2.00125 6.39575 2.00984 6.4302C2.01842 6.46464 2.03651 6.49599 2.06204 6.52066L4.89816 9.28535C5.05057 9.43432 5.16458 9.61803 5.23042 9.82072C5.29625 10.0234 5.31195 10.2391 5.27616 10.4492L4.60622 14.3529C4.60014 14.388 4.60403 14.4241 4.61745 14.457C4.63086 14.49 4.65326 14.5185 4.6821 14.5394C4.71094 14.5603 4.74506 14.5726 4.78057 14.5751C4.81608 14.5775 4.85156 14.5699 4.88297 14.5532L8.38791 12.7104C8.5766 12.611 8.78665 12.5591 8.99991 12.5591Z"
                                                            fill="currentcolor" />
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.86683 8.2L4.3335 9.73333V0.666667C4.3335 0.266667 4.06683 0 3.66683 0C3.26683 0 3.00016 0.266667 3.00016 0.666667V9.73333L1.46683 8.2C1.20016 7.93333 0.800163 7.93333 0.533496 8.2C0.266829 8.46667 0.266829 8.86667 0.533496 9.13333L3.20016 11.8C3.26683 11.8667 3.3335 11.9333 3.40016 11.9333C3.46683 12 3.60016 12 3.66683 12C3.7335 12 3.86683 12 3.9335 11.9333C4.00016 11.9333 4.06683 11.8667 4.1335 11.8L6.80016 9.13333C7.06683 8.86667 7.06683 8.46667 6.80016 8.2C6.53349 7.93333 6.13349 7.93333 5.86683 8.2ZM13.4668 2.86667L10.8002 0.2C10.7335 0.133333 10.6668 0.0666666 10.6002 0.0666666C10.5335 -6.45717e-08 10.4002 0 10.3335 0C10.2668 0 10.1335 -6.45717e-08 10.0668 0.0666666C10.0002 0.0666666 9.93349 0.133333 9.86683 0.2L7.20016 2.86667C6.93349 3.13333 6.93349 3.53333 7.20016 3.8C7.46683 4.06667 7.86683 4.06667 8.13349 3.8L9.66683 2.26667V11.3333C9.66683 11.7333 9.93349 12 10.3335 12C10.7335 12 11.0002 11.7333 11.0002 11.3333V2.26667L12.5335 3.8C12.8002 4.06667 13.2002 4.06667 13.4668 3.8C13.7335 3.53333 13.7335 3.13333 13.4668 2.86667Z"
                                                            fill="currentcolor" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="tp-new-product-5__thumb-text">
                                                <span>new</span>
                                            </div>
                                        </div>
                                        <div class="tp-new-product-5__content text-center">
                                            <div class="tp-new-product-5__star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="tp-new-product-5__title-box">
                                                <h4 class="tp-new-product-5__title-sm"><a href="#">{{ $product['name'] }}</a>
                                                </h4>
                                            </div>
                                            <div class="tp-new-product-5__price">
                                                <del>{{ $product['price'] }} DA</del>
                                                <span>{{ $product['price'] }} DA</span>
                                            </div>
                                            <div class="tp-new-product-5__link-box text-center">
                                                <a class="tp-btn-cart" href="shop-details.html">
                                                    <span>
                                                        <svg width="16" height="14" viewBox="0 0 16 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.76 8.176H6.578C6.518 8.176 6.458 8.158 6.398 8.122C6.35 8.086 6.314 8.044 6.29 7.996L2.996 0.454C2.984 0.405999 2.948 0.363999 2.888 0.327999C2.84 0.291999 2.786 0.274 2.726 0.274H0.314C0.266 0.274 0.218 0.291999 0.17 0.327999C0.134 0.363999 0.116 0.411999 0.116 0.471999V1.066C0.116 1.114 0.134 1.162 0.17 1.21C0.218 1.246 0.266 1.264 0.314 1.264H2.078C2.138 1.264 2.192 1.282 2.24 1.318C2.3 1.354 2.336 1.396 2.348 1.444L5.66 8.986C5.672 9.034 5.702 9.076 5.75 9.112C5.81 9.148 5.87 9.166 5.93 9.166H13.76C13.82 9.166 13.868 9.148 13.904 9.112C13.94 9.064 13.958 9.016 13.958 8.968V8.374C13.958 8.314 13.94 8.266 13.904 8.23C13.868 8.194 13.82 8.176 13.76 8.176ZM7.532 10.156C7.124 10.156 6.776 10.3 6.488 10.588C6.2 10.876 6.056 11.224 6.056 11.632C6.056 12.04 6.2 12.394 6.488 12.694C6.776 12.982 7.124 13.126 7.532 13.126C7.94 13.126 8.288 12.982 8.576 12.694C8.876 12.394 9.026 12.04 9.026 11.632C9.026 11.224 8.882 10.876 8.594 10.588C8.306 10.3 7.952 10.156 7.532 10.156ZM12.482 10.156C12.074 10.156 11.72 10.3 11.42 10.588C11.132 10.876 10.988 11.224 10.988 11.632C10.988 12.04 11.132 12.394 11.42 12.694C11.72 12.982 12.074 13.126 12.482 13.126C12.89 13.126 13.238 12.982 13.526 12.694C13.814 12.406 13.958 12.058 13.958 11.65C13.958 11.23 13.814 10.876 13.526 10.588C13.238 10.3 12.89 10.156 12.482 10.156ZM15.74 2.254H5.264C5.204 2.254 5.162 2.272 5.138 2.308C5.126 2.344 5.126 2.386 5.138 2.434L5.39 3.064C5.414 3.112 5.45 3.154 5.498 3.19C5.558 3.226 5.612 3.244 5.66 3.244H15.344C15.392 3.244 15.44 3.226 15.488 3.19C15.548 3.154 15.59 3.112 15.614 3.064L15.866 2.434C15.878 2.386 15.872 2.344 15.848 2.308C15.836 2.272 15.8 2.254 15.74 2.254ZM14.156 6.196H6.848C6.8 6.196 6.758 6.214 6.722 6.25C6.698 6.286 6.698 6.328 6.722 6.376L6.974 7.006C6.986 7.054 7.016 7.096 7.064 7.132C7.124 7.168 7.184 7.186 7.244 7.186H13.76C13.82 7.186 13.874 7.168 13.922 7.132C13.982 7.096 14.018 7.054 14.03 7.006L14.282 6.376C14.306 6.328 14.3 6.286 14.264 6.25C14.24 6.214 14.204 6.196 14.156 6.196ZM14.948 4.216H6.056C6.008 4.216 5.966 4.234 5.93 4.27C5.906 4.306 5.906 4.348 5.93 4.396L6.182 5.026C6.194 5.074 6.224 5.116 6.272 5.152C6.332 5.188 6.392 5.206 6.452 5.206H14.552C14.612 5.206 14.666 5.188 14.714 5.152C14.774 5.116 14.81 5.074 14.822 5.026L15.074 4.396C15.098 4.348 15.092 4.306 15.056 4.27C15.032 4.234 14.996 4.216 14.948 4.216Z"
                                                                fill="white" />
                                                        </svg>
                                                    </span>
                                                    Add To Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- new-product-area-end -->

<!-- cta-area-start -->
<div class="tp-cta-4__area">
    <div class="tp-cta-4__bg fix p-relative">
        <div class="tp-cta-4__shape-1 d-none d-lg-block">
            <img src={{ asset("assets/img/cta/cta-4-1.png") }} alt="">
        </div>
        <div class="tp-cta-4__shape-6 d-none d-xl-block">
            <img src={{ asset("assets/img/cta/cta-4-5.png") }} alt="">
        </div>
        <div class="tp-cta-4__shape-3 d-none d-lg-block">
            <img src={{ asset("assets/img/cta/cta-4-3.png") }} alt="">
        </div>
        <div class="tp-cta-4__shape-4 d-none d-lg-block">
            <img src={{ asset("assets/img/cta/cta-4-4.png") }} alt="">
        </div>
        <div class="container custom-container-3">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-cta-4__content text-center z-index">
                        <h3 class="tp-cta-4__title">Ready to create some <br>
                            <span class="p-relative">custom
                                <span class="tp-title-shape">
                                    <svg width="147" height="4" viewBox="0 0 147 4" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M145.048 3.21678C145.499 3.21678 146.249 3.18881 146.7 3.24476C145.949 3.24476 145.198 3.27273 144.598 3.27273C144.298 3.32867 145.048 3.35664 145.349 3.38462C145.949 3.38462 146.55 3.38462 147 3.44056C146.55 3.46853 145.949 3.46853 145.349 3.46853C144.748 3.46853 143.997 3.44056 143.547 3.4965C143.997 3.52448 143.997 3.52448 143.997 3.58042C142.946 3.60839 142.946 3.77622 141.295 3.72028C140.694 3.72028 140.094 3.72028 139.493 3.72028C138.743 3.83217 137.842 3.94406 135.89 3.88811C135.29 3.91608 134.689 3.91608 134.089 3.88811C132.437 3.94406 130.786 3.91608 129.134 3.94406C128.984 3.97203 128.834 3.97203 128.684 3.94406C128.083 3.94406 127.483 3.94406 126.882 3.94406H126.732H126.582C125.981 3.94406 125.531 3.97203 124.93 3.94406C122.829 3.94406 120.577 3.94406 118.475 3.97203C117.124 3.97203 116.073 3.94406 115.322 3.86014H115.172H115.022C114.571 3.91608 114.721 4 113.22 4C111.719 3.97203 110.217 3.97203 108.566 3.97203C107.515 3.94406 106.464 4 105.413 3.97203C101.66 3.94406 97.9066 3.94406 94.1533 3.91608C90.8504 3.91608 87.5474 3.88811 84.2445 3.86014C83.0434 3.91608 81.8424 3.86014 80.7915 3.86014C74.7861 3.83217 68.6307 3.83217 62.6254 3.74825C59.923 3.72028 57.2206 3.74825 54.5182 3.69231C52.1161 3.69231 49.8641 3.66434 47.462 3.63636C41.9071 3.58042 36.3522 3.52448 30.9474 3.41259C28.6954 3.41259 26.5935 3.38462 24.6418 3.3007C21.489 3.3007 18.4864 3.21678 15.6339 3.13287C15.1834 3.13287 14.8832 3.1049 14.5829 3.1049C13.3819 3.13287 12.4811 3.07692 11.4301 3.02098C10.6795 3.02098 10.0789 2.99301 9.62854 2.96504C9.17813 2.93706 8.72774 2.93706 8.27734 2.90909C7.82693 2.85315 7.07628 2.85315 6.32561 2.85315C5.12454 2.7972 3.62323 2.76923 3.32297 2.62937C1.07097 2.6014 0.470444 2.48951 0.620575 2.34965C-0.280228 2.18182 -0.130096 2.01399 0.620575 1.84615C0.620575 1.76224 0.620575 1.67832 0.620575 1.59441V1.56643C0.320297 1.37063 1.97176 1.2028 1.52136 1.03497C1.37123 0.895105 2.27202 0.783217 2.87254 0.671329C2.87254 0.643357 2.87256 0.587413 3.47308 0.559441C3.62323 0.531469 4.07362 0.503497 4.67416 0.475525C5.42482 0.363636 6.32559 0.27972 7.82692 0.251748C8.1272 0.195804 8.72772 0.223776 9.17812 0.223776C9.62852 0.195804 10.0789 0.167832 10.5293 0.13986C10.9797 0.111888 11.4301 0.111888 11.8805 0.111888C13.6821 0.0559441 15.4837 0.027972 17.4354 0.027972C18.1861 0.027972 18.7866 0.027972 19.5373 0.027972C19.8376 0.027972 20.2879 0.027972 20.5882 0C24.6418 0 28.8455 0 32.8991 0.027972C35.001 0.027972 37.1028 0 39.2047 0.0839161C41.0063 0.0839161 43.1081 0.027972 45.0599 0.111888C45.5103 0.111888 45.9607 0.111888 46.2609 0.111888C47.6121 0.0839161 48.8132 0.0839161 50.1644 0.111888C53.4673 0.111888 56.7702 0.13986 59.923 0.167832C60.9739 0.167832 62.175 0.13986 63.0758 0.195804C63.6763 0.223776 64.2769 0.223776 64.8774 0.195804C66.8291 0.195804 68.7808 0.195804 70.7326 0.223776C71.0328 0.223776 71.3331 0.223776 71.6334 0.223776C72.384 0.251748 73.2848 0.223776 74.0355 0.251748C75.0864 0.251748 76.2875 0.251748 77.3384 0.251748C78.2392 0.251748 79.2901 0.251748 80.0408 0.27972C80.6413 0.27972 81.2419 0.27972 81.8424 0.27972C83.0434 0.27972 84.3946 0.251748 85.5957 0.307692C87.8477 0.307692 90.0997 0.335664 92.2015 0.335664C95.8047 0.335664 99.4079 0.391608 103.011 0.41958C104.212 0.41958 105.263 0.41958 106.464 0.447553C105.413 0.447553 104.212 0.447553 103.161 0.447553C104.212 0.41958 105.413 0.41958 106.464 0.447553C108.416 0.447553 110.217 0.447553 112.019 0.503497C112.77 0.503497 113.52 0.503497 114.271 0.531469C114.421 0.531469 114.571 0.531469 114.721 0.531469C116.373 0.531469 118.024 0.559441 119.676 0.615385C121.177 0.615385 122.528 0.671329 123.88 0.699301C124.63 0.699301 125.381 0.699301 126.132 0.755245C127.483 0.783217 128.684 0.811189 129.134 0.895105C130.035 0.839161 130.636 0.895105 131.386 0.923077C132.137 0.979021 131.837 1.06294 132.737 1.11888C132.287 1.11888 131.837 1.11888 131.386 1.11888C131.536 1.14685 131.686 1.17483 131.837 1.17483C132.888 1.23077 133.938 1.25874 134.989 1.28671C135.14 1.28671 135.29 1.28671 135.44 1.28671C136.491 1.28671 137.692 1.25874 138.593 1.31469H138.743C138.743 1.31469 138.743 1.34266 138.593 1.34266C137.992 1.34266 137.392 1.34266 136.941 1.34266H136.791C137.542 1.31469 138.142 1.31469 138.593 1.34266C138.893 1.45455 137.992 1.48252 137.692 1.53846C137.842 1.56643 137.091 1.59441 137.692 1.62238C138.142 1.62238 138.893 1.59441 138.743 1.65035C138.593 1.70629 137.692 1.67832 137.241 1.67832C137.091 1.67832 136.941 1.70629 136.791 1.70629C137.992 1.79021 139.193 1.81818 140.394 1.87413C142.196 1.87413 142.946 1.98601 143.997 2.06993C144.298 2.0979 144.748 2.06993 144.898 2.0979C143.997 2.0979 144.448 2.18182 143.847 2.20979C141.745 2.26573 141.745 2.34965 143.697 2.46154C144.298 2.48951 145.499 2.51748 145.799 2.6014C145.799 2.62937 145.799 2.65734 145.799 2.65734C146.099 2.65734 146.399 2.65734 146.399 2.68531C146.249 2.74126 145.799 2.71329 145.349 2.71329C145.048 2.71329 144.598 2.71329 144.448 2.74126C144.748 2.82518 144.598 2.85315 143.697 2.85315C143.997 2.90909 144.898 2.88112 144.748 2.96504C145.198 2.96504 145.499 2.99301 145.949 2.99301C145.499 3.04895 144.598 2.99301 144.448 3.04895C144.898 3.1049 144.898 3.13287 144.147 3.1049C143.547 3.1049 142.796 3.07692 143.547 3.16084C143.997 3.16084 144.598 3.16084 145.048 3.21678ZM4.22374 1.48252C4.07361 1.48252 4.07361 1.48252 4.07361 1.51049C4.07361 1.48252 4.22374 1.48252 4.22374 1.48252ZM42.0572 1.9021C42.2073 1.93007 42.2073 1.9021 42.3575 1.9021C42.2073 1.9021 42.0572 1.9021 42.0572 1.9021ZM60.8238 2.32168C60.6737 2.32168 60.6737 2.32168 60.8238 2.32168V2.32168ZM48.2126 2.01399C48.2126 1.98601 48.2126 1.98601 48.2126 2.01399V2.01399ZM41.1564 2.54545C41.0063 2.54545 41.0063 2.54545 40.8561 2.51748C40.8561 2.51748 40.706 2.51748 40.706 2.54545C40.8561 2.54545 41.0063 2.54545 41.1564 2.54545ZM24.4917 2.18182C24.6418 2.15385 24.4917 2.15385 24.4917 2.18182V2.18182ZM48.8132 2.7972C48.9633 2.7972 48.9633 2.7972 48.8132 2.7972V2.7972ZM45.8105 2.71329C45.6604 2.71329 45.6604 2.74126 45.3601 2.74126C45.5102 2.71329 45.6604 2.71329 45.8105 2.71329ZM17.2853 2.18182C17.2853 2.20979 17.2853 2.20979 17.2853 2.18182V2.18182ZM110.518 1.62238C110.518 1.62238 110.518 1.59441 110.368 1.62238C110.368 1.62238 110.368 1.62238 110.217 1.62238C110.368 1.62238 110.368 1.62238 110.518 1.62238ZM122.678 2.62937C122.678 2.6014 122.829 2.6014 122.829 2.57343C122.528 2.6014 122.528 2.6014 122.678 2.62937ZM87.5474 3.02098C87.5474 3.02098 87.3973 3.02098 87.3973 3.04895C87.5474 3.04895 87.8477 3.04895 87.9978 3.04895C87.8477 3.02098 87.6976 3.02098 87.5474 3.02098ZM97.0058 1.45455C97.0058 1.42657 97.0058 1.42657 97.0058 1.45455C97.0058 1.42657 96.8557 1.42657 97.0058 1.45455ZM119.826 1.84615C119.976 1.84615 119.976 1.84615 119.826 1.84615C119.976 1.81818 120.126 1.81818 120.126 1.79021C119.976 1.79021 119.826 1.79021 119.676 1.79021C119.826 1.81818 119.826 1.81818 119.826 1.84615ZM118.175 1.37063C118.024 1.3986 118.024 1.3986 118.175 1.37063V1.37063ZM74.7861 3.41259C74.7861 3.44056 74.7861 3.44056 74.636 3.46853C74.7861 3.46853 74.9363 3.46853 75.0864 3.46853C74.9363 3.44056 74.9363 3.44056 74.7861 3.41259ZM105.413 0.867133C105.563 0.867133 105.563 0.867133 105.713 0.867133C105.713 0.867133 105.563 0.867133 105.413 0.867133ZM61.4243 0.531469C61.2742 0.531469 61.2742 0.531469 61.4243 0.531469V0.531469ZM142.196 3.58042C142.796 3.52448 143.247 3.55245 143.847 3.58042C143.397 3.58042 142.796 3.58042 142.196 3.58042ZM80.3411 0.335664C80.4912 0.335664 80.6413 0.335664 80.7915 0.363636C80.4912 0.335664 80.3411 0.335664 80.3411 0.335664Z"
                                            fill="url(#paint0_linear_122_8)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_122_8" x1="124.235"
                                                y1="4.37008e-06" x2="-2.57609" y2="44.3541"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#EF5C92" />
                                                <stop offset="0.247843" stop-color="#A85CC5" />
                                                <stop offset="1" stop-color="#6698FB" />
                                            </linearGradient>
                                        </defs>
                                    </svg>

                                </span>
                            </span> products?
                        </h3>
                        <a class="tp-btn-lg" href="about-us.html">Explore More
                            <i>
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.6742 4.74002C17.3484 4.25133 16.8597 3.92554 16.2896 3.76264C15.0679 3.5183 13.9276 4.25133 13.6018 5.3916L12.8688 7.99794L5.78281 1.07486C4.96833 0.260384 3.66516 0.260384 2.93213 1.07486L2.85068 1.15631C2.60633 1.40065 2.52489 1.645 2.44344 1.97079C1.8733 1.88934 1.22172 2.13369 0.81448 2.54093C-0.081448 3.27396 -0.162896 4.57712 0.570136 5.3916L0.651584 5.47305L1.14027 6.04319C0.977376 6.12463 0.81448 6.20608 0.651584 6.36898C0.244344 6.77622 0 7.26491 0 7.83504C0 8.40518 0.244344 8.89386 0.570136 9.38255C5.04977 13.9436 6.67873 15.4097 7.08597 15.7355C7.9819 16.4685 9.36652 16.9572 10.6697 16.9572C11.4842 16.9572 12.2172 16.7943 12.9502 16.3056C14.3348 15.3282 15.4751 14.0251 16.0452 12.8034C16.2896 12.3961 16.6968 11.1744 17.9186 6.36898C18.0814 5.79884 18 5.22871 17.6742 4.74002ZM14.4163 12.2332C14.0091 13.2106 13.0317 14.2694 11.8914 15.0025C11.0769 15.5726 9.12217 15.2468 8.1448 14.4323C7.819 14.1065 6.19005 12.7219 1.79186 8.16083C1.71041 8.07938 1.62896 7.99794 1.62896 7.83504C1.62896 7.75359 1.71041 7.5907 1.79186 7.50925C1.95475 7.26491 2.28054 7.26491 2.52489 7.50925L5.04977 10.0341C5.21267 10.197 5.45701 10.2785 5.61991 10.2785H5.70136C5.86425 10.2785 6.1086 10.197 6.27149 9.95269C6.59728 9.62689 6.59728 9.13821 6.27149 8.81242L1.79186 4.25133C1.62896 4.08844 1.62896 3.84409 1.79186 3.76264C2.0362 3.5183 2.36199 3.5183 2.60633 3.76264L4.80543 5.88029L7.00453 8.07938C7.16742 8.24228 7.41176 8.32373 7.65611 8.32373C7.90045 8.32373 8.06335 8.24228 8.22624 8.07938C8.55204 7.75359 8.55204 7.26491 8.22624 6.93911L4.0724 2.86672C3.9095 2.70382 3.9095 2.37803 4.0724 2.13369C4.23529 1.97079 4.47964 1.97079 4.64253 2.13369L12.7059 10.0341C12.8688 10.197 13.0317 10.2785 13.276 10.2785C13.5204 10.2785 13.7647 10.197 13.8462 10.1156C14.0091 9.95269 14.009 9.87124 14.0905 9.70834V9.62689L15.1493 5.79884C15.2308 5.47305 15.5566 5.31016 15.8824 5.3916C16.0452 5.3916 16.1267 5.47305 16.2081 5.63595C16.2896 5.79884 16.2896 5.88029 16.2896 6.04319C15.1493 10.3599 14.6606 11.826 14.4163 12.2332ZM8.06335 1.56355C8.30769 1.645 8.47059 1.80789 8.71493 1.88934C8.95928 1.97079 9.12217 2.13369 9.36652 2.29658C9.69231 2.54093 10.0995 2.86672 10.4253 3.19251C10.7511 3.5183 11.0769 3.84409 11.3213 4.25133C11.4842 4.41423 11.7285 4.57712 11.9729 4.57712C12.1357 4.57712 12.2986 4.49568 12.3801 4.41423C12.7873 4.16988 12.8688 3.6812 12.6244 3.27396C12.2986 2.78527 11.9729 2.37803 11.5656 1.97079C11.1584 1.56355 10.7511 1.23776 10.2624 0.911967C10.0181 0.749072 9.77376 0.667624 9.52941 0.504728C9.20362 0.341832 8.95928 0.178936 8.71493 0.0974882C8.30769 -0.146856 7.819 0.0974882 7.65611 0.504728C7.41176 0.911967 7.65611 1.40065 8.06335 1.56355ZM4.96833 14.7581C4.72398 14.6767 4.47964 14.5138 4.31674 14.4323C4.0724 14.2694 3.9095 14.188 3.66516 14.0251C3.25792 13.6993 2.93213 13.3735 2.60633 13.0477C2.28054 12.7219 2.0362 12.3147 1.79186 11.9074C1.54751 11.5816 1.05882 11.4187 0.651584 11.6631C0.325792 11.9074 0.162896 12.3961 0.40724 12.8034C0.733032 13.2921 1.05882 13.7807 1.46606 14.188C1.8733 14.5952 2.28054 15.0025 2.76923 15.3282L3.50226 15.8169C3.50226 15.8169 3.99095 16.0613 4.23529 16.2242C4.31674 16.3056 4.47964 16.3056 4.56109 16.3056C4.88688 16.3056 5.13122 16.1427 5.37557 15.8169C5.53846 15.4097 5.37557 14.921 4.96833 14.7581Z"
                                        fill="url(#paint0_linear_106_218)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_106_218" x1="0" y1="8.47848" x2="18"
                                            y2="8.47848" gradientUnits="userSpaceOnUse">
                                            <stop offset="1" stop-color="#EE0979" />
                                            <stop offset="1" stop-color="#FF6A00" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta-area-end -->

@endsection
