<?php

namespace App\Listeners;

use App\Events\ProjectSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Cache\Store;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class OptimizarImagen
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ProjectSaved  $event
     * @return void
     */
    public function handle(ProjectSaved $event)
    {
        //Definir logica para optimizar
        $imagen = Image::make(Storage::get($event->videojuego->imagen));
        $imagen->widen(600)
        ->limitColors(255)
        ->encode();

        Storage::put($event->videojuego->imagen,(string) $imagen );
    }
}
