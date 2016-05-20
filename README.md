# LARAVERL 5.2 Y JCROP

Ejemplo y uso del [Jcrop](http://deepliquid.com/content/Jcrop.html) y [Laravel 5.2](https://laravel.com/docs/5.2), protipo 1.0

## route.php


ruta de la vista

Route::get('/','CorteController@corte');


ruta a la que se envian los datos 

Route::post('/save','CorteController@saveimage');


## archivos de interes

resources/views/cortes/layout.blade.php

## Autor

fredy mauricio garcia mona

mauriciogmona@gmail.com

## License

[MIT license](http://opensource.org/licenses/MIT).
