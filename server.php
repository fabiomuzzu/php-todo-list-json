<?php 
    // Recupero il contenuto del file json 
    $todo_list = file_get_contents('todolist.json');

    // Utilizzo decode per trasformare la stringa in array associativo
    $list = json_decode($todo_list, true);

    if (isset($_POST['todoItem'])) {
        $newTask = [
            "text" => $_POST['todoItem'],
            "done" => false
        ];

        array_push($list, $newTask);

        file_put_contents('todolist.json', json_encode($list));
    }


    // Utilizzo header per dichiarare che questo file è un json
    header('Content-type: application/json');

    // Restituisco un array di oggetti
    echo json_encode($list);

?>