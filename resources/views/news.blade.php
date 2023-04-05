@extends('partial.app')
{{--@section('title', $attributes['contact_page_title_'. app()->getLocale()])--}}
@section('title', 'News')
@section('main-style')
    <link rel="stylesheet" href="{{ asset('assets/content/css/news.css') }}" />
@endsection
@section('content')
    <div class="news">
        <div class="container">
            <div class="news-container">
                <div class="news-wrapper">
                    <div class="news-main-title">Daily News Articles </div>
                    <div class="article-line"></div>
                    <div class="news-socialmedia">
                        <a href="#" target="_blank" class="news-social-icon">
                            <i class="fab fa-instagram icon"></i>
                        </a>
                        <a href="#" target="_blank" class="news-social-icon">
                            <i class="fab fa-facebook-f icon"></i>
                        </a>
                        <a href="#" target="_blank" class="news-social-icon">
                            <i class="fab fa-youtube icon"></i>
                        </a>
                        <a href="#" target="_blank" class="news-social-icon">
                            <i class="fab fa-linkedin-in icon"></i>
                        </a>
{{--                        <button target="_blank" class="news-social-icon">--}}
{{--                            <span class="icon-printer icon"></span>--}}
{{--                        </button>--}}
                    </div>
                    <div class="news-main-text">
                        Our Daily News puts top headlines from major news sources into a real estate context each weekday,
                        alongside breaking news from NAR, business tips, and industry trends.
                    </div>

                    <div class="articles-grid">
                        <div class="article-row">
                            <div class="article-img">
                                <img
                                    src="https://magazine.realtor/sites/default/files/styles/asset_image_teaser/public/assets/images/2003_DN_LosAngeles.jpg?itok=hpEJXyRa"
                                    class="img-fluid" alt="" />
                            </div>
                            <div class="article-details">
                                <a href="{{route('view-news', ['id'=> 1])}}" class="article-title">Affordable Alternatives to the 7 Largest U.S.
                                    Cities</a>
                                <div class="article-text">Though bidding wars are pushing up prices in the suburbs, these towns offer
                                    home shoppers a respite from the expensive urban lifestyle.
                                </div>
                                <div class="article-date">May 24, 2021</div>
                            </div>
                        </div>

                        <div class="article-row">
                            <div class="article-img">
                                <img
                                    src="https://magazine.realtor/sites/default/files/styles/asset_image_teaser/public/assets/images/10_10_19_California_Blackout_Power.jpeg?itok=LOPgB25N"
                                    class="img-fluid" alt="" />
                            </div>
                            <div class="article-details">
                                <a href="{{route('view-news', ['id'=> 1])}}" class="article-title">
                                    Blackout Fears Fuel Interest in Off-Grid Homes
                                    Cities</a>
                                <div class="article-text">After 10 million Texans lost power during an ice storm earlier this year,
                                    homeowners and builders are turning their attention to self-powered homes.
                                </div>
                                <div class="article-date">May 24, 2021</div>
                            </div>
                        </div>

                        <div class="article-row">
                            <div class="article-img">
                                <img
                                    src="https://magazine.realtor/sites/default/files/styles/asset_image_teaser/public/assets/images/10_15_18_Historic_Town_Primary.jpg?itok=hWuFqb1i"
                                    class="img-fluid" alt="" />
                            </div>
                            <div class="article-details">
                                <a href="{{route('view-news', ['id'=> 1])}}" class="article-title">
                                    Buyers Eye Older Homes for Affordability, Historic Charm</a>
                                <div class="article-text">Many are seeking larger properties with a more traditional floor plan to cut
                                    down on noise while family members work and learn remotely.
                                </div>
                                <div class="article-date">May 24, 2021</div>
                            </div>
                        </div>

                        <div class="article-row">
                            <div class="article-img">
                                <img
                                    src="https://magazine.realtor/sites/default/files/styles/asset_image_teaser/public/assets/images/2003_DN_LosAngeles.jpg?itok=hpEJXyRa"
                                    class="img-fluid" alt="" />
                            </div>
                            <div class="article-details">
                                <a href="{{route('view-news', ['id'=> 1])}}" class="article-title">Affordable Alternatives to the 7 Largest U.S.
                                    Cities</a>
                                <div class="article-text">Though bidding wars are pushing up prices in the suburbs, these towns offer
                                    home shoppers a respite from the expensive urban lifestyle.
                                </div>
                                <div class="article-date">May 24, 2021</div>
                            </div>
                        </div>
                    </div>

                    <div class="articles-pagination">
                        <div aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
