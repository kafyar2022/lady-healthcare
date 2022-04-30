<ul class="product-list">
  @foreach ($drugs as $drug)
    <li class="product-list__item">
      <x-drug :drug="$drug" />
    </li>
  @endforeach
</ul>
{{ $drugs->links('components/pagination') }}
