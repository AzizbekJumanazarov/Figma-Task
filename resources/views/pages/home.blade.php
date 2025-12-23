@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="main-menu">
            <nav class="main-nav">
                <ul>
                    <li class="selecting"><a href="#">Афиша</a></li>
                    <li><a href="#">Сеансы</a></li>
                    <li><a href="#">Кинотеатр</a></li>
                    <li><a href="#">Контакты</a></li>

                    <button class="button main-button">Войти</button>
                    <button class="button main-button">Написать отзыв</button>
                </ul>
            </nav>
        </section>
        <section class="dates-menu">
            <div class="dates-section">
                <button class="button main-button">Сегодня</button>
                <button class="button secondary-button">Завтра</button>
                <button class="button secondary-button">Воскресенье, 10 сент.</button>
                <button class="button secondary-button">Понедельник, 11 сент.</button>
                <button class="button secondary-button">Вторник, 12 сент.</button>
                <button class="button secondary-button">Среда, 13 сент.</button>
            </div>
        </section>
        <section class="cards-section">
            <div class="cards-block">
                <div class="cards-item">
                    <div class="cards-image">
                        <div class="cards-label">
                            <p>ПРЕМЬЕРА</p>
                        </div>
                        <img src="{{ asset('images/cards/cards1.svg') }}" alt="Cards Image">
                    </div>

                    <div class="title-section"><p>Праздники</p></div>
                    <div class="section-genre">
                        <div class="cards-genre"><p>комедия</p></div>
                    </div>
                    <div class="dates-list-cards">
                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>15:35</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>1233 ₸</p>
                                </div>
                            </div>
                            <p>Зал 3</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>17:40</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>3080 ₸</p>
                                </div>
                            </div>
                            <p>Зал 6 VIP</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>19:15</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>1700 ₸</p>
                                </div>
                            </div>
                            <p>Зал 4</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>21:05</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>1700 ₸</p>
                                </div>
                            </div>
                            <p>Зал 3</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>21:40</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>4030 ₸</p>
                                </div>
                            </div>
                            <p>Зал 6 VIP</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>22:44</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>1700 ₸</p>
                                </div>
                            </div>
                            <p>Зал 3</p>
                        </div>

                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-image">
                        <img src="{{ asset('images/cards/cards2.svg') }}" alt="Cards Image">
                    </div>

                    <div class="title-section"><p>Мег 2: Бездна</p></div>
                    <div class="section-genre">
                        <div class="cards-genre"><p>экшен</p></div>
                        <div class="cards-genre"><p>триллер</p></div>
                    </div>
                    <div class="dates-list-cards">
                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>15:35</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>1233 ₸</p>
                                </div>
                            </div>
                            <p>Зал 3</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>17:40</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>3080 ₸</p>
                                </div>
                            </div>
                            <p>Зал 6 VIP</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>19:15</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>1700 ₸</p>
                                </div>
                            </div>
                            <p>Зал 4</p>
                        </div>

                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-image">
                        <img src="{{ asset('images/cards/cards3.svg') }}" alt="Cards Image">
                    </div>

                    <div class="title-section"><p>Заложники</p></div>
                    <div class="section-genre">
                        <div class="cards-genre"><p>экшен</p></div>
                        <div class="cards-genre"><p>триллер</p></div>
                    </div>

                    <div class="dates-list-cards">
                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>15:35</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>1233 ₸</p>
                                </div>
                            </div>
                            <p>Зал 3</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>17:40</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>3080 ₸</p>
                                </div>
                            </div>
                            <p>Зал 6 VIP</p>
                        </div>

                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-image">
                        <img src="{{ asset('images/cards/cards4.svg') }}" alt="Cards Image">
                    </div>

                    <div class="title-section"><p>Леди Баг и Супер-Кот: Пробуждение силы</p></div>
                    <div class="section-genre">
                        <div class="cards-genre"><p>фентези</p></div>
                        <div class="cards-genre"><p>боевик</p></div>
                        <div class="cards-genre"><p>мелодрама</p></div>
                        <div class="cards-genre"><p>мультфильм</p></div>
                        <div class="cards-genre"><p>комедия</p></div>
                    </div>

                    <div class="dates-list-cards">
                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>15:35</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>1233 ₸</p>
                                </div>
                            </div>
                            <p>Зал 3</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>17:40</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>3080 ₸</p>
                                </div>
                            </div>
                            <p>Зал 6 VIP</p>
                        </div>

                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-image">
                        <div class="cards-label">
                            <p>ПРЕМЬЕРА</p>
                        </div>
                        <img src="{{ asset('images/cards/not-found.svg') }}" alt="Cards Image">
                    </div>

                    <div class="title-section"><p>Когда не загрузилась афиша</p></div>
                    <div class="section-genre">
                        <div class="cards-genre"><p>комедия</p></div>
                    </div>

                    <div class="dates-list-cards">
                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>15:35</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>1233 ₸</p>
                                </div>
                            </div>
                            <p>Зал 3</p>
                        </div>

                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <p>17:40</p>
                                <div class="dates-list-price">
                                    <p>2D</p>
                                    <p>3080 ₸</p>
                                </div>
                            </div>
                            <p>Зал 6 VIP</p>
                        </div>

                    </div>
                </div>

                <div class="cards-item">
                    <div class="cards-image">
                        <div class="cards-label">
                            <p>ПРЕМЬЕРА</p>
                        </div>
                        <img src="{{ asset('images/cards/cards5.svg') }}" alt="Cards Image">
                    </div>

                    <div class="title-section"><p>Руслан и Людмила. Больше, чем сказка</p></div>
                    <div class="section-genre">
                        <div class="cards-genre"><p>анимационое приключение</p></div>
                    </div>

                    <div class="dates-list-cards">
                        <div class="dates-list-item">
                            <div class="dates-list-clock">
                                <button>Сеансы на Завтра</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
