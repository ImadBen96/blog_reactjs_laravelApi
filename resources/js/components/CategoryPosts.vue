<template>
    <div id="post-header" class="page-header">
        <div class="background-img" style="background-image: url('../../../assets/img/post-page.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-meta">
                        <a class="post-category cat-2" href="#" >Category Name</a>
                        <span class="post-date">Created at</span>
                    </div>
                    <h1>Category Name</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Most Read</h2>
                            </div>
                        </div>

                        <div class="col-md-12" v-for="(post,index) in posts" :key="index">
                            <div class="post post-row">
                                <a class="post-img" href=""><img src="../../../public/assets/img/post-4.jpg" alt></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#" v-if="post.category">{{ post.category.name }}</a>
                                        <span class="post-date">{{post.added_at}}</span>
                                    </div>
                                    <h3 class="post-title"><a href="#">{{post.title}}</a></h3>
                                    <p>{{post.body}} ...</p>
                                </div>
                            </div>
                        </div>




                        <div class="col-md-12">
                            <div class="section-row">
                                <button class="primary-button center-block">Load More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="../../../public/assets/img/ad-1.jpg" alt>
                        </a>
                    </div>


                    <Categories></Categories>


                    <div class="aside-widget">
                        <div class="tags-widget">
                            <ul>
                                <li><a href="#">Chrome</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Backend</a></li>
                                <li><a href="#">JQuery</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">JavaScript</a></li>
                                <li><a href="#">Website</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</template>
<script>
import Categories from "./Categories.vue";
export default {
    data() {
        return {
            posts: {}
        }
    },
    components: {
        Categories
    },
    mounted() {
        this.getPosts();
    },
    methods: {
        getPosts(){
            axios.get("/api/category/"+this.$route.params.slug+"/posts")
                .then(res => {
                    console.log(res)
                    this.posts = res.data;
                })
                .catch(error => console.log(error));
        }
    }
}
</script>
