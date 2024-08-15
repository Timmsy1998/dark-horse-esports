<template>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-none d-lg-block" href="/home"> <img src="/assets/global/Logo-TP.png" alt="Dark Horse Esports"
                    class="logo">
            </a>
        </div>
    </nav>
</template>

<script setup>
</script>

<style scoped>
.navbar {
    background: linear-gradient(to bottom, #370229, #000000);
}

.logo {
  height: 50vh;
  width: auto;
  opacity: 0.5;
  transform: rotate(45deg);
  transition: transform 0.2s ease-in-out;
  margin-left: -6vw;
}
</style>