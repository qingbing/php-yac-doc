<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Extension    :   Yac
 * Version      :   2.2.0
 * Date         :   2020-04-05
 */
// Yac 版本号
defined('YAC_VERSION') or define('YAC_VERSION', '2.2.0');

// Yac 缓存id 的最大长度
defined('YAC_MAX_KEY_LEN') or define('YAC_MAX_KEY_LEN', 48);

// Yac 缓存值的最大长度
defined('YAC_MAX_VALUE_RAW_LEN') or define('YAC_MAX_VALUE_RAW_LEN', 67108863);

// 最大压缩长度，目前不清楚啥意义
defined('YAC_MAX_RAW_COMPRESSED_LEN') or define('YAC_MAX_RAW_COMPRESSED_LEN', 1048576);

// 是否使用PHP自带的序列器 serialize
defined('YAC_SERIALIZER_PHP') or define('YAC_SERIALIZER_PHP', 0);

// Yac 选择的序列化类型
defined('YAC_SERIALIZER') or define('YAC_SERIALIZER', 0);