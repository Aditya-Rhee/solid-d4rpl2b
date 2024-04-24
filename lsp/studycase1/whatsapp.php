<?php

namespace socialmedia;

require_once 'socialmedia.php';
require_once 'videogroupmanager.php';

class WhatsApp implements \SocialMedia, \VideoGroupManager
{
    public function chat(): void
    {
        echo "Chatting<br>";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Sending photos and videos<br>";
    }

    public function callGroupVideo(): void
    {
        echo "Calling group video<br>";
    }
}