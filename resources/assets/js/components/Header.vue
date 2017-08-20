<template>
    <header>
        <div class="wrapper">
            <a href="/" class="logo"><h1>{{message}}</h1></a>
            <button type="button" class="button blue" v-on:click="getData()">Fetch some data</button>
            <navbar></navbar>
        </div>
    </header>
</template>

<style scoped>
    header {
        position:relative;
        padding:10px;
        line-height:40px;
        border-bottom:1px solid #dadada;
    }

    header a.logo {
        display:block;
        float:left;
    }

    header a.logo h1 {
        margin:0;
        font-size:1.25em;
    }
</style>

<script>
    import Navbar from './Navbar.vue';

    export default {
        components: {
            navbar: Navbar
        },
        mounted() {
            console.log('Component mounted.')
        },
        data: () => {
            return {
                message: 'Logo Builder'
            }
        },
        methods: {
            getData: () => {
                console.log("tester");
            }
        }
    }
</script>
