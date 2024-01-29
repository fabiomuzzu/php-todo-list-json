
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
        addTask(){
            const data = {
                todoItem: this.newTask
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then((response) => {
                this.newTask= '';

                this.todoList = response.data;
            })
        },
        getTodoList() {
            axios.get(this.apiUrl).then((response) => {
                this.todoList = response.data;
            });
        }

    },
}).mount('#app')