@extends('BACK.index')
@section('contenu')
<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">FORMULAIRE D'ENREGISTREMENT</h4>
                                 <button type="submit"  > <a href="{{route('blog.index')}}"class="btn btn-info">Lister </a> </button>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">

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
                                     <form action="{{route('blog.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                       @method('put')
                                        <input type="hidden" name="id" value="{{$blog->id}}">
                      
                                         <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">TITRE ARTICLE</label>
                                            <div class="col-sm-9">
                                         <input type="text" class="form-control" name="titre"placeholder="titre" value="{{$blog->titre_article}}">
                                            </div>
                                            </div>
                                             <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">CATEGORIE ARTICLE</label>
                                            <div class="col-sm-9">
                                        <input type="text" class="form-control" name="categorie" value="{{$blog->categorie_article}}" >
                                            </div>
                                            </div>
                                             <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">DETAIL ARTICLE</label>
                                            <div class="col-sm-9">
                                     <input type="text" name="detail"class="form-control" placeholder="Detail" value="{{$blog->detail_article}}">
                                            </div>
                                            </div>
                                            
                                             <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="custom-file-label">Choose file</label>
                                                
                                            </div>
                                             </div>
                                              <br>
                                            
                                             
                                        
                                       
                                        
                                       
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection