<template>
<div>
    <main class="page">
        <div class="breadcrumbs">
            <div class="breadcrumbs__container">
                <div class="breadcrumbs__list">
                    <li><a href="#" class="breadcrumbs__link">Личный кабинет</a></li>
                    <li><a href="#" class="breadcrumbs__link _active">Мои путешествия</a></li>
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
                        <a href="#" class="sidebar-personalarea__item _active">
                            <div class="sidebar-personalarea__icon _icon-travel"></div>
                            <div class="sidebar-personalarea__label">Мои путешествия <span class="sidebar-personalarea__quantity-red">(2)</span></div>
                        </a>
                        <router-link :to="{name:'notes'}" class="sidebar-personalarea__item">
                            <div class="sidebar-personalarea__icon _icon-note"></div>
                            <div class="sidebar-personalarea__label">Мои заметки</div>
                        </router-link>
                        <a href="#" class="sidebar-personalarea__item">
                            <div class="sidebar-personalarea__icon _icon-peoples"></div>
                            <div class="sidebar-personalarea__label">Мои попутчики</div>
                        </a>
                    </div>
                    <div class="personalarea__trips trips-personalarea">
                        <div class="trips-personalarea__filter">
                            <div class="trips-personalarea__label">Путешествия</div>
                            <div class="trips-personalarea__trips">
                                <select name="trips" class="trips-personalarea__select">
                                    <option value="1" selected>Предстоящие</option>
                                </select>
                            </div>
                        </div>
                        <div class="trips-personalarea__content">
                            <div class="trips-personalarea__label">Предстоящие</div>
                            <div class="trips-personalarea__items">
                                <div class="trips-personalarea__item item-trips">
                                    <a href="#" class="item-trips__img">
                                        <picture><source srcset="img/home/note/01.webp" type="image/webp"><img src="img/home/note/01.jpg?_v=1645699867180" alt=""></picture>
                                    </a>
                                    <div class="item-trips__sale">
                                        <div class="item-trips__date _icon-calendar">02 -12 сентября 2021</div>
                                        <div class="item-trips__status">НЕ ОПЛАЧЕНО</div>
                                    </div>
                                    <div class="item-trips__title"><a href="#">Экспедиция на Шантарские острова с Григорием
                                        Кубатьяном: китовый архипелаг</a></div>
                                    <div class="item-trips__text">Николаевск-на-Армуре - б. Рейнеке - б. Врангеля - б. Онгачан
                                        - о. Большой Шантар - о. Феклистова - з. Николая - б. ВРангеля - б. Рейнеке -
                                        Николаевск-на-Амуре</div>
                                    <div class="item-trips__nav">
                                        <a href="#" class="item-trips__btn btn-orange btn _icon-send">Подробнее о
                                            путешествии</a>
                                        <a href="#" class="item-trips__btn btn-orange btn _icon-send">Оплатить онлайн</a>
                                    </div>
                                </div>
                                <div class="trips-personalarea__item item-trips">
                                    <a href="#" class="item-trips__img">
                                        <picture><source srcset="img/home/note/01.webp" type="image/webp"><img src="img/home/note/01.jpg?_v=1645699867180" alt=""></picture>
                                    </a>
                                    <div class="item-trips__sale">
                                        <div class="item-trips__date _icon-calendar">02 -12 сентября 2021</div>
                                        <div class="item-trips__status item-trips__status-green">ОПЛАЧЕНО</div>
                                    </div>
                                    <div class="item-trips__title"><a href="#">Экспедиция на Шантарские острова с Григорием
                                        Кубатьяном: китовый архипелаг</a></div>
                                    <div class="item-trips__text">Николаевск-на-Армуре - б. Рейнеке - б. Врангеля - б. Онгачан
                                        - о. Большой Шантар - о. Феклистова - з. Николая - б. ВРангеля - б. Рейнеке -
                                        Николаевск-на-Амуре</div>
                                    <div class="item-trips__nav">
                                        <a href="#" class="item-trips__btn btn-orange btn _icon-send">Подробнее о
                                            путешествии</a>
                                        <a href="#" class="item-trips__btn btn-orange btn _icon-send">Оплатить онлайн</a>
                                    </div>
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
    name: "MyTrips"
}
</script>

<style scoped>

</style>
