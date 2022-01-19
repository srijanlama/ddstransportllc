/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
import route from "ziggy-js";
import { Ziggy } from "../js/ziggy";

window.Vue = require("vue").default;
import VueFormulate from "@braid/vue-formulate";
Vue.use(VueFormulate);
window.Ziggy = Ziggy;
window.route = route;

Vue.mixin({
    data() {
        return {
            Ziggy,
        };
    },
    methods: {
        route: (name, params, absolute) => route(name, params, absolute, Ziggy),
    },
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
//common component
Vue.component("notification", require("./components/Notification.vue").default);

Vue.component(
    "admin-sidebar",
    require("./components/admin/partial/AdminSidebar.vue").default
);
Vue.component(
    "driver-data-table",
    require("./components/admin/driver/DriverDataTable.vue").default
);
Vue.component(
    "admin-driver-create",
    require("./components/admin/driver/AdminDriverCreate.vue").default
);
Vue.component(
    "admin-driver-edit",
    require("./components/admin/driver/AdminDriverEdit.vue").default
);
Vue.component("admin-setting-form", require("./components/admin/setting/AdminSettingForm").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
});