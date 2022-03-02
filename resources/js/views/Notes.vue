<template>
    <div>
        <main class="page">
            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <div class="breadcrumbs__list">
                        <li><a href="#" class="breadcrumbs__link">Личный кабинет</a></li>
                        <li><a href="#" class="breadcrumbs__link _active">Мои заметки</a></li>
                    </div>
                </div>
            </div>
            <section class="personalarea">
                <div class="personalarea__container">
                    <h1 class="personalarea__title title">Личный кабинет</h1>
                    <div class="personalarea__body">
                        <div class="personalarea__sidebar sidebar-personalarea">
                            <button type="button" class="sidebar-personalarea__menu">Меню</button>
                            <router-link :to="{name:'editpage'}" class="sidebar-personalarea__item">
                                <div class="sidebar-personalarea__icon _icon-person"></div>
                                <div class="sidebar-personalarea__label">Мои данные</div>
                            </router-link>
                            <router-link :to="{name:'myTrips'}" class="sidebar-personalarea__item">
                                <div class="sidebar-personalarea__icon _icon-travel"></div>
                                <div class="sidebar-personalarea__label">Мои путешествия <span class="sidebar-personalarea__quantity">(2)</span></div>
                            </router-link>
                            <a href="#" class="sidebar-personalarea__item _active">
                                <div class="sidebar-personalarea__icon _icon-note"></div>
                                <div class="sidebar-personalarea__label">Мои заметки</div>
                            </a>
                            <a href="#" class="sidebar-personalarea__item">
                                <div class="sidebar-personalarea__icon _icon-peoples"></div>
                                <div class="sidebar-personalarea__label">Мои попутчики</div>
                            </a>
                        </div>
                        <div class="personalarea__note note-personalarea">
                            <form action="#" class="publish__form form-publish form-publish__note">
                                <div class="form-publish__title">Добавить заметку</div>
                                <div class="form-publish__user form-publish__user-note">
                                    <div class="form-publish__img">
                                        <picture><source srcset="img/home/user.webp" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt="User"></picture>
                                    </div>
                                    <div class="form-publish__name">Natalie Adamovich</div>
                                </div>
                                <select name="travel" class="form-publish__travel">
                                    <option value="1" selected>Выбрать путешествие</option>
                                </select>
                                <div class="form-publish__editext">
                                    <button type="button" class="form-publish__button">
                                        <img src="img/icons/edit/01.svg?_v=1645699867180" alt="">
                                    </button>
                                    <button type="button" class="form-publish__button">
                                        <img src="img/icons/edit/02.svg?_v=1645699867180" alt="">
                                    </button>
                                    <button type="button" class="form-publish__button">
                                        <img src="img/icons/edit/03.svg?_v=1645699867180" alt="">
                                    </button>
                                    <button type="button" class="form-publish__button">
                                        <img src="img/icons/edit/04.svg?_v=1645699867180" alt="">
                                    </button>
                                    <button type="button" class="form-publish__button">
                                        <img src="img/icons/edit/05.svg?_v=1645699867180" alt="">
                                    </button>
                                    <button type="button" class="form-publish__button">
                                        <img src="img/icons/edit/06.svg?_v=1645699867180" alt="">
                                    </button>
                                    <button type="button" class="form-publish__button">
                                        <img src="img/icons/edit/07.svg?_v=1645699867180" alt="">
                                    </button>
                                    <button type="button" class="form-publish__button">
                                        <img src="img/icons/edit/08.svg?_v=1645699867180" alt="">
                                    </button>
                                </div>
                                <input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="Написать заголовок" class="form-publish__input input-publish form-publish__input-note">
                                <textarea name="text" placeholder="Написать текст" class="form-publish__textarea form-publish__textarea-note"></textarea>
                                <div class="form-publish__buttons form-publish__buttons-note">
                                    <button type="submit" class="form-publish__btn btn-blue btn-orange btn _icon-send">Опубликовать</button>
                                </div>
                            </form>
                            <div class="note-personalarea__filter filter-note">
                                <div class="filter-note__label">Фильтр по путешествиям:</div>
                                <div class="filter-note__select">
                                    <select name="title" class="filter-note__title">
                                        <option value="1" selected>Название путешествия</option>
                                    </select>
                                </div>
                            </div>
                            <div class="post__slider slider-post">
                                <div class="slider-post__body">
                                    <article class="slider-post__slide slide-post">
                                        <div class="slide-post__heading heading-post">
                                            <div class="heading-post__user">
                                                <div class="heading-post__info">
                                                    <div class="heading-post__img">
                                                        <picture><source srcset="img/home/user.webp" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt=""></picture>
                                                    </div>
                                                    <div class="heading-post__content">
                                                        <div class="heading-post__main">
                                                            <div class="heading-post__name">Natalie Adamovich</div>
                                                            <div class="heading-post__date _icon-calendar">09:55, 21 декабря 2021
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-da=".slide-post__heading,700" class="heading-post__edit">
                                                    <button type="button" class="heading-post__btn">Редактировать</button>
                                                    <button type="button" class="heading-post__btn">Удалить</button>
                                                </div>
                                            </div>
                                            <div class="heading-post__notes">Заметка из путешествия: <span> Название
													путешествия</span></div>
                                        </div>
                                        <div class="slide-post__content content-post">
                                            <h3 class="content-post__title">Парусник «Надежда» завершил плавательную практику 2021
                                                года</h3>
                                            <div class="content-post__text">В этом году судно приняло более 500 курсантов из МГУ
                                                им. адм. Г.И. Невельского и Сибирского ГУВТа. Практика проходила в пять потоков в
                                                период с января по декабрь 2021 года. За это время судно совершило 8 учебных рейсов
                                                и прошло свыше 10 тыс. морских миль вдоль берегов Приморья, Хабаровского края и
                                                острова Сахалин.</div>
                                            <div class="content-post__img content-post__img-note">
                                                <picture><source srcset="img/home/post/02.webp" type="image/webp"><img src="img/home/post/02.jpg?_v=1645699867180" alt=""></picture>
                                            </div>
                                        </div>
                                        <div class="slide-post__review review-post">
                                            <button class="review-post__item _icon-like">Нравится</button>
                                            <button class="review-post__item _icon-comment">Комментировать</button>
                                        </div>
                                        <div class="slide-post__comments comments-post">
                                            <div class="comments-post__comment">
                                                <div class="comments-post__img">
                                                    <picture><source srcset="img/home/user.webp" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt=""></picture>
                                                </div>
                                                <div class="comments-post__content">
                                                    <div class="comments-post__name">Oksana Dovzhenko</div>
                                                    <div class="comments-post__text">Согласна, крутая поездка!</div>
                                                    <div class="comments-post__review">
                                                        <button class="comments-post__button">Нравится</button>
                                                        <button class="comments-post__button">Ответить</button>
                                                        <div class="comments-post__time">14:33</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comments-post__add">
                                                <div class="comments-post__img">
                                                    <picture><source srcset="img/home/user.webp" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt=""></picture>
                                                </div>
                                                <form action="#" class="comments-post__write">
                                                    <textarea name="Comment" class="comments-post__textarea" placeholder="Напишите комментарий..."></textarea>
                                                    <div class="form-publish__buttons">
                                                        <button type="submit" class="form-publish__btn btn-blue btn-orange btn _icon-send">Опубликовать</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="slider-post__pagination">
                                    <div class="pagging">
                                        <button type="button" data-da=".pagging__pagination,474.98,0" class="pagging__arrow _icon-arrow-prev"></button>
                                        <ul class="pagging__list">
                                            <li>
                                                <a href="" class="pagging__item _active">1</a>
                                            </li>
                                            <li>
                                                <a href="" class="pagging__item">2</a>
                                            </li>
                                            <li>
                                                <a href="" class="pagging__item">3</a>
                                            </li>
                                            <li>
                                                <a href="" class="pagging__item">...</a>
                                            </li>
                                            <li>
                                                <a href="" class="pagging__item">47</a>
                                            </li>
                                        </ul>
                                        <button type="button" data-da=".pagging__pagination,474.98,1" class="pagging__arrow _icon-arrow-next _active"></button>
                                        <div class="pagging__pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</template>

<script>
export default {
    name: "Notes"
}
</script>

<style scoped>

</style>
