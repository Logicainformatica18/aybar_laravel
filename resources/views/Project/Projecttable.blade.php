
<table id="file_export" class=" table table-hover table-bordered table-striped table-responsive">
    <thead>
        <!-- start row -->
        <tr>
            
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                    srcset=""></th>
            <th>ID</th>
            <th>Título</th>
            <th>Imágen</th>
            <th>Descripción</th>
            <th>Detalle</th>
            

        </tr>
        <!-- end row -->
    </thead>
    <tbody>
        @foreach ($Project as $Projects)
            <tr>
         

                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success ti ti-pencil" 
                    data-bs-toggle="modal" data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                        onclick="ProjectEdit('{{ $Projects->id }}'); Up();  return false"></button>


                      
                </td>
                <td>
                 
                    <button class="btn btn-danger ti ti-trash"
                        onclick="ProjectDestroy('{{ $Projects->id }}'); return false"></button>
                </td>



                <td>{{ $Projects->id }}</td>
               
                <td>{{ $Projects->title }}</td>  
                <td>
                  @if ($Projects->image_1!="")
                  <img width="70px" src="{{url('../resource/'.$Projects->image_1 )}}" alt="" srcset="">
                    

                  @endif
                   
                 </td>                 
                <td>{{ $Projects->description }}</td>

                <td>{{ $Projects->detail }}</td>
               
             


            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <!-- start row -->
        <tr>
            <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                srcset=""></th>
        <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                srcset=""></th>
        <th>ID</th>
        <th>Título</th>
        <th>Imágen</th>
        <th>Descripción</th>
        <th>Detalle</th>
        
        </tr>
        <!-- end row -->
    </tfoot>
</table>








    <script>
 
      </script>
    