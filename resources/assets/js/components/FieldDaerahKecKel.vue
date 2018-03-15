<template>
  <div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Kecamatan</label>
          <select class="form-control" name="kecamatan_id" required v-model="selectedkecamatan">
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
          <select class="form-control" name="kelurahan_id" required>
            <option value="" selected hidden>Kelurahan</option>
            <option v-for="datakelurahan in filteredKelurahan" :value="datakelurahan.id" :selected="datakelurahan.id == selectedkelurahan">{{datakelurahan.nama_kelurahan}}</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['auth', 'selectedkecamatan', 'selectedkelurahan'],
  data: function(){
    return {
      datadaerah : '',
    }
  },
  mounted: function(){
    axios({
      method: 'get',
      url: '/api/datadaerah-banjarbaru',
      headers: { Authorization: 'Bearer '+this.auth },
    }).then((response) => {
      this.datadaerah = response.data
    })
  },
  methods: {
    selectkecamatan(kecamatan_id){
      this.selectedkecamatan == kecamatan_id
    }
  },
  computed: {
    filteredKelurahan : function(){
      if (this.datadaerah.Kelurahan) {
        return this.datadaerah.Kelurahan.filter(rol => rol.kecamatan_id == this.selectedkecamatan)
      }
    },
  }
}
</script>
