<template>
  <footer class="footer py-3">
    <div class="container">
      <div class="row pt-6">
        <div class="col-md-4 text-md-start pt-3">
          <h6>Quick Links</h6>
          <ul class="list-unstyled text-white extra-small">
            <li><a href="/roster" class="text-decoration-none text-white link-grow">Team Roster</a></li>
            <li><a href="/schedule" class="text-decoration-none text-white link-grow">Match Schedule</a></li>
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <div class="row pt-1">
            <div class="col-6">
              <img src="/assets/global/sponsors/havoc.png" alt="Sponsor 1" class="sponsor-logo">
            </div>
            <div class="col-6">
              <img src="/assets/global/sponsors/fiverr.svg" alt="Sponsor 2" class="sponsor-logo">
            </div>
            <div class="col-6 pt-5">
              <img src="/assets/global/sponsors/nospon.png" alt="Sponsor 3" class="sponsor-logo">
            </div>
            <div class="col-6 pt-5">
              <img src="/assets/global/sponsors/nospon.png" alt="Sponsor 4" class="sponsor-logo">
            </div>
          </div>
        </div>
        <div class="col-md-4 text-md-end pt-6">
          <span class="text-white extra-small">© 2024 Dark Horse Esports LTD</span><br>
          <span class="text-white extra-small">Registered Company No. 15895019</span>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
</script>

<style scoped>
.footer {
  background: linear-gradient(to bottom, #232323, #370229);
}

.extra-small {
  font-size: 0.7rem;
}

.sponsor-logo {
  height: 30px;
  width: auto;
  opacity: 0.5;
  transition: opacity 0.2s ease-in-out;
}

.sponsor-logo:hover {
  opacity: 1;
}

.link-grow {
  display: inline-block;
  transition: transform 0.2s ease-in-out;
}

.link-grow:hover {
  transform: scale(1.1);
}
</style>
