<?php
header('Content-Type: application/json');

// Масив новин (можна замінити на запит до бази даних)
$news = [
    [
        "title" => "Нова колекція квітів",
        "date" => date('d.m.Y', strtotime("-1 day")),
        "content" => "Ми поповнили колекцію екзотичних рослин.",
    ],
    [
        "title" => "Відкриття нового відділу",
        "date" => date('d.m.Y', strtotime("-5 days")),
        "content" => "Додали новий відділ, присвячений пустельним рослинам.",
    ],
    [
        "title" => "Осінній фестиваль",
        "date" => date('d.m.Y', strtotime("-10 days")),
        "content" => "Запрошуємо всіх на осінній фестиваль.",
    ]
];

// Відповідь у форматі JSON
echo json_encode($news);
?>
