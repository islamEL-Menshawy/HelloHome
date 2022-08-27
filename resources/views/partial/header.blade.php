<header class="container ">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid d-flex justify-content-between px-0">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/App_Images/Cl-Logo-w.png') }}" class="img-fluid" alt="">
            </a>
            <div class="d-flex justify-content-end d-md-none ">
                <a href="{{ route('contact-us') }}"><svg class="mx-3" xmlns="http://www.w3.org/2000/svg" width="24.2" height="30.181"
                                               viewBox="0 0 26.2 20.181">
                        <g id="call" transform="translate(-492.484 315.571)">
                            <g id="Group_814" data-name="Group 814" transform="translate(493 -314.982)">
                                <g id="Group_813" data-name="Group 813" transform="translate(0 0)">
                                    <path id="Path_1241" data-name="Path 1241"
                                          d="M25.435,20.375l-5.079-3.387a1.482,1.482,0,0,0-1.985.322l-1.479,1.9a.632.632,0,0,1-.811.171l-.281-.155a17.008,17.008,0,0,1-4.433-3.481,17.077,17.077,0,0,1-3.482-4.433l-.154-.281a.633.633,0,0,1,.167-.814L9.8,8.74a1.483,1.483,0,0,0,.323-1.985L6.735,1.676a1.475,1.475,0,0,0-1.988-.447L2.623,2.5A3,3,0,0,0,1.257,4.278c-.765,2.787-.189,7.6,6.9,14.681,5.636,5.635,9.831,7.151,12.715,7.151a7.409,7.409,0,0,0,1.965-.257,2.993,2.993,0,0,0,1.773-1.366l1.277-2.123A1.475,1.475,0,0,0,25.435,20.375Zm-.273,1.56-1.274,2.124a2.161,2.161,0,0,1-1.275.989c-2.573.706-7.067.121-13.868-6.68S1.358,7.072,2.064,4.5a2.164,2.164,0,0,1,.99-1.277L5.177,1.948a.64.64,0,0,1,.863.194L7.88,4.9,9.424,7.22a.644.644,0,0,1-.14.861l-1.9,1.479A1.464,1.464,0,0,0,7,11.439l.151.274a17.74,17.74,0,0,0,3.625,4.625A17.758,17.758,0,0,0,15.4,19.963l.275.151a1.464,1.464,0,0,0,1.878-.388l1.479-1.9a.644.644,0,0,1,.861-.14l5.079,3.387A.639.639,0,0,1,25.162,21.935Z"
                                          transform="translate(-1 -1.018)" fill="#939191" stroke="#939191"
                                          stroke-width="1" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">


                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="index.html">Explor Homes</a>
                    </li>
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item mx-lg-3 mx-0 py-lg-0 py-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('contact-us') }}">Contact Us</a>
                    </li>



                </ul>

            </div>
        </div>
    </nav>

</header>
