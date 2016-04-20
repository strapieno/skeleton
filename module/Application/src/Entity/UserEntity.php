<?php
namespace Application\Entity;

use Strapieno\User\Model\Entity\UserEntity as BaseUserEntity;
use Strapieno\UserAvatar\Model\Entity\UserAvatarAwareInterface;
use Strapieno\UserAvatar\Model\Entity\UserAvatarAwareTrait;

/**
 * Class UserEntity
 */
class UserEntity extends BaseUserEntity implements UserAvatarAwareInterface
{
    use UserAvatarAwareTrait;
}