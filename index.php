<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Titolo -->
                    <h1 class="text-center">Lista di cose da fare</h1>
                </div>
                <div class="col-12">
                    <!-- Sezione input e pulsante -->
                    <div class="d-flex justify-content-center">
                        <input class="align-middle form-control form-control-sm" name="task" type="text" placeholder="Aggiungi alla lista" v-model="newTask" @keyup.enter="addTask">
                        <button type="submit" class="btn btn-primary" @click="addTask">Aggiungi</button>
                    </div>
                </div>
                <div class="col-12">
                    <ul>
                        <li v-for="(todo, index) in todoList" :key="index" :class="todo.done ? 'text-decoration-line-through' : ''" class="my-2">
                            <div class="d-flex justify-content-between">
                                <span>
                                    {{ todo.text }}
                                </span>
                                <div class="buttons">
                                    <button type="button" class="btn btn-outline-danger" @click="">
                                        <i class="fas fa-x"></i>
                                    </button>
                                </div>
                            </div>                    
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js" type="text/javascript"></script>
</body>
</html>