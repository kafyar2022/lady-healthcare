<section id="join">
  <div class="apply__container">
    <div class="apply__left"></div>
    <div class="apply__right">
      <h2 class="apply-title">{{ $mainTexts['carrier-apply-title'] }}</h2>

      <form class="apply-form" action="{{ route('carrier.apply') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="apply-form__element">
          <input class="apply-form__field" name="name" type="text" placeholder="Имя и фамилия" required data-pristine-required-message="Объязательное поле" autocomplete="off">
        </p>
        <p class="apply-form__element">
          <input class="apply-form__field" name="phone" type="tel" placeholder="Контактный телефон" required data-pristine-required-message="Объязательное поле" autocomplete="off">
        </p>
        <p class="apply-form__element">
          <input class="apply-form__field" name="email" type="email" placeholder="Почта" required data-pristine-required-message="Объязательное поле" data-pristine-email-message="Неверный email" autocomplete="off">
        </p>
        <p class="apply-form__element apply-form__element--select">
          <select class="apply-form__field" name="vacancy">
            <option value="">Выберите вакансию</option>
            @foreach ($vacancies as $vacancy)
              <option value="{{ $vacancy->id }}">{{ $vacancy->title }}</option>
            @endforeach
          </select>
        </p>
        <p class="apply-form__element apply-form__element--cv">
          <label class="apply-form__label" for="file">Загрузить своё резюме</label>
          <input class="visually-hidden" name="cv" type="file" id="file" required data-pristine-required-message="Загрузите свое резюме">
        </p>
        <p class="apply-form__element">
          <button class="button button--submit apply-form__submit" type="submit">Отправить</button>
        </p>
      </form>
      <p class="apply__aware-text">Нажимая кнопку «Отправить», я даю согласие на обработку моих персональных данных в соответствии с политикой конфиденциальности.</p>

      <button class="apply__close">Скрыть</button>
    </div>
  </div>
</section>
