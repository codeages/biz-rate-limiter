<?php
namespace Codeages\Biz\Targetlog\Tests;

use Codeages\Biz\Framework\UnitTests\BaseTestCase;
use Codeages\Biz\RateLimiter\RateLimiterServiceProvider;

class RateLimiterServiceProviderTestCase extends BaseTestCase
{
    public function testIndex()
    {
        $provider = new RateLimiterServiceProvider();
        self::$biz->register($provider);

        $limiterCreator = self::$biz['ratelimiter.creator'];
        $limiter = $limiterCreator('test', 10, 600);

        $this->assertInstanceOf('Codeages\RateLimiter\RateLimiter', $limiter);
    }

}