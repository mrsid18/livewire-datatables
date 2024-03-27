<?php

namespace Mediconesystems\LivewireDatatables\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DatatableExportFromQuery implements FromQuery, WithHeadings, ShouldQueue
{
    use Exportable;

    public $query;
    public $headings;
    public $fileName = 'DatatableExport.xlsx';

    public function __construct($query, $headings)
    {
        $this->query = $query;
        $this->headings = $headings;
    }

    public function headings(): array
    {
        return $this->headings;
    }

    public function query()
    {
        return $this->query;
    }

    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function download()
    {
        return Excel::download($this, $this->getFileName());
    }
}