<?php

use App\Pagina;
use Illuminate\Database\Seeder;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo', '=', 'sobre')->count();

        if ($existe) {
            $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
        } else {
            $paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "Título da Empresa";
        $paginaSobre->descricao = "Descrição breve sobre a empresa";
        $paginaSobre->texto = "Texto sobre a empresa";
        $paginaSobre->imagem = "site/img/modelo_img_home.jpg";
        $paginaSobre->tipo = "sobre";

        $paginaSobre->save();

    }
}
