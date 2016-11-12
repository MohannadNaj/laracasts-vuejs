<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <title>Laracasts - Laravel With VueJS</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-sm-push-2">
                    <tasks></tasks>
                </div>
            </div>
        </div>
    <template id="tasks-template">
        <h1>My Tasks</h1>
        <ul class="list-group">
            <li class="list-group-item" v-for="task in list">
                @{{ task.body }}

                <button @click="remove(task)" type="button" class="btn btn-danger btn-xs pull-right">X</button>
            </li>
        </ul>
    </template>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.28/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.3/vue-resource.js"></script>
    <script src="<?=asset('/js/main.js')?>"></script>
    </body>
</html>
