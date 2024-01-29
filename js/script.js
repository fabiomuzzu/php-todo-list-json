
const { createApp } = Vue 

createApp({
    data() {
        return {
        newTask: '',
        todo_list: [
            {
                text: 'Fare la spesa',
                done: true,
            },
            {
                text: 'Buttare la spazzatura',
                done: false,
            },
            {
                text: 'Fare benzina alla macchina',
                done: true,
            },
            {
                text: 'Ritirare i panni',
                done: false,
            },
            {
                text: 'Prendere l\'acqua',
                done: true,
            },
        ]
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