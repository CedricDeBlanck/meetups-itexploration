<template>
    <button v-on:click="onClick">Clicked {{ count }} times</button>
</template>
<script>
    export default {
        data() {
            return {
                count: 0,
            }
        },
        methods: {
            onClick() {
                this.count += 1;
            }
        },
    }
</script>



