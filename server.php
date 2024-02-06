<?php 
    // Recupero il contenuto del file json 
    $todo_list = file_get_contents('todolist.json');

    // Utilizzo decode per trasformare la stringa in array associativo
    $list = json_decode($todo_list, true);

    // if (isset($_POST['todoDone'])) {


    // };
    
    // Verifico se ho inviato tramite chiamata POST l'elemento nuovo da salvare nella lista
    if (isset($_POST['todoItem'])) {
        
        // Alla variabile newTask assegno i valori text e done 
        $newTask = [
            // Text è estratto dalla funzione addTask()
            "text" => $_POST['todoItem'],
            // Done impostato a false per non far risultare la task già svolta
            "done" => false
        ];
        
        // Aggiungo l'elemento nella lista 
        array_push($list, $newTask);
        
        // Salvo il contenuto nel file todolist.json 
        file_put_contents('todolist.json', json_encode($list));
    };
    
    // Utilizzo header per dichiarare che questo file è un json
    header('Content-type: application/json');
    
    // Restituisco un array di oggetti
    echo json_encode($list);
?>