<h2>Data fakultas</h2>
@foreach ($fakultas as $item)
        {{ $item->nama }} - {{ $item->singkatan }} - {{ $item->dekan }} <br/>
    
@endforeach