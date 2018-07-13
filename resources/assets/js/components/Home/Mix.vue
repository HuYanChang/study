<template>
    <!--主题版块-->
    <div class="mix">
        <div v-for="(item,index) in lists">
            <!--图文start-->
            <div class="img" v-if="item.type == 'img'">
                <div class="img_des">
                    {{item.des}}
                </div>
                <el-row :gutter="6">
                    <el-col :span="6" v-for="(image,index) in item.images" :key="index">
                        <div class="image"><img :src="image.src"></div>
                    </el-col>
                </el-row>
                <div class="subinfo">
                    <div class="subinfo_u">
                        <dl>
                            <dd><img :src="item.photo"/></dd>
                            <dd>{{item.nickname}}</dd>
                            <dd>{{item.p_time}}</dd>
                        </dl>
                    </div>
                    <div class="subinfo_sd">
                        <dl>
                            <dd><i class="el-icon-star-off"></i>100</dd>
                            <dd><i class="el-icon-edit-outline"></i>100</dd>
                            <dd><i class="el-icon-share"></i>100</dd>
                        </dl>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!--图文end-->
            <!--新闻式start-->
            <div class="news"  v-if="item.type == 'news'">
                <el-row :gutter="20">
                    <el-col :span="6" v-for="(image,index) in item.images" :key="index">
                        <div class="image"><img :src="image.src"></div>
                    </el-col>
                    <el-col :span="18">
                        <div class="ds">
                            <div class="news_des">
                                {{item.des}}
                            </div>
                            <div class="subinfo">
                                <div class="subinfo_u">
                                    <dl>
                                        <dd><img :src="item.photo"/></dd>
                                        <dd>{{item.nickname}}</dd>
                                        <dd>{{item.p_time}}</dd>
                                    </dl>
                                </div>
                                <div class="subinfo_sd">
                                    <dl>
                                        <dd><i class="el-icon-star-off"></i>100</dd>
                                        <dd><i class="el-icon-edit-outline"></i>100</dd>
                                        <dd><i class="el-icon-share"></i>100</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </el-col>
                </el-row>
            </div>
            <!--新闻式end-->
            <!--音频式start-->
            <div class="video"  v-if="item.type == 'video'">
                <el-row :gutter="10">
                    <el-col :span="12" v-for="(vd,index) in item.video" :key="index">
                        <div class="vd"><img :src="vd.src"/></div>
                    </el-col>
                    <el-col :span="12">
                        <div class="ds">
                            <div class="vd_des">
                                {{item.des}}
                            </div>
                            <div class="subinfo">
                                <div class="subinfo_u">
                                    <dl>
                                        <dd><img :src="item.photo"/></dd>
                                        <dd>{{item.nickname}}</dd>
                                        <dd>{{item.p_time}}</dd>
                                    </dl>
                                </div>
                                <div class="subinfo_sd">
                                    <dl>
                                        <dd><i class="el-icon-star-off"></i>100</dd>
                                        <dd><i class="el-icon-edit-outline"></i>100</dd>
                                        <dd><i class="el-icon-share"></i>100</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </el-col>
                </el-row>
            </div>
            <!--音频式end-->
            <div class="division"></div>
        </div>
    </div>
</template>
<style scoped src="../../../css/mix.css">

</style>
<script>
    export default {
        data: ()=>({
            lists : [
                {
                    des: '好美啊',
                    images:[
                        {src:'/img/carousel1.jpg'},
                        {src:'/img/carousel2.jpg'},
                        {src:'/img/carousel3.jpg'},
                        {src:'/img/carousel4.jpg'},
                    ],
                    type: 'img',
                    nickname: 'Aj是猪',
                    photo: '/img/carousel1.jpg',
                    p_time: '03-01 10:10'
                },
                {
                    des: '好美啊',
                    images:[
                        {src:'/img/carousel2.jpg'}
                    ],
                    type: 'news',
                    nickname: 'Aj是猪',
                    photo: '/img/carousel2.jpg',
                    p_time: '03-01 10:10'
                },
                {
                    des: '好美啊',
                    video:[
                        {src:'/img/carousel3.jpg'}
                    ],
                    type: 'video',
                    nickname: 'Aj是猪',
                    photo: '/img/carousel3.jpg',
                    p_time: '03-01 10:10'
                },
            ]
        }),
        methods:{

        }
    }
</script>