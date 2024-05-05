import './bootstrap';
import { createApp } from "vue";
import Posts from "./components/Posts.vue";
import router from  "./routes/routes.js";
import globalHome from "./components/GlobalHome.vue";
import Header from  "./components/Header.vue";
import navSide from "./components/navSide.vue";

const app = createApp({});

app.component("posts-component", Posts);
app.component("global-home-component", globalHome);
app.component("header-component", Header);
app.component("nav-side-component", navSide);

app.use(router).mount("#app")


