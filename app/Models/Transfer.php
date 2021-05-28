<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Transfer extends Model
{
    use HasFactory;

    public static function transfer_token($from_id,$to_id,$tokens)
    {   
        $from = User::find($from_id);
        if($from->available_tokens >= $tokens)
        {
            $to = User::find($to_id);

            $from->available_tokens = $from->available_tokens - $tokens;
            $from->save();

            $to->available_tokens = $to->available_tokens + $tokens;
            $to->save();

            return 200;
        }
        return 401;
    }
}
