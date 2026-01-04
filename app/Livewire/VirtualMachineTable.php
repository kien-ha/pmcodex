<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\VirtualMachine;

class VirtualMachineTable extends DataTableComponent
{
    protected $model = VirtualMachine::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setSearchLive();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make("VMID", "vmid")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("CPU Cores", "cores")
                ->sortable(),
            Column::make("VMGenID", "vmgenid")
                ->sortable(),
            Column::make("RAM", "ram")
                ->sortable(),
            Column::make("IPv4")
                ->label(
                    fn($row) => $row->networks_ipv4 // This calls your Accessor
                )
                ->html(),
        ];
    }
}
