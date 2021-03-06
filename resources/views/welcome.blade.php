@extends('layouts.admin')

@section('content')
    <header>
        <h4>
            Chat
        </h4>
        <div class="widget-controls">
            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </header>
    <div class="body">
        <div id="chat" class="chat">
            <div id="chat-messages" class="chat-messages">
                <div class="chat-message">
                    <div class="sender pull-left">
                        <div class="icon">
                            <img src="img/2.jpg" class="img-circle" alt="">
                        </div>
                        <div class="time">
                            4 min
                        </div>
                    </div>
                    <div class="chat-message-body">
                        <span class="arrow"></span>
                        <div class="sender"><a href="#">Tikhon Laninga</a></div>
                        <div class="text">
                            Hey Sam, how is it going? But I must explain to you how all this mistaken
                            idea of denouncing of a pleasure and praising pain was born
                        </div>
                    </div>
                </div>
                <div class="chat-message">
                    <div class="sender pull-right">
                        <div class="icon">
                            <img src="img/1.jpg" class="img-circle" alt="">
                        </div>
                        <div class="time">
                            3 min
                        </div>
                    </div>
                    <div class="chat-message-body on-left">
                        <span class="arrow"></span>
                        <div class="sender"><a href="#">Cenhelm Houston</a></div>
                        <div class="text">
                            Pretty good. Doing my homework..  No one rejects, dislikes, or avoids
                            pleasure itself, because it is pleasure, but because
                        </div>
                    </div>
                </div>
                <div class="chat-message">
                    <div class="sender pull-left">
                        <div class="icon">
                            <img src="img/2.jpg" class="img-circle" alt="">
                        </div>
                        <div class="time">
                            2 min
                        </div>
                    </div>
                    <div class="chat-message-body">
                        <span class="arrow"></span>
                        <div class="sender"><a href="#">Tikhon Laninga</a></div>
                        <div class="text">
                            Any chance to go out? To take a trivial example, which of us ever undertakes
                            laborious physical exercise, except to obtain some advantage
                        </div>
                    </div>
                </div>
                <div class="chat-message">
                    <div class="sender pull-right">
                        <div class="icon">
                            <img src="img/1.jpg" class="img-circle" alt="">
                        </div>
                        <div class="time">
                            2 min
                        </div>
                    </div>
                    <div class="chat-message-body on-left">
                        <span class="arrow"></span>
                        <div class="sender"><a href="#">Cenhelm Houston</a></div>
                        <div class="text">
                            .. Maybe 40-50 mins. I don't know exactly. On the other hand, we denounce
                            with righteous indignation and dislike men who are so beguiled
                        </div>
                    </div>
                </div>
                <div class="chat-message">
                    <div class="sender pull-left">
                        <div class="icon">
                            <img src="img/2.jpg" class="img-circle" alt="">
                        </div>
                        <div class="time">
                            1 min
                        </div>
                    </div>
                    <div class="chat-message-body">
                        <span class="arrow"></span>
                        <div class="sender"><a href="#">Tikhon Laninga</a></div>
                        <div class="text">
                            Anyway sounds great! These cases are perfectly simple and easy to
                            distinguish.
                        </div>
                    </div>
                </div>
            </div>
            <footer class="chat-footer row">
                <div class="col-xs-9">
                    <input id="new-message" type="text" class="form-control input-transparent" placeholder="Enter your message..">
                </div>
                <div class="col-xs-3">
                    <button type="button" id="new-message-btn" class="btn btn-transparent btn-block">Send</button>
                </div>
            </footer>
        </div>
    </div>
@endsection
