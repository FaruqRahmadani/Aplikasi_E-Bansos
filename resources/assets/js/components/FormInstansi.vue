<template>
  <div class="col-md-10 col-md-offset-1">
    <input type="hidden" name="_token" :value="token">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Nama Instansi</label>
          <input type="text" class="form-control border-input" maxlength="100" name="nama_instansi" @keyup="changenamainstansi" v-model="nama_instansi" required>
          <input type="hidden" class="form-control border-input" maxlength="100" name="id_instansi" :value="selectedinstansi.id">
          <ul>
            <li v-if="selectedinstansi == ''" v-for="instansi in filteredInstansi" @click="selectinstansi(instansi)">{{instansi.nama}}</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Alamat Instansi</label>
          <textarea rows="5" class="form-control border-input" maxlength="100" name="alamat_instansi" :value="selectedinstansi.alamat" v-if="selectedinstansi != ''" disabled></textarea>
          <textarea rows="5" class="form-control border-input" maxlength="100" name="alamat_instansi" v-else required></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>RT</label>
          <input type="text" class="form-control border-input" maxlength="3" name="rt_instansi" :value="selectedinstansi.rt" v-if="selectedinstansi != ''" disabled>
          <input type="text" class="form-control border-input" maxlength="3" name="rt_instansi" v-else required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>RW</label>
          <input type="text" class="form-control border-input" maxlength="3" name="rw_instansi" :value="selectedinstansi.rw" v-if="selectedinstansi != ''" disabled>
          <input type="text" class="form-control border-input" maxlength="3" name="rw_instansi" v-else required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Kecamatan</label>
          <select class="form-control" name="kecamatan_id_instansi" v-model="selectedkecamatan" :disabled="selectedinstansi != ''" required>
            <option value="" selected hidden>Kecamatan</option>
            <option v-for="datakecamatan in datadaerah.Kecamatan" :value="datakecamatan.id">{{datakecamatan.nama_kecamatan}}</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Kelurahan</label>
          <select class="form-control" name="kelurahan_id_instansi" v-model="selectedkelurahan" :disabled="selectedinstansi != ''" required>
            <option value="" selected hidden>Kelurahan</option>
            <option v-for="datakelurahan in filteredKelurahan" :value="datakelurahan.id">{{datakelurahan.nama_kelurahan}}</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <div class="pull-right" >
            <button type="button" class="btn btn-warning btn-fill" @click="changeform('Pemohon')">Kembali</button>
            <button type="button" class="btn btn-info btn-fill" @click="changeform('Proposal')">Selanjutnya</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['token', 'auth'],
  data: function(){
    return {
      selectedinstansi: '',
      nama_instansi: '',
      datainstansi: '',
      datadaerah: '',
      selectedkecamatan: '',
      selectedkelurahan: '',
    }
  },
  mounted: function(){
    axios({
      method: 'get',
      url: '/api/datainstansi',
      headers: { Authorization: 'Bearer '+this.auth },
    }).then((response) => {
      this.datainstansi = response.data
    }),
    axios({
      method: 'get',
      url: '/api/datadaerah-banjarbaru',
      headers: { Authorization: 'Bearer '+this.auth },
    }).then((response) => {
      this.datadaerah = response.data
    })
  },
  methods: {
    changenamainstansi(){
      this.selectedinstansi = ''
    },
    selectinstansi(datainstansi){
      this.selectedinstansi = datainstansi
      this.selectedkecamatan = datainstansi.kecamatan_id
      this.selectedkelurahan = datainstansi.kelurahan_id
      this.nama_instansi = datainstansi.nama
    },
    changeform(form){
      vm.showform = form
    }
  },
  computed: {
    filteredKelurahan : function(){
      if (this.datadaerah.Kelurahan) {
        return this.datadaerah.Kelurahan.filter(rol => rol.kecamatan_id == this.selectedkecamatan)
      }
    },
    filteredInstansi : function(){
      if (this.datainstansi && this.nama_instansi != '') {
        return this.datainstansi.filter(instansi => {
          return instansi.nama.toLowerCase().includes(this.nama_instansi.toLowerCase())
        })
      }
    },
  }
}
</script>
