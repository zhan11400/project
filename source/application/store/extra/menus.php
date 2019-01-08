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
    'shop' => [
        'name' => '店铺管理',
        'icon' => 'icon-shop',
        'index' => 'shop/index',
        'submenu' => [
            [
                'name' => '店铺列表',
                'index' => 'shop/index',
                'uris' => [
                    'shop/index',
                    'shop/add',
                    'shop/edit'
                ],
            ],
            [
                'name' => '新店列表',
                'index' => 'shop/new_shop',
            ],
            [
                'name' => '店铺分类',
                'index' => 'shop.category/index',
                'uris' => [
                    'shop.category/index',
                    'shop.category/add',
                    'shop.category/edit',
                ],
            ]
        ],
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
    'user' => [
        'name' => '用户管理',
        'icon' => 'icon-user',
        'index' => 'user/index',
    ],
//    'marketing' => [
//        'name' => '营销管理',
//        'icon' => 'icon-marketing',
//        'index' => 'marketing/index',
//        'submenu' => [],
//    ],
    'wxapp' => [
        'name' => '小程序',
        'icon' => 'icon-wxapp',
        'color' => '#36b313',
        'index' => 'wxapp/setting',
        'submenu' => [
            [
                'name' => '小程序设置',
                'index' => 'wxapp/setting',
            ],
            [
                'name' => '页面管理',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '首页设计',
                        'index' => 'wxapp.page/home'
                    ],
                    [
                        'name' => '首页广告',
                        'index' => 'wxapp.page/ad'
                    ],
                    [
                        'name' => '页面链接',
                        'index' => 'wxapp.page/links'
                    ],
                ]
            ],
            [
                'name' => '帮助中心',
                'index' => 'wxapp.help/index',
                'urls' => [
                    'wxapp.help/index',
                    'wxapp.help/add',
                    'wxapp.help/edit',
                    'wxapp.help/delete'
                ]
            ],
            [
                'name' => '导航设置',
                'index' => 'wxapp/tabbar'
            ],

        ],
    ],
    'finance' => [
        'name' => '财务中心',
        'icon' => 'icon-order',
        'is_svg' => true,   // 多色图标
        'index' => 'finance/index',
        'submenu' => [
            [
                'name' => '提现记录',
                'index' => 'finance/index',
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
                'name' => '拼团管理',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '商品管理',
                        'index' => 'plugins.pt.goods/index'
                    ],
                    [
                        'name' => '商品分类',
                        'index' => 'plugins.pt.category/index'
                    ],
                    [
                        'name' => '订单管理',
                        'index' => 'plugins.pt.order/all_list'
                    ],
                    /*[
                        'name' => '商品分类',
                        'index' => 'setting.cache/clear'
                    ],

                    [
                        'name' => '售后订单',
                        'index' => 'setting.cache/clear'
                    ],*/
                ]
            ],
            [
            'name' => '入驻申请',
            'active' => false,
            'submenu' => [
                [
                'name' => '微商城入驻',
                'index' => 'plugins.user_apply/index',
             ],
                [
                    'name' => '店铺入驻',
                    'index' => 'plugins.user_apply/shop_apply',
                ],
                [
                    'name' => '广告入驻',
                    'index' => 'plugins.user_apply/ad_apply',
                ],
            ]
        ],
            [
                'name' => '微商城',
                'active' => false,
                'submenu' => [
                    [
                        'name' => '轮播',
                        'index' => 'plugins.micromall/ad',
                    ],
                    [
                        'name' => '四宫格',
                        'index' => 'plugins.micromall/banner',
                    ],
                    [
                        'name' => '广告图',
                        'index' => 'plugins.micromall/pic',
                    ],
                    [
                        'name' => '文章',
                        'index' => 'plugins.micromall/article',
                    ]
                ]
            ]
        ]
    ],
    'setting' => [
        'name' => '设置',
        'icon' => 'icon-setting',
        'index' => 'setting/store',
        'submenu' => [
            [
                'name' => '商城设置',
                'index' => 'setting/store',
            ],
            [
                'name' => '交易设置',
                'index' => 'setting/trade',
            ],
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
                'name' => '短信通知',
                'index' => 'setting/sms'
            ],
            [
                'name' => '上传设置',
                'index' => 'setting/storage',
            ],
            [
                'name' => '其他',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '清理缓存',
                        'index' => 'setting.cache/clear'
                    ],
                    [
                        'name' => '环境检测',
                        'index' => 'setting.science/index'
                    ],
                ]
            ]
        ],
    ],
];
