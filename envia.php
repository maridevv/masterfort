<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

$destinatario = 'contato@hoogli.com.br';
$remetente = 'contato@hoogli.com.br';
$assunto = 'Contato pelo site - Página de Contato';
$redirecionar_para = SITE_URL . '/sucesso';
$img = SITE_URL . '/img/' . $infoSistema->logo_principal;

if (isset($_POST['acaoEnvio2']) && $_POST['acaoEnvio2'] == "Enviar") {

    $erros = [];
    if (empty($_POST['nome'])) {
        $erros[] = 'Nome não preenchido';
    }
     if (empty($_POST['telefone'])) {
        $erros[] = 'Telefone não preenchido';
    }
     if (empty($_POST['email'])) {
        $erros[] = 'Email não preenchido';
    }
    if (empty($_POST['assunto'])) {
        $erros[] = 'Assunto não preenchido';
    }
    if (empty($_POST['mensagem'])) {
        $erros[] = 'Preencha a mensagem';
    } else {
        $mensagem = $_POST['mensagem'];
        if (!preg_match('/^[a-zA-Z0-9\s,.!?-]*$/', $mensagem)) {
            $erros[] = 'Mensagem contém caracteres inválidos';
        }
        $mensagem = strip_tags($mensagem);
    }
    if ($_POST['empresa'] !== '') {
        $erros[] = 'Preencha a mensagem';
    }
    $translator = new GoogleTranslate('pt', null);
    $translatedText = $translator->translate($_POST['mensagem']);
    $detectedLanguage = $translator->getLastDetectedSource();
    if ($detectedLanguage !== null && $detectedLanguage !== 'pt') {
        $erros[] = 'Preencha a mensagem';
    }

    if (!$erros) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'mail.hoogli.com.br';
            $mail->SMTPAuth = true;
            $mail->Username = 'contato@hoogli.com.br';
            $mail->Password = 'Contato@site2024';
            $mail->SMTPSecure = 'ssl';  
            $mail->Port = 465; 
            
            $mail->setFrom($remetente);
            $mail->addAddress($destinatario);
            $mail->addReplyTo($_POST['email'], $_POST['nome']);
            
            $mail->isHTML(true);
            $mail->Subject = $assunto;

            $mail->Body = '<div style="text-align: -webkit-center; background:transparent;">
                <div style="width:600px; text-align: -webkit-left;">
                    <div style="background:#1a73e8; padding: 20px;">
                    <img width="120px" src="' . $img . '">     
                    <div style="text-align: center; color: #ffff; ">
                            <h1 style="font-weight: 100;">Solicitação de contato via site</h1>
                        </div>
                    </div>
                    <div style=" padding: 20px; background-color: #faf7f7;">
                        <div style="padding: 0 50px;">
                            <h4>Data da Solicitação : ' . $DataEHora . '</h4>
            
                            <p style="color: rgb(85, 85, 85); font-size: 14px;"> Você tem uma nova solicitação pelo site do cliente</p>
                            <p style="color: rgb(85, 85, 85); font-size: 14px;"> Nome: ' . htmlspecialchars($_POST['nome']) . '</p>
                            <p style="color: rgb(85, 85, 85); font-size: 14px;"> Email: ' . $_POST['email'] . '</p>
                            <p style="color: rgb(85, 85, 85); font-size: 14px;"> Telefone: ' . $_POST['telefone'] . '</p>
                            <p style="color: rgb(85, 85, 85); font-size: 14px;"> Assunto: ' . $_POST['assunto'] . '</p>
                            <p style="color: rgb(85, 85, 85); font-size: 14px;"> Mensagem: ' . htmlspecialchars($_POST['mensagem']) . '</p>
                           
                        </div>
                    </div>
                    <div style="background: #1a73e8; text-align: center; padding: 20px;">
                            <br>
                            <br>
                            <img width="150px" src="' . $img . '" alt="logo">
                    </div>
                </div>
            </div>';
            if ($mail->send()) {
                echo "<script>window.location.href='/sucesso';</script>";
                header("Location: $redirecionar_para");
                exit;
            } else {
                $erros[] = 'Erro ao mandar seu e-mail, por favor tente novamente mais tarde';
            }
        } catch (Exception $e) {
            $erros[] = 'Erro no envio de e-mail: ' . $mail->ErrorInfo;
        }
    }
}
?>



