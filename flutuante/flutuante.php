<link rel="stylesheet" href="<?php echo SITE_URL;?>/flutuante/flutuante.css" />
<?php $hora_agora = date('H:i:s');?>
<?php if(isset($infoSistema->whatsapp_flutuante) && !empty($infoSistema->whatsapp_flutuante)){?>
<div>
    <a href="https://api.whatsapp.com/send?phone=55<?php echo $infoSistema->whatsapp_flutuante;?>&text=Ol%C3%A1,%20quero%20comprar%20uma%20bateria." aria-label="Link de encaminhamento para o Whatsapp da Auto Baterias" target="_blank"
        class="btn-floating-whats btn-large btn-success whatsapp">
        <i class="fa fa-whatsapp"></i> 
    </a>
</div>
<?php }?>

<?php if(isset($infoSistema->telefone_flutuante) && !empty($infoSistema->telefone_flutuante)){?>
<div class="fixed-action-btn click-to-toggle ">
    <a href="tel:<?php echo str_replace(")", "", str_replace("(", "", $infoSistema->telefone_flutuante));?>" aria-label="Link de encaminhamento para o Telefone da Auto Baterias" onclick="mostra()" class="btn-floating btn-large btn-primary">
        <i class="fa fa-phone"></i>
    </a>
</div>
<?php }?>

