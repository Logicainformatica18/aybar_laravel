@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class="">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h1>Secciones</h1>
                            {{-- <h1 class="mb-4 mb-md-0 card-title">Secciones</h1> --}}
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Secciones
                                        </span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="datatables">
                <!-- start File export -->
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" role="form" id="section"
                            name="form"enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            {{ csrf_field() }}
                            <h6>Descripción :</h6>
                            <input type="text" name="description" id="description" class="form-control">
                            <h6>Página :</h6>
                            <select name="module" id="module"class="form-control">
                                <option value="1">Plantilla</option>
                                <option value="2">Inicio</option>
                                <option value="3">Nosotros</option>
                                <option value="4">Proyectos</option>
                                <option value="5">Blog</option>
                                <option value="6">Contacto</option>

                            </select>
                            <br>


                            <p></p>


                            <h6>Contenido :</h6>
                            <textarea id="my-textarea"style="height:'900px'" name="code">
                           
                          
                          </textarea>
                            <br>
                            <h6>Nivel :</h6>
                            <select name="nivel" id="" class="form-control">
                                <option value="1">Nivel 1</option>
                                <option value="2">Nivel 2</option>
                                <option value="3">Nivel 3</option>
                                <option value="4">Nivel 4</option>
                                <option value="5">Nivel 5</option>
                                <option value="6">Nivel 6</option>
                                <option value="7">Nivel 7</option>
                                <option value="8">Nivel 8</option>
                                <option value="9">Nivel 9</option>
                                <option value="10">Nivel 10</option>

                            </select>
                              <link rel="stylesheet" href="{{ asset('assets/libs/@claviska/jquery-minicolors/jquery.minicolors.css') }}">

    
                            {{-- <h6>Color :</h6>
              

                            <div class="row">
                                <div class="col-lg-12">
                                  <div class="mb-3">
                                
                                    <input type="text"name="color" id="position-bottom-left" class="form-control demo" data-position="bottom left" value="#13434d" />
                                  </div>
                                  
                                </div>
                              </div>
                            <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js" ></script>
                            <script src="{{ asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
                            <script src="{{ asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.min.js') }}"></script>
                            <script src="{{ asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
                            <script src="{{ asset('assets/libs/@claviska/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
<script>
    $(".demo").each(function () {
  $(this).minicolors({
    control: $(this).attr("data-control") || "hue",
    defaultValue: $(this).attr("data-defaultValue") || "",
    format: $(this).attr("data-format") || "hex",
    keywords: $(this).attr("data-keywords") || "",
    inline: $(this).attr("data-inline") === "true",
    letterCase: $(this).attr("data-letterCase") || "lowercase",
    opacity: $(this).attr("data-opacity"),
    position: $(this).attr("data-position") || "bottom left",
    swatches: $(this).attr("data-swatches")
      ? $(this).attr("data-swatches").split("|")
      : [],
    change: function (value, opacity) {
      if (!value) return;
      if (opacity) value += ", " + opacity;
      if (typeof console === "object") {
        console.log(value);
      }
    },
    theme: "bootstrap",
  });
});

</script> --}}


 
                            <h6>Detalle : </h6>
                            <input type="text" name="detail" id="detail" class="form-control">
                            <p></p>
                            <input type="button" value="Nuevo" class="btn mb-1 me-1 bg-primary-subtle text-primary"
                                onclick="New();$('#section')[0].reset();reset_textarea();" name="new">

                            <input type="button" value="Guardar" class="btn mb-1 me-1 bg-success-subtle text-success"
                                id="create" onclick="sectionStore()" name="create">
                            <input type="button" value="Modificar"
                                class="btn mb-1 me-1 bg-danger-subtle text-danger"id="update" onclick="sectionUpdate();"
                                name="update">
                            <p></p>
                        </form>

                        <p>

                        </p>
                        <p class="card-subtitle mb-3">

                        </p>
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Exportar</h4>
                        </div>
                        <div class="table-responsive"id="mycontent">
                            @include('section.sectiontable')
                        </div>
                    </div>
                </div>


                <!-- end Language file -->

                <!-- end Setting defaults -->


                <!-- end Custom toolbar elements -->
            </div>
        </div>
    </div>

    <div class="button-group">


    
        <!-- /.modal -->


        <!-- /.modal -->
    </div>

@endsection