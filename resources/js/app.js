
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const uuidv4 = require('uuid/v4');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });

const BROWSER_ID_KEY = 'data-checking-web-storage-key';

if (window.localStorage) {
    let $localStorageDiv = $('#local-storage');
    $localStorageDiv.removeClass('invisible');
    let $msgbox = $localStorageDiv.find('.msgbox');

    let browserId = window.localStorage.getItem(BROWSER_ID_KEY);

    if(browserId === null) {
        browserId = uuidv4();
        window.localStorage.setItem(BROWSER_ID_KEY, browserId);

        $msgbox.html('<p>Your browser did not identify you.</p><p>We have set the following ID on your browser: '
            + browserId + '</p>');
    }
    else {
        $msgbox.html('<p>Your browser has identified you with the ID: ' + browserId + '</p>'
            + '<p>Clear your browser data then refresh this page.</p>');
    }
}

if (window.sessionStorage) {
    let $sessionStorageDiv = $('#session-storage');
    $sessionStorageDiv.removeClass('invisible');
    let $msgbox = $sessionStorageDiv.find('.msgbox');

    let browserId = window.sessionStorage.getItem(BROWSER_ID_KEY);

    if(browserId === null) {
        browserId = uuidv4();
        window.sessionStorage.setItem(BROWSER_ID_KEY, browserId);

        $msgbox.html('<p>Your browser did not identify you.</p><p>We have set the following ID on your browser: '
            + browserId + '</p>');
    }
    else {
        $msgbox.html('<p>Your browser has identified you with the ID: ' + browserId + '</p>'
            + '<p>Clear your browser data then refresh this page.</p>');
    }
}