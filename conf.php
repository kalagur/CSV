<?php

return [
    1 => 'streetName',
    2 => null,
    3 => function ($value, $rowData, $rowIndex, $faker) {
        if ($value == 23) {
            return $rowIndex + 5;
        }
        if ($rowData[0] == 101) {
            return 0;
        }
        return $faker->randomDigit;
    },
];
