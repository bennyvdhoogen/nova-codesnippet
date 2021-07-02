Nova.booting((Vue, router) => {
    Vue.component("index-codesnippet", require("./components/IndexField"));
    Vue.component("detail-codesnippet", require("./components/DetailField"));
    Vue.component("form-codesnippet", require("./components/FormField"));
});
