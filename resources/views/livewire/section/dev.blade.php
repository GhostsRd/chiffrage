<div >
    <div class="container   ">
        <h3  id="titre-prof">Items</h3>
        <p id="text-prof">Page  / Gerer Items</p>   
      
    </div>  
    <div class="container  " style="font-size: 0.75rem">
        <div class="bg-white rounded-3 shadow-sm">
            <table class="card-body  table table-striped-white table-sm border-0 shadow-sm rounded-3  text-capitalize "  >
               <div class="row p-2">
                <div class="col-lg-3">
                    <h5 id="titre-prof" class="m-2 fw-bold">Table d'item</h5>
                </div>
                <div class="col-lg-5">
                    <input type="text" name="" id="" class="border-0  form-control-sm shadow-sm rounded-5 w-100" placeholder="Recherche...">
                </div>
               </div>
           
                <thead>
                    <th class="p-2 fw-bold border-0 text-center">
                        <input type="checkbox" name="" id="" >
                    </th>
                    <th class="p-2 fw-bold border-0">N°</th>
                    <th class="p-2 fw-bold border-0">id projet</th>
                    <th class="p-2 fw-bold border-0 "> séction</th>
                    <th class="p-2 fw-bold border-0">Désignation </th>
                    <th class="p-2 fw-bold border-0">duré </th>
                    <th class="p-2 fw-bold border-0" colspan="2">action</th>
                    
                   </thead>
               <tbody>
                
                   @foreach ($sections as $sec)
                   @foreach ($items as $item)
                   @if ($sec->id == $item->id_section)
                        
           
                        <tr>
                            <td class="bg-white p-2 border-0 text-center" data-aos="zoom-in" data-aos-delay="300">
                            <input type="checkbox" name="" id="">    
                            </td>
                            <td class="bg-white p-2 border-0" data-aos="zoom-in" data-aos-delay="300">{{$item->id}}</td>
                            <td class="bg-white  border-0 " data-aos="zoom-in" data-aos-delay="400">{{$item->id_projet}}</td>
                            <td class="bg-white  border-0" data-aos="zoom-in" data-aos-delay="500">
                              
                                {{$sec->designation}}
                               
                            </td>
                            <td class="bg-white  border-0" data-aos="zoom-in" data-aos-delay="600">{{$item->designation}}</td>
                            <td class="bg-white  border-0" data-aos="zoom-in" data-aos-delay="700">
                                @if ($item->temps_passe>1)
                                {{$item->temps_passe}} jours
                            @else
                                {{$item->temps_passe}} jour
                            @endif    
                            </td>
                            <td class="bg-white  border-0" data-aos="zoom-in" data-aos-delay="800">
                                <a wire:click="remove('{{$item->id}}')">
                                <svg class="icon-32 text-danger    " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                            </a>
                            </td>
                        </tr>
                        @endif
                   @endforeach
                    @endforeach
               
    
                       
                       
                  
               </tbody>
               
            </table>
        </div>
    </div>
</div>