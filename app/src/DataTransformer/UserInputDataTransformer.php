<?php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\Entity\User;

class UserInputDataTransformer implements DataTransformerInterface
{

    public function transform($object, string $to, array $context = []): User
    {
        $user = new User();
        $user->setEmail($object->email);
        $user->setName($object->name);
        $user->setPassword($object->password);
        return $user;
    }

    public function supportsTransformation($data, string $to, array $context = []): bool
    {

        if ($data instanceof User) {
            return false;
        }

        return User::class === $to && null !== ($context['input']['class'] ?? null);
    }
}
