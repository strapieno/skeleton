<?php
namespace Application\Entity;

use ImgMan\Apigility\Entity\ImageEntityInterface;
use ImgMan\Image\ImageTrait;
use Matryoshka\Model\Object\IdentityAwareTrait;

/**
 * Class UserEntity
 */
class UserAvatarEntity implements ImageEntityInterface
{
    use ImageTrait;
    use IdentityAwareTrait;
}