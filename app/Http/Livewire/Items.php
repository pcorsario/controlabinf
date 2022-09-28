<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;
class Items extends Component
{
    public $items, $n_item, $marca, $monitor_serie,$procesador, $memoria,$disco_duro, $memoria_serie, $regulador_serie,$ups_serie,
    $teclado_serie,$mouse_serie,$dualboot, $estado, $id_item;
    public $modal=false;
    public function render()
    {
        $this->items = Item::all();
        return view('livewire.items.items');
    }

    public function crear()
    {
        $this->limpiar();
        $this->openModal();
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function limpiar()
    {
        $this->n_item = '';
        $this->marca = '';
        $this->monitor_serie = '';
        $this->procesador = '';
        $this->memoria = '';
        $this->disco_duro = '';
        $this->memoria_serie = '';
        $this->regulador_serie = '';
        $this->ups_serie = '';
        $this->teclado_serie = '';
        $this->mouse_serie = '';
        $this->dualboot = '';
        $this->estado = '';
    }

    public function guardar()
    {
        Item::updateOrCreate(
            ['id' => $this->id_item],
            [
                'n_item' => $this->n_item,
                'marca' => $this->marca,
                'monitor_serie' => $this->monitor_serie,
                'procesador' => $this->procesador,
                'memoria' => $this->memoria,
                'disco_duro' => $this->disco_duro,
                'memoria_serie' => $this->memoria_serie,
                'regulador_serie' => $this->regulador_serie,
                'ups_serie' => $this->ups_serie,
                'teclado_serie' => $this->teclado_serie,
                'mouse_serie' => $this->mouse_serie,
                'dualboot' => $this->dualboot,
                'estado' => $this->estado,
            ]
        );
        session()->flash('message',
        $this->id_item ? 'Actualizacion exitosa' : 'Guardado correctamente');
        $this->cerrarModal();
        $this->limpiar();
    }
}
