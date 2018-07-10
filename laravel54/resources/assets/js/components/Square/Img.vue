<template>
       <el-row>
            <el-col :span='24'>
                <div><img :src='img' width='100%' height='400'/></div>
            </el-col>
       </el-row>
</template>

<style scoped>

</style>

<script>
    export default {
        data: () => ({
            img: '/img/btg.jpg'
        }),
        methods: {

        }
    }
</script>
