<template>
    <div>
        <main class="page">
            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <div class="breadcrumbs__list">
                        <li><a href="#" class="breadcrumbs__link">Личный кабинет</a></li>
                        <li><a href="#" class="breadcrumbs__link _active">Группа путешествия “На шантарские острова”</a></li>
                    </div>
                </div>
            </div>
            <section class="posts">
                <div class="posts__container">
                    <h1 class="posts__title title">Группа путешествия <br> “{{info.name}}”</h1>
                    <div class="posts__promo promo-posts">
                        <div class="promo-posts__img">
                            <picture><source :srcset="info.image" type="image/webp"><img :src="info.image" alt=""></picture>
                        </div>
                        <div class="promo-posts__info">
                            <h3 class="promo-posts__title">{{info.name}}</h3>
                            <div class="promo-posts__date _icon-calendar">{{info.date_start}} - {{info.date_end}}</div>
                            <div class="promo-posts__participants">Количество участников: <span>20</span></div>
                            <div class="promo-posts__peoples">
                                <picture><source srcset="img/home/peoples/01.webp" type="image/webp"><img src="img/home/peoples/01.png?_v=1645699867180" alt=""></picture>
                                <picture><source srcset="img/home/peoples/01.webp" type="image/webp"><img src="img/home/peoples/01.png?_v=1645699867180" alt=""></picture>
                                <picture><source srcset="img/home/peoples/02.webp" type="image/webp"><img src="img/home/peoples/02.png?_v=1645699867180" alt=""></picture>
                                <picture><source srcset="img/home/peoples/01.webp" type="image/webp"><img src="img/home/peoples/01.png?_v=1645699867180" alt=""></picture>
                                <picture><source srcset="img/home/peoples/01.webp" type="image/webp"><img src="img/home/peoples/01.png?_v=1645699867180" alt=""></picture>
                                <picture><source srcset="img/home/peoples/02.webp" type="image/webp"><img src="img/home/peoples/02.png?_v=1645699867180" alt=""></picture>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="publish">
                <div class="publish__container">
                    <div class="publish__title">Опубликовать новую запись в группе путешествия</div>
                    <form action="#" class="publish__form form-publish">
                        <div class="form-publish__user">
                            <div class="form-publish__img">
                                <picture><source :srcset="'user-photos/'+user.image" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt="User"></picture>
                            </div>
                            <div class="form-publish__name">{{user.name}} {{user.f_name}}</div>
                        </div>
                        <input v-model="write_title" autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="Написать заголовок" class="form-publish__input input-publish">
                        <textarea v-model="write_text" name="text" placeholder="Написать текст" class="form-publish__textarea"></textarea>
                        <div id="formPreview" class="form-publish__preview"></div>
                        <div class="form-publish__buttons">
                            <a @click="postWrite" type="submit" class="form-publish__btn btn-blue btn-orange btn _icon-send">Опубликовать</a>
                            <div class="form-publish__file">
                                <input id="formImage" accept=".jpg, .png" type="file" ref="attach" v-on:change="handAttach()" name="image" class="input-file">
                                <button type="button" class="form-publish__select btn-select-blue _icon-file"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="post">
                <div class="post__container">
                    <form action="#" class="post__search search-post">
                        <div class="search-post__search">
                            <input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="Поиск по заметкам" class="input-search">
                            <button type="button" class="search-post__btn">
                                <img src="img/icons/search.svg?_v=1645699867180" alt="">
                            </button>
                        </div>
                        <div class="search-post__options options">
                            <div class="options__item">
                                <input id="formAll" type="radio" checked name="all" class="options__input">
                                <label for="formAll" name="all" class="options__label"><span>Все заметки</span></label>
                            </div>
                            <div class="options__item">
                                <input id="formAdministration" type="radio" name="all" class="options__input">
                                <label for="formAdministration" class="options__label"><span>От администрации</span></label>
                            </div>
                        </div>
                    </form>
                    <div class="post__slider slider-post">
                        <div class="slider-post__body" v-for="item in writes">
                            <article class="slider-post__slide slide-post" >
                                <div class="slide-post__heading heading-post">
                                    <div class="heading-post__user">
                                        <div class="heading-post__info">
                                            <div class="heading-post__img">
                                                <picture><source :srcset="'user-photos/'+item.users[0]['image']" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt=""></picture>
                                            </div>
                                            <div class="heading-post__content">
                                                <div class="heading-post__main">
                                                    <div class="heading-post__name">{{item.users[0]['name']}} {{item.users[0]['f_name']}}</div>
                                                    <div class="heading-post__date _icon-calendar">09:55, 21 декабря 2021 </div>
                                                </div>
                                                <div class="heading-post__status">
                                                    <div class="heading-post__icon _icon-status"></div>
                                                    <div class="heading-post__label">Матрос</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div data-da=".slide-post__heading,700" class="heading-post__edit">
                                 <button type="button" class="heading-post__btn">Редактировать</button>
                                 <button type="button" class="heading-post__btn">Удалить</button>
                              </div> -->
                                    </div>
                                    <div class="heading-post__notes">Заметка из путешествия: <span>{{info.name}}</span></div>
                                </div>
                                <div class="slide-post__content content-post">
                                    <h3 class="content-post__title">{{item.title}}</h3>
                                    <div class="content-post__text">{{item.text}}</div>
                                    <div class="content-post__img" v-if="item.image">
                                        <picture><source :srcset="'user-photos/'+item.image" type="image/webp"><img src="img/home/post/02.jpg?_v=1645699867180" alt=""></picture>
                                    </div>
                                </div>
                                <div class="slide-post__review review-post">
                                    <a @click="setLike(item.id)" class="review-post__item _icon-like">Нравится ({{item.likes.length}})</a>
                                    <button class="review-post__item _icon-comment">Комментировать</button>
                                </div>
                                <div class="slide-post__comments comments-post">
                                    <div class="comments-post__comment" v-for="comment in item.comments">
                                        <div class="comments-post__img">
                                            <picture><source :srcset="'user-photos/'+comment.users[0].image" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt=""></picture>
                                        </div>
                                        <div class="comments-post__content" >
                                            <div class="comments-post__name">{{comment.users[0]['name']}} {{comment.users[0]['f_name']}}</div>
                                            <div class="comments-post__text">{{comment.text}}</div>
                                            <div class="comments-post__review">
                                                <button class="comments-post__button">Нравится</button>
                                                <button class="comments-post__button">Ответить</button>
                                                <div class="comments-post__time">{{comment.created_at}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-post__add">
                                        <div class="comments-post__img">
                                            <picture><source :srcset="'user-photos/'+user.image" type="image/webp"><img src="img/home/user.jpg?_v=1645699867180" alt=""></picture>
                                        </div>
                                        <form action="#" class="comments-post__write">
                                            <textarea :id="'comment_add_'+item.id" name="Comment" class="comments-post__textarea" placeholder="Напишите комментарий..."></textarea>
                                            <div class="form-publish__buttons">
                                                <a @click="postCom(item.id)" type="submit" class="form-publish__btn btn-blue btn-orange btn _icon-send">Опубликовать</a>
                                                <div class="form-publish__file">
                                                    <input id="commentsImage" accept=".jpg, .png" type="file" name="image" class="input-file">
                                                    <button type="button" class="form-publish__select btn-select-orange _icon-file"></button>
                                                </div>
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
        </main>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data()
    {
        return {
            info:[],
            token: $cookies.get('token'),
            user:[],
            writes:[],
            write_title:null,
            write_text:null,
            file:null
        }
    },
    mounted() {
        this.getData();
        this.authUser()
    },
    methods: {
        handAttach(){
            this.file = this.$refs.attach.files[0];
            console.log(this.file)
        },
        postCom(id)
        {
            let data = new FormData();
            data.append('write_id', id);
            data.append('text', $('#comment_add_'+id).val());
            data.append('token', this.token);

            axios.post('/api/postComm',data,{
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(({data}) => {
                    console.log(data)
                    $('#comment_add_'+id).val('')
                    this.getData();
                })
        },
        setLike(id)
        {
            let data = new FormData();
            data.append('write_id', id);
            data.append('token', this.token);

            axios.post('/api/setLike',data,{
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(({data}) => {
                    console.log(data)
                    this.getData();
                })
        },
        postWrite()
        {
            let data = new FormData();
            data.append('title', this.write_title);
            data.append('text', this.write_text);
            data.append('adventure_id', this.info.id);
            data.append('token', this.token);
            data.append('image', this.file);

            axios.post('/api/postWrite',data,{
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(({data}) => {
                    console.log(data)
                    this.getData();
                    this.file = null
                })
        },
        getData()
        {
            axios.post('/api/getAdventures?page=1')
                .then(({data}) => {
                    this.info = data['data'][0];

                    this.writes = data['data'][0]['writes']
                    console.log(this.writes)
                })
        },
        authUser()
        {
            let data = {
                'token': this.token,
            }
            axios.post('/api/userInfo', data)
                .then(({data}) => {

                    this.user = data
                })
        }
    }
}
</script>

