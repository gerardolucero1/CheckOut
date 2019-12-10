/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('add-products-component', require('./components/AddProductsComponent.vue').default);
Vue.component('rooms-control-component', require('./components/RoomsControlComponent.vue').default);
Vue.component('assign-rooms-control-component', require('./components/AssignRoomsControlComponent.vue').default);
Vue.component('calendar-component', require('./components/CalendarComponent.vue').default);

//Chat
Vue.component('contact-component', require('./components/chat/ContactComponent.vue').default);
Vue.component('contact-list-component', require('./components/chat/ContactListComponent.vue').default);
Vue.component('active-conversation-component', require('./components/chat/ActiveConversationComponent.vue').default);
Vue.component('message-conversation-component', require('./components/chat/MessageConversationComponent.vue').default);
Vue.component('messenger-component', require('./components/chat/MessengerComponent.vue').default);

//Notificaciones
Vue.component('notifications-component', require('./components/NotificationsComponent.vue').default);

//Schedules
Vue.component('schedules-control-component', require('./components/SchedulesControlComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});