<template>
<div class="wrapper">
  <navbar></navbar>
  <sidebar></sidebar>
  <router-view></router-view>
  <app-footer></app-footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</template>

<script>
  import Navbar from './navbar'
  import Sidebar from './sidebar'
  import AppFooter from './footer'
  export default {
    components: {
      Navbar,
      Sidebar,
      AppFooter
    },
    props: {
      source: String,
    },
    data: () => ({
      drawer: null,
    }),
    computed: {
      currentUser: {
        get() {
          return this.$store.state.currentUser.user;
        }
      }
    },
    methods: {
      logout() {
          this.$store.dispatch('currentUser/logoutUser')
      }
    },
    created() {
      if ( localStorage.getItem('LaravelVuetify_token') ) {
        axios.defaults.headers.common["Authorization"] = "Bearer " + localStorage.getItem('LaravelVuetify_token');
        this.$store.dispatch('currentUser/getUser')
      } else {
        window.location.replace('/login')
      }
    }
  }
</script>