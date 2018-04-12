<template>
  <div class="col-md-10 col-md-offset-1">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="">Nomor Proposal</label>
          <input type="text" class="form-control border-input" name="nomor_proposal" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="">Tanggal Proposal</label>
          <input type="date" class="form-control border-input" name="tanggal_proposal" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Perihal</label>
          <textarea rows="3" class="form-control border-input" name="perihal_proposal" required></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Kelengkapan Berkas </label>
          <div class="radio">
            <label>
              <input type="radio" name="kelengkapan_proposal" value="Lengkap" required>Lengkap
            </label>
            <label>
              <input type="radio" name="kelengkapan_proposal" value="Belum Lengkap" required>Belum Lengkap
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="">Tanggal Masuk</label>
          <input type="date" class="form-control border-input" name="tanggalmasuk_proposal" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Kategori</label>
          <select class="form-control" name="kategori_proposal" required>
            <option value="" selected hidden>Kategori Jenis Bantuan</option>
            <option value="Bidang Agama">Bidang Agama</option>
            <option value="Pendidikan">Pendidikan</option>
            <option value="Pemuda dan Olahraga">Pemuda dan Olahraga</option>
            <option value="Sosial Individu">Sosial Individu</option>
            <option value="Organisasi Kemasyarakatan">Organisasi Kemasyarakatan</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <div class="pull-right" >
            <button type="button" class="btn btn-warning btn-fill" @click="changeform('Instansi')">Kembali</button>
            <button type="submit" class="btn btn-info btn-fill" >Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    changeform(form){
      vm.showform = form
    }
  },
}
</script>
