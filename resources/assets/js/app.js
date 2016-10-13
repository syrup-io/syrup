require('./bootstrap');

Vue.component('example', require('./components/Example.vue'));

var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
})
