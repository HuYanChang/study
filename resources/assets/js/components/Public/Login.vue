<template>
<!--登陆小版块-->
    <div class="login">
        <el-tabs type="border-card">
            <el-tab-pane label="账号登陆">
                <div class="login_info">
                    <el-input class="user"
                              placeholder="请输入账号"
                              prefix-icon="el-icon-search"
                              v-model="user">
                    </el-input>
                    <el-input class="psd"
                              placeholder="请输入密码"
                              prefix-icon="el-icon-search"
                              v-model="psd">
                    </el-input>
                </div>
                <div class="tip">
                    <el-checkbox v-model="remember">记住我</el-checkbox>
                    <span class="forgot"><a href="#">忘记密码</a></span>
                </div>
                <div class="submit">
                    <el-button type="primary" size="medium" class="refer" style="width: 100%">登陆</el-button>
                </div>
                <div class="division"></div><!--这是一条分割线-->
                <div class="register">你还没有账号？<a href="#">立即注册</a></div>
                <div class="third">
                    <dd>
                        <dl>第三方登陆：</dl>
                        <dl></dl>
                        <dl></dl>
                    </dd>
                </div>
            </el-tab-pane>
            <el-tab-pane label="安全登陆" style="height: 322px;">
            </el-tab-pane>
        </el-tabs>
    </div>
</template>
<style scoped src="../../../css/login.css">

</style>
<script>
    export default {
        data: () => ({
            user: '',
            psd: '',
            remember: false,
        }),
        methods: {
            handleClick(tab, event) {
                console.log(tab, event);
            }
        }
    }
</script>
