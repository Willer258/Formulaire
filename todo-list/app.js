const vm = Vue.createApp({
  data(){
    return{
      message:'Tache ajoutée',
      todos:['boire'
      ]
    }
  },
  methods:{
    
    AjouterTache(){
      let UneTache = this.tache;
      this.todos.push(UneTache);
      this.tache='';
    },
    SupprimerTache(){
      let tasks = this.todos;
        let index = tasks.indexOf();
        this.todos.splice(index, 1);
      }
     
    }
  
})
vm.component('note',{
  props:['content'],
  template:`<p>{{content}}<p>`
});


vm.mount(id='#app');