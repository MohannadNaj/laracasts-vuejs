<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
    <script src="<?=asset('/js/main.js')?>"></script>
    </body>
</html>
