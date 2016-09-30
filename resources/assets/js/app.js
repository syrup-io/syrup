require('./bootstrap');

Vue.component('organizations', require('./components/Organization.vue'));

 new Vue({
   el: '#app',
   data: {
     message: 'Hello Vue.js!'
   }
})
