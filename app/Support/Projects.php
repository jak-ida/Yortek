<?php

namespace App\Support;

class Projects
{
    public static function all(): array
    {
        return config('projects', []);
    }

    public static function find(string $slug): ?array
    {
        foreach (self::all() as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }

        return null;
    }

    public static function slugs(): array
    {
        return array_column(self::all(), 'slug');
    }
}
