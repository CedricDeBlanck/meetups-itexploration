<template>
    <section class="page__section">
        <div class="page__title">
            <h1>Laravel Livewire</h1>
            <div class="page__title__line"></div>
        </div>
        <div>
            <div class="page__content">
                <h4>Wat is Livewire?</h4>
                <p>
                    Laravel Livewire is een framework die het eenvoudig maakt om moderne, dynamische interfaces te bouwen met Laravel Blade als sjabloontaal. Dit is een geweldige stapel om uit te kiezen als je een applicatie wilt bouwen die dynamisch en reactief is, maar je niet op je gemak voelt om in een volledig JavaScript-framework als Vue.js te werken.
                </p>

                <h4>
                    Wat kan Livewire?
                </h4>
                <p>
                    Livewire is een full-stack framework dat het proces van het bouwen van dynamische interfaces in Laravel stroomlijnt. Kortom, het is in staat om dingen te doen binnen de grenzen van Laravel waarvoor voorheen JavaScript nodig was.                </p>

                <h4>Components</h4>
                <p>
                    Een component is een herbruikbaar onderdeel van de gebruikersinterface. Elk raamwerk behandelt componenten anders.

                    Een eenvoudige Livewire-component is een PHP-klasse die de Livewire-componentklasse uitbreidt en een Blade-bestand genereert.
                </p>
                <div style="width: 800px;">
                    <img width="100%" src="/assets/livewire_1.png">
                </div>
                <p>Dit is waar een eenvoudige livewire-component op lijkt en ja, het lijkt heel hard op een laravel controller die een view teruggeeft</p>
                
                <h4>Conclusie met Vue</h4>
                <p>
                    Voor applicaties met veel re-rendering, Livewire is niet de het beste framework maar als je veel data nodig hebt van de database met minimale reactiviteit en het moet
                    allemaal zo snel mogelijk inladen? Dan zou je livewire wel een kans kunnen geven.
                </p>
            </div>
        </div>
    </section>
</template>

<script>
export default {

}
</script>