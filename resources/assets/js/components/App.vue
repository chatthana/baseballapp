<template>
    <div class="v-app">
        <div id="page-wrapper">
            <fader></fader>
            <appheader></appheader>
            <router-view></router-view>
        </div>
        <appfooter></appfooter>
    </div>
</template>

<style scoped>
    #page-wrapper {
        min-height:100%;
        height:auto;
        margin:0 auto -44px;
        padding: 0 0 44px;
    }

    .v-app {
        position:relative;
        height:100%;
    }
</style>

<script>
    import Header from './Header';
    import Footer from './Footer';
    import Fader from './Fader';

    export default {
        components: {
            appheader: Header,
            appfooter: Footer,
            fader: Fader
        },
        mounted() {
            console.log('App is mounted successfully')
        }
    }
</script>