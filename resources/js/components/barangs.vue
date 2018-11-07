<template>
<div>
<div>
    <form @submit.prevent="createUser" type="post">
        <div class="form-group">
            <input class="form-control" type="text"  placeholder="nama barang">
        </div>
        <div class="form-group">
             <input class="form-control" type="text"  placeholder="kuantitas">
        </div>
        <div class="form-group">
            <button class="btn btn-sm btn-outline-success">Simpan</button>

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
                            <tr v-for="barang in barangs" >
                                <td>{{barang.nama_barang}}</td>
                                <td>{{barang.kuantitas}}</td>
                                <td class="text-center">
                                    <button class="button btn btn-sm btn-outline-secondary"> detail</button>
                                    <button class="button btn btn-sm btn-outline-primary"> ubah</button>
                                    <button class="button btn btn-sm btn-outline-danger" onclick="return confirm('Anda yakin akan menghapus data ?')">hapus </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>


</div>

</template>

<script>
    export default {
        data: function() { 
            return {
              barangs:[]
            }
        },
         mounted() {
         this.viewbarang();
        },
        methods: {
           viewbarang(){
              //  axios.get('/api/barangs').then(response=>{
                //    console.log(response)
               // })
               axios({
                   method: 'get',
                   url:'/api/barangs',
               }).then((response)=>{
                  this.barangs = response.data
               })
            }
           
        }
          
        
     
    }
</script>
