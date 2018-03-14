<template>
  <div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Provinsi</label>
          <select class="form-control" name="provinsi_id" required v-model="selectedprovinsi">
            <option value="" selected hidden>Provinsi</option>
            <option v-for="dataprovinsi in datadaerah.Provinsi" :value="dataprovinsi.id">{{dataprovinsi.nama_provinsi}}</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Kota/Kabupaten</label>
          <select class="form-control" name="kota_id" required v-model="selectedkota">
            <option value="" selected hidden>Kota/Kabupaten</option>
            <option v-for="datakota in datadaerah.Kota" :value="datakota.id">{{datakota.nama_kota}}</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Kecamatan</label>
          <select class="form-control" name="kecamatan_id" required v-model="selectedkecamatan" @change="searchkelurahan(selectedkecamatan)">
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
          <select class="form-control" name="kecamatan_id" required v-model="selectedkelurahan">
            <option value="" selected hidden>Kelurahan</option>
            <option v-for="datakelurahan in datakelurahan" :value="datakelurahan.id">{{datakelurahan.nama_kelurahan}}</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['auth', 'selectedprovinsi', 'selectedkota', 'selectedkecamatan', 'selectedkelurahan'],
  data: function(){
    return {
      datadaerah : '',
      datakelurahan : '',
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
    this.searchkelurahan(this.selectedkecamatan)
  },
  methods: {
    searchkelurahan(kecamatan_id){
      axios({
        method: 'get',
        url: '/api/datakelurahan/'+kecamatan_id,
        headers: { Authorization: 'Bearer '+this.auth },
      }).then((response) => {
        this.datakelurahan = response.data
      })
    },
  },
}
</script>
