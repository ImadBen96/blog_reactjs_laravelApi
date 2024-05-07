<template>
    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-6" v-for="post in posts" :key="post.id">
                    <div class="post post-thumb">
                        <RouterLink class="post-img" :to="'/post/'+post.slug"><img src="../../../public/assets/img/post-1.jpg" alt></RouterLink>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="#">{{post.category.name}}</a>
                                <span class="post-date">{{post.added_at}}</span>
                            </div>
                            <h3 class="post-title"><a href="">{{post.title}}</a></h3>
                        </div>
                    </div>
                </div>




            </div>



        </div>

    </div>
</template>
<style>

</style>
<script>
export default {
    data() {
        return {
            posts: {}
        }
    },
    mounted() {
        this.getPosts();
    },
    methods: {
        getPosts(){
            axios.get("/api/posts")
                .then(res => {
                    console.log(res)
                    this.posts = res.data;
                })
                .catch(error => console.log(error));
        }
    }
}
</script>
