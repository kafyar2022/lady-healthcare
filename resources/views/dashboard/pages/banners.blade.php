@extends('dashboard.layouts.master')

@section('content')
  @include('layouts.header')

  <main class="events-off">
    <section class="banner">
      <h2 class="visually-hidden">Баннеры</h2>

      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides events-on">
            @foreach ($banners as $banner)
              <li class="glide__slide" data-banner="{{ json_encode($banner) }}" data-id="{{ $banner->id }}">
                <div class="container glide__container events-off">
                  <h2 class="glide__title">{{ $banner->title }}</h2>
                  <p class="glide__text">{{ $banner->text }}</p>
                  <a class="button glide__link events-on" {{ $banner->url ? 'href=' . $banner->url : '' }} target="_blank">{{ $banner->link }}</a>
                </div>

                <img class="glide__img events-off" src="{{ asset('files/banners/' . $banner->img) }}" alt="{{ $banner->title }}">
              </li>
            @endforeach
          </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--right events-on" data-glide-dir=">"></button>
        </div>
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/banners.js') }}" type="module"></script>
@endsection
