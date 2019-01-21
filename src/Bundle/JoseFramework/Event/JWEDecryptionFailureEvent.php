<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2019 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Bundle\JoseFramework\Event;

use Jose\Component\Core\JWKSet;
use Jose\Component\Encryption\JWE;
use Symfony\Component\EventDispatcher\Event;

final class JWEDecryptionFailureEvent extends Event
{
    private $JWKSet;

    private $jwe;

    public function __construct(JWE $jwe, JWKSet $JWKSet)
    {
        $this->JWKSet = $JWKSet;
        $this->jwe = $jwe;
    }

    public function getJWKSet(): JWKSet
    {
        return $this->JWKSet;
    }

    public function getJwe(): JWE
    {
        return $this->jwe;
    }
}