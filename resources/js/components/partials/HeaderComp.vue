<template>
<header>
  <nav>
    <ul>
      <li class="list-unstyled"><router-link :to="{name: 'home'}">Home</router-link></li>
      <li class="list-unstyled"><router-link :to="{name: 'about'}">Chi siamo</router-link></li>
      <li class="list-unstyled"><router-link :to="{name: 'blog'}">Posti</router-link></li>
      <li class="list-unstyled"><router-link :to="{name: 'contacts'}">Contatti</router-link></li>

    </ul>
  </nav>
</header>
  
</template>

<script>
export default {
  // non devi dimenticare di indicare il nome del Vue attuale
  name: 'HeaderComp'

}
</script>


<style lang="scss" scoped>
// devi modificare style e aggiungere lang="scss" scoped

</style>