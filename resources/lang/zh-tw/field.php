<?php

return [
    'name' => [
        'name' => '名稱',
    'instructions' => '請為此控制台指定一個簡短的代表名稱。',
    ],
    'title' => [
        'name' => '標題',
    'instructions' => '請為此小工具指定一個簡短的標題。',
    ],
    'slug' => [
        'name' => '縮略',
    'instructions' => '此縮略名 slug 將用於控制台的網址。',
    ],
    'description' => [
        'name' => '說明',
    'instructions' => [
        'dashboards' => '簡述這個控制台。',
    'widgets' => '簡述這個小工具。',
    ],
    ],
    'layout' => [
        'name' => '佈局',
    'instructions' => '此佈局將決定您要如何組織控制台中的小工具。',
    'option' => [
        '24' => '單欄',
    '12-12' => '雙欄',
    '16-8' => '雙欄（右側欄）',
    '8-16' => '雙欄（左側欄）',
    '8-8-8' => '三欄',
    '6-12-6' => '三欄（中央）',
    '12-6-6' => '三欄（右側欄）',
    '6-6-12' => '三欄（左側欄）',
    '6-6-6-6' => '四欄',
    ],
    ],
    'dashboard' => [
        'name' => '控制台',
    'instructions' => '請選擇此小工具所屬的控制台。',
    ],
    'extension' => [
        'name' => '擴充',
    ],
    'pinned' => [
        'name' => '固定',
    'label' => '將此小工具固定在最上方？',
    'instructions' => '固定的小工具是整個寬度並會推到控制台的最上方。',
    ],
    'allowed_roles' => [
        'name' => '允許使用的角色',
    'instructions' => [
        'dashboards' => '請指定有權限存取此控制台的用戶角色。',
    'widgets' => '請指定有權限看到此小工具的用戶角色。',
    ],
    'warning' => [
        'dashboards' => '如果沒有指定角色，則可以存取此附加元件的所有人都可以存取此控制台。',
    'widgets' => '如果沒有指定角色，則可以存取此附加元件的所有人都可以存取此小工具。',
    ],
    ],
];