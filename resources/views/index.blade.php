<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>

        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/animate.css/animate.min.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

    </head>
    <body>
        <div class="container">
            <br><br>
            <div class="fadeIn animated">
                <div class="row">
                    <h1 class="pull-left"><b>Irfan Maulana</b></h1>
                    <h2 id="date" class="pull-right"></h2>
                </div>
                <div class="row">
                    <div id="welcome">
                     @{{ message }}
                    </div>
                    <div id="on-learning">
                      <ol>
                        <li v-for="todo in todos">
                          @{{ todo.text }}
                        </li>
                      </ol>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-sm-3">
                    <div class="card card1 hover fadeInUp animated">
                        <div class="text-overlay">
                            <h3>Detail..</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card card2 hover fadeInUp animated">
                        <div class="text-overlay">
                            <h3>Click me!!</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card card3 hover fadeInUp animated">
                        <div class="text-overlay">
                            <h3>More..</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <todo-card></todo-card>
                </div>
            </div>

            <footer>
                <h5 class="text-center">Designed and Developed by <a href="https://www.instagram.com/irfanmaulana007/" target="_blank">Irfan</a></h5>
            </footer>
        </div>

        <script>
            $(document).ready(function(){
                date = moment().format('dddd, Do MMMM YYYY');
                moment().utcOffset(7);
                $("#date").html(date);
            });

            var app = new Vue({
              el: '#welcome',
              data: {
                message: 'Now i learn something new on frontend development, such as:'
              }
            })

            var learn = new Vue({
              el: '#on-learning',
              data: {
                todos: [
                  { text: 'Frontend' },
                  { text: 'Vue' },
                  { text: 'Bower' },
                  { text: 'Something cool' },
                  { text: 'Git' },
                  { text: 'Laravel' }
                ]
              }
            })

            Vue.component('todo-card', {
                props: ['todo'],
                template: '<div class="card card4 hover fadeInUp animated"><div class="text-overlay"><h3>Well</h3></div></div>'
            })
        </script>
    </body>
</html>
