<?php

namespace App\Services\Notifier;

use App\Entity\User;
use App\Services\App;

class NotificationServicesPasrser
{
    const EMAIL = 1;
    const TELEGRAM = 2;

    /** @return NotifierServiceInterface[] */
    public function parseUserNotificationServices(User $user): array
    {
        $binaryServices = $user->getNotificationServices();
        $notifierServices = [];

        if ($binaryServices & self::EMAIL) {
//            $notifierServices[] = new EmailNotifier();
        }

        if ($binaryServices & self::TELEGRAM) {
//            $notifierServices[] = new TelegramNotifier();
        }

        return $notifierServices;
    }
}