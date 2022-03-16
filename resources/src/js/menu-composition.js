import { createApp } from "vue";
import MenuComposition from "@/vue-views/MenuComposition.vue";
const vueMenuComposition = createApp({});
vueMenuComposition.component("Menucomposition", MenuComposition);
vueMenuComposition.mount("#vueMenuComposition");
