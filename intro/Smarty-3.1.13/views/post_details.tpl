<div id="postContainer">

    <div id="postDescription"> {$post[0]->descrizione}</div>
    <div id="AllegatiContainer">
        <div id="AllegatiContainerTitle"><div id="AllegatiContainerTitleIcon"></div><div id="AllegatiContainerTitle2">Files Allegati:</div></div>
        <div class="postFONT">Nessun file allegato.</div>
{foreach $post as $current_post}
        <div class="allegato"><div class="allegatoNome"><a href="#">{$current_post->nome_file}.{$current_post->tipo}</a></div><div class="allegatoSize">{$current_post->size} mb</div><div class="allegatoVolteScaricato">scaricato {$current_post->c_download} volte</div><div class="allegatoRimuovi">rimuovi</div>  </div>
{/foreach}
   </div>
    
</div>