<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * User mailer.
 */
class UserMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'User';

    public function welcome($user)
    {
        $this
            ->setTo($user->email)
            ->setProfile('email_profile')
            ->setEmailFormat('html')
            ->setSubject(sprintf('Bem-vindo %s', $user->name))
            ->setViewVars(['nome' => $user->name])
            ->viewBuilder()
                ->setLayout('default')
                ->setTemplate('welcome_email'); // By default template with same name as method name is used.
    }
}
