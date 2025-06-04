<?php

namespace App\Services;

class CompanyServices
{
    public function index()
    {
        $columns = [
            'id', 'reg_no', 'title', 'phone', 'email', 'full_address', 'created_by', 'updated_by'
        ];

        $start = request()->input('start', 0);
        $length = request()->input('length', 10);
        $orderColumnIndex = request()->input('order.0.column', 0);
        $orderColumn = $columns[$orderColumnIndex] ?? 'id';
        $orderDir = request()->input('order.0.dir', 'asc');

        $totalRecords = \App\Models\Company::count();

        $companies = \App\Models\Company::latest('id')->with('createdUser', 'updatedUser')->orderBy($orderColumn, $orderDir)
            ->skip($start)
            ->take($length)
            ->get();

        $data = $companies->map(function ($company) {
            return [
                'id' => $company->id,
                'reg_no' => $company->reg_no,
                'title' => $company->title,
                'phone' => $company->phone,
                'email' => $company->email,
                'full_address' => $company->full_address,
                'created_by' => $company->createdUser->name . ' ' . $company->createdUser->surname,
                'created_at' => $company->created_at->format('d.m.Y H:i'),
                'updated_by' => $company->updatedUser?->name . ' ' . $company->updatedUser?->surname,
                'updated_at' => $company?->updated_by ? $company->updated_at->format('d.m.Y H:i') : null,
            ];
        });

        return response()->json([
            'draw' => intval(request()->input('draw')),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecords,
            'data' => $data
        ]);


    }
}
