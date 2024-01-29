
const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            newTask: '',
            todoList: [],
        }
    },
    mounted(){
        this.getTodoList();
    },
    methods: {
        getTodoList() {
            axios.get(this.apiUrl).then((response) => {
                this.todoList = response.data;
            });
        }

    },
}).mount('#app')