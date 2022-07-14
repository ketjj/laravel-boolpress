<template>
<header>
  <nav class="container">
    <ul class="d-flex justify-content-end"> 
      <!-- :to bind, funziona come se fosse <a data-v-494e1ffe="" href="/contatti" class="router-link-exact-active router-link-active">Contatti</a>  -->
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

header{
  height: 70px;
  background-color: rgb(30, 22, 50);
  nav{
    height: 100%;
  }
  ul{
    margin-block-start: 0;
    margin-block-end: 0;
    padding-inline-start: 0;
    line-height: 70px;
    li{
      margin: 0 20px 0 20px;
      a{
        text-decoration: none;
        color:white;
        &.router-link-exact-active{
          color: rgb(251, 90, 90);
        }
        // oppure nel const router = new VueR. scrivi dentro linkExactActiveClass: \'active\' e qua lo lasci &.active
      }
    }
  }
}

</style>