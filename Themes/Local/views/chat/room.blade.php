@extends('layouts.room')


@section('title')
    | @parent
@stop

@section('meta')
    <meta name="title" content="" />
    <meta name="description" content="" />
@stop

@section('content')
<style>
    .pad0 {
        padding:0;
    }
    .panel{
        margin-bottom: 0px;
    }
    .chat-window {
        z-index: 1000;
        bottom:20px;
        position:fixed;
        float:right;
        /* margin-left:10px; */
    }
    .chat-window > div > .panel{
        border-radius: 5px 5px 0 0;
    }
    .icon_minim{
        padding:2px 10px;
    }
    .msg_container_base{
        background: #e5e5e5;
        margin: 0;
        padding: 0 10px 10px;
        /* max-height:300px;
        overflow-x:hidden; */
    }
    .top-bar {
        background: #666;
        color: white;
        padding: 10px;
        position: relative;
        overflow: hidden;
    }
    .msg_receive{
        padding-left:0;
        margin-left:0;
    }
    .msg_sent{
        padding-bottom:20px !important;
        margin-right:0;
    }
    .messages {
        background: white;
        padding: 10px;
        border-radius: 2px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        max-width:100%;
    }
    .messages > p {
        font-size: 13px;
        margin: 0 0 0.2rem 0;
    }
    .messages > time {
        font-size: 11px;
        color: #ccc;
    }
    .msg_container {
        padding: 10px;
        overflow: hidden;
        display: flex;
    }
    img {
        display: block;
        width: 100%;
    }
    .avatar {
        position: relative;
    }
    .base_receive > .avatar:after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 0;
        border: 5px solid #FFF;
        border-left-color: rgba(0, 0, 0, 0);
        border-bottom-color: rgba(0, 0, 0, 0);
    }

    .base_sent {
        justify-content: flex-end;
        align-items: flex-end;
    }
    .base_sent > .avatar:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 0;
        border: 5px solid white;
        border-right-color: transparent;
        border-top-color: transparent;
        box-shadow: 1px 1px 2px rgba(black, 0.2); // not quite perfect but close
    }

    .msg_sent > time{
        float: right;
    }



    .msg_container_base::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    .msg_container_base::-webkit-scrollbar
    {
        width: 12px;
        background-color: #F5F5F5;
    }

    .msg_container_base::-webkit-scrollbar-thumb
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
    }

    .btn-group.dropup {
        position:fixed;
        left:0px;
        bottom:0;
    }
</style>


<div id="app">
    <div class="container-fluid">
        <div class="row chat-window col-xs-12" id="chat_window_1">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <!--
                    <div class="panel-heading top-bar">
                        <div class="col-md-8 col-xs-8">
                            <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Open Chat</h3>
                        </div>
                        <div class="col-md-4 col-xs-4" style="text-align: right;">
                            <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                            <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                        </div>
                    </div>
                    -->
                    <div class="panel-body msg_container_base" id="messagesContainer">

                        <message v-for="(message, index) in messages"
                                 v-bind:username="message.username"
                                 v-bind:text="message.text"
                        ></message>

                        <?php /* For each message */ ?>

                        <?php /*

                             <div class="row msg_container base_receive">
                                <div class="col-md-2 col-xs-2 avatar">
                                    <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                </div>
                                <div class="col-xs-10 col-md-10">
                                    <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh?
                                            tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                            </div>


                            <div class="row msg_container base_sent">
                                <div class="col-md-10 col-xs-10">
                                    <div class="messages msg_sent">
                                        <p>that mongodb thing looks good, huh?
                                            tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-2 avatar">
                                    <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                </div>
                            </div>
                            */ ?>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">

                            <input id="btn-input"
                                   type="text"
                                   class="form-control input-sm chat_input"
                                   placeholder="Write your message here..."
                                   name="message"
                                   v-on:keyup.enter="sendMessage"
                                   v-model="message"
                            />
                            <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm" id="btn-chat" v-on:click="sendMessage">Send</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
        <div class="btn-group dropup">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-cog"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
                <li class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
            </ul>
        </div>
        -->
    </div>
</div>
@stop


@section('scripts')

    <template id="message-template">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row msg_container base_receive">
                <div class="col-md-1 col-xs-2 avatar pad0">
                    <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg"
                         class=" img-responsive ">
                </div>
                <div class="col-xs-10 col-md-11 pad0">
                    <div class="messages msg_receive">
                        <p> @{{ text }}</p>
                        <time datetime="2009-11-13T20:00">@{{ username }} • @{{ since }}</time>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <script type="text/javascript">

        var ws = new WebSocket('{!! $wsUrl !!}');

        Vue.component('message', {
            template: '#message-template',

            props: ['text', 'username', 'since'],

            /*
             data: function () {
             return {
             text: '',
             username: 'systembot',
             since: '0 min'
             }
             }
             */
        });


        var vue = new Vue({
            el: "#app",
            data: {
                message: '',
                lastMessage: '',
                messages: []
            },
            methods: {
                receiveMessage: function (message) {
                    this.messages.push(message);
                },

                sendMessage: function (message) {

                    // display message to chat room view
                    // this.messages.push({text: this.message, id: "not-set", username: "not-set"});

                    // process ajax request
                    //this.$http.post('http://local:8282', message, function (data) {
                    // this.email = data.email;
                    // });

                    // POST /someUrl
                    // this.$http.post('http://local:8282', {message: this.message}, {method: 'POST'}).then(function (response) {
                    // TODO check

                    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#_token').getAttribute('value');
                    // console.log('{!! $storeMsgUrl !!}');

                    this.$http.post('/en/chat/store', {text: this.message, username: 'test'}).then(function (response) {
                        // console.log(response);
                        // console.log('here response success');

                    }, function (response) {
                        // console.log(response);
                        // console.log('here response fails');


                    });

                    // console.log('{!! $storeMsgUrl !!}');
                    this.lastMessage = this.message;
                    this.message = '';
                }
            }
        });

        // start chat
        // vue.chat();

        ws.onmessage = function (event) {

            console.log(event.data);

            // wird ///////////////////////////////////
            // response has '
            var message = event.data.replace("'", "");
            message = message.replace("'", "");
            message = JSON.parse(message);
            ///////////////////////////////////////////

            console.log("message", message.new_val);
            vue.receiveMessage(message.new_val);

        };

    </script>
@stop
