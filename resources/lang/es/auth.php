<?php

return [
    "login"  => [
        "title"    => "Iniciar sesion",
        "remember" => "Recordarme",
        "forgot"   => "¿Olvidaste tu contraseña?",
        "error"    => "El correo electrónico o la contraseña son incorrectos.",
        "email"    => [
            "label"       => "Correo electrónico",
            "placeholder" => "tu@email.com",
        ],
        "password" => [
            "label"       => "Contraseña",
            "placeholder" => "Tu contraseña",
        ],
    ],
    "forgot" => [
        "title"    => "Recupera tu cuenta",
        "action"   => "Enviar enlace de recuperación",
        "remember" => [
            "label" => "¿Recordaste tu contraseña?",
        ],
    ],
    "reset"  => [
        "title"   => "Revisa tu correo",
        "message" => "Hemos enviado un enlace para restablecer tu contraseña a tu correo electrónico.",
        "action"  => "Volver a Iniciar Sesión",
        "errors"  => [
            "email" => [
                "required" => "El correo es obligatorio.",
                "email"    => "Por favor ingresa un correo electrónico válido.",
            ],
        ],
    ],
];
