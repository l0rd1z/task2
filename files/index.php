<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'] ?? 'Нет комментария';
    echo "Ваш комментарий: " . htmlspecialchars($comment);
} else {
    echo "Отправьте POST-запрос с комментарием!";
}
?>