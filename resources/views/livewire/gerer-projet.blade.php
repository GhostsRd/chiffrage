<div class="rounded-2 1">
    <div class="container   ">
        <h3  id="titre-prof">Page Projet</h3>
        <p id="text-prof">Page / Gerer projet</p>   
    </div>   
    <div class="container-fluid  bg-white shadow-sm rounded-2 p-2 ">
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
                    <li class="col-1 p-2 rounded-2 offset-10 text-center shadow-sm  text-bold " style="list-style: none">
                        
                    <a href="#" class="nav-link fw-bold" wire:click="active">ajouter</a>
                    <hr>    
                    <a href="" class="nav-link fw-bold">a propos</a>
                        
                    </li>
                        
                    </ul>
            </li>
        </ul>
            <h4 class="fw-bold text-muted"># List-projet</h4>
        <hr>
        <table id="user-list-table" class="table table-light rounded-1  display p-2 " role="grid" data-bs-toggle="data-table">
                          
            <thead>
               <tr class="bg-primary">
                    <th>#clé</th>
                  <th>Id client</th>
                  <th>Titre</th>
                  <th>description du projet</th>
                 
                  <th>Objectif</th>
                  <th>Date de création</th>
                  <th>Actions</th>
                 
               </tr>
            </thead>
            <tbody>
               
                <td>1</td>
                <td >1</td>
                <td ><span class="badge bg-success">gestion d'écolage</span></td>

                <td>Ameliorer l'efficacité du banque</td>
                <td>automatiser la gestion</td>
                <td>{{date('y-m-h')}}</td>
                <td>
                    <button class="btn btn-sm  btn-outline-warning" wire:click="active2">modifier</button>
                    <button class="btn btn-sm  btn-outline-danger">supprimer</button>
                </td>
               

            </tbody>
            <tbody>
               
                <td>1</td>
                <td >1</td>
                <td ><span class="badge bg-success">gestion d'écolage</span></td>
                <td>Gerer l'argent ges clients</td>

                <td>automatiser la gestion</td>
                <td>{{date('y-m-h')}}</td>
                <td>
                    <button class="btn btn-sm  btn-outline-warning">modifier</button>
                    <button class="btn btn-sm  btn-outline-danger">supprimer</button>
                </td>   
            </tbody>
         </table>
    

    </div>

    <div id="form-module1" class="form {{$form}}" method="POST">
        
               
                  
        <div>
          <div class="col-12 offset-1">
            <h3 class="text mt-2" >Mofier un module</h3><br>

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
              <form action="{{url('/update')}}" method="POST">
                  @csrf
                  
                  <div class="coloumn">
                    <div class="row">
                      <div class="col-lg-5">
                         
                          <label for="client">N° client</label>
                        <input type="number" name="id_client" id="client" class="form-control" >

                        <label for="projet" class="text-muted m-2">{{_('Titre du projet *')}}</label>
                        <input type="text" id="nom" name="desctiption" class="card-title form-control m-2">          
                        <label for="objectif"  class="text-muted m-2">{{_('Objectif *')}}</label>             
                        <input type="text" name="objectif" id="objectif" class="card-title form-control m-2" placeholder="Objectif du projet" required>        

                    </div>
                    <div class="col-lg-5" >
                        <label for="comment" class="text-muted m-2">{{_('Description du projet *')}}</label>
                        <textarea name="commmentaire" id="comment" cols="25" rows="5" class="form-control" placeholder="description du projet" ></textarea>

                        {{--                         
                        <label for="description"  class="text-muted m-2">{{_('Description du projet *')}}</label>             
                        <input type="text" name="desc_projet" id="Items" class="card-title form-control m-2" placeholder="Description du projet"  required>        
     --}}
                        

                        <label for="date" class="text-muted m-2">{{_('Date de création *')}}</label>
                        <input type="date" name="date_creation" class="card-title form-control m-2" required>
                        {{-- <label for="#tarif" class="text-muted m-2">{{_('Tarif *')}}</label>              
                        <input type="text" name="tarif" id="tarif" class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                         --}}
                        
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn  btn-warning offset-9 mt-2">Enregistrer</button>
                  
                  
                </form>
            </div>
        </div>
        
    </div>

    <div id="form-module1" class="form {{$form2}}" method="POST">
        
               
                  
        <div>
          <div class="col-12 offset-1">
            <h3 class="text mt-2" >Mofier un module</h3><br>

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
              <form action="{{url('/update')}}" method="POST">
                  @csrf
                  
                  <div class="coloumn">
                    <div class="row">
                      <div class="col-lg-5">
                         
                          <label for="client">N° client</label>
                        <input type="number" name="id_client" id="client" class="form-control" >

                        <label for="projet" class="text-muted m-2">{{_('Titre du projet *')}}</label>
                        <input type="text" id="nom" name="desctiption" class="card-title form-control m-2">          
                        <label for="objectif"  class="text-muted m-2">{{_('Objectif *')}}</label>             
                        <input type="text" name="objectif" id="objectif" class="card-title form-control m-2" placeholder="Objectif du projet" required>        

                    </div>
                    <div class="col-lg-5" >
                        <label for="comment" class="text-muted m-2">{{_('Description du projet *')}}</label>
                        <textarea name="commmentaire" id="comment" cols="25" rows="5" class="form-control" placeholder="description du projet" ></textarea>

                        {{--                         
                        <label for="description"  class="text-muted m-2">{{_('Description du projet *')}}</label>             
                        <input type="text" name="desc_projet" id="Items" class="card-title form-control m-2" placeholder="Description du projet"  required>        
     --}}
                        

                        <label for="date" class="text-muted m-2">{{_('Date de création *')}}</label>
                        <input type="date" name="date_creation" class="card-title form-control m-2" required>
                        {{-- <label for="#tarif" class="text-muted m-2">{{_('Tarif *')}}</label>              
                        <input type="text" name="tarif" id="tarif" class="card-title form-control m-2" placeholder="tarif par jour" required>                         
                         --}}
                        
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn  btn-warning offset-9 mt-2">Enregistrer</button>
                  
                  
                </form>
            </div>
        </div>
        
    </div>
</div>
