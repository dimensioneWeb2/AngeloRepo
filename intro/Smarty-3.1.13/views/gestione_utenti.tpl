<div class="newButton">
    
    <div id="newUtente">
        <a href="#" class="iu_submit"> Crea Utente </a>
    </div>
</div>

<!--

<div class="postFONT">Non ci sono utenti per il momento.</div>

-->


<form id="board" action="default.php" method="post">

<div id="board_table">
    <div id = "first_row" class="board_row">
        <div class="board_column empty_field"> &nbsp;</div>
        <div class="board_column">utente</div>
        <div class="board_column">Cognome</div>
        <div class="board_column">Email</div>
        <div id= "last_column" class="board_column">&nbsp;</div>
    </div>
  
{foreach $utenti as $utente} 
    
        <div class="board_row">
            <div class="board_column empty_field">  <input type="checkbox"/> </div>
            <div class="board_column">{$utente->nome}</div>
            <div class="board_column">{$utente->cognome}</div>
            <div class="board_column">{$utente->email}</div>
            <div class="board_column last_column"><img alt="ss" src="imageintro/mailSend.png"/><a href="#" title="contatta">contatta</a><img alt="ss"  src="imageintro/cross-small.png"/><a href="#" title="elimina">Elimina</a></div>

        </div> 

{/foreach}    
    
    <div id="select_all"> <img alt="ss" src="imageintro/arrow_ltr.png"/> <a href="#" title="seleziona/deseleziona">Seleziona Tutto / Deseleziona Tutto</a> <span style="margin-left: 50px;">se selezionato :</span> <img alt="ss" src="imageintro/mailSend.png"/><a href="#" title="contatta">contatta</a><img alt="ss"  src="imageintro/cross-small.png"/><a href="#" title="elimina">Elimina</a></div>
</div>
    
</form>