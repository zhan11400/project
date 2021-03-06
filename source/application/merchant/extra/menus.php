<?php
/**
 * 后台菜单配置
 *    'home' => [
 *       'name' => '首页',                // 菜单名称
 *       'icon' => 'icon-home',          // 图标 (class)
 *       'index' => 'index/index',         // 链接
 *     ],
 */
return [
    'index' => [
        'name' => '首页',
        'icon' => 'icon-home',
        'index' => 'index/index',
    ],
    'goods' => [
        'name' => '商品管理',
        'icon' => 'icon-goods',
        'index' => 'goods/index',
        'submenu' => [
            [
                'name' => '商品列表',
                'index' => 'goods/index',
                'uris' => [
                    'goods/index',
                    'goods/add',
                    'goods/edit'
                ],
            ],
            [
                'name' => '商品分类',
                'index' => 'goods.category/index',
                'uris' => [
                    'goods.category/index',
                    'goods.category/add',
                    'goods.category/edit',
                ],
            ],
            [
                'name' => '商品评价',
                'index' => 'goods.comment/index',
            ]
        ],
    ],
    'order' => [
        'name' => '订单管理',
        'icon' => 'icon-order',
        'index' => 'order/delivery_list',
        'submenu' => [
            [
                'name' => '待发货',
                'index' => 'order/delivery_list',
            ],
            [
                'name' => '待收货',
                'index' => 'order/receipt_list',
            ],
            [
                'name' => '待付款',
                'index' => 'order/pay_list',
            ],
            [
                'name' => '已完成',
                'index' => 'order/complete_list',

            ],
            [
                'name' => '已取消',
                'index' => 'order/cancel_list',
            ],
            [
                'name' => '全部订单',
                'index' => 'order/all_list',
            ],
        ]
    ],
    'finance' => [
        'name' => '财务中心',
        'icon' => 'icon-order',
        'is_svg' => true,   // 多色图标
        'index' => 'finance/index',
        'submenu' => [
            [
                'name' => '钱包记录',
                'index' => 'finance/index',
            ],
        /*    [
                'name' => '我的余额',
                'index' => 'finance/balance',
            ],*/
            [
                'name' => '提现记录',
                'index' => 'finance/apply_log',
            ],
           ]
    ],
    'plugins' => [
        'name' => '应用中心',
        'icon' => 'icon-application',
        'is_svg' => true,   // 多色图标
        'index' => 'plugins/index',
        'submenu' => [
            [
                'name' => '商家动态',
                'index' => 'plugins.dynamic/index',
                'uris' => [
                    'plugins.dynamic/index',
                    'plugins.delivery/add',
                    'plugins.delivery/edit',
                ],
            ],
            ]
    ],
    'setting' => [
        'name' => '设置',
        'icon' => 'icon-setting',
        'index' => 'setting.delivery/index',
        'submenu' => [
            [
                'name' => '配送设置',
                'index' => 'setting.delivery/index',
                'uris' => [
                    'setting.delivery/index',
                    'setting.delivery/add',
                    'setting.delivery/edit',
                ],
            ],
            [
                'name' => '支付宝配置',
                'index' => 'setting.alipay/index',
                'uris' => [
                    'setting.delivery/index',
                    'setting.delivery/add',
                    'setting.delivery/edit',
                ],
            ]
        ],
    ],
];
