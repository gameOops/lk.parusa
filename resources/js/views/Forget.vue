<template>
    <div class="toCent">
        <div class="auth_form">
            <div class="logo_auth">

            </div>
            <div class="form_item">
                <div class="data-personalarea__input">
                    <div class="data-personalarea__label">Email</div>
                    <input v-model="email" autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="Логин" class="input" data-placeholder="Шабашова">
                </div>
                <br>
                <div style="margin-bottom: 10px;">
                    <a style="    width: 250px;" @click="auth" class="item-trips__btn btn-orange btn _icon-send" @>Восстановить пароль</a>
                    <router-link :to="{name:'auth'}" style="  margin-left:10px;  width: 165px;" class="item-trips__btn btn-orange btn _icon-send">
                        Авторизация
                    </router-link>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Forget"
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
