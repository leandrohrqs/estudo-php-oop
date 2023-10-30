<?php

interface Crud
    {
    public function create();
    public function read();
    public function update();
    public function delete();
    }

class Noticias implements Crud
    {
    public function create() {
        // Lógica para criar uma notícia
    }

    public function read()
    {
        // Lógica para ler uma noticia
    }

    public function update()
    {
        // Lógica para atualizar uma noticia
    }

    public function delete()
    {
        // Lógica para deletar uma noticia
    }

}