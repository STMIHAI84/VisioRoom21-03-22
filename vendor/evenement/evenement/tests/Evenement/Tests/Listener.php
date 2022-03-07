<?php declare(strict_types=1);

/*
 * This file is part of Evenement.
 *
 * (c) Igor Wiedler <igor@wiedler.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Evenement\Tests;

class Listener
{
    private static $staticData = [];
    private $data = [];
    private $magicData = [];

    public static function onBar($data)
    {
        self::$staticData[] = $data;
    }

    public static function getStaticData()
    {
        return self::$staticData;
    }

    public function onFoo($data)
    {
        $this->data[] = $data;
    }

    public function __invoke($data)
    {
        $this->magicData[] = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getMagicData()
    {
        return $this->magicData;
    }
}
