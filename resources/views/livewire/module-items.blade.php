
        <div>
        
            <div class="container ">
        
                <h3  id="titre-prof">Page Module</h3>
                <p id="text-prof">Devis / Developpement / Modules </p>   
                {{-- @foreach ($data as $mod )
             
             @endforeach
               --}}
            </div>
            {{-- <div class="container-fluid bg-white shasow-sm rounded-2">
              
                <div class="containrr">
                    <h3 class="fw-bold text-muted"># Modules</h3>
        
                </div>
                <div class="table-responsive p-4 bg-white">
                    <table id="user-list-table" class="table table-white display " role="grid" data-bs-toggle="data-table">
              
                    <thead>
                       <tr class="bg-primary">
                          <th>Id Modules</th>
                          <th>Id Item</th>
                          <th>Desingation</th>
                          <th>Commentaire</th>
                          <th>Tems passé</th>
                          <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                       <tr>
        
                          <td class="text-muted fw-bold">annasthesia@gmail.com</td>
                          <td class="text-muted fw-bold">USA</td>
                          <td class="text-muted fw-bold"><span class="badge bg-primary">Active</span></td>
                          <td class="text-muted fw-bold">Acme Corporation</td>
                          <td class="text-muted fw-bold">2019/12/01</td>
                          <td>
                           <button class="btn btn-sm badge bg-warning">action</button>
                          </td>
                       </tr>
                       <tr>
                       
                          <td>brocklee@gmail.com</td>
                          <td>Indonesia</td>
                          <td><span class="badge bg-primary">Active</span></td>
                          <td>Soylent Corp</td>
                          <td>2019/12/01</td>
                          <td>
                            <button class="btn btn-sm badge bg-warning">action</button>
                           </td>
                       </tr>
        
               
               
                     
                   
                      
                    </tbody>
                 </table>
             </div>
            </div> --}}
             
            <div class="container bg-white rounded-2 mb-2">
                 <svg id="SVG" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
            </svg> 
                
                <ul class="nav  fw-bold nav-tabs-bordered offset-9 " id="borderedTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Modules</button>
                  </li>
                  <li class="nav-item" role="presentation" >
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">Items</button>
                  </li>
                  {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">Modifier</button>
                  </li> --}}
                </ul>
            </div>

            
            <div class="container bg-white rounded-2">
             
               
        
                      <!-- Bordered Tabs -->
                      <div class="tab-content pt-2" id="borderedTabContent">
                        <div class="tab-pane fade active show" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                    
                            {{-- liste un --}}
                            <div class="container">
                                <h3 class="fw-bold text-muted">
                                    Modules</h3>
                            </div>

                            <hr>
                            <div class="offset-7 py-2">
                                <div class="row">
                                    <div class="col-9">
                    
                                        <input type="text" class="form-control border-0 shadow-sm" wire:model="recherche" placeholder="Recheche par designation ici">
                                    </div>
                                    <div class="col-1" wire:click="formulareAjouter">
                                        <svg class="icon-32 text-success" id="added" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                
                                            <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5026 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0453C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6247 9.016 19.1168 9.021 18.8088 9.021Z" fill="currentColor"></path>                                <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>                                <path d="M14.3672 12.2364H12.6392V10.5094C12.6392 10.0984 12.3062 9.7644 11.8952 9.7644C11.4842 9.7644 11.1502 10.0984 11.1502 10.5094V12.2364H9.4232C9.0122 12.2364 8.6792 12.5704 8.6792 12.9814C8.6792 13.3924 9.0122 13.7264 9.4232 13.7264H11.1502V15.4524C11.1502 15.8634 11.4842 16.1974 11.8952 16.1974C12.3062 16.1974 12.6392 15.8634 12.6392 15.4524V13.7264H14.3672C14.7782 13.7264 15.1122 13.3924 15.1122 12.9814C15.1122 12.5704 14.7782 12.2364 14.3672 12.2364Z" fill="currentColor"></path>                
                                         </svg>
                                    </div>
                                    <div class="col-1">
                                        {{-- <button class="btn btn-sm badge bg-warning" wire:clic  k="modificationForm">Edit</button> --}}
                                        <svg wire:click="modificationForm" class="icon-32 rounded-1 modif" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>                                <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>                                <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>            
                                        </svg>  
                                    </div>

         
                                </div>
                            </div>
                                    <br>
                            <div class="table-responsive    bg-white">
                              <table id="user-list-table" class="table table-light  display " role="grid" data-bs-toggle="data-table">
                          
                                <thead>
                                   <tr class="bg-primary">
                                      <th>Id Modules</th>
                                      <th>Id Item</th>
                                      <th>Desingation</th>
                                      <th>Commentaire</th>
                                      {{-- <th>date debut</th>
                                      <th>date fin</th> --}}
                                      <th>Temps passé</th>
                                      <th>Action</th>
                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $module )
                                        
                                    <tr>
                   
                                        <td class="text-muted fw-bold">{{$module->id_module}}</td>
                                        <td class="text-muted fw-bold"><span class="badge bg-primary">{{$module->id_item}}</span></td>
                                        <td class="text-muted fw-bold">{{$module->designation}}</td>
                                       <td class="text-muted fw-bold">{{$module->commentaire}}</td>
                                       {{-- <td class="text-muted fw-bold">{{$module->date_debut}}</td>
                                       <td class="text-muted fw-bold">{{$module->date_fin}}</td> --}}
                                       <td class="text-muted fw-bold">
                                           @if ( ($jour = (abs(strtotime($module->date_fin) - strtotime($module->date_debut)) /86400  ) + 1)==1)
                                               {{$jour}} jour
                                           @else
                                           {{$jour}} jours
                                           @endif

                                       </td>
                                        <td>
                                 
                                        <button class="btn btn-sm badge bg-danger">delete</button>
                                       </td>
                                    </tr>
                                    @endforeach
                                
                                 
                               
                                  
                                </tbody>
                             </table>
                         </div>
        
        
                        </div>




                        {{-- panel de l'items --}}
                        <div class="tab-pane fade pb-4" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="container">
                                <h4 class="fw-bold text-muted">{{('Items')}}</h4>
                            </div>
                            <hr>
                            <div class="offset-7 py-2">
                                <div class="row">
                                    <div class="col-9">
                    
                                        <input type="text" class="form-control border-0 shadow-sm" wire:model="recherche" placeholder="Recheche par designation ici">
                                    </div>
                                    <div class="col-1" wire:click="formItem">
                                        <svg class="icon-32 text-success" id="added" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                
                                            <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5026 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0453C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6247 9.016 19.1168 9.021 18.8088 9.021Z" fill="currentColor"></path>                                <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>                                <path d="M14.3672 12.2364H12.6392V10.5094C12.6392 10.0984 12.3062 9.7644 11.8952 9.7644C11.4842 9.7644 11.1502 10.0984 11.1502 10.5094V12.2364H9.4232C9.0122 12.2364 8.6792 12.5704 8.6792 12.9814C8.6792 13.3924 9.0122 13.7264 9.4232 13.7264H11.1502V15.4524C11.1502 15.8634 11.4842 16.1974 11.8952 16.1974C12.3062 16.1974 12.6392 15.8634 12.6392 15.4524V13.7264H14.3672C14.7782 13.7264 15.1122 13.3924 15.1122 12.9814C15.1122 12.5704 14.7782 12.2364 14.3672 12.2364Z" fill="currentColor"></path>                
                                         </svg>
                                    </div>
                                    <div class="col-1">
                                        {{-- <button class="btn btn-sm badge bg-warning" wire:clic  k="modificationForm">Edit</button> --}}
                                        <svg wire:click="modificationForm" class="icon-32 rounded-1 modif" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>                                <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>                                <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>            
                                        </svg>  
                                    </div>

         
                                </div>
                            </div>
                            <br>
                            <table id="user-list-table" class="table table-light  display text-center" role="grid" data-bs-toggle="data-table">
                          
                                <thead>
                                   <tr class="bg-primary">
                                    
                                      <th>#</th>
                                      <th>Desingation</th>
                                      <th>Commentaire</th>
                                      <th>Action</th>
                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataItems as $module )
                                        
                                    <tr>
                   
                                   
                                        <td class="text-muted fw-bold"><span class="badge bg-primary">{{$module->id}}</span></td>
                                        <td class="text-muted fw-bold">{{$module->designation}}</td>
                                       <td class="text-muted fw-bold">{{$module->commentaire}}</td>
                                        <td>
                                 
                                        <button class="btn btn-sm badge bg-danger">delete</button>
                                       </td>
                                    </tr>
                                    @endforeach
                                
                                 
                               
                                  
                                </tbody>
                             </table>
                        </div>
                        {{-- fin panel de l'items --}}
                    
            </div>
            <div id="form-module" class="form {{$value}}" method="POST">
               
                  
                    <div>
                      <div class="col-12 offset-1">
                        <h3 class="text mt-2" >Nouveau module</h3><br>

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
                          <form wire:submit.prevent="storeModule">
                              @csrf
                              
                              <div class="coloumn">
                                <div class="row">
                                  <div class="col-lg-5">
                                    <label for="module">N° module</label>
                                    <input type="number" wire:model="numModule" name="id_module" id="module" class="form-control" placeholder="Entrer n° du module">
                                    <label for="nom" class="text-muted m-2">{{_('Designation *')}}</label>
                                    <input type="text" id="nom" wire:model="designation" name="designation" class="card-title form-control m-2" placeholder="Désignation">          
                                    <label for="profile"  class="text-muted m-2">{{_('Items *')}}</label>             
                                    {{-- <input type="number" name="id_item"  wire:model="item" id="Items" class="card-title form-control m-2" placeholder="Id Items" required>         --}}
                                   
                                    <select name="" id="" wire:model="item" class="form-control">
                                        <option value="">selectionner </option>
                                        @foreach ($dataItems as $dat)
                                        <option value="{{$dat->id}}"> {{$dat->id}} -> {{$dat->designation}}</option>
                                        @endforeach
                                    </select>


                                  </div>
                                  <div class="col-lg-5">
                                    <label for="comment" class="text-muted m-2">{{_('Status *')}}</label>
                                    <textarea name="commmentaire" wire:model="comment"  id="comment" cols="25" rows="5" class="form-control" placeholder="placer votre Commentaire ici"></textarea>

                                    <label for="contact" class="text-muted m-2">{{_('Date du début *')}}</label>
                                    <input type="date" name="date_debut" wire:model="dateDeb"  class="card-title form-control m-2" required> 
                                    <label for="date" class="text-muted m-2">{{_('Date du fin *')}}</label>
                                    <input type="date" name="date_fin" wire:model="dateFin"  class="card-title form-control m-2" required>
                                    {{-- <label for="#tarif" class="text-muted m-2">{{_('Tarif *')}}</label>              
                                    <input type="text" name="tarif" id="tarif" class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                                     --}}
                                    
                                  </div>
                                </div>
                              </div>
                              <button type="submit" class="btn  btn-success offset-9 mt-2" >Créer</button>
                              
                              
                            </form>
                        </div>
                    </div>
                    
                  </div>
            </div>

           
                
            <div id="form-module1" class="form {{$form}}" method="POST">
        
               
                  
                <div>
                  <div class="col-12 offset-1">
                    <h3 class="text mt-2" >Modifier un module</h3><br>

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
                  @foreach ($modeles as $module )
                  <form action="{{url('/update')}}" method="POST">
                    @csrf
                    
                    <div class="coloumn">
                        <div class="row">
                            <div class="col-lg-5">
                               
                                  <input type="hidden"  name="id" value="{{$module->id}}">

                                  <label for="module">N° module</label>
                                <input type="number" name="id_module" wire:model="numero" id="module" class="form-control" >


                                <label for="nom" class="text-muted m-2">{{_('Designation *')}}</label>
                                <input type="text" id="nom" name="designation" class="card-title form-control m-2" value="{{$module->designation}}">          


                                <label for="profile"  class="text-muted m-2">{{_('Id Items *')}}</label>             
                                <input type="number" name="id_item" id="Items" class="card-title form-control m-2" value="{{$module->id_item}}" required>     
                                
                                
                                <label for="profile"  class="text-muted m-2">{{_('Items *')}}</label>             
                                <input type="text" name="id_item" id="Items" class="card-title form-control m-2" value="{{$module->id_item}}" placeholder="nom de l'item" required>        

                              </div>
                              <div class="col-lg-5" >
                                <label for="comment" class="text-muted m-2">{{_('Status *')}}</label>
                                <textarea name="commmentaire" id="comment" cols="25" rows="5" class="form-control" placeholder="placer votre Commentaire ici" >{{$module->commentaire}}</textarea>

                                <label for="contact" class="text-muted m-2">{{_('Date du début *')}}</label>
                                <input type="date" name="date_debut" class="card-title form-control m-2" required> 
                                <label for="date" class="text-muted m-2">{{_('Date du fin *')}}</label>
                                <input type="date" name="date_fin" class="card-title form-control m-2" required>
                                {{-- <label for="#tarif" class="text-muted m-2">{{_('Tarif *')}}</label>              
                                <input type="text" name="tarif" id="tarif" class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                                 --}}
                                
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn  btn-warning offset-9 mt-2">Modifier</button>
                          @endforeach
                          
                        </form>
                    </div>
                </div>
                
            </div>
              {{-- formulaite Items --}}

            <div id="formItems" class="form {{$formAjout}}" method="POST">
               
                  
                <div>
                  <div class="col-12 offset-1">
                    <h3 class="text mt-2" >Ajouter Items</h3><br>

                    <ul id="top-tab-list" class="p-0 row list-inline">
                   
                      <li id="personnel" class="mb-2 col-lg-5 col-md-6  ">
                          <a href="#nom"  class="nav-link">
                              <div class="iq-icon me-3  fw-bold">
                                  <svg class="svg-icon icon-20 rounded-4 text-primary " xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                  </svg>
                                  <span class="dark-wizard ">Items</span>
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
                                  <span class="dark-wizard">designation</span>
                              </div>
                          </a>
                      </li>
                      
                  </ul>
                      <form wire:submit.prevent="storeItems">
                          @csrf
                          
                          <div  >
                            <div class="col-7 m-2 me-2">
                               <label for="nom" class="text-muted m-2 fw-bold text-muted">{{_('Designation *')}}</label>
                                <input type="text" id="nom" wire:model="designationItems"  class="rounded-2 card-title form-control m-2" placeholder="Désignation">          

                                <label for="comment" class="text-muted m-2 fw-bold text-muted">{{_('Status *')}}</label>
                                <textarea name="commmentaire" wire:model="commentaireItems"   cols="25" rows="5" class="m-2 rounded-2 form-control" placeholder="placer votre Commentaire ici"></textarea>
                       
                            </div>
                          </div>
                          <button type="submit" class="btn  btn-primary offset-8 mt-2 rounded-5 " >Enregistrer</button>
                          
                          
                        </form>
                    </div>
                </div>
                
              </div>
        </div>


            {{-- modification formulaire --}}
            <div id="form-module" class="form {{$formModifier}}" method="POST">
               
                  
                <div>
                  <div class="col-12 offset-1">
                    <h3 class="text mt-2" >Ajouter Items</h3><br>

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
                      <form wire:submit.prevent="storeItems">
                          @csrf
                          
                          <div class="coloumn">
                            <div class="row">
                              <div class="col-lg-5">
                                <label for="module" >N° module</label>
                                <input type="number" wire:model="numModule" name="id_module" id="module" class="m-2 rounded-5 form-control" placeholder="Entrer n° du module">
                                <label for="nom" class="text-muted m-2">{{_('Designation *')}}</label>
                                <input type="text" id="nom" wire:model="designation" name="designation" class="rounded-5 card-title form-control m-2" placeholder="Désignation">          
                                
                              </div>
                              <div class="col-lg-5">
                                <label for="comment" class="text-muted ">{{_('Status *')}}</label>
                                <textarea name="commmentaire" wire:model="comment"  id="comment" cols="25" rows="5" class="m-2 rounded-5 form-control" placeholder="placer votre Commentaire ici"></textarea>

                              
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn  btn-primary offset-9 mt-2 rounded-5 " >Enregistrer</button>
                          
                          
                        </form>
                    </div>
                </div>
                
              </div>
        </div>
              {{-- fin formulaire items --}}
        </div>
        </div>
  
