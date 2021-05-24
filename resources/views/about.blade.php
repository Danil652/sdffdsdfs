@extends ('layouts.app')


@section ('яндекс') Страница  о  @endsection

@section ('content')
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="file:///C:/Users/Админ/Desktop/иконки/orig.png" alt="" width="72" height="57">
      <h2>Форма оформления заказа</h2>
      <p class="lead">Ниже приведен пример формы, полностью построенной с помощью элементов управления формами Bootstrap. Каждая требуемая группа форм имеет состояние проверки, которое может быть вызвано попыткой отправить форму без ее заполнения.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Ваша тележка</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Название продукта</h6>
              <small class="text-muted">Краткое описание</small>
            </div>
            <span class="text-muted">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Второй продукт</h6>
              <small class="text-muted">Краткое описание</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Третий пункт</h6>
              <small class="text-muted">Краткое описание</small>
            </div>
            <span class="text-muted">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Промо-код</h6>
              <small>ПРИМЕР КОДА</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Итого (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Промо-код">
            <button type="submit" class="btn btn-secondary">Выкупать</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Платежный адрес</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Имя</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">  Требуется действительное имя.  </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Фамилия</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">  Требуется действительная фамилия.  </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Имя пользователя</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Имя пользователя" required="">
              <div class="invalid-feedback">  Ваше имя пользователя обязательно.  </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Электронная почта <span class="text-muted">(необязательно)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">  Пожалуйста, введите действительный адрес электронной почты для получения обновлений доставки.  </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Адрес</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Главная улица" required="">
              <div class="invalid-feedback">  Пожалуйста, введите свой адрес доставки.  </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Адрес 2 <span class="text-muted">(необязательно)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Апартаменты или люкс">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Страна</label>
              <select class="form-select" id="country" required="">
                <option value="">Выбирать...</option>
                <option>США</option>
              </select>
              <div class="invalid-feedback">  Пожалуйста, выберите действительную страну.  </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Государство</label>
              <select class="form-select" id="state" required="">
                <option value="">Выбирать...</option>
                <option>Калифорния</option>
              </select>
              <div class="invalid-feedback">  Пожалуйста, укажите действительное состояние.  </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Застежка-молния</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">  Требуется почтовый индекс.  </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Адрес доставки совпадает с моим платежным адресом</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Сохраните эту информацию для следующего раза</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Платеж</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Кредитная карта</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Дебетовая карта</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Имя на карте</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-muted">Полное имя, как показано на карте</small>
              <div class="invalid-feedback">  Имя на карте обязательно  </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Номер кредитной карты</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">  Требуется номер кредитной карты  </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Истечение</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">  Требуется срок годности  </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">ПРОВЕРОЧНЫЙ КОД</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">  Требуется код безопасности  </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Продолжайте оформлять заказ</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017-2021 Название компании</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Конфиденциальность</a></li>
      <li class="list-inline-item"><a href="#">Условия</a></li>
      <li class="list-inline-item"><a href="#">Поддержка</a></li>
    </ul>
  </footer>
</div>


@endsection