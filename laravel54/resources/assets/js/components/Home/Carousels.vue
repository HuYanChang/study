<template>
    <div class="card">
        <el-carousel indicator-position="outside" :interval="4000" height="400px">
            <el-carousel-item v-for="(item,index) in carousels" :key="item.src" name="index">
                <!--<h3>{{ item }}</h3>-->
                <img :src="item.src"/>
            </el-carousel-item>
        </el-carousel>
    </div>
</template>

<style scoped>
    .el-carousel__item img{
        width: 100%;
        height: 100%;
    }
</style>

<script>
    export default {
        data: () => ({
            carousels: [
                {src:'/img/carousel1.jpg'},
                {src:'/img/carousel2.jpg'},
                {src:'/img/carousel3.jpg'},
                {src:'/img/carousel4.jpg'},
            ]
        }),
        methods: {

        }
    }
</script>
