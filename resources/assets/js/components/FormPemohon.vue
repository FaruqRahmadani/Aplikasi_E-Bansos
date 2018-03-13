<template>
  <div class="col-md-10 col-md-offset-1">
    <input type="hidden" name="_token" :value="token">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>NIK</label>
          <input type="text" name="nik_pemohon" class="form-control border-input" maxlength="16" placeholder="16 digit NIK" v-model="nik" @keyup="searchnik" autofocus required>
          <input type="hidden" class="form-control border-input required" maxlength="100" name="id_pemohon" :value="datavalue.id">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" class="form-control border-input required" maxlength="100" name="nama_pemohon" v-if="this.statusdisable" :value="datavalue.nama" disabled>
          <input type="text" class="form-control border-input required" maxlength="100" name="nama_pemohon" v-else required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Tempat Lahir </label>
          <input type="text" class="form-control border-input" maxlength="30" name="tempatlahir_pemohon" v-if="this.statusdisable" :value="datavalue.tempat_lahir" disabled>
          <input type="text" class="form-control border-input" maxlength="30" name="tempatlahir_pemohon" v-else required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" class="form-control border-input" name="tanggallahir_pemohon" v-if="this.statusdisable" :value="datavalue.tanggal_lahir" disabled>
          <input type="date" class="form-control border-input" name="tanggallahir_pemohon" v-else required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Pekerjaan</label>
          <input type="text" class="form-control border-input" maxlength="30" name="pekerjaan_pemohon" v-if="this.statusdisable" :value="datavalue.pekerjaan" disabled>
          <input type="text" class="form-control border-input" maxlength="30" name="pekerjaan_pemohon" v-else required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Alamat</label>
          <textarea rows="5" class="form-control border-input" maxlength="100" name="alamat_pemohon" v-if="this.statusdisable" :value="datavalue.alamat" disabled></textarea>
          <textarea rows="5" class="form-control border-input" maxlength="100" name="alamat_pemohon" v-else required></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>RT</label>
          <input type="text" class="form-control border-input" maxlength="3" name="rt_pemohon" v-if="this.statusdisable" :value="datavalue.rt" disabled>
          <input type="text" class="form-control border-input" maxlength="3" name="rt_pemohon" v-else required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>RW</label>
          <input type="text" class="form-control border-input" maxlength="3" name="rw_pemohon" v-if="this.statusdisable" :value="datavalue.rw" disabled>
          <input type="text" class="form-control border-input" maxlength="3" name="rw_pemohon" v-else required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Provinsi</label>
          <select class="form-control" name="provinsi_id_pemohon" :disabled="this.statusdisable == 1" v-model="selectedprovinsi" required>
            <option value="" selected hidden>Provinsi</option>
            <option v-for="dataprovinsi in datadaerah.Provinsi" :value="dataprovinsi.id">{{dataprovinsi.nama_provinsi}}</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Kabupaten/Kota</label>
          <select class="form-control" name="kota_id_pemohon" :disabled="this.statusdisable == 1" v-model="selectedkota" required>
            <option value="" selected hidden>Kabupaten/Kota</option>
            <option v-for="datakota in filteredKota" :value="datakota.id">{{datakota.nama_kota}}</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Kecamatan</label>
          <select class="form-control" name="kecamatan_id_pemohon" :disabled="this.statusdisable == 1" v-model="selectedkecamatan" @change="searchkelurahan(selectedkecamatan)" required>
            <option value="" selected hidden>Kecamatan</option>
            <option v-for="datakecamatan in filteredKecamatan" :value="datakecamatan.id">{{datakecamatan.nama_kecamatan}}</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 ">
        <div class="form-group">
          <label>Kelurahan</label>
          <select class="form-control" name="kelurahan_id_pemohon" :disabled="this.statusdisable == 1" v-model="selectedkelurahan" required>
            <option value="" selected hidden>Kelurahan</option>
            <option v-for="datakelurahan in datakecamatan" :value="datakelurahan.id">{{datakelurahan.nama_kelurahan}}</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <div class="pull-right" >
            <button type="button" class="btn btn-info btn-fill" @click="changeform('Instansi')">Selanjutnya</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props : ['token', 'auth'],
  data: function(){
    return {
      statusdisable : 1,
      nik : '',
      datavalue : 'null',
      datadaerah: '',
      datakecamatan: '',
      selectedprovinsi: '',
      selectedkota: '',
      selectedkecamatan: '',
      selectedkelurahan: '',
    }
  },
  mounted: function(){
    axios({
      method: 'get',
      url: '/api/datadaerah',
      headers: { Authorization: 'Bearer '+this.auth },
    }).then((response) => {
      this.datadaerah = response.data
    })
  },
  methods: {
    searchnik(){
      if (this.nik.length == 16) {
        axios({
          method: 'get',
          url: '/api/searchnik/'+this.nik,
          headers: { Authorization: 'Bearer '+this.auth }
        }).then((response) => {
          this.datavalue = response.data
          this.selectedprovinsi = response.data.provinsi_id
          this.selectedkota = response.data.kota_id
          this.selectedkecamatan = response.data.kecamatan_id
          this.searchkelurahan(response.data.kecamatan_id)
          this.selectedkelurahan = response.data.kelurahan_id
          this.statusdisable = this.datavalue != 'null' ? 1 : 0;
        })
      }else{
        this.statusdisable = 1
        this.datavalue = 'null'
      }
    },
    searchkelurahan(kecamatan_id){
      axios({
        method: 'get',
        url: '/api/datakelurahan/'+kecamatan_id,
        headers: { Authorization: 'Bearer '+this.auth },
      }).then((response) => {
        this.datakecamatan = response.data
      })
    },
    changeform(form){
      vm.showform = form
    }
  },
  computed: {
    filteredKota : function(){
      if (this.datadaerah.Kota) {
        return this.datadaerah.Kota.filter(rol => rol.provinsi_id == this.selectedprovinsi)
      }
    },
    filteredKecamatan : function(){
      if (this.datadaerah.Kecamatan) {
        return this.datadaerah.Kecamatan.filter(rol => rol.kota_id == this.selectedkota)
      }
    },
  }
}
</script>
