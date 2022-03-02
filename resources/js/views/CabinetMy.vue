<template>
    <div>
        <main class="page">
            <div class="breadcrumbs">
                <div class="breadcrumbs__container">
                    <div class="breadcrumbs__list">
                        <li><a href="#" class="breadcrumbs__link">Личный кабинет</a></li>
                        <li><a href="#" class="breadcrumbs__link _active">Мои достижения</a></li>
                    </div>
                </div>
            </div>
            <section class="personalarea">
                <div class="personalarea__container">
                    <h1 class="personalarea__title title">Личный кабинет</h1>
                    <div class="personalarea__body">
                        <div class="personalarea__sidebar sidebar-personalarea">
                            <button type="button" class="sidebar-personalarea__menu">Меню</button>
                            <a href="#" class="sidebar-personalarea__item _active">
                                <div class="sidebar-personalarea__icon _icon-person"></div>
                                <div class="sidebar-personalarea__label">Мои данные</div>
                            </a>
                            <router-link :to="{name:'myTrips'}" class="sidebar-personalarea__item">
                                <div class="sidebar-personalarea__icon _icon-travel"></div>
                                <div class="sidebar-personalarea__label">Мои путешествия <span class="sidebar-personalarea__quantity">(2)</span></div>
                            </router-link>
                            <router-link :to="{name:'notes'}" class="sidebar-personalarea__item">
                                <div class="sidebar-personalarea__icon _icon-note"></div>
                                <div class="sidebar-personalarea__label">Мои заметки</div>
                            </router-link>
                            <a href="#" class="sidebar-personalarea__item">
                                <div class="sidebar-personalarea__icon _icon-peoples"></div>
                                <div class="sidebar-personalarea__label">Мои попутчики</div>
                            </a>
                        </div>
                        <form action="#" class="personalarea__form">
                            <div class="personalarea__info">
                                <div class="personalarea__data data-personalarea">
                                    <div class="data-personalarea__row">
                                        <div class="data-personalarea__description">
                                            <div class="data-personalarea__img">
                                                <div id="descPreview" class="data-personalarea__bg _icon-person">
                                                    <img v-if="image" :src="'/user-photos/'+this.image">
                                                </div>
                                            </div>
                                            <div class="data-personalarea__inner">
                                                <div class="data-personalarea__file">
                                                    <input id="descImage" ref="file" accept=".jpg, .png" type="file" name="image" class="input-file" v-on:change="handleFileUpload()">
                                                    <button type="button" class="data-personalarea__select btn-select-orange btn btn-orange _icon-send">Загрузить
                                                        фото</button>
                                                </div>
                                                <div class="data-personalarea__status">
                                                    <div class="data-personalarea__caption">Ваш статус:</div>
                                                    <div class="data-personalarea__line">
                                                        <div class="data-personalarea__icon _icon-status"></div>
                                                        <div class="data-personalarea__lead">Матрос</div>
                                                        <button data-tippy-content type="button" class="data-personalarea__more _icon-more"></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="data-personalarea__info data-personalarea__info-p">
                                            <div class="data-personalarea__input">
                                                <div class="data-personalarea__label">Фамилия</div>
                                                <input v-model="fname"autocomplete="off" type="text" name="form[]" data-error="Ошибка"  class="input">
                                            </div>
                                            <div class="data-personalarea__input">
                                                <div class="data-personalarea__label">Имя</div>
                                                <div class="data-personalarea__edit">
                                                    <input v-model="name" autocomplete="off" type="text" name="form[]" data-error="Ошибка"  class="input-edit">
                                                    <div class="data-personalarea__pen _icon-edit"></div>
                                                </div>
                                            </div>
                                            <div class="data-personalarea__input">
                                                <div class="data-personalarea__label">Телефон</div>
                                                <input v-model="number" name="tel" data-mask="+7,+7(___)___-__-__" autocomplete="off" type="tel"  data-error="Ошибка" class="input input-tel">
                                            </div>
                                            <div class="data-personalarea__input">
                                                <div class="data-personalarea__label">E-mail</div>
                                                <input v-model="email"autocomplete="off" type="email" name="form[]" data-error="Ошибка" class="input">
                                            </div>
                                            <div class="data-personalarea__block">
                                                <p></p>
                                                <select class="data-personalarea__place">
                                                    <option>dfd</option>
                                                </select>
                                            </div>
                                            <div class="data-personalarea__block">
                                                <select class="data-personalarea__place">
                                                    <option value="1" selected>Город</option>
                                                    <option value="2">Страна</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" data-personalarea__textarea">
                                        <div class="data-personalarea__label">О себе</div>
                                        <textarea name="about-data" placeholder="О себе" v-model="about"></textarea>
                                    </div>
                                    <a class="passports-personalarea__btn" @click="saveData">Сохранить</a>
                                </div>
                                <div class="personalarea__passports passports-personalarea">

                                    <div class="passports-personalarea__block">
                                        <div class="passports-personalarea__caption">Паспорт гражданина</div>
                                        <div class="passports-personalarea__subcaption">Основной разворот паспорта + прописка.
                                        </div>
                                        <div v-if="pass">
                                            <div class="passports-personalarea__line">
                                                <div class="passports-personalarea__column">
                                                    <div class="passports-personalarea__label">Серия:</div>
                                                    <div class="passports-personalarea__item">{{pass.series}}</div>
                                                </div>
                                                <div class="passports-personalarea__column">
                                                    <div class="passports-personalarea__label">Выдан:</div>
                                                    <div class="passports-personalarea__item">{{pass.giver}}</div>
                                                </div>
                                                <div class="passports-personalarea__column">
                                                    <div class="passports-personalarea__label">Дата выдачи:</div>
                                                    <div class="passports-personalarea__item">{{pass.date_giver}}</div>
                                                </div>
                                                <div class="passports-personalarea__column">
                                                    <div class="passports-personalarea__label">Код подразделения:</div>
                                                    <div class="passports-personalarea__item">{{pass.code}}</div>
                                                </div>
                                            </div>
                                            <div style="display:flex; justify-content:space-between;">
                                                <button class="passports-personalarea__btn">Принято</button>
                                                <a class="passports-personalarea__btn delete_pass__btn" @click="rmPass(pass.id)">Удалить</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="!pass && !loadPass">
                                        <input type="file" ref="passport" v-on:change="handleFileUpload2()">
                                        <a class="passports-personalarea__btn" @click="savePass">Сохранить паспорт</a>
                                        <br>
                                    </div>
                                    <div v-if="loadPass" style="display: flex;align-items: center;justify-content: center;padding: 15px;">
                                        <img src="img/loading.gif" alt="">
                                    </div>


                                </div>
                            </div>
                            <div class="personalarea__message">
                                <div class="personalarea__options options">
                                    <div class="options__item">
                                        <input id="formAll" type="radio" checked name="all" class="options__input">
                                        <label for="formAll" name="all" class="options__label"><span>Все заметки</span></label>
                                    </div>
                                    <div class="options__item">
                                        <input id="formAdministration" type="radio" name="all" class="options__input">
                                        <label for="formAdministration" class="options__label"><span>От администрации</span></label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </div>
</template>

<script>
import axios from "axios";
import Swal from 'sweetalert2'
import 'sweetalert2/src/sweetalert2.scss'

export default {
    data()
    {
        return {
            brands:[],
            token: $cookies.get('token'),
            isAuth: false,
            email:null,
            number:null,
            name:null,
            fname:null,
            about:null,
            file:null,
            filePass:null,
            image:null,
            pass:null,
            countries:null,
            loadPass:false,
        }
    },
    mounted() {
        this.getData();
        axios.post('/api/getCountries')
            .then(({data}) => {
                this.countries = data['data']
                console.log(this.countries)
            })

    },
    methods: {
        getData()
        {
            let data = {
                'token': this.token,
            }
            axios.post('/api/userInfo', data)
                .then(({data}) => {
                    console.log(data)
                    this.email = data['email']
                    this.number = data['phone']
                    this.name = data['name']
                    this.fname = data['f_name']
                    this.about = data['about']
                    this.image = data['image']
                    this.pass = data['passport']
                })
        },
        handleFileUpload(){
            this.file = this.$refs.file.files[0];
        },
        handleFileUpload2(){
            this.filePass = this.$refs.passport.files[0];
        },
        savePass()
        {
            this.loadPass = true;
            let data = new FormData();
            data.append('token', 'e872cb36ba83716f8fa6ebafc2955e18');
            data.append('image', this.filePass);
            axios.post('https://api.ocr.ads-soft.ru/recognition', data,{
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(({data}) => {
                    console.log(data['data'][0]['data']['results'])
                    let datas = {
                        'data':data['data'][0]['data']['results']
                    }
                    axios.post('/api/savePass', datas)
                        .then(({data}) => {
                            this.loadPass = false;
                            Swal.fire(
                                'Успех!',
                                'Паспорт успешно загружен',
                                'success'
                            )
                            this.getData();
                        })
                })
        },
        rmPass(id)
        {
            let datas = {
                'id':id,
                'token':this.token
            }
            axios.post('/api/delPass', datas)
                .then(({data}) => {
                    console.log(data);
                    Swal.fire(
                        'Успех!',
                        'Паспорт успешно удален',
                        'success'
                    )
                    this.getData();
                })
        },
        saveData()
        {
            let data = new FormData();
            data.append('email', this.email);
            data.append('phone', this.number);
            data.append('name', this.name);
            data.append('f_name', this.fname);
            data.append('about', this.about);
            data.append('token', this.token);
            data.append('image', this.file);

            axios.post('/api/userInfoSave', data,{
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(({data}) => {
                    console.log(data)
                    Swal.fire(
                        'Успех!',
                        'Данные успешно сохранены',
                        'success'
                    )
                })
                .catch(function (error) {
                    if (error.response) {
                        Swal.fire(
                            'Ошибка!',
                            'Проверьте введенные данные и повторите попытку',
                            'error'
                        )
                    } else if (error.request) {
                        // The request was made but no response was received
                        console.log(error.request);
                    } else {
                        // Something happened in setting up the request that triggered an Error
                        console.log('Error', error.message);
                    }

                });
        }
    }
}
</script>

<style scoped>
    .delete_pass__btn {
        border: 1px solid #c54040!important;
        color: #c54040!important;
    }
    .delete_pass__btn:hover {
        background-color: #c54040;
        color: white!important;
    }
</style>
