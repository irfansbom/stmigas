<?php

namespace App\Exports;

use App\Models\perusahaan;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PerusahaanExport implements FromQuery, WithHeadings, WithMapping, WithStyles, WithColumnWidths,WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // use Exportable;

    public function query()
    {
        return Perusahaan::query()->orderby('no_urut');
    }

    public function map($perusahaan): array
    {
        return [
            $perusahaan->nama_perusahaan,
            $perusahaan->user->pluck('nama')->implode("\n"),
            $perusahaan->user->pluck('no_hp')->implode("\n"),
            $perusahaan->alamat_perusahaan
        ];
    }

    public function columnFormats(): array
    {
        return [
            'C' =>NumberFormat::FORMAT_NUMBER
        ];
    }
    public function headings(): array
    {
        return ['Nama Perusahaan', 'Admin','No HP', 'Alamat'];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:D50')->getAlignment()->setWrapText(true);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 35,
            'B' => 30,
            'C' => 30,
            'D' => 50,
        ];
    }


}
