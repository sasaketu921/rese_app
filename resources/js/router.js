
import Router from 'vue-router'
import Home from './views/Home.vue'
import Shop from './views/Shop.vue'
import Detail from './views/Detail.vue'
import Done from './views/Done.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/shop',
      name: 'Shop',
      component: Shop,
      props: true,
    },
    {
      path: "/detail/:shop_id",
      name: "Detail",
      component: Detail,
      props: true,
    },
    {
      path: "/done",
      name: "Done",
      component: Done,      
    },
    
  ]
});