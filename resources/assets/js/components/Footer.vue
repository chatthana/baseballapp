<template>
  <footer>
    <div class="wrapper auto">
      <div class="contact-footer-left">
        <div class="image-container">
          <img src="/images/Logo-Facebook.png" />
        </div>
        <div class="image-container">
          <img src="/images/Logo-Line@.png" />
        </div>
        <div class="contact-info">
          <p>081-123-4567</p>
          <p>081-123-4567</p>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>
  .contact-footer-left {

  }

  .contact-footer-left .image-container {
    position:relative;
    display:inline-block;
  }

  .contact-footer-left .image-container img {
    max-width:32px;
  }

  .contact-footer-left .contact-info {
    display:inline-block;
  }

  .contact-footer-left .contact-info p {
    margin:0;
  }
</style>

<script>
  export default {
    mounted() {
      console.log('Footer mounted');
    }
  }
</script>