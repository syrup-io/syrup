require('./bootstrap');

Vue.component('organizations', require('./components/Organization.vue'));

 new Vue({
   el: 'body',
   data: {
     message: 'Hello Vue.js!'
   }
})
