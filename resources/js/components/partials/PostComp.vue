<template>
  <div>
    <h4 class="mt-4">{{post.title}}</h4>
    <p>{{post.content}}</p>
    <div>-{{post.author}}</div>
  </div>
  
</template>

<script>
export default {
  name: 'PostComp',
  props:{
    post: Object
  }

}
</script>

<style lang="scss" scoped>

</style>