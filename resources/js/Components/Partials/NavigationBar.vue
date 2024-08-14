<template>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home"> <img src="/assets/global/Logo-TP.png" alt="Dark Horse Esports"
                    class="logo">
            </a>
            <!-- Add your navigation items here -->
        </div>
    </nav>
</template>

<script setup>
// Your component logic goes here
</script>

<style scoped>
.navbar {
    background: linear-gradient(to bottom, #370229, #000000);
    /* very dark purple to slightly lighter dark purple gradient */
}

.logo {
  height: 50vh; /* Adjust as needed */
  width: auto;
  opacity: 0.5;
  transform: rotate(45deg);
  transition: transform 0.2s ease-in-out;
  margin-left: -6vw;
}
</style>