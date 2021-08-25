<template>

  <div id="app">
    <p>{{sendData}}</p>
    <!-- <div class="shop">
    
    <div class="card">
    <img class="card-img" :src="item.img" />
    <div class="card-content">
      <h1 class="card-title">{{ item.shops_name }}</h1>
      <p>#{{ item.areas_name}} <span>#{{ item.genres_name }}</span> </p>
      
    </div>
    <div class="card-link">
      <button @click="$router.push({ name: 'Detail', params: { id: item.shops_name} })"
        >詳しく見る</button> -->

        
    <!-- </div>
  </div>

    </div> -->

    

  </div>

</template>

<script>
export default {
  props: ["sendData"]
};
  
</script>

<style scoped>
.card {
  width: 27%;
  margin: 30px 0;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px #ccc;
}
.card-img {
  border-radius: 5px 5px 0 0;
  max-width: 100%;
  height: auto;
}
.card-content {
  padding: 20px;
}
.card-title {
  font-size: 20px;
  margin-bottom: 20px;
  text-align: center;
  color: #333;
}
.card-link {
  text-align: center;
  border-top: 1px solid #eee;
  padding: 20px;
}
.card-link a {
  text-decoration: none;
  color: #0bd;
  margin: 0 10px;
  cursor: pointer;
}
.card-link a:hover {
  color: #0090aa;
}
.card-link button {
  background-color: #3490dc;
}
</style>