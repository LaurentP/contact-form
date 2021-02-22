<?php

class Mailer
{
    private static $recipient = "your@email.tld";

    private static $response = [];

    public static function sendMessage($request)
    {
        if (!empty($request['fullname']) && !empty($request['email']) && !empty($request['subject']) && !empty($request['message']))
        {
            if (!filter_var($request['email'], FILTER_VALIDATE_EMAIL))
            {
                self::$response['error'] = "L'adresse email saisie est invalide.";
            }
            else
            {
                // Le message est placé dans du code HTML qui peut être personnalisé selon le projet lorsque le code est réutilisé.
                $message = '<html>
                                <body>
                                    ' . nl2br(htmlspecialchars($request['message'])) . '
                                </body>
                            </html>';
        
                $headers = array(
                    'From'         => '"' . $request['fullname'] . '" <' . $request['email'] . '>',
                    'Reply-To'     => $request['email'],
                    'MIME-Version' => '1.0',
                    'Content-Type' => 'text/html; charset=utf-8'
                );
        
                if (@mail(self::$recipient, $request['subject'], $message, $headers))
                {
                    self::$response['success'] = "Votre message a bien &eacute;t&eacute; envoy&eacute;.";
                }
                else
                {
                    self::$response['error'] = "Votre message n'a pas pu &ecirc;tre envoy&eacute;.";
                }
            }
        }
        else
        {
            self::$response['error'] = "Veuillez remplir tous les champs correctement.";
        }
    }

    public static function getResponse()
    {
        return json_encode(self::$response);
    }
}
