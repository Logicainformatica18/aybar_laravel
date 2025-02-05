<?php
use Illuminate\Support\Str;
function datebirth($day, $month, $year)
{
    //       datebirth
    if ($day < 10) {
        $day = "0" . $day;
    }
    if ($month < 10) {
        $month = "0" . $month;
    }
    $datebirth =    $year . "-" . $month . "-" . $day;
    return $datebirth;
}


function fileStore($photo, $directory)
{
    if ($photo) {
        $uniqueId = uniqid(); // Genera un identificador único

        // Obtener la extensión del archivo
        $extension = $photo->getClientOriginalExtension();

        // Obtener el nombre original sin la extensión
        $filename = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);

        // Sanitizar el nombre del archivo (convertir a slug)
        $sanitizedFilename = Str::slug($filename, '-'); // Convierte a minúsculas y reemplaza espacios/tildes

        // Crear el nombre final con timestamp + ID único + nombre limpio
        $imageName = time() . "_" . $uniqueId . "_" . $sanitizedFilename . "." . $extension;

        // Mover el archivo al directorio especificado
        $photo->move($directory, $imageName);

        return $imageName;
    }
    return null;
}

function fileUpdate($photo, $directory)
{
    fileDestroy($photo, $directory);
    return fileStore($photo, $directory);
   
   
}
function fileDestroy($photo, $directory)
{
    try {
        $image_path = public_path() . '/' . $directory . '/' . $photo;
        unlink($image_path);
    } catch (\Exception $e) {
               //   return  $e->getMessage();
               return "<div style='background-color:red'> ERROR </div>";
    }
}
function saludo(){
    return "hola";
}
