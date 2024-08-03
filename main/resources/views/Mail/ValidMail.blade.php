<h1> hello  {{$name}}</h1>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .header {
        background-color: #1e56a0;
        color: #ffffff;
        padding: 10px;
        text-align: center;
        border-radius: 10px 10px 0 0;
    }
    .content {
        padding: 20px;
    }
    .content p {
        margin: 10px 0;
        line-height: 1.6;
        color: #333333;
    }
    .content .bold {
        font-weight: bold;
    }
    .details {
        background-color: #f9f9f9;
        padding: 10px;
        border-radius: 5px;
        margin: 20px 0;
    }
    .details p {
        margin: 5px 0;
    }
    .footer {
        text-align: center;
        padding: 10px;
        font-size: 14px;
        color: #777777;
    }
</style>

<div class="container">
    <div class="header">
        <h1>Confirmation de Votre Rendez-Vous avec BLUE STRATEGY</h1>
    </div>
    <div class="content">
        <p>Bonjour,</p>
        <p>Nous avons bien reçu votre demande et sommes ravis de confirmer votre rendez-vous avec notre cabinet <span class="bold">BLUE STRATEGY</span>.</p>
        <div class="details">
            <p class="bold">Détails du Rendez-Vous :</p>
            <p>Date : [Date]</p>
            <p>Heure : [Heure]</p>
            <p>Lieu : Bureau N° 14, 2ème étage, imm OMAR, rue idriss 1, ville nouvelle - Safi (au-dessus du showroom Renault et Dacia AUTO ABDA)</p>
        </div>
        <p>Si vous avez des questions ou si vous devez modifier votre rendez-vous, n'hésitez pas à nous contacter à <a href="mailto:contact@bluestrategy.ma">contact@bluestrategy.ma</a> ou au 05 24 62 34 24.</p>
        <p>Nous nous réjouissons de vous rencontrer et de discuter de vos besoins. À très bientôt !</p>
        <p>Cordialement,</p>
        <p>L'équipe de BLUE STRATEGY</p>
    </div>
    <div class="footer">
        <p>&copy; 2024 BLUE STRATEGY. Tous droits réservés.</p>
    </div>
</div>

{{-- Confirmation de Votre Rendez-Vous avec BLUE STRATEGY ( bold)

Bonjour ,

Nous avons bien reçu votre demande et sommes ravis de confirmer votre rendez-vous  avec notre cabinet BLUE STRATEGY.

Détails du Rendez-Vous :

Date : [Date]
Heure : [Heure]
Lieu : Bureau N° 14, 2ème étage, imm OMAR, rue idriss 1, ville nouvelle - Safi (au-dessus du showroom renault et dacia AUTO ABDA )

Si vous avez des questions ou si vous devez modifier votre rendez-vous, n'hésitez pas à nous contacter à contact@bluestrategy.ma ou au 05 24 62 34 24 .

Nous nous réjouissons de vous rencontrer et de discuter de vos besoins. À très bientôt !

Cordialement, --}}