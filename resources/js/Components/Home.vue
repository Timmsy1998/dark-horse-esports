<template>
  <div class="container text-center">
    <i class="fas fa-exclamation-triangle fa-5x mt-5"></i>
    <h1 class="mt-4">Maintenance Mode</h1>
    <p class="lead">Our website is currently undergoing scheduled maintenance. We should be back shortly. Thank you for
      your patience.</p>
    <button class="btn btn-primary mt-3" @click="refreshPage">
      <i class="fas fa-redo"></i> Refresh Page
    </button>
  </div>
</template>

<script setup>
const refreshPage = () => {
  location.reload()
}
</script>

<style scoped>
.container {
  max-width: 600px;
  margin: auto;
}
</style>
