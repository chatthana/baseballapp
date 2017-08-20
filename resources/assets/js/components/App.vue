<template>
    <div>
        <appheader></appheader>
        <router-view></router-view>
    </div>
</template>

<style>

</style>

<script>
    import Header from './Header';

    export default {
        components: {
            appheader: Header
        },
        mounted() {
            console.log('App is mounted successfully')
        }
    }
</script>