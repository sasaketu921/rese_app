<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                        <ul>
                            <li v-for="item in users" :key="item.id">{{ item.user }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                users: []
            }
        },
        mounted() {
            axios.get('/users').then(response => this.users = response.data)
        }
    }
</script>
