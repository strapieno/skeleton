<?php
namespace Application\Model\User\Entity;

use Strapieno\User\Model\Entity\UserEntity as BaseUserEntity;
use Strapieno\User\Model\Entity\UserInterface;
use Strapieno\UserAvatar\Model\Entity\UserAvatarAwareInterface;
use Strapieno\UserAvatar\Model\Entity\UserAvatarAwareTrait;


/**
 * Class UserEntity
 */
class UserEntity extends BaseUserEntity implements UserInterface, UserAvatarAwareInterface
{
    use UserAvatarAwareTrait;
}