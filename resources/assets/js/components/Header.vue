<template>
    <header>
        <div class="wrapper auto">
            <div class="row">
                <div class="grid-1">
                    <a href="/" class="logo"><img src="/images/Main-Logo.png" /></h1></a>
                </div>
                <div class="grid-10" style="border-bottom:2px solid #fff;">
                    <navbar></navbar>
                </div>
                <div class="grid-1">
                    <cart></cart>
                </div>
            </div>
            
        </div>
    </header>
</template>

<style scoped>
    header {
        position:relative;
        padding:10px;
        line-height:40px;
    }

    header a.logo {
        display:block;
        float:left;
    }

    header a.logo img {
        max-width:86px;
    }

    header a.logo h1 {
        margin:0;
        font-size:1.25em;
    }
</style>

<script>
    import Navbar from './Navbar.vue';
    import Cart from './Cart';

    export default {
        components: {
            navbar: Navbar,
            cart: Cart
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
