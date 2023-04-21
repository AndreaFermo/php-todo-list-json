<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body class="bg-warning">
    <div id="app" class="container w-25 mt-5">
        <h1 class="text-center">TO DO LIST</h1>
        <hr class="border border-danger border-2 opacity-50">
       <div class="container mt-5">
            <ul class="list-group">
                <li class="list-group-item d-flex align-items-center" v-for="(todoItem, index) in todoList">
                        <div class="col-4 fw-bold" :class="todoItem.done?'text-decoration-line-through':''" @click="doneNotDone(index)">{{todoItem.text.toUpperCase()}} </div>
                        <div class="col-4" v-if="todoItem.done">Completato</div>
                        <div class="col-4" v-else>Non Completato</div>
                        <div class="col-4 d-flex justify-content-end">
                             <button  @click="delate(index)" class="btn btn-danger">delate</button>
                        </div>                       
                </li>
               
            </ul>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="button-addon2" v-model="newItem">
                <button class="btn btn-outline-primary" type="button" id="button-addon2" @click="addItem">Aggiungi</button>
            </div>

        </div>

    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='main.js'></script>
</body>