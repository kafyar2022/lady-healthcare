@props(['drug'])

<figure class="drug-card">
  <p class="drug-card__prescription">{{ $drug->prescription }}</p>
  <img class="drug-card__img" src="{{ asset('files/drugs/img/' . $drug->img) }}" alt="{{ $drug->title }}">
  <div class="drug-card__inner">
    <h3 class="drug-card__title" data-icon="{{ $drug->icon }}">{{ $drug->title }}</h3>
    <p class="drug-card__description">{{ $drug->description }}</p>
    <p class="drug-card__filter">{{ $drug->category === 'for-kids' ? 'Для женщин' : 'Для детей' }} / {{ $drug->direction->title }}</p>
  </div>
  <a class="drug-card__link" href="{{ route('drugs.show', $drug->slug) }}">К препарату</a>
</figure>
