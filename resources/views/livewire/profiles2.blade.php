<div>
  
        <div class="container offset-lg-1">
                
          <h3  id="titre-prof">Gestion du Profile</h3>
          <p id="text-prof">Création / modification /suppression / listage</p>
        
          <button class="btn btn-sm btn-outline-info offset-sm-8 "  wire:click="afficher" >
            <svg class="icon-24 text-light" xmlns="http://www.w3.org/2000/svg" width="26" viewBox="0 0 24 24" fill="none">
              <g>
              <g>
              <circle cx="7" cy="12" r="1" fill="black"></circle>
              <circle cx="12" cy="12" r="1" fill="black"></circle>
              <circle cx="17" cy="12" r="1" fill="black"></circle>
              </g>
              </g>
          </svg>

            <span>
              plus
            </span>
            </button>
        </div>      


        <div class="container " id="liste">
          <div>
            @foreach ($profs as $prof)
            <div class="col-md-8 offset-lg-2 mb-2 " >
              
              
                  
                  
                    <div class=" m-4 p-4 bg-white shadow-sm  rounded">
                    

                        {{-- tab menu deb --}}

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              {{-- <a class="nav-link active" id="home-tab" data-toggle="tab" href="#{{ $prof->id }}" role="tab" aria-controls="home" aria-selected="true">#</a> --}}
                            </li>
                            <li class="nav-item">
                              <a class="nav-link "  id="profile-tab" data-toggle="tab" href="#{{ $prof->id}}x" role="tab" aria-controls="profile" aria-selected="false">Modifier</a>
                            </li>
                        
                        </ul>
                          <div class="tab-content" id="myTabContent">
                            <h3 class="ml-lg-4 mt-2" id="titre-prof">A propos</h3>
                            <hr>

                            <div class="row">
                                <div class="col-lg-3">
                                  
                                    <img  src="{{ asset('storage/images/'.$prof->image)}}" alt="" class="rounded-circle " 
                                    style="width:100px; height:100px;">
                            
                                </div>
                                <div class="col-lg-7">

                                    <div class="tab-pane fade show active" id="{{$prof->id}}" role="tabpanel" aria-labelledby="home-tab">
                                        <span class="p-2 text-primary text-center text-uppercase">{{ $prof->nom }}</span> <br>
                                        <span class="p-2 text-muted">contact :           {{ $prof->contact }}</span> <br>
                                        <span class="p-2 text-muted">profiles :          {{ $prof->profile }}</span><br>
                                        <span  class="p-2 text-muted font-weight-bold">Tarif :           {{ $prof->tarif }} Ar /jours</span><br>
                                        <div class="m-2 progress" style="height: 5px ;width:30%;">
                                            <div class="progress-bar progress-bar-striped bg-info "  role="progressbar" style=" width:  {{  $prof->tarif /500000 }}% " aria-valuemin="0" aria-valuenow=" {{ 25000000 - $prof->tarif  }} " aria-valuemax="40" ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade "   id="{{ $prof->id }}x" role="tabpanel" aria-labelledby="profile-tab">
                                <form  action="{{url('/profiles/update')}}"   class="form" method="POST">
                                    @csrf
                              
                                    <input type="hidden" name="id" value="{{ $prof->id }}">
                                    <div class="coloumn">
                                      <div class="row">
                                        <div class="col-5">
                                          <label class="text-muted " >{{_('Nom *')}}</label><br>
                                          <input type="text" name="nom" class="form-control" value="{{ $prof->nom }}"><br>
                                          <label class="text-muted " >{{_('Profiles *')}}</label><br>
                                          <input type="select" name="profile" id="nom" class="card-title form-control" value="{{ $prof->profile }}" required><br>

                                        </div>
                                        <div class="col-5">
                                          <label class="text-muted " >{{_('Contact *')}}</label>
                                          <input type="text" name="contact" id="nom" class="card-title form-control" value="{{ $prof->contact }}" required><br>
                                          <label class="text-muted " >{{_('Tarif / jours *')}}</label>
                                          <input type="text" name="tarif" id="nom" class="card-title form-control" value="{{ $prof->tarif }}" required><br>

                                        </div>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-sm m-2 btn-outline-info ">
                                      <svg class="svg-icon icon-20 " xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>  
                                    <span>Confirmer</span>
                                    </button>
                                    {{-- <button type="submit" class="btn btn-sm m-2 btn-outline-danger">supprimer</button> --}}
                                  
                                    
                                  
                                </form>
                            
                            </div>
                            {{-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> --}}
                          </div>

                        {{-- tab menu fin --}}
                    
                    </div>
              
            </div>
            @endforeach
            {{-- {{ $profs->links() }} --}}
          </div>
        
      

              <div id="form" class="form   {{$form}}" method="POST">
                  <i class="offset-11" >  <svg wire:click="exit" id="exit" class="icon-32 border rounded-4" width="38" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M16.34 1.99976H7.67C4.28 1.99976 2 4.37976 2 7.91976V16.0898C2 19.6198 4.28 21.9998 7.67 21.9998H16.34C19.73 21.9998 22 19.6198 22 16.0898V7.91976C22 4.37976 19.73 1.99976 16.34 1.99976Z" fill="currentColor"></path>                                <path d="M15.0158 13.7703L13.2368 11.9923L15.0148 10.2143C15.3568 9.87326 15.3568 9.31826 15.0148 8.97726C14.6728 8.63326 14.1198 8.63426 13.7778 8.97626L11.9988 10.7543L10.2198 8.97426C9.87782 8.63226 9.32382 8.63426 8.98182 8.97426C8.64082 9.31626 8.64082 9.87126 8.98182 10.2123L10.7618 11.9923L8.98582 13.7673C8.64382 14.1093 8.64382 14.6643 8.98582 15.0043C9.15682 15.1763 9.37982 15.2613 9.60382 15.2613C9.82882 15.2613 10.0518 15.1763 10.2228 15.0053L11.9988 13.2293L13.7788 15.0083C13.9498 15.1793 14.1728 15.2643 14.3968 15.2643C14.6208 15.2643 14.8448 15.1783 15.0158 15.0083C15.3578 14.6663 15.3578 14.1123 15.0158 13.7703Z" fill="currentColor"></path>                                </svg>                            

                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link " id="home-tab" data-toggle="tab" href="#list" role="tab" aria-controls="home" aria-selected="true">liste</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active "  id="profile-tab" data-toggle="tab" href="#ajouter" role="tab" aria-controls="profile" aria-selected="false">Ajouter</a>
                      </li>
                  
                  </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show " id="list" role="tabpanel" aria-labelledby="home-tab">
                          <div class="col-sm-7 offset-2 p-4">
                              <input type="text" name="recherche" wire:model="recherche"   placeholder="Entrer votre recherche ici" class="form-control">
                            
                          </div>
                    
                  
                          <table class="table table-white display table-hover-red">
                              <thead>
                                  <th>{{ __('Id prof')}}</th>
                                  <th>{{ __('Nom')}}</th>
                                  <th>{{ __('Profiles')}}</th>
                                  <th>{{__('Tarif')}}</th>
                                  <th>{{__('Action')}}</th>
                                
                                
                              </thead>
                              <tbody>
                                  @foreach ($profs as $prof )
                                  <tr>
                                      <td>{{ $prof->id }}</td>
                                      <td>{{ $prof->nom }}</td>
                                      <td>{{ $prof->profile }}</td>
                                      <td>{{ $prof->tarif }}</td>
                                      <td><a class="nav-link" href="{{url('/profiles',$prof->id)}}">
                                        <img src="/images/delete1.png" alt="" style="width: 20px;"></a></td>

                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                          {{-- <div class="col-lg-2 h-75">
                          {{ $profs->links() }}
                          </div> --}}
                      </div>    
                  
                    
                      <div class="tab-pane fade show active "   id="ajouter" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-12 offset-1">
                          <h3 class="text mt-2" >Ajouter un employer</h3><br>

                          <ul id="top-tab-list" class="p-0 row list-inline">
                         
                            <li id="personnel" class="mb-2 col-lg-3 col-md-6  ">
                                <a href="#nom"  class="nav-link">
                                    <div class="iq-icon me-3  fw-bold">
                                        <svg class="svg-icon icon-20 rounded-4 text-primary " xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <span class="dark-wizard ">Personnel</span>
                                      </div>
                                </a>
                            </li>
                            <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
                                <a href="javascript:void();" class="nav-link">
                                    <div class="iq-icon me-3 text-center fw-bold">
                                        <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span class="dark-wizard">Image</span>
                                    </div>
                                </a>
                            </li>
                            <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
                                <a href="javascript:void();" class="nav-link">
                                    <div class="iq-icon me-3 text-center fw-bold">
                                        <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="dark-wizard ">Finish</span>
                                    </div>
                                </a>
                            </li>
                        </ul> 

                      
                            <form  wire:submit.prevent="store">
                                @csrf
                                
                                <div class="coloumn">
                                  <div class="row">
                                    <div class="col-lg-5">
                                      <label for="nom" class="text-muted m-2">{{_('Nom *')}}</label>
                                      <input type="text" id="nom" wire:model.lazy="nom" name="name" class="card-title form-control m-2" placeholder="Nom">          
                                      <label for="profile" class="text-muted m-2">{{_('Profiles *')}}</label>             
                                      <input type="select" name="profiles" wire:model="profiles"  id="profile" class="card-title form-control m-2" placeholder="Profiles" required>        

                                    </div>
                                    <div class="col-lg-5">
                                      <label for="contact" class="text-muted m-2">{{_('Contact *')}}</label>
                                      <input type="text" name="contact" wire:model.lazy="contact"  class="card-title form-control m-2" placeholder="contact" required> 
                                      <label for="#tarif" class="text-muted m-2" >{{_('Tarif *')}}</label>              
                                      <input type="text" name="tarif" id="tarif" wire:model="tarifs"  class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                                      <label for="#image" class="text-muted m-2" >{{_('Image *')}}</label>
                                      <input type="file" name="file" id="image" wire:model="file"  class="card-title form-control m-2" required>
                                      
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" class="btn  btn-success offset-9 m" wire:click.prevent="store">ajouter</button>
                                
                                
                              </form>
                          </div>
                      </div>
                      
                    </div>
              </div>

        </div>

</div>


