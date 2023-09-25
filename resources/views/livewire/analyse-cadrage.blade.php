<div>
    <div class="container ">
        <h3  id="titre-prof">Page Analyse et Cadrage</h3>
        <p id="text-prof">Devis /  Analyse et Cadrage </p>   
    </div>   
    <div class="container-fluid shadow bg-white rounded-2 p-2">
       
        
           
            
        <div class="col-6 offset-6">
            <ul>
    
                <li style="list-style: none;" >
                    <a class="nav-link collapsed " data-bs-target="#menu-nav" data-bs-toggle="collapse" href="#">
                     
                        <i class="bi bi-chevron-down ms-auto">
    
                            <svg class="offset-11" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                            </svg>
                        </i>
                    </a>
                    <ul id="menu-nav"  class=" collapse ">
                        <li class="p-2 col-3 bg-primary text-white  rounded-2 offset-8 text-center shadow-sm  text-bold " style="list-style: none">
                            
                             <span class="rounded-1 p-2 fw-bold " wire:click="active" style="cursor:pointer" >nouveau</span>
                           
                      
                            
                        </li>
                            
                        </ul>
                </li>
            </ul>
        </div>
 
             {{-- menu header --}}
            <hr>
            <h3 class="fw-bold text-muted"># List </h3>
            <div class="col-lg-4 offset-8" >
               
                <input type="text" class="form-control shadow-sm rounded-5" wire:model="recherche" id="form-hovered"  placeholder="Recherche ici">
                <br>
            </div>
            <div class="container">
                @if (session('status'))
                   <p class="alert alert-info form-control col-8 ">
                    
                                <svg class="svg-icon icon-20 rounded-4 text-success" xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                             
                    {{session('status')}}
                            
                    <button class="me-2 btn btn-outline-success btn-sm offset-9" > <a href="" class="nav-link">OK</a></button>
                </p>
                @endif
            </div>  
        <table id="user-list-table" class="table table-light display text-center" role="grid" data-bs-toggle="data-table">
                          
            <thead>
               <tr class="bg-primary">
                    <th>#</th>
                  <th>N° projet</th>
                  <th>Statut</th>
                  <th>durée</th>
                  <th>Supprimer</th>
                 
               </tr>
            </thead>
            <tbody>
                @foreach ($data as $dat )
                            
                        <tr>
                                
                            <td>{{$dat->id}}</td>
                            <td><a href="{{url("/gererProjet")}}" class="nav-link badge text-dark bg-purple fw-bold">
                                {{$dat->id_projet}}
                            </a></td>
                            <td class="fw-bold">{{$dat->commentaire}}</td>
                            <td>
                                @if ( ($jour = (abs(strtotime($dat->date_defin) - strtotime($dat->date_debut)) /86400  ) + 1)==1)
                                {{$jour}} jour
                            @else
                            {{$jour}} jours
                            @endif

                            </td>
                            
                            <td>
                                <a href="{{url('/analyseCadrage',$dat->id)}}">
                                    <svg class="hover  icon-32 rounded-1" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>                                <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>                                </svg>                            
                                </a>
                                
            
                            </td>
                        
                        
                        </tr>
                @endforeach
            </tbody>
            {{-- <tbody>
               
                <td>1</td>
                <td>1</td>
                <td>fd</td>
                <td>Date</td>
                <td>
                    <button class="btn btn-primary btn-sm">delete</button>
                </td>
           
              
            </tbody> --}}
         </table>
    </div>
    {{-- <div id="form-module1" class="form " method="POST">

                <div id="cadrage" class=" p-2 rounded-supprimer2iq-icon me-3 text-center fw-bold col-lg-4">
                    <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="dark-wizard">Cadrage</span>
                    
                </div>
                    <hr>
             
                <ul>
                    <li>Defition du projet</li> 
                    <li>Objectif</li>
                    <li>Contrainte</li>
                    <li>Acteur</li>
                    <li>Limite</li>
                </ul>
        
            
              
    </div> --}}

    <div id="form-module1" class="form {{$form}}" method="POST">
        
               
                  
        <div>
          <div class="col-12 offset-1">
            <h3 class="fw-bold mt-2 title-form" >Nouveau Analyse</h3><br>

            <ul id="top-tab-list" class="p-0 row list-inline">
           
              <li id="personnel" class="mb-2 col-lg-5 col-md-6  ">
                  <a href="#nom"  class="nav-link">
                      <div class="iq-icon me-3  fw-bold">
                          <svg class="svg-icon icon-20 rounded-4 text-primary " xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                          </svg>
                          <span class="dark-wizard ">Analyse</span>
                        </div>
                  </a>
              </li>
              <li id="personnel" class="mb-2 col-lg-5 col-md-6 text-start">
                  <a href="#Items" class="nav-link">
                      <div class="iq-icon me-3 text-center fw-bold">
                          <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          </svg>
                          <span class="dark-wizard">Cadrage</span>
                      </div>
                  </a>
              </li>
         
          </ul>
              <form wire:submit.prevent="store">
                  @csrf
                  {{$resultat}}
                  <div class="coloumn">
                    <div class="row">
                      <div class="col-lg-5">
                         
                        
                        <label for="projet" class="text-muted m-2">{{_('Id projet *')}}</label>
                        {{-- <input type="text" id="nom" wire:model='nom' class="card-title form-control m-2" placeholder="Nom du client">    --}}
                        <select name="" id="" wire:model="id_projet" class="form-control p-2">
                            <option value="">selectionner un projet</option>
                            @foreach ($projets as $pro )
                                <option class="p-2" value="{{ $pro->id }}">{{$pro->id }} :           {{ $pro->titre}} </option>
                            @endforeach
                        </select>

                        <label for="prerequis"  class="text-muted m-2">{{_('Commentaire *')}}</label>             
                        <textarea  id="desc" cols="25" rows="5" wire:model="commentaire" class="form-control" placeholder="Entrer votre commentaire" ></textarea>
                        {{-- <input type="text"   class="card-title form-control m-2" placeholder="Entre votre commentaire" required>         --}}

                    </div>
                    <div class="col-lg-5" >
                        <label for="desc" wire:model="date_deb" class="text-muted m-2">{{_('Date de debut *')}}</label>
                        <input type="date" name="" wire:model="date_debut" placeholder="selectionner la date debut" class="form-control">

                        <label for="contact" class="text-muted m-2">{{_('Date finale *')}}</label>
                        <input type="date" wire:model="date_fin" placeholder="selectionner la date finale" class="form-control">
                        
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn  btn-warning  text-white offset-9 mt-2">Enregistrer</button>
                  
                  
                </form>
            </div>
        </div>
        
    </div>
</div>

