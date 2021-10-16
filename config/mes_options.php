<?php

    // define('_NO_CACHE', -1);

    // $GLOBALS['oembed_providers'] = array(
	//        'https://videos.domainepublic.net/videos/watch/*' => 'https://videos.domainepublic.net/services/oembed',
    // );

    $GLOBALS['spip_pipeline']['newsletter_pre_envoi'] .= "|newsletter_dkim";
    function newsletter_dkim($mailer){
        $mailer->DKIM_domain = 'ammd.net';
        $mailer->DKIM_selector = 'ammd';
        $mailer->DKIM_private = dirname(__FILE__).'/dkim.key';
        $mailer->DKIM_passphrase = '';
        $mailer->DKIM_identity = $mail->From;
        return $mailer;
    }

?>
