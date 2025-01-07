<x-layout title="Adicionar nova serie">
  <form action="/series/salve" method="POST">
    @csrf
    <div>
      <label for="name" class=""> Nome: </label>
      <input type="text" name="name" id="name" placeholder="Nome da série">
    </div>
    
    <button type="submit" style="margin-top: 10px;">Adicionar</button>
  </form>
</x-layout>