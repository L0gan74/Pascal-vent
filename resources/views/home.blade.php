@extends('main')

@section('title')
    Pascal Vent
@endsection

@section('content')
    <section class="main">
        <div class="main-txt">
            <p class="main-title">Чистый Воздух</p>
            <div class="main-together">
                <span class="main-line"></span>
                <p class="main-title">вместе с</p>
            </div>
            <h1>Pascal vent</h1>
            <span class="main-desc">
                <img src="./img/points.svg" alt="points" />
                <p>
                    Проектирование, поставка и монтаж систем вентиляции и
                    кондиционирования
                </p>
            </span>
            <div class="main-bottom">
                <div class="main-bottom__location">
                    <img src="./img/location.svg" alt="location" />
                    <span>
                        <p>Московский регион, Москва</p>
                    </span>
                </div>
                <div class="main-bottom__tel">
                    <img src="./img/tel.png" alt="tel" />
                    <span>
                        <p>+ 7 492 373 63 31 + 7 424 367 89 29</p>
                    </span>
                </div>
                <div class="main-bottom__tel adp">
                    <span>
                        <img src="./img/tel.png" alt="tel" />
                        <p>+ 7 492 373 63 31</p>
                    </span>
                    <span>
                        <img src="./img/tel.png" alt="tel" />
                        <p>+ 7 424 367 89 29</p>
                    </span>
                </div>
            </div>
            <span class="main-btn">
                <button class="open-button2" type="button">Оставить заявку</button>
            </span>
        </div>
    </section>
    <section class="services" id="services">
        <div class="services-txt">
            <span class="services-title">
                <h2>Предоставляемые</h2>
                <p>услуги <span class="services-line"></span></p>
            </span>
            <p class="services-desc">
                При разработке проекта предложим техническое решение оптимальное по
                соотношению цены и качества, оно идеально впишется в ваш дизайн, а
                также будет учитывать все ваши пожелания.
            </p>
            <p class="services-desc">
                Монтаж выполняется опытными бригадами с соблюдением всех действующих
                технических норм, правил безопасности и строго по согласованному
                проекту.
            </p>
            <p class="services-desc">
                Одинаково эффективно выполняем проектирование и монтаж на объектах
                любой сложности – от небольшой квартиры, до объектов со сложными
                технологическими процессами на основе действующей нормативной
                документации.
            </p>
        </div>
        <div class="services-accordion">
            <div class="services-accordion__btn">
                <span class="services-btn__system extra-class" id="button1">
                    <svg width="33" height="33" viewBox="0 0 33 33" fill="white"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.5002 14.7344C15.5237 14.7316 14.7298 15.5209 14.7271 16.4974C14.7243 17.4738 15.5136 18.2676 16.4902 18.2703H16.4938C17.4703 18.2721 18.2634 17.482 18.2652 16.5056C18.2669 15.5292 17.4768 14.7362 16.5002 14.7344Z" />
                        <path
                            d="M16.5074 11.7876H16.5032C13.8991 11.7827 11.7842 13.8896 11.7793 16.4934C11.7744 19.0972 13.8815 21.2119 16.4856 21.2168C17.742 21.2327 18.9503 20.734 19.8298 19.8366C21.1809 18.491 21.5877 16.4639 20.8601 14.7013C20.1326 12.9388 18.4143 11.7886 16.5074 11.7876ZM16.4956 19.4488H16.4897C14.8588 19.4472 13.5378 18.1244 13.5387 16.4936C13.5395 14.8629 14.8618 13.5414 16.4927 13.5414C18.1235 13.5414 19.4458 14.8629 19.4467 16.4936C19.4474 18.1244 18.1264 19.4472 16.4956 19.4488Z" />
                        <path
                            d="M5.66887 20.6221C6.43754 19.8373 7.33701 19.1924 8.32698 18.7162C9.0934 18.2889 9.9627 18.081 10.8395 18.1151C10.2519 16.0783 10.8125 13.8831 12.3047 12.3774C10.6225 10.8148 8.47776 9.84143 6.19399 9.60403C4.76978 9.4231 3.34126 9.90531 2.31821 10.9123C1.55676 11.6775 0.96324 12.5929 0.575424 13.6003C-0.225866 15.366 -0.18867 17.3988 0.676826 19.134C0.740452 19.263 0.811814 19.375 0.880726 19.4923C1.56424 23.0966 3.47631 26.3525 6.29127 28.7052C6.45191 28.8458 6.67612 28.8885 6.87725 28.8169C7.07838 28.7452 7.22503 28.5704 7.26055 28.3599C7.29614 28.1494 7.21504 27.9361 7.04866 27.8024C4.91799 26.0207 3.33539 23.6723 2.48389 21.0287C2.58187 21.0809 2.68256 21.1277 2.78564 21.169C3.76479 21.6217 4.92353 21.402 5.66887 20.6221Z" />
                        <path
                            d="M32.4282 19.4072C33.2272 17.6408 33.1874 15.6083 32.3197 13.8746C32.2532 13.7397 32.1842 13.6118 32.1123 13.4898C31.4279 9.89663 29.5213 6.65088 26.7159 4.30341C26.5548 4.16489 26.3315 4.12376 26.1316 4.19583C25.9317 4.26789 25.7861 4.44199 25.7505 4.65148C25.7149 4.86096 25.7948 5.07335 25.9597 5.20742C28.081 6.98335 29.657 9.32277 30.5057 11.9558C30.4119 11.9128 30.317 11.8715 30.2186 11.8379C29.2402 11.3853 28.0822 11.6046 27.3371 12.3836C26.5677 13.1687 25.6677 13.8142 24.6772 14.2912C23.9105 14.718 23.0415 14.9268 22.1646 14.8947C22.7531 16.9332 22.1908 19.1305 20.6953 20.6359C22.3781 22.1952 24.5212 23.1671 26.8031 23.4057C28.2297 23.5853 29.6601 23.1029 30.6865 22.0962C31.4483 21.3311 32.0415 20.4152 32.4282 19.4072Z" />
                        <path
                            d="M13.873 0.687191C13.7497 0.74733 13.6318 0.810176 13.5194 0.875794C9.90643 1.55337 6.64274 3.46924 4.29019 6.29344C4.15488 6.45484 4.116 6.67612 4.18814 6.87394C4.26027 7.07176 4.43246 7.21615 4.6399 7.25257C4.84735 7.28905 5.05847 7.21209 5.19372 7.05069C6.97028 4.92134 9.31439 3.33942 11.954 2.48871C11.9071 2.5863 11.8652 2.68621 11.8285 2.78812C11.3817 3.76851 11.6036 4.92424 12.3819 5.6693C13.1632 6.44189 13.8081 7.34113 14.2892 8.32894C14.7147 9.09579 14.9225 9.96429 14.8903 10.8407C15.4147 10.6889 15.9576 10.611 16.5035 10.6091H16.5088C18.052 10.6103 19.5325 11.2195 20.6298 12.3045C22.1883 10.6222 23.1619 8.4817 23.4058 6.20152C23.5874 4.77521 23.1022 3.34471 22.0903 2.32319C21.3272 1.56059 20.4129 0.966163 19.4062 0.578194C17.6414 -0.229651 15.6047 -0.189494 13.873 0.687191Z" />
                        <path
                            d="M13.598 32.4282C15.3646 33.2273 17.3974 33.1872 19.1312 32.3192C19.2626 32.2549 19.3787 32.1819 19.4984 32.1112C23.0995 31.4356 26.3532 29.5278 28.7011 26.7153C28.8419 26.5543 28.8845 26.3296 28.8123 26.1283C28.74 25.9269 28.5644 25.7805 28.3532 25.7458C28.1421 25.7111 27.9288 25.7934 27.7958 25.961C26.0199 28.089 23.674 29.6666 21.0332 30.5088C21.0839 30.4148 21.1294 30.318 21.1694 30.2189C21.6166 29.2385 21.3948 28.0825 20.6165 27.3371C19.838 26.5641 19.1957 25.6651 18.7169 24.678C18.2905 23.9121 18.0818 23.0441 18.1134 22.1681C17.5873 22.3183 17.0428 22.3949 16.4956 22.3956H16.4838C14.9422 22.3928 13.464 21.7823 12.3699 20.6965C10.8116 22.3798 9.83984 24.522 9.59978 26.8031C9.41773 28.2293 9.90024 29.6602 10.9088 30.685C11.674 31.4469 12.59 32.0406 13.598 32.4282Z" />
                    </svg>

                    <p>СистемаВентиляции</p>
                </span>
                <span class="services-btn__kond" id="button2">
                    <svg width="33" height="27" viewBox="0 0 33 27" fill="#7CA281"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_86_1787)">
                            <path
                                d="M30.0996 0H2.90039C1.30105 0 0 1.29767 0 2.89286V12.5357C0 14.1309 1.30105 15.4286 2.90039 15.4286H30.0996C31.6989 15.4286 33 14.1309 33 12.5357V2.89286C33 1.29767 31.6989 0 30.0996 0ZM24.2988 5.78571C24.8328 5.78571 25.2656 6.21746 25.2656 6.75C25.2656 7.28254 24.8328 7.71428 24.2988 7.71428C23.7649 7.71428 23.332 7.28254 23.332 6.75C23.332 6.21746 23.7649 5.78571 24.2988 5.78571ZM28.166 11.5714H4.83398C4.2996 11.5714 3.86719 11.1401 3.86719 10.6071C3.86719 10.0741 4.2996 9.64286 4.83398 9.64286H28.166C28.7004 9.64286 29.1328 10.0741 29.1328 10.6071C29.1328 11.1401 28.7004 11.5714 28.166 11.5714ZM28.166 7.71428C27.6321 7.71428 27.1992 7.28254 27.1992 6.75C27.1992 6.21746 27.6321 5.78571 28.166 5.78571C28.6999 5.78571 29.1328 6.21746 29.1328 6.75C29.1328 7.28254 28.6999 7.71428 28.166 7.71428Z" />
                            <path
                                d="M8.7655 17.3572C8.23112 17.3572 7.7987 17.7885 7.7987 18.3215V19.7952C7.7987 22.0873 6.52131 24.1477 4.4659 25.1732C3.98817 25.4114 3.79462 25.9906 4.03348 26.467C4.27118 26.9398 4.84817 27.1373 5.33073 26.8983C8.04607 25.5442 9.7323 22.8227 9.7323 19.7952V18.3215C9.7323 17.7885 9.29988 17.3572 8.7655 17.3572Z" />
                            <path
                                d="M24.2344 17.3572C23.7 17.3572 23.2676 17.7885 23.2676 18.3215V19.7952C23.2676 22.8227 24.9538 25.5442 27.6691 26.8983C28.1513 27.137 28.7285 26.9402 28.9664 26.467C29.2053 25.9906 29.0117 25.4114 28.534 25.1732C26.4786 24.1477 25.2012 22.0873 25.2012 19.7952V18.3215C25.2012 17.7885 24.7688 17.3572 24.2344 17.3572Z"
                                fill="#7CA281" />
                            <path
                                d="M17.4668 26.0357V18.3215C17.4668 17.7885 17.0344 17.3572 16.5 17.3572C15.9656 17.3572 15.5332 17.7885 15.5332 18.3215V26.0357C15.5332 26.5687 15.9656 27 16.5 27C17.0344 27 17.4668 26.5687 17.4668 26.0357Z" />
                            <path
                                d="M21.334 26.0357V18.3215C21.334 17.7885 20.9016 17.3572 20.3672 17.3572C19.8328 17.3572 19.4004 17.7885 19.4004 18.3215V26.0357C19.4004 26.5687 19.8328 27 20.3672 27C20.9016 27 21.334 26.5687 21.334 26.0357Z" />
                            <path
                                d="M13.5996 26.0357V18.3215C13.5996 17.7885 13.1672 17.3572 12.6328 17.3572C12.0984 17.3572 11.666 17.7885 11.666 18.3215V26.0357C11.666 26.5687 12.0984 27 12.6328 27C13.1672 27 13.5996 26.5687 13.5996 26.0357Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_86_1787">
                                <rect width="33" height="27" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p>Кондиционирование</p>
                </span>
            </div>
            <div id="div1" class="services-accordion__item active">
                <div class="services-accordion__txt">
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-1.svg" alt="services" />
                        <p>Проектирование систем вентиляции любой сложности</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-2.svg" alt="services" />
                        <p>Монтаж приточной вентиляции</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-3.svg" alt="services" />
                        <p>Монтаж вытяжной вентиляции</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-4.svg" alt="services" />
                        <p>Монтаж вентиляции с увлажнением воздуха</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-5.svg" alt="services" />
                        <p>Монтаж вентиляции с рекуператором</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-6.svg" alt="services" />
                        <p>Монтаж вентиляции с осушением для бассейна</p>
                    </div>
                </div>
                <img class="services-img" src="./img/services-fon_1.png" alt="services" />
                <img class="services-img__adp" src="./img/services-fon_1_1.png" alt="services" />
            </div>
            <div id="div2" class="services-accordion__item">
                <div class="services-accordion__txt">
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-1.svg" alt="services" />
                        <p>Проектирование систем кондиционирования</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-2.svg" alt="services" />
                        <p>Монтаж сплит-систем</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-3.svg" alt="services" />
                        <p>Монтаж вытяжной вентиляции</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-4.svg" alt="services" />
                        <p>Монтаж мульти сплит-систем</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-5.svg" alt="services" />
                        <p>Монтаж VRV и VRF систем</p>
                    </div>
                    <div class="services-accordion__txt-item">
                        <img src="./img/services-6.svg" alt="services" />
                        <p>Монтаж настенных, канальных и кассетных кондиционеров</p>
                    </div>
                </div>
                <img class="services-img" src="./img/services-fon_2.png" alt="services" />
                <img class="services-img__adp" src="./img/services-fon_1_2.png" alt="services" />
            </div>
        </div>
    </section>
    <section class="work" id="obor">
        <div class="work-title">
            <h2>Комплексное решение по монтажу</h2>
            <p>и вентиляции под ключ <span></span></p>
        </div>
        <div class="work-wrapper">

            @foreach ($installations as $i)
                <div class="work-wrapper__item">
                    <img src="{{ 'storage/' . $i->photo }}" alt="{{ $i->photo }}" />
                    <span class="work-name">{{ $i->title }}</span>
                    <span class="work-prace">от {{ $i->price }} ₽</span>
                    @if (Auth::check() && Auth::user()->role === 'admin')
                        <div class="adm-btn">
                            <a href="{{ url('/deleteInstall') }}/{{ $i->id }}"><button
                                    type="button">удалить</button></a>
                            <a href="{{ url('/updateInstall') }}/{{ $i->id }}"><button
                                    type="button">Редактировать</button></a>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        @if (Auth::check() && Auth::user()->role === 'admin')
            <div class="adm-btn">
                <a href="{{ url('/addInstall') }}"><button type="button" class="add">Добавить</button></a>
            </div>
        @endif
    </section>
    <section class="step">
        <div class="step-wrapper">
            <div class="step-title">
                <h2>3 простых шага <span></span></h2>
                <p>к очищению воздуха</p>
            </div>
            <img class="step-adp" src="./img/step-adp.png" alt="step" />
            <div class="step-desc">
                <h3>Кажется, это знак...</h3>
                <div class="step-desc__item">
                    <img src="./img/step.svg" alt="step" />
                    <p>Получите скидку 5% на монтаж при заполнении анкеты на сайте</p>
                </div>
                <div class="step-desc__item">
                    <img src="./img/step.svg" alt="step" />
                    <p>
                        Бесплатно сделаем проект и пусконаладку системы при заказе монтажа
                    </p>
                </div>
                <div class="step-desc__item">
                    <img src="./img/step.svg" alt="step" />
                    <p>
                        Кэшбек до 10% дизайнерам при передаче Клиента и заказе у нас
                        проекта с монтажом!
                    </p>
                </div>
            </div>
        </div>
        <div class="step-line">
            <div class="vector">
                <img src="./img/vector-1.png" alt="vector" />
            </div>
            <div class="step-line__item">
                <img src="./img/line-1.svg" alt="line" />
                <p>Ваше желание</p>
            </div>
            <div class="vector">
                <img src="./img/vector-2.png" alt="vector" />
            </div>
            <div class="step-line__item">
                <img src="./img/line-2.svg" alt="line" />
                <p>Заявка</p>
            </div>
            <div class="vector">
                <img src="./img/vector-3.png" alt="vector" />
            </div>
            <div class="step-line__item">
                <img src="./img/line-3.svg" alt="line" />
                <p>Реализация</p>
            </div>
            <div class="vector">
                <img src="./img/vector-4.png" alt="vector" />
            </div>
        </div>
    </section>
    <section class="application">
        <div class="form-wrapper">
            <h2>Оставьте заявку и мы с вами свяжемся</h2>
            <form class="form request">
                <input type="text" placeholder="Ваше Имя" />
                <input type="tel" placeholder="Номер телефона" />
                <span>
                    <button type="submit">отправить</button>
                </span>
            </form>
        </div>
    </section>
    <section class="about" id="about">
        <img class="about-ellipse" src="./img/ellipse-1.png" alt="ellipse" />
        <div class="about-wrapper">
            <div class="about-wrapper__txt">
                <h2>о нас <span>Pascal vent</span></h2>
                <p class="about-title_bottom">Особенности</p>
                <p class="abot-desc">
                    Мы любим то, чем занимаемся – поэтому у нас индивидуальный подход к
                    каждому человеку, креативные решения для проекта любой сложности и
                    высокий уровень клиентского сервиса.
                </p>
                <p class="abot-desc">
                    Именно поэтому нам доверяют сложнейшие задачи, рекомендуют нас и
                    возвращаются вновь. Доверьте нам воплощение ваших самых изысканных и
                    технологичных задач, и мы сделаем всё с высочайшим уровнем сервиса
                    Pascal Vent.
                </p>
                <p class="abot-desc">
                    Pascal Vent гарантирует сертифицированные современные системы,
                    оборудование, качественные материалы и самые оптимальные решения под
                    любой бюджет.
                </p>
            </div>
            <div class="about-descr">
                <div class="about-descr__item">
                    <h3><span>10</span> лет на рынке</h3>
                    <p>Работаем как единое целое</p>
                </div>
                <div class="about-descr__item">
                    <h3><span>+ 11</span> лет стажа</h3>
                    <p>Опытные и обученые специалисты своего дела</p>
                </div>
                <div class="about-descr__item">
                    <h3><span>+ 180</span> клиентов</h3>
                    <p>Число счастливых клиентов за этот период</p>
                </div>
                <div class="about-descr__item">
                    <h3><span>+ 470 </span> проектов</h3>
                    <p>Большое количество реализованных проектов</p>
                </div>
            </div>
        </div>
    </section>
    <section class="comfort" id="polza">
        <div class="comfort-txt">
            <h2>комфорт и Уют в любое время года</h2>
            <img class="comfort-txt__img" src="./img/comfort.svg" alt="comfort" />
            <ul>
                <li>
                    <img src="./img/comfort-list.svg" alt="svg" />Создание комфортных
                    условий для работы и отдыха
                </li>
                <li>
                    <img src="./img/comfort-list.svg" alt="svg" />Чистый, свежий,
                    приточный воздух круглый год
                </li>
                <li>
                    <img src="./img/comfort-list.svg" alt="svg" />Удаление не приятных
                    запахов, избыточной влажности и накопившегося углекислого газа из
                    помещений
                </li>
                <li>
                    <img src="./img/comfort-list.svg" alt="svg" />Поддержание комфортной
                    температуры и влажности воздуха зимой и летом
                </li>
            </ul>
            <p class="comfort-desc">
                Pascsl Vent поможет улучшить ваше самочувствие и повысить
                работоспособность днем, а ночью подарит здоровый и крепкий сон. Это
                важно для тех, кто следит за своим здоровьем и здоровьем своих
                близких.
            </p>
            <span>
                <button class="open-button2" type="button">заполнить заявку</button>
            </span>
        </div>
        <img class="comfort-img" src="./img/Screenshot_1.png" alt="img" />
    </section>
    <section class="scheme" id="works">
        <h2>Понятная и эффективная схема работы</h2>
        <div class="scheme-wrapper">
          <div class="scheme-wrapper__item">
            <h3>Получение заявки</h3>
            <p>
              Заполните форму, укажите свои данные и отправьте нашим менеджерам в
              обработку
            </p>
          </div>
          <div class="scheme-wrapper__item">
            <h3>Консультация</h3>
            <p>
              После обработки Вашей заявки, мы связываемся с Вами, выявляем
              потребности и пожелания, а также проводим техническую консультацию
            </p>
          </div>
          <div class="scheme-wrapper__item">
            <h3>Выезд на объект</h3>
            <p>
              В назначенное время мы выезжаем на объект и согласовываем основные
              технические решения, обсуждаем техническое задание
            </p>
          </div>
          <div class="scheme-wrapper__item">
            <h3>Составляем График</h3>
            <p>
              На этом этапе мы составляем коммерческое предложение и занимаемся
              согласованием графика работ (проектирования, закупки оборудования и
              монтажа).
            </p>
          </div>
          <div class="scheme-wrapper__item">
            <h3>договор</h3>
            <p>
              Мы заключаем с Вами договор и начинаем проектирование и согласование
              проекта
            </p>
          </div>
          <div class="scheme-wrapper__item">
            <h3>Поставка и монтаж</h3>
            <p>
              На этом этапе, происходит поставка всех материалов и начинается
              выполнение монтажных работ
            </p>
          </div>
        </div>
        <img class="act" src="./img/act.png" alt="act">
      </section>
    <section class="portfolio">
        <img class="portfolio-img" src="./img/ellipse-1.png" alt="elipce" />
        <div class="portfolio-top">
            <h2>Портфолио И Процесс работы</h2>
            <p>
                Технические решения, принятые в рабочих чертежах, соответствуют
                требованиям экологических, санитарно-гигиенических, противопожарных и
                других норм и правил, и обеспечивают безопасную для жизни людей
                эксплуатацию объекта при соблюдении предусмотренных рабочими чертежами
                мероприятий.
            </p>
        </div>
        <div class="swiper mySwiper">
            <div class="swipper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-wrapper">

                @foreach ($portfolios as $p)
                    <div class="swiper-slide">
                        <div class="portfolio-item">
                            <img class="portfolio-item__img" src="{{ 'storage/' . $p->photo }}" alt="photo" />
                            <span>
                                <h3>{{ $p->title }}</h3>
                                <p>{{ $p->text }}</p>
                            </span>
                        </div>
                        @if (Auth::check() && Auth::user()->role === 'admin')
                            <div class="adm-btn">
                                <a href="{{ url('/deletePortfolio') }}/{{ $p->id }}"><button
                                        type="button">удалить</button></a>
                                <a href="{{ url('/updatePortfolio') }}/{{ $p->id }}"><button
                                        type="button">Редактировать</button></a>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @if (Auth::check() && Auth::user()->role === 'admin')
        <div class="adm-btn">
            <a href="{{ url('/addPortfolio') }}"><button type="button" class="add">Добавить</button></a>
        </div>
    @endif
    <section class="clients" id="rew">
        <div class="clients-txt">
            <h2>Известные клиенты<span></span></h2>
            <p class="clients-title">которые нам доверились</p>
            <p class="clients-desc">
                Реализованы проекты квартир и коммерческих помещений в жилых
                комплексах от крупных застройщиков таких как: Level, ФСК, MR групп,
                ПИК, Самолет, Гранель, Донстрой, Пионер, Эталон, А101, Sminex, Vesper,
                Инград, КРОСТ, МИЦ. Мы ценим каждого клиента Pascal Vent и с радостью
                готовы расширять нашу клиентскую базу.
            </p>
        </div>
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                @foreach ($clients as $c)
                    <div class="swiper-slide">
                        <img src="{{ 'storage/' . $c->photo }}" alt="img" />
                        @if (Auth::check() && Auth::user()->role === 'admin')
                            <div class="adm-btn">
                                <a href="{{ url('/deleteClient') }}/{{ $c->id }}"><button
                                        type="button">удалить</button></a>
                                <a href="{{ url('/updateClient') }}/{{ $c->id }}"><button
                                        type="button">Редактировать</button></a>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="swipper-btn">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        @if (Auth::check() && Auth::user()->role === 'admin')
            <div class="adm-btn">
                <a href="{{ url('/addClient') }}"><button type="button" class="add">Добавить</button></a>
            </div>
        @endif
    </section>

    <div class="popup popup2">
        <div class="popup-content">
            <button class="close-button close-button2">
                <img src="./img/close.svg" alt="close" />
            </button>
            <h3>Мы Свяжемся</h3>
            <p class="popup-title">с вами <span></span></p>
            <div class="popup-main">
                <form class="popup-form request">
                    <input type="text" placeholder="Ваше Имя" />
                    <input type="tel" placeholder="Номер телефона" />
                    <span>
                        <button type="submit">Отправить</button>
                    </span>
                </form>
            </div>
            <img class="popup-img" src="./img/logo.svg" alt="img" />
        </div>
    </div>
    @vite(['resources/js/script.js'])
@endsection
