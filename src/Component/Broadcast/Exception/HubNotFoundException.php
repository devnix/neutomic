<?php

declare(strict_types=1);

/*
 * This file is part of the Neutomic package.
 *
 * (c) Saif Eddin Gmati <azjezz@protonmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Neu\Component\Broadcast\Exception;

use Throwable;

final class HubNotFoundException extends RuntimeException
{
    /**
     * Create an exception for a hub that is not found by its identifier.
     *
     * @param non-empty-string $identifier
     */
    public static function forHub(string $identifier, null|Throwable $previous = null): self
    {
        return new self('Hub "' . $identifier . '" was not found.', previous: $previous);
    }
}
