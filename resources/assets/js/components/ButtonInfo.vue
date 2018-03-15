<template>
  <button type="button" class="btn btn-sm btn-primary" @click="info(url)">Info</button>
</template>

<script>
export default {
  props: ['url'],
  methods: {
    info(link){
      window.location = link;
    }
  },
}
</script>
