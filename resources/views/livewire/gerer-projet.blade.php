<div class="rounded-2 1" wire:init="loadData">
    <div class="container   ">
        <h3  id="titre-prof">Page Projet</h3>
        <p id="text-prof">Page / Gerer projet</p>   
    </div>   
    <div class="container-fluid  bg-white shadow-sm rounded-2 p-2 " >
      
           
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
                            <li class="p-2 col-3  rounded-2 offset-8 text-center shadow-sm  text-bold " style="list-style: none">
                                
                                 <span class="rounded-1 p-2 fw-bold navigation " wire:click="active">nouveau</span>
                                 <hr>
                                 <span class="rounded-1 p-2 fw-bold navigation " wire:click="active2">Modifier</span>
                          
                                
                            </li>
                                
                            </ul>
                    </li>
                </ul>
            </div>
     
        <hr> 
            <h4 class="fw-bold  text-warning"># List-projet</h4> 
        
           <div class="col-4 offset-8">

               <input type="text" id="form-hovered" wire:model="recherche"  placeholder="Recherche par titre" class="rounded-5 form-control shadow-sm ">
           </div>
       
    <br>
        <table id="user-list-table" class="table table-light rounded-1  display p-2 " role="grid" data-bs-toggle="data-table">
                          
            <thead >
               <tr class="bg-primary">
                    <th>#</th>
                  <th>N° client</th>
                  <th>Titre</th>
                  <th>description du projet</th>
                 
                  <th>Objectif</th>
                  <th>Date de création</th>
                  {{-- <th>Modifier</th> --}}
                  <th>Supprimer</th>
                 
               </tr>
            </thead>
            
            <tbody>
                    @foreach ($data as $dat)
                <tr >
                
                    <td class="text-muted fw-bold">{{$dat->id}}</td>
                    <td class="text-muted fw-bold"><a class="nav-link " href="#" >
                    {{$dat->id_client}}    
                    </a></td>
                    
                    <td class="text-muted "><span class="badge bg-purple text-dark ">{{ $dat->titre}}</span></td>
                    <td class="text-muted ">{{$dat->description}}</td>
                    <td class="text-muted ">{{$dat->objectif}}</td>
                    <td class="text-muted ">{{$dat->date_de_création}}</td>
                    {{-- <td  wire:click="active2">
                    <i>
                        <svg class="icon-32 rounded-1 " width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>                                <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>                                <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>            
                        </svg>                            
                    </i>
                    
                    </td> --}}
                    <td>
                  
                       <a href="{{url('/gererProjet/destroy',$dat->id)}}">

                           <svg class="modif  icon-32 rounded-1" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>                                <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>                                </svg>                            
                       </a>
                       

                    </td>
                
                </tr>
                @endforeach
                </tbody>
         
         </table>
    

    </div>

  
    @foreach ($modele as $mod )
        
    <div id="form-module1" class="form {{$form2}}" method="POST">
        
               
                  
        <div>
          <div class="col-12 offset-1">
            <h3 class="text mt-2" >Modification</h3><br>

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
                  <a href="#Items" class="nav-link">
                      <div class="iq-icon me-3 text-center fw-bold">
                          <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          </svg>
                          <span class="dark-wizard">Items</span>
                      </div>
                  </a>
              </li>
              <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
                  <a href="#comment" class="nav-link">
                      <div class="iq-icon me-3 text-center fw-bold">
                          <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                          </svg>
                          <span class="dark-wizard ">Finish</span>
                      </div>
                  </a>
              </li>
          </ul>
              <form action="{{url("/gererProjet/update")}}" method="POST">
                  @csrf
                  
                  <div class="coloumn">
                    <div class="row">
                      <div class="col-lg-5">
                         {{-- <input type="hidden" name="" value="{{ $modif->id }}"> --}}
                         <label for="" class="text-muted m-1">N° projet</label>
                         <select name="id" wire:model="val"  class="form-control m-2">

                            @foreach ($data as $dat)
                                <option value="{{$dat->id}}">{{$dat->id}} </option>
                            @endforeach
                          </select>
                          <label for="client" class="text-muted m-1">N° client</label>
                        <input type="number" name="id_client" id="client"  value="{{$mod->id_client}}" class="form-control m-2" >

                        <label for="projet" class="text-muted m-1">{{_('Titre du projet *')}}</label>
                        <input type="text" id="nom" name="titre" value="{{ $mod->titre}}" class="card-title form-control m-2">          
                        
                        <label for="objectif"  class="text-muted m-1">{{_('Objectif *')}}</label>             
                        <input type="text" name="objectif" id="objectif"  value="{{ $mod->objectif}}" class="card-title form-control m-2" placeholder="Objectif du projet" required>        

                    </div>
                    <div class="col-lg-5" >
                        <label for="comment" class="text-muted m-1">{{_('Description du projet *')}}</label>
                        <textarea name="description" id="comment"   cols="25" rows="5" class="form-control" placeholder="description du projet" >
                         {{ $mod->description}}
                        </textarea>

                        {{--                         
                        <label for="description"  class="text-muted m-2">{{_('Description du projet *')}}</label>             
                        <input type="text" name="desc_projet" id="Items" class="card-title form-control m-2" placeholder="Description du projet"  required>        
     --}}
                        

                        <label for="date" class="text-muted m-1">{{_('Date de création *')}}</label>
                        <input type="date" name="date"  class="card-title form-control m-2" required>
                        {{-- <label for="#tarif" class="text-muted m-2">{{_('Tarif *')}}</label>              
                        <input type="text" name="tarif" id="tarif" class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                         --}}
                        
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn border   btn-warning btn-sm offset-9 mt-2 rounded-5">Valider</button>
                  
                  
                </form>
            </div>
        </div>
        
    </div>
    @endforeach
 
    <div id="form-module1" class="form {{$form}}" method="POST">
        
               
                  
        <div>
          <div class="col-12 offset-1">
            <h3 class="fw-bold mt-2 title-form" >Ajouter un projet</h3><br>

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
                  <a href="#Items" class="nav-link">
                      <div class="iq-icon me-3 text-center fw-bold">
                          <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                          </svg>
                          <span class="dark-wizard">Items</span>
                      </div>
                  </a>
              </li>
              <li id="personnel" class="mb-2 col-lg-3 col-md-6 text-start">
                  <a href="#comment" class="nav-link">
                      <div class="iq-icon me-3 text-center fw-bold">
                          <svg class="svg-icon icon-20 rounded-4 text-primary" xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                          </svg>
                          <span class="dark-wizard ">Finish</span>
                      </div>
                  </a>
              </li>
          </ul>
              <form wire:submit.prevent="create">
                  @csrf
                  
                  <div class="coloumn">
                    <div class="row">
                      <div class="col-lg-5">
                         
                          <label for="client">Client</label>
                        {{-- <input type="number" wire:model="id_client" name="id_client" id="client" class="form-control" > --}}
                        <select wire:model="id_client"  class="form-control m-2">
                            <option value="">select</option>
                            @foreach ($clients as $client )
                                <option class="border-0 p-2" value="{{$client->id}}">{{$client->id}} : {{$client->nom}}</option>
                            @endforeach
                        </select>
                     
                        <label for="projet" class="text-muted m-2">{{_('Titre du projet *')}}</label>
                        <input type="text" id="nom" wire:model='titre' name="desctiption" class="card-title form-control m-2">   

                        <label for="objectif"  class="text-muted m-2">{{_('Objectif *')}}</label>             
                        <input type="text" name="objectif" wire:model="objectif" id="objectif" class="card-title form-control m-2" placeholder="Objectif du projet" required>        

                    </div>
                    <div class="col-lg-5" >
                        <label for="comment" class="text-muted m-2">{{_('Description du projet *')}}</label>
                        <textarea name="commmentaire" wire:model="description" id="comment" cols="25" rows="5" class="form-control" placeholder="description du projet" ></textarea>

                        {{--                         
                        <label for="description"  class="text-muted m-2">{{_('Description du projet *')}}</label>             
                        <input type="text" name="desc_projet" id="Items" class="card-title form-control m-2" placeholder="Description du projet"  required>        
     --}}
                        

                        <label for="date" class="text-muted m-2">{{_('Date de création *')}}</label>
                        <input type="date" wire:model="date" name="date_creation" class="card-title form-control m-2" required>
                        {{-- <label for="#tarif" class="text-muted m-2">{{_('Tarif *')}}</label>              
                        <input type="text" name="tarif" id="tarif" class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                         --}}
                        
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn  btn-primary btn-sm offset-9 mt-2 rounded-5">Enregistrer</button>
                  
                  
                </form>
            </div>
        </div>
        
    </div>
</div>
