<template>
  <button type="button" class="btn btn-sm btn-info" @click="redirect(url)">
    <b>{{judul}}</b>
  </button>
</template>

<script>
export default {
  props: ['url','judul'],
  methods: {
    redirect(link){
      window.location = link;
    }
  },
}
</script>
