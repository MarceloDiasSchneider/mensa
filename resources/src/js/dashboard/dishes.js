import { createApp } from "vue";
import Dishes from "@/vue-views/dashboard/Dishes.vue";
const vueSidebar = createApp({});
vueSidebar.component("Dishes", Dishes);
vueSidebar.mount("#vueDishes");
