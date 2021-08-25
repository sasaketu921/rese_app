/**
 まず、このプロジェクトのすべての JavaScript 依存関係をロードします。
 * Vue およびその他のライブラリが含まれます。次の場合に最適な出発点です。
 * Vue と Laravel を使用して、堅牢で強力な Web アプリケーションを構築します。
 */

require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import router from './router';

window.Vue = require('vue').default;

/**
 *次のコード ブロックを使用して、ユーザーを自動的に登録できます。
 * Vue コンポーネント。 Vue のこのディレクトリを再帰的にスキャンします。
 * コンポーネントを作成し、それらを「ベース名」で自動的に登録します。
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.use(VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('headerAuth-component', require('./components/HeaderAuth.vue').default);
Vue.component('card-component', require('./components/Card.vue').default);
Vue.component('detail-component', require('./views/Detail.vue').default);
// Vue.component('like-component', require('./components/Like.vue').default);

/**
 * 次に、新しい Vue アプリケーション インスタンスを作成し、それをアタッチします。
 * ページ。次に、このアプリケーションへのコンポーネントの追加を開始できます。
 * または、独自のニーズに合わせて JavaScript スキャフォールディングをカスタマイズします。
 */

const app = new Vue({
    el: '#app',
    router
});
