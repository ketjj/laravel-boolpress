// 1.importiamo il vue 
import Vue from 'vue';


//2.importiamo Vue-route(quello che abbiamo installato con --> npm install vue-router@2____@2 significa il numero della versione)
import VueRouter from 'vue-router';


//3. Dobbiamo dire a Vue a usare Vue-route
Vue.use(VueRouter);


//4. Dobbiamo creare una nuova instanza del VueRouter e come il parametro lo passeremo un oggetone
const router = new VueRouter({
  //mode: 'hitory' ti permette vedere la navigazione 
  mode: 'history',
})

//5. Devo preparare per Export in --> front.js() dove ho il Vue
export default router;




// ---->continuiamo e impostiamo nel front.js