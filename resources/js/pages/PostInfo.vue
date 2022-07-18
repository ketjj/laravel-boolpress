<template>
<div class="container card p-3">

  <div class="mb-4">
    <span class="h3 mr-3">{{post.title}}</span>
    <span class="badge badge-primary" v-for="tag in post.tags"
    :key="tag.id">
      {{tag.name}}
    </span>
  </div>

  <div>{{post.content}}</div>
  <div>Categoria: {{post.category.name}}</div>
  <div>Author: -{{post.author}}</div>
  <div>Created at: {{post.created_at}}</div>
  
</div>
  
</template>

<script>
export default {
  name: 'postInfo',
  data(){
    return{
      post: {
        title: '',
        content: '',
        category: '',
        tags:[]
      },
      apiUrl: '/api/posts/'
    }
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl + this.$route.params.slug)
      .then(res =>{
        // console.log(res.data)
        this.post = res.data;
      })
    }
  },

  mounted(){
    this.getApi();
  }
}
</script>

<style lang="scss" scoped> 

</style>