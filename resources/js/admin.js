require("./bootstrap");

import Vue from "vue";

Vue.component(
    "category-selector",
    require("./components/admin/CategorySelector").default
);
Vue.component(
    "attribute-selector",
    require("./components/admin/AttributeSelector").default
);
Vue.component(
    "image-upload",
    require("./components/admin/ImageUpload").default
);

const app = new Vue({
    el: "#app",
});
