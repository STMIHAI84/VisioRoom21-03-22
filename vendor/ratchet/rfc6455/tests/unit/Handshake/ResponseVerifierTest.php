<?php

namespace Ratchet\RFC6455\Test\Unit\Handshake;

use PHPUnit\Framework\TestCase;
use Ratchet\RFC6455\Handshake\ResponseVerifier;

/**
 * @covers Ratchet\RFC6455\Handshake\ResponseVerifier
 */
class ResponseVerifierTest extends TestCase
{
    /**
     * @var ResponseVerifier
     */
    protected $_v;

    public static function subProtocolsProvider()
    {
        return [
            [true, ['a'], ['a']]
            , [true, ['c', 'd', 'a'], ['a']]
            , [true, ['c, a', 'd'], ['a']]
            , [true, [], []]
            , [true, ['a', 'b'], []]
            , [false, ['c', 'd', 'a'], ['b', 'a']]
            , [false, ['a', 'b', 'c'], ['d']]
        ];
    }

    public function setUp()
    {
        $this->_v = new ResponseVerifier;
    }

    /**
     * @dataProvider subProtocolsProvider
     */
    public function testVerifySubProtocol($expected, $request, $response)
    {
        $this->assertEquals($expected, $this->_v->verifySubProtocol($request, $response));
    }
}
