
const { createApp } = Vue 

createApp({
    data() {
        return {
        newTask: '',
        
    }
},
methods: {
    removeTodo(index){
        this.todo_list.splice(index,1);
    },
    
    nuovaTask(){
        let obj = {
            text: this.newTask,
            done: false
        };

        this.todo_list.push(obj);
        this.newTask = '';
    }
},
}).mount('#app')