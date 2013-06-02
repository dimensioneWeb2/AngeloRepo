
<div class="newButton">

    <div id="newPost">
        <a href="#" class="iu_submit"> Inserire Post </a>
    </div>
</div>

<!--

<div class="postFONT">Non ci sono posts per il momento.</div>

-->


<form id="board" action="default.php" method="post">

    <div id="board_table">
        <div id = "first_row" class="board_row">
            <div class="board_column empty_field"> &nbsp;</div>
            <div class="board_column">Titolo</div>
            <div class="board_column"><img id="arrowDown" alt="ss" src="imageintro/ArrowDownIcon.png"/><a class="noLinkStyle" title="ss" href="#">Data di Creazione</a></div>
            <div id= "last_column" class="board_column">&nbsp;</div>
        </div>

        {foreach $entries as $entry}    

            <div class="board_row">
                <div class="board_column empty_field">  <input type="checkbox"/> </div>
                <div class="board_column">{$entry->titolo}</div>
                <div class="board_column">{$entry->data_creazione|date_format:"%d/%m/%y "}</div>
                <div class="board_column last_column"><img alt="ss" src="imageintro/editIconOver.png"/><a href="#" title="modifica">Modifica</a><img alt="ss"  src="imageintro/cross-small.png"/><a href="#" title="elimina">Elimina</a></div>

            </div> 
        {/foreach}   




        <div id="select_all"> <img alt="ss" src="imageintro/arrow_ltr.png"/> <a href="#" title="seleziona/deseleziona">Seleziona Tutto / Deseleziona Tutto</a> <span style="margin-left: 50px;">se selezionato :</span> <img alt="ss"  src="imageintro/cross-small.png"/><a href="#" title="elimina">Elimina</a></div>
    </div>

    {if $info_msg != "" }
        
    <div id="info_message">

        <img alt="ss" src="imageintro/info_icon.gif"/>  <span>{$info_msg}</span>

    </div>
        
    {/if}

</form>