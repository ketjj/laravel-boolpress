<template>
<div>
    <h3 class="k_container p-3 text-uppercase">Tutti i Post</h3>
  <div class="k_container p-3 d-flex ">

     <LoaderComp v-if="!posts"/>

    <div v-else>
      <PostComp 
      v-for="post in posts"
      :key="post.id"
      :post="post"
      />

    
    </div>

  <!-- SIDEBAR -->
    <div class="side_bar">
      <SidebarComp 
      :categories="categories"
      :tags="tags"/>
    </div>
  </div>
  <div class="k_buttons text-center">
       <!-- il bottone iniziale che all'inizio con :disabled rimane non cliccabile
       quindi il codice getApi(paginate.currentpage - 1) sarà attuale dopo la pagina 1 -->
      <button @click="getApi(paginate.currentpage -1)"
      :disabled="paginate.currentpage === 1"><</button>

      <button v-for="num in paginate.lastpage"
      :key="num"
      @click="getApi(num)"
      :disabled="paginate.currentpage === num"
      >
      {{num}}
       
      </button>
       

       <!-- il bottone avanti, che si ferma all'ultima pagina e diventa sisabled, quando la pagina sarà uguale all'ultima paginaate.lastpage -->
      <button @click="getApi(paginate.currentpage +1)"
      :disabled="paginate.currentpage === paginate.lastpage">></button>

  </div>
</div>


  
</template>

<script>

import PostComp from '../components/partials/PostComp.vue'
import LoaderComp from '../components/partials/LoaderComp.vue'
import SidebarComp from '../components/partials/SidebarComp.vue'

export default {
  name: 'blog',
  components:{
    PostComp,
    LoaderComp,
    SidebarComp
  },
  data(){
    return{
      apiUrl: '/api/posts',
      posts:null,
      paginate:{
        currentpage: null,
        lastpage: null
      },
      categories: [],
      tags: [],
    }
  },

  mounted(){
    this.getApi(1);
  },

  methods: {
    getApi(page){
      //qua metto posts=null, altrinemti v-if/v-else avrebbe funzionato soltanto al caricamento dei post, non ogni cambiamento(chiamate Api) delle pagine. Quindi, lo ressetto
      this.posts = null;
      axios.get(this.apiUrl + '?page=' + page)
      .then(res => {
        this.posts = res.data.posts.data;
        this.paginate = {
          currentpage: res.data.posts.current_page,
          lastpage: res.data.posts.last_page
        },

        this.categories = res.data.categories;
        this.tags = res.data.tags;
      })
    }
  }
}
</script>

<style lang="scss" scoped> 
.k_container{
  width: 74%;
  margin: 0 auto;

  background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}
.k_buttons{
  text-align: center;
  button{
    padding: 8px 15px;
    margin: 4px;
  }

}
 .side_bar{
  width:100%;
  flex-basis: 50%;
  padding: 0 30px;
 }

</style>