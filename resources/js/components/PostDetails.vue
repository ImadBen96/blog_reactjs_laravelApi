<template>
    <div id="post-header" class="page-header">
        <div class="background-img" style="background-image: url('../../../assets/img/post-page.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-meta">
                        <a class="post-category cat-2" href="#" v-if="post.category">{{post.category.name}}</a>
                        <span class="post-date">{{post.added_at}}</span>
                    </div>
                    <h1>{{post.title}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <div class="section-row sticky-container">
                        <div class="main-post">
                            <h3>{{post.title}}</h3>
                            <p>Do you like Cheese Whiz? Spray tan? Fake eyelashes? That's what is Lorem Ipsum to many—it rubs them the wrong way, all the way. It's unreal, uncanny, makes you wonder if something is wrong, it seems to seek your attention for all the wrong reasons. Usually, we prefer the real thing, wine without sulfur based preservatives, real butter, not margarine, and so we'd like our layouts and designs to be filled with real words, with thoughts that count, information that has value. </p>
                             </div>
                        <div class="post-shares sticky-shares">
                            <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>

                    <div class="section-row text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="../../../public/assets/img/ad-2.jpg"  alt>
                        </a>
                    </div>


                    <div class="section-row">
                        <div class="post-author">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="../../../public/assets/img/author.png"  alt>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <h3>John Doe</h3>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <ul class="author-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="section-row">
                        <div class="section-title">
                            <h2>{{ post.comments_count }} Comment</h2>
                        </div>
                        <div class="post-comments">




                            <div class="media" v-for="(comment,index) in post.comments" :key="index">
                                <div class="media-left">
                                    <img class="media-object" src="../../../public/assets/img/avatar.png" alt>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <h4>{{ comment.user.name }}</h4>
                                        <span class="time">{{comment.added_at}}</span>
<!--                                        <a href="#" class="reply">Reply</a>-->
                                    </div>
                                    <p>{{comment.body}}</p>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="section-row">
                        <div class="section-title">
                            <h2>Leave a reply</h2>
                            <p>your email address will not be published. required fields are marked *</p>
                        </div>
                        <form class="post-reply">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span>Name *</span>
                                        <input class="input" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span>Email *</span>
                                        <input class="input" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span>Website</span>
                                        <input class="input" type="text" name="website">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="input" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <button class="primary-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="col-md-4">
                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Search</h2>
                        </div>
                        <div class="post post-widget">
                            <div class="post-body" style="text-align: center;">
                                <input type="text" class="input" v-model="searchPost" placeholder="Searching ...." />
                            </div>
                        </div>
                    </div>
                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" :src="'assets/img/ad-1.jpg'" alt />
                        </a>
                    </div>
<!--                   categories here-->
                    <Categories></Categories>

                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Most Read</h2>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="../../../public/assets/img/widget-1.jpg" alt></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="../../../public/assets/img/widget-2.jpg" alt></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="../../../public/assets/img/widget-3.jpg" alt></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img src="../../../public/assets/img/widget-4.jpg" alt></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
                            </div>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Featured Posts</h2>
                        </div>
                        <div class="post post-thumb">
                            <a class="post-img" href="blog-post.html"><img src="../../../public/assets/img/post-2.jpg" alt></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="#">Jquery</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
                            </div>
                        </div>
                        <div class="post post-thumb">
                            <a class="post-img" href="blog-post.html"><img src="../../../public/assets/img/post-1.jpg" alt></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                            </div>
                        </div>
                    </div>





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


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Archive</h2>
                        </div>
                        <div class="archive-widget">
                            <ul>
                                <li><a href="#">January 2018</a></li>
                                <li><a href="#">Febuary 2018</a></li>
                                <li><a href="#">March 2018</a></li>
                            </ul>
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
import Categories from "./Categories.vue";

   export default {
       data(){
         return {
             post: "",
             searchPost: "",
             is_searching: false
         }
       },
       components: {
         Categories
       },
       watch: {
         searchPost(query) {
             if (query.length > 0) {
                 axios.get("/api/search-posts/"+query)
                     .then(res => {
                         console.log(res.data)
                     })
                     .catch(error => {
                         console.log(error);
                     })
             } else {
                 let oldPost = JSON.parse(localStorage.getItem("post"));
                 this.post = oldPost;
             }
         }
       },
       created() {
           this.getPost();
       },
       methods: {
           getPost() {
               axios.get("/api/posts/"+this.$route.params.slug)
                   .then(res => {
                       console.log(res);
                       this.post = res.data;
                       localStorage.setItem("post",JSON.stringify(this.post))
                   })
                   .catch(error=> {
                       console.log(error);
                   })
           }
       }
   }
</script>
