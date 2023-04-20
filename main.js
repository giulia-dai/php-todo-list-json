const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            todoItem: '',
        }
    },
    methods: {
        // prima funzione per leggere l'array e mandarlo al server.php
        readList() {
            axios.get('server.php')
                .then(response => {
                    this.todoList = response.data;
                })
        },

        // seconda funzione per aggiungere nuove task
        addTodo() {
            const data = {
                todoItem: this.todoItem
            };

            axios.post('server.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }
            ).then(response => {
                this.todoList = response.data;
                this.todoItem = '';
            })
        }
    },
    mounted() {
        this.readList();
    }
}).mount('#app')