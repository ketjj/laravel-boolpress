<template>
  <div>
    <h4 class="mt-4">{{post.title}}</h4>
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

</style>