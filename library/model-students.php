<?php

function studentsFatchAll()
{
  return  [
        [
            'id' => 33222,
            'ime' => 'Zorica',
            'prezime' => 'Mijatovic',
            'pol' => 'Z'
        ],
        [
            'id' => 33223,
            'ime' => 'Marija',
            'prezime' => 'Markovic',
            'pol' => 'Z'
        ],
        [
            'id' => 33224,
            'ime' => 'Petar',
            'prezime' => 'Petrovic',
            'pol' => 'M'
        ],
    ];
}

function studentFetchOneById($studentid)
{
    $students = studentsFatchAll();

    $student = null;

    foreach ($students as $testStudent) {
        if ($testStudent['id'] == $studentid) {
            $student = $testStudent;
        }
    }

    return $student;
}
