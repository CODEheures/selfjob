@extends('layout')
@section('goto')
    <div class="goto"><a href="#email3" class="btn btn-danger">Inscription &#8595;</a></div>
@endsection
@section('content')
        <p id="share" class="social"></p>
        <div class="fake-h1">
            <h1>Ressource humaines</h1>
            <img src="{{ asset('/img/rature.png') }}"/>
        </div>
        <h1 class="cursive">Recrutement humain</h1>
        <h2 class="sub">Le recrutement sans CV. </h2>
        <p class="hashtags">#savoirFaire #savoirEtre</p>
        <div class="why">
            <div class="row">
                <div class="employeur col-sm-6" data-target="#pop_up_employer">
                    <div class="card card1">
                        <h4>Employeurs: un candidat qui me ressemble</h4>
                        <ul>
                            <li>Je dépose une annonce</li>
                            <li>Je crée un questionnaire à mon image</li>
                            <li>Je reçois des dixaines de réponses déjà triées</li>
                            <li>J'invite les meilleures réponses à un entretien</li>
                        </ul>
                        <button class="btn btn-info btn-sm center-block">Démonstration</button>
                    </div>
                </div>
                <div class="candidat col-sm-6" data-target="#pop_up_candidate">
                    <div class="card card2">
                        <h4>Candidats: une chance égale pour tous</h4>
                        <ul>
                            <li>Je selectionne une annonces qui me correspond</li>
                            <li><span class="no">J'envoi mon CV</span></li>
                            <li>Je répond au questionnaire</li>
                            <li>Je reçois une demande de RDV si je suis selectionné</li>
                        </ul>
                        <button class="btn btn-info btn-sm center-block">Démonstration</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="pop_up_employer"
                         class="style-switch collapse col-xs-10 col-xs-pull-1 col-sm-8 col-sm-pull-2 col-md-6 col-md-pull-3">
                        <section>
                            <div class="row">
                                <h3 class="col-xs-9">Employeurs</h3>
                                <a href="#" type="button" data-target="#pop_up_employer" id="btn-style-switch-button2"
                                   class="btn btn-lg style-switch-button2 pull-right">&times;</a>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <div id="yt0"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="mailing-list">
                            <h3 class="mailing-list-heading">Inscription </h3>
                            <div class="row">
                                <form class="form-inline">
                                    <input type="hidden" name="type" value="1">
                                    <div class="form-group">
                                        <label for="email1" class="sr-only"></label>
                                        <input type="email" placeholder="jane.doe@example.com" id="email1"
                                               class="form-control transparent" name="email">
                                    </div>
                                    <button id="subscribe_employer" class="btn btn-danger">S'inscrire</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="pop_up_candidate"
                         class="style-switch collapse col-xs-10 col-xs-pull-1 col-sm-8 col-sm-pull-2 col-md-6 col-md-pull-3">
                        <section>
                            <div class="row">
                                <h3 class="col-xs-9">Candidats</h3>
                                <a href="#" type="button" data-target="#pop_up_candidate" id="btn-style-switch-button3"
                                   class="btn btn-lg style-switch-button2 pull-right">&times;</a>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <div id="yt1"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="mailing-list">
                            <h3 class="mailing-list-heading">Inscription </h3>
                            <div class="row">
                                <form class="form-inline">
                                    <input type="hidden" name="type" value="0">
                                    <div class="form-group">
                                        <label for="email2" class="sr-only"></label>
                                        <input type="email" placeholder="jane.doe@example.com" id="email2"
                                               class="form-control transparent" name="email">
                                    </div>
                                    <button id="subscribe_candidate" class="btn btn-danger">S'inscrire</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="pop_up_subscribe"
                         class="style-switch collapse col-xs-10 col-xs-pull-1 col-sm-8 col-sm-pull-2 col-md-6 col-md-pull-3">
                        <section>
                            <div class="row">
                                <h3 class="col-xs-9">Merci pour votre inscription!!</h3>
                                <a href="#" type="button" id="btn-style-switch-button4"
                                   class="btn btn-lg style-switch-button2 pull-right">&times;</a>
                             </div>
                            <div class="row">
                                <div class="col-xs-6 col-xs-offset-3">
                                    <img src="{{ asset('/img/man.png') }}" alt="geek man" class="img-responsive">
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12">
                                    <h3 class="alert alert-info">Notre application est en cours de développement et sera
                                        bientôt disponible
                                        Nous vous enverrons un mail dès que celle-ci sera en ligne</h3>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="pop_up_incorrect_mail"
                         class="style-switch collapse col-xs-10 col-xs-pull-1 col-sm-8 col-sm-pull-2 col-md-6 col-md-pull-3">
                        <section>
                            <div class="row">
                                <h3 class="col-xs-9">Oupsss petit problème!!</h3>
                                <a href="#" type="button" id="btn-style-switch-button5"
                                   class="btn btn-lg style-switch-button2 pull-right">&times;</a>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Votre email ne semble pas valide. Pouvez-vous le verifier et réessayer?
                                        Si cela persiste vous pouvez contacter l'assistance sur le site CODEheures
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="mailing-list">
            <h3 class="mailing-list-heading">Inscription </h3>
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-inline">
                        <div class="form-group">
                            <select class="form-control transparent" name="type">
                                <option value="0">Je suis candidat</option>
                                <option value="1">Je suis employeur</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email3" class="sr-only"></label>
                            <input type="email" placeholder="jane.doe@example.com" id="email3"
                                   class="form-control transparent" name="email">
                        </div>
                        <button id="subscribe_main" class="btn btn-danger">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
@section('script')
<script>
    //JS SOCIAL
    jsSocials.shares.facebook.shareUrl = "https://www.facebook.com/sharer/sharer.php?u={url}";

    jsSocials.shares.twitter.hashtags = ['savoirFaire', 'savoirEtre'];

    var parser = window.location.href;
    var myurl = "http://self-job.tk";
    var mytxt = "Self Job, le recrutement sans CV";
    if (parser.indexOf('?counter=true') != -1) {
        $("#share").jsSocials({
            url: myurl,
            text: mytxt,
            showLabel: true,
            showCount: true,
            shares: ["twitter", "facebook", "googleplus", "linkedin", "email"],
            shareIn: "popup"
        });
    } else {
        $("#share").jsSocials({
            url: myurl,
            text: mytxt,
            showLabel: false,
            showCount: false,
            shares: ["twitter", "facebook", "googleplus", "linkedin", "email"],
            shareIn: "popup"
        });
    }

    /********************YOUTUBE *************************************/
            // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var yt;
    function onYouTubeIframeAPIReady() {

    }

    function onPlayerReady(event) {
        event.target.setVolume(5);
    }

    $(function () {

        /***************** CSS ************************/
        function footer() {
            var $footer = $('.footer');
            var $fakeh1 = $('.fake-h1');
            var $why = $('.why');
            $footer.css({'top': 0});
            $fakeh1.css({'margin-top': 0, 'margin-bottom': 0});
            $why.css({'margin-top': 0});
            var $diff = $(document).height() - ($footer.offset().top + $footer.height());
            if ($diff > 10) {
                $fakeh1.css({'margin-top': (($diff - 10) / 6) + 'px', 'margin-bottom': (($diff - 10) / 6) + 'px'});
                $why.css({'margin-top': (($diff - 10) / 6) + 'px'});
                $footer.css({'top': ($diff / 2 - 10) + 'px'});
            }
        }

        function ajustHeight() {
            var $card1 = $('.card1');
            var $card2 = $('.card2');
            $card1.css('height', '');
            $card2.css('height', '');
            if ($card1.parent().css('float') == 'left') {
                if ($card1.height() > $card2.height()) {
                    $card2.height($card1.height());
                } else if ($card1.height() < $card2.height()) {
                    $card1.height($card2.height());
                }
            }
        }

        ajustHeight();
        footer();

        $(window).resize(function () {
            ajustHeight();
            footer();
        });


        /*************** POP-UP *******************/
        function pop_up($id) {
            var $div = $($id);
            if ($div.css('display') == 'none') {
                if ($id == '#pop_up_employer') {
                    yt = new YT.Player('yt0', {
                        height: '315',
                        width: '560',
                        videoId: '2b8BtUhbDv8',
                        playerVars: {'rel': 0, 'showinfo': 0},
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
                    $.ajax({
                        url: "/see_pop_employer"
                    });
                }
                if ($id == '#pop_up_candidate') {
                    yt = new YT.Player('yt1', {
                        height: '315',
                        width: '560',
                        videoId: 'R4QBhmMCWFY',
                        playerVars: {'rel': 0, 'showinfo': 0},
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
                    $.ajax({
                        url: "/see_pop_candidate"
                    })
                }
                $div.slideDown();
            } else {
                $div.slideUp();
                if (yt) {
                    yt.stopVideo();
                    yt.destroy();
                }
            }

        }

        $('[data-target="#pop_up_employer"]').click(function (e) {
            var $id = $(this).data('target');
            pop_up($id);
        });

        $('[data-target="#pop_up_candidate"]').click(function (e) {
            var $id = $(this).data('target');
            pop_up($id);
        });

        $('#subscribe_main').click(function (e) {
            e.preventDefault();
            var $form = $(this).parent()[0];
            var $email = $form.email.value;
            var $type = $form.type.value;
            $.ajax({
                url: encodeURI("/mail_main_page/" + $email + "/" + $type)
            }).done(function (msg) {
                $('#pop_up_subscribe').slideToggle();
            }).fail(function () {
                $('#pop_up_incorrect_mail').slideDown();
            })
        });

        $('#subscribe_employer').click(function (e) {
            e.preventDefault();
            var $form = $(this).parent()[0];
            var $email = $form.email.value;
            $.ajax({
                url: encodeURI("/mail_pop_up_employer/" + $email)
            }).done(function (msg) {
                $('#pop_up_subscribe').slideToggle();
            }).fail(function () {
                $('#pop_up_incorrect_mail').slideDown();
            })
        });

        $('#subscribe_candidate').click(function (e) {
            e.preventDefault();
            var $form = $(this).parent()[0];
            var $email = $form.email.value;
            $.ajax({
                url: encodeURI("mail_pop_up_candidate/" + $email)
            }).done(function (msg) {
                $('#pop_up_subscribe').slideDown();
            }).fail(function () {
                $('#pop_up_incorrect_mail').slideDown();
            })
        });

        $('#btn-style-switch-button4').click(function (e) {
            e.preventDefault();
            $('#pop_up_subscribe').slideUp();
        });

        $('#btn-style-switch-button5').click(function (e) {
            e.preventDefault();
            $('#pop_up_incorrect_mail').slideUp();
        })
    });
</script>
@endsection