@extends('layout.master')


@section('content')
<main class="container">


  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Список задач
      </h3>
    

        @each('tasks.item', $tasks, 'task')

</main>
@endsection