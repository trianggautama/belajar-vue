<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <p v-for=" user in users   ">{{user.email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() { 
            return {
                users: []
            }
        },
        mounted() {
           axios.get('/api/users').then((response) => {
               this.users = response.data
           })
        }
    }
</script>
