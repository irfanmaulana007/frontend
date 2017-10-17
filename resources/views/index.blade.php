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
                        <list-learn
                          v-for="todo in todos"
                          v-bind:todo="todo">
                        </list-learn>
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
                <div id="card">
                    <div class="col-sm-3" v-for="card in carditem">
                        <card 
                            v-bind:todo="card"
                            v-bind:class="card.class">
                        </card>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="row">
                <div class="col-xs-6">
                    <div id="story-board">
                        <story v-for="story in storyitem"
                            v-bind:todo="story">
                        </story>
                    </div>
                </div>
                <div class="col-xs-6">
                    
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

            Vue.component('list-learn', {
              props: ['todo'],
              template: '<li>@{{ todo.text }}</li>'
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

            Vue.component('card', {
                props: ['todo'],
                template: '<div class="card hover fadeInUp animated"><div class="text-overlay"><h3>@{{ todo.text }}</h3></div></div>'
            })
            var cards = new Vue({
              el: '#card',
              data: {
                carditem: [
                  { class: 'card1', text: 'satu' },
                  { class: 'card2', text: 'dua' },
                  { class: 'card3', text: 'tiga' },
                  { class: 'card4', text: 'empat' }
                ]
              }
            })

            Vue.component('story', {
              props: ['todo'],
              template: '<div class="story"><div class="row"><div class="header"><div class="col-xs-2"><div class="img"><img src=""></div></div><div class="col-xs-8"><div class="username">@{{ todo.username }}</div> <div class="datetime">@{{ todo.datetime }}</div></div><div class="col-xs-2"><div class="option pull-right"><i class="fa fa-ellipsis-h"></i></div></div></div></div><div class="row"><div class="message"><div class="col-xs-12">@{{ todo.message }}</div></div></div><hr><div class="row"><div class="col-xs-12"><div class="action"><div class="component pull-left"><i class="fa fa-thumbs-o-up"></i> Like</div><div class="component pull-left"><i class="fa fa-comment-o"></i> Comment</div></div></div></div></div>'
            })
            var story = new Vue({
              el: '#story-board',
              data: {
                storyitem: [
                    @foreach($story as $stories)
                        { img: '1', username: '{{ $stories->username }}', datetime: '{{ $stories->datetime }}', message: '{{ $stories->message }}' },
                    @endforeach
                ]
              }
            })
        </script>

    </body>
</html>
