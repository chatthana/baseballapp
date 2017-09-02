<template>
    <nav role="navigation">
        <ul>
            <li><a href="/">ติดต่อเรา</a></li>
            <li><a href="/">แจ้งชำระค่าสินค้า</a></li>
            <li><a href="/">ตรวจสอบสถานะสินค้า</a></li>
        </ul>
    </nav>
</template>

<style scoped>
    nav[role="navigation"] {
        position: relative;
        float: right;
    }

    nav[role="navigation"] ul > li {
        float: left;
        margin: 0 15px;
    }
</style>

<script>
    export default {
        mounted: () => {
            console.log('Navbar is mounted');
        },
        data: () => {
            return {
                msg: 'test'
            }
        }
    }
</script>