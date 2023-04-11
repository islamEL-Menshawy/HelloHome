@extends('partial.app')
{{--@section('title', $attributes['contact_page_title_'. app()->getLocale()])--}}
@section('title', 'News')
@section('main-style')
    <link rel="stylesheet" href="{{ asset('assets/content/css/news.css') }}" />
@endsection
@section('content')
    <div class="news pt-2">
        <div class="container">
            <div class="news-container">
                <div class="news-wrapper">
                    <div class="view-article-header">
                        <img
                            src="{{ $news['image_url'] }}"
                            class="img-fluid" alt="" />
                    </div>
                    <div class="news-main-title">{{ $news['title_'. app()->getLocale() ] }}</div>
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
                    <div class="view-article-date-name">
                        <div class="article-date">{{ $news['date'] }}<span class="ml-3 mr-3"> |</span> {{ $news['author'] }}</div>
                    </div>
                    <div class="news-main-text">
                        {!! $news['content_'. app()->getLocale() ] !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
