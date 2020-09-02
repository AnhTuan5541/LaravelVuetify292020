<template>
    <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" @click="goHome()" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
</template>

<script>
export default {
    methods: {
        goHome() {
            window.location.replace('/')
        }
    }
}
</script>

<style>

</style>