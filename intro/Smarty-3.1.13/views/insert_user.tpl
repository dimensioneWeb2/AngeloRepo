<form id="insert_user" method="post" action="default.php">
<div class="iu_container"> 
    <label class="iu_label">
        Utente
        <span class="req">*</span>
    </label>
    <span>
        <input id="iu_nome" name="iu_nome" type="text" class="field" />
        <label for="iu_nome">Nome</label>
    </span>
    <span>
        <input id="iu_cognome" name="iu_cognome" type="text" class="field" />
        <label for="iu_cognome">Cogome</label>
    </span>
</div>
<div class="iu_container"> 
    <label class="iu_label">
        Indirizzo e-mail
        <span class="req">*</span>
    </label>
        <input id="iu_email" name="iu_email" type="text" class="field" />

</div>
<div class="iu_container"> 
    <label class="iu_label">
        Ruolo
        <span class="req">*</span>
    </label>
        <select id="iu_ruolo" name="iu_ruolo" class="field" >
        <option value="utente"> utente semplice </option>
        <option value="amministratore"> amministratore </option>
        </select>
    
</div>   
<div class="iu_container">     
    <a href="#" class="iu_submit"> Inserire Utente </a>
</div>    
    
</form>