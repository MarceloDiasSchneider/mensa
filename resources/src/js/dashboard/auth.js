import { createApp } from "vue";
import Auth from "@/vue-views/dashboard/Auth.vue";
const vueAuth = createApp({});
vueAuth.component("Auth", Auth);
vueAuth.mount("#vueAuth");
