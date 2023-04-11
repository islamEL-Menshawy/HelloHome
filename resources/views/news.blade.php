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

                      @foreach($news as $item)
                            <div class="article-row">
                                <div class="article-img">
                                    <img
                                        src="{{ $item['image_url'] }}"
                                        class="img-fluid" alt="" />
                                </div>
                                <div class="article-details">
                                    <a href="{{route('view-news', ['id'=> $item['id']])}}" class="article-title">{{ $item['title_'. app()->getLocale()] }}</a>
                                    <div class="article-text">{{ $item['author'] }}</div>
                                    <div class="article-date">{{ $item['date'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="articles-pagination">
                        @if ($news->hasPages())
                            <div class="profile-pagination main-pagination mt-5 pb-2">
                                <div aria-label="Page navigation">
                                    {{ $news->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- Pagination -->

                </div>
            </div>
        </div>
    </div>
@endsection
