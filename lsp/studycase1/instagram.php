<?php

namespace socialmedia;

require_once 'socialmedia.php';
require_once 'postmediamanager.php';

class Instagram implements \SocialMedia, \PostMediaManager
{
    public function chat(): void
    {
        echo "Chatting<br>";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Sending photos and videos<br>";
    }

    public function publishPost(): void
    {
        echo "Publishing post<br>";
    }
}