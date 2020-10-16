require("./bootstrap");
import Vue from "vue";
import VueRouter from "vue-router";
import VueProgressBar from "vue-progressbar";
import Swal from "sweetalert2";
import moment from "moment";
import CKEditor from "@ckeditor/ckeditor5-vue";
import Multiselect from "vue-multiselect";
import {
    routes
} from "./routes";
import {
    Form,
    HasError,
    AlertError
} from "vform";


Vue.component("multiselect", Multiselect);


Vue.use(CKEditor);

// Slug
window.Slug = require("slug");
Slug.defaults.mode = "rfc3986";

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
window.Form = Form;

Vue.filter("capitalize", function (text) {
    if (text != null) {
        return text.charAt(0).toUpperCase() + text.slice(1);
    }
});

Vue.filter("myDate", function (created) {
    return moment(created).format("MMMM Do YYYY"); // July 21st 2020, 2:42:27 pm
});

// vue-progress

const options = {
    color: "#1d1487",
    failedColor: "red",
    thickness: "8px",
    transition: {
        speed: "0.2s",
        opacity: "0.8s",
        termination: 300
    },
    autoRevert: true,
    location: "top",
    inverse: false
};
Vue.use(VueProgressBar, options);

// sweetalet2

window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000
});
window.Toast = Toast;

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes
});

// Vue.component('main-app', require('./components/Main.vue').default);

const app = new Vue({
    el: "#app",
    router
});