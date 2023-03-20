<?php

namespace common\containers;

final class BaseContainer
{
    public static function getContainers(): array
    {
        return [
            \Psr\SimpleCache\CacheInterface::class => static function () {
                $hostname = getenv('REDIS_HOSTNAME');
                $port = getenv('REDIS_PORT');

                /**
                 * @psalm-suppress UndefinedClass
                 */
                $redis = \Symfony\Component\Cache\Adapter\RedisAdapter::createConnection(
                    "redis://{$hostname}:{$port}",
                    [
                        'persistent' => 1,
                    ]
                );

                $psr6Cache = new \Symfony\Component\Cache\Adapter\RedisAdapter($redis);

                return new \Symfony\Component\Cache\Psr16Cache($psr6Cache);
            },
            \yii\redis\Connection::class => static function () {
                return new \yii\redis\Connection(
                    [
                        'hostname' => getenv('REDIS_HOSTNAME'),
                        'port' => (int)getenv('REDIS_PORT'),
                        'database' => (int)getenv('REDIS_DATABASE'),
                        'retries' => getenv('REDIS_RETRIES') ?? 2,
                        'socketClientFlags' => STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT,
                    ]
                );
            },
            \common\components\ParameterBag::class => static function () {
                return new \common\components\ParameterBag(
                    [
                        'jwt' => [
                            'domain' => getenv('JWT_DOMAIN') ?? '',
                            'key' => getenv('JWT_KEY') ?? '',
                            'expire' => [
                                'access' => (int)(getenv('JWT_EXPIRE_ACCESS') ?? 0),
                                'refresh' => (int)(getenv('JWT_EXPIRE_REFRESH') ?? 0),
                            ],
                            'algorithm' => getenv('JWT_ALGORITHM') ?? 'HS256',
                        ],
                    ]
                );
            },
            \Yiisoft\Validator\ValidatorInterface::class => \Yiisoft\Validator\Validator::class,
        ];
    }
}
