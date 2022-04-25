<section class="apply" id="join">
  <h2 class="apply-title">{{ $mainTexts['carrier-apply-title'] }}</h2>

  <form class="apply-form" action="{{ route('carrier.apply') }}" method="post" enctype="multipart/form-data">
    @csrf
    <p class="apply-form__element">
      <input class="apply-form__field" name="name" type="text" placeholder="Имя и фамилия" required data-pristine-required-message="Объязательное поле">
    </p>
    <p class="apply-form__element">
      <input class="apply-form__field" name="phone" type="tel" placeholder="Контактный телефон" required data-pristine-required-message="Объязательное поле">
    </p>
    <p class="apply-form__element">
      <input class="apply-form__field" name="email" type="email" placeholder="Почта" required data-pristine-required-message="Объязательное поле" data-pristine-email-message="Неверный email">
    </p>
    <p class="apply-form__element">
      <select class="apply-form__field" name="vacancy">
        @foreach ($vacancies as $vacancy)
          <option value="{{ $vacancy->id }}">{{ $vacancy->title }}</option>
        @endforeach
      </select>
    </p>
    <p class="apply-form__element">
      <label class="apply-form__label" for="file">Загрузить своё резюме</label>
      <input class="visually-hidden" name="cv" type="file" required data-pristine-required-message="Загрузите свое резюме">
    </p>
    <p class="apply-form__element">
      <button class="apply-form__submit" type="submit">Отправить</button>
    </p>
    <p class="apply-aware">Нажимая кнопку «Отправить», я даю согласие на обработку моих персональных данных в соответствии с политикой конфиденциальности.</p>
  </form>

  <button class="apply-close">Скрыть</button>
</section>
