<?php

  

namespace App\Exports;


use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

  
class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {

        return User::select( 'matriculation_number', 'name', 'vocations',  'academic_session',   'college',   'department', 'level' )->get();

    }

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function headings(): array

    {

        return [ 'Matriculation Nnumber', 'Name', 'Vocations',  'Academic Session',   'College',   'Department', 'Level', ];

    }


   /*   
    'name',n'matriculation_number', 'vocations',  'academic_session',   'college',   'department', 'level', 
    
    'gender',    
     
 */
}