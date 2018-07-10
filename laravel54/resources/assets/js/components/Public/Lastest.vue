<template>
    <!--最新小版块-->
    <div class="lastest" v-show="is_show">
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <span>最新内容</span>
                <el-button style="float: right; padding: 3px 0;color: #f56c6c;" type="text" @click="hideLastest()">&times;</el-button>
            </div>
            <div v-for="o in 4" :key="o" class="text item">
                {{'列表内容 ' + o }}
            </div>
            <div class="division"></div>
            <div class="more">
                <a href="#">查看更多>>></a>
            </div>
        </el-card>
    </div>
</template>
<style scoped src="../../../css/lastest.css">

</style>
<script>
    export default {
        data: ()=>({
            is_show: true
        }),
        methods:{
            hideLastest() {
                this.is_show = false
            }
        }
    }
</script>