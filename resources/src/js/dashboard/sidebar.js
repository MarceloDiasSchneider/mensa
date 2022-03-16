import { createApp } from "vue";
import Thesidebar from "@/vue-views/dashboard/components/TheSidebar.vue";
const vueSidebar = createApp({});
vueSidebar.component("Thesidebar", Thesidebar);
vueSidebar.mount("#vueThesidebar");
