<x-module>
<div>   
        <div class="container ">
    
            <h3  id="titre-prof">Page Items</h3>
            <p id="text-prof">Devis / Developpement / Items </p>   
            
        </div>

        <div class="container bg-white rounded-2 mb-2">
            <svg id="SVG" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
            </svg>
            <ul class="nav  fw-bold nav-tabs-bordered offset-9 " id="borderedTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Lister</button>
              </li>
              <li class="nav-item" role="presentation" >
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">Ajouter</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false" tabindex="-1">Modifier</button>
              </li>
            </ul>
        </div>

        
        <div class="container bg-white rounded-2">
         
    
                  <!-- Bordered Tabs -->
                  <div class="tab-content pt-2" id="borderedTabContent">
                    <div class="tab-pane fade active show" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                
                        {{-- liste un --}}
                        <div class="container">
                            <h3 class="fw-bold text-muted"># Items</h3>
                            
                        </div>
                        <hr>
                        <div class="offset-7 py-2">
                            <div class="row">
                                <div class="col-11">
                
                                    <input type="text" class="form-control" placeholder="Entrer votre recheche ici">
                                </div>
     
                            </div>
                        </div>
    
                        <div class="table-responsive p-4 bg-white">
                            <table id="user-list-table" class="table table-white display " role="grid" data-bs-toggle="data-table">
                      
                            <thead>
                               <tr class="bg-primary">
                                <th>Id Module-</th> 
                                <th>Id Item</th>
                                  <th>Desingation</th>                      
                                  <th>Tems passé</th>
                                  <th>Action</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                
                                <td class="text-muted fw-bold">1</td>
                                  <td class="text-muted fw-bold">1</td>
                                  <td class="text-muted fw-bold"><span class="badge bg-primary">Page parametrage</span></td>
                                  <td class="text-muted fw-bold">2 jours</td>
                                  <td>
                                   <button class="btn btn-sm badge bg-warning">delete</button>
                                  </td>
                               </tr>
                               <tr>
                
                       
                                <td class="text-muted fw-bold">2</td>
                                <td class="text-muted fw-bold"><span class="badge bg-primary">facturation</span></td>
                                <td class="text-muted fw-bold">OK</td>
                                <td>
                                 <button class="btn btn-sm badge bg-warning">delete</button>
                                </td>
                             </tr>
                
                       
                       
                             
                           
                              
                            </tbody>
                         </table>
                     </div>
    
    
                    </div>
                    <div class="tab-pane fade pb-4" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="container">
                            <h4 class="fw-bold text-muted"><svg fill="#000000" height="40" width="40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                viewBox="0 0 512 512" xml:space="preserve">
                           <g>
                               <g>
                                   <path opacity="0.4" d="M358.335,320.105c-1.324-45.682-24.392-87.34-61.185-112.797c24.222-22.345,38.494-54.062,38.494-87.841
                                       C335.644,53.593,282.052,0,216.178,0C150.304,0,96.711,53.593,96.711,119.467c0,33.779,14.272,65.496,38.494,87.841
                                       c-37.907,26.228-61.25,69.652-61.25,116.959v108.089h172.206C254.249,477.566,293.832,512,341.333,512
                                       c53.327,0,96.711-43.385,96.711-96.711C438.044,367.765,403.578,328.167,358.335,320.105z M131.03,125.046
                                       c-0.121-1.85-0.185-3.709-0.185-5.58c0-47.053,38.281-85.333,85.333-85.333s85.333,38.281,85.333,85.333
                                       c0,0.18-0.009,0.36-0.009,0.54c-5.705-3.047-11.816-7.384-18.094-12.919c-11.473-10.115-19.38-20.533-19.443-20.617
                                       l-11.082-14.776l-13.857,12.213C238.572,84.309,194.228,122.756,131.03,125.046z M164.171,187.111
                                       c-9.987-7.688-18.062-17.419-23.759-28.418c49.463-3.83,87.904-25.377,107.318-38.67c10.395,11.159,27.034,26.354,46.38,34.165
                                       c-4.235,9.496-10.182,18.176-17.573,25.581h-0.039c-15.451,15.458-36.789,25.031-60.32,25.031
                                       c-19.581,0-37.629-6.646-52.044-17.778C164.147,187.051,164.157,187.083,164.171,187.111z M246.162,398.222H108.089v-73.956
                                       c0-40.724,22.762-77.653,58.589-96.108c10.138,4.639,21.024,7.912,32.434,9.553v126.378h34.133V237.703
                                       c11.409-1.641,22.296-4.907,32.431-9.546c34.612,17.827,57.029,52.896,58.511,91.973
                                       C284.558,327.256,253.252,358.582,246.162,398.222z M341.333,477.867c-34.505,0-62.578-28.072-62.578-62.578
                                       c0-34.505,28.072-62.578,62.578-62.578c34.505,0,62.578,28.072,62.578,62.578C403.911,449.794,375.839,477.867,341.333,477.867z"
                                       />
                               </g>
                           </g>
                           <g>
                               <g>
                                   <polygon points="358.4,398.222 358.4,378.311 324.267,378.311 324.267,398.222 304.356,398.222 304.356,432.356 324.267,432.356 
                                       324.267,452.267 358.4,452.267 358.4,432.356 378.311,432.356 378.311,398.222 		"/>
                               </g>
                           </g>
                           </svg> Créer un module</h4>
                        </div>
                        <hr>
                        <form action="" class="form border  rounded-2 col-8 offset-2 p-4">
                            <div class="row">
                                <div class="col-5">
                                    <label class="text-muted fw-bold">* Designation</label><br>
                                    <input type="text" placeholder="Designation du module" class="form-control"><br>
                                    <label  class="text-muted fw-bold">* Item</label><br>
                                    <select name="item" id="" class="form-control"><br>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                               
                                <div class="col-6 mt-4 ms-4"  >
                                    <br>
                                    <label  class="text-muted fw-bold border border-warning">* Commentaire</label><br>
                                    {{-- <input type="text" name="" id="" placeholder="Entrer votre commentaire ici" style="height:40px; " class="form-control"><br> --}}
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea><br>
                                    <label  class="fw-bold text-muted">* Temps passé</label><br>
                                    <input type="date" name="" id="" class="form-control" ><br>
    
                                </div>
    
                                <button class="btn btn-outline-primary btn-sm col-2 offset-4" type="submit">Créer</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="container">
                            <h4 class="fw-bold text-muted"># Modifier un module</h4>
                        </div>
                        <hr>
                        <form action="" class="form shadow-sm col-8 offset-2 rounded-2 p-4" >
                            <div class="row">
                                <div class="col-6 mt-4 me-4"  >
                                    <br>
                                    <label  class="text-muted fw-bold">* Commentaire</label><br>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea><br>
        
                                    <label  class="fw-bold text-muted">* Temps passé</label><br>
                                    <input type="date" name="" id="" class="form-control" ><br>
        
                                </div>
                                <div class="col-5">
                                    <label  class="text-muted fw-bold">* Designation</label><br>
                                    <input type="text" placeholder="Designation du module" class="form-control"><br>
                                    <label  class="text-muted fw-bold">* Item</label><br>
                                    <select name="item" id="" class="form-control"><br>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                               
    
                                <button class="btn btn-outline-danger btn-sm col-2 offset-4" type="submit">Modifier</button>
                            </div>
                        </form>                </div>
                  </div><!-- End Bordered Tabs -->
    
               
        </div>
    


</div>
</x-module>