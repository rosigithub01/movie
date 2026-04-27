<?php

namespace App\Interfaces;

interface MovieRepositoryInterface
{
    public function getAllMovies($perPage = 6, $search = null);
    public function getAllMoviesData($perPage = 10);
    public function getMovieById($id);
    public function createMovie(array $data);
    public function updateMovie($id, array $data);
    public function deleteMovie($id);
}