@extends('app')

@section('title')
    Contact
@endsection

@section('content')
        <div class="row">
            <div class="col-md-6">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <legend class="text-center header">Me Contacter</legend>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="prenom" name="name" type="text" placeholder="Prénom" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="nom" name="name" type="text" placeholder="Nom" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="phone" name="phone" type="text" placeholder="Téléphone" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message..." rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <img class="pull-right" src="/img/sio.png">
                        <h4>IHORAI Ariirau</h4><br/>
                        Lycée Aorai<br/>
                        Pirae<br/>
                        ihoraiariirau25@gmail.com<br/>
                        <hr/>
                        Langages: PHP, HTML, CSS, JavaScript, C#
                    </div>
                </div>
            </div>
        </div>
@endsection