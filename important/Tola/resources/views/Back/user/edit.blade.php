@extends('Back.html.index')
@section('contenu')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h2 class="nk-block-title page-title"><strong>Formulaire Pour Ajout Utilisateur</strong></h2>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total n Utilisateurs.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                        <li class="nk-block-tools-opt">
                                                            <div class="drodown">
                                                                <a href="{{route('user.create')}}" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="{{route('user.create')}}" ><span>Ajouter Utilisateur</span></a></li>
                                                                        <li><a href="{{route('user.index')}}"><span>Lister Utilisateur</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h2 class="title nk-block-title"><strong>Formulaire de Validation des Enregistrements</strong></h2>
                                                
                                            </div>
                                        </div>
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                            @if(session()->has('message'))
                                            <div class="alert alert-icon alert-success">
                                            <em class="icon ni ni-alert-circle"></em>
                                            {{session('message')}}
                                            </div>
                                            @endif
                                            @if($errors->any())
                                            @foreach ($errors->all() as $error)
                                            <div class="alert alert-icon alert-danger">
                                            <em class="icon ni ni-alert-circle"></em>
                                            {{$error}}
                                            </div>
                                            @endforeach
                                            @endif
                                            <form method="POST" action="{{route('user.update', $user->id)}}">
                                           @csrf
                                           @method('put')
                                    <div class="col-100">
                                    <div class="form-group ">
                                        <label class="form-label" for="name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name"
                                             name="name" :value="old('name')" required autofocus autocomplete="name" / value="{{$user-> name}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email or Username</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email address or username" name="email" :value="old('email')" required / value="{{$user-> email}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Passcode</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode" type="password" name="password" required autocomplete="new-password" / value="{{$user-> password}}">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="form-label" for="password">confirm Passcode</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password_confirmation">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" placeholder="Enter your passcode" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" / value="{{$user-> password}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </div>
                                </form><!-- form -->
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                    <!-- .nk-block -->
                                    <!-- .nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection