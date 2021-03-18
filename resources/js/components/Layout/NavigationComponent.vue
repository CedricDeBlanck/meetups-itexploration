<template>
    <div class="navigation">
        <ul class="navigation-list">
            <li class="navigation-item">
                <div class="navigation-item-icon">
                    <i class="fas fa-home"></i>
                </div>
                <a href="/">
                    Home
                </a>
            </li>
            <li class="navigation-item">
                <div class="navigation-item-icon">
                    <img src="/assets/laravel.png" />
                </div>
                <a href="/laravel">
                    Laravel
                </a>
            </li>
            <li class="navigation-item">
                <div class="navigation-item-icon">
                    <img src="/assets/livewire.png" />
                </div>
                <a 
                    href="/livewire">
                    Livewire
                </a>
            </li>
            <li class="navigation-item">
                <div class="navigation-item-icon">
                    <img src="/assets/vue.png" />
                </div>
                <a
                    href="/vue">
                    Vue
                </a>
            </li>
            <li class="navigation-item">
                <div class="navigation-item-icon">
                    <i class="fas fa-question"></i>
                </div>
                <a
                    href="/quiz">
                    Quiz
                </a>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    methods: {
        
    },
    mounted() {
        console.log('Navigation mounted!')
    }
}
</script>
    