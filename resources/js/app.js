/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import $ from 'jquery';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('nav-bar', require('./components/NavBar.vue').default);
Vue.component('services', require('./components/Services.vue').default);
Vue.component('social-protection-form', require('./components/SocialProtectionForm.vue').default);
Vue.component('bourse-form', require('./components/BourseForm.vue').default);
Vue.component('demande-card', require('./components/DemandeCard.vue').default);
Vue.component('suivie', require('./components/Suivie.vue').default);
Vue.component('statistics', require('./components/Statistics.vue').default);


//admin
Vue.component('social-protection-modal', require('./components/admin/SocialProtectionModal').default);
Vue.component('social-protection-table', require('./components/admin/SocialProtectionTable').default);
Vue.component('familial-protection-table', require('./components/admin/FamilialProtectionTable').default);
Vue.component('bourse-modal', require('./components/admin/BourseModal').default);
Vue.component('bourse-table', require('./components/admin/BourseTable').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
