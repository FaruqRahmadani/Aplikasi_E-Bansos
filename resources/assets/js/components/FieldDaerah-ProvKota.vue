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
            <option v-for="datakota in filteredKota" :value="datakota.id">{{datakota.nama_kota}}</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['auth', 'selectedprovinsi', 'selectedkota'],
  data: function(){
    return {
      datadaerah : '',
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
  computed: {
    filteredKota : function(){
      if (this.datadaerah.Kota) {
        return this.datadaerah.Kota.filter(rol => rol.provinsi_id == this.selectedprovinsi)
      }
    },
  }
}
</script>
