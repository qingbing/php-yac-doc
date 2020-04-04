<?php

/**
 * @Extension    :   Yac
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   2.2.0
 * @Date         :   2020-04-05
 * @Class        :   Yac
 * @desc         :   一个基于共享内存, 无锁的内容Cache
 */
class Yac
{
    /**
     * @describe    缓存前缀
     *
     * @var string
     */
    protected $_prefix;

    /**
     * 魔术方法：构造函数
     * @param null|string $prefix 前缀
     */
    public function __construct($prefix = null)
    {
    }

    /**
     * @describe    添加缓存，可以添加一个或多个，如果缓存存在，返回 false，否则设置成功返回true，反之false
     *
     * @param mixed $keys 可传数组或字符串，当为数组时，第二个参数表示有效时长
     * @param mixed $value 当 keys 为数组时，这里传int，表示 $ttl 有效时长
     * @param null|int $ttl 有效时长
     *
     * @return bool
     */
    public function add($keys, $value = null, $ttl = null): bool
    {
        return true;
    }

    /**
     * @describe    设置缓存，可以设置一个或多个，如果缓存存在则修改，否则添加
     *
     * @param mixed $keys 可传数组或字符串，当为数组时，第二个参数表示有效时长
     * @param mixed $value 当 keys 为数组时，这里传int，表示 $ttl 有效时长
     * @param null|int $ttl 有效时长
     *
     * @return bool
     */
    public function set($keys, $value = null, $ttl = null)
    {
        return true;
    }

    /**
     * @describe    返回对应的缓存信息
     *
     * @param mixed $keys 可传数组或字符串，当为数组时，返回键值对的数组形式
     *
     * @return mixed
     */
    public function get($keys)
    {
        return '';
    }

    /**
     * @describe    删除对应的缓存信息，如果缓存存在就删除返回true，不存在返回false
     *
     * @param mixed $keys 可传数组或字符串，当为数组时，返回键值对的数组形式
     * @param null|int $ttl 传递该值表示延迟删除
     *
     * @return bool
     */
    public function delete($keys, $ttl = null): bool
    {
        return true;
    }

    /**
     * @describe    魔术方法：$yac->name = $value 时调用
     *
     * @param string $key
     * @param $value
     */
    public function __set(string $key, $value)
    {
    }

    /**
     * @describe    魔术方法：$yac->name 时调用
     *
     * @param string $key
     *
     * @return string
     */
    public function __get(string $key)
    {
        return '';
    }

    /**
     * @describe    冲刷，清理缓存，该方法总是返回true
     *              注意：该方法不是立即删除所有缓存，而是将所有缓存设置成无效
     *
     * @return bool
     */
    public function flush(): bool
    {
        return true;
    }

    /**
     * @describe    获取 Yac 缓存信息
     *
     * @return array
     */
    public function info(): array
    {
        return [
            'memory_size' => 71303168, // 可使用内存
            'slots_memory_size' => 4194304, // 可使用槽内存
            'values_memory_size' => 67108864, // 可使用值内存
            'segment_size' => 4194304,
            'segment_num' => 16,
            'miss' => 0,
            'hits' => 0,
            'fails' => 0,
            'kicks' => 0,
            'recycles' => 0,
            'slots_size' => 32768, // 缓存总容量
            'slots_used' => 0, // 缓存个数
        ];
    }

    /**
     * @describe    返回缓存存储信息
     *
     * @return array
     */
    public function dump(): array
    {
        return [];
    }
}