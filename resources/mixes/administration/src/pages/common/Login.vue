<template>
    <div class="login">
      <div class="login-con">
        <div class="login-header">
          <img src="../../assets/images/login-logo.png" alt="">
        </div>
        <div class="login-form">
          <Form ref="loginForm" :model="loginForm" :rules="loginRule">
            <FormItem prop="username">
                <Input type="text" icon="ios-person" class="prepend"  v-model="loginForm.username" size="large" placeholder="用户名/邮箱/手机号码"></Input>
            </FormItem>
            <FormItem prop="password">
                <Input type="password" icon="ios-unlocked" class="prepend" v-model="loginForm.password" size="large" placeholder="请输入密码"></Input>
            </FormItem>
            <Checkbox v-model="loginForm.remember" class="remember">记住密码？</Checkbox>
            <FormItem>
              <Button type="primary" :loading="loginLoading" size="large" long @click="handleSubmit('loginForm')">
                <span v-if="!loginLoading">登录</span>
                <span v-else>登录中...</span>
              </Button>
            </FormItem>
          </Form>
        </div>
      </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      loginForm: {
        username: '',
        password: ''
      },
      loginRule: {
        username: [
          { required: true, message: '请输入用户名', trigger: 'blur' }
        ],
        password: [
          { required: true, message: '请输入密码', trigger: 'blur' },
          { type: 'string', min: 6, message: '密码长度不能少于6位', trigger: 'blur' }
        ]
      },
      loginLoading: false
    }
  },
  methods: {
    handleSubmit(name) {
      this.loginLoading = true;
      this.$refs[name].validate((valid) => {
        if (valid) {
          this.$Message.success('Success!');
        } else {
          this.loginLoading = false;
        }
      })
    }
  }
}
</script>
