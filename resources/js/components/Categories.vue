<template>
    <div class="aside-widget">
        <div class="section-title">
            <h2>Catagories</h2>
        </div>
        <div class="category-widget">
            <ul v-if="categories.length > 0">
                <li v-for="(category,index) in categories" :key="index">
                    <router-link :class="'cat-'+index" :to="`/category/${category.slug}/posts`">{{ category.name }}<span>340</span></router-link>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
          return {
              categories : "",
          }
        },
        created() {
            this.getCategories();
        },
        methods: {
            getCategories() {
                axios.get("/api/categories")
                    .then(res => {
                        console.log(res);
                        this.categories = res.data
                    })
                    .catch(error => console.log(error));
            }
        }
    }
</script>
