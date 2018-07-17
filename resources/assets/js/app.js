
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('request-component', require('./components/request-component.vue'));
//Vue.component('request-listener', require('./components/request-listener.vue'));
Vue.component('privatecomponent', require('./components/privatecomponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
        requests: [],
        myrequests: []
        
        
    },
    created(){
        
        Echo.channel('Live_requests')
        .listen('Requests', (e) => {
            console.dir(e);
            //alert('echo listener is working');
            this.requests.push({
                http: e.http
                
              });
            console.dir(this.requests);
        });

        Echo.private('Personal.nachmanrosen')
        .listen('Myrequests', (e) => {
            console.dir(e);
            alert('private echo listener is working');
            this.myrequests.push({
                http: e.http
                
              });
            console.dir(this.myrequests);
        });  
    },
   
});



