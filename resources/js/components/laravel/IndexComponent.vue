<template>
    <section class="page__section">
        <div class="page__title">
            <h1>Laravel</h1>
            <div class="page__title__line"></div>
        </div>
        <div>
            <div class="page__content">
                <h4>Waarom laravel?</h4>

                <p>
                    Er zijn veel mogelijkheden om een web applicatie te bouwen maar laravel is de beste keuze <br> voor moderne, full-stack applications.
                </p>

                <h4>Wat is laravel</h4>
                <p>
                    Laravel is een open source framework gebaseerd op de MVC structuur, 
                    die om de programmeertaal PHP heen is geschreven. Dit framework zorgt ervoor dat een aantal onderdelen van het schrijven van PHP code gemakkelijker wordt voor de ontwikkelaars.
                    Laravel is gemaakt door Taylor Otwell en en wordt beschouwd als één van de populairste PHP-framworks, samen met Symfony, Nette, CodeIgnitor en Yii2.
                </p>

                <h4>Model, View, Controller</h4>
                <p>
                    MVC staat voor Model, View, Controller. Deze MVC structuur zorgt ervoor dat de data gescheiden wordt van de logica van de applicatie en de views van de applicatie (Wat jij te zien krijgt).
                    De basis van de applicatie zijn de controllers. In de controllers worden alle functies van de applicatie afgehandeld zoals bijvoorbeeld het toevoegen, bewerken en inzien van klanten. 
                    Elke actie die uitgevoerd kan worden, krijgt zijn eigen functie binnen een controller, Als er bijvoorbeeld een pagina wordt geopend, dan wordt een betreffende controller functie aangesproken. 
                    In deze controller wordt de data dan opgehaald, verwerkt en vervolgens getoond in de view aan de gebruiker.
                </p>

                <h4>Object Relational Mapping</h4>
                <p>Naast de MVC structuur waarin Laravel opgebouwd is, beschikt Laravel ook over een ORM. ORM staat voor Object Relational Mapping. 
                   Door middel van een ORM kan data makkelijker worden uitgelezen uit de database met behulp van de Models uit de MVC structuur. 
                   De Models uit de MVC structuur zijn verbonden aan database tabellen. In Laravel kan je door middel van het aanroepen van de Model klasse een query uitvoeren. Bijvoorbeeld:
                </p>
                <div class="code_snippet">
                    <code>
                        Product::where(category_id, 1)->get(); 
                    </code>
                </div>


                <h4>Handler</h4>
                <p>Binnen applicaties kan het ook voorkomen dat er acties dubbel uitgevoerd kunnen worden als de applicatie
                   bijvoorbeeld beschikt over een klantgedeelte en een Admin gedeelte of als er vanaf meerde klanten facturen kunnen aangemaakt worden. Daarvoor kan gebruik gemaakt worden van een zogenoemde Handler. Deze handler neemt eigenlijk de taak
                   over van de controller, namelijk het verwerken van de input van de gebruikers en dit opslaan in de database. De controller wordt nog steeds aangeroepen. Vervolgens stuurt de controller de input van de gebruiker door naar de Handler. Deze voert zijn taak uit en retourneert aan de controller of zijn actie gelukt is of niet. Vervolgens laat de controller met behulp van de views zien of een actie geslaagd is of niet. Doordat het verwerken van de input in de Handler plaats vind, krijg je in de verschillende controllers geen dubbele code. Bij eventuele wijzigingen in de verwerking wordt zo de kans op fouten geminimaliseerd. 
                </p>
            </div>
        </div>
    </section>
</template>