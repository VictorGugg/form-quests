<form action="thanks.php" method="post">
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname">
    </div>
    <div>
        <label for="lastname">Nom de famille :</label>
        <input type="text" id="lastname" name="user_lastname">
    </div>
    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phoneNumber">Numéro de téléphone :</label>
        <input type="text" id="phoneNumber" name="user_phone">
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="subject">
            <option value="question">Question</option>
            <option value="complaint">Réclamation</option>
            <option value="feedback">Retour</option>
            <option value="other">Autre</option>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>