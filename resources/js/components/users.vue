<template>
<div>
<div>
    <form @submit.prevent="createUser" type="post">
        <div class="form-group">
            <input class="form-control" type="text" v-model="user.name" placeholder="name">
        </div>
        <div class="form-group">
             <input class="form-control" type="text" v-model="user.email" placeholder="email">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-sm btn-outline-success">Simpan</button>
        </div>
    </form>
</div>
     <table class="table table-hover">
                        <thead>
                            <th>nama</th>
                            <th>email</th>
                            <th class="text-center">action</th>
                        </thead>
                        <tbody>
                            <tr  v-for=" user in users   ">
                                <td>{{user.name}}</td>
                                <td>{{user.email}}</td>
                                <td class="text-center">
                                     <a href="" class="btn btn-sm btn-outline-secondary"> <i class=" fa fa-eye"></i>detail</a>
                                     <a href="" class="btn btn-sm btn-outline-primary" > <i class=" fa fa-edit"></i>ubah</a>
                                     <a href="" class="btn btn-sm btn-outline-danger" onclick="return confirm('Anda yakin akan menghapus data ?')"> <i class=" fa fa-trash"></i>hapus</a>

                                </td>
                            </tr>
                        </tbody>
                    </table>


</div>

</template>

<script>
    export default {
        props: ['users'],
        data: function() { 
            return {
                user:{
                    name:'',
                    email:'',
                },
            }
        },
        mounted: function() {
          axios({
              method: 'get',
              url:'/api/users',
          }).then((response)=>{
               this.users = response.data
          })
        }
    }
</script>
