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
        $paginaSobre->imagem = "img/modelo_img_home.jpg";
        $paginaSobre->mapa= '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14682.45129722063!2d-52.46253585!3d-23.074652!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94929661c8720ce5%3A0x8f6da5f50bf3a4ce!2sShopping+Cidade+Paranava%C3%AD!5e0!3m2!1spt-BR!2sbr!4v1528963196840" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaSobre->tipo = "sobre";

        $paginaSobre->save();

    }
}
