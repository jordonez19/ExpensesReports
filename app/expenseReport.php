<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expenseReport extends Model
{
    protected $table = 'table_expense_report';

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
