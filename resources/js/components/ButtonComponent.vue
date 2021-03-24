<template>
    <button style="background-color: #ef024e;border: none;border-radius: 15px;color: white;width: 300px;height: 50px;font-size: 28px;" v-on:click="onClick">Clicked {{ count }} times</button>
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



