const { createApp } = Vue

createApp({
    data() {
        return {
            newItem: '',
            todoList: []
        }
    },
    methods: {
        getList() {
            axios.get('server.php').then(response => {
                this.todoList = response.data;
            })
        },
        addItem() {
            const data = {
                itemToPost: this.newItem
            };
            axios.post('server.php', data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then(response => {
                this.todoList = response.data;
                this.newItem = '';
            });
        },
    },
    mounted() {
        this.getList();
    }
}).mount('#app')