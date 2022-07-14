<template>
<div>
  <!-- //Metto HeaderComp -->
  <HeaderComp/>
    

    <main>
      <!-- qua creo un blocco di codice,quale dopo viene riempito con RouteComps 
      attraverso 
      route-link -->
      
      <router-view></router-view>
    </main>

    <FooterComp/>
</div>
  
</template>

<script>

// importo HeaderComp
//Stesso errore del percorso suggerito da VSC, lo devi scrivere senza: resourcess/js/

import HeaderComp from './components/partials/HeaderComp.vue';
import FooterComp from './components/partials/FooterComp.vue';

export default {
 name: 'App',
//  non devi dimenticare di indicare i componenti di cui contiene questo Vue
 components:{
  HeaderComp,
  FooterComp
 },

 data(){
  return{
    apiUrl: 'http://127.0.0.1:8000/api/posts',
    posts: null
  }
 },
 methods:{
  getApi(){
    // console.log('Hello,Api')
    axios.get(this.apiUrl)
    .then(res =>{
      this.posts = res.data;
      console.log(res.data);
    })
  }
 },

 mounted(){
  this.getApi();
 }
}
</script>

<style>

</style>