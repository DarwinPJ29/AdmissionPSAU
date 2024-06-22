<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\Province;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\LazyCollection;

class StaticData extends Controller
{
    public function SetData()
    {
        $this->Province();
        $this->Municipality();
        $this->Barangay();

        return response()->json('successfully connected to API');
    }

    public function Province()
    {
        DB::disableQueryLog();

        $filePath = public_path('table_province.csv');

        if (!file_exists($filePath)) {
            return response()->json('CSV file not found', 404);
        }

        $file = fopen($filePath, 'r');
        if (!$file) {
            return response()->json('Error opening the file', 500);
        }

        LazyCollection::make(function () use ($file) {
            while (($line = fgetcsv($file, 4096)) !== false) {
                $row = array_map('trim', array_filter($line)); //remove whitespace, and false val sa excel
                yield $row;
            }
            fclose($file);
        })
            ->skip(1) // Skip header row
            ->chunk(1000) // Process in chunks of 1000 rows
            ->each(function (LazyCollection $chunk) {
                $data = $chunk->map(function ($row) {
                    // Ensure $row has at least 3 elements before accessing them
                    $id = isset($row[0]) ? (int)$row[0] : null;
                    $name = isset($row[2]) ? $row[2] : null;

                    return compact('id', 'name');
                })->filter(function ($row) {
                    // Filter out rows where id or name is null
                    return $row['id'] !== null && $row['name'] !== null;
                });
                // Upsert - update existing records or insert new records
                Province::upsert($data->toArray(), ['id'], ['name']);
            });

        return response()->json('success');
    }

    public function Municipality()
    {
        DB::disableQueryLog();

        $filePath = public_path('table_municipality.csv');

        if (!file_exists($filePath)) {
            return response()->json('CSV file not found', 404);
        }

        $file = fopen($filePath, 'r');
        if (!$file) {
            return response()->json('Error opening the file', 500);
        }

        LazyCollection::make(function () use ($file) {
            while (($line = fgetcsv($file, 4096)) !== false) {
                $row = array_map('trim', array_filter($line)); //remove whitespace, and false val sa excel
                yield $row;
            }
            fclose($file);
        })
            ->skip(1) // Skip header row
            ->chunk(1000) // Process in chunks of 1000 rows
            ->each(function (LazyCollection $chunk) {
                $data = $chunk->map(function ($row) {
                    // Ensure $row has at least 3 elements before accessing them
                    $id = isset($row[0]) ? (int)$row[0] : null;
                    $province_id = isset($row[1]) ? (int)$row[1] : null;
                    $name = isset($row[2]) ? $row[2] : null;

                    return compact('id', 'province_id', 'name');
                })->filter(function ($row) {
                    // Filter out rows where id or name is null
                    return $row['id'] !== null && $row['province_id'] !== null && $row['name'] !== null;
                });
                // Upsert - update existing records or insert new records
                Municipality::upsert($data->toArray(), ['id'], ['province_id'], ['name']);
            });

        return response()->json('success');
    }

    public function Barangay()
    {
        DB::disableQueryLog();

        $filePath = public_path('table_barangay.csv');

        if (!file_exists($filePath)) {
            return response()->json('CSV file not found', 404);
        }

        $file = fopen($filePath, 'r');
        if (!$file) {
            return response()->json('Error opening the file', 500);
        }

        LazyCollection::make(function () use ($file) {
            while (($line = fgetcsv($file, 4096)) !== false) {
                $row = array_map('trim', array_filter($line)); //remove whitespace, and false val sa excel
                yield $row;
            }
            fclose($file);
        })
            ->skip(1) // Skip header row
            ->chunk(1000) // Process in chunks of 1000 rows
            ->each(function (LazyCollection $chunk) {
                $data = $chunk->map(function ($row) {
                    // Ensure $row has at least 3 elements before accessing them
                    $id = isset($row[0]) ? (int)$row[0] : null;
                    $municipality_id = isset($row[1]) ? (int)$row[1] : null;
                    $name = isset($row[2]) ? $row[2] : null;

                    return compact('id', 'municipality_id', 'name');
                })->filter(function ($row) {
                    // Filter out rows where id or name is null
                    return $row['id'] !== null && $row['municipality_id'] !== null && $row['name'] !== null;
                });
                // Upsert - update existing records or insert new records
                Barangay::upsert($data->toArray(), ['id'], ['municipality_id'], ['name']);
            });

        return response()->json('success');
    }
}
