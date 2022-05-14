<script>
import HelloWorld from './components/HelloWorld.vue'
import TheWelcome from './components/TheWelcome.vue'
import Navbar from './components/Navbar.vue'
import Showcase from './components/Showcase.vue'
import Newsletter from './components/Newsletter.vue'
import Footer from './components/Footer.vue'


export default{
  name: "App",
  components:{
    Navbar,
    Showcase,
    Newsletter,
    Footer,
    
  }
}

</script>

<template>
  <Navbar />
  <Showcase />
  <Newsletter />
  <Footer />
</template>

<style>

</style>
