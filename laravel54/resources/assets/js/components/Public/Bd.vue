<template>
    <el-container>
        <el-main class="el-main" style="width: 70%;">
            <router-view></router-view>
        </el-main>
        <el-aside style="width: 30%;">
            <!--登陆小模块start-->
            <login></login>
            <!--登陆小模块end-->
            <!--热门小模块start-->
            <recommend></recommend>
            <!--热门小模块end-->
            <!--最新-->
            <lastest></lastest>
            <!--最新-->
        </el-aside>
    </el-container>
</template>

<style scoped>
    .el-main{
        padding: 0 20px 0 0;
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
