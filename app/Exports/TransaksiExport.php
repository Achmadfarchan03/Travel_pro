<?php

namespace App\Exports;

use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TransaksiExport implements FromView, WithStyles, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     $transactions = collect(array("id", "travel_packages_id", "users_id","additional_visa","transaction_total","transaction_status"));
    //     $transaction = array("id", "travel_packages_id", "users_id","additional_visa","transaction_total","transaction_status");
    //     $items = Transaction::with([
    //         'details', 'travel_package', 'user'
    //     ])->get();



    //     // foreach ($items as $item) {
    //     //     $transactions->push($item->id, $item->travel_package->title, $item->user->name, $item->additional_visa, $item->transaction_total, $item->transaction_status);
    //     // }



    //     return $items->select();
    // }
    public function styles(Worksheet $sheet)
   {
       return [
           1 => ['font' => ['bold' => true]],
       ];
   }

   public function view(): View
   {
       return view('pages.admin.transaction.export_excel', [
           'items' => Transaction::with([
            'details', 'travel_package', 'user'
        ])->get()
       ]);
   }
}
