@props(['drug'])

<figure class="drug-card">
  <p class="drug-card__prescription">{{ $drug->prescription }}</p>
  <img
    class="drug-card__img"
    src="{{ asset($drug->img_thumb) }}"
    width="160"
    height="160"
    alt="{{ $drug->title }}">

  <div class="drug-card__inner">
    <h3 class="drug-card__title">
      {{ $drug->title }}
      <i>
        {!! $drug->releaseForm->svg !!}
      </i>
    </h3>

    <p class="drug-card__description">{{ $drug->description }}</p>
    <p class="drug-card__filter">
      {{ $drug->category === 'for-women' ? 'Для женщин' : 'Для детей' }}
      / {{ $drug->direction->title }}
    </p>
  </div>
  <a class="button button--outlined drug-card__link" href="{{ route('products.show', $drug->slug) }}">
    К препарату
  </a>
</figure>
