<?php
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
            
    //Inicio de la alerta del bot
    $botToken="TU_BOT_TOKEN_ACA";             
    $website="https://api.telegram.org/bot".$botToken;
    $texto='🌍 NUEVO PEDIDO DE LA GEOGRÁFICA 🌍' . "\n\n" . 'Cliente: ' . $nombre . "\n\n" . $mensaje;

    $chatId="TU_CHAT_ID_ACA";

    $url = $website.'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($texto);
    file_get_contents($url);

    //fin del bot de alerta
  
    $alerta = '🌍 ¡Pedido de ' . $nombre . ' enviado con coordenadas exactas! Revisar Telegram 📱';
    echo "<script>";
    echo "alert('$alerta');";  
    echo "window.location = 'index.html';";
    echo "</script>";

?>