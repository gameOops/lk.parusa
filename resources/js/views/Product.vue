<template>
    <div>
        <!-- Page info end -->


        <!-- product section -->
        <section class="product-section">
            <div class="container">
                <div class="back-link">
                    <router-link :to="{name:'all'}">
                        &lt;&lt; Back to Category
                    </router-link>

                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" :src="prod.img" alt="">
                        </div>

                    </div>
                    <div class="col-lg-6 product-details">
                        <h2 class="p-title">{{prod.name}}</h2>
                        <h3 class="p-price">{{prod.price}}</h3>
                        <h4 class="p-stock">Available: <span>In Stock</span></h4>
                        <div class="p-rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o fa-fade"></i>
                        </div>
                        <div class="p-review">
                            <a href="">3 отзыва</a>|<a href="">Оставьте отзыв</a>
                        </div>

                        <div class="quantity">
                            <p>Количество</p>
                            <div class="pro-qty"><input type="text" value="1"></div>
                        </div>
                        <a href="#" class="site-btn">SHOP NOW</a>
                        <div id="accordion" class="accordion-area">
                            <div class="panel">
                                <div class="panel-header" id="headingOne">
                                    <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        Информация
                                    </button>
                                </div>
                                <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="panel-body">
                                       <p>{{prod.desc}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingTwo">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="panel-body">
                                        <img src="/img/cards.png" alt="">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingThree">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="panel-body">
                                        <h4>7 Days Returns</h4>
                                        <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="social-sharing">
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-pinterest"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product section end -->

    </div>
</template>

<script>
import axios from "axios";

export default {
    data()
    {
        return {
            id: this.$route.params.id,
            prod: [],
            prod2:[]
        }
    },
    mounted() {
        this.getData()
    },
    methods: {
        getData()
        {
            let data = {
                'id':this.id
            }
            axios.post('/api/products',data)
                .then(({data}) => {
                    this.prod = data;
                    console.log(data);
                })
            let data2 = {
                'limit':'5'
            }
            axios.post('/api/products',data2)
                .then(({data}) => {
                    this.prod2 = data;
                    console.log(data);
                })
        }
    }
}
</script>

<style scoped>

</style>
