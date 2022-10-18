@extends('dashboard.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная =></a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">Направлении</li>
    </ul>

    @if (count($data->directions) != 0)
      <table class="page__table">
        <thead>
          <tr>
            <th>№</th>
            <th>Название</th>
            <th colspan="2">Действия</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data->directions as $key => $direction)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div style="min-width: max-content">
                  {{ $direction->title }}
                </div>
              </td>
              <td data-action="edit" data-id="{{ $direction->id }}" data-direction="{{ $direction->title }}" style="cursor: pointer">Редактировать</td>
              <td>
                <a data-action="delete" data-id="{{ $direction->id }}">Удалить</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <p>Нет данных</p>
    @endif

    <form action="{{ route('directions.post', 'store') }}" method="post" style="width: max-content; margin: 40px 0px">
      @csrf
      <fieldset>
        <legend>Добавить новое направление</legend>
        <input type="text" name="title" placeholder="Направление">
        <button type="submit">Добавить</button>
      </fieldset>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/directions.js') }}" type="module"></script>
@endsection
