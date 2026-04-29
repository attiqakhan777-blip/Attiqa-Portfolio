<?php

namespace Database\Seeders;

use App\Models\ProjectImage;
use Illuminate\Database\Seeder;

class ProjectImageSeeder extends Seeder
{
    public function run()
    {
        ProjectImage::where('project_id', 3)->delete(); // Clear old data

        $images = [
            'Screenshot 2026-04-29 112152.png',
            'Screenshot 2026-04-29 112508.png',
            'Screenshot 2026-04-29 112553.png',
            'Screenshot 2026-04-29 112626.png',
            'Screenshot 2026-04-29 112747.png',
            'Screenshot 2026-04-29 112842.png',
            'Screenshot 2026-04-29 114716.png',
            'Screenshot 2026-04-29 114928.png',
            'Screenshot 2026-04-29 115013.png',
            'Screenshot 2026-04-29 115056.png',
            'Screenshot 2026-04-29 115907.png',
            'Screenshot 2026-04-29 115950.png',
            'Screenshot 2026-04-29 120015.png',
            'Screenshot 2026-04-29 120034.png',
            'Screenshot 2026-04-29 120132.png',
            'Screenshot 2026-04-29 120157.png',
            'Screenshot 2026-04-29 120237.png',
            'Screenshot 2026-04-29 120257.png',
            'Screenshot 2026-04-29 120342.png',
        ];

        foreach ($images as $filename) {
            ProjectImage::create([
                'project_id' => 3,
                'image_path' => 'projects/' . $filename,
                'caption'    => str_replace(['Screenshot 2026-04-29 ', '.png'], '', $filename)
            ]);
        }

        echo "✅ " . count($images) . " images added to Project 3!\n";
    }
}