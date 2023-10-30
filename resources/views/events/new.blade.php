@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div class="container d-flex justify-content-center align-items-center h-100 align-content-center eventos-container mt-5">
        <div class="card text-center w-100 text-light" style="background: rgb(43, 48, 53)">
          <form action="/events/create" method="POST" class="p-5 w-100" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Digite um título...">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Digite a cidade do Evento...">
                    </div>
                    <div class="mb-3">
                        <label for="private" class="form-label">Privacidade</label>
                        <select class="form-select" id="private" name="private" aria-label="Selecione a privacidade">
                            <option value="0" selected>Não privado</option>
                            <option value="1">Privado</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="image" class="form-label">Carregue uma imagem</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea class="form-control" id="description" style="height: 7.7rem;" name="description" placeholder="Digite uma descrição..."></textarea>
                    </div>
                </div>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn w-50 text-light" style="background: rgb(168 111 255);">Enviar</button>
            </div>
          </form>
        </div>
    </div>
    
@endsection