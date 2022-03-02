<template>

    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <router-link :to="{name:'home'}">
                    <a href="" class="header__logo _icon-logo"></a>
                </router-link>
                <div class="header__content">
                    <div class="header__actions actions-header" v-if="isAuth">
                        <button type="button" class="actions-header__user">
                            <div class="actions-header__icon _icon-user">
                                <!-- <picture><source srcset="img/home/user.webp" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt=""></picture> -->
                            </div>
                            <div class="actions-header__name">{{name}}</div>
                        </button>
                        <button type="button" class="actions-header__message _icon-message">
                            <span>3</span>
                        </button>
                        <button type="button" class="icon-menu">
                            <span class="icon-menu__item icon-menu__item-1"></span>
                            <span class="icon-menu__item icon-menu__item-2"></span>
                            <span class="icon-menu__item icon-menu__item-3"></span>
                            <span class="icon-menu__item icon-menu__item-4"></span>
                        </button>
                        <div class="actions-header__menu">
                            <router-link :to="{name:'editpage'}">
                                <a href="#" class="actions-header__link">
                                    <div class="actions-header__img _icon-person"></div>
                                    <span>Личный кабинет</span>
                                </a>
                            </router-link>

                            <a href="#" class="actions-header__link">
                                <div class="actions-header__img _icon-out"></div>
                                <span @click="logout">Выйти</span>
                            </a>
                        </div>
                    </div>
                    <div class="header__actions actions-header" v-else>
                        <router-link :to="{name:'auth'}">
                            <button type="button" class="actions-header__user">
                                <div class="actions-header__icon _icon-user">
                                    <!-- <picture><source srcset="img/home/user.webp" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt=""></picture> -->
                                </div>
                                <div class="actions-header__name">Войти</div>
                            </button>
                        </router-link>
                    </div>
                    <div class="header__menu menu">
                        <nav class="menu__body">
                            <ul class="menu__list">
                                <li class="menu__item"><a href="" class="menu__link">Каталог приключений</a></li>
                                <li class="menu__item"><a href="" class="menu__link">Контакты</a></li>
                                <li class="menu__item"><a href="" class="menu__link">О нас</a></li>
                                <li class="menu__item"><a href="" class="menu__link">Морской журнал</a></li>
                                <li class="menu__item"><a href="" class="menu__link">Партнёры</a></li>
                                <li class="menu__item"><a href="" class="menu__link">Архив путешествий</a></li>
                                <li class="menu__item"><a href="" class="menu__link">Календарь</a></li>
                                <li class="menu__item"><a href="" class="menu__link">Запись из архива</a></li>
                            </ul>
                            <div class="menu-active">
                                <div class="menu-active__heading">
                                    <div class="menu-active__label">Меню</div>
                                    <button class="menu-active__close">
                                        <img src="img/icons/close.svg?_v=1645699867180" alt="">
                                    </button>
                                </div>
                                <div class="menu-active__items">
                                    <a href="#" class="menu-active__link">
                                        <div class="menu-active__icon _icon-person"></div>
                                        <div class="menu-active__lead">Мои данные</div>
                                    </a>
                                    <a href="#" class="menu-active__link">
                                        <div class="menu-active__icon _icon-travel"></div>
                                        <div class="menu-active__lead">Мои путешествия <span>(2)</span></div>
                                    </a>
                                    <a href="#" class="menu-active__link">
                                        <div class="menu-active__icon _icon-note"></div>
                                        <div class="menu-active__lead">Мои заметки</div>
                                    </a>
                                    <a href="#" class="menu-active__link">
                                        <div class="menu-active__icon _icon-peoples"></div>
                                        <div class="menu-active__lead">Мои попутчики</div>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <router-view>

        </router-view>
        <footer class="footer">
            <div class="footer__body">
                <div class="footer__container">
                    <div class="footer__main">
                        <a href="#" class="footer__logo _icon-logo"></a>
                        <div data-da=".footer__container,767.98,3" class="footer__apps">
                            <a href="#" class="footer__app">
                                <picture><source srcset="img/footer/google.webp" type="image/webp"><img src="img/footer/google.png?_v=1645699867180" alt="Google pay"></picture>
                            </a>
                            <a href="#" class="footer__app">
                                <picture><source srcset="img/footer/appstore.webp" type="image/webp"><img src="img/footer/appstore.png?_v=1645699867180" alt="App store"></picture>
                            </a>
                        </div>
                    </div>
                    <div data-da=".footer__container,767.98,3" class="footer__menu menu-footer">
                        <div class="menu-footer__column">
                            <ul class="menu-footer__list">
                                <li><a href="#" class="menu-footer__item">Каталог приключений</a></li>
                                <li><a href="#" class="menu-footer__item">Контакты</a></li>
                                <li><a href="#" class="menu-footer__item">О нас</a></li>
                            </ul>
                        </div>
                        <div class="menu-footer__column">
                            <ul class="menu-footer__list">
                                <li><a href="#" class="menu-footer__item">Морской журнал</a></li>
                                <li><a href="#" class="menu-footer__item">Партнёры</a></li>
                                <li><a href="#" class="menu-footer__item">Архив путешествий</a></li>
                            </ul>
                        </div>
                        <div class="menu-footer__column">
                            <ul class="menu-footer__list">
                                <li><a href="#" class="menu-footer__item">Календарь</a></li>
                                <li><a href="#" class="menu-footer__item">Запись из архива</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__social">
                        <a href="#" class="footer__link">
                            <img src="img/footer/social/facebook.svg?_v=1645699867180" alt="Facebook">
                        </a>
                        <a href="#" class="footer__link">
                            <img src="img/footer/social/vk.svg?_v=1645699867180" alt="Vk">
                        </a>
                        <a href="#" class="footer__link">
                            <img src="img/footer/social/instagram.svg?_v=1645699867180" alt="Instagram">
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer__copy">
                <p>Copywriting © 2021</p>
            </div>
        </footer>
    </div>

</template>
<script>
import axios from "axios";

export default {
    data()
    {
        return {
            brands:[],
            token: $cookies.get('token'),
            isAuth: false,
            name:null
        }
    },
    mounted() {
        this.checkAuth()
    },
    methods: {
        checkAuth()
        {
           if(this.token) {
                this.isAuth = true;
           }

            let data = {
                'token': this.token,
            }
            axios.post('/api/userInfo', data)
                .then(({data}) => {
                    console.log(data)
                    this.name = data['name']
                })
        },
        logout()
        {
            $cookies.remove('token');
            window.location.href = 'auth';
        }
    }
}
</script>
