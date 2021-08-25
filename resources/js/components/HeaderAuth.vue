<template>
  <div id="app">
    <nav class="navbar">
      <div class="container">
          <a href="/"><img class="header-logo" src="/assets/rese-logo.png" alt="#"><span>Rese</span></a>
          
        

        <div class="header-right">
          <a class="login" href="login">ログイン</a>
          <a class="register" href="register">新規登録</a>
        </div>
      </div>
    </nav>

  </div>
</template>

<style scoped>

.container {
  justify-content: space-between;
  background: rgb(52, 144, 220);
  display: flex;
  font-size: 18px;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.container a span {
  margin-bottom: 1rem;
}



</style>