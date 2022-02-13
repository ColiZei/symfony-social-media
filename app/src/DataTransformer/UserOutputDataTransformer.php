<?php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\Dto\UserOutput;
use App\Entity\User;

class UserOutputDataTransformer implements DataTransformerInterface
{

    public function transform($object, string $to, array $context = []): UserOutput
    {
        $user = new UserOutput();
        $user->setId($object->getId());
        $user->setEmail($object->getEmail());
        $user->setName($object->getName());
        return $user;
    }

    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return UserOutput::class === $to && $data instanceof User;
    }
}
