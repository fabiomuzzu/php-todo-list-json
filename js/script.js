const { createApp } = Vue;

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
        // Funzione per leggere il contenuto di apiUrl che è server.php che a sua volta contiene il file todolist.json
        getTodoList() {
            axios.get(this.apiUrl).then((response) => {
                this.todoList = response.data;
            });
        },
        // toggleDone(){
        //     const data = {
        //         todoDone: 
        //     }

        //     axios.post(this.apiUrl, data, {
        //         headers: { 'Content-Type':'multipart/form-data'}
        //     }).then(response =>{
        //         this.todoList = response.data
        //     })
        // },
        // Funzione per aggiungere una nuova task
        addTask(){
            const data = {
                todoItem: this.newTask
            }
            // Funzione che permette di scrivere e passare a server.php il contenuto di newtask e todoList
            axios.post(this.apiUrl, data, {
                headers: { 'Content-type': 'multipart/form-data' }
            }).then((response) => {
                this.newTask= '';
                
                this.todoList = response.data;
            })
        },
    },
}).mount('#app')