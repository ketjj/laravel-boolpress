<template>
<div class="container card p-3">
  <h3>{{post.title}}</h3>
  <div>{{post.content}}</div>
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
        content: ''
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