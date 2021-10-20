<?php


namespace App\Helper;


class File
{
    public static  function storeImage($data): string
    {
        $destinationPath = 'uploads';
        $imageFileName = time().'-'.$data->image->getClientOriginalName();
        $data->image->move(public_path($destinationPath), $imageFileName);
        return $imageFileName;
    }
}
