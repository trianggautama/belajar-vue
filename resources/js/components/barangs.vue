<template>
<div>
<div>
    <form @submit.prevent="createUser" type="post">
        <div class="form-group">
            <input class="form-control" type="text" v-model="barang.nama_barang" placeholder="name">
        </div>
        <div class="form-group">
             <input class="form-control" type="text" v-model="barang.kuantitas" placeholder="email">
        </div>
        <div class="form-group">
            <button v-if="add" @click.prevent="addbarang()" class="btn btn-sm btn-outline-success">Simpan</button>
            <button v-if="edit" @click.prevent="ubahbarang(barang.id)" class="btn btn-sm btn-outline-success">Simpan</button>

        </div>
    </form>
</div>
     <table class="table table-hover">
                        <thead>
                            <th>nama</th>
                            <th>kuantitas</th>
                            <th class="text-center">action</th>
                        </thead>
                        <tbody>
                            <tr  v-for=" barang in barangs   ">
                                <td>{{barang.nama_barang}}</td>
                                <td>{{barang.kuantitas}}</td>
                                <td class="text-center">
                                    <button @click="detailbarang(barang)" class="button btn btn-sm btn-outline-secondary"> detail</button>
                                    <button @click="ubahbarang(barang)" class="button btn btn-sm btn-outline-primary"> ubah</button>
                                    <button @click="hapusbarang(barang)" class="button btn btn-sm btn-outline-danger" onclick="return confirm('Anda yakin akan menghapus data ?')">hapus </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>


</div>

</template>

<script>
    export default {
        props: ['barangs'],
        data: function() { 
            return {
                barang:{
                    nama_barang:'',
                    kuantitas:'',
                },
                add:true,
                edit:false
            }
        },
        created(){
            this.viewbarang();
        },
        method: {
            viewbarang(){

            },
            addbarang(){

            },
            editbarang(){

            },
            ubahbarang(){

            },
            hapusbarang(){

            }

        },
        mounted: function() {
          axios({
              method: 'get',
              url:'/api/barangs',
          }).then((response)=>{
               this.barangs = response.data
          })
        }
    }
</script>
