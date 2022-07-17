<template>
  <div>
    <span class="mt-4 h3 mr-3">{{post.title}}</span>
    <span class="btn btn-success">
      <router-link :to="{name: 'postinfo', params: {slug: post.slug}}">For more Info</router-link>
    </span>
    <p>{{shortContent}}
      <!-- <a href="#"> load more...</a> -->
    </p>
    <div>-{{post.author}}</div>
  </div>
  
</template>

<script>
export default {
  name: 'PostComp',
  props:{
    post: Object
  },

  computed: {
    shortContent(){
      return this.post.content.substr(0, 20);
    }
  }

}
</script>

<style lang="scss" scoped>
a{
  text-decoration: none;
  color: white;
}
</style>