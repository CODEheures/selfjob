@extends('layout')
@section('content')
        <p id="share" class="social"></p>
        <div class="fake-h1">
            <h1>Ressource humaines</h1>
            <img src="{{ asset('/img/rature.png') }}"/>
        </div>
        <h1 class="cursive"><a href="{{ route('home') }}">Recrutement humain</a></h1>
        <h2 class="sub">Le recrutement sans CV. </h2>
        <p class="hashtags">#savoirFaire #savoirEtre</p>
        <div class="why">
            <div class="row">
                <div class="employeur col-sm-12">
                    <div class="card card1 mention">
                        <h4>Informations légales</h4>
                        <h5>1. Présentation du site.</h5>
                        <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
                        <p><strong>Propriétaire</strong> : CODEheures (GAGNOT Sylvain) – 1 rue Milhaud 37300 Joué-Les-Tours<br />
                            <strong>Créateur</strong>  : <a href="http://codeheures.fr">Gagnot Sylvain</a><br />
                            <strong>Responsable publication</strong> : Gagnot Sylvain – webmaster@codeheures.fr<br />
                            Le responsable publication est une personne physique ou une personne morale.<br />
                            <strong>Webmaster</strong> : Gagnot Sylvain – webmaster@codeheures.fr<br />
                            <strong>Hébergeur</strong> : OVH.com – 2 rue Kellermann - 59100 Roubaix - France.<br />
                            Crédits : les mentions légales ont été générées et offertes par Subdelirium <a target="_blank" href="http://www.subdelirium.com/generateur-de-mentions-legales/" alt="rédaction des mentions légales">Générateur de mentions légales</a></p>

                        <h5>2. Conditions générales d’utilisation du site et des services proposés.</h5>
                        <p>L’utilisation du site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> sont donc invités à les consulter de manière régulière.</p>
                        <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par CODEheures (GAGNOT Sylvain), qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
                        <p>Le site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> est mis à jour régulièrement par Gagnot Sylvain. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
                        <h5>3. Description des services fournis.</h5>
                        <p>Le site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
                        <p>CODEheures (GAGNOT Sylvain) s’efforce de fournir sur le site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
                        <p>Tous les informations indiquées sur le site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
                        <h5>4. Limitations contractuelles sur les données techniques.</h5>
                        <p>Le site utilise la technologie JavaScript.</p>
                        <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
                        <h5>5. Propriété intellectuelle et contrefaçons.</h5>
                        <p>CODEheures (GAGNOT Sylvain) est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
                        <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : CODEheures (GAGNOT Sylvain).</p>
                        <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
                        <h5>6. Limitations de responsabilité.</h5>
                        <p>CODEheures (GAGNOT Sylvain) ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site http://self-job.tk, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
                        <p>CODEheures (GAGNOT Sylvain) ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a>.</p>
                        <p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. CODEheures (GAGNOT Sylvain) se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, CODEheures (GAGNOT Sylvain) se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
                        <h5>7. Gestion des données personnelles.</h5>
                        <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
                        <p>A l'occasion de l'utilisation du site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
                        <p> En tout état de cause CODEheures (GAGNOT Sylvain) ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> l’obligation ou non de fournir ces informations.</p>
                        <p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
                        <p>Aucune information personnelle de l'utilisateur du site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de CODEheures (GAGNOT Sylvain) et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a>.</p>
                        <p>Le site susnommé est déclaré à la CNIL sous le numéro 1986541 v 0 .</p>
                        <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
                        <h5>8. Liens hypertextes et cookies.</h5>
                        <p>Le site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de CODEheures (GAGNOT Sylvain). Cependant, CODEheures (GAGNOT Sylvain) n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
                        <p>La navigation sur le site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
                        <p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
                        <p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
                        <p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
                            Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
                        <p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>
                        <p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences.  Dans l'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>

                        <h5>9. Droit applicable et attribution de juridiction.</h5>
                        <p>Tout litige en relation avec l’utilisation du site <a href="http://http://self-job.tk/" title="CODEheures (GAGNOT Sylvain) - http://self-job.tk">http://self-job.tk</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
                        <h5>10. Les principales lois concernées.</h5>
                        <p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
                        <p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
                        <h5>11. Lexique.</h5>
                        <p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
                        <p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>

                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
<script>
    //JS SOCIAL
    jsSocials.shares.facebook.shareUrl = "https://www.facebook.com/sharer/sharer.php?u={url}";

    var parser = window.location.href;
    var myurl = "http://www.google.com";
    var mytxt = "Self Job";
    if (parser.indexOf('?counter=true') != -1) {
        $("#share").jsSocials({
            url: myurl,
            text: mytxt,
            showLabel: true,
            showCount: true,
            shares: ["twitter", "facebook", "googleplus", "linkedin", "email"]
        });
    } else {
        $("#share").jsSocials({
            url: myurl,
            text: mytxt,
            showLabel: true,
            showCount: false,
            shares: ["twitter", "facebook", "googleplus", "linkedin", "email"]
        });
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
    });

</script>
@endsection