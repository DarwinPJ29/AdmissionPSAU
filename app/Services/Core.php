<?php

namespace App\Services;

use Carbon\Carbon;

class Core
{
    public static function GetModelName($modelName)
    {
        return "App\\Models\\" . $modelName;
    }

    public static function Save($modelName, array $data, $id)
    {
        $returnId = 0;
        if ($id == 0) {
            $create = self::GetModelName($modelName)::create($data);
            $returnId = $create->id;
        } else {
            $find = self::GetModelName($modelName)::find($id);
            $find->update($data);
            $returnId = $find->id;
        }
        return $returnId;
    }
}
