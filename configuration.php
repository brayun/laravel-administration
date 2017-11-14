<?php
/*
 *          ┌─┐       ┌─┐
 *       ┌──┘ ┴───────┘ ┴──┐
 *       │                 │
 *       │       ───       │
 *       │  ─┬┘       └┬─  │
 *       │                 │
 *       │       ─┴─       │
 *       └───┐         ┌───┘
 *           │         └──────────────┐
 *           │                        ├─┐
 *           │                        ┌─┘
 *           │                        │
 *           └─┐  ┐  ┌───────┬──┐  ┌──┘
 *             │ ─┤ ─┤       │ ─┤ ─┤
 *             └──┴──┘       └──┴──┘
 *  @Author Ethan <ethan@brayun.com>
 */


return [
    'name' => 'administration',
    'menus' => [
        'global' => [
            'text' => '设置',
            'path' => '/',
            'icon' => 'settings',
            'children' => [
                'global_settings' => [
                    'icon' => 'ios-cog',
                    'text' => '全局设置',
                    'children' => [
                        'text' => '参数设置',
                        'path' => '/configurations'
                    ]
                ],
                'system_plugins' => [
                    'icon' => 'aperture',
                    'text' => '系统插件',
                    'children' => [
                        [
                            'text' => '菜单管理',
                            'path' => '/menu'
                        ],
                        [
                            'text' => '邮件设置',
                            'path' => '/mail'
                        ]
                    ]
                ],
                'application' => [
                    'icon' => 'android-apps',
                    'text' => '应用管理',
                    'children' => [
                        [
                            'text' => '插件配置',
                            'path' => '/addon'
                        ],
                        [
                            'text' => '模块配置',
                            'path' => '/modules'
                        ],
                        [
                            'text' => '扩展配置',
                            'path' => '/extension'
                        ]
                    ]
                ]
            ]
        ]
    ]
];