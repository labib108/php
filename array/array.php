<?php
    $friend = [
        "versity" => [
            'college' => [
                'school' => ['israfil','imon','sajol','jibon','saiful'],
                'non-school' => ['sakib','himon','jibon','sorif','simul']
            ],
            'non-college' => [
                'school' => ['israfil','imon','sajol','jibon','saiful'],
                'non-school' => ['sakib','himon','jibon','sorif','simul']
            ]
        ],
        'non-versity' => [
            'college' => [
                'school' => ['israfil','imon','sajol','jibon','saiful'],
                'non-school' => ['sakib','himon','jibon','sorif','simul']
            ]
        ]
    ];
    //print_r($friend);
    echo $friend['versity']['non-college']['school'][3] . "<br>";

?>