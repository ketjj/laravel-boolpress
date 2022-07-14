<template>
<div>
  <div class="container card p-3">
    <h3 class="my-5 text-uppercase">Tutti i Post</h3>
    <div>
      <PostComp 
      v-for="post in posts"
      :key="post.id"
      :post="post"
      />

    </div>

  </div>
    <div class="k_buttons container">
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

export default {
  name: 'blog',
  components:{
    PostComp
  },
  data(){
    return{
      apiUrl: '/api/posts',
      posts:null,
      paginate:{
        currentpage: null,
        lastpage: null
      }
    }
  },

  mounted(){
    this.getApi(1);
  },

  methods: {
    getApi(page){
      axios.get(this.apiUrl + '?page=' + page)
      .then(res => {
        this.posts = res.data.data;
        this.paginate = {
          currentpage: res.data.current_page,
          lastpage: res.data.last_page
        }
      })
    }
  }
}
</script>

<style lang="scss" scoped> 
.k_buttons{
  text-align: center;
  button{
    padding: 8px 15px;
    margin: 4px;
  }

}
</style>