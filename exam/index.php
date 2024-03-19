<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Assets/css/reset.css" />
    <link rel="stylesheet" href="Assets/css/home.css" />
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
    <title>Модульный экзамен</title>
  </head>

  <body>
    <header>
      <div class="container header__wrapper">
        <a href="" class="header__logo">
            <!-- Логотип -->
          <img src="Assets/image/logo.png" alt="лого" width="100px"/>
        </a>
        <div class="header__contact">
          <img src="Assets/image/icons/header_phone_icon.svg" alt="телефон" />
          <a href="tel:+74957852791"
            >+7 (910) <span>123-32-21</span></a
          >
        </div>
      </div>
    </header>
    <div id="app">
      <main>
        <section id="main">
          <div class="opacity-fon">
            <div class="container main__container">
              <div class="main__content">
                <h1 class="main__content-title">
                  Демидовский университет<span>.</span>
                </h1>
                <div class="main__content-subtitle">
                  Премиальный формат обучения
                </div>
                <button class="main__content-btn">
                  Стать нашим студентом
                </button>
                <ul class="main__content-list">
                  <li class="main__content-list-item">
                    Назовите промокод <span>#PREMIUM</span> <br />
                    при обращении и получите <span>скидку 15%</span>
                  </li>
                  <li class="main__content-list-item">
                    <span>БЕСПЛАТНАЯ</span> парковка для владельцев карт
                    <br />
                    премиального обслуживания <span>Premium</span>
                  </li>
                </ul>
              </div>
              <?php session_start();
		                if($_SESSION["auth"] == ""){?>
              <form action="authorize.php" method="POST" class="right__form" v-if="formstatus">
                <div class="right__form-title">Авторизация</div>
                <div class="right__form-input-full name-full">
                  <input type="text" class="right__form-input" name="main_person_login" placeholder="Логин*" required/>
                  <div class="input_error name"></div>
                </div>
                <div class="right__form-input-full">
                  <input type="password" class="right__form-input" name="main_person_password" placeholder="Пароль*" required/>
                  <div class="input_error phone"></div>
                </div>
                <a class="regist" @click="formstatus = false">Регистрация</a>
                <button class="right__form-btn">Войти</button>
              </form>
              <?php }
              else {?>
              <form action="logout.php" method="POST" class="right__form" v-if="formstatus">
                <div class="right__form-title">Добро пожаловать - <?=$_SESSION['auth']?></div>
                <button class="right__form-btn">Выйти</button>
              </form>
              <?php } ?>
              <form action="registraciya.php" method="POST"  class="right__form" style="margin-top: -100px;" v-else>
                <div class="right__form-title">Регистрация</div>
                <div class="right__form-input-full name-full">
                  <input type="text" class="right__form-input" name="main_person_login" placeholder="Логин*" require/>
                  <div class="input_error name"></div>
                </div>
                <div class="right__form-input-full phone-full">
                  <input type="password" class="right__form-input" name="main_person_password" placeholder="Пароль*" require/>
                  <div class="input_error phone"></div>
                </div>
                <div class="right__form-input-full">
                    <input type="password" class="right__form-input" name="main_person_password_two" placeholder="Подверждение пароля" require/>
                  </div>
                  <div class="right__form-input-full">
                    <input type="text" class="right__form-input" name="main_person_family" placeholder="Фамилия"require/>
                  </div>
                  <div class="right__form-input-full">
                    <input type="text" class="right__form-input" name="main_person_name" placeholder="Имя" require/>
                  </div>
                  <div class="right__form-input-full">
                    <input type="email" class="right__form-input" name="main_person_email" placeholder="email" require/>
                  </div>
                <a class="regist" @click="formstatus = true">Авторизация</a>
                <button class="right__form-btn">Зарегистрироваться</button>
              </form>
            </div>
          </div>
        </section>

        <section id="support">
          <div class="container">
            <h2>Наши преподаватели</h2>
            <div class="support__list">
              <div class="support__list-item">
                <img
                  class="support__list-item-img"
                  src="Assets/image/user.png"
                  alt="Сотрудник"
                />
                <h5>Ольга Коновалова</h5>
                <div class="support__list-item-description">
                  Начальник отдела по работе с <br />
                  абитуриентами <br />
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/form_phone_icon.svg" alt="" />
                  <a href="tel:+74952800487"> +7 (495) 280-04-87 доб. 225</a>
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/email_logo.svg" alt="" />
                  <a href="mailto:Konovalova-ON@rostatus.ru"
                    >Konovalova-ON@rostatus.ru</a
                  >
                </div>
              </div>
              <div class="support__list-item">
                <img
                  class="support__list-item-img"
                  src="Assets/image/user1.png"
                  alt="Сотрудник"
                />
                <h5>Олег Смирнов</h5>
                <div class="support__list-item-description">
                  Начальник отдела по работе <br />
                  охранником <br />
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/form_phone_icon.svg" alt="" />
                  <a href="tel:+74952800487"> +7 (900) 280-04-87 доб. 225</a>
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/email_logo.svg" alt="" />
                  <a href="mailto:Konovalova-ON@rostatus.ru"
                    >oleg@rostatus.ru</a
                  >
                </div>
              </div>
              <div class="support__list-item">
                <img
                  class="support__list-item-img"
                  src="Assets/image/user2.png"
                  alt="Сотрудник"
                />
                <h5>Анатолий Гусев</h5>
                <div class="support__list-item-description">
                  Преподаватель <br />
                  Физики <br />
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/form_phone_icon.svg" alt="" />
                  <a href="tel:+74952800487"> +7 (292) 123-04-87 доб. 225</a>
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/email_logo.svg" alt="" />
                  <a href="mailto:Konovalova-ON@rostatus.ru"
                    >Fizika_rus@rostatus.ru</a
                  >
                </div>
              </div>
              <div class="support__list-item">
                <img
                  class="support__list-item-img"
                  src="Assets/image/user3.png"
                  alt="Сотрудник"
                />
                <h5>Петя Иванов</h5>
                <div class="support__list-item-description">
                  Преподаватель информатики <br />
                  и математики <br />
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/form_phone_icon.svg" alt="" />
                  <a href="tel:+74952800487"> +7 (123) 220-04-87 доб. 221</a>
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/email_logo.svg" alt="" />
                  <a href="mailto:Konovalova-ON@rostatus.ru"
                    >info_centr@rostatus.ru</a
                  >
                </div>
              </div>
              <div class="support__list-item">
                <img
                  class="support__list-item-img"
                  src="Assets/image/user4.png"
                  alt="Сотрудник"
                />
                <h5>Стэтхем</h5>
                <div class="support__list-item-description">
                  Преподаватель физкультуры <br />
                  и права <br />
                  лицами
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/form_phone_icon.svg" alt="" />
                  <a href="tel:+74952800487"> +7 (980) 280-21-11 доб. 225</a>
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/email_logo.svg" alt="" />
                  <a href="mailto:Konovalova-ON@rostatus.ru"
                    >Stethem@rostatus.ru</a
                  >
                </div>
              </div>
              <div class="support__list-item">
                <img
                  class="support__list-item-img"
                  src="Assets/image/user1.png"
                  alt="Сотрудник"
                />
                <h5>Олег Смирнов</h5>
                <div class="support__list-item-description">
                  Преподаватель экономики <br />
                  и стандартизации <br />
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/form_phone_icon.svg" alt="" />
                  <a href="tel:+74952800487"> +7 (900) 280-04-87 доб. 225</a>
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/email_logo.svg" alt="" />
                  <a href="mailto:Konovalova-ON@rostatus.ru"
                    >oleg@rostatus.ru</a
                  >
                </div>
              </div>
              <div class="support__list-item">
                <img
                  class="support__list-item-img"
                  src="Assets/image/user.png"
                  alt="Сотрудник"
                />
                <h5>Ольга Коновалова</h5>
                <div class="support__list-item-description">
                  Преподаватель информатики <br />
                  и математики <br />
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/form_phone_icon.svg" alt="" />
                  <a href="tel:+74952800487"> +7 (495) 280-04-87 доб. 225</a>
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/email_logo.svg" alt="" />
                  <a href="mailto:Konovalova-ON@rostatus.ru"
                    >Konovalova-ON@rostatus.ru</a
                  >
                </div>
              </div>
              <div class="support__list-item">
                <img
                  class="support__list-item-img"
                  src="Assets/image/user3.png"
                  alt="Сотрудник"
                />
                <h5>Петя Иванов</h5>
                <div class="support__list-item-description">
                  Генеральный директор <br />
                  университета <br />
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/form_phone_icon.svg" alt="" />
                  <a href="tel:+74952800487"> +7 (495) 280-04-87 доб. 225</a>
                </div>
                <div class="support__list-item-contact">
                  <img src="Assets/image/icons/email_logo.svg" alt="" />
                  <a href="mailto:Konovalova-ON@rostatus.ru"
                    >info_centr@rostatus.ru</a
                  >
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="client" class="arrow">
          <div class="container">
            <h2>Как стать нашим абитуриентом</h2>
            <div class="list__item">
              <div class="item__up">
                <div class="item__up-block">
                  <div class="item__up-block-number">01</div>
                  <div class="item__up-block-info">
                    <img
                      class="item__up-block-icon"
                      src="Assets/image/icons/paper_icon.svg"
                      alt="Иконка"
                    />
                    <div class="item__up-block-text">
                      Позвоните или заполните заявку
                    </div>
                  </div>
                </div>
                <div class="item__up-block">
                  <div class="item__up-block-number">02</div>
                  <div class="item__up-block-info">
                    <img
                      class="item__up-block-icon"
                      src="Assets/image/icons/phone_icon.svg"
                      alt="Иконка"
                    />
                    <div class="item__up-block-text">
                      Мы перезвоним Вам в течение 5 минут
                    </div>
                  </div>
                </div>
                <div class="item__up-block">
                  <div class="item__up-block-number">03</div>
                  <div class="item__up-block-info">
                    <img
                      class="item__up-block-icon"
                      src="Assets/image/icons/support_icon.svg"
                      alt="Иконка"
                    />
                    <div class="item__up-block-text">
                      Пригласим на собеседование и занесём в список
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </section>
        <div class="message message-hidden">
          <button class="close-message">
            <img src="Assets/image/icons/icon_close.png" alt="" />
          </button>
          <div class="message-text"></div>
        </div>
      </main>
    </div>
    <footer>
      <div class="container footer__wrapper">
        <h3>Демидовский университет</h3>
        <div class="footer__contact">
          <img src="Assets/image/icons/footer_phone_icon.svg" alt="Телефон" />
          <a href="tel:+74957852791">+7 (495) <span>785-27-91</span></a>
        </div>
      </div>
    </footer>

    <script>
      var app = new Vue({
        el: "#app",
        data: {
          formstatus: true,
        },
        methods: {
         
        }
        });
    </script>
  </body>
</html>

<!-- <a href="tel:+79807003323">+7 (980) 700-33-23</a> -->
<!-- <a href="mailto:kraskov_10@mail.ru">kraskov_10@mail.ru</a> -->
