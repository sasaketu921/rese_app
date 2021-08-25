<template>
 <div>
  

   <div class="card">
     <div class="card-name">
     <p>Registration</p>
     </div>
     <div class="input-form">
       <div class="form">
        <img class="user-img" src="../assets/user.png" alt="">
        <input placeholder="Username" type="text" v-model="name" />
       </div>
       <div class="form">
        <img class="email-img" src="../assets/email.png" alt="">
        <input placeholder="Email" type="email" v-model="email" />
       </div>
       <div class="form">
        <img class="key-img" src="../assets/key.png" alt="">
        <input placeholder="Password" type="password" v-model="password" />
       </div>
        <button @click="insert">登録</button>
     </div>
   </div>
 </div>
</template>

<script>
import axios from "axios";
export default {
  components: {
    
  },
  data() {
    return {
      name: "",
      email: "",
      password: ""
    };
  },
  methods: {
    async insert() {
      const sendData = {
        name: this.name,
        email: this.email,
        password: this.password
      };
      await axios.post("http://127.0.0.1:8000/api/register", sendData);
    }
  }
};
</script>

<style scoped>

button {
  width: 80px;
  text-align: center;
  padding: 4px 4px;
  color: #fff;
  background-color: rgb(60, 141, 246);
  border-radius: 10px;
  cursor: pointer;
  margin: 0 0 0 20rem;
}
.card {
  margin: 100px auto;
  width: 350px;
  background: #fff;
  padding: 0 0 2rem 0 ;
  border-radius: 10px;
}
.card p {
  color: white;
  font-weight: bold;
  text-align: center;
  font-size: 2rem;
  height: 5vh;
  text-align: left;
  line-height: 5vh;
  padding-left: 1rem;
  background-color: rgb(60, 141, 246);
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