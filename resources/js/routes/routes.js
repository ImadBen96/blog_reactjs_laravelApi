import { createRouter, createWebHistory } from "vue-router";
import Posts from "../components/Posts.vue";
import PostDetails from "../components/PostDetails.vue";
import  AboutUs from  "../components/AboutUs.vue";
import ContactUs from "../components/ContactUs.vue";
import Login from "../components/Login.vue";
const routes = [
    {
        path: "/",
        component: () => Posts,
        name: "posts"
    },
    {
        path: "/post/:slug",
        component: () => PostDetails,
        name: "Post Details"
    },
    {
        path: "/about-us",
        component: () => AboutUs,
        name: "About Us"
    },
    {
        path: "/contact-us",
        component: () => ContactUs,
        name: "Contact Us"
    },
    {
        path: "/login",
        component: () => Login,
        name: "Login"
    }
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
