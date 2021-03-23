<template>
    <section class="page__section">
        <div class="page__title">
            <h1>Vue</h1>
            <div class="page__title__line"></div>
        </div>
        <div>
            <div class="page__content">
                <h4>Waarom Vue?</h4>
                <p>
                    Het is een gemakkelijkere manier voor het maken van one-page websites, het is een redelijk klein framework die maar 18kb is en het het heeft een two-way data binding systeem van angular. 
                </p>

                <h4>
                    Wat is Vue?
                </h4>
                <p>
                    Vue is een open-source Framework die geschreven is in JavaScript en TypeScript die gemaakt is door <strong>Evan You</strong> hij kreeg het idee om het te maken nadat hij voor Google had gewerkt met AngularJS in juli 2013 gebeurde de eerste 
                    code commit en in februari 2014 werd Vue gelanceerd. 
                </p>

                <h4>Components</h4>
                <p>
                    Vue components zijn HTML elementen die herbruikbaar zijn. op hoger niveau, componenten zijn zelfgemaakte elementen waar je een functionaliteit kunt aan toewijzen. In Vue, een component is een Vue instance met voorgedefinieerde opties.
                    De code hieronder is een voorbeeld van een Vue component. Het component is een knop die laat zien hoeveel keer je die geklikt hebt.
                </p>
                <img src="/assets/code_snippet_vue.png">
                <vue-button-component></vue-button-component>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    components: {
        'vue-button-component': require('../ButtonComponent').default,
    }
}
</script>