<template>
    <div class="toCent">
        <div class="auth_form">
            <div class="logo_auth">

            </div>
            <div class="form_item">
                <div class="data-personalarea__input">
                    <div class="data-personalarea__label">Email</div>
                    <input v-model="email" autocomplete="off" type="email" name="form[]" data-error="Ошибка" placeholder="Email" class="input" data-placeholder="Шабашова">
                </div>
                <br>
                <div class="data-personalarea__input">
                    <div class="data-personalarea__label">Имя</div>
                    <input v-model="name" autocomplete="off" type="email" name="form[]" data-error="Ошибка" placeholder="Имя" class="input" data-placeholder="Шабашова">
                </div>
                <br>
                <div class="data-personalarea__input">
                    <div class="data-personalarea__label">Фамилия</div>
                    <input v-model="f_name" autocomplete="off" type="email" name="form[]" data-error="Ошибка" placeholder="Фамилия" class="input" data-placeholder="Шабашова">
                </div>
                <br>
                <div class="data-personalarea__input">
                    <div class="data-personalarea__label">Пароль</div>
                    <input v-model="password" autocomplete="off" type="password" name="form[]" data-error="Ошибка" placeholder="Пароль" class="input" data-placeholder="Шабашова">
                </div>
                <br>
                <div class="data-personalarea__input">
                    <div class="data-personalarea__label">Пароль</div>
                    <input v-model="password2" autocomplete="off" type="password" name="form[]" data-error="Ошибка" placeholder="Повторите пароль" class="input" data-placeholder="Шабашова">
                </div>
                <br>
                <div>
                    <a style="    width: 250px;" @click="auth" class="item-trips__btn btn-orange btn _icon-send" @>Регистрация</a>
                    <router-link :to="{name:'auth'}" style="  margin-left:10px;  width: 165px;" class="item-trips__btn btn-orange btn _icon-send">
                        Авторизация
                    </router-link>
                </div>
            </div>
        </div>
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
            email:null,
            password:null,
            name:null,
            f_name:null,
            password2:null
        }
    },
    mounted() {

    },
    methods: {
        auth()
        {
            let data = {
                'email': this.email,
                'password': this.password,
                'name': this.name,
                'f_name': this.f_name,
            }
            axios.post('/api/register', data)
                .then(({data}) => {
                    console.log(data)
                    if(data['message'] == 'incorrect password') {
                        alert('Неверный пароль!')
                    }
                    if(data['status'] == 'success')
                    {
                        alert('Успешная регистрация!')
                        window.location.href = '/auth';
                    }
                })
        }
    }
}
</script>

<style scoped>
.auth_form {
    justify-content: center;
    width: 450px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    box-shadow: 0px 6px 15px rgb(126 126 126 / 15%);
}
.toCent {
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 30px;
    padding-bottom: 30px;
}
</style>
