<?php

$dateFormat = [
    'yyyy-mm-dd' => 'Y-m-d',
    'dd-mm-yyyy' => 'd-m-Y',
    'mm-dd-yyyy' => 'm-d-Y',
    'dd MM yyyy' => 'd F Y',
    'dd M yyyy' => 'd M Y',
    'd M yyyy' => 'j M Y'
];

$timeFormat = [
    'hh:ii' => 'H:i',
    'HH:ii P' => 'h:i A'
];

$datetimeFormat = [];

foreach ($dateFormat as $kd => $vd) {
    foreach ($timeFormat as $kt => $vt) {
        $datetimeFormat[$kd . ' ' . $kt] = $vd . ' ' . $vt;
    }
}

return [
    'accommodation_table' => 'accommodations',
    'event_table' => 'events',
    'participant_table' => 'participants',
    'price_table' => 'prices',

    'schedule_table' => 'schedules',

    'session_table' => 'sessions',
    'session_parallel' => 'session_parallels',
    'session_participant_table' => 'session_participants',
    'session_speaker_table' => 'session_speakers',
    'session_type_table' => 'session_types',
    
    'speaker_table' => 'speakers',

    'question_table' => 'questions',

    'format' => [
        'date' => $dateFormat,
        'time' => $timeFormat,
        'datetime' => $datetimeFormat
    ]
];
