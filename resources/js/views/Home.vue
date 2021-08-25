<template>
  <div id="app">
    <div class="container">
    <h1>Rese</h1>
      <div class="card">
        
        <a href="/login" class="btn btn-blue">ログイン</a>
        <a href="/register" class="btn btn-blue">アカウント作成</a>
      </div>

    </div>
    
</div>
</template>

<script>


</script>

<style scoped>
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 300px;
  height: 700px;
}

.card {
  width: 300px;
  justify-content: center;
  background: #fff;
}


.btn-blue,
a.btn-blue {
  color: #fff;
  background-color: #3490dc;
  border: 1px solid black;
  margin-bottom: 10px;
}

h1 {
  margin-right: 50px;
}


</style>