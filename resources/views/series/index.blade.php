
<x-layout title="Series">
  <a href="/series/create" class="">Adicionar serie</a>
  <ul class="font-sans antialiased dark:bg-black dark:text-white/50">
    @foreach ($series as $serie)
      <li class=""> {{ $serie->name }} </li>
    @endforeach
  </ul>

</x-layout>