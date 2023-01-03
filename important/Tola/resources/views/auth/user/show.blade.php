@extends('BACK.index')
@section('contenu')
 <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">INFORMATIONS SUR L'ENREGISTREMENT N°{{$blog->id}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-info">
                                            <tr>
                                                 <th scope="col">TITRE ARTICLE</th>
                                            <th scope="col">CATEGORIE ARTICLE</th>
                                            <th scope="col">DETAIL ARTICLEL</th>
                                            <th scope="col">DATE ENREG</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$blog->titre_article}}</td>
                                            <td>{{$blog->categorie_article}}</td>
                                            <td>{{$blog->detail_article}}</td>
                                            <td>{{$blog->date_enreg}}</td>
                                            </tr>
                                           
                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection