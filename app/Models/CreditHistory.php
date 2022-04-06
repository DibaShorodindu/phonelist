<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditHistory extends Model
{
    use HasFactory;
    protected static $creditHistory;
    protected static $credit;
    protected $fillable = [
        'userId',
        'usedCredit',
        'useAbleCredit',
        'prevCredit',
        'dataPurchase',
        'date',
    ];
    public static function create($request)
    {
        self::$creditHistory = new CreditHistory();
        self::$credit = Credit::find($request->userId);
        $usableCredit = self::$credit->useableCredit;
        self::$creditHistory->userId         = $request->userId;
        self::$creditHistory->usedCredit  = count($request->chk);
        self::$creditHistory->useAbleCredit  = $usableCredit-count($request->chk);
        self::$creditHistory->prevCredit  = $usableCredit;
        self::$creditHistory->dataPurchase  = count($request->chk);
        self::$creditHistory->date  = Carbon::now();
        self::$creditHistory->save();
    }
}
