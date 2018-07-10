<template>
    <footer>
        <div class="footer-content">
            <el-row :gutter="20">
                <el-col :span="6">
                    关于我
                    <ul>
                        <li><a>我的网站</a></li>
                        <li><a>商务合作</a></li>
                    </ul>
                </el-col>
                <el-col :span="6">
                    合作伙伴
                    <ul>
                        <li><a>。。。</a></li>
                        <li><a>。。。</a></li>
                        <li><a>。。。</a></li>
                    </ul>
                </el-col>
                <el-col :span="6">
                    联系我
                    <ul>
                        <li>AJ is pig</li>
                        <li>Tel：18578919701</li>
                        <li>Email：13667272476@163.com</li>
                        <li>家住：广西省南宁市</li>
                        <li>现住：广州天河</li>
                    </ul>
                </el-col>
                <el-col :span="6" class="last">
                    <img src="/img/wx.jpg"/>
                </el-col>
            </el-row>
            <div class="py">
                <dl>
                    <dd>友情链接</dd>:
                    <dd><a href="#">AJ首页</a></dd>|
                    <dd><a href="#">AJ首页</a></dd>|
                    <dd><a href="#">AJ首页</a></dd>|
                    <dd><a href="#">AJ首页</a></dd>|
                    <dd><a href="#">AJ首页</a></dd>
                </dl>
            </div>
            <!--分割线-->
            <div class="division"></div>
            <!--分割线-->
            <div class="publish">
                <p>© 20018-, 桂ICP备。。。。。。号</p>
            </div>
        </div>
        <transition name="el-zoom-in-top">
            <div title="返回顶部" class="to_top" :class="{'topFlag': topFlag}" v-show="topFlag"  @click="toTop()">
                <i class="el-icon-caret-top"></i>
            </div>
        </transition>
    </footer>
</template>

<script>
    export default {
        data: ()=>({
            topFlag: false
        }),
        mounted:function(){
            this.$nextTick(function () {
                window.addEventListener('scroll',this.handleScroll);
                this.startScroll()
            })
        },
        methods: {
            handleScroll(){
               var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
               if(scrollTop > 50){
                   this.topFlag = true
               }else{
                   this.topFlag = false
               }
            },
            //点击回到顶部时
            toTop(){
                window.scrollTo(0,0)
            },
            //开始时判断滚动条位置
            startScroll(){
                var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                if(scrollTop > 50){
                    this.topFlag = true
                }else{
                    this.topFlag = false
                }
            }
        }
    }
</script>
