new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    text: 'proxima tarefa',
    //testando 2 way databind
    todo_list: [
        {
            text: 'exemplo, clique no botão x para excluir'
        }
    ],
  },

    methods: {
        //adicionar tarefa
        addTodo() {
            this.todo_list.push({text: this.text});
            this.text = "";
        },

        //remover tarefa
        removeTodo(index){
            this.todo_list.splice(index, 1);
        }
    }
})
