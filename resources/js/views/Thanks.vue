<template>
  <div>
    
    <div class="card">
     <p>会員登録ありがとうございます</p>
     <button>ログインする</button>
    </div>
  </div>
   
  
</template>

<script>

</script>

<style scoped>
button {
  width: 100px;
  color: #fff;
  background-color: blue;
  border-radius: 10px;
  cursor: pointer;
}
.card {
  margin: 100px auto;
  width: 350px;
  background: #fff;
  border-radius: 10px;
}
.card p {
  
  color: black;
  font-weight: bold;
  font-size: 2rem;
  height: 5vh;
  text-align: left;
  line-height: 5vh;
  padding-left: 1rem;

  border-radius: 1rem 1rem 0 0;
  
}

input {
  width: 80%;
  border-radius: 10px;
  padding: 1rem 3rem;
  border: 1px solid black;
  color: black;
}
.input-form {
  text-align: center;
  display: inline-block;
}
.input-form button {
  margin-top: 15px;
}

.input-form img {
  width: 4rem;
  margin-left: 1.5rem;
  margin-right: 1.5rem ;
}
.form {
  display: flex;
  margin-top: 1.5rem;
  margin-left: 1.5rem;
}
</style>