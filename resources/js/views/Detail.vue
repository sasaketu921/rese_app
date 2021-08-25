<template>
<div id="app">
<div class="bg-light mt-5 justify-content-between " >
    <main role="main" class="container" style="padding: 0px">

  <div class="row ">
   <div class="col-md-7 rounded "><!-- cod-8 メイン・セクション開始 -->
    <h2> <p class ='text-left font-weight-bold m-3'>{{ detail.name }}</p></h2>
      <img class="shop-img rounded " :src="detail.img" /> 
     <div class="content-section">
       <p class="mt-3">#{{ detail.areas_name }}<span class="ml-2">#{{ detail.genres_name }}</span></p>
     </div>
      <p class="mb-3 font-weight-bold">{{detail.overview}}</p>
   </div>

   <div class="col-md-3 bg-primary ml-3 border border-dark rounded ">
    <div class="reserve">
      <div class="date">
       <input class="mt-5 rounded" type="date">
      </div>

      <div class="mt-3 rounded">
       <select class="rounded">
              <option value='' disabled selected style='display:none;'>予約時間</option>
              <option value="12:00">17:00</option>
              <option value="13:00">18:00</option>
              <option value="14:00">19:00</option>
              <option value="15:00">20:00</option>
              <option value="16:00">21:00</option>
              <option value="16:00">22:00</option>
       </select>
      </div>
      <div class="mt-3 rounded">
       <select class="rounded">
              <option value='' disabled selected style='display:none;'>人数</option>
              <option value="1">1人</option>
              <option value="2">2人</option>
              <option value="3">3人</option>
              <option value="4">4人</option>
              <option value="5">5人</option>
              <option value="6">6人</option>
       </select>     
      </div>

      <div class="mt-3">
        <button @click="$router.push('/done')" type="button" class="btn btn-secondary center-block ">予約する</button>
      </div>

    </div>
   </div>
  </div>
  </main>
 </div>
  
  


</div>

</template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      detail:[]
    }
  },
  async created() {
    const shop_id = this.$route.params.shop_id
    console.log(shop_id);
    const item = await axios.get("http://127.0.0.1:8000/api/v1/shops/" + shop_id);
    console.log(item);
    this.detail = item.data.data[0]
    console.log(this.detail);
  },
};
</script>


<style scoped>
img {
  width: 50%;
}
</style>