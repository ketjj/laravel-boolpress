<template>
<div class="container card p-3">
  <h3 class="my-5 text-uppercase">Tutti i Post</h3>
  <div>
    <PostComp 
    v-for="post in posts"
    :key="post.id"
    :post="post"
    />

  </div>
</div>
  
</template>

<script>

import PostComp from '../components/partials/PostComp.vue'

export default {
  name: 'blog',
  components:{
    PostComp
  },
  data(){
    return{
      apiUrl: '/api/posts',
      posts:null
    }
  },

  mounted(){
    this.getApi();
  },

  methods: {
    getApi(){
      axios.get(this.apiUrl)
      .then(res => {
        this.posts = res.data;
      })
    }
  }
}
</script>

<style lang="scss" scoped> 

</style>