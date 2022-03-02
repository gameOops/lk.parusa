<template>
    <div class="toCent">
        <div class="auth_form">
            <div class="logo_auth">

            </div>
            <div class="form_item">
                <div class="data-personalarea__input">
                    <div class="data-personalarea__label">Логин</div>
                    <input v-model="email" autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="Логин" class="input" data-placeholder="Шабашова">
                </div>
                <br>
                <div class="data-personalarea__input">
                    <div class="data-personalarea__label">Пароль</div>
                    <input v-model="password" autocomplete="off" type="password" name="form[]" data-error="Ошибка" placeholder="Пароль" class="input" data-placeholder="Шабашова">
                </div>
                <br>
                <div style="margin-bottom: 10px;">
                    <a style="    width: 250px;" @click="auth" class="item-trips__btn btn-orange btn _icon-send" @>Войти</a>
                    <router-link :to="{name:'register'}" style="  margin-left:10px;  width: 165px;" class="item-trips__btn btn-orange btn _icon-send">
                        Регистрация
                    </router-link>
                </div>
                <router-link :to="{name:'forget'}" style="margin-top:10px;">
                    Забыли пароль?
                </router-link>
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
            password:null
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
            }
            axios.post('/api/auth', data)
                .then(({data}) => {
                    console.log(data)
                    if(data['message'] == 'incorrect password') {
                        alert('Неверный пароль!')
                    }
                    if(data['status'] == 'success')
                    {
                        this.$cookies.set('token',data['token']);
                        alert('Успешная авторизация!')
                        window.location.href = '/';
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
