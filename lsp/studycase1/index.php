<?php

require_once 'whatsapp.php';
require_once 'instagram.php';

use SocialMedia\WhatsApp;
use SocialMedia\Instagram;

// Create instances of WhatsApp and Instagram
$whatsapp = new WhatsApp();
$instagram = new Instagram();

// Use WhatsApp
echo "WhatsApp Actions:<br>";
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

// Use Instagram
echo "\nInstagram Actions:<br>";
$instagram->chat();
$instagram->sendPhotosAndVideos();
$instagram->publishPost();
