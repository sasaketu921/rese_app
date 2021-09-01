<template>

  <div id="app">
    <div class="search pull-right">
      <div class="input-group">
       <input type="text" class="form-control ">
       <span class="input-group-btn">
         <div class="search-areas mt-3 rounded">
          <select class="rounded">
              <option value='' disabled selected style='display:none;'>都道府県</option>
              <option value="東京都">東京都</option>
              <option value="大阪府">大阪府</option>
              <option value="福岡県">福岡県</option>
              
          </select>
      </div>
         <div class="search-genres mt-3 rounded">
          <select class="rounded">
              <option value='' disabled selected style='display:none;'>ジャンル</option>
              <option value="寿司">寿司</option>
              <option value="焼肉">焼肉</option>
              <option value="居酒屋">居酒屋</option>
              <option value="イタリアン">イタリアン</option>
              <option value="ラーメン">ラーメン</option>
              
          </select>
      </div>
       <button class="btn btn-default" type="submit">検索</button>
       </span>
      </div>
    </div>
    <!-- 店舗一覧 -->
    <div class="shop">
      <div class="card"  v-for="item in ShopData" :key="item.id">
          <img class="card-img" :src="item.img" />
          <div class="card-content">
            <h1 class="card-title">{{ item.shops_name }}</h1>
            <p>#{{ item.areas_name}} <span>#{{ item.genres_name }}</span> </p>
          </div>
          <!-- 店舗詳細ボタン -->
          <div class="card-link ">
            <button class="rounded p-1" @click="$router.push({ name: 'Detail', params: { shop_id: item.shops_id}})">詳しく見る</button>
            
            <!-- いいねボタン -->
            <div v-if="liked">
              　<button  type="button" class="btn btn-primary btn-sm ml-2" @click="like(item.shops_id); liked = !liked">いいね
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill ml-1 " viewBox="0 0 16 16">
                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
                </svg>
              </button>
            </div>
            <div v-else>
          　<button  type="button" class="btn btn-primary btn-sm ml-2" @click="unlike(item.shops_id), liked = !liked" >いいねを取り消す
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill ml-1 " viewBox="0 0 16 16">
            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
            </svg>
          </button>
            </div>

          </div>
      </div>
    </div>


  </div>

</template>

<script>
import axios from 'axios';
import Detail from "./Detail.vue";

export default {
  props: ['$DefaultLiked'],
  components: {
    Detail,
  },
  data() {
    return {
      ShopData: [],
      user:[],
      liked: true,
    };
    
  },
  async created() {
    let shop_url = "http://127.0.0.1:8000/api/v1/shops/";
      let user_url = "http://127.0.0.1:8000/api/v1/user";
      const allShops = await axios.get(shop_url);
      const UserData = await axios.get(user_url);     
      this.ShopData = allShops.data.data;
      console.log(UserData);
      this.user = UserData.data.data;
      }, 
      methods: {
        like(value) {
          console.log(this.liked);
          const shop_id = value;
          let url = "/api/v1/shops/" + shop_id + "/like"; 
          let like_url = "/api/v1/shops";
          axios.post(url);//お気に入りshop_idを送信
          axios.get(like_url);
          },
        unlike(value) {
          console.log(this.liked);
          const shop_id = value;
          let url = "/api/v1/shops/" + shop_id + "/unlike";
          axios.delete(url);
        }
      }
};
</script>

<style scoped>

.title {
  font-size: 2rem;
}
a {
  margin-right: 7rem;
  font-size: 1rem;
}
.header-right {
  text-align: right;
}
.header {
  display: flex;
  justify-content: space-between;
  background-color: skyblue;
}
.shop {
  display: flex;
  flex-wrap: wrap;
  margin-right: 10px;
}

/* card-style */
.card {
  width: 18%;
  margin: 30px 30px 0 auto ;
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
svg {
  display: inline-block;
}
.search {
  width: 10vw;
}
</style>