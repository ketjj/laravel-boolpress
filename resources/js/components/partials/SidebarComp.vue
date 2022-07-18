<template>
  <div class="side_bar">
    <div>
      <span class="h4 text-uppercase">Categorie:</span>      
      <div v-for="category in categories" :key="`c${category.id}`">
        {{ category.name }}
      </div>

    </div>
    <div class="mt-4 ">
      <span class="h4 text-uppercase ">Tags:</span>  
      <div v-for="tag in tags" :key="`t${tag.id}`">
        {{ tag.name }}
      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: 'SidebarComp',
  props: {
    categories: Array,
    tags: Array
  }
}
</script>

<style lang="scss" scoped>

</style>