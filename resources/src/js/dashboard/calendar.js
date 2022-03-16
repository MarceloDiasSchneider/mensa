import { createApp } from "vue";
import Calendar from "@/vue-views/dashboard/Calendar.vue";
const vueSidebar = createApp({});
vueSidebar.component("Calendar", Calendar);
vueSidebar.mount("#vueCalendar");
