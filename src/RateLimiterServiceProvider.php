<?php

namespace Codeages\Biz\RateLimiter;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Codeages\Biz\Framework\Context\MigrationProviderInterface;
use Codeages\Biz\Framework\Context\Kernel;
use Codeages\Biz\RateLimiter\Dao\Impl\RateLimiterDaoImpl;
use Codeages\Biz\RateLimiter\Service\Impl\RateLimiterServiceImpl;

class RateLimiterServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['migration.directories'][] = dirname(__DIR__) . '/migrations';
        $container['autoload.aliases']['RateLimiter'] = 'Codeages\Biz\RateLimiter';
    }
}
