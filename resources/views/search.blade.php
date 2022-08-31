@extends('partial.app')
@section('title', 'Search')

@section('content')
    <div class=" container about ">
        <div class="search-mainimg w-100 mb-39">

            <div class="image position-relative">
                <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/search.png')}}"
                      />
                <div class="row container">
                    <h1 class="my-3 text-center main-text col-12">SEARCH</h1>
                </div>
            </div>



        </div>
        <div class="row filter-section justify-content-between px-md-33 px-2 mb-md-50 mb-4">
            <h3 class="my-4 filter-exp text-center ">Explore 100+ Hotel Apartments & Villas in Egypt</h3>
            <p
                class="col-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 d-md-flex d-none filter-icon align-items-center justify-content-center check-sel-filter">
                filtter
            </p>
            <div class="col-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 check-sel-filter">
                <span class="filter-spanTitel px-md-3">Locations</span>
                <select name="select" placeholder="New Cairo" multiple multiselect-max-items="1" multiselect-select-all="true">
                    <option value="1">New Cairo</option>
                    <option value="2">El Sheikh Zayed</option>
                    <option value="3">New Capital</option>
                    <option value="4">Nasr City</option>
                </select>
            </div>
            <div class="col-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 check-sel-filter">
                <span class="filter-spanTitel px-md-3">Compound</span>
                <select name="select" placeholder="Mivida" multiple multiple multiselect-max-items="1" multiselect-search="true" multiselect-select-all="true">
                    <option value="1">Mivida</option>
                    <option value="2">LakeView</option>
                    <option value="3">Marassi</option>
                    <option value="4">Cairo Festival City</option>
                </select>
            </div>
            <div class="col-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 check-sel-filter">
                <span class="filter-spanTitel px-md-3">Property Type</span>
                <select name="select" placeholder="Apartment" multiple multiple multiselect-max-items="1" multiselect-search="true" multiselect-select-all="true">
                    <option value="1">Apartment</option>
                    <option value="2">Villa</option>
                    <option value="3">Studio</option>
                    <option value="4">Twin House</option>
                </select>
            </div>
            <button type="button"
                    class="btn btn-success Searchcol-md-4 img-33-sm img-49 col-6 img-220-md px-md-0 px-2 mb-3 d-flex search-icon align-items-center justify-content-center check-sel-filter">Search</button>

        </div>

        <div class="advanc-slider w-100 row gx-0 justify-content-between ">
            <div class="slider advsear col-lg-4 img-33-md col-xl-3 img-25-ds col-md-6 img-49-sm col-12 ">
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider advsear col-lg-4 img-33-md col-xl-3 img-25-ds col-md-6 img-49-sm col-12 ">
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider advsear col-lg-4 img-33-md col-xl-3 img-25-ds col-md-6 img-49-sm col-12 ">
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider advsear col-lg-4 img-33-md col-xl-3 img-25-ds col-md-6 img-49-sm col-12 ">
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider advsear col-lg-4 img-33-md col-xl-3 img-25-ds col-md-6 img-49-sm col-12 ">
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider advsear col-lg-4 img-33-md col-xl-3 img-25-ds col-md-6 img-49-sm col-12 ">
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider advsear col-lg-4 img-33-md col-xl-3 img-25-ds col-md-6 img-49-sm col-12 ">
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}" />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1Copy.png')}}"
                              />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider advsear col-lg-4 img-33-md col-xl-3 img-25-ds col-md-6 img-49-sm col-12 ">
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('assets/App_images/adv1-Copy2.png')}}"
                              />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="image position-relative">
                        <img class="lazy img-fluid w-100" src="{{asset('asset/App_images/adv1.png')}}"
                              />
                        <div class="row container justify-content-between">
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0 ">
                                <span>Location</span>
                                <p>New Cairo</p>
                            </div>
                            <div class="text-gallery col-md-5 col-6 img-49 ps-0">
                                <span>Property Type</span>
                                <p>Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 text-center my-30">
                <button type="button" class="btn btn-outline-light seemore-buton">See more</button>

            </div>

        </div>
        <div class="our-home my-30">
            <h2 class="sec-titleHome my-4">Explore Our Home Collection</h2>


            <div class="gx-0 row justify-content-between serach">

                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria1.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria2.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria3.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria4.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria5.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria2.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria3.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria4.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria5.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria3.png')}}">

                </div>
                <div class="col-md-auto img-220-sm col-6 img-49 py-3 ">
                    <img class=" img-fluid w-100" src="{{asset('assets/App_Images/aria4.png')}}">

                </div>

                <div class="col-12 text-center">
                    <button type="button" class="btn btn-outline-light seemore-buton">See more</button>

                </div>

            </div>

        </div>

        <!--   <div class="container">

            <div class="row justify-content-md-between justify-content-center py-5 my-5">
                <div class="col-md-6">
                    <div class="slider slider-for d-flex justify-content-center">
                        <div>
                            <h3><img class="img-fluid w-100" src="App_images/img-111.png" alt=""></h3>
                        </div>

                        <div>
                            <h3><img class="img-fluid w-100 rounded" src="App_images/img-21.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid w-100 rounded" src="App_images/img-21.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid w-100" src="App_images/img-111.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid w-100" src="App_images/img-111.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid w-100 rounded" src="App_images/img-21.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid w-100" src="App_images/img-111.png" alt=""></h3>
                        </div>
                    </div>
                    <div class="slider slider-nav">
                        <div>
                            <h3><img class="img-fluid rounded" src="App_images/img-21.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid rounded" src="App_images/img-31.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid rounded" src="App_images/img-21.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid rounded" src="App_images/img-51.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid rounded" src="App_images/img-41.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid rounded" src="App_images/img-111.png" alt=""></h3>
                        </div>
                        <div>
                            <h3><img class="img-fluid rounded" src="App_images/img-41.png" alt=""></h3>
                        </div>
                    </div>
                </div>


            </div>
        </div> -->

        <script type='text/javascript'
                src='https://platform-api.sharethis.com/js/sharethis.js#property=63030dc8de1069001998acc6&product=sop'
                async='async'></script>
    </div>

@endsection
