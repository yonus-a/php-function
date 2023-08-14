<?php

$books = [
  ['id' => 1, 'title' => 'You Dont Know Js', 'author' => 'john', 'page' => 1000],
  ['id' => 2, 'title' => 'Learn Pyphon', 'author' => 'anna', 'page' => 200],
  ['id' => 3, 'title' => 'the gift of imperfection', 'author' => 'helen', 'page' => 300]
];

function addBook($id, $title, $author, $page): void
{
  global $books;
  $books[] = [
    'id' => $id,
    'title' => $title,
    'author' => $author,
    'page' => $page
  ];
}

function getBook($id): array
{
  global $books;
  return array_filter(
    $books,
    function ($val) use ($id) {
      return ($val['id'] == $id);
    }
  );
}

function deleteBook($id): void
{
  global $books;
  foreach ($books as $key => $book) {
    if ($book['id'] === $id) {
      unset($books[$key]);
    }
  }
}

function updateBook($id, $fild, $value): void
{
  global $books;
  foreach ($books as $key => $book) {
    if ($book['id'] === $id) {
      $books[$key][$fild] = $value;
    }
  }
}

